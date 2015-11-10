-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Nov 10, 2015 kell 01:48 p.k.
-- Serveri versioon: 5.6.26
-- PHP versioon: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `raamatukogu`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_ID` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_fname` varchar(255) DEFAULT NULL,
  `admin_lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `blacklist`
--

CREATE TABLE IF NOT EXISTS `blacklist` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `client_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_ID` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_type` varchar(255) NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `books`
--

INSERT INTO `books` (`book_ID`, `book_title`, `book_author`, `book_type`, `book_quantity`) VALUES
  (60, 'Kevade', 'Luts', 'Draama', 3);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `p_code` bigint(20) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `blacklist` tinyint(1) NOT NULL,
  `total_rent` int(11) NOT NULL,
  `client_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `client`
--

INSERT INTO `client` (`fname`, `lname`, `p_code`, `mobile`, `mail`, `blacklist`, `total_rent`, `client_ID`) VALUES
  ('asasd', 'asdsad', 2147483647, 123, 'asd', 0, 1, 1),
  ('asd', 'asd', 2147483647, 1212, 'asd', 0, 1, 2),
  ('asd', 'asd', 2147483647, 1212, 'asd', 0, 1, 3),
  ('asd', 'asd', 12345678910, 123, 'asd', 0, 1, 4);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `admins`
--
ALTER TABLE `admins`
ADD PRIMARY KEY (`admin_ID`);

--
-- Indeksid tabelile `blacklist`
--
ALTER TABLE `blacklist`
ADD PRIMARY KEY (`client_ID`);

--
-- Indeksid tabelile `books`
--
ALTER TABLE `books`
ADD PRIMARY KEY (`book_ID`);

--
-- Indeksid tabelile `client`
--
ALTER TABLE `client`
ADD PRIMARY KEY (`client_ID`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `admins`
--
ALTER TABLE `admins`
MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT tabelile `blacklist`
--
ALTER TABLE `blacklist`
MODIFY `client_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT tabelile `books`
--
ALTER TABLE `books`
MODIFY `book_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT tabelile `client`
--
ALTER TABLE `client`
MODIFY `client_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
