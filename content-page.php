<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Base Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container articleSingle" id="articleContainer">

		<div class="col-xs-12 col-md-12 col-lg-7 main">
		
			<section class="articleTitleWrapper ">
				<h1><? the_title(); ?></h1>
				<p><small><? echo get_the_date( 'm-d-Y' ); ?></small></p>
			</section>

			<section class="articlePromptLinks">
				<a href="#"><i class="fa fa-print" aria-hidden="true"></i>Print</a>
				<a href="#" target="_blank"><span style="color:#000;">•</span> Free eBook: 35 Gut Recovery Recipes</a>
			</section>

			<section class="thumbnailWrapper ease" style="background-image: url(<? the_post_thumbnail_url(); ?>);">				
			</section>

			<section class="articleContent">
				<? the_content(); ?>
			</section>

			<section class="articleAccWrapper"> 
				<!-- 
					Was not sure if this is dynamic, I coded a static example for the example 
					Note: can be built dyncamically with a Wiziwig editor by creating a custom widget and 
					implementing it in the SingleAccordion div.
				-->
				<button id="singleToggle">
					<h4>Article Sources</h4>
				</button>
				<div id="singleAccordion">
					<ul>
						<li><a href="#">https://www.nature.com/articles/d41586-020-00660-x</a></li>
						<li><a href="#">https://www.who.int/news-room/fact-sheets/detail/measles</a></li>
						<li><a href="#">https://www.cdc.gov/coronavirus/2019-ncov/about/symptoms.html</a></li>
					</ul>
				</div>
			</section>

			<section class="articlePromptLinks" id="articlePromptLinksBottom">
				<a href="#"><i class="fa fa-print" aria-hidden="true"></i>Print</a>
				<a href="#" target="_blank"><span style="color:#000;">•</span> Free eBook: 35 Gut Recovery Recipes</a>
			</section>

			<section class="singleAuthorWrapper"> 
				<div class="card" id="card-1">
					<div class="authorIMG" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2020/03/amy-myers-md.png');"></div>
					<div class="cardContent">
						<h3>Amy Myers, MD
						</h3>
						<p>Amy Myers, MD is a two-time <em>New York Times!</em>  bestselling author and an internationally 
							acclaimed functional medicine physician. Dr. Myers specializes in empowering those with autoimmune, 
							thyroid, and digestive issues to reverse their conditions and take back their health. 
							In addition, she is a wife, mother, and the successful founder and CEO of Amy Myers MD<sup>®</sup>.
						</p>
					</div>
				</div>
				<div class="card" id="card-2">
					<div class="cardIMG" stlye="background-image: url('http://localhost:10000/wp-content/uploads/2020/05/Screen-Shot-2020-05-21-at-10.57.29-AM.png');"></div>
					<div class="cardContent">
						<h2>Get 35 Free Gut Recovery Recipes!</h2>
						<p>Join the movement that has empowered 760,000+ people in 120+ countries. You'll immediately receive a beautiful, 
							74-page, full-color eBook full of simple, mouth-watering recipes & full color photographs + gut health tips you
							don't want to miss!						
						</p>
						<p id="disclamier"><small>Your information is secure and will never be sold or rented to a third part.</small></p>
					</div>					
				</div>
			</section>

			<div class="relatedArticleContent">
				<h2>Related Articles</h2>
			</div>

			<section class="relatedArticlesCards ease">
				<!-- Note: 
					 This is where a wp quiry loop would go, but I will hard code some cards as to complete the project 
					 Line 146 contains an example of a quiry loop. This quiry would be a post type.					 
				-->
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2020/04/Article_10-Coronavirus-Myths-Debunked-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">10 Coronavirus Myths Debunked</a>
					</div>
				</div>				
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2020/04/Article_9-Ways-to-Stay-Physically-and-Mentally-Fit-While-at-Home-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">9 Ways to Stay Physically and Mentally Fit While at Home</a>
					</div>
				</div>
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2020/04/Article_Your-Top-11-Coronavirus-Questions-Answered-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">Your Top 11 Coronavirus Questions Answered</a>
					</div>
				</div>
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2020/03/Article_What-Do-I-Need-for-a-Social-Distancing-Prep-Kit-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">What Do I need for a Social Distancing Prep Kit?</a>
					</div>
				</div>	

			</section>

			<section class="commentsWrapper">
				<!-- 
					This section seems to be a plugin I will include a php include shortcode code as example. 
					For the css I will build out the wrapper box to show responsiveness. 
				-->
				<!--  -->
				<h1>Comment Plugin Wrapper</h1>
			</section>

		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 sidebar">
			<section class="adPrompt">
				<h4>Start your journey to optimal health!</h4>
				<img src="https://www.amymyersmd.com/wp-content/themes/welldonev2/_/img/side-supplements.jpg" alt="Start your journey to optimal health!">
				<a href="#">TAKE THE QUIZ</a>
			</section>

			<div class="spacer"></div>

			<div class="relatedContent">
				<h2>Related Content</h2>
			</div>

			<section class="sidebarQuiryWrapper ease">
				<!-- This is where a wp quiry loop would go, but I will hard code some cards as to complete the project -->
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2014/05/TMW-Podcast-Main-Graphic-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">The Myers Way Episode 18: Immune System Recovery Plan With Dr. Susan Blum</a>
					</div>
				</div>
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2016/06/Articles_What-Need-Know-VitD-Impact-Immune-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">What You Need To Know About Vitamin D and its impact on Your Immune System</a>
					</div>
				</div>
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2019/12/Immune-Booster_f6e4dff5-6008-43b4-8125-cf3c345ea479_1400x1400.jpg');"></div>
					<div class="cardContent">
						<a href="#">Immune Booster Poweder</a>
					</div>
				</div>			
				<div class="card ease">
					<div class="cardIMG ease" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2016/03/Understanding-the-True-Cause-of-Autoimmune-Disease-768x408.png');"></div>
					<div class="cardContent">
						<a href="#">Understanding the True Cause of Autoimmune Disease</a>
					</div>
				</div>	
				<div class="card ease">
					<div class="cardIMG" style="background-image: url('https://www.amymyersmd.com/wp-content/uploads/2018/02/Articles_5-Best-Supplements-for-Autoimmune-Disease-768x403.jpg');"></div>
					<div class="cardContent">
						<a href="#">The Top 5 Supplments My Autoimmune Patients Take</a>
					</div>
				</div>		
				<!-- 
					As an Example here is a quiry loop for the Related Content. I had to guess as how the quiry is being done
					
					<section class="sidebarQuiryWrapper">
						<?  
							$loop = new WP_Query( array( 
                    			'order'   => 'DESC',                                                    
								// Loop Through post with same Category
								'cat' => $cat_ID                                         
                    		) );
                    		if ( $loop->have_posts() ) :
                        		while ( $loop->have_posts() ) : $loop->the_post(); 
								
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');   
						?>
						<div class="card">
							<div class="cardIMG" style="backgroud-image: url(<? echo $featured_img_url ?>);"></div>
							<div class="cardContent">
								<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
							</div>
						</div>
						<?
							endwhile;
							endif;
							wp_reset_postdata();
						?>
					</section>
				 -->
			</section>
			
		</div>
	</div>

	<!-- Note: Footer would be in footer.php but for example added here. Would also be as footer tag not a section-->
	<div class="col-sm-12 col-md-12 col-lg-12 footer">
		<section class="col-sm-12 col-md-12 col-lg-12 row footerFeaturedComp">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-Shape_Logo.jpg" alt="Shape">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-Goop_logo.jpg" alt="Goop">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-HuffingtonPost_logo.jpg" alt="Huffington Post">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-DrOz_logo.jpg" alt="Dr. Oz">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-NYTimes_logo.jpg" alt="New York Times">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-OprahMag_Logo.jpg" alt="The Oprah Magazine">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-Wmagazine_logo.jpg" alt="W Magazine">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-WomensHealth_logo.jpg" alt="Womens Health Magazine">
			<img src="https://www.amymyersmd.com/wp-content/themes/welldone/_/img/media-YahooHealth_logo.jpg" alt="Yahoo Health">			
		</section>
		
		<div>
			<section class="footerLogoWrapper">
				<!-- SVG -->
			</section>

			<!-- Ideally a query would be used in the menus one quiry per row. Here is an example of that
			<?php $args = array( 'menu' => 'Follow', 'container' => false, 'menu_id' => false, 'menu_class' => 'nav navbar-nav nav-justified'); wp_nav_menu($args); ?> 
			<?php $args = array( 'menu' => 'Shop', 'container' => false, 'menu_id' => false, 'menu_class' => 'nav navbar-nav nav-justified'); wp_nav_menu($args); ?> 
			<?php $args = array( 'menu' => 'About', 'container' => false, 'menu_id' => false, 'menu_class' => 'nav navbar-nav nav-justified'); wp_nav_menu($args); ?> 
			<?php $args = array( 'menu' => 'Contact', 'container' => false, 'menu_id' => false, 'menu_class' => 'nav navbar-nav nav-justified'); wp_nav_menu($args); ?> 
			-->
			
			<section class="footerLinksWrapper">
				<div class="row topRow">
					<a href="#"><strong><big>Follow</big></strong></a>
					<div class="row innerRow">
						<ul>
							<li><a href="#">Newsletter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Pinterest</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Youtube</a></li>
						</ul>
					</div>
				</div>
				<div class="row topRow">
					<a href="#"><strong><big>Shop</big></strong></a>
					<div class="row innerRow">
						<ul>
							<li><a href="#">Bestsellers</a></li>
							<li><a href="#">Kits</a></li>
							<li><a href="#">Supplments</a></li>
							<li><a href="#">Protein</a></li>
							<li><a href="#">Greens</a></li>
							<li><a href="#">Bars</a></li>
							<li><a href="#">Programs</a></li>
							<li><a href="#">Books</a></li>
						</ul>
					</div>					
				</div>
				<div class="row topRow">
					<a href="#"><strong><big>About</big></strong></a>
					<div class="row innerRow">
						<ul>
							<li><a href="#">Press</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Giving</a></li>
							<li><a href="#">Rewards</a></li>
							<li><a href="#">Affliates</a></li>
							<li><a href="#">Wholesale</a></li>
							<li><a href="#">Subscrine & Save</a></li>
						</ul>
					</div>					
				</div>
				<div class="row topRow">
					<a href="#"><strong><big>Contact</big></strong></a>
					<div class="row innerRow">
						<ul>
							<li><a href="tel:5127210424">512-721-0424</a></li>
							<li><a href="emailTo: ">Email</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>					
				</div>
			</section>
		</div>

		<div class="spacer"></div>

		<section class="footerDisclaimer">
			<p>Amy Myers MD. 8816 Cullen Ln, Austin, TX 78748 <br>© 2016-2020 Amy Myers MD®. All Rights Reserved | Privacy Policy | Terms & Conditions | Shipping Info | Do Not Sell My Personal Information <br>Content on this website is not considered medical advice. Please see a physician before making any medical or lifestyle changes.
			</p>
			
			
		</section>
	</div>	

</article>



<!-- Javascript would not be here but in a main.js file. Added here to show a working example. -->
<script>
jQuery(document).ready(function($) {
	$('#singleToggle').click(function(){
		$('#singleAccordion ul').slideToggle();		
	});
});
</script>