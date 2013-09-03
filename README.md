Chaakri - Intro
=======

Chaakri is an source web application to create and launch your own job portal. It's being designed keeping usability and security in mind.

Installation - Shorter Version
==
If you know how to set up a LAMP (or WAMP or MAMP), just do the following:
* point the doc root to "www"
* create a db named "chaakri", with user and password "chaakri" (innovative, eh!)
* load the DB from "protected/data/chaakri.sql"
* Enable mod_rewrite in Apache
* Make sure _protected/runtime_ and _www/assets_ are writeable by the web server

That's it. You're all set.


Installation - Longer Version
==

Setting up development environment
--
**Linux**
* If you are using Ubuntu "apt-get install lamp-server^" should install and configure everything for you, including phpmyadmin.
* Enable mod_rewrite:
* 	_> a2enmod rewrite_
* 	_> /etc/init.d/apache2 reload_
* Make sure _protected/runtime_ and _www/assets_ are writeable by the web server
*   _> chmod 777 protected/runtime www/assets_

If your are using any other flavour, DuckDuckGo it.

**OS X**
* Download and install MAMP
* Figure out how to enable mod_rewrite

**Windows**
* Download and install WAMP (or XAMP)
* Use the graphical tool provided to enable mod_rewrite

**IDE**
Use your favorite, and if you've to ask, download NetBeans-PHP

**MySQL**
* Use phpmyadmin to create db named "chaakri"
* then import db tables from the folder "protected/data/chaakri.sql"
* create user named "chaakri", identified by password "chaakri", and assign it to the db

Else use following commands 
* 	_mysql> create database "chaakri"_
* 	_mysql> grant all privileges on chaakri.* to "chaakri"@"localhost" identified by "chaakri";_
*		_> mysql -D chaakri -uchaakri -p < /protected/data/chaakri.sql_ 
  
**Apache**  
Change document root of your apache installation to "www"


CREDITS
=======
Bipin Upadhyay (@bipinu) : Project Manager   
Johnny Jacob (@johnnyjacob) : Developer   
Tulsi Dharmarajan (@tulsid) : Designer   
Syed Nisar Ul Haq @nisarul : Developer   
Kaushik Sripada : Chaakri Logo
