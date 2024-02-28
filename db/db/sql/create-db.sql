DROP DATABASE IF EXISTS cafe_db;

CREATE DATABASE cafe_db;

USE cafe_db;


CREATE TABLE books (
    book_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    author VARCHAR(100),
    category VARCHAR(50),
    price DECIMAL(10, 2),
    cover_image_path VARCHAR(255),
    description	varchar(200)
);

INSERT INTO books (title, category, price, author, cover_image_path, description ) VALUES
	  (1, 'The girl and the Witchs Garden', 'Fantasy', 200.00, 'Erin BowMan' , 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1570732371i/44779631.jpg', 'The owner of the estate and Piper’s wealthy grandmother—is a witch. The grand house and its garden hold many secrets—some of which may even save her father—and Piper will need to believe in herself.')
	, (2, 'The CERULEAN', 'Fantasy', 250.00, 'Amy Ewing' , 'https://devouringbooks2017.files.wordpress.com/2018/12/The-Cerulean-by-Amy-Ewing.jpg', 'Sera has always felt as if she didn’t belong among her people, the Cerulean. She is curious about everything and can’t stop questioning her three mothers, her best friend, Leela, and even the High Priestess.');


CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(255),
    email VARCHAR(100)
);
INSERT INTO users (username, password, email) VALUES ('judas', '1111', '64070257@kmitl.ac.th');



CREATE TABLE orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    book_id INT,
    quantity INT DEFAULT 1,
    total_price DECIMAL(10, 2),
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);

