<?php
/**
 * Template Name: Whats My IP
 *
 * @package WordPress
 */
get_header(); 
?>         

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!--breadcrumb start-->
	<div class="royals-container container">
		<div class="site-breadcumb">
			<h1><?php echo get_the_title(); ?></h1>
			<ol class="breadcrumb breadcrumb-menubar">
				<?php if (function_exists('rider_custom_breadcrumbs')) rider_custom_breadcrumbs(); ?>                    
			</ol>
		</div>  
	</div>
	<!--breadcrumb end-->
	<!--blog start-->
	<div class="royals-container container">
		<div class="row">
		
			<div class="col-md-4 col-sm-5">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-8 col-sm-7 blog-box">
				<div class="blog-wrap">
					<div class="blog-content">					
					    <div class="row" style="">
							 <?php
							   $ip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDE??D_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);		

							   //$ipData = "http://freegeoip.net/xml/" . $ip;
							   //$xmlData = file_get_contents($ipData);
							   //$xml = new SimpleXMLElement($xmlData);
							   
							   //$mapa = '<iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=' . $xml->Latitude . ',' . $xml->Longitude . '&hl=es;z=14&amp;output=embed"></iframe>';
							   
							 ?>
								<p class="paragrafo">
								   <b>Seu Endereço IP:</b> <?php echo $ip; ?>							   
								</p>
								<?php /*
								<p class="paragrafo">
								   <b>Hostname:</b> <?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?>
								</p>								
								<p class="paragrafo">
								   <b>Seu Agente de Usu&aacute;rio:</b> <?php echo $_SERVER ['HTTP_USER_AGENT']; ?>
								</p>		
								<p class="paragrafo">
								   <b>Refer&ecirc;ncia:</b> <?php echo $_SERVER ['HTTP_REFERER']; ?>
								</p>
								<p class="paragrafo">
								   <b>País:</b> <?php echo $xml->CountryName; ?>
								</p>
								<p class="paragrafo">
								   <b>Região:</b> <?php echo $xml->RegionName; ?>
								</p>										
								<p class="paragrafo">
								   <b>Cidade:</b> <?php echo $xml->City; ?>
								</p>
								<p class="paragrafo">
								   <b>Latitude:</b> <?php echo $xml->Latitude; ?>
								</p>									
								<p class="paragrafo">
								   <b>Longitude:</b> <?php echo $xml->Longitude; ?>
								</p>							
								<?php echo $mapa; ?>
								*/ ?>
						</div>
						<div class="row" style="text-align:center;">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Andre Mesquita News -->
							<ins class="adsbygoogle"
								 style="display:inline-block;width:728px;height:90px"
								 data-ad-client="ca-pub-6929321607246969"
								 data-ad-slot="6881752132"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>						
						</div>
					</div>
				</div>

			</div>		

		</div>
	</div>

	<!--blog end-->
</section>

<?php get_footer(); ?>
