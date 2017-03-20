<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		            <aside id="secondary" class="widget-area" role="complementary">
		            <?php dynamic_sidebar( 'footer-1' ); ?>
		            </aside>
		        <?php endif; ?>
			</div>
			<div class="col-lg-3">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
		            <aside id="secondary" class="widget-area" role="complementary">
		            <?php dynamic_sidebar( 'footer-2' ); ?>
		            </aside>
		        <?php endif; ?>
			</div>
			<div class="col-lg-3">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
		            <aside id="secondary" class="widget-area" role="complementary">
		            <?php dynamic_sidebar( 'footer-3' ); ?>
		            </aside>
		        <?php endif; ?>
			</div>
			<div class="col-lg-3">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
		            <aside id="secondary" class="widget-area" role="complementary">
		            <?php dynamic_sidebar( 'footer-4' ); ?>
		            </aside>
		        <?php endif; ?>
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