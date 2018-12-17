
<!DOCTYPE HTML>

<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url().'public/css/bootstrap.css' ?>"/>
	</head>
<style>

    #logged-in
    { 
      display: inline-block;
      margin-left: -10%;
      margin-top: 12%;
      color: #00BFFF;
    }

    #logoutButton
    {
       display: inline-block;
      text-decoration:underline;
      color: DodgerBlue;
    }


/* Dropdown Button */
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding-top: 3px;
    padding-bottom: 3px;
    width: 80px;
    font-size: 16px;
    border: none;
    cursor: pointer;
     box-sizing: border-box;
    
      border-radius: 4px;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100px;
    margin-left: -15px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}   

.vl {
    border-left: 4px solid grey;
    height: 52px;
}

</style>


	<body>
		<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand"><p style="font-size:25px;"><b>Password Manager</b></p></a>
        </div>

        <ul class="nav navbar-nav">
          <div class="vl"></div>
        </ul>

        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url()."index.php/Main/data";?>" id="prLink">Projects</a></li>
          <li><a href="<?php echo base_url()."index.php/Main/users";?>" id="usLink">Users</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <div class="dropdown" id="logged-in">
      <button onclick="myFunction()" class="dropbtn">Logout<span class="caret"></span></button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#"><?php echo $this->session->userdata('username'); ?></a>
        <a href='<?php echo base_url()."index.php/Main/logout"; ?>' id="logoutButton"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
    </div>
        </ul>
      </div>
  </nav>
	</body>
</html>