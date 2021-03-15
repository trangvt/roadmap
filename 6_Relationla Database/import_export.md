Export
	$ mysqldump -u [username] -p [database-you-want-to-dump] > [path-to-place-data-dump]
	Eg: $ mysqldump -u admin -p malay23 > malay23_20200121.sql

Zip file
	$ zip malay23_20200121.zip malay23_20200121.sql

Download file
	$ scp STG-MCCP-MY:/var/www/html/folder_name/mccp_my_prod_0310.sql.zip mccp_my_prod_0310.sql.zip

Upload file
	$ scp mccp_my_prod_0310.sql.zip STG-MCCP-MY:/var/www/htmlfolder_name

Unzip file
	$ unzip malay23_20200121.zip

Import
	$ mysql -u username -p database_name < file.sql
	$ mysql -u ubuntu -p main < /var/www/html/mccp-malaysia/malay23_20200121.sql
