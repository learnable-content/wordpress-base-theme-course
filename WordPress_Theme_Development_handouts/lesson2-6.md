![](headings/2.6.png)

# Front Page Template

When you are creating a web page with WordPress remember first that WordPress is blog first and on initial install you have to do a little extra work to make it website first. There is some minor admin adjustments that you do in the dashboard to get it to behave this way and we will get to that in a later lesson.

Once set remember the template hierarchy of WordPress going from left to right the `index.php` is the file that will be served up as the home page. If we simply create a page called `front-page.php` we are able to have another template to theme out for the front page. For the most part of theming the front page of your site usually does tend to take a different look. Although its very similar and should cary the brand it is different enough to need it's own file.

## Home page (home.php)

So if we have a file called `front-page.php` then what is the `home.php` file for? Great question! So remembering again that WordPress started off as a blogging web package. The `front-page.php` file is what we use if a page is set to be the root landing page of our site. If we have a file that is called `home.php` that has our html code then that file will be used for the "front page" of the blog root. Normally this is set to `something.com/blog`. If that is how we have our setup then the `home.php` file will be loaded as that `/blog/` root template file. It can get confusing try to remember the differences.
