![](headings/5.2.png)

# Slicing up the footer

Slicing up the footer is very similiar to slicing up the header. We want to get the bottom portion of html and add the WordPress functions needed.

So after looking through our template you could section out the footer like so:

```
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>Moderna company Inc</strong><br>
					 Modernbuilding suite V124, AB 01<br>
					 Someplace 16425 Earth </address>
					<p>
						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Flickr photostream</h5>
					<div class="flickr_badge">
						<script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Moderna Theme. All right reserved.</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                            -->
                            <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<?php wp_footer(); ?>
</body>
</html>
```

Notice we haven't added the scripts and as you guessed it these will go in our functions file to load them.

## Loading Assets

```
function sitepoint_scripts() {
	wp_enqueue_script( 'sitepoint-jqueryeasing', get_theme_file_uri('/js/jquery.easing.1.3.js'), array('jquery'), '1.3', true );
	wp_enqueue_script( 'sitepoint-bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery'), '3.1.0', true );
	wp_enqueue_script( 'sitepoint-fancybox', get_theme_file_uri('/js/jquery.fancybox.pack.js'), array('jquery'), '2.1.4', true );
	wp_enqueue_script( 'sitepoint-fancybox-media', get_theme_file_uri('/js/jquery.fancybox-media.js'), array('jquery'), '1.0.5', true );
	wp_enqueue_script( 'sitepoint-prettify', get_theme_file_uri('/js/google-code-prettify/prettify.js'), array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'sitepoint-quicksand', get_theme_file_uri('/js/portfolio/jquery.quicksand.js'), array('jquery'), '1.2.2', true );
	wp_enqueue_script( 'sitepoint-setting', get_theme_file_uri('/js/portfolio/setting.js'), array('jquery'), '1.3', true );
	wp_enqueue_script( 'sitepoint-flexslider', get_theme_file_uri('/js/jquery.flexslider.js'), array('jquery'), '2.1', true );
	wp_enqueue_script( 'sitepoint-animate', get_theme_file_uri('/js/animate.js'), array('jquery'), '1.0', true );
	wp_enqueue_script( 'sitepoint-custom', get_theme_file_uri('/js/custom.js'), array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'sitepoint_scripts' );
```
