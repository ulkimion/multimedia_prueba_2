-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 03:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_prueba_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nacionalidad` varchar(10) NOT NULL,
  `genero` int(1) NOT NULL,
  `ciudad_residencia` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `rut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `nacionalidad`, `genero`, `ciudad_residencia`, `foto`, `fecha_nacimiento`, `rut`) VALUES
(11, 'NombreA nombreA', 'ApellidoA ApellidoA', 'Chilena', 0, 'Ciudad', 'img/06-11-202203-16-56_7870NombreA nombreA.png', '2022-11-09', 11111),
(12, 'NombreB nombreB', 'ApellidoB ApellidoB', 'Chilena', 0, 'Ciudad', 'img/06-11-202203-17-28_4068NombreB nombreB.png', '2011-12-09', 22222),
(13, 'NombreC nombreC', 'ApellidoC ApellidoC', 'Canadiense', 0, 'Ciudad', 'img/06-11-202203-17-53_3398NombreC nombreC.png', '1998-01-09', 33333),
(14, 'NombreD nombreD', 'ApellidoD ApellidoD', 'Uruguay', 0, 'Ciudad', 'img/06-11-202203-18-19_3230NombreD nombreD.png', '1986-10-09', 44444),
(15, 'NombreE nombreE', 'ApellidoE ApellidoE', 'Canadiense', 0, 'Ciudad', 'img/06-11-202203-18-45_9026NombreE nombreE.png', '1977-11-09', 55555),
(16, 'NombreF nombreF', 'ApellidoF ApellidoF', 'Canadiense', 0, 'Ciudad', 'img/06-11-202203-19-29_5234NombreE nombreE.png', '1977-11-09', 55555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
