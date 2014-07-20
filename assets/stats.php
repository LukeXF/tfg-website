<div style="float: left; width: 33%; text-align: center;">
	<h2>  
		<?php echo getYouTubeVideoViews('thefancygamerplays'); ?>
	</h2>
	<h3>Total Views</h3>
</div>

<div style="float: left; width: 33%; text-align: center;">
	<h2>  
		<?php echo getYouTubeVideoViews('thefancygamerplays', 'subscriberCount'); ?>
	</h2>
	<h3>Total Subscribers</h3>
</div>

<div style="float: right; width: 33%; text-align: center;">
	<h2>  
				<?php	printf("%d\n",$uploads->data->totalItems,$user->entry->{'yt$statistics'}->totalUploadViews); ?>
	</h2>
	<h3>Total Videos</h3>
</div>