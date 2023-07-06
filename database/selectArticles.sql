SELECT articles.*, authors.first_name, authors.last_name
FROM articles
INNER JOIN authors ON articles.authors_id = authors.id
WHERE articles.id = :id;