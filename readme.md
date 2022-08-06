# WP OOP BOILERPLATE

WP OOP BOILERPLATE is an object-oriented foundation for building PHP custom WordPress themes. It uses a strict file organization scheme based on the [Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/) and the wp [template file structure](https://developer.wordpress.org/themes/basics/organizing-theme-files/). All classes and functions are documented and meets the official [documentation guidelines](https://developer.wordpress.org/themes/). The project is inspired from the [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate).

## Contents

The project includes the following contents :

* `assets (dir)`. with all assets folders (css, fonts, fontawsome, jquery, images).
* `classes (dir)`. with all core custom theme classes and dependencies.
* `languages(dir)`. with a .pot file as a starting point for internationalization.
* `template-parts (dir)` with the header and footer partials. 

The root directory contains **index.php**, **style.css**, **header.php**, **footer.php**. It also contains **function.php**, where all the theme core functionalities are defined, and a **read-me.txt** standard file.

## Theme features & CSS

* Ready and available for translations.
* Scripts and stylesheets properly enqueued. 
* Fontawsome 6 included and ready. 
* 3 registered menus available in the customizer (Primary, Secondary, Mobile dropdown).
* 4 colums footer with 3 registered footer sidebars available in the customizer.
* Theme support for WooCommerce, post-thumbnails, customize-selective-refresh-widgets.
* Support for core custom logo with the logo functionality ready and available in the customizer. 
* SVG images and logo upload allowed.
* Minimal CSS centered website and responsive display.
* CSS responsive queries for all screen sizes (small, medium, large) with minimal presets. 

## Installation

For a quick view, WP OOP BOILERPLATE can be installed directly into your wp-content/themes folder like any other wordpress theme. You can then check for the menus, footer, logo and the responsive css. 

To start building with it, you will need to rename it in order to fit your needs. For example, if your theme is named 'My custom theme' then you will have to proceed like the following :

* theme-files-name : rename files from `THEME_NAME` to `my_custom_theme`
* theme classes and functions : change `THEME_NAME` to `my_custom_theme`
* theme-name : in style.css file and all comments, rename `THEME_NAME` to `My Custom theme`
* theme-text-domain-name : change `theme-name` to `my-custom-theme` in files and **__() function**.

## Get started 

Add your custom functions, hooks and filters in the class **__contruct()** function. You can then define them below. 

* For general and core functionalities functions, use **function.php**. 
* For public-side specific actions, use **class_THEME_NAME_public.php**. 
* For admin-side specific actions, use **class_THEME_NAME_admin.php**.
* For public CSS, use **style.css**. 
* For admin CSS, use **admin-side.css**. 
* For responsive queries, use **media-queries.css**.
* For public-side JavaScript/JQuery, use **THEME_NAME_public.js**.
* For admin-side JavaScript/JQuery, use **THEME_NAME_admin.js**.

## License

The WP OOP BOILERPLATE is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the theme directory. The file is named `LICENSE`.

# Credits

KWGB / GC [NA-S]