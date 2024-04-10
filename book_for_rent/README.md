
<h1 align="center">Book_for_rent<img src="https://media.tenor.com/Oc6hUz9-D4IAAAAj/ginger-cat-cat.gif" width="70px"></h1>

### Tutorial
```
https://www.youtube.com/watch?v=Ev3--3aX2X0
```

### Aws Tutorial Document 
```
https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/CHAP_Tutorials.WebServerDB.CreateWebServer.html
```

### ตัวอย่าง เว็บไซต์ที่นำขึ้น Cloud  .𖥔 ݁ 🪐˖
<img width="100%" height="60%" src="https://github.com/Intummadee/Book_For_Rent/blob/main/assets/index.png?raw=true" >

### Start!
Example: Connect to instance 
```ssh -i "php-website.pem" ubuntu@ec2-3-235-87-10.compute-1.amazonaws.com```

### Built With 🕶
<details>
    <summary>
    </summary>
    <br>
        <table align="center">
            <tr>
                <td align="center" width="96">
                    <img src="https://techstack-generator.vercel.app/mysql-icon.svg" alt="icon" width="65" height="65" />
                <br>MySQL
                </td>
                <td align="center" width="96">
                    <img src="https://techstack-generator.vercel.app/github-icon.svg" alt="icon" width="65" height="65" />
                <br>Github
                </td>
                <td align="center"  width="96">
                    <img src="https://skillicons.dev/icons?i=html" width="48" height="48" alt="HTML5" />
                <br>HTML5
                </td>
                <td align="center" width="96">
                    <img src="https://skillicons.dev/icons?i=css" width="48" height="48" alt="css" />
                <br>CSS
                </td>
                <td align="center"  width="96">
                    <img src="https://skillicons.dev/icons?i=bootstrap" width="48" height="48" alt="bootstrap" />
                <br>Bootstrap
                </td>
                <td align="center"  width="96">
                    <img src="https://skillicons.dev/icons?i=php" width="48" height="48" alt="bootstrap" />
                <br>PHP
                </td>
                <td align="center"  width="96">
                    <img src="https://skillicons.dev/icons?i=aws" width="48" height="48" alt="aws" />
                <br>AWS
                </td>
                <td align="center"  width="96">
                    <img src="https://skillicons.dev/icons?i=laravel" width="48" height="48" alt="Laravel" />
                <br>Laravel
                </td>
            </tr>
        </table>
</details>

<br>

---

## Cloud Class 
https://www.awsacademy.com/vforcesite/LMS_Login

---

<br>


## สร้าง Laravel

- คำสั่งรัน
```php artisan serve```

<details>
    <summary>
    </summary>
    <blockquote>ตรวจสอบว่าโหลด Composer มาหรือยัง ด้วยคำสั่ง <strong><em>composer --version</em></strong> ถ้าไม่มีให้ติดตั้ง ==> https://getcomposer.org/</blockquote>
    <blockquote>
    <p>คำสั่งสร้าง Project ==> <strong><em>composer create-project laravel/laravel:^10.0 book_for_rent</em></strong></p>
    </blockquote>
    <blockquote>
    กรณี Clone ==> <strong><em>composer install</em></strong>
    </blockquote>
</details>

<br>

---

## วิธีเข้าแก้ไฟล์ใน AWS ☃︎

```sudo -i``` เพื่อเข้าสู่ root

```cd /var/www/html/```

```vi SamplePage.php```

- กด esc ก่อนแล้ว พิม :wq เพื่อ save แล้วออก
- ถ้าอยากลบทุกบรรทัด ให้กด esc แล้ว :%d


---

## วิธีเข้าสู่ฐานข้อมูล 🍹

ดูใน RDS
หา php endpoint เช่น ```php-database.c16ycg4m0nwv.us-east-1.rds.amazonaws.com```

```vi db.inc.php```
แล้วเพิ่มโค้ดด้านล่าง เปลี่ยนค่าตามที่ตัวเองได้สร้างไว้ 

``` php
<?php
define('DB_SERVER', '<php endpoint>');
define('DB_USERNAME', '<user>');
define('DB_PASSWORD', '<master password>');
define('DB_DATABASE', 'php');
?>
```

cat db.inc.php (เช็กว่าถูกไหม)

## วิธีเข้าพื้นที่จัดการ dB 
```mysql -u admin -h <php endpoint> -p```


- คำสั่ง **แสดงฐานข้อมูลที่มี** ในตอนนี้
```SQL
show databases;
``` 

```
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| php                |
| sys                |
+--------------------+
```

```
mysql> SELECT * FROM orders;
+----------+---------+---------+----------+-------------+---------------------+
| order_id | user_id | book_id | quantity | total_price | order_date          |
+----------+---------+---------+----------+-------------+---------------------+
|        5 |       1 |       2 |        3 |       45.67 | 2024-03-12 22:33:11 |
+----------+---------+---------+----------+-------------+---------------------+
```

```
mysql> SELECT * FROM USERS;
+---------+----------+----------+-----------------+
| user_id | username | password | email           |
+---------+----------+----------+-----------------+
|       1 | girl     | 1111     | Judas@gmail.com |
|       2 | boy      | 1111     | Cat@gmail.com   |
+---------+----------+----------+-----------------+
```



เราต้องเข้าใน ฐานข้อมูล php ก่อน คำสั่งเข้าฐานข้อมูล = ```use php```

- คำสั่ง **สร้าง Table** ชื่อ BOOKS
``` SQL
USE php;
CREATE TABLE BOOKS (
    book_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    author VARCHAR(100),
    category VARCHAR(50),
    price DECIMAL(10, 2),
    cover_image_path VARCHAR(255),
    description VARCHAR(255)
);
```

- คำสั่ง สร้างตาราง **ORDERS**
``` SQL
USE php;
CREATE TABLE orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    book_id INT,
    quantity INT DEFAULT 1,
    total_price DECIMAL(10, 2),
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES USERS(user_id),
    FOREIGN KEY (book_id) REFERENCES BOOKS(book_id)
);
```

- คำสั่ง สร้างตาราง **USERS**
``` SQL
USE php;
CREATE TABLE USERS (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(255),
    email VARCHAR(100)
);
```



- คำสั่ง **ดูรายละเอียด** ของตารางชื่อ BOOKS
``` SQL
DESCRIBE BOOKS;
```

- คำสั่ง **เพิ่มข้อมูล** ลงในตาราง BOOKS
```SQL
INSERT INTO BOOKS (title, category, price, author, cover_image_path, description) VALUES 
('The girl and the Witchs Garden', 'Fantasy', 200.00, 'Erin BowMan', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1570732371i/44779631.jpg', 'The owner of the estate and Piper’s wealthy grandmother—is a witch. The grand house and its garden hold many secrets—some of which may even save her father—and Piper will need to believe in herself.'),
('The CERULEAN', 'Fantasy', 250.00, 'Amy Ewing', 'https://devouringbooks2017.files.wordpress.com/2018/12/The-Cerulean-by-Amy-Ewing.jpg', 'Sera has always felt as if she didn’t belong among her people, the Cerulean. She is curious about everything and can’t stop questioning her three mothers, her best friend, Leela, and even the High Priestess');
```

```SQL
INSERT INTO USERS (user_id, username, password, email) VALUES 
(1, 'girl', '1111',  'Judas@gmail.com'),
(2, 'boy', '1111',  'Cat@gmail.com');
```

- คำสั่ง **อ่าน** ตาราง BOOKS
``` SQL
SELECT * FROM BOOKS;
USE php;
``` 

- คำสั่ง **แสดงตารางทั้งหมดที่มี** ในฐานข้อมูลที่ชื่อ php
``` SQL
USE php;
show tables;
```

- คำสั่ง **Update**
UPDATE USERS SET email = 'Cat@gmail.com' WHERE user_id = 2;


- ⚠️⚠️ คำสั่ง **ลบตาราง**
``` SQL
DROP TABLE IF EXISTS _<tableName>_;
```

- **คำสั่งออก** จากโหมดแก้ไขฐานข้อมูล 🧀 
```exit;```




## อ้างอิง
&emsp; https://www.geeksforgeeks.org/how-to-call-php-function-on-the-click-of-a-button/

&emsp; https://www.w3schools.com/php/


<br>
<div> 
 <a href="https://www.linkedin.com/in/intummadee-maliyam-800856226/" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a>
 <a href = "mailto:intummadee@gmail.com"><img src="https://img.shields.io/badge/-Gmail-%23333?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
<a href="https://github.com/Intummadee?tab=repositories" target="_blank"><img alt="All Repositories" title="All Repositories" src="https://img.shields.io/badge/-All%20Repos-2962FF?style=for-the-badge&logo=koding&logoColor=white"/></a>
</div>

