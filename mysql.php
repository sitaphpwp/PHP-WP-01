php basic
==============
1. Array
2. Functions
3. Form Handeling
4. strings
5. Template Mastering
6. Variable , conditional , looping
=========================================

DATABASE : Relational Database / No sql
MYSQL => Relational Database
Nosql : mongoeDB , Postgress


DATABASE main parts of a software
==================================
. Query
. Joining
. Keys(Primary , foreign)
==================================
Theoritical
------------
. Database Design
. Normilization
. ER Diagram

mysql => relational database
procedural :
DATBASE concept :
ORM => object relational Model (Laravel, Django, NEXT JS, Prisma)
Query builder => way data manupulation (Laravel,Django)

raw query =>

Table name => Plural
Database name => Singular

================================

mysql => datatype : int , varchar , datetime, text , longtext,tinyint



Products table design

id => int (3) autoincrement primary key not null
product_title => varchar(100) not null
price => decimal(8,2) not null
qty => int(100)
description => text
image => varchar
stock => int (10)
datetime =>datetime

GUI =>


CRUD =>

C => create
R => Read
U => Update
D => Delete



How to create DB using command :

create database sylhost_commerce;

CREATE DATABASE [IF NOT EXISTS] sylhost_commerce
CREATE DATABASE IF NOT EXISTS sylhost_commerce;
DROP:
DROP DATABASE sylhost_commerce;



DATABASE learning
====================
https://www.w3schools.com/mysql/mysql_drop_db.asp
https://www.javatpoint.com/sql-rename-database
https://www.javatpoint.com/mysql-create-database#:~:text=MySQL%20Workbench-,MySQL%20Command%20Line%20Client,%5BCHARACTER%20SET%20charset_name%5D




Table:
=========

how to create table :


CREATE TABLE inventory
(
column name1 data type length,
column name2 data type length,
)

CREATE TABLE inventory ( id int AUTO_INCREMENT NOT NULL, name varchar(255) NOT NULL, price decimal(10,2) NOT NULL, description text(255), qty int, image varchar(255), stock int, created_at datetime, PRIMARY KEY(id) );


INSERT :

INSERT INTO `inventory`
(
'name',
'price',
'description',
'qty',
'image',
'stock',
'created_at'

)
VALUES

(
'HP Laptop',
25000.25,
'description',
20,
'image',
20,
"18-09-2023"


)

INSERT INTO `inventory`
(
name,
price,
description,
qty,
image,
stock,
created_at

)
VALUES

(
'HP Laptop',
25000.25,
'description',
20,
'image',
20,
"18-09-2023"

)


<!-- Update -->

UPDATE `inventory`

SET name = 'Lenovo Laptop' WHERE id = 1;
UPDATE `inventory` SET name = 'Lenovo' WHERE id = 1;



<!--  DELETE -->

DELETE FROM `inventory` WHERE id = 1

DELETE FROM `inventory` WHERE id = 1;


<!--  Join Query  -->


inventory : database

products table
categorys table
brands table
users table
roles table

primary key
foreign key


products entitys :
=================
id => int primary key Not Null autoincrement
name => varchar(255)
category_id=> (int) foreign key
brand_id=>(int)
quantity => int
price => decimal
description => text
image => varchar(255)



categorys table
================
id => int primary key
category_name => varchar
image=> varchar



brands table:
=============
id=> int primary key
name=> varchar
image=>varchar


users table
===========
id=> int primary
role_id=> int foreign key
firstname=> varchar
lastname=> varchar
username=> varchar
password=>varchar
email=> varchar

roles table
===========
id=> int primary key
role_name=> varchar


profile :

users has one profile
profile belongs users

one to one relationship:


users:
id => (PK)
p_id(fk)
name =>
username=>
email=>


profile
===========
id (pk)
user_id(fk)


relation:

one to one =>
one to many =>

post table has many comments



many to many :




many to one =>
many to many =>



CREATE TABLE products (
id int NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
cat_id int,
brand_id int,
quantity int,
price decimal(10,3),
description text,
image varchar(255),
PRIMARY KEY (id),
FOREIGN KEY(cat_id) REFERENCES categories(id),
FOREIGN KEY(brand_id) REFERENCES brands(id),
);


CREATE TABLE categories (
id int NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
PRIMARY KEY (id)
);




CREATE TABLE products (
id int NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
cat_id int,
brand_id int,
quantity int, price decimal(10,3), description text, image varchar(255), PRIMARY KEY (id), FOREIGN KEY(cat_id) REFERENCES categories(id), FOREIGN KEY(brand_id) REFERENCES brands(id)
);



insert :
INSERT INTO `categories` (`id`, `name`) VALUES (NULL, 'Laptop'), (NULL, 'Mobile');


products insert :

INSERT INTO `products`
(`id`, `name`, `cat_id`, `brand_id`, `quantity`, `price`, `description`, `image`)
VALUES (NULL, 'Hp G3 Laptop', '1', '1', '100', '25000.25', 'Hp laptop', 'HP laptop image'), (NULL, 'Nokia c3', '2', '2', '20', '25000.10', 'Nokia Mobile', 'Mobile image');





INSERT INTO `products`
(
`name`,
`cat_id`,
`brand_id`,
`quantity`,
`price`,
`description`,
`image`
)

VALUES(
'Lenova Laptop',
1,
1,
100,
25000.10,
'lenova prodcuts',
'lenova image'

)



Select
=========
SELECT * FROM `categories`;

SELECT name FROM `categories`;


JOIN
========
two or more tables


Supported Types of Joins in MySQL
================================

INNER JOIN: Returns records that have matching values in both tables
LEFT JOIN: Returns all records from the left table, and the matched records from the right table
RIGHT JOIN: Returns all records from the right table, and the matched records from the left table
CROSS JOIN: Returns all records from both tables




inner join
==========
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;


SELECT * FROM products as p
INNER JOIN categories as ca
ON p.id = ca.id;


SELECT * FROM products AS p INNER JOIN categories AS ca ON p.id = ca.id;



SELECT p.name, p.quantity,p.price,ca.name FROM products AS p INNER JOIN categories AS ca ON p.id = ca.id;

SELECT p.name, p.quantity,p.price,ca.name FROM products AS p INNER JOIN categories AS ca ON p.id = ca.id WHERE p.id = 1