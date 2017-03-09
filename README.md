# Docker for Drupal

## Folders descriptions

### `ci`

 Docker deploy files for CI, Local and Production environment.
 
### `drupal8`
 
 Drupal 8 files.
 
### `patch`
 
 Drupal patches.


## Deployment instructions

 See [`ci` folder readme](ci)

# Short Instruction
1. Put your project name into `drupal8/.project-name` file;
2. Set new DB's login/pass in `ci/docker-compose.yml`;
3. Copy new DB's login/pass in `drupal8/sites/default/settings.db.php`;
4. FYI: Full compatibility with `Composer` package manager has been added to the repo, so please use `composer require drupal/__DRUPAL_MODULE__` to add any module or `composer up` to update all components included drupal core.

