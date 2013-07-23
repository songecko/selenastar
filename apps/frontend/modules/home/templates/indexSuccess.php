<div class="header">
	<a class="btn_trans" href="<?php echo url_for('homepage') ?>">volver</a>
	<a class="btn_tweet" href="<?php echo url_for('homepage') ?>">Participar</a>
</div>
<div class="container">
	<div class="disc">
		<?php include_component('home', 'album') ?>		
	</div>
</div>
<div id="tweetModal" class="modal cont_pop hide fade" tabindex="-1" role="dialog" aria-labelledby="tweetModalLabel" aria-hidden="true">
	<a class="btn_close" href="#" data-dismiss="modal" aria-hidden="true">cerrar</a>
	<div class="modal-body">
	</div>
</div>
<script type="text/javascript">
var timeoutID;

var startTimer = function()
{
	timeoutID = window.setTimeout(refreshAlbum, 5000);
};

var refreshAlbum = function()
{
	$.post('<?php echo url_for('get_album') ?>', 
		function(data, textStatus, jqXHR)
		{
			$('.container .disc').html(data);

			startTimer();
		}
	);
};

$(document).ready(function()
{
	startTimer();
	
	$('#tweetModal').on('hidden', function() 
	{
   		$(this).removeData('modal');
		$('#tweetModal .modal-body').html('');
	});
});
</script>