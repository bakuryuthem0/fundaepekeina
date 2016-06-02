function makeContact (base,boton) {
	$.ajax({
		url: base+'/contacto/enviar',
		type: 'POST',
		dataType: 'json',
		data: {
			name 	: $('.name').val(),
			subject : $('.subject').val(),
			email 	: $('.email').val(),
			msg 	: $('.msg').val(),
		},
		beforeSend:function()
		{
			$('.miniLoader').addClass('active');
			boton.attr('disabled',true).addClass('disabled');
			$('.response-danger').html('').removeClass('active');
			removeAjax();
		},
		success:function(response)
		{
			boton.attr('disabled',false).removeClass('disabled');
			$('.miniLoader').removeClass('active');
			$('.responseAjax').addClass('alert-'+response.type).children('p').html(response.msg);
			$('.responseAjax').addClass('active');
			if (response.type == 'danger') {
				$.each(response.data, function(index, val) {
					$('.response-danger-'+index).html(val).addClass('active');
				});
			}else
			{
				$('.form-control').val('');
			}
		},
		error:function()
		{
			boton.attr('disabled',false).removeClass('disabled');
			$('.miniLoader').removeClass('active');
			$('.responseAjax').addClass('alert-danger').addClass('active').children('p').html('Ups, el servidor no responde intente de nuevo.');
		}
	});
}
function removeAjax() {
	$('.responseAjax').removeClass('alert-danger').removeClass('alert-success').removeClass('active');
}
function removeError (input) {
	input.next('small').html('').removeClass('active');
}
function hidePopover(el)
{
	$('.love').popover('hide');
}
jQuery(document).ready(function($) {
	var url = $('.baseUrl').val();

	$('.contLoading').addClass('active');
	if ($(window).width() > 991) {
		var news = $('.news-container').height();
		var blog   = $('.blog-sidebar');
		if (news > parseInt(blog.height())*2) {
			if($('.blog-sidebar').length > 0 && $('.no-scroll').length < 1)
			{
				var footer = $('#footer').offset().top;
				$(window).on('scroll', function(event) {
					if ($(window).scrollTop() > $('.sidebar-container').offset().top) {
						blog.addClass('fixed');
						if ((parseInt(blog.offset().top)+parseInt(blog.height())) >= footer) {
							blog.addClass('absolute');
						}else if($(window).scrollTop() < blog.offset().top)
						{
							blog.removeClass('absolute');
						}
					}
					else
					{
						blog.removeClass('fixed');
					}
				});
			}
		}
	}

	$('.send-subscriber').on('click', function(event) {
		if ($('.subscriber-input').val() != "") {
			$.ajax({
				url: url+'/suscribir-nuevo',
				type: 'POST',
				dataType: 'json',
				data: { email : $('.subscriber-input').val() },
				beforeSend:function()
				{
					$('.subscriber-check').addClass('hidden');
					$('.subscriber-times').addClass('hidden');

					$('.btn-loader').addClass('active');
				},
				success:function(response)
				{
					$('.btn-loader').removeClass('active');
					if (response.type == 'success') {
						$('.subscriber-check').removeClass('hidden');
					}else
					{
						$('.subscriber-times').removeClass('hidden');
					}
				},
				error:function()
				{
					$('.btn-loader').removeClass('active');
					$('.subscriber-times').removeClass('hidden');
					
				}
			});
		}
	});
	if ($('.mapa').length > 0) {
		$('.state').hover(function() {
			console.log('hola');
			var state = $(this).attr('id');
			$('.'+state).addClass('active');
		}, function() {
			$('.states').removeClass('active');
		});
	}
	$('.btn-contact').on('click', function(event) {
		makeContact($('.baseUrl').val(),$('.btn-contact'));
	});
	$('.form-control').on('focus', function(event) {
		removeError($(this));
	});
	$('.love').on('click', function(event) {
		if (!$(this).hasClass('loved')) {
			$.ajax({
				url: url+'/agregar-love',
				type: 'GET',
				dataType: 'json',
				data: {
					'art_id': $(this).data('id'),
				},
				beforeSend: function()
				{
					$('.like-span').addClass('hidden');
					$('.miniLoader').addClass('active');
				},
				success:function(response)
				{
					if (response.type == 'success') {
						$('.fa-add-love').removeClass('fa-heart-o').removeClass('fa-add-love').addClass('fa-heart');
						$('.love').attr('data-title','¡Exito!')

					}else
					{
						$('.love').attr('data-title','Ups!')
					}
					$('.love').attr('data-content',response.msg)
					$('.love').popover('show')
					$('.like-span').removeClass('hidden');
					$('.miniLoader').removeClass('active');
					setTimeout(hidePopover, 3000)
				},
				error: function()
				{
					$('.love').attr('data-title','Ups!')
					$('.love').attr('data-content','Hubo un error.');
					$('.love').popover('show');
					setTimeout(hidePopover, 3000)
					$('.like-span').removeClass('hidden');
					$('.miniLoader').removeClass('active');
				}
			})
		}
	});
});