--create DB
CREATE DATABASE Coffee;

--create tables
CREATE TABLE users (
	fname varchar(255),	
	lname varchar(255),
	mail varchar(255),
	pwd varchar(255),
	PRIMARY KEY (mail)
);

CREATE TABLE Blogs (
	Blog_id int NOT NULL AUTO_INCREMENT,
	title varchar(255),	
	date datetime,
	description varchar(255),
	more varchar(255),
	image_name varchar(255),
	PRIMARY KEY (Blog_id)
);

INSERT INTO Blogs (title, date, description, more, image_name)
VALUES ("post title", null, 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'coffee.jpg');