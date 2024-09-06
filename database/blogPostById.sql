SELECT text
DATE_FORMAT(start_date, '%d/%m/%Y')
AS date_fr
FROM articles
INNER JOIN authors
ON articles.authors_id = authors.id
WHERE articles.id = :id