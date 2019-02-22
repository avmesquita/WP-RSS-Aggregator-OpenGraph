/* Support list */
$("#slist a").click(function(e){
   e.preventDefault();
   $(this).next('p').toggle(200);
});
/* Portfolio */
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});
/* *************************************** */ 
/* Scroll to Top */
/* *************************************** */  		
$(document).ready(function() {
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
	/*
	document.onreadystatechange = function () {		
      if (document.readyState == "interactive") {
        tratamentolink();
      }
    }
	*/
    jQuery('kivah-video-destaque').bind('contextmenu',function() { return false; });
	document.getElementById('kivah-video-destaque').addEventListener('loadedmetadata', function() { this.currentTime = 1; }, false);
	/*exibeBoxMineirinho();*/	
});
/* *************************************** */
function exibeBoxCesao()
{	
	$('#box-mineirinho').hide();	
	$('#box-bril-martins').hide();	
	$('#box-ademar').hide();	
	$('#box-felipe-cesarano').hide();		
	$('#box-don-cesao').show();	
	document.getElementById('hotsite-kivah-trailling').style.height = '100px';	
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Clicou na foto do Don Cesao']);
	return false;
}
function exibeBoxMineirinho()
{	
	$('#box-bril-martins').hide();	
	$('#box-ademar').hide();	
	$('#box-felipe-cesarano').hide();		
	$('#box-don-cesao').hide();	
	$('#box-mineirinho').show();		
	document.getElementById('hotsite-kivah-trailling').style.height = '100px';	
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Clicou na foto do Mineirinho']);
	return false;
}
function exibeBoxBrilMartins()
{		
	$('#box-ademar').hide();	
	$('#box-felipe-cesarano').hide();		
	$('#box-don-cesao').hide();	
	$('#box-mineirinho').hide();		
	$('#box-bril-martins').show();
	document.getElementById('hotsite-kivah-trailling').style.height = '100px';	
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Clicou na foto do Kivah Kenner']);
	return false;
}
function exibeBoxAdemar()
{			
	$('#box-felipe-cesarano').hide();		
	$('#box-don-cesao').hide();	
	$('#box-mineirinho').hide();		
	$('#box-bril-martins').hide();	
	$('#box-ademar').show();	
	document.getElementById('hotsite-kivah-trailling').style.height = '100px';	
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Clicou na foto do Ademar']);
	return false;
}
function exibeBoxCesarano()
{				
	$('#box-don-cesao').hide();	
	$('#box-mineirinho').hide();		
	$('#box-bril-martins').hide();	
	$('#box-ademar').hide();	
	$('#box-felipe-cesarano').show();		
	document.getElementById('hotsite-kivah-trailling').style.height = '100px';	
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Clicou na foto do Felipe Cesarano']);	
	return false;
}
function assistaMineirinho()
{
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Lightbox do Mineirinho']);		
}
function assistaKennerKivah()
{
	_gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Lightbox do Kenner Kivah']);			
}
function vidplay() {
    var video = document.getElementById("kivah-video-destaque");
     if (video.paused) {
	   $('#kivah-botao-play').hide();
	   _gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Play no Video Destaque']);   
       video.play();
     } else {
	   _gaq.push(['_trackEvent' , 'Hotsite Kivah' , 'Pausa no Video Destaque']);   
       video.pause();	   
     }
}
