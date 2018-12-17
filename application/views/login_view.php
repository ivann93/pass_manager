
<!DOCTYPE html>
<html>
<?php include_once('headerFirst.php'); ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
/*
form {border: 3px solid #f1f1f1;}
*/

/*input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


.container {
    padding: 16px;
    padding-left: 38%;
    padding-right: 38%;
    
}

h2 {
    padding-top: 10%;
}
   
}
*/

img 
{
    margin-left: 25%;
    width: 50%;
    height: 50%;
}




.buttLogin 
{
    background-color: DodgerBlue;;
    color: white;
 
    border: none;
    cursor: pointer;
    margin-left: 7%;
    margin-top: 1%;
    width: 15%;
}

#logForm3
{
    margin-top: -23%;
    margin-left: 42%;
    width: 50%;
    height: 50%;
}

button:hover {
    opacity: 0.8;
}

footer {
      margin-top: 2.5%;
    }

#inputUser
{
    width: 30%;
}

#inputPassword
{
    width: 30%;
}
</style>

<body>

<!-- <h2 align="center">Login Form</h2>


  <div class="container">
    
    <?php echo validation_errors(); ?>
    <?php echo form_open('Main/login_action'); ?>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
   
  </div>

  
</form> -->
<div class="container">
        <?php echo validation_errors(); ?>
        <?php echo form_open('Main/login_action'); ?>

        <img src="<?php echo base_url(); ?>assets/images/padlock1.png" alt="padlock" id="slPadlock">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <form>
                <div id="logForm3">
                    <label for="uname" class="labUser"><b>Username</b></label><br>
                    <input type="text" class="inputUser" placeholder="Enter Username" name="username" id="inputUser" required><br>

                    <label for="psw" class="labPass"><b>Password</b></label><br>
                    <input type="password" class="inputPass" placeholder="Enter Password" name="password" id="inputPassword" required><br>

                    <button type="submit" class="buttLogin">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
  <h3>Copyright &copy; Ivan | All rights reserved<h3>
</footer>


</body>
</html>
