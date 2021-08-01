ERROR 1698 (28000): Access denied for user 'root'@'localhost'
	https://stackoverflow.com/questions/39281594/error-1698-28000-access-denied-for-user-rootlocalhost

	$ sudo mysql -uroot
	> USE mysql;
	> SELECT User, Host, plugin FROM mysql.user;
	> UPDATE user SET plugin='mysql_native_password' WHERE User='root';
	> FLUSH PRIVILEGES;


--------------------------------------------------------------------------------------------------------
 ... Failed! Error: Your password does not satisfy the current policy requirements
https://stackoverflow.com/questions/43094726/your-password-does-not-satisfy-the-current-policy-requirements
	$ sudo mysql -uroot
	> SHOW VARIABLES LIKE 'validate_password%';