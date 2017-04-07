# What is WordPress Theming

WordPress powers 27% of the web today. It powers small business sites, huge blogs and online stores. With that many sites powering the web it makes you wonder what are this sites made up. More importantly how can I make this site look more like my brand?

## The theme folder

So inside a WordPress install you will see a lot of files that come included. At first this can seem intimidating but don't worry we will go through it all.

## Creating your own theme

So creating your own theme means that you would have a folder inside the themes folder that is yours or pertains to your project. When setup correctly this folder will then read into your WordPress admin area with no additional database setup.

## Extracting the theme

You would normally have a full look to your site that would have a top section, content section, maybe a sidebar and a footer area. You can break apart these sections into smaller files and then make sure you include them for the final output of your theme.

## Theme Functions

Inside these theme sections we will have functions that we call for various needs. For example we will have a function call that will query for the content that is inside that particular page. Or maybe we will have a function call that call the navigation of the site. Either way we have a ton of functions at our disposal.

## Child themes

Child themes are a way to extend the may parent theme without altering any of it's core code. Think of it like we are overriding the parent templating code with any additional changes we want. Sometimes you want to do this if you have a purchased theme so as not to edit the core code. Then when the theme has any upgrades it will not overwrite your code. We will not be getting into those during this course but you can read more about it here  [Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)