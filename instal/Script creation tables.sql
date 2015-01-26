/* CREATION ET UTILISATION DE LA DATABASE */
CREATE DATABASE timetracking;
USE timetracking;

/* TABLE USER */
CREATE TABLE user(
user_id INT NOT NULL AUTO_INCREMENT,
login VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
status VARCHAR(50) NOT NULL,
PRIMARY KEY (user_id)
);

/* TABLE STATUS */
CREATE TABLE status(
status_id INT NOT NULL AUTO_INCREMENT,
description VARCHAR(255) NOT NULL,
PRIMARY KEY (status_id)
);

/* TABLE TASK */
CREATE TABLE task(
task_id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
description TEXT,
deadline DATE NOT NULL,
estimated_time DATE NOT NULL,
status_id INT NOT NULL,
PRIMARY KEY (task_id),
FOREIGN KEY (status_id) REFERENCES status(status_id)
);

/* TABLE ASSIGNMENT */
CREATE TABLE assignment(
assignment_id INT NOT NULL AUTO_INCREMENT,
user_id INT NOT NULL,
task_id INT NOT NULL,
time_elapsed INT,
PRIMARY KEY (assignment_id),
FOREIGN KEY (user_id) REFERENCES user(user_id),
FOREIGN KEY (task_id) REFERENCES task(task_id)
);