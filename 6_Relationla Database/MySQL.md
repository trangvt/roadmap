Install
    https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04
    https://mariadb.com/kb/en/mysql_secure_installation/


Connecting
    https://dev.mysql.com/doc/refman/8.0/en/connecting.html

Working with users
    https://www.cyberciti.biz/faq/how-to-delete-remove-user-account-in-mysql-mariadb/

List all users
    SELECT user,authentication_string,plugin,host FROM mysql.user;

Show user grants
    SHOW GRANTS FOR 'urbanfox'@'%';
    +-----------------------------------------------------------------+
    | Grants for urbanfox@%                                           |
    +-----------------------------------------------------------------+
    | GRANT ALL PRIVILEGES ON *.* TO 'urbanfox'@'%' WITH GRANT OPTION |
    +-----------------------------------------------------------------+

===================================
Lost connection to MySQL server at 'waiting for initial communication packet', system error: 110
