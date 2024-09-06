SELECT text,name
FROM comments
INNER JOIN authors
ON comments.authors_id = authors.id
WHERE comments.id = :id