<?php 

/*
 * Template Name: Sidebar News
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
	font-family:FANTASY;
}
.wprss-avm-leiamais{
	color:#FF500!important;
	font-weight:bold;	
}
.wprss-feed-meta{
	padding-top:20px;
	text-align:center;
	font-weight:bold;
}
.wprss-time-ago{
	padding-top:10px;
	text-align:center;
	color:#FF50AA;
}
.feed-item{
	padding-top:50px;
	list-style-type: none;
    border-bottom: 1px dashed #7c9b30;	
	padding: 30px 0;		
}
.rss-aggregator{
	columns:1;
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
			<div class="col-md-8 col-sm-7 blog-box">
				<div class="blog-wrap">
					<div class="blog-content">	
						<div class="col-md-12" style="text-align:center;max-width:700px;max-height:100px;">
						  <br>						  
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Sites - Top - News Sidebar - 700x100 -->
							<ins class="adsbygoogle"
								 style="display:block"
								 data-ad-client="ca-pub-6929321607246969"
								 data-ad-slot="9744987108"
								 data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
						<div class="col-md-12" style="text-align:center;max-width:700px;max-height:100px;">
						  <br>						  					
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Sites - Top - News Sidebar - Responsive Links -->
							<ins class="adsbygoogle"
								 style="display:block"
								 data-ad-client="ca-pub-6929321607246969"
								 data-ad-slot="1754816440"
								 data-ad-format="link"></ins>
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
			<div class="col-md-4 col-sm-5">
				<?php get_sidebar(); ?>
			</div>			
			<?php endwhile; ?>
		</div>
	</div>
	<!--blog end-->
</section>

<?php get_footer(); ?>
