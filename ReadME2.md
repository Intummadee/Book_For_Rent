
Master username 	admin
password lab-password


RDS
Endpoint
php-project-db.c16ycg4m0nwv.us-east-1.rds.amazonaws.com

http://54.167.69.92/



เปิด Terminal ด้วย run as admin
ตอนเราทำ เราจะมี Download ppm มา ให้ไปรันในไฟล์ที่เก็บ pem ไว้ จากนั้นใส่เลย

// ตรงนี้ข้าม มันเกิด error ไม่รู้จะโชว์ทำไม 
chmod 400 Book_For_Rent2.pem
ssh -i "Book_For_Rent2.pem" ubuntu@ec2-3-239-203-75.compute-1.amazonaws.com




-ไม่รู้เพราะอะไร แต่ปัญหาน่าจะเป็น EC2 อาจจะเกิดจาก VPC เพราะลองใช้ vpc ที่เปน default แล้วผ่าน เลยสันนิษฐานว่าอาจเพราะ vpc ไว้งี้
// เริ่ม Start เอามาจากกด Connect กับ Ec2 โดยจะรัน ในที่ที่มีไฟล์  pem ที่เราโหลดมาตอนสร้าง ec2 เก็บไว้
🍆🍆🍆 ssh -i "cat.pem" ubuntu@ec2-44-223-13-229.compute-1.amazonaws.com

sudo -i
sudo apt update
sudo apt install apache2
sudo apt install php libapache2-mod-php php-mysql
cd /var/www/html/
- สามารถเช็กว่าทำถูกไหมได้จากเปิด EC2 ที่ใช้อยู่แล้วไปกด Open link ตรง Public IPv4 address ถ้าถูกจะขึ้นหน้า Apache2 Default Page
- สามารถเช็กจาก ll ได้เซม  ได้ค่าด้านล่าง
total 20
drwxr-xr-x 2 root root  4096 Mar 12 14:09 ./
drwxr-xr-x 3 root root  4096 Mar 12 14:09 ../
-rw-r--r-- 1 root root 10671 Mar 12 14:09 index.html



sg-0c8ac80700869692f
sudo vi index.php
หลังจากใช้คำสั่งนี้จะเข้าสู้หน้า ใส่ code
ถ้าอยากละทิ้งทุกอย่างแบบชัวร์เหมือนบังคับออกโหมดนี้ esc --> :qa! --> enter

sudo mv index.html index.html_bkp

เข้าไปดู RDS เพื่อเอาค่า Endpoint
เช่น Endpoint
cat-db.c16ycg4m0nwv.us-east-1.rds.amazonaws.com

แล้วนำมาต่อกับคำสั่ง telnet 
sudo apt install mysql-client

sudo vi db.inc.php
จากนั้นใส่ ด้านล่าง
<?php
define('DB_SERVER', 'cat-db.c16ycg4m0nwv.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'lab-password');
define('DB_DATABASE', 'php');
?>
👗👗 ตรวจสอบด้วย cat db.inc.php



🍸 ตัวอย่าง เช่น mysql -u admin -h <php endpoint> -p
sudo mysql -u admin -h cat-db.c16ycg4m0nwv.us-east-1.rds.amazonaws.com -p
lab-password


ถ้าเชื่อมไม่ได้ให้ไป แก้ security group (ไปดูคลิป)
โดยเพิ่ม inbound จาก Security groups ของ Ec2 เช่น sg-0c8ac80700869692f (cat-website)

show databases;
use php;
show tables;

- :q!


+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
4 rows in set (0.00 sec)


show tables;
+---------------+
| Tables_in_php |
+---------------+
| BOOKS         |
| EMPLOYEES     |
| USERS         |
| orders        |
+---------------+

SELECT * FROM BOOKS;
SELECT * FROM USERS;
SELECT * FROM orders;

DESCRIBE BOOKS;
DESCRIBE orders;
DESCRIBE USERS;

DROP TABLE IF EXISTS BOOKS;


แล้วสร้าง DB Php
🍸 CREATE database php;

สร้างเสร้จก็ออก exit;

sudo vi SamplePage.php
🍉🍉🍉🍉🍉   vi SamplePage.php
vi fantasy.php
sudo vi styles.css

วิธีลบไฟล์
sudo rm -r cart.php






sudo mkdir catagories
sudo vi academic.php
sudo vi category/allbooks.php
sudo vi category/bio.php
sudo vi category/fantasy.php
sudo vi category/history.php
sudo vi category/horror.php
sudo vi category/lang.php
sudo vi category/mystery.php
sudo vi category/productive.php
sudo vi category/romance.php
sudo vi category/travel.php


sudo vi travel.php



sudo vi profile.php
sudo vi add_to_cart.php
sudo vi cart.php
sudo vi login_signup.php
sudo vi academic.php
sudo vi bio.php
sudo vi fantasy.php
sudo vi history.php
sudo vi horror.php
sudo vi lang.php
sudo vi mystery.php
sudo vi productive.php
sudo vi travel.php
sudo vi delete_book.php



<?php 
echo "Hello World";
?>



http://44.223.13.229/SamplePage.php

กดตรวจสอบ ll  เพื่อจะเปลี่ยนตรงส่วนหัวบนสุดของ php















