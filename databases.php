<?php
/*You have to check by query little by little. Then the big query has to be completed*/

"CREATE DATABASE databases_name"; // create database

"USE databases_name"; // use database

"DROP DATABASE databases_name"; // drop database

"DESCRIBE table_name"; // describe table check query

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

"CREATE TABLE bangla_cities LIKE city;";//table structured copy and table data copy command

"INSERT INTO bangla_cities 
SELECT * FROM city WHERE country_id = '12'"; // copy data from city table

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

// create view and manipulate. update/delete/insert. view just a query not data. but we define of view is 61! tables
"CREATE VIEW yet_to_return AS
SELECT customer.customer_id, CONCAT(customer.first_name, ' ' ,customer.last_name) fullname, customer.email, rental.rental_date, film.title,film.replacement_cost
FROM customer
JOIN rental ON rental.customer_id = customer.customer_id
JOIN inventory ON inventory.inventory_id = rental.inventory_id
JOIN film ON inventory.film_id = film.film_id
WHERE rental.return_date IS NULL"; // create view

"SHOW CREATE VIEW yet_to_return"; // view query check
"DROP VIEW IF EXISTS yet_to_return"; // drop view
"CHECK TABLE yet_to_return"; // check table query

"SELECT * FROM yet_to_return WHERE customer_id = 42"; // select view table

"SELECT yet_to_return.customer_id, yet_to_return.email, address.phone, address.postal_code
FROM yet_to_return
JOIN customer USING(customer_id)
JOIN address ON address.address_id = customer.address_id
WHERE customer_id = 42"; // join with view table and we also join view and view

"CREATE VIEW bd_cities AS
SELECT city_id, city, country_id FROM sakila.city
WHERE country_id = '12'
WITH CHECK OPTION;"; // create view with check option
// manipulate data
"SELECT * FROM bd_cities";
"INSERT INTO bd_cities (city, country_id) VALUES('kumilla',12)";
"INSERT INTO bd_cities (city, country_id) VALUES('kabul',1)";

"CREATE TABLE mt_yet_to_return
SELECT * FROM yet_to_return;"; // copy table structured and data form view

/*materialize view*/
"TRUNCATE TABLE mt_yet_to_return;"; // drop table data, truncate table
"CREATE TABLE mt_yet_to_return
SELECT * FROM yet_to_return;
 

DELIMITER //

CREATE PROCEDURE RefreshYetToReturn()
BEGIN
	CREATE TABLE IF NOT EXISTS mt_yet_to_return SELECT * FROM yet_to_return;
	TRUNCATE TABLE mt_yet_to_return;
	INSERT INTO mt_yet_to_return SELECT * FROM yet_to_return;
END //

DELIMITER;

CALL RefreshYetToReturn()"; // make materialize view table from view and refresh/update table from view

// store procedure, real time update
"CREATE TABLE mt_yet_to_return
SELECT * FROM yet_to_return;

DELIMITER //

CREATE PROCEDURE RefreshYetToReturn()
BEGIN
	CREATE TABLE IF NOT EXISTS mt_yet_to_return SELECT * FROM yet_to_return;
	TRUNCATE TABLE mt_yet_to_return;
	INSERT INTO mt_yet_to_return SELECT * FROM yet_to_return;
END //

DELIMITER;

CALL RefreshYetToReturn();

CREATE EVENT IF NOT EXISTS 1_min_yet_to_return
ON SCHEDULE EVERY 1 MINUTE
DO
	CALL RefreshYetToReturn()"; // real time data update
#union and union all

/*full text search*/ // only support in innodb and mysql. its CHAR,VARCHAR and TEXT supported. meilisearch.
"ALTER TABLE film ADD FULLTEXT INDEX ft_search_film (title,description);
SHOW INDEX FROM film;"; // add index in film table for search
// use EXPLAIN for check index add or not
"SELECT film_id, title, description, release_year, length, rating
FROM film
WHERE MATCH(title, description) AGAINST ('war ice divorce' IN NATURAL LANGUAGE MODE)
AND rating = 'g'"; // search query IN NATURAL LANGUAGE MODE

"SELECT title, MATCH(title,description) AGAINST ('war ice') AS score
FROM film
ORDER BY score DESC"; // how much keyword matches this score check

"SELECT film_id, title, description, release_year, length, rating
FROM film
WHERE MATCH(title, description) AGAINST ('+war -ice' IN BOOLEAN MODE)"; // (-) sin means are not allowed this ice keyword related rows.
                                                                        // (+) sin means this keyword must have this row
"SELECT film_id, title, description, release_year, length, rating
FROM film
WHERE MATCH(title, description) AGAINST ('+war >NOTTING' IN BOOLEAN MODE)"; // (>) sin means major priority this keyword related rows.

"SELECT film_id, title, description, release_year, length, rating
FROM film
WHERE MATCH(title, description) AGAINST ('read comment' IN BOOLEAN MODE);"; // ("ROCKY WAR") "" sin means only find this text.

"SELECT film_id, title, description, release_year, length, rating
FROM film
WHERE MATCH(title, description) AGAINST ('war*' IN BOOLEAN MODE)"; // (*) sin means match incomplete word.

// WITH QUERY EXPRESSION mode
"SELECT film_id, title, description, release_year, length, rating
FROM film
WHERE MATCH(title, description) AGAINST ('Shark Tank' WITH QUERY EXPANSION);"; // get similar data set use this query expression.

"SELECT * FROM INFORMATION_SCHEMA.INNODB_FT_DEFAULT_STOPWORD;"; //stop words

/*stored procedure*/
"DELIMITER //

CREATE PROCEDURE return_yet_to()

BEGIN

SELECT yet_to_return.customer_id, yet_to_return.email, address.phone, address.postal_code
FROM yet_to_return
JOIN customer USING(customer_id)
JOIN address ON address.address_id = customer.address_id;

END //

DELIMITER ;

CALL return_yet_to()"; // store procedure structure

/*store value in  variable*/
"SELECT 100 INTO @total_count;
SELECT @total_count;";
/*store value in set variable*/
"SET @abc = 60;
SELECT @abc;";

/*store procedure with in parameter*/
"DELIMITER //
CREATE PROCEDURE get_movie_by_rating(IN rating_type VARCHAR(50))
BEGIN
	SELECT title, description, release_year, rating
	FROM film WHERE rating = rating_type;
	END //
DELIMITER ; 

CALL get_movie_by_rating('PG')";

// in out parameter in store procedure
"DELIMITER //
CREATE PROCEDURE get_movie_by_ratings(
IN rating_type VARCHAR(50),
OUT total_count INT UNSIGNED
)
BEGIN
	SELECT COUNT(*) INTO total_count
	FROM film WHERE rating = rating_type;
	END // 
DELIMITER ; 

CALL get_movie_by_ratings('PG', @total);

SELECT @total;";

// out parameter in store procedure
"DELIMITER //
CREATE PROCEDURE get_movie_by_returns(OUT total_count INT UNSIGNED)
BEGIN
	SELECT COUNT(*)
	FROM film WHERE rating = 'PG';
	END // 
DELIMITER ; 

CALL get_movie_by_returns(@total);

SELECT @total;";


// inout parameter in store procedure
"DELIMITER //
CREATE PROCEDURE count_and_add_by_rating(
IN rating_type VARCHAR(50),
INOUT collected_total INT UNSIGNED
)
BEGIN
	DECLARE current_total INT DEFAULT 0;
	
	SELECT COUNT(*) INTO current_count
	FROM film WHERE rating = rating_type;
	
	SET collected_total = current_count+current_total;
	END // 
DELIMITER ; 

SET @last_total = 0;
CALL get_movie_by_ratings('PG', @last_total);
CALL get_movie_by_ratings('G', @last_total);
SELECT @last_total;";

/*managing stored  procedures*/
"SELECT routine_name, routine_type, definer, created
FROM information_schema.routines
WHERE routine_type = 'PROCEDURE' AND ROUTINE_SCHEMA = 'sakila'";// check how much stored procedures have

"DROP PROCEDURE IF EXISTS get_movie_by_rating;"; // delete store procedures
"SHOW CREATE PROCEDURE get_movie_by_rating"; // getting procedures details

/*trigger*/ // we can use when update, insert and delete. aso use after and before.  new,old.
"INSERT  INTO orders (customer_id,date,total_amount)
VALUES (1,NOW(),550);

INSERT INTO order_items (order_id,product_id,quantity,price)
VALUES (3,1,2,545.91),(3,2,5,675.91);

CREATE TRIGGER update_stock_on_order AFTER INSERT ON order_items
	FOR EACH ROW
		UPDATE products
		SET stock_quantity  =  stock_quantity - new.quantity
		WHERE id = new.product_id;
		
DROP TRIGGER update_stock_on_order"; // add trigger and update quantity.

//createing change log
"CREATE TABLE name_changes(
	cusomer_id BIGINT,
	old_name VARCHAR (200),
	new_name VARCHAR (200),
	change_time TIMESTAMP DEFAULT(CURRENT_TIMESTAMP())
);

UPDATE customers SET name = 'kawsar ahmed ashif' WHERE id = 1;

CREATE TRIGGER name_change_hostory AFTER UPDATE ON customers
	FOR EACH ROW
	INSERT INTO name_changes (cusomer_id,old_name,new_name)
	VALUE (new.id, old.name, new.name);
	
DROP TRIGGER name_change_hostory"; // trigger with update and new,old keywords used

// data senitize with trigger
"DELIMITER //
CREATE TRIGGER hashed_cust_password BEFORE INSERT ON customers
	FOR EACH ROW
	BEGIN
		IF (LENGTH(new.password) < 32)
		THEN
			SET new.password  = MD5(new.password);
		END IF;
	END //
DELIMITER; "; // before INSERT ON customers

// preventing execution with trigger
"CREATE TRIGGER prevent_banned_user_order BEFORE INSERT ON orders
FOR EACH ROW
BEGIN
    DECLARE banned_count INT;
    SELECT COUNT(*) INTO banned_count 
    FROM customers 
    WHERE id = NEW.customer_id AND is_bannd = 1;

    IF banned_count > 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'cannot accept order from banned customer';
    END IF;
END //

DELIMITER;"; // bannd user not created order. before keyword