CREATE DATABASE IF NOT EXISTS `dev`;

CREATE USER 'dev_user'@'%' IDENTIFIED BY 'dev_pass';

GRANT ALL ON `dev`.* TO 'dev_user'@'%';

CREATE DATABASE IF NOT EXISTS `test`;

CREATE USER 'test_user'@'%' IDENTIFIED BY 'test_pass';

GRANT ALL ON `test`.* TO 'test_user'@'%';
