# Creating a Custom Template

Sometimes we may need a template that does not follow the natural order of the template hierarchy.

In order to do so you can create a template with any name you would like and as long as it is in the `theme > themname` directory then WordPress will pick it up. Normally it would be best to to create a structure to this so you can keep track of it. Also note that wordPress will only search for template files one level deep. So any only add one folder inside the themename folder and place your template files there.

So we will create a folder and file called `templates > template-sample.php`. But this is not enough to get the template going for what we need. Once we create that file we would need a little bit of code that sits in the comment area on the top of this php file.

```
<?php

/*
Template name: Whatever Name you like
*/
```
Adding this to the top of our page will interact with the admin area of WordPress. See below.

![Custom Template File](img/template-file.png)

After selecting and placing in content you can alter this file to look however you want it to look.