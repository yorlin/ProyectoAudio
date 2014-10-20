'use strict';
var numeroMinutos = 1;
$(document).on('click', '.cantidad', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		if (oldValue < 6) {
			newVal = parseInt(oldValue) +1;
		} else {
			newVal = 6;
		}
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
	$("#cant").val(newVal);
});

$(document).on('click', '.minutos', function () {    
	var btn = $(this),
		newVal = 0,
		minutos = " Minutos";
	
	if (btn.attr('data-dir') == 'up') {
		if (numeroMinutos < 6) {
			numeroMinutos = parseInt(numeroMinutos) +1;
		} else {
			numeroMinutos = 6;
		}
	} else {
		if (numeroMinutos > 1) {
			numeroMinutos = parseInt(numeroMinutos) - 1;
		} else {
			numeroMinutos = 1;
		}
	}
	if (numeroMinutos == 1) {
		minutos = " Minuto";
	};
	btn.closest('.number-spinner').find('input').val(numeroMinutos + minutos);3
	$("#cant").val(numeroMinutos);
});

$(document).on('click', '#tiempo', function () {
	$('#selector').html('<div class="col-xs-3 col-xs-offset-3">'+
        '<div class="input-group number-spinner">'+
         ' <span class="input-group-btn">'+
           ' <label class="btn minutos btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></label>'+
          '</span>'+
          '<input type="text" name="cantidadVisual" class="form-control text-center" value="1" readonly>'+
         ' <span class="input-group-btn">'+
            '<label class="btn minutos btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></label>'+
                                  '</span>'+
        '</div>'+
      '</div>');
	$("#cant").val(1);
});

$(document).on('click', '#partes', function () {
	$('#selector').html('<div class="col-xs-3 col-xs-offset-3">'+
        '<div class="input-group number-spinner">'+
         ' <span class="input-group-btn">'+
           ' <label class="btn cantidad btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></label>'+
          '</span>'+
          '<input type="text" name="cantidad"  class="form-control text-center" value="1" readonly>'+
         ' <span class="input-group-btn">'+
            '<label class="btn cantidad btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></label>'+
                                  '</span>'+
        '</div>'+
      '</div>');
	$("#cant").val(1);
});

/*$( "#upload" ).submit(function( e ) {
    e.preventDefault();
    if (validar_archivo()) {
      var data = new FormData( this );
      uploadFile(data);  
    } else {
      alert('Format invalid!!');
    }
  });
  function uploadFile (argument) {
    var request = false;
    var id;
    var url = $("#upload").attr('action');
    $.ajax({
      url:url,
      type:'POST',
      data:argument,
      processData:false,
      contentType:false,
    }).done(function( data ){
      checkConvert(data);
    }).fail(function() {
        $body.removeClass("loading");
        $( "body" ).append('error');
    });
  }

  function validar_archivo(){
    var archivo=document.getElementById('InputFile').value;
    var ext=archivo.substr(-4, 4);
    if(ext=='.wma'||ext=='.mp3'||ext=='.ogg'||ext=='.wav'){
      return true;
    }else{
    return false;
}
}*/