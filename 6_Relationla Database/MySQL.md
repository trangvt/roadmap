Install
    https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04
    https://mariadb.com/kb/en/mysql_secure_installation/

Connecting
    https://dev.mysql.com/doc/refman/8.0/en/connecting.html
    mysql --host=localhost --user=myname --password=password mydb

Working with users
    https://www.cyberciti.biz/faq/how-to-delete-remove-user-account-in-mysql-mariadb/

List all users
    SELECT user,authentication_string,plugin,host FROM mysql.user;

Show user grants
    SHOW GRANTS FOR 'user_name'@'%';
    +-----------------------------------------------------------------+
    | Grants for user_name@%                                           |
    +-----------------------------------------------------------------+
    | GRANT ALL PRIVILEGES ON *.* TO 'user_name'@'%' WITH GRANT OPTION |
    +-----------------------------------------------------------------+

    GRANT ALL on DB_NAME.* to 'USER_NAME'@'%';
===================================
Lost connection to MySQL server at 'waiting for initial communication packet', system error: 110


CREATE SCHEMA `prod_my_23` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
