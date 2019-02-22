<?php 

/*
 * Template Name: Full Width News
 */

get_header(); ?>

<style>
.wprss-avm-img{
	max-width:90%;
	margin-left:20px;	
}
.wprss-avm-text{
	text-align:justify;
	padding-top:15px;
}
.wprss-avm-leiamais{
	
}
.wprss-feed-meta{
	padding-top:20px;
	text-align:center;
}
.wprss-time-ago{
	padding-top:10px;
	text-align:center;
}
.feed-item{
	padding-top:50px;
	list-style-type: none;
    border-bottom: 1px dashed #7c9b30;	
	padding: 30px 0;		
}
.rss-aggregator{
	columns:2;
	padding-top:50px;
}
</style>   
   
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php while ( have_posts() ) : the_post(); ?>
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
			<div class="col-md-12 col-sm-12 blog-box">
				<div class="blog-wrap">
					<div class="blog-content">
						<div class="col-md-12" style="text-align:center;">
						  <br>						  
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
						<br><br>
						<div class="col-md-12">
						  <?php					  
							 echo do_shortcode('[wp-rss-aggregator thumbnails="yes" excerpts="yes"]');
						  ?>					
						</div>					
						<div class="col-md-12" style="text-align:center;padding-top:50px;">
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

			<?php endwhile; ?>

		</div>

	</div>

	<!--blog end-->
</section>

<?php get_footer(); ?>
