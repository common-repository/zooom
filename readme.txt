=== Zooom ===
Contributors: harshitpeer
Donate link: https://www.paypal.me/harshitpeer
Tags: image, zoom, magnify, magnifier, image zoom, image maginfy
Requires at least: 4
Tested up to: 6.0.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Zooom is a simple, lightweight jQuery plugin that adds a magnifying glass style zoom functionality to images.

== Description ==

Zooom is a useful plugin to have for product images on ecommerce websites, or if you just want people to be able to zoom into an image without spawning additional overlays or popup windows that may cover your content. This plugin is developed on top of a jquery plugin [Magnify](http://thdoan.github.io/magnify/) by Tom Doan.

= Shortcode Example =
`[zooom normal_url="NORMAL_IMAGE_URL" big_url="BIG_IMAGE_URL" width="200px" height="200px" disable_on_click="on|off" alt="ALT_TEXT_OF_IMAGE (OPTIONAL)" class="CSS_CLASS (OPTIONAL)"/]`

= Attribute Details =
normal_url: The Base Image URL
big_url: The Zoomed Image URL
alt: Any alt tag you want to add to image
class: Any CSS classes you might want to add
width: Width of the magnify glass
height: Height of the magnify glass
disable_on_click: on|off Enable/disable the magnify glass on click 

== Installation ==

= Option 1 =

* Within your WordPress admin area, navigate to "Plugins".
* Click the "Add New" link near the top of your screen.
* Click the "Upload" link.
* Click the browse button and navigate to wherever you downloaded the zip file to, select the zip file
* Click the "Install Now" button
* Click "Activate Plugin"

= Option 2 =

* Extract the zip file
* Upload (ftp) the resulting `zooom` folder to your `/wp-content/plugins/` directory.
* Activate "Zooom" through the "Plugins" menu in WordPress

== Frequently Asked Questions ==

= How many images needs to be uploaded? =

You will need to upload 2 different size image. A normal image which will be shown on your website and another high resolution image which will be used for magnifying effect.

= How to use it? =

After you had upload 2 different images, get the URL from "Media" section of your Dashboard. Once you have that, just copy below short code and paste links in given area.

`[zooom normal_url="NORMAL_IMAGE_URL" big_url="BIG_IMAGE_URL" width="200px" height="200px" disable_on_click="on|off" alt="ALT_TEXT_OF_IMAGE (OPTIONAL)" class="CSS_CLASS (OPTIONAL)"/]`

== Changelog ==

= 1.1.0 =
* Ability to modify width and height of magnify glass
* Ability to disable magnify glass on click

= 1.0.0 =
* Initial Release