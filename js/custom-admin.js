function beforeElim (btn) {
	btn.prevAll('.miniLoader').addClass('active');
	btn.addClass('disabled').attr('disabled',true);
}
function successElim (response, btn) {
	$('.miniLoader').removeClass('active');
	$('.responseAjax').addClass('alert-'+response.type).addClass('active').children('p').html(response.msg);
	if (response.type == 'danger') {
		btn.removeClass('disabled').attr('disabled',false);
	}else if(response.type == 'success')
	{
		$('.to-elim').parent().parent().remove();
	}
}
function errorElim(btn)
{
	$('.miniLoader').removeClass('active');
	$('.responseAjax').addClass('alert-danger').addClass('active').children('p').html('Ups, ocurrio un error.');
	btn.removeClass('disabled').attr('disabled',false);

}
function ajaxElim (url,dataPost, btn) {
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: dataPost,
		beforeSend: function(){
			beforeElim(btn)
		},
		success: function(response){
			successElim(response, btn)
		},
		error: function(){
			errorElim(btn)
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
function descargarArchivo(contenidoEnBlob, nombreArchivo,callBackFunction) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var save = document.createElement('a');
        save.href = event.target.result;
        save.target = '_blank';
        save.download = nombreArchivo || 'archivo.dat';
        var clicEvent = new MouseEvent('click', {
            'view': window,
                'bubbles': true,
                'cancelable': true
        });
        save.dispatchEvent(clicEvent);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    };
    reader.readAsDataURL(contenidoEnBlob);
    callBackFunction();
}

function getData() {
	var txt = $('.btn-download').val();
	return txt;
}
function generarHtml(datos) {
    var texto = [];
    texto.push(datos);
    //No olvidemos especificar el tipo MIME correcto :)
    return new Blob(texto, {
        type: 'text/html'
    });
}
function llamadaPatras() {
	$('.btn-download').removeClass('disabled').attr('disabled', false);
}
jQuery(document).ready(function($) {
	hideResponseAjax();
	var base = $('.baseUrl').val();
	//buscar sedes y proyectos
	$('.sedes').on('change', function(event) {
		var val = $(this).val();
		console.log(val)
		if (val == "") {
			$('.subtitle-container').addClass('hidden');
		}else
		{
			if (val == 3) {
				$('.subtitle-container').removeClass('hidden').find('input').attr('disabled',false);
			}else
			{
				$('.subtitle-container').addClass('hidden').find('input').attr('disabled',true);
			}
		}
	});
	//modal events
	$('.btn-elim').on('click', function(event) {
		$($(this).data('target')+' .modal-title > span').html($(this).data('toelim'));
		addValToElim ($('.btn-elim-thing'), $(this));
	});
	$('.btn-elim-thing').on('click',  function(event) {
		var btn = $(this);
		var url = btn.data('url');
		var dataPost = {};
		dataPost[btn.data('tosend')] = btn.val();
		doAjax(url, 'POST', 'json', dataPost, btn, beforeElim, elimSuccess, ajaxError);
	});

	$('.modal').on('hide.bs.modal', function(event) {
		$('.to-elim').removeClass('to-elim');
		$('.modal .btn').removeClass('disabled').attr('disabled', false);
		hideResponseAjax();
	});
	$('.btn-clone').on('click', function(event) {
		var btn    = $(this);
		var target = btn.data('target');
		var name   = btn.data('name');
		clonar(target, name);
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
	$('.btn-download').on('click', function(event) {
		$('.btn-download').addClass('disabled').attr('disabled', true);
		var fecha = (new Date()).toLocaleDateString();
		descargarArchivo(generarHtml(getData()),'boletin'+fecha+'.html',llamadaPatras);
	});
	$('.removeGalleryImage').on('click', function(event) {
		var close = $(this);
		if (close.nextAll('.shake').hasClass('toElim')) {
			$('.img_'+close.val()).remove();
			close.nextAll('.shake').removeClass('toElim');
		}else
		{
			$input = $('<input>').attr({
				'type': 'hidden',
				'name': 'img['+close.val()+']'
			})
			.addClass('img_'+close.val())
			.val(close.val());
			
			close.nextAll('.shake').addClass('toElim');
			$('.inputsHolder').append($input);
		}
	});
});