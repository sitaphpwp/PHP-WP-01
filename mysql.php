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