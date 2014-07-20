<?php 
    /*
        Author   :      Luke Brown
        Website  :      http://luke.sx
        Created  :      July 2014
        Contact  :      me@luke.sx
    */
 ?>

<div class="outervideo">
<div class="innervideo">

	<?php
		//SETTINGS
		$channel_name   =   'thefancygamerplays';	// Channel Name
		$count          =   12;		// Number of videos
		$em_width       =   300;
		$em_height      =   180;
		$wrap_class		=   'video';	//class name for the div wrapper

		//The output...
		$sxml = simplexml_load_file("http://gdata.youtube.com/feeds/api/users/$channel_name/uploads?max-results=$count");
		foreach ($sxml->entry as $entry) {
		  $vidKey = substr(strrchr($entry->id,'/'),1);
		  echo "
		    <div class=\"$wrap_class\">
		         <iframe width=\"$em_width\" height=\"$em_height\" src=\"http://www.youtube.com/embed/$vidKey?autohide=1&iv_load_policy=3&modestbranding=1&rel=0&showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
		    </div>
		  ";
		}
	?>
</div>
</div>