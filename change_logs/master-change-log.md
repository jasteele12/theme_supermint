# Master branch change log

3.4.2 - Rescue theme documentation from web archive
        [pages](https://web.archive.org/web/20170113174552/http://supermint3.myconcretelab.com:80/documentation/get-started)
        
3.4.1.4 - Fix fatal remove theme bug

        - Ignore request for page_theme during removal
        
3.4.1.3 - Update with MichaelMaar fixes to work with c5 v8.4.2

3.4.1.3 - Fix a error on the page searching result input

3.4.1.2	- FIx a issue when they are no logo on the the full width main navigation (porfolied)

3.4.1.1	- Fix error on testimonial block hover template + font too light

3.4.1		- Fix a fatal error when a custom template is used in a stack

3.4			- Fix compatibility with Concrete5.8+
				- Add hidden class from C5
3.3.4.1 - Fix tabs display on small screen












3.3.4   - Add a basic Print stylesheet

        - Add Mmenu to lateral nav
        - Fix content width with lateral nav
        - Fix some php7 issues
        - Fix the error of loading cookies.js on some servers

3.3.3   - Add a template that display a lightbox for the image block

        - Fix font-size in table
        - Add Pagination support to page-list
        - Fix some error with PHP7
        - Add support for supermint.css
        - Fix the Themefontcolor issue
        - Fix multiple popup issue
3.3.1.3 - Fix Error when two FAQ black live in the same page

3.3.1.2 - Add a option to manage logo area width

3.3.1.1 - Fix utils package name

3.3.1   - Fix update error

        - Update starting point with new page-list template
        - Fix no-gap issues & row counting

3.3     - New page-list template management

        - Add Upgrade class

3.2.5.5 - fix mmenu that don't display hamburger

3.2.5.4 - Add option to manage horizontal space between navigation items

3.2.5.3 - fix JS in Satck page

        - Display bullet in list when composer mode

3.2.5.2 - Add a option for auto-bidding mobile nav

        - Now google fonts use secure http
        - fix js error on stacks (imageLoaded)

3.2.5.1 - Disable JS in dashboard pages

3.2.5   - Fix options that doesn’t save in firefox

        - Fix the getOption error on page list Supermint Hover template
        - Fix css error

3.2.4   - Add imageLoaded to Transit.

        - Move hamburger & search to the right. close #44
        - Add Sidebar Header Area.
        - Add `image-center` custom class for image-block. close #45
        - Fix second level position when the height of the main nav
          is customized.
        - Add a rescue font list file for google fonts.
        - Add a option to enable/disable search input in mobile version.

3.2.3   - Fix the top-bar-full-with gap when element with margin in inserted

        - Fix the inherit of navigation style in stack panes
        - Fix override links error that appear on certain servers
        - Fix dots colors in IE10+
        - Update readme.md

3.2.2.1 - Chmod the base.mcl

        - Fix flat navigation gone

3.2.2   - Add a color options for all icon from feature block

        - Add the capability to override icon color with custom 
          class eg : icon-color-ffff33
        - Improve icon custom class for sizing icon
        - Add color option for Mega-menu on dropdown
        - Add mega-menu named by page parent ID
        - Add helper function for custom classes
        - Fix the un-styled regular/large nav when another style 
          is set on the theme option

3.2.1   - Fix PHP 5.3 error on Session

        - Fix sliding nav autonav template Fatal error

3.2     - Activate the clips on install

        - Fix the First level Border bottom default color of a
          selected top nav” where nothing happens when we choose a color
        - Now `Site Logo` display blocks from left to right in mobile
          top-bar
        - Add different Stack to installation.
        - Add search field into mobile nav
        - New documentation & demo pages
        - Add sorting to page list templates
        - Install new attribute : external_link
        - Moving Supermint Helper Controller to page_theme controller
        - Add a get tags function for pages
        - Add a package Element for sortable page links
        - Add javascript to sort by tags & keywords
        - Add style to tags & keyword input
        - Fix error on $this on non-object context

3.1     - Introduction of Mmenu with new custom template

          * Move Mmenu-theme to less
          - Move all JS files in root
          - Navigation improvement.
          * Regular drop-down can be also fixed.
          * Fix The regular nav that can’t be edited (z-index)
          * Change some words in theme options page.
          * Fix the mouseOut on navslide
          * Fix the search form position in nav
          - Add thumbnail type to blocks/image/templates/supermint_hover.

3.0.4   - Update full screen nav

          * Remove the home icon
          * Add a option for font size
          * Add a option for the background color + add contrast for text
          - Hide the concrete5 link into toolbar on white-labelling
          - Add option to disable footer login link
          - Add a option to make regular nav FLAT

3.0.3.3 - Last Fixes from Gumptech found's issues

          * Boxed page are responsive now
          * Fix lateral Navigations issues on mobile

3.0.3.2 - Fix from Gumptech found's issues :

          * Inside caption is outside in small screen
          * Enhancement of .leaders on mobile
          - Fix Mysql error on install on some servers

3.0.3.1 - Fix the z-index of the dropdown/slider nav

        - Fix the magnify glass position
        - Fix for old PHP
        - Add Portfolied Starting Point

3.0.3   - Add options to navigation_style

        - Navigations Enhancements
        - Manage height on window resize for Transit slider
        - Cleaning files

3.0.2.2 - Fix Compatibility with 5.7.3

3.0.2.1 - Lateral nav became responsive

        - Logo management in responsive nav
        - JS media queries with Enquiere

3.0.2 - Add Lateral navigation

3.0.1 - Fix from PRB
3.0   - Update of Supermint for Concrete5.7+