function ajaxElim (url,dataPost, btn) {
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: dataPost,
		beforeSend:function(){
			$('.miniLoader').addClass('active');
			btn.addClass('disabled').attr('disabled',true);
		},
		success:function(response)
		{
			$('.miniLoader').removeClass('active');
			$('.responseAjax').addClass('alert-'+response.type).addClass('active').children('p').html(response.msg);
			if (response.type == 'danger') {
				btn.removeClass('disabled').attr('disabled',false);
			}else if(response.type == 'success')
			{
				$('.to-elim').parent().parent().remove();
			}
		},
		error:function()
		{
			$('.miniLoader').removeClass('active');
			$('.responseAjax').addClass('alert-danger').addClass('active').children('p').html('Ups, ocurrio un error.');
			btn.removeClass('disabled').attr('disabled',false);

		}
	});
}
function hideResponseAjax () {
	$('.responseAjax').removeClass('active');
	$('.responseAjax').removeClass('alert-success');
	$('.responseAjax').removeClass('alert-danger');

}
function clonar(target, name) {
	var toClone = $('.'+target);
	var cloned = toClone.clone();
	toClone.removeClass(target).addClass('active').children('input').attr('name',name);
	toClone.after(cloned);

}
function removeCloned(esto) {
	esto.parent().remove();
}
jQuery(document).ready(function($) {
	hideResponseAjax();
	var base = $('.baseUrl').val();
	//buscar sedes y proyectos
	$('.sedes').on('change', function(event) {
		var val = $(this).val();
		if (val == "") {
			$('.sedes-group').addClass('hidden');
			$('.response-option').remove();
			$('.btn-loader').removeClass('hidden');
			$('.loading-fa').addClass('hidden');
			$('.loading-fa').removeClass('fa-times').removeClass('fa-check');

		}else
		{
			$.ajax({
				url: base+'/administrador/buscar-sedes-o-proyectos',
				type: 'GET',
				dataType: 'json',
				data: {id: val},
				beforeSend: function()
				{
					$('.loading-fa').addClass('hidden');
					$('.loading-fa').removeClass('fa-times').removeClass('fa-check');
					$('.response-option').remove();
					$('.btn-loader').removeClass('hidden');
					$('.sedes-group').removeClass('hidden');
				},
				success: function(response)
				{
					$('.btn-loader').addClass('hidden');
					$('.loading-fa').removeClass('hidden');
					if (response.type == 'success') {
						$('.loading-fa').addClass('fa-check');
						$.each(response.data, function(index, val) {
							 $('.response-content').append('<option class="response-option" value="'+val.id+'">'+val.title+'</option>');
						});
					}else
					{
						$('.loading-fa').addClass('fa-times');
					}
				}
			})
		}
		
	});
	//modal events
	$('.modal').on('hide.bs.modal', function(event) {
		$('.to-elim').removeClass('to-elim');
		$('.modal .btn').removeClass('disabled').attr('disabled', false);
		hideResponseAjax();
	});

	$('.btn-elim-art').on('click', function(event) {
		var btn = $(this);
		btn.addClass('to-elim');
		$('.btn-modal-elim-art').val(btn.val());
	});
	$('.btn-modal-elim-art').on('click', function(event) {
		var url = base+'/administrador/mostrar-articulos/eliminar',
		btn = $(this),
		dataPost = {
			'id' : btn.val()
		};
		ajaxElim(url, dataPost, btn);
	});
	$('.btn-clone').on('click', function(event) {
		var btn    = $(this);
		var target = btn.data('target');
		var name   = btn.data('name');
		clonar(target, name);
	});
	$('.btn-elim-image').on('click', function(event) {
		var btn = $(this);
		var name    = btn.data('what-to-elim');
		var url 	= btn.data('url');
		btn.addClass('to-elim');
		$('.what-to-elim').html(name);
		$('.btn-elim-thing-modal').val(btn.data('id')).attr('data-url',url);
	});
	$('.btn-elim-thing-modal').on('click', function(event) {
		var btn = $(this);
		var dataPost = {
			'img_id' : btn.val()
		};
		var url = $(this).data('url');
		ajaxElim(url, dataPost, btn);
	});
	$('.btn-elim-user').on('click', function(event) {
		var btn = $(this);
		var url = btn.data('url');
		btn.addClass('to-elim');
		$('.btn-modal-elim-user').val(btn.val()).attr('data-url',url);
	});
	$('.btn-modal-elim-user').on('click', function(event) {
		var btn = $(this);
		var dataPost = {
			'user_id' : btn.val()
		};
		var url = $(this).data('url');
		ajaxElim(url, dataPost, btn);
	});
	$(document).on('click','.dimiss-cloned', function(event) {
		removeCloned($(this));
	});
	$('.btn-activate').on('click', function(event) {
		var btn = $(this);

		$.ajax({
			url: base+'/administrador/cambiar-estado',
			type: 'POST',
			dataType: 'json',
			data: {
				id: btn.val()
			},
			beforeSend:function(){
				btn.next('.miniLoader').addClass('active');
				btn.addClass('hidden');
			},
			success:function(response)
			{
				btn.next('.miniLoader').removeClass('active');
				btn.removeClass('hidden');
				$('.responseAjax').addClass('alert-'+response.type).addClass('active').children('p').html(response.msg);
				if (response.type == "success") {
					if (response.state == 1) {
						btn.addClass('dark').html('Desactivar');
					}else
					{
						btn.removeClass('dark').html('Activar');
					}
				};
			},
			error:function()
			{
				btn.next('.miniLoader').removeClass('active');
				btn.removeClass('hidden');
				$('.responseAjax').addClass('alert-danger').addClass('active').children('p').html('Ups, ocurrio un error.');

			}
		});
		
	});
});