$(document).ready(function() {
	//--------------------------------
	$(".totop").hide();	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.totop').fadeIn();
		} else {
			$('.totop').fadeOut();
		}
	});
	$(".totop a").click(function(e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
    $(".bola-colorida").click(function() {
      var el = $(this);
      var idmodelocor = el.data('id');			
      $.ajax({
          url: ajaxurl,
          type: 'get',
          data: {
              'action': 'get_actiongel_modelo_by_id',
              'COD_MODELO': idmodelocor
          },
          success: function( data ){
            var data = JSON.parse(data);			
			var out = '<div><img data-u="image" src="/wp-content/themes/Kenner2013/landing-pages/hotsite-action-gel-v2/img/modelos/'+data.foto1 +'" title="Veja por outros ângulos" /></div><div><img data-u="image" src=/wp-content/themes/Kenner2013/landing-pages/hotsite-action-gel-v2/img/modelos/"'+data.foto2 +'" title="Veja por outros ângulos" /></div><div><img data-u="image" src=/wp-content/themes/Kenner2013/landing-pages/hotsite-action-gel-v2/img/modelos/"'+data.foto3 +'" title="Veja por outros ângulos" /></div>';
			$('#actiongel-slides').html(out);
			
          }
      });
	});
  $("#avm-btn-envio").click(function() {
	  
  });
		
  $("#avm-btn-generator").click(function() {
	var email = $("#email").val();
	var quantidade = $("#quantidade").val();
    $.ajax({
        url: ajaxurl,
        type: 'get',
        data: {
            'action': 'app_fotocopia_online_generator',
            'email': email,
			'quantidade' : quantidade
        },
        success: function( data ){           
            $('#container-fotocopiaapp').html(data);						  		                
        }
    });
  });
	
});