-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Cze 2018, 17:52
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shareboard`
--
CREATE DATABASE IF NOT EXISTS `shareboard` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shareboard`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 1, 'Share One', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor nunc at ex ornare vestibulum. Duis id condimentum erat. Pellentesque vehicula at lectus et pretium. Integer sed ultrices libero. Etiam scelerisque vel tortor ut cursus. Morbi eu porttitor augue, at molestie urna. Sed purus turpis, vulputate eget aliquam non, vehicula ac dui. Donec eu ex placerat, pellentesque augue quis, laoreet turpis. Donec sed nulla vitae orci ullamcorper gravida in sed augue. Ut aliquam vestibulum mi ac facilisis. Ut convallis molestie magna, eget sagittis dui tincidunt vel.', 'http://google.com', '2018-06-20 18:12:02'),
(3, 1, 'Share Two', 'Suspendisse volutpat tortor dolor, sed pretium ex sodales vitae. Nullam faucibus blandit nulla, a laoreet tortor pellentesque a. Phasellus rhoncus massa neque, id fringilla enim malesuada id. In fringilla lorem tristique faucibus auctor. Maecenas dictum semper eros, nec venenatis nisl rutrum ut. Integer fringilla purus erat. Phasellus aliquam lacinia risus, rutrum tincidunt mi imperdiet eget. Nunc commodo dolor at erat sodales, eget rutrum justo interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis libero at ex pellentesque, vitae tempor nisi semper. Morbi gravida vitae nisl non semper. Sed sed augue iaculis, pulvinar nisi eget, euismod tortor. Integer sagittis urna ut aliquet scelerisque. Integer scelerisque quis odio sed interdum. Pellentesque semper condimentum neque, at tempus nunc.', 'https://pl.wikipedia.org', '2018-06-21 20:04:51'),
(4, 1, 'Test Share', 'This is test', 'https://www.youtube.com/', '2018-06-21 23:30:20'),
(5, 1, 'Test v2', 'test v2', 'test', '2018-06-22 15:08:32');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'Adrian', 'adrian@gmail.com', '8c4205ec33d8f6caeaaaa0c10a14138c', '2018-06-22 13:43:51'),
(2, 'admin', 'admin@gmail.com', '$2y$10$Yl3vHUed1J5zOVfxr2tah.CVBNHKj/LcVZjBvkd9tDvOO2no2KJAi', '2018-06-22 13:48:25'),
(4, 'User', 'user@user.com', '$2y$10$Y5X7Mug16Sa9MZ6QAZ98XugIEqG8VpDAYCCu.MLWZICw.QXSvc9t2', '2018-06-22 15:29:51');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
