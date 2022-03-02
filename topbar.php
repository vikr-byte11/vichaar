
<nav class="navbar navbar-default navbar-expand-lg navbar-light navbar-fixed-top" style="background-color : #1fab89">
    <a class="navbar-brand " href="#" style="color:white; font-size:2rem"><span><b>VICHAR</b></span></a>

    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"  style="color:white">
    <span class="navbar-toggler-icon" ></span>
    </button>

   <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <ul class="navbar-nav navbar-center">
       <li class="nav-item active">
        <a class="nav-link nav-home" href="./" >
        <i class="nav-icon fas fa-home" style="color:white"></i>
        Home
        </a>
       </li>
      
       
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle nav-edit_survey nav-view_survey" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="nav-icon fa fa-poll-h" style="color:white"></i>
          Survey
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#1fab89">
           <a class="dropdown-item nav-new_survey" href="./index.php?page=new_survey" >Add New</a>
           <a class="dropdown-item nav-user_list" href="./index.php?page=survey_list">created</a>
         </div>
       </li>
       <li class="nav-item">
         <a class="nav-link nav-survey_report" href="./index.php?page=survey_report">
         <i class="nav-icon fas fa-chart-bar" style="color:white"></i>
         Survey Report
         </a>
        </li>
       <li class="nav-item">
         <a class="nav-link nav-survey_widget nav-answer_survey" href="./index.php?page=survey_widget" >
         <i class="nav-icon fas fa-poll-h" style="color:white"></i>
         Survey Available
         </a>
        </li>
       <li class="nav-item">
         <a class="nav-link" href="./index.php?page=edit_user&id=<?php echo $_SESSION['login_id'] ?>" ><i class=" nav-icon fas fa-edit" style="color:white"> </i>Update Profile</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="ajax.php?action=logout" ><i class=" nav-icon fa fa-sign-out-alt" style="color:white"> </i>Logout</a>
       </li>
      
     </ul>
   </div>

   
    
   	 <a href="javascript:void(0)" class="d-flex" data-toggle="dropdown" aria-expanded="true" >
        <!-- <div style="width:150px;"> -->
        <span class="brand-image img-circle d-flex justify-content-center align-items-center" style="width: 40px; background-color: #dff3e3; color:#41584b; margin-right:6px; font-size:1em !important"><?php echo strtoupper(substr($_SESSION['login_firstname'], 0,1).substr($_SESSION['login_lastname'], 0,1)) ?> </span>
        <span class="brand-text" style="color:white; height:20px; margin-right:10px; font-size:1.2em !important"><?php echo ucwords($_SESSION['login_firstname'].' '.$_SESSION['login_lastname']) ?></span>
        <!-- </div> -->
      </a>
 </nav>
  


 <style>
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        /* .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
          background-image:none !important;
          background-color: #98ddca;
          color:#41584b;
        } */

        .navbar .dropdown a{
          color:white;
        }

        .navbar .dropdown-menu a:hover{
          background-image:none !important;
          background-color: #98ddca;
          color:#41584b;
        }

        .navbar .nav-item a{
          color:white !important;
        }
        .navbar .nav-item a:hover{
          background-image:none !important;
          /* background-color: #98ddca; */
          color:#41584b !important;
        }
       

        
  </style>

 <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}

  	})
  </script>
