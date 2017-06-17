![](headings/3.2.png)

# wp\_head() and wp\_footer()

WordPress comes with a good number of helper functions. Although we may not use them all for every theme there are some that should be used on every theme. Two of these functions are `wp_head()` and `wp_footer()`.

# wp_head()

In our `header.php` is the main area where we place our `wp_head()`. For the most part it goes right before the closing `</head>` tag of your html document. But what is it exactly? `wp_head()` creates what is called a hook for us. It gives us a hook to hook on other css and script files.

The other thing it allows us to do is when you install new plugins and those plugins come with scripts or css files they get hook on to these functions to add their styles and scripts.

# wp_footer()

The `wp_footer()` is for the most part always in our `footer.php` file. It does the same thing as wp_head() in the fact that it creates a hook for us to put other script files here in the footer area. It does that as well as allows installed plugins to hook into for additional script loading.


