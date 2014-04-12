set :stage, :staging

set :deploy_to, '/home/rotrer/stage/wp-capistrano'
set :linked_files, %w{config-staging.php}
set :branch, "master"

set :db_database, "wp-capistrano"
set :db_username, "wp-capistrano"
set :db_password, "capistrano"