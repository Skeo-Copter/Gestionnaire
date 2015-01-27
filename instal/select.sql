select  u.user_id, 
        u.login,
        u.status,
        t.task_id,
        t.title,
        t.description,
        t.deadline,
        t.estimated_time,
        s.description
FROM user u
INNER JOIN task t
    on u.user_id = t.task_id
INNER JOIN status s
    on t.status_id = s.status_id
WHERE u.status != 'manager'

SELECT *
FROM user
WHERE user.password = 'user1'
AND user.login = 'user1'

SELECT  t.task_id,
        t.title,
        t.description, 
        t.deadline, 
        t.estimated_time,
        s.description,
        u.user_id
FROM assignment a
INNER JOIN task t
    on a.task_id = t.task_id
INNER JOIN status s
    on t.status_id = s.status_id
INNER JOIN user u
    on a.user_id = u.user_id
WHERE u.user_id = 3


INSERT INTO task (title, description, deadline, estimated_time, status_id) 
VALUES ('Sauver un arbre', "Il faut ABSOLUMENT sauver un putain d'arbre parce que c'est mère nature et que ca fait cool devant les gonzesses écolos", '2016-01-15', '2015-12-11', 1);

UPDATE task
SET title = 'Sauver un arbre', 
    description = "Il faut ABSOLUMENT sauver un putain d'arbre parce que c'est mère nature et que ca fait cool devant les gonzesses écolos", 
    deadline = '2016-01-15', 
    estimated_time = '2015-12-11', 
    status_id = 1

DELETE FROM task
WHERE task.task_id = 2

