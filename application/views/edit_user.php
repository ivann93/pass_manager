<!DOCTYPE html>  
<html>  
<?php include_once('headerFirst.php'); ?>
<head>  
    <title>users view</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/tags.css' ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>


    #logged-in
    { 
      display: inline-block;
      margin-left: 28%;
      color: #00BFFF;
    }

    #logoutButton
    {
      text-decoration:underline;
      color: DodgerBlue;
    }

    footer {
      margin-top: 28%;
    }
</style>

<body>
<div id="logged-in">
<a href="<?php echo base_url()."index.php/Main/users";?>" id="back"><p>Back</p></a>
 <a href='<?php echo base_url()."index.php/Main/logout"; ?>' id="logoutButton"><i class="fa fa-sign-out"></i>Logout</a>
</div>

	<h1></h1>
		<form action="<?php echo base_url().'/index.php/UsersController/update';?>" method="post">
			<?php echo validation_errors(); ?>
			<?php foreach($user as $row) {?>
			<center><table>
				<tr>
					<td><input type="text" value="<?php echo $row->ID; ?>" name="ID" hidden /></td>
				</tr>

				<tr>
					<td>Username</td>
					
					<td><input type="text" value="<?php echo $row->username; ?>" name="username" placeholder="username" /></td>
				</tr>

				<tr>
					<td>Password</td>
					
					<td><input type="text" value="<?php echo $row->password; ?>" name="password" placeholder="password" readonly /></td>
				</tr>

				<tr>
					<td>Tag</td>
					
					<td><input type="text" value="<?php echo $row->tag; ?>" name="tag" placeholder="tag" /></td>
				</tr>

				<tr>
					<td>Level</td>
					
					<td><input type="text" value="<?php echo $row->level; ?>" name="level" placeholder="level" /></td>
				</tr>

				<tr>
					<td><input type="submit" value="Save" name"submit"/></td>
				</tr>
			</table></center>
			<?php } ?>
		</form>



		<footer class="container-fluid text-center">
		  <h3>Copyright &copy; Ivan | All rights reserved<h3>
		</footer>
</body>
</html>