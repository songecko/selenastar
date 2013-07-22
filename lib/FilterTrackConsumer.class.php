<?php
/**
 * Example of using Phirehose to display a live filtered stream using track words
 */
class FilterTrackConsumer extends OauthPhirehose
{
	/**
	 * Enqueue each status
	 *
	 * @param string $status
	 */
	public function enqueueStatus($status)
	{
		/*
		 * In this simple example, we will just display to STDOUT rather than enqueue.
		* NOTE: You should NOT be processing tweets at this point in a real application, instead they should be being
		* enqueued and processed asyncronously from the collection process.
		*/
		self::$tweetCounter ++;
  		$filePath = '/tmp/tweets/' . time() . '_' . self::$tweetCounter . '.tweet';
  		file_put_contents($filePath, $status);
	}
}