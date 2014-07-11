# Epic Game Jam Website

We are using [Wordpress Capistrano](https://github.com/herrkris/wordpress-capistrano) by herrkis for easy Wordpress deployment.

Refer to his README for further informations.

## Setup

1. `git submodule init` and `git submodule update`
2. `bundler install` if you have not capistrano already installed
3. Rename local-config.SAMPLE.php to local-config.php and replace the placeholders with your database credentials
4. Rename config.SAMPLE.rb to config.rb (located in the config directory). For every stage you have to edit your database credentials. Pay attention to the :local_url variable!
5. Rename the files in config/deploy accordingly and edit the variables so they match the environment
6. Activate the WP Migrate DB and WP Migrate DB CLI plugin

## Tasks
### `bundle exec cap staging deploy`
Deploy your current code base to the staging server

### `bundle exec cap staging wordpress:db:pull`
Copy the staging database to your local database.

### `bundle exec cap staging wordpress:db:push`
Copy the local database to the staging server

The tasks `wordpress:db:pull` and `wordpress:db:push` will find the remote url and replaces it with your local url. So keeping your database in sync is a no brainer.