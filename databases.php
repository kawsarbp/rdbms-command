<?php

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

"SELECT `products`.`name` ,`categories`.`name`,`subcategories`.`name`,`users`.`name` 
FROM `products` 
JOIN `categories` ON `products`.`category_id` = `categories`.`id` 
JOIN `subcategories` ON `products`.`subcategory_id` = `subcategories`.`id` AND `p`.`name` = 'dhaka'
JOIN `users` ON `products`.`user_id` = `users`.`id`"; // inner join

"SELECT `products`.`name` ,`categories`.`name`,`subcategories`.`name`,`users`.`name` 
FROM `products` 
LEFT JOIN `categories` ON `products`.`category_id` = `categories`.`id` 
LEFT JOIN `subcategories` ON `products`.`subcategory_id` = `subcategories`.`id` 
LEFT JOIN `users` ON `products`.`user_id` = `users`.`id`"; // left join

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
"SELECT LPAD(user_id, 8, '0') AS PaddedProductCode FROM products"; // lpad function
"SELECT RPAD(user_id, 8, 0) AS PaddedProductCode FROM products"; // rpad function
"SELECT LOWER(REPLACE(name, ' ', '-')) AS modified_description FROM products"; // replace function
"SELECT `id`,`name`, SUBSTRING(`email`, INSTR(`email`,'@')+1) as email_domain FROM users";// substring and instr function
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
WHERE id = 2;"; // ase_encryption
//solution code for encryption
//ALTER TABLE users MODIFY COLUMN card_no VARBINARY(255);
"SELECT `name`,card_no, AES_DECRYPT(card_no, 'boss') AS card_no
FROM users LIMIT 5;"; // ase_decryption

"SELECT name, quantity, CRC32(CONCAT(`name`,`quantity`)) AS checksum FROM `products`"; // crc32


"SELECT * 
FROM products p
LEFT JOIN products_dev pv ON pv.id = p.id
WHERE CRC32(CONCAT(p.`name`,p.`quantity`)) != CRC32(CONCAT(pv.`name`,pv.`quantity`))"; // check which table data update