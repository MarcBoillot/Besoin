SELECT *
FROM posts
INNER JOIN authors ON posts.author_id = authors.id
WHERE posts.date >= DATE_SUB(NOW(), INTERVAL 30 DAY)
ORDER BY posts.date DESC
LIMIT 10;