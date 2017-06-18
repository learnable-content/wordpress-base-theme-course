![](headings/3.7.png)

# wp\_nav_menu()

`wp_nav_menu()` is a helper function that WordPress provides for us to be able to call any navigation from our administration area. There are many options that this helper function gives us. From which navigation to pull down to what html wraps around the navigation menu.

As you can see from the documentation there are a great number of parameters that are available to us:

[wp\_nav\_menu() parameters](https://developer.wordpress.org/reference/functions/wp_nav_menu/#parameters).

So first we will need to register a navigation menu that will show up in the admin area. An example of this code would be.

```
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
```
Where `Header Menu` is used as the label for the admin area. You could have multiple menu areas that are tied to your theme. Think main navigation, side navigation and maybe footer navigation. So this could look like this:

```
function register_my_menu() {
    register_nav_menus(
        array(
            'header-menu',__( 'Header Menu' ),
            'side-menu',__( 'Side Menu' ),
            'footer-menu',__( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menu' );
```
Now that we have this registered we need to call it where in our theme we want the navigation to show up. You would place this code below where you want it to show up.

```
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
```

