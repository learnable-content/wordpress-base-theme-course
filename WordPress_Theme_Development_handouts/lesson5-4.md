![](headings/5.4.png)

# Move the navigation to a partial view

We need to get practice of breaking out functionality into separate files. This is for easility maintaining our themes and helps when there is repetitive code that we would need to place over and over again.

Inside our `partials` folder we created a file called `main-nav.php`. We can use this same file for our main top navigation. Inside of this file place the following code from our `header.php` file.

```
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span>M</span>oderna</a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="pricingbox.html">Pricing box</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
```

Now inside our `header.php` file we replace that same code with a partial load call like so:

```
<?php get_template_part('partials/main', 'nav'); ?>
```



