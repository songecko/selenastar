<ul>
	<?php $i=0; ?>
	<?php foreach ($tweets as $tweet):  ?>
        <?php $user = $tweet->getUser(); $i++; ?>
        <?php //foreach ($users as $user): $i++; ?>
	<li class="avatar bg<?php echo $i ?>"> 
		<a data-toggle="modal" href="<?php echo url_for('oembed_tweet', array('twitter_guid' => $user->getTweetId())) ?>" data-target="#tweetModal">
			<span>
				<img src="<?php echo $user->getSocialPicture() ?>" />
				<div class="user"><?php echo $user->getSocialName() ?><p>click para ver el mensaje</p></div>
			</span>
		</a> 
	</li>    
	<?php endforeach;?>
</ul>