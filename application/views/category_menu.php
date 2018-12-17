<?php include_once('header.php'); ?>
<!DOCTYPE html>  
<html>  
<head>  
    <title></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url().'assets/tags.css' ?>"/>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>

</head>  
<style>



</style>
<script>
  var mytree = [
  {
    text: 'Parent 1',
    href: '#parent1',
    tags: ['4'],
    nodes: [
      {
        text: 'Child 1',
        href: '#child1',
        tags: ['2'],
        nodes: [
          {
            text: 'Grandchild 1',
            href: '#grandchild1',
            tags: ['0']
          },
          {
            text: 'Grandchild 2',
            href: '#grandchild2',
            tags: ['0']
          }
        ]
      },
      {
        text: 'Child 2',
        href: '#child2',
        tags: ['0']
      }
    ]
  },
  {
    text: 'Parent 2',
    href: '#parent2',
    tags: ['0']
  },
  {
    text: 'Parent 3',
    href: '#parent3',
     tags: ['0']
  }
];
</script>

<body>  


<div id="category-menu">
    <?php echo $category_menu; ?>
</div>

<div>
    <table>
        <caption>Category Data From Database</caption>
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Parent ID</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $i = 0;

                foreach( $category_data as $row )
                {
                    $class = ( $i % 2 ) ? ' class="odd"' : '';

                    echo '
                        <tr' . $class . '>
                            <td>' . $row['category_id'] . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['parent_id'] . '</td>
                        </tr>
                    ';

                    $i++;
                }
            ?>

        </tbody>
    </table>
</div>

<h1>JSON</h1>
<pre>
    <?php echo $category_tree; ?>
</pre>





    <p><br/><p>
      <div class="container">
      <?php
                $i = 0;

                foreach( $category_data as $row )
                {
                    $class = ( $i % 2 ) ? ' class="odd"' : '';

                    echo '
                        <tr' . $class . '>
                            <td>' . $row['category_id'] . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['parent_id'] . '</td>
                        </tr>
                    ';

                    $i++;
                }
            ?>

        <div id="tree">
        </div>
      </div>

</body>  
<script>
$('#tree').treeview({data: mytree});
</script>
</html>  
