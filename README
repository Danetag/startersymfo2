Start pack symfony 2
=============

Installation
-------

Once you cloned the project, you have to configure it

### Vhost

You have (but not necessary) add a vhost. Don't forget, you have to modify the `hosts`and `vhosts`files.

### Configuration

Copy, past and rename `app/config/parameters.ini.dist` in `app/config/parameters.ini`, and configure it

### Setting up Permissions

1. Using ACL on a system that supports chmod +a

Many systems allow you to use the chmod +a command. Try this first, and if you get an error - try the next method:

	rm -rf app/cache/*
	rm -rf app/logs/*

	sudo chmod +a "www-data allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
	sudo chmod +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs

2. Using Acl on a system that does not support chmod +a

Some systems don't support chmod +a, but do support another utility called setfacl. You may need to enable ACL support on your partition and install setfacl before using it (as is the case with Ubuntu), like so:

	sudo setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs
	sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs

3. Without using ACL (not recommanded)

If you don't have access to changing the ACL of the directories, you will need to change the umask so that the cache and log directories will be group-writable or world-writable (depending if the web server user and the command line user are in the same group or not). To achieve this, put the following line at the beginning of the app/console, web/app.php and web/app_dev.php files:

	umask(0002); // This will let the permissions be 0775
	// or
	umask(0000); // This will let the permissions be 0777


### Vendors

	php bin/vendors install

Run
-------

http://myproject/app_dev.php/

and Enjoy it !