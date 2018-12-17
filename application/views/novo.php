<!DOCTYPE HTML>
<html>
<?php include_once('headerFirst.php'); ?>
	<head>
		
	</head>
<style> 
 #tableProjects 
    { 
    	width: 20%;
      border-collapse: collapse;
    }

    #tableProjects td, #tableProjects th 
    {
        border: 1px solid #ddd;
        padding: 5px 0px;
    }

    #tableProjects tr:nth-child(even){background-color: #f2f2f2;}

    #tableProjects tr:hover {background-color: #ddd;}

    #logoutButton
    {
      text-decoration:underline;
      margin-left: 93%;
      display: inline-block;
    }

    #back
    {
      text-decoration:underline;
      margin-left: 1%;
      display: inline-block;
    }

    footer {
      margin-top: 24%;
    }

</style>

	<body>
		 <a href="<?php echo base_url()."index.php/Main/data";?>" id="back"><p>Back</p></a>
     <a href='<?php echo base_url()."index.php/Main/logout"; ?>' id="logoutButton"><i class="fa fa-sign-out"></i>Logout</a>

		<table id="tableProjects" align="center">
              <tr>
              	<th>Project's Url</th>
                <th>Description</tr>
              </tr>
                 <?php
                    foreach($records as $row):
                  ?>
              <tr>
                <td><?=$row->url?></td>
                <td><?=$row->description?></td> 
               
              </tr>

                <?php
                    endforeach;
                 ?>
          </table>

          <footer class="container-fluid text-center">
            <h3>Copyright &copy; Vestel Company | All rights reserved<h3>
          </footer>

	</body>
</html>



