<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    
  </head>
  <body>
  
    
    </br></br></br></br>
    
    
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="mysidebar" class="sidebar-nav">

    
    <?php
        #echo("<script>urls = new Array();</script>");
        extract($_GET);
        $file = fopen($username,"r");
        $f=file_get_contents($username);
        $f=explode(" ",$f);
        foreach($f as $feed) {
          $xml=simplexml_load_file($feed);
          $entries = $xml->xpath("//title");
          echo("<script>
                msb=document.getElementById(\"mysidebar\");
                li=document.createElement(\"li\");
                an=document.createElement(\"a\");
                an.id=\"$feed\";
                an.innerHTML=\"$entries[0]\";
                an.addEventListener( 'click', function() {  
   window.parent.document.getElementById('feed').src='http://localhost/landing-zero-theme/feed.php?feed='+this.id;
                 
}); 
                li.appendChild(an);
                msb.appendChild(li);
                //document.body.appendChild(li);
                </script></br></br></br>");       
        }
        fclose($file);
    ?>    
    

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        
        
        
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
