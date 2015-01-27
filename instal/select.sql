

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

