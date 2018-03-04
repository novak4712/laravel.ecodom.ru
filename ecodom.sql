-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2018 г., 11:32
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecodom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advantage`
--

CREATE TABLE `advantage` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `advantage`
--

INSERT INTO `advantage` (`id`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, '<p>Не горит, устойчив к перепаду температур</p>', ' <h5>Огнестойкость гибкого камня и термопанелей</h5>\r\n                        <p>Экологически чистый материал не горит , не плавится и не поддерживает горение.\r\n                            Результатом воздействия высоких температур на гибкий камень является его размягчение.\r\n                            Температурный диапазон эксплуатации этого материала от -40˚C до +650˚C.\r\n                            Материал с такими характеристиками легко можно использовать как для внутренней, так и для\r\n                            внешней отделки.\r\n                            Защитное покрытие термопанелей на основе мраморной крошки так же не горит , не плавится и не\r\n                            поддерживает горение!\r\n                        </p>', NULL, NULL),
(2, ' <p>Легко моется, не впитывает влагу</p>', '<h5>Легко моется и не впитывает влагу.</h5>\r\n                    <p>Покрытие гибкого камня и термопанелей на основе мраморной крошки и специального эластичного\r\n                        материала отталкивает влагу, в порах поверхности не откладывается придорожная пыль и грязь.\r\n                        Если\r\n                        Вы все же решите помыть этот материал, то это можно сделать даже автомобильной мойкой\r\n                        высокого\r\n                        давления.\r\n                        При направленной струе высокого давления в одну точку материала на расстоянии 10-15 см от\r\n                        него в\r\n                        течение 5-7 минут не нанесут ему никаких повреждений.</p>', NULL, NULL),
(3, '<p>Устойчив к выцветанию</p>', ' <h5>Устойчив к выцветанию и воздействию прямых солнечных лучей.</h5>\r\n                        <p>Цвет гибкого камня и термопанелей образуется путем окрашивание самой мраморной крошки, а не\r\n                            нанесение красящего материала сверху или смешивания с колерами на водной основе.\r\n                            Окрашивание материала осуществляется специальными пигментами устойчивыми к выцветанию.\r\n                            Например\r\n                            TiO2.</p>', NULL, NULL),
(4, '<p>Не трескается, высокопрочный</p>', ' <h5>Не трескается, устойчив к механическому воздействию.</h5>\r\n                        <p>При монтаже материала швы заделываются эластичной смесью на основе акриловой смолы. Сам\r\n                            декоративный слой состоит из эластичной акриловой смолы наполненной натуральной,\r\n                            обеспыленной\r\n                            мраморной крошкой и комплексом модифицированных добавок. Все это позволяет материалу\r\n                            принимать\r\n                            различную форму и под воздействием усадки фундамента не образуются трещины.\r\n                        </p>', NULL, NULL),
(5, ' <p>Перечень других преимуществ</p>', ' <h5>Основные преимущества гибкого камня и термопанелей</h5>\r\n                        <p>\r\n                            - Долговечность. Материал устойчив к воздействиям внешней среды. </br>\r\n                            - Пластичность. Материал, при желании, может принять любую необходимую форму, прикрепиться к\r\n                            - любой поверхности. Простор для творчества и фантазии.</br>\r\n                            - Непревзойденный внешний вид, с текстурой среза натурального песчаника.</br>\r\n                            - Широкая сфера применения: отделка фасада, стен, пола, бассейна, сауны, облицовка каминов и\r\n                            лестниц, создание ландшафтного дизайна и многое другое.</br>\r\n                            - Легкий вес изделия. Для транспортировки можно использовать даже легковой автомобиль.</br>\r\n                            - Натуральный материал, совершенно не опасен для здоровья человека, а также не представляет\r\n                            угрозу для окружающей среды.</br>\r\n                            - Материал можно использовать для нанесения фрески.</br>\r\n                        </p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gk`
--

CREATE TABLE `gk` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_03_150754_create_table_gk', 1),
(4, '2018_03_03_150818_create_table_tp', 1),
(5, '2018_03_03_151854_create_table_pages', 1),
(6, '2018_03_03_152426_create_table_profit', 1),
(7, '2018_03_03_152744_create_table_advantage', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Главная', '#', NULL, NULL),
(2, 'Гибкий камень', 'gk.html', NULL, NULL),
(3, 'Термопанели', 'tp.html', NULL, NULL),
(4, 'Фотогалерея', 'gallery.html', NULL, NULL),
(5, 'Контакты', '#contact_footer', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `profit`
--

CREATE TABLE `profit` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `profit`
--

INSERT INTO `profit` (`id`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'ico_pochemu_1.png', '<p>Мы - производители с большим стажем</p>', NULL, NULL),
(2, 'ico_pochemu_2.png', '<p>Более 1000 реализованных объектов</p>', NULL, NULL),
(3, 'ico_pochemu_3.png', ' <p>Нам доверяют постоянные клиенты</p>', NULL, NULL),
(4, 'ico_pochemu_4.png', ' <p>Мы выпускаем продукцию высшего качества</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tp`
--

CREATE TABLE `tp` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advantage`
--
ALTER TABLE `advantage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gk`
--
ALTER TABLE `gk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tp`
--
ALTER TABLE `tp`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advantage`
--
ALTER TABLE `advantage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `gk`
--
ALTER TABLE `gk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `profit`
--
ALTER TABLE `profit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tp`
--
ALTER TABLE `tp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
