var ajaxurl = '/wp-admin/admin-ajax.php';	
window.onload = function() {				
    var list = document.getElementsByClassName("rss-aggregator")[0];        
    Array.prototype.forEach.call(list.childNodes, function(el) {			   		
       var texto = el.innerHTML; 
       var urlNews = el.childNodes[0].href; 
       var img = urlNews;
       jQuery.ajax({url: ajaxurl, 
                    type: 'POST', 
                    data: { 'action': 'obterNewsOpenGraph', 'URL': urlNews }, 
                    success: function( data ){ 
                        var newsObj = JSON.parse(data.substring(0,data.length-1));
                        el.innerHTML = "<div class='wprss-avm-img'><img class='img-responsive' src='"+ newsObj.image +"'></div>" + "<div class='wprss-avm-text'>"+ newsObj.description +"</div><br><span class='wprss-avm-leiamais'>Leia Mais: </span>" + texto;
                    },
                    error: function (response){console.log(response);}});
                   });	
}
