SELECT COUNT(*) AS 'movies' FROM db_oabdelfa.member_history
WHERE date BETWEEN '2006-10-30%' AND '2007-07-27%' OR (MONTH(date) = 12 AND DAY(date) = 24);