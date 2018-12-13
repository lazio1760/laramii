<!DOCTYPE html>

<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Necklaces And Earings</title>
    
    <link rel="shortcut icon" href="images/laramii_favicon.jpg" type="image/x-icon"/>
    <link href="Styles/Site.css" rel="stylesheet" type="text/css" />
    <!-- Apple iOS icons -->
    <!—- iPhone 57x57 -->
    <link rel=" apple-touch-icon-precomposed" href="images/laramii_favicon.jpg" />
    <!—- iPad 72x72 -->
    <link rel=" apple-touch-icon-precomposed" href="images/laramii_favicon.jpg" sizes="72x72" />
    <!—- iPhone Retina Display 114x114 -->
    <link rel=" apple-touch-icon-precomposed" href="images/laramii_favicon.jpg" sizes="114x114" />
    <!—- iPad Retina Display 144x144 -->
    <link rel=" apple-touch-icon-precomposed" href="images/laramii_favicon.jpg" sizes="144x144" />
    

<style type="text/css">
body{background-color:#400000; padding-top:3%; 
			padding-bottom: 0;}
#mainbody{margin: 0 auto;
          width:87%;
		  height:520px; 
		  max-height:520px;
		  padding-left:5px;
		  padding-right:5px;
		  clear:both;
		 
		/* display: table-cell; */
		  background-color:#FFF}   
.next, .previous { color:white;
	   font-family:"Comic Sans MS", cursive;
	   font-size:16px;
	   text-decoration:none;}		  
.rightImage
{
    float:left;
    position:absolute;
	/*width:11.2%;
	padding-left:2%;*/
  /* box-shadow:2px -2px 10px 3px #888, inset 2px -2px 10px 3px #888; */
}

header{margin-left:5%; vertical-align: top; text-align: left; color:white; font-family:"Comic Sans MS", cursive; font-size:3em; }
.motto{margin-left:6%; vertical-align: top; text-align: left; color:white; font-family:"Comic Sans MS", cursive; font-size:1em;}
footer{ text-align: center; font-size:0.75em; color:white; bottom: 0; margin-top:100px; vertical-align: bottom; position:relative; clear:both;}
</style>

</head>

<!-- THIS IS THE BEGGINING OF THE BODY OF THE SITE                    -->
 
<body>
<header>
Laramii
</header>
<div class="motto">...giving you the best</div><br/>
<div id="mainbody">   
    
<!-- <div class="page"> -->
  
<div id="content_box">
<div id="content_1"><?php include 'NecklacesnEarings1.php'; ?>  </div> 
<div id="content_2" style="display: none;"><?php include 'NecklacesnEarings2.php'; ?></div>   
<div id="content_3" style="display: none;"><?php include 'NecklacesnEarings3.php'; ?></div>
<div id="content_4" style="display: none;"><?php include 'NecklacesnEarings4.php'; ?></div>  
<div id="content_5" style="display: none;"><?php include 'NecklacesnEarings5.php'; ?></div> 
</div>               
    
</div>
<footer>
	<p>Copyright&copy; 2013 Laramii.com. All Right Reserved.</p>
<!--<div class="copyright">
</div>
-->
</footer>    
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect	: 'elastic',
                closeEffect	: 'elastic'
            });})
</script>
<script type="text/javascript">
        function show(box) {
            for (var i = 1; i <= 5; i++) {
                document.getElementById('content_' + i).style.display = (i == box ? 'block' : 'none');
            }
        }


</script>

<script type="text/javascript">
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect	: 'elastic',
                closeEffect	: 'elastic'
            });})
</script>

<script type="text/javascript">
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
    
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base_url = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = array("<a href=\"$base_url\">$home</a>");
 
    $last = end(array_keys($path));
 
    foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_'), Array('', ' '), $crumb));
        if ($x != $last){
            $breadcrumbs[] = '<a href="$base_url$crumb">$title</a>';
        }else{
            $breadcrumbs[] = $title;
        }
    }
 
    <nobr><a id="FALINK_3_0_2" class="FAtxtL" href="#">return</a></nobr> implode($separator, $breadcrumbs);
}  
</script>
 
<script type="text/javascript">
        function rshow(box) {
            for (var i = 5; i >= 1; i--) {
                document.getElementById('content_' + i).style.display = (i == box ? 'block' : 'none');
            }
        }


</script>    
</body>
</html>
