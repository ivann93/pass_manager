<?php

class Category_menu extends CI_Controller {

    private $menu            = '';
    private $tree            = '';
    private $categories      = array();

    /**
     * Class constructor
     */
    public function __construct()
    {
        parent::__construct();

        // Load resources
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('category_menu_model', 'cat_model');
    }

    /**
     * Display the category menu page
     */
    public function index()
    {
        // Get all category data from database
        if( $category_data = $this->cat_model->get_all_category_data() )
        {
            // Reformat query results as new array
            foreach( $category_data as $k => $v )
            {
                $this->categories[ $v['parent_id'] ][ $v['category_id'] ] = $v['name'];
            }

            // Initiate menu creation
            $this->_make_category_menu( $this->categories[0], '', 0 );

            // Initiate json creation
            $this->_make_category_tree( $category_data );

            // Send menu and category data to view
            $view_data = array(
                'category_menu' => $this->menu,
                'category_tree' => $this->tree,
                'category_data' => $category_data
            );
        }
        else
        {
            $view_data['category_menu'] = 'Error: No Menu.';
        }

        $this->load->view( 'category_menu', $view_data );
    }

    /**
     * Recursive method takes formatted array of categories and turns it into a menu.
     *
     * @param   array   the current categories array to process
     * @param   string  the path between the top level and the current level (all parents)
     * @param   int     how many levels deep we are in nested lists
     */
    private function _make_category_menu( $child, $parents='', $level )
    {
        if( $level > 0 )
        {
            // Start a submenu list:
            $this->menu .= '<ul class="submenu-level-' . $level . '">';
        }

        // Loop through each child
        foreach( $child as $cat_id => $cat_name )
        {
            // Display the top level header and start submenu wrapper
            if( $level === 0 )
            {
                $this->menu .= 
                    '<h4>' . anchor( 'category' . strtolower( $parents . '/' . $cat_name ), $cat_name ) . '</h4>
                    <div class="submenu-div">
                        <div class="submenu-listbox">
                ';
            }
            else
            {
                // Start a list item
                $this->menu .= '<li>' . anchor( 'category' . strtolower( $parents . '/' . $cat_name ), $cat_name );
            }

            // Check for children
            if( isset( $this->categories[$cat_id] ) )
            {
                // Add parents to URL if applicable
                $new_parents = $parents . '/' . $cat_name;

                // Do recursion with new level:
                $new_level = $level + 1;

                $this->_make_category_menu( $this->categories[$cat_id], $new_parents, $new_level );
            }

            // Close the submenu wrapper
            if( $level === 0 )
            {
                $this->menu .= '
                        </div>
                    </div>
                ';
            }
            else
            {
                // Complete the list item:
                $this->menu .= '</li>';
            }
        }

        if( $level > 0 )
        {
            // Close a submenu list:
            $this->menu .= '</ul>';
        }
    }

    private function _make_category_tree( $category_data )
    {
        foreach( $category_data as $k => $v )
        {
            $count = 0;
            $v['href'] = '#'. strtolower(str_replace(' ', '', $v['name']));

            foreach( $category_data as $k2 => $v2 )
            {
                // if child has this parent, count
                if( $v['category_id'] == $v2['parent_id'] )
                    $count++;
            }

            if( $count )
                $v['tags'] = array((string)$count);

            $mod[] = $v;
        }

        $tree = $this->buildTree($mod);
        $this->tree = json_encode( $tree, JSON_PRETTY_PRINT );
    }

    private function buildTree(array $elements, $parentId = 0) {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['category_id']);
                if ($children) {
                    $element['nodes'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }

    private function array_unset_recursive(&$array, $remove) {
        if (!is_array($remove)) $remove = array($remove);
        foreach ($array as $key => &$value) {
            if (in_array($value, $remove)) unset($array[$key]);
            else if (is_array($value)) {
                array_unset_recursive($value, $remove);
            }
        }
    }
}