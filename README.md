ClubMe
===

ClubMe is a custom designed theme aimed at communities, clubs and organisationations that would like to show a crisp, clean take on their services.

Built from the start theme by Underscores (_s), ClubMe uses a simple primary, secondary and accent color design coupled with SASS preprocessing to allow for easy styling of any and all aspects of your site.

Licensed under GPLv2 or later.

Installation
---------------

### Theme Installation

ClubMe can be installed through the WP-Admin Theme section of your Wordpress site.

1. Clone this repository into a .zip file.
2. In your admin panel, go to Appearance > Themes and click the Add New button.
3. Click Upload Theme and Choose File, then select the .zip file. Click Install Now.
4. Click Activate to use your new theme right away.

### Development Prerequisites/Assumptions

This readme assumes you have a Wordpress environment already installed. For ongoing development, the following software will be required:

- [Node.js](https://nodejs.org/)
- [Sass](https://sass-lang.com/dart-sass)

### Sass Preprocessing Helpful Commands

ClubMe is structured to allow for a single location to watch and process for any Sass changes. Some helpful commands below:

*Note: These commands assume you are in the root directory of your theme.*

- Single Run
```sh
sass sass/style.scss style.css
```

- Ongoing updates (Sass Watcher)
```sh
sass --watch sass/style.scss style.css
```

**Warning: If you run these commands, it WILL overwrite your current CSS. Do not amend the style.css directly. Use the below commands.**


### Screenshot Imitation

"I want it to look like the screenshot!", I hear you say. The following sections need to be configured to set the theme in it's intended way. 

*Note: All steps are done within WP-Admin*

- `Set Logo` - Appearance -> Customize -> Site Identity: Set a logo image (Max dimensions 200px)
- `Set Site Icon` - Appearance -> Customize -> Site Identity: Set a site icon
- `Site Title/Description` - Appearance -> Customize -> Site Identity: Name your site and tagline and check 'Display Site Title and Tagline' (Optional)
- `Navigation Menu` - Appearance -> Menus: Create a new menu, save and check the 'Primary' checkbox under Menu Settings.
- `Home Page` - Appearance -> Customize -> Homepage Settings: Check 'A static page' and choose your desired page to be your static front page.
- `Background Color` - Appearance -> Customize -> Colors: Set your background color.
- `Background Image` - Appearance -> Customize -> Background: Set your background image. *Note: To combine color and image, the image should have no background color and some opacity before uploading*.
- `Widget Free` - Appearance -> Customize -> Widgets: Remove all widgets from the Home page.


Credits
---------------
* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
