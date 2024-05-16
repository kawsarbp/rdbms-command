<?php
/*You have to check by query little by little. Then the big query has to be completed*/

"CREATE DATABASE databases_name"; // create database

"USE databases_name"; // use database

"DROP DATABASE databases_name"; // drop database

"DESCRIBE table_name"; // describe table

"SHOW CREATE TABLE `products`"; // table creation process

"TRUNCATE `users`"; // truncate table empty all data

"SHOW WARNINGS"; // show warning
"SELECT @@warning_count"; // show warning count

"SHOW ERRORS"; // show errors
"SELECT @@error_count"; // show error count

"SHOW INDEX FROM `products`"; // unique index check

"SELECT `name`,`quantity` FROM `products`"; // select specific product

"SELECT * FROM `products`"; // select all product
"SELECT * FROM transactions LIMIT 10 OFFSET 20"; // offset
"SELECT `name`,`quantity` FROM `products` WHERE `quantity` >= 0"; // greater than equal to and less than equal to

"SELECT `name`,`quantity` FROM `products` WHERE `quantity` BETWEEN 10 AND 12"; // between operator

"SELECT `name`,`quantity` FROM `products` WHERE `quantity` BETWEEN 10 AND 12 AND `name`  LIKE '%a%'"; // not like operator and like operator

"SELECT `name`,`quantity` FROM `products` WHERE `quantity` BETWEEN 10 AND 12 AND `name` LIKE '%a%' OR `id` IN (1,2,3)"; // not in operator and in operator

"SELECT `id`, `name` FROM `products` WHERE `quantity` != 12"; // <> not equal to

"SELECT `id`,`name`,`quantity`,`status`,`brand_id` FROM `products` WHERE `quantity` BETWEEN 10 AND 12 AND (`brand_id`=5 OR status='active')"; // brackets ()

"SELECT `id`,`name`,`buying_price` FROM `products` WHERE `buying_price` BETWEEN 800 AND 850 ORDER BY `id` DESC"; // order by sorting

"SELECT `id`,`name`,`buying_price` ,`quantity` FROM `products` WHERE `buying_price` BETWEEN 800 AND 850 ORDER BY `quantity` DESC,`id` DESC"; // multi sorting with order by

"SELECT `id`, `name` FROM `products`  LIMIT 3 OFFSET 3"; // limit and offset

"INSERT INTO `users`(`name`, `email`, `password`) VALUES ('ashif hossain','ashifhossain1512@gmail.com','12123123')"; // insert data query

"INSERT INTO `users`(`name`, `email`, `password`) VALUES ('ashif hossain','ashifhossain1512@gmail.com','12123123'), ('ashif hossain','ashifhossain1512@gmail.com','12123123')"; // multiple insert data query

"UPDATE `users` SET `name`='ashif' WHERE `id` = 4"; // update data query

"DELETE FROM `users` WHERE `id` = 4"; // delete data query

"SELECT STRAIGHT_JOIN `products`.`name` ,`categories`.`name`,`subcategories`.`name`,`users`.`name` 
FROM `products` 
JOIN `categories` ON `products`.`category_id` = `categories`.`id` 
JOIN `subcategories` ON `products`.`subcategory_id` = `subcategories`.`id` AND `p`.`name` = 'dhaka'
JOIN `users` ON `products`.`user_id` = `users`.`id`"; // STRAIGHT_JOIN force fully join

"SELECT `products`.`name` ,`categories`.`name`,`subcategories`.`name`,`users`.`name` 
FROM `products` 
JOIN `categories` ON `products`.`category_id` = `categories`.`id` 
JOIN `subcategories` ON `products`.`subcategory_id` = `subcategories`.`id` AND `p`.`name` = 'dhaka'
JOIN `users` ON `products`.`user_id` = `users`.`id`"; // inner join

"SELECT `products`.`name` ,`categories`.`name`,`subcategories`.`name`,`users`.`name` 
FROM `products` 
LEFT JOIN `categories` ON `products`.`category_id` = `categories`.`id` 
LEFT JOIN `subcategories` ON `products`.`subcategory_id` = `subcategories`.`id` 
LEFT JOIN `users` ON `products`.`user_id` = `users`.`id`"; // left join. get left table all data and get right table match data

//mysql functions
"SELECT LENGTH(`name`) FROM `products`"; // length function
"SELECT CHAR_LENGTH(`name`) FROM products"; // char length function

"SELECT NOW()"; // now function
"SELECT MIN(`quantity`) FROM `products` "; // min function
"SELECT MAX(`quantity`) FROM `products` "; // max function
"SELECT SUM(`quantity`) FROM `products`"; // sum function
"SELECT AVG(`quantity`) FROM `products`"; // avg function
"SELECT COUNT(*) FROM `products`"; // count function
"SELECT MD5(`name`) as product_name FROM `products` WHERE `id`=1"; // md5 function
"SELECT SHA1(`name`) as product_name FROM `products` WHERE `id`=1"; // sha1 function
"SELECT SHA2('YourTextHere', 256)"; // has2 -- The second parameter specifies the bit length of the result.
"SELECT CONCAT(`user_id`, ' - ',`quantity`) as product_name FROM `products` WHERE `id`=1"; // concat function
"SELECT CONCAT_WS(`user_id`, ' - ',`quantity`) as product_name FROM `products` WHERE `id`=1"; //concat ws function
"SELECT UPPER(`name`) FROM `products`"; // upper function
"SELECT LOWER(`name`) FROM `products`"; // lower function
"SELECT FORMAT(`buying_price` * 1.6, 2) FROM `products`"; // format function
"SELECT INSTR('Hello World', 'World') AS Position"; // instr function for kind of search
"SELECT SUBSTR('Hello World', 1, 5) AS ExtractedString"; // substr function
"SELECT SUBSTR('Hello World', 7) AS ExtractedString"; // substr function
"SELECT email, SUBSTRING_INDEX(email, '@', 1) AS Username FROM users"; // substring index function
"SELECT TRIM(BOTH 'x' FROM 'xxxHello World!xxx') AS TrimmedString"; // trim function
"SELECT LTRIM('   Hello World!') AS TrimmedString;"; // ltrim function
"SELECT RTRIM('Hello World!  ') AS TrimmedString;"; // rtrim function
"SELECT 
    id,
    TRIM(LEADING ' ' FROM example_string) AS TrimmedLeading,
    TRIM(TRAILING ' ' FROM example_string) AS TrimmedTrailing,
    TRIM(BOTH ' ' FROM example_string) AS TrimmedBoth
FROM
    example_table;"; // trim,ltrim,rtrim,both
"SELECT RIGHT('Hello World!', 2) AS TrimmedString";// right function
"SELECT LEFT('Hello World!', 2) AS TrimmedString";// left function
"SELECT LEFT(`email`, INSTR(`email`,'@')-1) AS TrimmedString FROM users"; //left function for find email of username
"SELECT LPAD(user_id, 8, '0') AS PaddedProductCode FROM products"; // lpad function
"SELECT RPAD(user_id, 8, 0) AS PaddedProductCode FROM products"; // rpad function
"SELECT LOWER(REPLACE(name, ' ', '-')) AS modified_description FROM products"; // replace function
"SELECT `id`,`email`, INSTR(`email`,'@') as posision_count FROM users"; // instr function for searching @ position
"SELECT `id`,`name`, SUBSTRING(`email`, INSTR(`email`,'@')+1) as email_domain FROM users";// substring and instr function
"SELECT `id`,`name`, SUBSTRING(`email`, 1, INSTR(`email`,'@')-1) as email_domain FROM users";
"SELECT ROUND(3.745, 2)"; // round function
"SELECT FLOOR(5.7)"; // floor function
"SELECT TRUNCATE(3.745, 2)"; // truncate function
"SELECT CEILING(5.3)"; // ceiling function
"SELECT FLOOR(RAND() * 100) + 1"; // rand function
"SELECT POWER(2, 3)"; // power function
"SELECT SQRT(25)"; // sqrt function like rut over
"SELECT 10 DIV 3"; // div function
"SELECT MOD(17, 5)"; // mod function example This will return 2, because when 17 is divided by 5, the remainder is 2.
"SELECT SIN(PI())"; // sin function
"SELECT COS(PI())"; // cos function
"SELECT TAN(PI()/4)"; // tan function
"SELECT 1 / TAN(PI()/4)"; // cot function example Though MySQL doesn't provide a built-in COT() function
"SELECT ASIN(0.5);"; // asin function
"SELECT ACOS(0.5)"; // acos function
"SELECT ATAN(1)"; // atan function
"SELECT ATAN2(1, 1)"; // atan2 function
"SELECT DATE_FORMAT(CURRENT_DATE(), '%D-%M-%Y')"; // current date
"SELECT DATE_FORMAT(CURRENT_TIME(), '%H:%i')"; // current time
"SELECT DATE_ADD('2024-03-07', INTERVAL 1 DAY)"; // date add interval example ADD DAY ND MONTH
"SELECT DATE_SUB('2024-03-07', INTERVAL 1 DAY)"; // date sub interval example ADD DAY ND MONTH
"SELECT DATEDIFF(`created_at`, `updated_at`) AS difference FROM products"; // date difference
"SELECT TIMEDIFF('2024-03-07 12:00:00', '2024-03-07 10:00:00')"; // timestamp difference
"SELECT MAKEDATE(2024, 80)"; // makedate function
"SELECT MAKETIME(12, 30, 45)"; // maketime function
"SELECT id, STR_TO_DATE(`special_start`, '%Y-%m-%d') AS proper_date FROM products"; // str to date function
"SELECT SEC_TO_TIME(5000)"; // seconds to time function
"SELECT TIME_TO_SEC('12:30:45')"; // time to second function
"SELECT TO_DAYS(NOW())"; // to days function
"SELECT EXTRACT(YEAR FROM '2024-03-07')"; // extract year from
"SELECT HOUR(`created_at`) FROM products"; // hours
"SELECT MINUTE(`created_at`) FROM products"; // minutes
"SELECT MONTH(`created_at`) FROM products"; // months
"SELECT MICROSECOND(`created_at`) FROM products"; // microseconds
"SELECT order_data,shipped_date, DATEDIFF(shipped_date,order_data) AS delay FROM products HAVING delay > 3"; // having use when data manipulates

// control flow

"SELECT `id`, `quantity`,
CASE 
    WHEN `quantity` > 25 THEN 'twentyfive up'
    WHEN `quantity` > 15 THEN 'fifteen up'
    ELSE 'new'
END AS quantity_type
FROM products"; // case else end

"SELECT `quantity`,
IF(`quantity` > 15, 'up 15', 'less 15') as quantity_type
FROM products"; // if statement

"UPDATE users
SET card_no = AES_ENCRYPT('12-85-630', 'boss')
WHERE id = 2;"; // ase_encryption solution code for encryption
//ALTER TABLE users MODIFY COLUMN card_no VARBINARY(255);
"SELECT `name`,card_no, AES_DECRYPT(card_no, 'boss') AS card_no
FROM users LIMIT 5;"; // ase_decryption

"SELECT name, quantity, CRC32(CONCAT(`name`,`quantity`)) AS checksum FROM `products`"; // crc32

"SELECT * 
FROM products p
LEFT JOIN products_dev pv ON pv.id = p.id
WHERE CRC32(CONCAT(p.`name`,p.`quantity`)) != CRC32(CONCAT(pv.`name`,pv.`quantity`))"; // check which table data update with join


"SELECT p.product_title AS a, s.subcategory_name AS b, b.brand_name AS c
FROM products p
INNER JOIN subcategories s ON p.subcategory_id = s.id
INNER JOIN brands b ON p.brand_id = b.id"; // inner join with aliases

"SELECT p.product_title AS a, s.subcategory_name AS b, b.brand_name AS c , c.category_name as d
FROM products p
INNER JOIN subcategories s ON p.subcategory_id = s.id
INNER JOIN brands b ON p.brand_id = b.id /*and b.category_id = s.category_id*/
INNER JOIN categories c ON s.category_id = c.id
WHERE p.id = 1"; // join category with subcategory through

"SELECT FLOOR(3.99 + 0.5) AS rounded_value"; // floor function
"SELECT CEILING(3.99 + 0.5) AS rounded_value"; // ceiling function

"SELECT SUM(`product_quantity`) FROM products GROUP BY `subcategory_id`"; // sum with group by function
"SELECT COUNT(`product_quantity`) FROM products GROUP BY `subcategory_id`"; // count with group by function

"SELECT  SUM(`total_price`)
FROM orders
WHERE `created_at` BETWEEN start_date AND end_date
GROUP BY `user_id`"; // sum with date between and group by function

"SELECT `subcategory_id`, SUM(`product_quantity`), COUNT(DISTINCT `product_quantity`) FROM products GROUP BY `subcategory_id`
LIMIT 25"; // distinct function duplicates value not counting

"SELECT COUNT(DISTINCT `product_quantity`) FROM products"; // distinct function not count duplicate data

"SELECT
SUM(IF(o.country = 'USA',0,1)),
SUM(IF(o.country = 'USA',1,0))
FROM employees e
join offices o on o.code = e.office_code"; // send mail use condition mysql

"SELECT
c.seles_rep_id,
CONCAT(e.fname , ' ', e.lname) AS selse_person
COUNT(DISTINCT o.id) AS toal_order
SUM(IF(c.country = 'USA', 100, 300)) as total_shipment_cost
FROM orders o
JOIN customers c ON c.id = o.customer_id
JOIN employees e ON e.id = c.seles_rep_id
GROUP BY c.seles_rep_id"; // group_by complex

"SELECT GROUP_CONCAT(`brand_id`) FROM products"; // group_concat function

"SELECT customer_id, GROUP_CONCAT(id), SUM(amount) AS total
FROM
    payments
WHERE YEAR(payment_date) = '2004'
GROUP BY customer_id";

"SELECT subcategory_id, SUM(`product_price`), GROUP_CONCAT(product_price)
FROM products
GROUP BY subcategory_id"; // group function complex query

"SELECT subcategory_id, ANY_VALUE( product_name), SUM(`product_price`)
FROM products
GROUP BY subcategory_id"; // any_value function with group by

"SELECT customer_id,
YEAR(payment_date) AS payment_year,
GROUP_CONCAT(check_number)
SUM(amount) AS total
FROM payments
GROUP BY customer_id, payment_year"; // multiple group by function complex query

"SELECT IFNULL(null, 3000) AS salary"; // ifnull function
//table structured copy and table data copy command

// we add multiple index in table but when we add multiple indexes then it can slow but.
// when we need then we have to use poperly dont fear. we popery try to use minimun index.
// when we doing join then if we have index or primary key then it is very helpful and efficient.
"SHOW INDEXES FROM transactions"; // check index
"ALTER TABLE transactions ADD INDEX (status)"; // add index in transactions table because when it use then its very first
"ALTER TABLE transactions ADD INDEX (status(4))"; //it is partial index. get 4 character when find data.
"EXPLAIN SELECT * FROM transactions"; // check for index use or not
"SELECT * FROM transactions"; // query for run time check when add index transactions column
"DROP INDEX status ON transactions"; // drop / delete index from transactions table
// nomal index dont impact function thats way we have to create below index
"ALTER TABLE transactions ADD INDEX joining_year((YEAR(created_at)))"; // functional index

"ALTER TABLE products add COLUMN area INT AS (CAST(SUBSTRING_INDEX(dimension,'x',1) AS DECIMAL) * (CAST(SUBSTRING_INDEX(dimension,'X',-2)AS DECIAML))"; // explode size // vertual column add and implement index

//we can make an index including all relevant columns
"ALTER TABLE transactions ADD INDEX search_q(gateway,amount)";
// index impact sentential . and if use range like > < then stop this statement. when not sentential then index not impact.
"EXPLAIN
SELECT
    id, gateway, amount, created_at FROM transactions
WHERE
     gateway = 'Cash On Delivery'
    AND amount > 50"; // query

// full text search with fulltext index, if we need full text search then we have to create full text index
// can be used with only CHAR,VARCHAR and text columns
"ALTER TABLE products ADD FULLTEXT INDEX search_product(product_name,product_title)";
"EXPLAIN
SELECT * FROM products WHERE MATCH(product_name,product_title) AGAINST('Sports Amd Ryze raphic')"; // order important from index

"SELECT COUNT(DISTINCT subcategory_id) / COUNT(*) FROM products;"; // check efficient index if 1.0000 its best

//check slow query on or off
"SHOW GLOBAL VARIABLES LIKE 'slow_query_log'";
"SHOW GLOBAL VARIABLES LIKE 'long_query_time'";

// trun slow query logging on
"SET GLOBAL slow_query_log = 'ON'";

// keeping slow query log in file
"SET GLOBAL slow_query_log_file = '/tmp/slow_queries.log'";

// keeping slow query log in table
"SET GLOBAL log_output = 'table'";

// additional settings
"SET GLOBAL log_queries_not_using_indexes = 'ON'";
"SET GLOBAL long_query_time = 1";

// turn off slow query logging
"SET GLOBAL slow_query_log = 'OFF'"; // we should be off

// show query run time first
"SET SESSION profiling = 1"; // single query run time check first, speed
"SHOW PROFILES";
"SHOW PROFILE FOR QUERY 13(Query_ID)";
"SET SESSION profiling = 0"; // we should be off

"SHOW STATUS LIKE 'last_query_cost'"; // speed test

"SELECT products.product_name
FROM products
INNER JOIN blogs USING(user_id)"; // useing functions use for join INNER JOIN brands USEING(`brand_id`)

// use index properly first
// 1.where condition #order important
// 2.group by condition
// 3.order by condition
// 4.join by condition #joinable columns
// #when dashboard is slow then we create and store calculate value  anouther table for dashboard

// sub query #subquery faster then join but recommended option is join. and it will handel efficient such as use index etc.
"SELECT gateway 
FROM transactions
WHERE user_id IN (SELECT id FROM users WHERE YEAR(created_at) = 2023)"; // this have multiple queries

"SELECT first_name, last_name,
(SELECT COUNT(*)  FROM film_actor WHERE actor_id = actor.actor_id) flims
FROM actor"; // sub query

"SELECT COUNT(DISTINCT customer_id) FROM rental WHERE return_date IS NULL";
"SELECT customer_id, first_name, last_name, email
FROM customer
WHERE  EXISTS (SELECT * FROM rental WHERE rental.customer_id = customer.customer_id AND return_date IS NULL)"; // sub query with exist

"SELECT customer.customer_id, customer.first_name, customer.last_name, customer.email
FROM customer
JOIN rental ON customer.customer_id = rental.customer_id
WHERE rental.return_date IS NULL
GROUP BY customer_id"; // sub query alternative

"SELECT customer_id, first_name, last_name, email
FROM customer
WHERE NOT EXISTS (SELECT * FROM rental WHERE rental.customer_id = customer.customer_id AND return_date IS NULL)"; // not exist

"SELECT category_id, name, (
SELECT AVG(replacement_cost) FROM film WHERE film_id IN(
SELECT film_id FROM film_category WHERE film_category.category_id = category.category_id)
) as avg_coast FROM category"; // multiple subquery nested queries

"SELECT category.category_id, category.name, AVG(film.replacement_cost)
FROM category
JOIN film_category ON film_category.category_id = category.category_id
JOIN film ON film_category.film_id = film.film_id 
GROUP BY category_id;"; // alternative query

