<?php
/**
 * Template Name: OpenGraph
 *
 * @package WordPress
 */
require_once('/sites/andremesquita/wp-content/themes/avm-andremesquita/opengraph/OpenGraph.php');
  
get_header(); 
?>         
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">        		        
		
        <div id="mascara"></div>		
		<div class="content">
			<div class="container">
                <div class="bgdialogo">
                </div>
				<div class="main-content">
				  <div class="row">
					<div class="col-md-12">
                      <center>
					      <H1>OpenGraph</H1>
  
                          <H3>- andremesquita.com -</H3>					  
                      </center>                      
					</div>
					<div class="col-md-12">
					  <br>
					</div>
					<div class="col-md-12">
					  <?php	
					        $imagem = obterImagemOpenGraph("https://www.andremesquita.com/");							
							echo "<img src='$imagem'>";
							
							$titulo = obterDadoOpenGraph("https://www.andremesquita.com/","title");
							echo "<h2>$titulo</h2>";
					  
							$graph = OpenGraph::fetch('https://www.andremesquita.com/');
							//var_dump($graph->keys());
							//var_dump($graph->schema);
							foreach ($graph as $key => $value) {
								echo "<b>$key</b> => $value" . "<br>";
							}
					  ?>					
					</div>					
					<div class="col-md-12">
					  <br>&nbsp;<br>
					</div>									
				   </div>
				</div>
			</div>
		</div>   		
		</div>
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 		

		</main><!-- #main -->
	</div><!-- #primary -->

	    
<?php get_footer(); ?>
