$(function(){
	
	var note = $('#note'),
		ts = new Date("November 12, 2012 10:00:00"),
		newYear = true;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 10*24*60*60*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " dia" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " Hora" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " Minuto" + ( minutes==1 ? '':'s' ) + " y ";
			message += seconds + " Segundo" + ( seconds==1 ? '':'s' )+ " &nbsp; ";
			
			if(newYear){
				message += "para el lanzamiento.";
			}
			else {
				message += "Ya pod&eacute;s participar.";
			}
			
			note.html(message);
		}
	});
	
});
