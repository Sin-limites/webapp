function slideSwitch() {
	var $active = $('div#banner IMG.active');
	var $next = $active.next();    

	$next.addClass('active');

	$active.removeClass('active');
}

$(function() {
	setInterval( "slideSwitch()", 5000 );
});