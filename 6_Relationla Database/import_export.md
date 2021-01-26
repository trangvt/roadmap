Export
	$ mysqldump -u [username] -p [database-you-want-to-dump] > [path-to-place-data-dump]
	Eg: $ mysqldump -u admin -p malay23 > malay23_20200121.sql

Zip file
	$ zip malay23_20200121.zip malay23_20200121.sql

Upload file
	$ scp malay23_20200121.zip MCCP-MY-UPGRADE:/var/www/html/mccp-malaysia/

Unzip file
	$ unzip malay23_20200121.zip

Import
	$ mysql -u username -p database_name < file.sql
	$ mysql -u ubuntu -p main < /var/www/html/mccp-malaysia/malay23_20200121.sql
