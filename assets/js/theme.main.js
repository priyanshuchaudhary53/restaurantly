/*
Adding `active show` classes to `Special` first tab.
*/

$(function() {
	$('ul.special > li:first-child > a').addClass('active show');
	$('div.special-content > div.tab-pane:first-child').addClass('active show');
});