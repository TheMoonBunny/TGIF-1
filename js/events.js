$(document).on('ready', function(){
	event();
})

function event()
{
	$('.calendar-container .month .day a').on('click', function(){
		$('body').addClass('is-event-view');
		return false;
	});
	$('.event a').on('click', function(){
		$('body').removeClass('is-event-view');
		return false;
	});
}