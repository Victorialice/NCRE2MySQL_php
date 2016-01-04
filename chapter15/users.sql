CREATE TABLE users 
(user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_name CHAR(10) NOT NULL,
  user_password CHAR(10)NOT NULL,
  user_sex CHAR(1) NOT NULL,
  user_age INT NULL,
  user_dept INT NOT NULL,
  user_group INT NOT NULL);

