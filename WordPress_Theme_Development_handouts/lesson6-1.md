![](headings/6.1.png)

# Build your own widgets

You can think of widgets as blocks of content that we have the availability to add to our sidebars and footer area. Alot of times consumers of WordPress would like to control content on any part of whether it's in the sidebar or in the footer area. Sometimes this content doesn't change from page to page so there is no need to have it as an admin piece on every page. Creating widgets are very easy and we can do so right inside our functions.php file.

## Creating a widget

For our current theme I am counting four areas we could use widgets and one sidebar widget. Our could should look like below

```
function sitepoint_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sitepoint' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'sitepoint' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'sitepoint' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sitepoint' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'sitepoint' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sitepoint' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'sitepoint' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sitepoint' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'sitepoint' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'sitepoint' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sitepoint_widgets_init' );
```

Doing the code above gives us widget areas that we can drag and drop content from WordPress. See image below:

![Widget Area](img/widgets.png)

Now to call a widget inside our theme we would just drop this code wherever we want our widget to show up. We would do the same for the footer areas but replace `sidebar-1` for `footer-1`.

```
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php endif; ?>
```

