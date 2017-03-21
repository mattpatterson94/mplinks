### MPLinks WORDPRESS PLUGIN
**Made by [Matt Patterson](http://mattpatterson.xyz)**

This plugin was created to mimic Linktree and add similar functionality to wordpress sites.

#### What is does
Download this repo and add this plugin into your plugins directory. Once activated, it will show "MPLinks" in the sidebar. The idea of this plugin is to add external links and then display them easily on a wordpress page.
You then link to the page on your instagram, or some other social media, and it can be used to display popular links.

#### How it works
This plugin uses a local copy of [Advanced Custom Fields PRO](https://wordpress.org/plugins/advanced-custom-fields/) in order to create options pages for any wordpress site this plugin is activated on. This makes starting out new wordpress sites a lot easier, and you don't have to create any yucky standard wordpress options pages.

#### Current Options
These are the current option pages set up currently.

- MPLinks
	- Settings
    - Header content. Modify what is displayed above the links
    - Custom CSS. Used to customize how the links and header displays.
  - Links
    - Title. Title of Link
    - URL. URL of Link.
    - Class. Adding a class to the link to style it.

#### Current Shortcodes
There are shortcodes available via this plugin that can be used in the theme.
- Links
  - `[mplinks header="true" class="mplinks__links"]`
