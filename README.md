# State Preserving Incrementing Button

This small project is a webpage with a button that counts how many times it was clicked, storing the data into an SQLite database. 

## Overview
The actual incremented count is stored in the `clickedtimes.db` SQLite file, so this value is directly editable using an SQLite database editing application. `load_content.php` will increment the count when the user clicks on the "+1" button, as the click event handler for the button is set to run the `load_content.php` file. `load_initial.php` serves to display the value when the page is loaded or reloaded. `index.php` serves as the frontend, with CSS styling saved in `stylesheet.css`.

This project has been tested to work properly on the latest versions of Chrome, Firefox, and Safari. As long as you have the latest versions of one of these browsers installed, the code should work without issue on both Windows and Mac.

## Setup (Mac)
To run this locally on a Mac computer, download the code and add it to your `Sites` folder in your home folder (create it if it does not already exist). Fortunately, Mac computers come with Apache and PHP installed, so the setup process is relatively straightforward.

We will run this using Apache, which is the built-in web server that comes with Mac computers. However, Apache does not have PHP enabled by default, so to fix this, open Terminal to type `sudo nano /etc/apache2/httpd.conf`, and following that, type Ctrl+W to use the search feature and type in "php." You will see the line `#LoadModule php5_module libexec/apache2/libphp5.so` – remove the `#` from the line, press Ctrl+O to save changes, and Ctrl+X to quit Nano, the text editor we just used.

Now, you can type `sudo apachectl start` to start up Apache. Type `localhost` into your web browser, and it will automatically redirect to `index.php`, where you should be able to get going.

For more information on the setup process, check out [this article by OSXDaily](http://osxdaily.com/2012/09/10/enable-php-apache-mac-os-x/).

## Setup (Windows)
Follow [this tutorial](https://www.sitepoint.com/how-to-install-php-on-windows/) to get PHP and Apache running on your Windows computer in order to run the website.

You need to have PHP installed, which you can get [here](http://us1.php.net/downloads.php) if you do not already have it. Apache can be installed at [this link](http://httpd.apache.org/download.cgi) – use the installer wizard to simplify the process.

Once you have followed the tutorial, download this repository's files to Apache's web page root. You should be able to run `localhost` in your web browser on your Windows computer to get it running.
