-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2019 at 08:22 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_docter`
--

CREATE TABLE `t_docter` (
  `id_docter` int(11) NOT NULL,
  `docter_name` varchar(30) NOT NULL,
  `id_poliklinik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_docter`
--

INSERT INTO `t_docter` (`id_docter`, `docter_name`, `id_poliklinik`) VALUES
(1, 'Toto Rubianto', 2),
(2, 'Kharis Azhar', 1),
(7, 'Nurkhasanah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_hospital`
--

CREATE TABLE `t_hospital` (
  `id_hospital` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `day_open` time NOT NULL,
  `Rating` int(10) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_hospital`
--

INSERT INTO `t_hospital` (`id_hospital`, `hospital_name`, `day_open`, `Rating`, `Address`, `Image`) VALUES
(2, 'Dadi Keluarga', '09:00:00', 4, 'jl. di panjahitan purwokerto utara', 'untutled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_poliklinik`
--

CREATE TABLE `t_poliklinik` (
  `id_poliklinik` int(11) NOT NULL,
  `poliklinik_name` varchar(30) NOT NULL,
  `id_hospital` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_poliklinik`
--

INSERT INTO `t_poliklinik` (`id_poliklinik`, `poliklinik_name`, `id_hospital`) VALUES
(1, 'mata', 2),
(2, 'gigi', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_docter`
--
ALTER TABLE `t_docter`
  ADD PRIMARY KEY (`id_docter`),
  ADD KEY `id_poliklinik` (`id_poliklinik`);

--
-- Indexes for table `t_hospital`
--
ALTER TABLE `t_hospital`
  ADD PRIMARY KEY (`id_hospital`);

--
-- Indexes for table `t_poliklinik`
--
ALTER TABLE `t_poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`),
  ADD KEY `FK_hospital` (`id_hospital`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_docter`
--
ALTER TABLE `t_docter`
  MODIFY `id_docter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_hospital`
--
ALTER TABLE `t_hospital`
  MODIFY `id_hospital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_poliklinik`
--
ALTER TABLE `t_poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_docter`
--
ALTER TABLE `t_docter`
  ADD CONSTRAINT `t_docter_ibfk_1` FOREIGN KEY (`id_poliklinik`) REFERENCES `t_poliklinik` (`id_poliklinik`);

--
-- Constraints for table `t_poliklinik`
--
ALTER TABLE `t_poliklinik`
  ADD CONSTRAINT `FK_hospital` FOREIGN KEY (`id_hospital`) REFERENCES `t_hospital` (`id_hospital`),
  ADD CONSTRAINT `t_poliklinik_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `t_hospital` (`id_hospital`);
