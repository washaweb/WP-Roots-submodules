Boilerplate with WordPress core and Roots as submodules
=======================================================

A simple Roots-Wordpress boilerplate with two submodules : 

* Starter theme 'Roots' added as a submodule,
* Wordpress added as a submodule.

To begin with this project, simply clone this depot with --recursive mode :

	git clone https://github.com/washaweb/WP-Roots-submodules.git --recursive

If you what to change the branch from master to the latest stable version of Wordpress :

	cd wordpress
	git tag
	
This will let you know which version number is the latest stable, then you can change branches like this :

	git checkout 3.8.1
	
