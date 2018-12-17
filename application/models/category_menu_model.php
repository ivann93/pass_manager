<?php

class Category_menu_model extends CI_Model {

    public function get_all_category_data()
    {
        // Get the complete category_menu table
        $query = $this->db->order_by('parent_id','asc')
            ->get('categories');

        if( $query->num_rows() > 0 )
        {
            return $query->result_array();
        }

        return FALSE;
    }
}