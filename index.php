
<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
          <title>AdminLTE</title>
          <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
          <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
          <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
          <!-- Date Picker -->
          <link href="css/datepicker3.css" rel="stylesheet" type="text/css" />
          <!-- Theme style -->
          <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>

 <body class="skin-blue">
 
 <!--- Header star ---> 
 
          <header class="header">
          
            <?php
				include_once 'html/nar-left.php'; 
				include_once 'html/nar-right.php';
			?>
             <!--- Header end ---> 
             
              <!--- Sidebar ---> 
			<div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 587px;">
            <aside class="left-side sidebar-offcanvas" style="min-height: 1772px;">
            </aside>
           
			<?php include_once 'html/sidebar.php'; ?>
             <!--- Sidebar end ---> 

             <!--- Conten star ---> 
           <aside class="right-side">
          <section class="content-header">
          	<?php include_once 'html/breakcrumb.php'; ?>
            </section>
       		<section class="content">
            </section>
			</aside>
            
        </div>

	
 
 
	 	  <script src="js/jquery.min.js"></script>
          <script src="js/bootstrap.min.js" type="text/javascript"></script>
          <script src="js/jquery-ui.min.js" type="text/javascript"></script>
          <script src="js/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
          <script src="js/AdminLTE/app.js" type="text/javascript"></script>
          <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

 </body>
 </html>