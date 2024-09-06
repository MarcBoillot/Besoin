SELECT posts.*, authors.name, authors.city
FROM posts
INNER JOIN authors ON posts.authors_id = authors.id
WHERE posts.id = :id;