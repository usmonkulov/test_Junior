-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2020 г., 13:34
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tuit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mijozlar`
--

CREATE TABLE `mijozlar` (
  `id` int(11) NOT NULL,
  `familyasi` varchar(255) NOT NULL,
  `ismi` varchar(255) NOT NULL,
  `tugulgan_kuni` varchar(255) NOT NULL,
  `telefon_raqami` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mijozlar`
--

INSERT INTO `mijozlar` (`id`, `familyasi`, `ismi`, `tugulgan_kuni`, `telefon_raqami`) VALUES
(31, 'Usmonkulov', 'Bobur', '29.05.1994', '+99897123456'),
(32, 'Urolov', 'Saidmurod', '04.03.1994', '+9989123456'),
(33, 'Zokirov', 'Botir', '16.11.1993', '+99893123456'),
(40, 'Cho`liyev', 'Shermat', '06.08.1994', '+99890123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mijozlar`
--
ALTER TABLE `mijozlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mijozlar`
--
ALTER TABLE `mijozlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
