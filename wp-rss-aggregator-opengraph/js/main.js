var ajaxurl = '/wp-admin/admin-ajax.php';	
window.onload = function() {				
    var list = document.getElementsByClassName('wp-rss-aggregator')[0].getElementsByTagName("li");        
    Array.prototype.forEach.call(list, function(el) {			   		
       var texto = el.children[0].innerText; 
       var urlNews = el.children[0].getElementsByTagName('a')[0].href; 
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
