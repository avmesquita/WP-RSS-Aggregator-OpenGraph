<?php
/**
 * Template Name: Twitter Timeline
 *
 * @package WordPress
 */
get_header(); 

?>         

<style>
.litero-form-field {
    height: 40px;
    padding: 5px 10px;
    background: transparent;
    color: #656565;
    border: 5px solid #f5f5f5;
    font-size: 14px;
    line-height: 1.43;
	border-radius: 20px;
}
.litero-paragrafo {	
	font-size: 14px;
	line-height: 1.43;
    text-align:center;	
}
.wrapper {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
}
.masonry {
    margin: 1.5em 0;
    padding: 0;
    -moz-column-gap: 1.5em;
    -webkit-column-gap: 1.5em;
    column-gap: 1.5em;
    font-size: .85em;
}

.item {
    display: inline-block;
    background: #fff;
    padding: 1.5em;
    margin: 0 0 1.5em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.18);
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">        
		
        <link href="/wp-content/themes/writr/litero/css/realtime.css" rel="stylesheet">		
		
		<?php /*
		<link href="/wp-content/themes/writr/litero/css/bootstrap.min.css" rel="stylesheet">		
		<link href="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/css/font-awesome.min.css" rel="stylesheet">				
		<link href="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/css/style.css" rel="stylesheet">		
		<link href="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/css/blue.css" rel="stylesheet"> 
		*/ ?>
        <div id="mascara"></div>		
		<div class="content">
			<div class="container">
                <div class="bgdialogo">
                </div>
				<div class="main-content">
				  <div class="row">
					<div class="col-md-12">
                      <center>
					      <H1>Twitter Timeline</H1>
  
                          <H3>&nbsp;</H3>					  
                      </center>                      
					</div>
					<div class="col-md-12">
					  <center>
					     <hr class="litero-linha-amarela">					     
                      </center>					  
					</div>
					<div class="col-md-12">
					    <div class="wrapper">
					    <center><h3><b>TWEETS OF AVMESQUITA</b></h3></center>						
						<div class="masonry">

					<?php
						function buildBaseString($baseURI, $method, $params) {
							$r = array();
							ksort($params);
							foreach($params as $key=>$value){
								$r[] = "$key=" . rawurlencode($value);
							}
							return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
						}

						function buildAuthorizationHeader($oauth) {
							$r = 'Authorization: OAuth ';
							$values = array();
							foreach($oauth as $key=>$value)
								$values[] = "$key=\"" . rawurlencode($value) . "\"";
							$r .= implode(', ', $values);
							return $r;
						}

						$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

						$oauth_access_token = "35401122-JceqhoUPhsgkVq0BxkIP32kDx1M2IsqIHxU5xq2Sk";
						$oauth_access_token_secret = "u2Xs2uMrnEFdN0ToMN71XjLLdNCdETst5RfWMIx6JXUel";
						$consumer_key = "04o0qAR66aBdBVjJGs6hdXzNU";
						$consumer_secret = "EeMzCkIFusTPYrcf9VE11KykF7JUM9qNPG5xZxUIXcYm6HQZZE";

						$oauth = array( 'oauth_consumer_key' => $consumer_key,
										'oauth_nonce' => time(),
										'oauth_signature_method' => 'HMAC-SHA1',
										'oauth_token' => $oauth_access_token,
										'oauth_timestamp' => time(),
										'oauth_version' => '1.0');

						$base_info = buildBaseString($url, 'GET', $oauth);
						$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
						$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
						$oauth['oauth_signature'] = $oauth_signature;

						// Make requests
						$header = array(buildAuthorizationHeader($oauth), 'Expect:');
						$options = array( CURLOPT_HTTPHEADER => $header,
										  //CURLOPT_POSTFIELDS => $postfields,
										  CURLOPT_HEADER => false,
										  CURLOPT_URL => $url,
										  CURLOPT_RETURNTRANSFER => true,
										  CURLOPT_SSL_VERIFYPEER => false);

						$feed = curl_init();
						curl_setopt_array($feed, $options);
						$json = curl_exec($feed);
						curl_close($feed);

						$twitter_data = json_decode($json);
						
						foreach($twitter_data as $tweet)
						{							
							echo "<div class='item' style='width:200px;border:1px solid black;'>";
							echo "  <p style='vertical-align:top;'>";							
							echo $tweet->text . '<br><br>';
							echo "  </p>";
							echo "</div>";
							echo "&nbsp;&nbsp;";
						}
						
						
					    //print it out
					    //print_r ($twitter_data);

					?>
					    </div>
					  </div>
					</div>
					<div class="col-md-12">
					  <br>&nbsp;<br>
					</div>					
					<div class="col-md-12">
					  <center>
					     <hr class="litero-linha-amarela">					     
                      </center>					  
					</div>
					<div class="col-md-12">
					  <br>&nbsp;<br>
					</div>				
					<div class="col-md-12 kivah-trailing" id="hotsite-kivah-trailling" name="hotsite-kivah-trailling">
					  <br>&nbsp;<br>
					</div>
					
				   </div>
				</div>
			</div>
		</div>   		
		</div>
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		<?php /*<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/jquery.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/bootstrap.min.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/jquery.isotope.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/jquery.prettyPhoto.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/filter.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/jquery.themepunch.tools.min.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/jquery.themepunch.revolution.min.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/respond.min.js"></script>
		<script src="https://s3-sa-east-1.amazonaws.com/cdn.kenner.com.br/landing-pages/hotsite-kivah/js/html5shiv.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5lightbox/html5lightbox.js" type="text/javascript"></script>
		
		<script src="/wp-content/themes/writr/litero/js/custom.js"></script>				
		*/ ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

	    
<?php get_footer(); ?>
