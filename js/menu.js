/**
 * Created by thibautwavreille on 30/01/14.
 */

$( document ).ready(function () {
    loadHash();
});

function loadHash(){
    if(window.location.hash){
        $('#nav').children().find('li').removeClass('active');
        $(window.location.hash + 'Nav').addClass('active');
        window.location.href = context + "/#" + div;
    }
}

function loadAndSlide(div) {
    var context = buildContextPath();
	if(div != ""){
		window.location.href = context + "/#" + div;
        loadHash();
	}
}

function loadEntry(entry) {
    var context = buildContextPath();
	if(entry != ""){
		window.location.href = context + '?p=' + entry;
	} else {
		window.location.href = context;
	}
}

function buildContextPath(){
	var context = window.location.protocol + "//" + window.location.hostname;
    if (window.location.href.indexOf('new') != -1) {
        context += "/new";
    }
	return context;
}