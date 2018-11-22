<!DOCTYPE HTML>
<html>
    <head>
    <title>FEED</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />

    <style>
        iframe{
            position: absolute;
        }
        .left{
            left:0px;
            width:20%;
            height:100%;
        }
        .right{
            left:20%;
            width:80%;
            height:100%;
        }
    </style>
    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        obj={
           // xhr: new XMLHttpRequest(),
           /* loadpage: function(){
                if(obj.xhr.readyState==4 && obj.xhr.status==200){
                       document.body.innerHTML=obj.xhr.responseText;
                }
            },*/
           /* heartbeat: function(){
                xhr=new XMLHttpRequest();
                xhr.open("HEAD","feed.php");
                xhr.send();
            },*/
            start: function(){
                //document.cookie="username=shyna";
                console.log(getCookie("username"));
                /*obj.xhr.onreadystatechange=obj.loadpage;
                obj.xhr.open("GET","feeds.php?username="+getCookie("username"),true);
                obj.xhr.send();*/
                document.getElementById("sidebar").src="http://sidebar.php?username="+getCookie("username");
                document.getElementById("feed").src="http://feed.php?feed="+"rss.xml";

                //setInterval(obj.heartbeat,1000);
            }
        }
    </script>
    </head>
    <body onload="obj.start()">
        <iframe id="sidebar" class="left"></iframe>
        
        <iframe id="feed" class="right"></iframe>  
        
    <!--    
        <div class="left" src="http://localhost/landing-zero-theme/sidebar.php"></div>
        
        <div class="right" src="http://localhost/landing-zero-theme/feed.php"></div> -->
    </body>
</html>
