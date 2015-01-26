/* INSERTS POUR TESTS */
INSERT INTO user (login, password, status) VALUES ('admin', 'admin', 'manager');
INSERT INTO user (login, password, status) VALUES ('user1', 'user1', 'user');
INSERT INTO user (login, password, status) VALUES ('user2', 'user2', 'user');

INSERT INTO status (description) VALUES ('assigned');
INSERT INTO status (description) VALUES ('pending');
INSERT INTO status (description) VALUES ('done');

INSERT INTO task (title, description, deadline, estimated_time, status_id) VALUES ('Ajouter le chronomètre', "Il faut ajouter le chronomètre qui permet de mesurer le temps d'un utilisateur sur une tâche", '2015-05-02', '2015-04-10', 2);
INSERT INTO task (title, description, deadline, estimated_time, status_id) VALUES ('Sauver un arbre', "Il faut ABSOLUMENT sauver un putain d'arbre parce que c'est mère nature et que ça fait cool devant les gonzesses écolos", '2016-01-15', '2015-12-11', 1);

INSERT INTO assignment (user_id, task_id, time_elapsed) VALUES (2, 1, 0);
INSERT INTO assignment (user_id, task_id, time_elapsed) VALUES (3, 2, 48795);

