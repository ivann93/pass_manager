<!DOCTYPE html>  
<html>  
<?php include_once('header.php'); ?> 
<head>  
    <title></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url().'assets/tags.css' ?>"/>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>  

<style>
    
</style>

<body>     
   
   <table id="tableProjects">
              <tr>
                
              </tr>
                 <?php
                    foreach($records as $row):
                  ?>
              <tr>
                
                <td><?=$row->name?></td> 
                <td><a href="#" class="delete_data" id="<?php echo $row->id; ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
              </tr>

                <?php
                    endforeach;
                 ?>
          </table>
    
</body>  
</html>

