<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>braids</title>
    <link rel="shortcut icon" href="images/icons/laramii_favicon.jpg"/>
   <link href="Styles/Site.css" rel="stylesheet" type="text/css" />
   <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
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

 


    
<style type="text/css">
.rightImage
{
    float:left;
    position:absolute;
  /* box-shadow:2px -2px 10px 3px #888, inset 2px -2px 10px 3px #888; */
}
/*.rightImage:hover img
{
    height: 300px;
  /*  z-index:1;   */
/*	width:320px;
    box-shadow:4px -4px 10px 3px #888, inset 4px -4px 10px 3px #888;
}  */

</style>


</head>

<!-- THIS IS THE BEGGINING OF THE BODY OF THE SITE                    -->
 
<body>
<div id="background">
 
    <img src="images/pink_backgrnd.jpg" class="stretch" alt="" />
    </div>

    
    
<div class="page">
    <div class="header">
        <div class="title">
                <?php
                    include 'logo.php';
                ?>
        </div>    
       
<!-- Navigation Bar is located here           -->
<table><tr><td></td>
            <td></td> <td></td><td></td><td></td></tr></table>  
<?php
 include_once 'navbar.php';
 ?>
</div>	

<div id="neckpix1">        
<div style="padding-left:12px;">
            <div id="MainContent">

     <table><tr><td></td><td></td> <td></td><td></td><td></td></tr></table>   
   
        <div style="margin-top:40px;">    
        
            
            <div class="rightImage">
            <a class="fancybox" rel="group" href="images/Hairstyles/braids2.jpg">
                <img src="images/Hairstyles/braids2.jpg" width="155px" height="150px" title="braids 2" alt=""/></a></div>
             <div class="rightImage" style="margin-left:170px;" >
             <a class="fancybox" rel="group" href="images/Hairstyles/braids3.jpg">
                <img src="images/Hairstyles/braids3.jpg" width="155px" height="150px" title="braids 3" alt=""/></a></div>
             
</div>






    

    
    <div class="clear">

    </div>

               
                   
            </div>
        </div>
       <div class="button_holder"> <table width="100%"><tr><td width="30%"></td><td width="40%"></td><td width="30%" align="center"><form><a href="#" class="next" onclick="show(2);" >Next</a></form></td></tr></table> </div>
</div>


            

<?php
    include_once "footer.php";
?>
        
    </div>
    
    
</body>
</html>
