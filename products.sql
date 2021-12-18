-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2021 г., 20:31
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `тест`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int NOT NULL,
  `PRODUCT_ID` int NOT NULL,
  `PRODUCT_NAME` text NOT NULL,
  `PRODUCT_PRICE` int NOT NULL,
  `PRODUCT_ARTICLE` text NOT NULL,
  `PRODUCT_QUANTITY` int NOT NULL,
  `DATE_CREATE` date NOT NULL,
  `display` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_ARTICLE`, `PRODUCT_QUANTITY`, `DATE_CREATE`, `display`) VALUES
(1, 1, 'TEST1', 100, '15ew1few6we56', 8, '2021-12-15', 'no'),
(2, 2, 'TEST2', 150, 'dasdashudqw', 33, '2021-12-14', 'yes'),
(3, 3, 'TEST3', 300, 'hweffwehui', 14, '2021-12-15', 'no'),
(4, 4, 'TEST4', 250, 'fkweweio', 18, '2021-12-15', 'no'),
(5, 5, 'TEST5', 800, '211h2u12', 15, '2021-12-14', 'yes'),
(6, 6, 'TEST6', 360, 'dsuwgeufwie', 3, '2021-12-14', 'yes');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
