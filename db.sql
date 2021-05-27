-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2020 г., 22:55
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dobro03`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_advantages`
--

CREATE TABLE `dbr_advantages` (
  `id` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `html` text NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_advantages`
--

INSERT INTO `dbr_advantages` (`id`, `image_name`, `title`, `html`, `sort`, `status`) VALUES
(1, '1_1573362023.webp', 'Время', '<p>Мы работаем ежедневно и круглосуточно</p>', 1, 1),
(3, '3_1573362108.webp', 'Внимание', '<p>Сопровождение клиентов\r\n</p><p>Индивидуальный подход к каждому клиенту\r\n</p>', 2, 1),
(4, '4_1573362150.webp', 'Люди', '<p>Профессиональная работа с пожеланиями клиента</p><p>Большой автопарк под любые задачи</p>', 3, 1),
(5, '5_1573362202.webp', 'Забота', '<p>Чуткое и бережное отношение к каждому клиенту</p>', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_automobiles`
--

CREATE TABLE `dbr_automobiles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `comfort` int(11) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_automobiles`
--

INSERT INTO `dbr_automobiles` (`id`, `title`, `image_name`, `comfort`, `sort`, `status`) VALUES
(4, 'Ford Transit', '4_1573817655.jpg', 7, 2, 1),
(3, 'Ford Connect', '3_1573817642.jpg', 6, 1, 1),
(5, 'Lada Largus', '5_1573817664.jpg', 6, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_contacts`
--

CREATE TABLE `dbr_contacts` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_contacts`
--

INSERT INTO `dbr_contacts` (`id`, `type`, `value`, `sort`, `status`) VALUES
(1, 'point', 'Россия, 109456, г. Москва, Перерва дом.53 оф.218', 1, 1),
(2, 'phone', '+7 999 928-06-03', 2, 1),
(3, 'phone', '+7 903 190-06-03', 3, 1),
(4, 'envelope', 'contact@dobro03.ru', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_modules`
--

CREATE TABLE `dbr_modules` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `html` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_prices`
--

CREATE TABLE `dbr_prices` (
  `id` int(11) NOT NULL,
  `service` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_prices`
--

INSERT INTO `dbr_prices` (`id`, `service`, `price`, `sort`, `status`) VALUES
(2, '<p>Перевозка по Москве по тарифу \"Комфорт\"</p>', 'от 2500 ₽', 1, 1),
(3, '<p>Перевозка в больницы и обратно с одним часом ожидания</p>', 'от 4000 ₽', 2, 1),
(4, '<p>Перевозка по городам Московской области</p>', 'от 2500 ₽', 3, 1),
(5, '<p>Междугородняя транспортировка</p>', '50 ₽/ км', 4, 1),
(6, '<p>Перевозка в аэропорты/вокзалы</p>', 'от 4500 ₽', 5, 1),
(7, '<p>Дополнительное ожидание</p>', '250 ₽/ 15 мин.', 6, 1),
(8, '<p>Подъем на этаж при весе до 100 кг</p>', '250 ₽/этаж', 7, 1),
(9, '<p>Подъем на этаж при весе более 100 кг</p>', '300 ₽/этаж', 8, 1),
(11, '<p>Ногвая услуга</p>', '300 грн', 9, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_reviews`
--

CREATE TABLE `dbr_reviews` (
  `id` int(11) NOT NULL,
  `html` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_reviews`
--

INSERT INTO `dbr_reviews` (`id`, `html`, `name`, `created_at`, `status`) VALUES
(5, 'Хочу выразить огромную благодарность Вашей компании! К сожалению, вынужден часто пользоваться услугами перевозки, до вас заказывал у других, но остановлюсь на Добро03, т.к. именно у вас я увидел бережное отношение к лежачему человеку! Теперь доверяю только Вам! Отдельная благодарность  руководству за отзывчивый персонал!', 'Владислав', 1573362662, 1),
(4, 'Хотела бы выразить огромную благодарность ребятам - Тимуру и Максиму за перевозку из стационара и сопровождение в «Мои документы» нашей тяжело больной бабули. Ребята отнеслись к нашей капризной бабули, как к своей родной, душевно и с большой аккуратностью. Замечу, что машина в замечательном состоянии, было кресло на котором перемещали бабушку, нам даже не пришлось брать своё. Приятно, что есть такая фирма в которой все предусмотрено до мелочей, где работают профессионалы своего дела и цена услуги привлекательна! Удачи вам ребята, вы действительно делаете добро!!!!', 'Наталия', 1573362604, 1),
(6, 'Добрый день! Очень благодарна фирме за помощь в тяжёлой ситуации, обратились повторно, всё так же с уважением и добром!!! Спасибо!!!', 'Ольга С.', 1573362747, 1),
(7, 'Мне очень понравилось. Всё прекрасно!!', 'Сергей', 1573753618, 1),
(15, 'Мой отзыв', 'Сергей', 1574874103, 0),
(14, 'Мой отзыв', 'Роман', 1573904054, 1),
(13, 'аоеаповаеп', 'арао', 1573858290, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_socials`
--

CREATE TABLE `dbr_socials` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_socials`
--

INSERT INTO `dbr_socials` (`id`, `icon`, `link`, `sort`, `status`) VALUES
(1, 'fb', 'http:\\\\somelink.com', 1, 1),
(2, 'in', 'http:\\\\somelink.com', 2, 1),
(3, 'skype', 'http:\\\\somelink.com', 3, 1),
(4, 'tw', 'http:\\\\somelink.com', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `dbr_user`
--

CREATE TABLE `dbr_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `avatar_base_url` varchar(255) DEFAULT NULL,
  `avatar_path` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbr_user`
--

INSERT INTO `dbr_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `avatar_base_url`, `avatar_path`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'admin', 'ORncAdvEG8ycPT3070Ckc_zcspOJu0-Y', '$2y$13$i/zbFiI6fPP.0PtioHmtIuEPuG.jnmW1FKp7lil70EfJGP.rY5y8y', NULL, 'admin@mail.com', 10, NULL, 1583092409, NULL, NULL, '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dbr_advantages`
--
ALTER TABLE `dbr_advantages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_automobiles`
--
ALTER TABLE `dbr_automobiles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_contacts`
--
ALTER TABLE `dbr_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_modules`
--
ALTER TABLE `dbr_modules`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_prices`
--
ALTER TABLE `dbr_prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_reviews`
--
ALTER TABLE `dbr_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_socials`
--
ALTER TABLE `dbr_socials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbr_user`
--
ALTER TABLE `dbr_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `auth_key` (`auth_key`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dbr_advantages`
--
ALTER TABLE `dbr_advantages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `dbr_automobiles`
--
ALTER TABLE `dbr_automobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `dbr_contacts`
--
ALTER TABLE `dbr_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `dbr_modules`
--
ALTER TABLE `dbr_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dbr_prices`
--
ALTER TABLE `dbr_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `dbr_reviews`
--
ALTER TABLE `dbr_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `dbr_socials`
--
ALTER TABLE `dbr_socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dbr_user`
--
ALTER TABLE `dbr_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
