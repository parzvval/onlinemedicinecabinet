-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2020 г., 09:54
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `userregistration`
--

-- --------------------------------------------------------

--
-- Структура таблицы `doctortable`
--

CREATE TABLE `doctortable` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `uin` int(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `doctortable`
--

INSERT INTO `doctortable` (`id`, `name`, `password`, `fullname`, `uin`, `gender`, `profile`) VALUES
(1, 'musainovaalimash', 'doctorpassword', 'Musainova Alimash', 2147483647, 'female', 'Doctor');

-- --------------------------------------------------------

--
-- Структура таблицы `illnesses`
--

CREATE TABLE `illnesses` (
  `id` int(100) NOT NULL,
  `illname` text NOT NULL,
  `symptoms` varchar(400) NOT NULL,
  `shortinf` varchar(400) NOT NULL,
  `possdrug` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `illnesses`
--

INSERT INTO `illnesses` (`id`, `illname`, `symptoms`, `shortinf`, `possdrug`) VALUES
(9, 'Грипп', 'насморк, повышенная температура, озноб', 'Болезнь распространяется воздушно-капельным путем. После заражения рекомендуется соблюдать постельный режим и пить больше жидкости.', 'Если необходимо временно нейтрализовать болезнь, рекомендуется принять \"Терафлю\". Для искоренения болезни нужно меньше двигаться, больше пить, полоскать нос и рот.');

-- --------------------------------------------------------

--
-- Структура таблицы `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(4) NOT NULL,
  `uin` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile` varchar(10) NOT NULL,
  `complaints` varchar(500) NOT NULL,
  `prescriptions` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `fullname`, `age`, `height`, `weight`, `uin`, `gender`, `profile`, `complaints`, `prescriptions`) VALUES
('bakhytzhan', 'password', 'Akhmetov Bakhytzhan', 18, 188, 71, '021106551456', 'male', 'Patient', '', ''),
('patient01', 'password', 'Patient One', 18, 178, 70, '0000000001', 'male', 'Patient', '\r\n', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `doctortable`
--
ALTER TABLE `doctortable`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `illnesses`
--
ALTER TABLE `illnesses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doctortable`
--
ALTER TABLE `doctortable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `illnesses`
--
ALTER TABLE `illnesses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
