Boilerplate with WordPress core and Roots as submodules
=======================================================

A simple Roots-Wordpress boilerplate with two submodules : 

* Starter theme 'Roots' added as a submodule,
* Wordpress added as a submodule.

To start with this project, simply clone depot with --recursive mode in the folder of your choice :

	git clone git@gitlab.espace-clients.com:jcd-dev/wp-roots-submodules.git --recursive .


Lets change Wordpress branch to the latest stable tag :

	cd wordpress
	git tag
	
This will let you know which version is the latest stable, you can then checkout :

	git checkout 3.8.1
	
Last, we change the head of this depot to your project git uri :
	
	cd..
	git remote set-url origin <new git depot uri>
	git commit -a
	git push

Where <new git depot uri> is your own git depot uri, (ex : git@gitlab.yourdomain.com:yourproject/project.git)
