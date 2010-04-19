NeoTokyo HQ v3
==============

Requirements
------------
- Apache/PHP/MySQL
- WordPress 3.0 (note: version 2.9 and earlier may not work. If this is a
  problem, please contact me and I will try and create a compatible version.)
- 10 minutes to install


Installation Instructions
-------------------------

(Before installing this theme, make sure WordPress is installed and configured
correctly.)

1. Install this theme into your WordPress theme directory. For example, if
   WordPress was installed in the `wordpress/` directory, this file would
   be `wordpress/wp-content/themes/nthqv3/README.markdown`
2. Import pages from `pages.wxr.xml` (included in this directory).
    1. Open your WordPress administration panel.
	2. Go to Tools, then import.
	3. Choose the WordPress importer.
	4. Select `pages.wxr.xml` from your computer.
3. Create the navigation menu.
	1. Go to Appearance, then Menus in the administration panel.
	2. Create links to "About", "News", "Community", "Download", "Playing",
	   "Media" and "Soundtrack".
	3. Save.
	4. Click the Edit link for the "Download" item, and set the custom class
	   to `download`
	5. Save.
4. You *should* now be done. I might have forgotten something here, so contact
   me once you get to this stage so I can check.


Using the Site
--------------

### Notices
NTHQv3 includes the ability to change the global notice, between the header
image and the navigation menu.

To change:

1. Open the administration panel.
2. Go to Appearance, then Widgets.
3. Expand the "Notice" 'sidebar'.
4. (If a widget is already here, remove it.)
   Drag the "Text" widget from the left to this sidebar. Edit the content of
   it (you may use HTML).
5. Save the widget.

### News
New posts can be created to advertise news. The latest news article will be
shown on the homepage, and all the news can be viewed on the News section.

To add a post:

1. Open the administration panel.
2. Go to Posts, Add New.
3. Title your post, and add content.
4. If you are ready to publish, hit the Publish button, otherwise hit the Save
   draft button. Drafts allow only administrators to see the posts, and are
   used when you are drafting out a post.
5. The post should be be viewable on the home page and on the News section.


Information
-----------

This site was created for NeoTokyoHQ.com and the styling remains property of
Ryan McCue. If you wish to use it, please ask first. The PHP code is licensed
under the GPL v2.

Deploying this site? Contact `me at ryanmccue.info` for help, tips and just to
let me know.