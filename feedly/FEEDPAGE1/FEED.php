<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> FEEDLY</title>
    
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> FEEDLY</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#one">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Highlights</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#three">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#four">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#last">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="FEEDLY" href="#aboutModal">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
 <!--<header id="first" style="height:10%"> 
       FEED TOPIC HERE
        
     </header>   -->
    



    <div id="shyna">


                    
                    <?php
            //Feed URLs
            extract($_GET);
            
            
     /*       $oldfeed=file_get_contents($feed);
            sendfeed($feed);
	        while(true){
	            clearstatcache();
	            $newfeed=file_get_contents($feed);			
		        if(strcmp($newfeed,$oldfeed)!=0){
		            //sendfeed($feed); 	
		            echo("<script>window.alert('i changed');</script>");
		           // echo("<script>location.reload();</script>");
		            $oldfeed = $newfeed;
    		    }
	    	    sleep(5);
	        }
	

            function sendfeed($feed){
            clearstatcache();*/
            $xml = simplexml_load_file($feed);
            $entries = $xml->xpath("//item");
            //Sort feed entries by pubDate
            usort($entries, function ($feed1, $feed2) {
                return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
            });
            ?>
           <script>alternate=1;</script>
            <ul><?php
            //Print all the entries
            $no=0;
            foreach($entries as $entry){
                ?>
                
               <!--
                <section id="two">
                    <div class="container">
                    <div class="row">
                    <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary"></h2>
                    </div>
                    </div>
                    </div>
                 <section>
                    <script>
                    if(alternate==1){
                        sec.className="bg-primary";
                        alternate=0;
                    }
                    else{alternate=1;}
                </script>
                   
                    <a href="<?= $entry->link ?>" target="_blank style="target-new:tab;"><?= $entry->title ?></a>
                   
                   <p><?= parse_url($entry->link)['host']?></p>
                    
                    <p><?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate))?></p>
                    
                    <p><?= $entry -> decsription?><p>-->
                
                <li>
                    <a href="<?= $entry->link ?>"><?= $entry->title ?>
                    </a> (<?= parse_url($entry->link)['host'] ?>)
                <p><?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)) ?></p>
                <p><?= $entry->description ?></p>
                
                </li>
                
                <?php
            }
            ?>
   
   </div>
            
       
       
       
       
       
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                          <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br/>
            <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">FEEDLY</a> </span>
        </div>
    </footer>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
        		<img src="" id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">FEEDLY</h2>
        		<h5 class="text-center">
        		    
        		</h5>
        		<p class="text-justify">
        		    This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling.
        		    There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals
        		    that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
        		</p>
        		<p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
        	</div>
        </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Nice Job!</h2>
        		<p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
        		<p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>
    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
