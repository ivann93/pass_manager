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



   
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
    
  
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->    
  

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>


     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tags/textext.core.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tags/textext.plugin.tags.css"/>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/tags/textext.core.js"></script>
        <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/tags/textext.plugin.tags.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>   



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>





</head>  

<style>


    button:hover 
    {
        opacity: 0.8;
    }

    
    #tableProjects 
    {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 110%;
        margin-left: -3.3%;
    }

    #tableProjects td, #tableProjects th 
    {
        border-top: 1px solid DodgerBlue;
        padding: 5px 0px;
    }

    #tableProjects tr:nth-child(even){background-color: #f2f2f2;}

    #tableProjects tr:hover {background-color: #ddd;}

     #tree{
      width: 110%;
      margin-left: -3.5%;

    }

    #tableUrl
    {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        margin-left: -6%;    

    }

    #tableUrl td, #tableUrl th 
    {
        border: 1px solid #ddd;
     
    }

    #tableUrl tr:nth-child(even){background-color: white;}

    #tableUrl tr:hover {background-color: #ddd;}

  textarea, input[type=text],[type=password], [type=tag], [type=level]
    {
      border-radius: 4px;
      border: 1px solid grey;
      box-sizing: border-box;
    }

   

    #kopce1
    {
      width:250px;
    }

   

    footer {
      margin-top: 3%;
    }

    #kopceInsert1
    {
      width: 100px;
      margin-right: 63px;
    
     
    }

    #logged-in
    { 
      display: inline-block;
      margin-left: -10%;
      margin-top: 23%;
      color: #00BFFF;
    }

    #logoutButton
    {
       display: inline-block;
      text-decoration:underline;
      color: DodgerBlue;
    }

    #searchBar
    {
     /*margin-left: 63%;*/
      
      box-sizing: border-box;
      border: 1px solid ;
      border-radius: 5px;
    }
  
    #naslov1
    {
      display: inline-block;
      margin-left: 40%;   
    }

    .vertical-line 
    {
      margin-top: -20px;
      border-left: 2px solid #C0C0C0;
      height: 853px;
    }

    .hr-line
    {
      border-top: 2px solid #C0C0C0;
      width: 350%;
      margin-left: -10%;
    }
    
    #descriptionPole 
    {
      width: 89%;
      height: 100px;
    }

    #notesPole
    {
      width: 89%;
    }

    #pole1, #pole2, #pole3
    {
      width: 77%;
    }

    #password
    {
      width: 77%;
    }
    
    #celo
    {
      margin-left: -5%;
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


    #tagname
    {
      margin-left: 470px;
    }

    .hr-line2
    {
      border-top: 2px solid #C0C0C0;
      width: 110%;
      margin-left: -7%;
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
  </div>
</nav>

<div class="container-fluid">

<div class="row">
    <div class="col-sm-4 col-xs-4">
                     
         <center><div id="search2" style="margin-left: 20px;">
          <input class="searchBar" type="text" id="searchBar" name="search" placeholder="Search..">
         </div></center>


        <div class="hr-line">
        </div>
      
    
  

        <div class="container" id="searchcontent">

          <h2>My Projects  </h2>
            <ul>
              <?php if($data['numResults']>0){ ?>
                <?php foreach($data['results'] as $key => $value ){ ?>

                  
                    
                    <li>
<!--                       <a href='javascript:;' onclick="myclickevent('<?php echo $value->id; ?>','<?php echo $value->name; ?>');"><?php echo $value->name; ?></a> -->

                      <a href="<?php echo base_url().'index.php/Main/select_project/'.$value->id; ?>"><?php echo $value->name; ?></a> <a href="<?php echo base_url().'index.php/ProjectsController/editPASSWORD/'.$value->id; ?>"><span class="glyphicon glyphicon-lock"></span></a>
                      
                      <a href="<?php echo base_url().'index.php/Main/editdata/'.$value->id; ?>"><span class="glyphicon glyphicon-edit"></span></a>  <a href="<?php echo base_url().'index.php/ProjectsController/subchild/'.$value->id; ?>"><span class="glyphicon glyphicon-plus"></span></a> 
<!--                       <a href="#" class="delete_data" id="<?php echo $value->id; ?>"> <i class="glyphicon glyphicon-trash"></i></a> -->
                      <a href='javascript:;' onclick="deleteprojectmodelview('<?php echo $value->id; ?>');"><i class="glyphicon glyphicon-trash"></i></a>

                    </li> 

                   

                    <?php if($value->subchild['numResults']>0){ ?>

                    <ul>
                      <?php foreach($value->subchild['results'] as $key1 => $value1 ){ ?>
                  
                         <li>
<!--                           <a href='javascript:;' onclick="myclickevent('<?php echo $value1->id; ?>','<?php echo $value1->name; ?>');"><?php echo $value1->name; ?></a> -->

                          <a href="<?php echo base_url().'index.php/Main/select_project/'.$value1->id; ?>"><?php echo $value1->name; ?></a> <a href="<?php echo base_url().'index.php/ProjectsController/editPASSWORD/'.$value1->id; ?>"><span class="glyphicon glyphicon-lock"></span></a>
                         
                         <a href="<?php echo base_url().'index.php/Main/editdata/'.$value1->id; ?>"><span class="glyphicon glyphicon-edit"></span></a>  <a href="<?php echo base_url().'index.php/ProjectsController/subsubchild/'.$value1->id; ?>"><span class="glyphicon glyphicon-plus"></span></a> 

<!--                          <a href="#" class="delete_data" id="<?php echo $value1->id; ?>"> <i class="glyphicon glyphicon-trash"></i></a> -->

<a href='javascript:;' onclick="deleteprojectmodelview('<?php echo $value1->id; ?>');"><i class="glyphicon glyphicon-trash"></i></a>

                          <?php if($value1->grandchild['numResults']>0){ ?>
                          <ul>
                            <?php foreach($value1->grandchild['results'] as $key2 => $value2 ){ ?>

                            <li>
<!--                               <a href='javascript:;' onclick="myclickevent('<?php echo $value2->id; ?>','<?php echo $value2->name; ?>');"><?php echo $value2->name; ?></a>
 -->
                                   <a href="<?php echo base_url().'index.php/Main/select_project/'.$value2->id; ?>"><?php echo $value2->name; ?></a> <a href="<?php echo base_url().'index.php/ProjectsController/editPASSWORD/'.$value2->id; ?>"><span class="glyphicon glyphicon-lock"></span></a>

                               </a> <a href="<?php echo base_url().'index.php/Main/editdata/'.$value2->id; ?>"><span class="glyphicon glyphicon-edit"></span></a> 

<!--                                <a href="#" class="delete_data" id="<?php echo $value2->id; ?>"> <i class="glyphicon glyphicon-trash"></i></a> -->

<a href='javascript:;' onclick="deleteprojectmodelview('<?php echo $value2->id; ?>');"><i class="glyphicon glyphicon-trash"></i></a>
                                                                                                                                                                            
                            <?php } ?>
                          </ul>
                          <?php } ?>

                      <?php } ?>
                    </ul>
                    <?php } ?>

                <?php } ?>
              <?php } ?>
            </ul>

        </div>



    </div>

    <div class="col-sm-1 col-xs-1">
        <div class="vertical-line"></div>
    </div>


    <div class="col-sm-7 col-xs-7">
             
             <div class="row">

                    <div class="col-sm-12 col-xs-12">
                        <br>
                       


                        <input type="hidden" id="parent_id" name="parent_id" value="NULL">

                    
                    </div>

                       <center>  <div id="celo">
                        <?php if($projectid!=0){ ?>
                            <form method="post" action="<?php echo base_url()?>index.php/ProjectsController/form_validation_update" enctype="multipart/form-data">                              
                        <?php }else{ ?>
                            <form method="post" action="<?php echo base_url()?>index.php/ProjectsController/form_validation" enctype="multipart/form-data">
                        <?php } ?>      

                                  <?php
                                      if($this->uri->segment(2) == "inserted")
                                      {
                                          echo '<p class="text-success">Data Inserted</p>';
                                      }
                                  ?>
<br><br>
                                  

                                   <center><h1>Create new project</h1></center>
                                   <div id="blahdiv" style="display: none;">
                                    
                                  <img id="blah" src="#" alt="your image" />
                                  </div><br>
                                <div class="col-sm-12 col-xs-12 col-lg-6">

                                        <input type="hidden" id="userid" name="userid" value="<?php echo $this->session->userdata('id'); ?>" >

                                        <input type="hidden" id="projectid" name="projectid" <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->id ?>" <?php } ?> >

                                        <input type="hidden" id="projectinsertid" name="projectinsertid" value="0" >

                                        <label>Project's Title</label>  <br>
                                        <input type="text" name="name" id="pole2" required <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->name ?>" <?php } ?> />  <br>
                                        <span class="text-danger"><?php echo form_error("name"); ?></span>  <br>
                                  
                                        <label>Project's URL</label>  <br>
                                        <input type="text" name="url" id="pole3" required <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->url ?>" <?php } ?> />   <!-- class="form-control" -->  <br>
                                        <span class="text-danger"><?php echo form_error("url"); ?></span> <br>

                                  </div>

                                  <div class="col-sm-12 col-xs-12 col-lg-6 col-md-12">

                                        <label>Username</label>  <br>
                                        <input type="text" name="username" id="pole1" required <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->username ?>" <?php } ?> />   <!-- class="form-control" -->  <br>
                                        <span class="text-danger"><?php echo form_error("username"); ?></span>  <br>
                              
                                        <label>Password</label><br>
                                        <input type="text" class="password" name="password" id="password" required <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->password ?>" <?php } ?> />   <!-- class="form-control" -->  <br>
                                <!--          <span id="passstrength"></span> -->
                                        <span class="text-danger"><?php echo form_error("password"); ?></span> <br>
                                        
                                       


                                        
                                  </div>

                                  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                     <label>Notes</label><br>
                                        <!-- <textarea name="Text1" cols="86" rows="1"></textarea> -->
                                        <input type="text" name="Notes" id="notesPole" <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->Notes ?>" <?php } ?> /><br>
                                        <span class="text-danger"><?php echo form_error("Notes"); ?></span> <br>
                                  </div>

                                  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                     <label>Description</label><br>
                                        <!-- <textarea name="Text1" cols="86" rows="4"></textarea> -->
                                        <input type="text" name="description" id="descriptionPole" required <?php if($projectid!=0){ ?> value="<?php echo $projectdata[0]->description ?>" <?php } ?> />   <!-- class="form-control" -->  <br>
                                        <span class="text-danger"><?php echo form_error("description"); ?></span> <br>
                                  </div>
                              
                                  <div class="col-sm-6 col-xs-6">
                                        <label>Logo</label>  <br>
                                        <input type="file" name="pic" id="pic" onchange="readURL(this);" />  <br>
                                        <span class="text-danger"><?php echo form_error("pic"); ?></span> <br>
                                  </div>

 <style>

.select2{
/*  width:auto !important;*/
  width:250px !important;
}
 </style>
<!--                                   <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                                          <p>
                                              <label>Tags (type and press 'Enter')</label><br/>
                                              <textarea name="blog_tags" id="blog_tags" rows="5" cols="50" class="textarea" style="margin-left: -150px !important"> 
                                              </textarea>
                                          </p>
                                  </div> -->



                              <div class="selectRow" id="ajaxtags">
                              <label>Tags</label><br>
                                  <select id="multipletags" name="multipletags[]" data-placeholder="Select an option" multiple>
                                  <?php if(!empty($tagdata)){ ?>
                                    <?php foreach ($tagdata as  $value3) { ?>
                                      
                                      <option value="<?php echo $value3; ?>" <?php if($projectid!=0){ if (strpos($projectdata[0]->tag, $value3) !== false) { ?> selected <?php } } ?> ><?php echo $value3; ?></option>                                                         
                                    <?php } ?>
                                  <?php } ?>
                                  </select>
                              </div>


                            <a href="javascript:;" onclick="viewtagform();"><span class="glyphicon-plus"></span>
                            Add new Tags </a>
                            <br><br>

                            <div id="tagform" style="display: none;">
                              
                                 <input type="text" name="tagname" id="tagname">
                                 <?php if($projectid!=0){ ?>
                                 <input type="button" class="btn btn-info" value="Save tag" onclick="addnewtagedit();">
                                 <?php }else{ ?>
                                 <input type="button" class="btn btn-info" value="Save tag" onclick="addnewtag();">                                 
                                 <?php } ?>
                              
                            </div>


                                  <br>
                                  <div class="hr-line2">
                                  </div></center> 
                                  <br>

                                    <?php if($projectid!=0){ ?>
                                    <a href="<?php echo base_url()?>index.php/Main/data" id="cancelButton"class="btn btn-info">Cancel</a>
                                      <input type="submit" id="kopceInsert1" name="update" value="Update" class="btn btn-info" />  
                                    <?php }else{ ?>
                                      <input type="submit" id="kopceInsert1" name="insert" value="Insert" class="btn btn-info pull-right" />                                       
                                    <?php } ?>  
                                 
                            </form>
                      </div></center>
              </div>
    </div>     
  </div>
</div>
     <!--  <div class="hr-line2">
      </div> -->
            
            <script src="<?php echo base_url('assets/tags.js'); ?>"></script>
   

<!-- <div id="popup" class="modal hide fade" style=""  tabindex="-1" data-focus-on="input:first" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
</div> -->



<footer class="container-fluid text-center">
  <h3>Copyright &copy; Ivan | All rights reserved<h3>
</footer>



<!-- Modal -->
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
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this project?"))  
                {  
                     window.location="<?php echo base_url(); ?>index.php/ProjectsController/delete_data/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
</script> 

<script type="text/javascript">
$('#blog_tags')
        .textext({
            plugins: 'tags',
            tagsItems: [<?php
            if (isset($blog_tags)) {
                $i = 1;
                foreach ($blog_tags as $tag) {
                    echo "'" . $tag . "'";
                    if (count($blog_tags) == $i) {
                        echo '';
                    } else {
                        echo ',';
                    }
                    $i++;
                }
            }
            ?>]
         })
  .bind('tagClick', function (e, tag, value, callback) {
      var newValue = window.prompt('Enter New value', value);
      if (newValue)
          callback(newValue);
  });
</script>     
    


<script>



</script>


</body>  
</html>


<script type="text/javascript">

function myclickevent(id,name)
{
  //alert(id);
  $('#projectname').html(name);
  $('#parent_id').val(id);
}

// function confirm_delete(id) {
//     var txt;
//     var r = confirm("You want to delete this subproject! ");
//     if (r == true) {

//         $.ajax({
//             url : "deletesubproject",
//             type : "POST",
//             data : {
//                 id:id
//             },
//             success : function(re) {

//                location.reload();
//                 return;
//             },
//             error : function() {

//             }
//         })
//     } else {
        
//     }
// }

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
</script>

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
              url : url + "index.php/Main/ajaxsearchdata",
              type : "POST",
              data : {
                  searchBar:searchBar
              },
              success : function(re) {
                 $('#searchcontent').html(re);
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

$(document).ready(
    function () {
        $("#multipletags").select2();
    }
);


function readURL(input) {

  
  $("#blahdiv").show();
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#blah')
              .attr('src', e.target.result)
              .width(150)
              .height(150);
      };

      reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function(){
    $(".password").change(function(){
      var password = document.getElementById("password").value;
      var result = checkPassStrength(password);

      $('#passstrength').html(result);
    });
});

// function checkPassStrength(pass) {

//     var score = pass.length;
//     if (score > 10)
//         return "Strength: Strong";
//     if (score > 6)
//         return "Strength: Good";
//     if (score > 3)
//         return "Strength: Weak";
//     if (score >= 1)
//         return "Strength: Worst";
//     return "";
// }

function deleteprojectmodelview(id)
{
    var url = '<?php echo base_url()?>';
    var headertext = "Delete Confirmation";
    var msgbody = "Are you sure you want to delete this project?";
    var btnname = "OK";
    var onclick = "deleteprojectbyid("+id+")";
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


function deleteprojectbyid(id)
{
    var url = '<?php echo base_url()?>';
    $.ajax({
        url : url + "index.php/Main/deleteprojectbyid",
        type : "POST",
        data : {id : id},
        success : function(re) {
             window.location.reload();
        },
        error : function() {
        }
        
    })
}


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