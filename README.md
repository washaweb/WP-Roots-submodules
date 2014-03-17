Boilerplate with WordPress core and Roots as submodules
=======================================================

A simple Roots-Wordpress boilerplate with two submodules : 

* Starter theme 'Roots' added as a submodule,
* Wordpress added as a submodule.

To init and download submodules (if you plan to do it on your own) open a terminal window in the main folder of your project and type :

	git submodule init
	git submodule update

Change the branch from master to the latest stable version of Wordpress :
	cd wordpress
	git tag
	
This will let you know which version number is the latest stable, then you can change branches like this :

	git checkout 3.8.1
	
