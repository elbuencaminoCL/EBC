// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
/* $('body').scrollspy({
    target: '.navbar-fixed-top'
}) */

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Closes the Responsive Menu on Click outside Menu
$('body > *').not('nav').click(function() {
    if(!$('button.navbar-toggle').hasClass('collapsed')) {
        $('.navbar-toggle:visible').click();
    }
});

// Necessary for display tooltips
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

// Hide the #toTop Button
$(document).ready(function(){

	// hide #toTop first
	$("#toTop").hide();

	// fade in #toTop
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#toTop').fadeIn();
			} 
			else {
				$('#toTop').fadeOut();
			}
		});
	});

});

// Open overlay
$('#toggle').click(function() {
	$(this).toggleClass('active');
	$('#overlay').toggleClass('open');
 });