function getRootUrl () {
  return $('.baseUrl').val();
}
function showMenu () {
	$('.overly').fadeIn('fast');
}
function hideMenu () {
	$('.overly').fadeOut('fast');
}

function beforeLove()
{
	$('.like-span').addClass('hide');
	$('.miniLoader').addClass('active');
}
function successLove(response)
{
	var $content = $("<p/>").html(response.msg);
	var type;
	if (response.type == 'success') {
		$('.fa-add-love').removeClass('fa-heart-o').removeClass('fa-add-love').addClass('fa-heart');
		type = "green darken-1";
	}else
	{
		type = 'red lighten-1';
	}
	Materialize.toast($content, 6000, type);
	$('.like-span').removeClass('hide');
	$('.miniLoader').removeClass('active');
}

function errorLove(error, xhr, otro)
{
	var $content = $("<p/>").html("Ups, Hubo un error.");
	var type = 'red lighten-1';
	Materialize.toast($content,6000,type);
	$('.like-span').removeClass('hide');
	$('.miniLoader').removeClass('active');
}
function beforeContact(btn)
{
	btn.addClass('disabled').attr('disabled', true).next('.miniLoader').addClass('active');
}
function successContact(response, btn)
{
	btn.removeClass('disabled').attr('disabled', false).next('.miniLoader').removeClass('active');	
	var $content = $("<div/>");
	var $msg     = $("<p/>").html(response.msg);
	var $erros   = $("<ul/>");
	var type;
	if (response.type == 'danger') {
		$.each(response.data, function(index, val) {
			$erros.append("<li>"+val+"</li>");
		});
		type = 'red lighten-1';

	}else
	{
		type = "green darken-1";
		$('.contact-inputs').val('');
		$('.msg').trigger('autoresize');

	}
	$content.append($msg).append($erros);
	Materialize.toast($content, 6000, type);
}
function errorContact(btn)
{
	btn.removeClass('disabled').attr('disabled', false).next('.miniLoader').removeClass('active');	
	errorLove();
}
jQuery(document).ready(function($) {
	var body    = document.getElementsByTagName('body');
	var open    = document.getElementById('open');

	var hammer  = new Hammer(body[0]);
	var hammer2 = new Hammer(open);
	hammer2.on("swipeleft",function(ev){
  		showMenu();
	});
	hammer.on("swiperight",function(ev){
  		hideMenu();
	});
	$('.btn-menu').on('click', function(event) {
		showMenu();
	});
	$(document).on('click','.btn-slide-menu', function(event) {
		hideMenu();
	});
	$('.contLoading').fadeOut('fast', function() {
		$(this).remove();
	});
	$('.lang-btn').on('click', function(event) {
		var btn = $(this);
		$('.lang-overly').removeClass('is-hidden').fadeIn('fast');
	});
	$('.lang-icon').on('click', function(event) {
		var btn = $(this);
		if (!btn.parent().hasClass('no-lang') && !btn.parent().hasClass('current-lang')) {
			$('.lang-overly').fadeOut('fast', function() {
				$(this).addClass('is-hidden');
			});
			$.get(getRootUrl()+'/cambiar-lenguaje/'+btn.val(), function(data) {});
		}
	});
	$('.lang-overly').on('click', function(event) {
		$(this).fadeOut('fast', function() {
			$(this).addClass('is-hidden');
		});
		$.get(getRootUrl()+'/cambiar-lenguaje/es', function(data) {});
	});
	$('.collapse').on('click', function(event) {
		var $next = $(this).siblings('.to-collapse');
		$next.toggleClass('collapsed');
	});
	$(document).on('click', '.voluntario', function(event) {
		event.stopPropagation();
		$('.voluntario-text.active').removeClass('active')
		$('.alt.active').removeClass('active')
		$(this).find('.alt').addClass('active');
		$(this).find('.voluntario-text').html($(this).data('text')).addClass('active');
	});
	$('.voluntario .voluntario-text.active').on('click', function(event) {
		$(this).removeClass('active');
		console.log($(this))
	});
	$('.love').on('click', function(event) {
		if (!$(this).hasClass('loved')) {
			var dataPost = {
					'art_id': $(this).data('id')
			}
			doAjax(getRootUrl()+'/agregar-love', "GET", "json", dataPost, $(this), beforeLove, successLove, errorLove);
		}else
		{
			var $content = $('<p/>').html('Gracias, ya usted le gusta esta publicación');
			var type = "green darken-1";
			Materialize.toast($content, 6000, type);

		}
	});
	$('.btn-contact').on('click', function(event) {
		var url = getRootUrl()+'/contacto/enviar';
		var dataPost = {
			name 	: $('.name').val(),
			subject : $('.subject').val(),
			email 	: $('.email').val(),
			msg 	: $('.msg').val(),
		}
		doAjax(url, "POST", "json", dataPost, $(this), beforeContact, successContact, errorContact);
	});


});