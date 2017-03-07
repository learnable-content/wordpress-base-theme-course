# WordPress Template Hierarchy

WordPress is built in a way that determines which of the files in the previous list will actually be rendered. Alot of this depends on what url you hit and what type of url loaded. 

In WordPress you have blogs, those blogs have single urls, you may even have a list of blogs that are in the past and archived. Then you have content pages, the front page of the website, the front page of the blog. The list can go on and on. Depending on which page you hit and what type of page it is, WordPress chooses which file will actually load to display that content.

[See Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy)

In the link above you can see what files get loaded and in what order. The way to get a good handle on how this works is to see this image:

![WordPress Template Hierarchy](https://developer.wordpress.org/files/2014/10/template-hierarchy.png "WordPress Template Hierarchy")

Full image: [Template Hierarchy Image](https://developer.wordpress.org/files/2014/10/template-hierarchy.png)

Make sure to save this image or url to reference it as you are developing. I look at it from left to right and think of it as the right side is the end all file. Remember in the last lesson where I mentioned all you need for a theme is the `style.css` file and the `index.php`. So the rest of the stuff to the left of `index.php` in the diagram is just icing to the theme cake. Extra ways to make additional theme style changes.

So WordPress will decide from the left to right. For example if you follow the path from left to right on __Singular Page__ and then follow the path of __Blog Post__ you will see that you can actually have a `single-post.php` file that will be loaded. If that file is not found the next available file that can be loaded would be `single.php` then `singular.php`. Finally if none of those files are available in the theme then `index.php` is as mentioned before the end all file that will be loaded.