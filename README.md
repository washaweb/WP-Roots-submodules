Boilerplate with WordPress core and Roots as submodules
=======================================================

A simple Roots-Wordpress boilerplate with two submodules : 

* Starter theme 'Roots' added as a submodule,
* Wordpress added as a submodule.

To start with this project, simply clone depot with --recursive mode in the folder of your choice :

	git clone https://github.com/washaweb/WP-Roots-submodules.git --recursive .


Lets change Wordpress branch to the latest stable tag :

	cd wordpress
	git tag
	
This will let you know which version is the latest stable, you can then checkout :

	git checkout 3.8.1
	
Maybe you need to change the locale of Wordpress. Create a repository in wp-content :
	
	cd ../wp-content
	mkdir languages
	
and copy .po/.mo from the svn depot to your folder like this (here the 3.8 branch) :
	
	cd languages
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/continents-cities-fr_FR.po
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/continents-cities-fr_FR.mo
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/fr_FR.po
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/fr_FR.mo
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/admin-fr_FR.po
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/admin-fr_FR.mo
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/admin-network-fr_FR.po
	curl -O http://svn.automattic.com/wordpress-i18n/fr_FR/branches/3.8/messages/admin-network-fr_FR.mo
	
Just set the correct locale in your wp-config.php file and you are done.

Last, we change the head of this depot to your project git uri :
	
	cd ../../
	git remote set-url origin <new git depot uri>
	git commit -a
	git push

Where <new git depot uri> is your own git depot uri, (ex : git@gitlab.yourdomain.com:yourproject/project.git)

