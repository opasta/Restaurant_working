-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 20 jan 2019 om 22:07
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'kip', 'lc1', 'product-images/kip.jpg', 15.00),
(2, 'cola', 'cc1', 'product-images/cola.jpg', 8.00),
(3, 'Bier', 'GROOT BIER', 'product-images/bier.jpg', 9.00);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_num` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  `code` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Gegevens worden uitgevoerd voor tabel `order`
--

INSERT INTO `order` (`id`, `table_num`, `date`, `code`, `amount`) VALUES
(1, '11', '111', '22', '11'),
(2, '11', '111', '22', '11'),
(3, '11', '111', '22', '11'),
(4, 'test', 'test', 'test', 'test'),
(5, 'test', 'test', 'test', 'test'),
(6, 'test', 'test', 'test', 'test'),
(7, 'test', 'test', 'test', 'test'),
(8, 'test', 'test', 'test', 'test'),
(9, '1', '01/18/2019', 'lc1', 'lc1'),
(10, '1', '01/18/2019', 'GROOT BIER', 'GROOT BIER'),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '1', '01/18/2019', 'lc1', 'lc1'),
(14, '1', '01/18/2019', 'GROOT BIER', 'GROOT BIER'),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', 'lc1', ''),
(18, '', '', 'GROOT BIER', ''),
(19, '', '', 'lc1', ''),
(20, '', '', 'GROOT BIER', ''),
(21, '1', '01/26/2019', 'GROOT BIER', 'GROOT BIER'),
(22, '1', '01/26/2019', 'lc1', 'lc1'),
(23, '1', '01/26/2019', 'GROOT BIER', '100'),
(24, '1', '01/26/2019', 'lc1', '99'),
(25, '1', '01/26/2019', 'GROOT BIER', '100'),
(26, '1', '01/26/2019', 'lc1', '99'),
(27, '1', '01/26/2019', 'GROOT BIER', '100'),
(28, '1', '01/26/2019', 'lc1', '99'),
(29, '1', '01/26/2019', 'GROOT BIER', '100'),
(30, '1', '01/26/2019', 'lc1', '99'),
(31, '1', '01/26/2019', 'GROOT BIER', '100'),
(32, '1', '01/26/2019', 'lc1', '99'),
(33, '1', '01/26/2019', 'GROOT BIER', '100'),
(34, '1', '01/26/2019', 'lc1', '99'),
(35, '1', '01/20/2019', 'GROOT BIER', '5'),
(36, '1', '01/20/2019', 'lc1', '1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `table_num` int(31) NOT NULL,
  `num_pers` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Gegevens worden uitgevoerd voor tabel `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `table_num`, `num_pers`, `user_id`) VALUES
(1, '01/17/2019', 0, '1565865', 9),
(2, '01/26/2019', 6, '7', 2),
(3, '01/26/2019', 64, '7', 1),
(4, '01/26/2019', 5, '55', 0),
(5, '01/25/2019', 1, '55', 0),
(6, '01/25/2019', 1, 'sedrftyg', 0),
(7, '01/25/2019', 0, '55', 0),
(9, '01/25/2019', 1, '7', 1),
(10, '01/25/2019', 0, '7', 0),
(11, '01/19/2019', 5, '55', 5),
(31, '01/19/2019', 111, '111', 47),
(32, '01/24/2019', 0, '7', 48),
(33, '01/25/2019', 0, '7', 49),
(41, '01/24/2019', 1, '7', 57),
(42, '01/24/2019', 1, '7', 58),
(43, '01/24/2019', 1, '7', 59),
(44, '01/24/2019', 1, '7', 60),
(45, '01/24/2019', 1, '7', 61),
(59, '01/31/2019', 123, '12234', 75),
(65, '01/03/2019', 11, '7', 81),
(76, '01/18/2019', 1222, '7', 92),
(77, '01/18/2019', 1222, '7', 93),
(78, '01/18/2019', 1222, '7', 94),
(79, '01/26/2019', 5, '12', 0),
(80, '01/26/2019', 5, '12', 0),
(81, '01/26/2019', 5, '12', 95),
(82, '01/26/2019', 5, '12', 0),
(83, '01/26/2019', 5, '12', 96),
(84, '01/26/2019', 5, '12', 97),
(85, '01/26/2019', 5, '12', 98),
(86, '01/26/2019', 5, '12', 99),
(87, '01/26/2019', 5, '12', 100),
(88, '01/26/2019', 5, '12', 0),
(89, '01/26/2019', 5, '12', 0),
(94, '01/26/2019', 9, '7', 103),
(95, '01/25/2019', 4, '1565865', 104),
(96, '01/25/2019', 7, '1565865', 105),
(97, '01/21/2019', 2, '20', 106),
(98, '03/21/2019', 1, '12', 107),
(99, '01/21/2019', 3, '7', 108),
(100, '01/21/2019', 1, '7', 109);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `num_pers` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `table`
--

INSERT INTO `table` (`id`, `number`, `description`, `num_pers`) VALUES
(1, '1', 'Barre mooie leuke grote tafel', '6'),
(2, '2', 'Nog zo''n leuke tafel', '2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`) VALUES
(1, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(2, 'Henk Smikkel', 612345678, 'ariankastelein@live.nl'),
(3, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(4, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(5, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(6, 'Henk Smikkel', 612345678, 'ariankastelein@live.nl'),
(7, 'Henk Smikkel', 612345678, '3@4.com'),
(8, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(9, 'Maikol', 612345678, 'opasta@outlook.com'),
(10, '', 612345678, 'niks@kip.nl'),
(11, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(12, 'Henk Smikkel', 612345678, 'ariankastelein@live.nl'),
(13, 'Henk Smikkel', 612345678, '3@4.com'),
(14, 'Henk Smikkel', 1, 'ariankastelein@live.nl'),
(15, 'Je moeder', 612345678, 'opasta@outlook.com'),
(16, 'Je moeder', 612345678, '3@4.com'),
(17, 'Je moeder', 612345678, 'ariankastelein@live.nl'),
(18, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(19, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(20, 'Ron', 348, 'ronweasley@mail.com'),
(21, 'Ron', 348, 'ronweasley@mail.com'),
(22, 'Ron', 348, 'ronweasley@mail.com'),
(23, 'Ron', 348, 'ronweasley@mail.com'),
(24, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(25, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(26, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(27, 'Ron', 348, 'ronweasley@mail.com'),
(28, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(29, 'Ron', 348, 'ronweasley@mail.com'),
(30, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(31, 'Ron', 348, 'ronweasley@mail.com'),
(32, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(33, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(34, 'Ron', 348, 'ronweasley@mail.com'),
(35, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(36, 'Ron', 348, 'ronweasley@mail.com'),
(37, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(38, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(39, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(40, 'Ron', 348, 'ronweasley@mail.com'),
(41, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(42, 'Ron', 348, 'ronweasley@mail.com'),
(43, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(44, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(45, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(46, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(47, 'Blikje bier', 123456, 'blikje@bier.nl'),
(48, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(49, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(50, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(51, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(52, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(53, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(54, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(55, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(56, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(57, '1', 1, 'lolz@lolz.com'),
(58, '1', 1, 'lolz@lolz.com'),
(59, '1', 1, 'lolz@lolz.com'),
(60, '1', 1, 'lolz@lolz.com'),
(61, '1', 1, 'lolz@lolz.com'),
(62, '1', 1, '1@1.nl'),
(63, '1', 1, '1@1.nl'),
(64, '1', 1, '1@1.nl'),
(65, '1', 1, '1@1.nl'),
(66, '1', 1, '1@1.nl'),
(67, '1', 1, '1@1.nl'),
(68, '1', 1, '1@1.nl'),
(69, '1', 1, '1@1.nl'),
(70, '1', 1, '1@1.nl'),
(71, '1', 1, '1@1.nl'),
(72, '1', 1, '1@1.nl'),
(73, '1', 1, '1@1.nl'),
(74, '1', 1, '1@1.nl'),
(75, '12', 12, '12@kankerzooi.nl'),
(76, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(77, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(78, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(79, 'Henk Smikkel', 612345678, '112@lol.nl'),
(80, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(81, 'Henk Smikkel', 612345678, 'ietsnieuws@lol.nl'),
(82, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(83, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(84, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(85, '12233', 612345678, 'Michelkastelein1@gmail.com'),
(86, 'Heenk', 1, 'opasta@outlook.com'),
(87, 'Heenk', 1, 'opasta@outlook.com'),
(88, 'Henk Smikkel', 612345678, '1@2.nl'),
(89, 'Henk Smikkel', 612345678, '1@2.nl'),
(90, 'Henk Smikkel', 111, 'Michelkastelein1@gmail.com'),
(91, 'Henk Smikkel', 111, 'Michelkastelein1@gmail.com'),
(92, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(93, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(94, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(95, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(96, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(97, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(98, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(99, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(100, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(101, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(102, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(103, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(104, 'Henk Smikkel', 612345678, '3@4.com'),
(105, 'Henk Smikkel', 612345678, '3@4.com'),
(106, 'Henk Smikkel', 612345678, 'Michelkastelein1@gmail.com'),
(107, 'Henk Smikkel', 612345678, 'ariankastelein@live.nl'),
(108, 'Henk Smikkel', 612345678, 'opasta@outlook.com'),
(109, 'Henk Smikkel', 612345678, 'opasta@outlook.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
