# alps-drupal-helper Drupal 8
A helper module for the ALPS Drupal theme.

## Installation
- Download the contents of this repository.
- Place the folder `alps_helper` within the `modules` directory in the root of your drupal installation.
- Enable the module in the Admin or with the command line tool Drush.
  * **Admin** Go to extends > check `Alps Helper` and `Alps Helper Base` > click install.
  * **Drush** Type `drush en alps_helper` and follow the prompt to enable.

That's it. Once you've enabled the module you will have additional fields and views to properly utitlize the ALPS Theme.

## Custom Fields
This module creates the following custom fields and attaches them to the `Article` and `Basic Page` content types.
- Header Image
- Sub Title

## Custom Views
- Homepage Carousel
- News list and news grid
- Story