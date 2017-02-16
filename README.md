# alps-drupal-helper Drupal 7
A helper module for the ALPS Drupal theme.

## Installation
- Download the contents of this repository.
- Place the folder `alps_drupal_helper` within the `modules` directory in the root of your drupal installation.
  * sites > all > modules > alps_drupal_helper
- Enable the module in the Admin or with the command line tool Drush.
  * **Admin**
    * You must download the [views (for drupal 7)](https://www.drupal.org/project/views) module **and any of its dependencies**.
    * You must download the [jQuery Update](https://www.drupal.org/project/jquery_update) module **and any of its dependencies**.
    * Go to admin > modules
    * Check `alps_drupal_helper`, `jQuery Update`, `Chaos tools`, `Views`, and `Views UI`
    * Click `Save configuration`.
  * **Drush** Type `drush en alps_drupal_helper` and follow the prompt to enable (there are a few dependenceies that will be downloaded and enabled).

That's it. Once you've enabled the module you will have additional fields and views to properly utitlize the ALPS Theme.

## Custom Fields
This module creates the following custom fields and attaches them to the `Article` and `Basic Page` content types.
- Header Image
- Sub Title

## Custom Views
- Homepage Carousel
- News list and news grid
- Story