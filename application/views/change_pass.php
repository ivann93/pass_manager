<!DOCTYPE html>  
<html>  

<head>  
    <title>users view</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/tags.css' ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>      

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>      
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
</head>  

<style>

    #tableUsers 
    {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        
        width: 105%;
        margin-left: -1.8%;
    }

    #tableUsers td, #tableUsers th 
    {
        border-bottom: 1px solid DodgerBlue;
        padding: 5px 0px;
         border-top: 1px solid DodgerBlue;
    }

    /*#tableUsers tr:nth-child(even){background-color: #f2f2f2;}*/

    #tableUsers tr:hover {background-color: #ddd;}

    /*#searchBar
    {
      display:inline-block;
      margin-left: 70%;
    }

    #prLink
    {
      display:inline-block;
      margin-left: 3px;
    }

    #usLink
    {
      display:inline-block;
      margin-left: 3px;
    }

    #logoutButton
    {
      text-decoration:underline;
    }*/

   


    input[type=text],[type=password]
    {
      border-radius: 4px;
      border: 1px solid grey;
      box-sizing: border-box;
    }

    #header
    {
      background-color: #F5F5F5;
      width: 100%;
    }

    #naslov1
    {
      display: inline-block;
      margin-left: 40%;  

    }
 
     #logged-in
    { 
      display: inline-block;
      margin-left: -10%;
      margin-top: 23%;
      color: #00BFFF;
    }

    #searchBar
    {
      display:inline-block;
      margin-top: 22px;
      margin-right: 10px;
      box-sizing: border-box;
      border: 1px ;
      border-radius: 5px;
    }


    #logoutButton
    {
      display: inline-block;
      text-decoration:underline;
      color: DodgerBlue;
    }

   

    #search2
    {
        display: inline-block;
        float:right;
    }

    

    .vertical-line 
    {
      border-left: 2px solid #C0C0C0;
      height: 580px;
    }

     footer {
      margin-top: 2%;
    }

    .hr-line
    {
      border-top: 2px solid #C0C0C0;
      width: 350%;
      margin-left: -10%;
    }

     #pagination a, #pagination strong
    {
      background: #e3e3e3;
      padding: 4px 7px;
      text-decoration: none;
      border: 1px solid #3cac9c9;
      color: DodgerBlue;
      font-size: 13px;
    }

    #pagination strong, #pagination a:hover
    {
      font-weight: normal;
      background: #cac9c9;

    }

   

    #p1, #p2, #p3, #p4, #p5
    {
      width: 35%;
    }

/*  #feedback { font-size: 1.4em; }
  #tableUsers .ui-selecting { background: #FECA40; }
  #tableUsers .ui-selected { background: #F39814; color: white; }
  #tableUsers { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #tableUsers li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }*/

   .ui-selectable>.ui-selected
    {
        background-color: #a6c9e2;
    }

    .hr-line2
    {
      border-top: 2px solid #C0C0C0;
      width: 117%;
       margin-left: -14.5%;
    }

    #kopceInsert2, #cancel
    {
      margin-left: 18px;
      width: 100px; 
      margin-right: -15px;
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
    height: 66px;
}

#prLink, #usLink
{
  margin-top: 3px;
}

#pManager
{
  margin-top: 5px;
}
 
</style>


<body> 

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand"><p id="pManager" style="font-size:27px;"><b>Password Manager</b></p></a>
    </div>
    
     <ul class="nav navbar-nav">
      <div class="vl"></div>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url()."index.php/Main/data";?>" id="prLink"><p id="prLink" style="font-size:18px;">Projects</p></a></li>
      <li><a href="<?php echo base_url()."index.php/Main/users";?>" id="usLink"><p id="usLink" style="font-size:18px;">Users</p></a></li>
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

      <ul class="nav navbar-nav navbar-right">
      <center> <div id="search2"><input type="text" id="searchBar" name="search" class="searchBar" placeholder="Search users.."></div>
    </ul>

  </div>
</nav>

 <!--  <a href="<?php echo base_url()."index.php/Main/data";?>" id="prLink"><h4>Projects</h4></a>
  <a href="<?php echo base_url()."index.php/Main/users";?>" id="usLink"><h4>Users</h4></a>
  <input type="text" id="searchBar"name="search" placeholder="Search..">
  <?php
        echo $this->session->userdata('username')
  ?>
  <a href='<?php echo base_url()."index.php/Main/logout"; ?>' id="logoutButton"><i class="fa fa-sign-out"></i>Logout</a>
   <hr>
      -->


<div class="container-fluid">
  <div class="row">


     



        <div class="col-sm-4 col-xs-4">
          <div id="ajaxuser" >
                 <center><?php echo $this->pagination->create_links(); ?></center>
             
                <div class="hr-line">
                </div>


                  <table id="tableUsers">
                      <tr>
                        
                      </tr>
                         <?php
                            foreach($records as $row):
                          ?>
                      <tr>
                        <td>
                          
                          <a href="<?php echo base_url().'index.php/UsersController/edit_userdata/'.$row->ID; ?>/<?php echo $offset; ?>"><?php echo $row->customerName; ?></a>
                        </td>
            <td width="10%"><a href="<?php echo base_url().'index.php/UsersController/edit_passdata/'.$row->ID; ?>/<?php echo $offset; ?>"><span class="glyphicon glyphicon-lock"></span></a></td> 

                        <td width="10%">
                          <!-- <a href="<?php echo base_url().'index.php/UsersController/edit_user/'.$row->ID; ?>"><span class="glyphicon glyphicon-pencil"></span></a> -->

                <a href="<?php echo base_url().'index.php/UsersController/edit_userdata/'.$row->ID; ?>/<?php echo $offset; ?>"><span class="glyphicon glyphicon-edit"></span></a>                          
                        </td> 

<!--                         <td width="6%"><a href="#" class="delete_data" ID="<?php echo $row->ID; ?>"> <i class="glyphicon glyphicon-trash"></i></a></td>  --> 

                        <td width="6%"><a href='javascript:;' onclick="deleteprojectmodelview('<?php echo $row->ID; ?>');"><i class="glyphicon glyphicon-trash"></i></a></td>

                      </tr>
                      <?php
                            endforeach;
                        ?>
                  </table> 
                  </div>
        </div>
    
    <div class="col-sm-1 col-xs-1">
        <div class="vertical-line"></div>
    </div>
      


        <div class="col-sm-7 col-xs-7">
               <br><br>

               <div id="customerName">             
        </div>
           <center>     <div id="celo">
            <?php if($user_id!=0){ ?>
                <form method="post" action="<?php echo base_url()?>index.php/UsersController/form_validation_editPass">
            <?php } else{ ?>     

                <form method="post" action="<?php echo base_url()?>index.php/UsersController/form_validation">                         
            <?php }?>                  

                        <?php 
// print_r($userdata);
                        ?>
                        <center><h1>Change <?php echo $userdata[0]->customerName ?>'s password</h1><br>
                          
                               
                                <input type="hidden" id="user_id" name="user_id" <?php if($user_id!=0){ ?> value="<?php echo $userdata[0]->ID ?>" <?php } ?> >

                              <label>Old Password</label>  <br>
                                <input type="password" name="password"  id="p1" required readonly <?php if($user_id!=0){ ?> value="<?php echo $userdata[0]->password ?>" <?php } ?> /><br>   
                                 <br>  
                         
                                <label for="password">New Password (min. 6 characters)</label>  <br>
                                <input type="password" name="password"  id="p2" required <?php if($user_id!=0){ ?> value="<?php echo $userdata[0]->password ?>" <?php } ?> /><br>   
                                <span class="text-danger"><?php echo form_error("password"); ?></span>  
                                <meter max="4" id="password-strength-meter"></meter>
                                <p id="password-strength-text"></p><br>
                              
                                <label>Confirm New Password</label>  <br>
                                <input type="password" name="confirm_password"  id="p3" required <?php if($user_id!=0){ ?> value="<?php echo $userdata[0]->password ?>" <?php } ?> /><br>   
                                <span class="text-danger"><?php echo form_error("confirm_password"); ?></span>  <br>   

                                
                          </div></center>

                        

                  
                      <div class="hr-line2">
                              </div><br>
                     <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                     <?php if($user_id!=0){ ?>

                    

                     <input type="submit" id="kopceInsert2" name="update" value="Update" class="btn btn-info pull-right" />  <a href="<?php echo base_url()?>index.php/Main/users" class="btn btn-info pull-right" id="cancel">Cancel</a> </center> 
                     <?php } else{ ?>
                      <input type="submit" id="kopceInsert3" name="insert" value="Insert" class="btn btn-info pull-right" /> 
                     <?php } ?>
                      </div>
                </form>
              </div>
        </div> 
  </div>
</div>

<footer class="container-fluid text-center">
  <h3>Copyright &copy; Ivan | All rights reserved<h3>
</footer>
        
<div id="popup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <script>
 //  $( function() {
 //    $( "#tableUsers" ).tableUsers();
 //  } );
$("#tableUsers>tbody").selectable({
    filter: 'tr',
    cancel: 'a'
});
  </script>


<script src="<?php echo base_url('assets/tags.js'); ?>"></script>

<script>  
      $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var ID = $(this).attr("ID");  
                if(confirm("Are you sure you want to delete this user?"))  
                {  
                     window.location="<?php echo base_url(); ?>index.php/UsersController/delete_data/"+ID;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  


function addnewtag() 
{
   var tagname = $('#tagname').val();
  var isdupicate=0;
  $("#multipletags option").each(function()
  {
      if(tagname==$(this).val()){
        isdupicate=1;
      }
  });

  if(isdupicate==0){

    var x = document.getElementById("multipletags");
    var c = document.createElement("option");
    c.text = tagname;
    x.options.add(c, 1);

    $('#tagform').hide();
   

   $("#multipletags option").each(function(){
   if ($(this).text() == tagname)
      $(this).attr("selected","selected");
    });
  }
}

function viewtagform()
{
  $('#tagform').show();
}

function addnewtagedit() 
{
  // var tagname = $('#tagname').val();
  // var x = document.getElementById("multipletags");
  // var c = document.createElement("option");
  // c.text = tagname;
  // x.options.add(c, 1);

  // $('#tagform').hide();
  // $('#multipletags').val(tagname);


  var tagname = $('#tagname').val();
  var isdupicate=0;
  $("#multipletags option").each(function()
  {
      if(tagname==$(this).val()){
        isdupicate=1;
      }
  });

  // if(isdupicate==0){

  //   var x = document.getElementById("multipletags");
  //   var c = document.createElement("option");
  //   c.text = tagname;
  //   x.options.add(c, 1);

  //   $('#tagform').hide();
  //   $('#multipletags').val(tagname);
  // }
  
  if(isdupicate==0){

    var x = document.getElementById("multipletags");
    var c = document.createElement("option");
    c.text = tagname;
    x.options.add(c, 1);

    $('#tagform').hide();
   

   $("#multipletags option").each(function(){
   if ($(this).text() == tagname)
      $(this).attr("selected","selected");
    });
  }
  
}

$(document).ready(
    function () {
        $("#multipletags").select2();
    }
);      
</script> 

<?php
        if (isset($success) && strlen($success)) {
            echo '<div style="color:green;">';
            echo $success;
            echo '</div>';
        }
        if (isset($errors) && strlen($errors)) {
            echo '<div style="color:red;">';
            echo $errors;
            echo '</div>';
        }
        if (validation_errors()) {
            echo '<div style="color:red;">';
            echo validation_errors();
            echo '</div>';
        }
        ?>

<script>
$(document).ready(function(){

$('.searchBar').keyup(function(e){
    if(e.keyCode == 13)
    {
        $(this).trigger("enterKey");

        var searchBar=$("#searchBar").val();
        var url = '<?php echo base_url()?>';

        if(searchBar!=''){

          $.ajax({
              url : url + "index.php/Main/ajaxsearchdatauser",
              type : "POST",
              data : {
                  searchBar:searchBar
              },
              success : function(re) {
                 $('#ajaxuser').html(re);
              },
              error : function() {

              }
          })          
        }else{
          location.reload();
            return;
        }
    }
});

});
</script>

<script type="text/javascript">

function myclickevent(ID, customerName)
{
  //alert(id);
  $('#customerName').html(customerName);
  $('#customerID').val(ID);
}

function deleteprojectmodelview(id)
{
    var url = '<?php echo base_url()?>';
    var headertext = "Delete Confirmation";
    var msgbody = "Are you sure you want to delete this ?";
    var btnname = "OK";
    var onclick = "deleteuserbyid("+id+")";
    $.ajax({

        url : url + "index.php/Main/deleteprojectmodelview",
        type : "POST",
        data : {
            headertext : headertext,
            msgbody : msgbody,
            btnname : btnname,
            onclick  : onclick
        },
        success : function(re) {

            $("#popup").modal('show');
            $("#popup").html(re);
        },
        error : function() {

        }
    })
}


function deleteuserbyid(id)
{
    var url = '<?php echo base_url()?>';
    $.ajax({
        url : url + "index.php/Main/delete_data",
        type : "POST",
        data : {id : id},
        success : function(re) {
             window.location.reload();
        },
        error : function() {
        }
        
    })
}

var strength = {
    0: "Worst ☹",
    1: "Bad ☹",
    2: "Weak ☹",
    3: "Good",
    4: "Strong"
}

var password = document.getElementById('p2');
var meter = document.getElementById('password-strength-meter');
var text = document.getElementById('password-strength-text');

password.addEventListener('input', function()
{
    var val = p2.value;
    var result = zxcvbn(val);
  
    // Update the password strength meter
    meter.value = result.score;
   
    // Update the text indicator
    if(val !== "") {
        text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" + "<span class='feedback'>" + result.feedback.warning + " " + result.feedback.suggestions + "</span"; 
    }
    else {
        text.innerHTML = "";
    }
});




function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> 

</body>  
</html>  

