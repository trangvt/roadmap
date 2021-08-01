select host, user from mysql.user;

-- create user 'admin'@'%';

SHOW GRANTS FOR 'root'@'%';
SHOW GRANTS FOR 'admin'@'%';

GRANT ALL on db_name.* to 'admin'@'%';
GRANT ALL on *.* to 'admin'@'%';
