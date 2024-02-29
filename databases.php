<?php

"CREATE DATABASE databases_name"; // create database

"USE databases_name"; // use database

"DROP DATABASE databases_name"; // drop database

"DESCRIBE table_name"; // describe table

"SHOW CREATE TABLE `products`"; // table creation process

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

