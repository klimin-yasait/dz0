-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2019 г., 20:25
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vp1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `street` text,
  `home` int(11) DEFAULT NULL,
  `part` int(11) DEFAULT NULL,
  `appt` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `comment` text,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `street`, `home`, `part`, `appt`, `floor`, `comment`, `user_id`) VALUES
(1, 'Sadovaya', 1, 1, 12, 4, 'V Schi', 1),
(2, 'Sennaya', 5, 3, 44, 1, 'V borsch', 2),
(3, 'Олеговая', 4, 1, 12, 5, 'Хочу!!!!', 4),
(4, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(5, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(6, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(7, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(8, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(9, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(10, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(11, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(12, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!', 5),
(13, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(14, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(15, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(16, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(17, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(18, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(19, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(20, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(21, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(22, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(23, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(24, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(25, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(26, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(27, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(28, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(29, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(30, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(31, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(32, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(33, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(34, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(35, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(36, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(37, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(38, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6),
(39, 'Светлановская', 6, 7, 8, 9, 'Люблю бургеры!!!!', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`) VALUES
(1, 'Ivan', '88001231212', 'Ivan@yandex.ru'),
(2, 'Petr', '89111231212', 'Petr@ya.ru'),
(3, 'SSS', '+7 (123) 123 12 12', 'sss@sss.ss'),
(4, 'Oleg', '+7 (111) 222 33 44', 'oleg@ya.ru'),
(5, 'svetlana', '+7 (222) 333 44 55', 'svetlana@ya.ru'),
(6, 'YaSait', '+7 (921) 882 36 17', 'kontakt@yasait.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_fk` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(60));

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
