set :stage, :staging

set :deploy_to, '/var/www/wp-capistrano'
set :linked_files, %w{config-staging.php}
set :branch, "master"
