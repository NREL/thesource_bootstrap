# theSource Bootstrap

theSource Bootstrap is a Bootstrap-based theme that implements the theSource standard template - (insert link here when available).

theSource Bootstrap has a dependency (@todo) on (insert link here when available) to ease the update process when the template changes.

Find out more about the theSource standards at https://thesource.nrel.gov/web-standards/templates.html and view the style guide at (insert link here when available).

The Drupal 8 version of the theme is a sub-theme of [Bootstrap](https://www.drupal.org/project/bootstrap). [This issue](https://www.drupal.org/project/bootstrap/issues/2554199) tracks the status of a Bootstrap 4 or 5 implementation. Because there is no BS4 or 5 implementatation ready, the Drupal 9 version of EERE App Bootstrap uses [Bootstrap Barrio](https://www.drupal.org/project/bootstrap_barrio) as it's base theme.

To install the nrel/thesource_bootstrap package:

### Drupal 9
@see https://github.com/NREL/thesource_bootstrap/blob/main/README.md.

Run the theSource Bootstrap post install commands from the root project to copy the Bootstrap library and the JS, CSS and images used in the theSource template to the correct places for use in theSource Bootstrap.

* composer require nrel/thesource_bootstrap:dev-main<br>
* (@todo) composer run-script post-install-cmd -d ./docroot/themes/contrib/thesource_bootstrap

### Drupal 8
@see https://github.com/NREL/thesource_bootstrap/blob/2.0.0/README.md for instructions

* composer require nrel/thesource_bootstrap:dev-2.0.0<br>

### For Drupal 7
- no README available

* composer require nrel/thesource_bootstrap "dev-d7"
