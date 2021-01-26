To enable extensions, verify that they are enabled in your .ini files:
- amzn/amazon-pay-sdk-php 3.6.0 requires ext-curl * -> the requested PHP extension curl is missing from your system.
$ sudo apt-get install php7.1-curl
$ sudo apt-get install php7.1-mbstring
$ sudo apt-get install php7.1-bcmath
$ sudo apt-get install php7.1-intl
$ sudo apt-get install php7.1-soap
$ sudo apt-get install php7.1-zip

--------------------------------------
SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: Temporary failure in name resolution  
	https://community.magento.com/t5/Magento-1-x-Technical-Issues/SQLSTATE-HY000-2002-php-network-getaddresses-getaddrinfo-failed/td-p/78482
	Checking the app/etc/env.php