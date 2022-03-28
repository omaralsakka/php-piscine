SELECT UPPER(user_card.last_name) AS 'NAME', user_card.first_name, subscription.price FROM db_oabdelfa.user_card
INNER JOIN db_oabdelfa.member ON member.id_member = user_card.id_user
INNER JOIN db_oabdelfa.subscription ON subscription.id_sub = member.id_sub
WHERE subscription > 42
ORDER BY last_name, first_name;