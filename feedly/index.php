<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Landing Zero </title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
	<script type = "text/javascript">
	<?php

$filename = $_POST['user_name'];
$file = fopen($filename,"wr");
$current = file_get_contents($filename);


$fileval = "nameVal.txt";
$pass = $_POST["user_password"];
$file1 = fopen($fileval,"a+");
$current1 = $filename.";".$pass."\n";
file_put_contents($fileval, $current1,FILE_APPEND|LOCK_EX);
//file_put_contents($fileval, $newline,FILE_APPEND|LOCK_EX);



switch($_POST['fieldWorldNews'])
{
	case "CNN": 
				$current .= "http://rss.cnn.com/rss/cnn_topstories.rss ";
				file_put_contents($filename, $current);
				break;
	case "New York Times": 
				$current .= "http://feeds.nytimes.com/nyt/rss/HomePage ";
				file_put_contents($filename, $current);
				break;
	case "Washington Post": 
				$current .= "http://www.washingtonpost.com/rss/ ";
				file_put_contents($filename, $current);
				break;	
	case "AP Top U.S. News": break;
				$current .= "http://hosted.ap.org/lineups/USHEADS-rss_2.0.xml?SITE=RANDOM&SECTION=HOME ";
				file_put_contents($filename, $current);
				break;
	case "USATODAY": 
				$current .= "http://rssfeeds.usatoday.com/usatoday-NewsTopStories ";
				file_put_contents($filename, $current);
				break;
	case "NPR Topics": 
				$current .= "http://www.npr.org/rss/rss.php?id=1001 ";
				file_put_contents($filename, $current);
				break;
	case "none" : break;

	default : break;	
	
}
switch($_POST['fieldEducationNews'])
{
	case "News - Utah Education Network":
				$current .= "http://www.uen.org/feeds/rss/news.xml.php ";
				file_put_contents($filename, $current);
				break;
	case "U.S. Department of Education": 
				$current .= "https://www.ed.gov/feed ";
				file_put_contents($filename, $current);
				break;
	case "ASCD SmartBrief": 
				$current .= "http://www.smartbrief.com/servlet/rss?b=ASCD ";
				file_put_contents($filename, $current);
				break;
	case "none" : break;
	default : break;			
}

switch($_POST['fieldScience'])
{
	case "AP Top Science News": 
			$current .= "http://hosted.ap.org/lineups/SCIENCEHEADS-rss_2.0.xml?SITE=OHLIM&SECTION=HOME ";
				file_put_contents($filename, $current);
				break;

	case "ScienceDaily Headlines": 
				$current .= "http://feeds.sciencedaily.com/sciencedaily ";
				file_put_contents($filename, $current);
				break;
	case "news@nature": 
				$current .= "http://feeds.nature.com/nature/rss/current ";
				file_put_contents($filename, $current);
				break;
	case ">NASA Image of the Day": 
				$current .= "http://www.nasa.gov/rss/image_of_the_day.rss ";
				file_put_contents($filename, $current);
				break;
	case "none" : break;
	default : break;
}


switch($_POST['fieldSports'])
{
	case "AP Top Sports News":
				$current .= "http://hosted.ap.org/lineups/SPORTSHEADS-rss_2.0.xml?SITE=VABRM&SECTION=HOME
 \n";
				file_put_contents($filename, $current);
				break;
	case "Sports Illustrated": 
				$current .= "http://www.si.com/rss/si_topstories.rss ";
				file_put_contents($filename, $current);
				break;
	case "New York Times - Sports": 
				$current .= "http://feeds1.nytimes.com/nyt/rss/Sports ";
				file_put_contents($filename, $current);
				break;
	case "NBA": 
				$current .= "http://www.nba.com/jazz/rss.xml ";
				file_put_contents($filename, $current);
				break;
	case "none" : break;
	default : break;	
		
}
switch($_POST['fieldTechnology'])
{
	case "TechLEARNing":
				$current .= "http://www.techlearning.com/RSS ";
				file_put_contents($filename, $current);
				break;
	case "Wired Top Stories": 
				$current .= "http://feeds.wired.com/wired/index ";
				file_put_contents($filename, $current);
				break;
	case "New York Times - Technology": 
				$current .= "http://feeds.nytimes.com/nyt/rss/Technology ";
				file_put_contents($filename, $current);
				break;
	case "NPR: Technology": 
				$current .= "http://www.npr.org/rss/rss.php?id=1019 ";
				file_put_contents($filename, $current);
				break;
	case "Macworld":
				$current .= "http://rss.macworld.com/macworld/feeds/main ";
				file_put_contents($filename, $current);
				break;
	case "none" : break;
	default : break;	
	
}

switch($_POST['fieldEntertainment'])
{
	case "NPR Topics - Arts & Culture": 
				$current .= "http://www.npr.org/rss/rss.php?id=1008 ";
				file_put_contents($filename, $current);
				break;
	case "New Yorker Humor": 
				$current .= "http://www.newyorker.com/feed/humor ";
				file_put_contents($filename, $current);
				break;
	case "NPR Topics: Movies": 
				$current .= "http://www.npr.org/rss/rss.php?id=1045 ";
				file_put_contents($filename, $current);
				break;
	case "National Geographic Adventure": 
				$current .= "http://www.nationalgeographic.com/adventure/nga.xml ";
				file_put_contents($filename, $current);
				break;

	case "none" : break;
	default : break;	
	
}

?>
	
	</script>
  </head>
  <body >
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Feedly</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="video.html">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="form1.html">login</a>
                    </li>
                    
                    
                    <li>
                        <a class="page-scroll" data-toggle="modal" href="#aboutModal">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#three">Gallery</a>
                    </li>
                
                    <li>
                        <a class="page-scroll" href="index.html#four">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact_us.html">Contact</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">You have signed up succesfully</h1>
                <h4>let's redirect you </h4>
                <hr>
                <a href="form1.html" id = "home" class="btn btn-primary">Go To Home</a>
            </div>
        </div>
       
    </header>
   
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
            <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
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
        		<h2 class="text-center">Feedly</h2>
        		<h5 class="text-center">
        		   
        		</h5>
        		<p class="text-justify">
        		    Feedly is a feed aggregator application for various web browsers. It compiles data from various rss feeds from a variety of online sources for the user to customize and read according to their interests.
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
