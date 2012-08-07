# Say Hello to Symphony

This is a [Symphony](http://getsymphony.com/) CMS 2.3 with completed tutorials [Say Hello to the World](http://getsymphony.com/learn/tutorials/view/say-hello-to-the-world/) and [Say Hello to Symphony](http://getsymphony.com/learn/tutorials/view/say-hello-to-symphony/).

# Installation

	git clone git://github.com/ollie/say-hello-to-symphony-2.git
	cd say-hello-to-symphony-2
	git submodule update --init
	mysql -u root symphony_hello < symphony_hello.sql

	# Fix permissions (_www:staff is on OS X, www-data:www-data on Ubuntu)
	mkdir manifest/cache manifest/logs manifest/tmp
	sudo chown _www:staff .htaccess
	sudo chown -R _www:staff manifest
	cd workspace
	sudo chown -R _www:staff data-sources events pages utilities
	cd ..

# Dump

	mysqldump -u root symphony_hello > symphony_hello.sql