<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Skirts and Blouses</title>
    
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
		  
		  width:1367px;
         /* width:87%;*/
		  height:670px; 
		  max-height:680px;
		  padding-left:5px;
		  padding-right:5px;
		 
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
  /* box-shadow:2px -2px 10px 3px #888, inset 2px -2px 10px 3px #888; */
}

a.tablin:active{
    color: yellow;
}

a.tablin:link{
	text-decoration:none; 
	color: #FFF;  
	padding-left:15px;
}

header{margin-left:5%; vertical-align: top; text-align: left; color:white; font-family:"Comic Sans MS", cursive; font-size:3em; }
.motto{margin-left:6%; vertical-align: top; text-align: left; color:white; font-family:"Comic Sans MS", cursive; font-size:1em;}
footer{ text-align: center; font-size:0.75em; color:white;bottom: 0; height: 100px; margin-top:100px;  vertical-align: bottom; }
</style>

</head>

<!-- THIS IS THE BEGGINING OF THE BODY OF THE SITE                    -->
 
<body onLoad="MM_preloadImages('images/fontbeadshad.png')">
<header>
Laramii
</header>
<div class="motto">...giving you the best</div><br/>

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul style="width:87%; padding-left:5px; margin: 0 auto; padding-bottom: 5px; margin-bottom:2%; ">
    <li class="active" style="display:inline; ">
        <a href="#home" class="tab" style="text-decoration:none; color:#400000 ;  padding-left:5px;">
          <div style="width: 100px; border-radius:20px; background: #FFF;padding: 5px 10px; float:left; text-align:center; ">African Design</div>
        </a>
    </li>
    <li style="display:inline;"> 
    	<a class="tablin" href="#profile" style="text-decoration:none; color:#FFF; ">
        <div style="width: 100px; border-radius:20px; background:#FF0000; ; padding: 5px 10px; float:left; text-align:center; margin-left:10px; clear: right;">African Cap</div>
        </a>
    </li>
    
  </ul>
</div>

<div id="mainbody">   
    
<!-- <div class="page"> -->

<div id="content_box">
<div id="content_1"><?php  include 'skirtsnblouses1.php'; ?>  </div> 
<div id="content_2" style="display: none;"><?php include 'skirtsnblouses2.php'; ?></div>   
 
</div>  
</div>
           
<footer>

	<p>Copyright&copy; 2013 Laramii.com. All Right Reserved.</p>

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
            for (var i = 1; i <= 4; i++) {
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
            for (var i = 4; i >= 1; i--) {
                document.getElementById('content_' + i).style.display = (i == box ? 'block' : 'none');
            }
        }


</script>        
</body>
</html>
