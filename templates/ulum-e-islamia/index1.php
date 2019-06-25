<!DOCTYPE html>
<html>
    <head>
      	<title>Research Journal Ulum-e-Islamia, The IUB</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="templates/ulum-e-islamia/bootstrap/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="templates/ulum-e-islamia/css/uei_iub_default.css" />
        <link type="text/css" rel="stylesheet" href="templates/ulum-e-islamia/css/menu_style.css" />
        <link href="modules/mod_djimageslider/themes/default/css/djimageslider.css" rel="stylesheet" />
        <script src="media/jui/js/jquery.min.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/jui/js/jquery-noconflict.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/jui/js/jquery-migrate.min.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/system/js/caption.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/system/js/mootools-core.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/system/js/core.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/system/js/mootools-more.js?e3a725bc017598f41dc103a6329d0033"></script>
        <script src="media/jui/js/bootstrap.min.js?e3a725bc017598f41dc103a6329d0033"></script>	
        <script src="media/djextensions/jquery-easing/jquery.easing.min.js" defer></script>
        <script src="modules/mod_djimageslider/assets/js/slider.js?v=3.2.1" defer></script>
    </head>
    <style type="text/css">
    .navbar a{
    font-family: Raleway !important;
    }
    .navbar ul li a{display: block;}
    .nav.navbar-nav li a,
    .nav.navbar-nav li a:hover{
    color: white;
    }
      .navbar .nav > .active > a,
      .navbar .nav > .active > a:hover,
      .navbar .nav > .active > a:focus {
        background:#D12A28;
      }
      .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #fff;}
	
	.navbar-nav > li > a {
    border-radius: 12px;
}
      .nav > li > a {
    position: relative;
    display: block;
    padding: 14px 25px;
    font-family: Raleway, sans-serif;
}
      .navbar-default {

    background-color: #86CB85;
    border-color: #b0aaaa;

}
.col-md-12
{
    padding-right: 0px;

padding-left: 0px;
}
.dpt-title-text {
    text-align: center;
    font-family: calibari-light;
}
.dpt-subtitle-text {
    text-align: center;
    font-family: calibari-light;
    font-size: 17px;
color: #4e4b4b;
font-style: italic;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {

    color: white;
    background-color: #D12A28;

}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {

    color: white;
    background-color: #D12A28;

}
    </style>
    <body>
      <div class = "container">
            <?php 
                include "header.php";
            ?>
            <div id="cssmenu" class="row">
              <nav class = "navbar navbar-default" role = "navigation">
              <jdoc:include type="modules" name="cssmenu" title="Main Menu"/>
              </nav>
            </div>
            <?php 
                include "main_content.php";
            ?>
            <?php 
                include "footer.php";
            ?>
        </div>
      
      
      
		
    </body>
</html>
