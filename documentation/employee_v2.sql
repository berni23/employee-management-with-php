-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2020 a las 15:51:08
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employee_v2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `streetAddress` varchar(4) NOT NULL,
  `state` varchar(4) NOT NULL,
  `age` tinyint(3) NOT NULL,
  `postalCode` tinyint(7) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `profileImg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (1,'Rack','Lei','jackon@network.com','M','San Jone',126,'CA',24,394221,7383627627,'https://images.pexels.com/photos/1438275/pexels-photo-1438275.jpeg?auto=compress&cs=tinysrgb&crop=faces&fit=crop&h=200&w=200');
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (2,'John','Doe','jhondoe@foo.com','M','New York',89,'WA',34,09889,1283645645,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (3,'Leilas','Mills','mills@leila.com','M','San Diego',55,'CA',29,098765,9983632461,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (4,'Richard','Desmond','dismond@foo.com','M','Salt lake city',90,'UT',30,457320,90876987654,'https://uifaces.co/our-content/donated/_jyHntxv.jpg');
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (5,'Susan','Smith','susanmith@baz.com','M','Louisville',43,'KNT',28,445321,224355488976,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (6,'Brad','Simpson','brad@foo.com','M','Atlanta',128,'GEO',40,394221,6854634522,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (7,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (8,'Moha','Ahom','moha@network.com','M',NULL,NULL,NULL,20,NULL,NULL,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (9,'asdasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (10,'asdasdas','sdasda','dsadasd@sdadasd.com','M',NULL,NULL,NULL,2002,NULL,NULL,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (11,'asdas','dasd','asdasdas','M',NULL,NULL,NULL,122,NULL,NULL,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (12,'asd','asda','sdasd','M',NULL,NULL,NULL,1232,NULL,NULL,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (13,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (14,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (15,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (16,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (17,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (18,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (19,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (20,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (21,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (22,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (23,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (24,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (25,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (26,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (27,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (28,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (29,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (30,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
INSERT INTO employees(id,name,lastName,email,gender,city,streetAddress,state,age,postalCode,phoneNumber,profileImg) VALUES (31,'Neil','Walker','walkerneil@baz.com','M','Nashville',1,'TN',42,90143,45372788192,NULL);
