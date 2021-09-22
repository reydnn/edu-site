-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2020 г., 19:24
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `kolvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bag`
--

INSERT INTO `bag` (`id`, `user`, `item`, `kolvo`) VALUES
(21, 13, 3, 6),
(22, 13, 35, 1),
(23, 13, 5, 8),
(24, 13, 8, 2),
(25, 13, 4, 1),
(31, 27, 13, 1),
(32, 27, 11, 1),
(33, 27, 1, 4),
(34, 27, 2, 2),
(35, 27, 14, 1),
(36, 27, 20, 1),
(37, 27, 9, 1),
(38, 28, 27, 1),
(39, 28, 1, 3),
(43, 28, 3, 1),
(44, 25, 3, 4),
(45, 25, 1, 1),
(46, 25, 66, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(2) NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `type`, `price`, `photo`, `size`, `color`) VALUES
(1, 'Сумка', 'acs', 700, 'images/acs/1.png', 0, 'черный'),
(2, 'Белая блузка', 'blus', 1100, 'images/blus/1.png', 34, 'белый'),
(3, 'Серая футболка', 'foot', 900, 'images/foot/1.png', 30, 'серый'),
(4, 'Платье', 'plat', 2000, 'images/plat/1.png', 32, 'желтый'),
(5, 'Шорты', 'short', 1200, 'images/short/1.png', 30, 'голубой'),
(6, 'Джинсы', 'stan', 2500, 'images/stan/1.png', 34, 'голубой'),
(7, 'Юбка', 'ubk', 900, 'images/ubk/1.png', 28, 'черный'),
(8, 'Ремень', 'acs', 850, 'images/acs/2.png', 0, 'белый'),
(9, 'Черная блузка', 'blus', 1500, 'images/blus/2.png', 28, 'черный'),
(10, 'Футболка', 'foot', 1000, 'images/foot/2.png', 32, 'белый'),
(11, 'Платье', 'plat', 1900, 'images/plat/2.png', 34, 'красный'),
(12, 'Шорты', 'short', 1000, 'images/short/2.png', 32, 'черный'),
(13, 'Джинсы', 'stan', 1800, 'images/stan/2.png', 30, 'синий'),
(14, 'Юбка', 'ubk', 1200, 'images/ubk/2.png', 30, 'белый'),
(15, 'Черные очки', 'acs', 1200, 'images/acs/3.png', 0, 'черный'),
(16, 'Розовая блузка ', 'blus', 900, 'images/blus/3.png', 30, 'розовый'),
(17, 'Черная футболка', 'foot', 1400, 'images/foot/3.png', 30, 'черный'),
(18, 'Платье', 'plat', 2000, 'images/plat/3.png', 32, 'белый'),
(19, 'Шорты', 'short', 1300, 'images/short/3.png', 30, 'белый'),
(20, 'Джинсы', 'stan', 2000, 'images/stan/3.png', 36, 'серый'),
(21, 'Юбка', 'ubk', 1100, 'images/ubk/3.png', 30, 'розовый'),
(22, 'Очки', 'acs', 900, 'images/acs/4.png', 0, 'мульти'),
(23, 'Блузка', 'blus', 950, 'images/blus/4.png', 36, 'коричневый'),
(24, 'Футбока', 'foot', 950, 'images/foot/4.png', 34, 'черный'),
(25, 'Платье', 'plat', 1600, 'images/plat/4.png', 30, 'мульти'),
(26, 'Шорты', 'short', 900, 'images/short/4.png', 34, 'черный'),
(27, 'Джинсы', 'stan', 1900, 'images/stan/4.png', 30, 'черный'),
(28, 'Юбка', 'ubk', 1050, 'images/ubk/4.png', 28, 'синий'),
(29, 'Серьги', 'acs', 500, 'images/acs/5.png', 0, 'желтый'),
(30, 'Блузка', 'blus', 1200, 'images/blus/5.png', 28, 'мульти'),
(31, 'Футболка', 'foot', 1100, 'images/foot/5.png', 32, 'белый'),
(32, 'Платье в горошек', 'plat', 1800, 'images/plat/5.png', 34, 'белый'),
(33, 'Шорты', 'short', 1500, 'images/short/5.png', 30, 'черный'),
(34, 'Джинсы', 'stan', 2000, 'images/stan/5.png', 32, 'черный'),
(35, 'Юбка', 'ubk', 1800, 'images/ubk/5.png', 28, 'розовый'),
(36, 'Заколка', 'acs', 300, 'images/acs/6.png', 0, 'желтый'),
(37, 'Блузка', 'blus', 1400, 'images/blus/6.png', 32, 'черный'),
(38, 'Розовая футболка', 'foot', 1999, 'images/foot/6.png', 34, 'розовый'),
(39, 'Платье', 'plat', 1300, 'images/plat/6.png', 32, 'белый'),
(40, 'Шорты', 'short', 1550, 'images/short/6.png', 34, 'красный'),
(41, 'Джинсы', 'stan', 2200, 'images/stan/6.png', 32, 'синий'),
(42, 'Юбка', 'ubk', 900, 'images/ubk/6.png', 32, 'голубой'),
(43, 'Ожерелье', 'acs', 1500, 'images/acs/7.png', 0, 'серый'),
(44, 'Блузка', 'blus', 1230, 'images/blus/7.png', 34, 'мульти'),
(45, 'Футболка', 'foot', 1000, 'images/foot/7.png', 30, 'белый'),
(46, 'Платье длинное', 'plat', 3000, 'images/plat/7.png', 30, 'розовый'),
(47, 'Шорты', 'short', 1700, 'images/short/7.png', 30, 'желтый'),
(48, 'Джинсы', 'stan', 1950, 'images/stan/7.png', 28, 'серый'),
(49, 'Юбка', 'ubk', 3000, 'images/ubk/7.png', 30, 'серый'),
(50, 'Серьги', 'acs', 900, 'images/acs/8.png', 0, 'серый'),
(51, 'Блузка', 'blus', 950, 'images/blus/8.png', 30, 'черный'),
(52, 'Футболка', 'foot', 1400, 'images/foot/8.png', 30, 'серый'),
(53, 'Платье ', 'plat', 1000, 'images/plat/8.png', 28, 'синий'),
(54, 'Шорты', 'short', 1100, 'images/short/8.png', 26, 'черный'),
(55, 'Джнисы', 'stan', 2050, 'images/stan/8.png', 32, 'белый'),
(56, 'Юбка', 'ubk', 1500, 'images/ubk/8.png', 32, 'синий'),
(57, 'Золотистые очки', 'acs', 750, 'images/acs/9.png', 0, 'желтый'),
(58, 'Блузка', 'blus', 1090, 'images/blus/9.png', 30, 'мульти'),
(59, 'Футболка', 'foot', 999, 'images/foot/9.png', 30, 'розовый'),
(60, 'Платье', 'plat', 2500, 'images/plat/9.png', 32, 'желтый'),
(61, 'Шорты', 'short', 1250, 'images/short/9.png', 30, 'синий'),
(62, 'Джинсы', 'stan', 2300, 'images/stan/9.png', 34, 'голубой'),
(63, 'Юбка', 'ubk', 1350, 'images/ubk/9.png', 30, 'черный'),
(64, 'Кепка', 'acs', 500, 'images/acs/10.png', 0, 'черный'),
(65, 'Блузка', 'blus', 1000, 'images/blus/10.png', 32, 'зеленый'),
(66, 'Белая футболка', 'foot', 1300, 'images/foot/10.png', 32, 'белый'),
(67, 'Платье', 'plat', 1800, 'images/plat/10.png', 32, 'зеленый'),
(68, 'Шорты', 'short', 1200, 'images/short/10.png', 32, 'зеленый'),
(69, 'Джинсы', 'stan', 2800, 'images/stan/10.png', 30, 'белый'),
(70, 'Юбка', 'ubk', 1250, 'images/ubk/10.png', 28, 'мульти');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(13, 'коля', 'sd@quqi.com', 'fffff'),
(25, 'Алена', 'alen@mail.ru', 'qwerty'),
(26, 'Женя', 'zhen@mail.ru', '1234'),
(27, 'Ира', 'ira@mail.ru', 'ert'),
(28, 'Саша', 'sasha@yandex.ru', 'ggg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user`),
  ADD KEY `item` (`item`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bag`
--
ALTER TABLE `bag`
  ADD CONSTRAINT `bag_ibfk_1` FOREIGN KEY (`item`) REFERENCES `catalog` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bag_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
