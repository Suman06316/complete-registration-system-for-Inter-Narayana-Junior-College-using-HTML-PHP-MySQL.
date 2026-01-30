This project is a simple Student Registration System developed using HTML, PHP, and MySQL for Inter Narayana Junior College. The system allows students to register by submitting their personal and academic details through a web form. The submitted data is processed by a PHP backend and stored in a MySQL database.

Features

Student registration form
PHP form handling
MySQL database integration
Basic input validation
Easy deployment using XAMPP or WAMP

Technologies Used

HTML
CSS
PHP
MySQL

Project Structure

college-registration/
register.html
register.php
config.php
database.sql
README.md

Prerequisites

XAMPP or WAMP
PHP 7 or above
MySQL
Web browser

Database Setup

Create a database named narayana_college
Create a table named students

CREATE DATABASE narayana_college;
USE narayana_college;
CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
phone VARCHAR(15) NOT NULL,
course VARCHAR(50) NOT NULL,
gender VARCHAR(10) NOT NULL,
dob DATE NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

How to Run the Project
Install XAMPP or WAMP
Start Apache and MySQL
Copy the project folder into the htdocs directory
Import the database using phpMyAdmin
Open the browser and go to http://localhost/college-registration/register.html
Usage

Open the registration page
Fill in student details
Submit the form
Data will be stored in the MySQL database
