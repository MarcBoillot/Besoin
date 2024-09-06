SELECT text
DATE_FORMAT(date, '%d/%m/%Y')
AS date_fr
FROM posts
INNER JOIN authors
ON articles.authors_id = authors.id
WHERE posts.id = :id