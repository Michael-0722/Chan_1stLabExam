CREATE DATABASE IF NOT EXISTS student_record_db;
USE student_record_db;

CREATE TABLE IF NOT EXISTS students (
    student_id INT PRIMARY KEY,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL
);