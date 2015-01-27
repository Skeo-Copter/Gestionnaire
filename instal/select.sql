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



