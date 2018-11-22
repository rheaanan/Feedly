<?php
ob_start();
ob_flush();
flush();
$oldfeed=file_get_contents($feed);echo('<script>console.log("here1")</script>');
while(true){
		$feed="rss.xml";
	            clearstatcache();
	            $newfeed=file_get_contents($feed);echo('<script>console.log("here1")</script>');
		        if(strcmp($newfeed,$oldfeed)!=0){
		        	console.log("here");
		            sendfeed($feed); 	
		            echo("<script>window.alert('i changed');</script>");
		           // echo("<script>location.reload();</script>");
		            $oldfeed = $newfeed;
    		    }
    		    
    		    }
    		    
    		    
    		    
    		    
    	function sendfeed($feed){
    		echo("abc");
    		ob_flush();
flush();
            $feed="rss.xml";
            echo('<script>console.log("in send feed")</script>');
            //clearstatcache();
            $xml = simplexml_load_file($feed);
            echo('<script>console.log("after xml loadbefore sort")</script>');
            $entries = $xml->xpath("//item");
            echo('<script>console.log("before sort")</script>');
            //Sort feed entries by pubDate
            usort($entries, function ($feed1, $feed2) {
                return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
            });
            echo('<script>console.log("after sort")</script>');
            ?>
           <?php
            //Print all the entries
            $no=0;
            echo('<script>console.log("started")</script>');
            foreach($entries as $entry){
                ?>
                
                <div class="container">
                    <a target="_blank" style="target-new:tab;font-size:30px" href="<?= $entry->link ?>"><?= $entry->title ?>
                    </a> (<?= parse_url($entry->link)['host'] ?>)
                <p><?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)) ?></p>
                <p><?= $entry->description ?></p>
                </div>
                
                
                <?php
           echo('<script>console.log("out of send feed")</script>'); }}
            ?>
   
