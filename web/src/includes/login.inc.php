<?php
    // Create connection
// // $conn = new mysql($servername, $username, $password, $dbname);

// // // Check connection
// // if ($conn->connect_error) {
// //     die("Connection failed: " . $conn->connect_error);
// // }

// // // sql to create table
// // // $sql = "CREATE TABLE MyGuests (
// // // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// // // firstname VARCHAR(30) NOT NULL,
// // // lastname VARCHAR(30) NOT NULL,
// // // email VARCHAR(50),
// // // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// // // )";

// // $sql = "SELECT * FROM \'Teachers\'" ;


// // if ($conn->query($sql) === TRUE) {
// //     echo "Table MyGuests created successfully";
// // } else {
// //     echo "Error creating table: " . $conn->error;
// // }

// $conn->close();


// -------------------------------------------
// DATABASE TABLES
// 
// Create table Teachers (
//     ID VARCHAR(255) NOT NULL,
//     NAME VARCHAR(255) NOT NULL,
//     SURNAME VARCHAR(255) NOT NULL,
//     USERNAME VARCHAR(255) NOT NULL,
//     PASSWORD VARCHAR(255) NOT NULL,
//     EMAIL VARCHAR(255) NOT NULL UNIQUE,
//     PRIMARY KEY(ID)
// );
// Create table Students (
//     ID VARCHAR(255) NOT NULL UNIQUE,
//     NAME VARCHAR(255) NOT NULL,
//     SURNAME VARCHAR(255) NOT NULL,
//     FATHERNAME VARCHAR(255) NOT NULL,
//     GRADE FLOAT NOT NULL,
//     MOBILENUMBER VARCHAR(255) NOT NULL,
//     Birthday DATE NOT NULL,
//     PRIMARY KEY(ID)
// );
// INSERT INTO `Teachers` (`ID`, `NAME`, `SURNAME`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES ('JDoe', 'John', 'Doe', 'JDoe_1', 'johnPass1', 'john-doe@email.com');
// INSERT INTO `Teachers` (`ID`, `NAME`, `SURNAME`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES ('JSmith', 'Joe', 'Smith', 'JSmith_1', 'joePass1', 'joe-smith@email.com');
// INSERT INTO `Students` (`ID`, `NAME`, `SURNAME`, `FATHERNAME`, `GRADE`, `MOBILENUMBER`, `Birthday`) VALUES ('AEinstein', 'Albert', 'Einstein', 'Hermann', '19.05', '(+18)-791-804-1955', '1879-03-14');
// INSERT INTO `Students` (`ID`, `NAME`, `SURNAME`, `FATHERNAME`, `GRADE`, `MOBILENUMBER`, `Birthday`) VALUES ('CShannon', 'Claude', 'Shannon', 'Elwood', '19.37', '(+19)-162-402-2001', '1916-04-30');
// INSERT INTO `Students` (`ID`, `NAME`, `SURNAME`, `FATHERNAME`, `GRADE`, `MOBILENUMBER`, `Birthday`) VALUES ('ATuring', 'Alan', 'Turing', 'Matheson', '19.31', '(+19)-120-706-1954', '1912-06-23');


