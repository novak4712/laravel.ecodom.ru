-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 11 2018 г., 20:58
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
-- База данных: `ecodom_local`
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
(2, '<p>Легко моется, не впитывает влагу</p>', '<h5>Легко моется и не впитывает влагу.</h5>\r\n                    <p>Покрытие гибкого камня и термопанелей на основе мраморной крошки и специального эластичного\r\n                        материала отталкивает влагу, в порах поверхности не откладывается придорожная пыль и грязь.\r\n                        Если\r\n                        Вы все же решите помыть этот материал, то это можно сделать даже автомобильной мойкой\r\n                        высокого\r\n                        давления.\r\n                        При направленной струе высокого давления в одну точку материала на расстоянии 10-15 см от\r\n                        него в\r\n                        течение 5-7 минут не нанесут ему никаких повреждений.</p>', NULL, '2018-07-07 19:57:21'),
(3, ' <p>Устойчив к выцветанию</p>', '  <h5>Устойчив к выцветанию и воздействию прямых солнечных лучей.</h5>\r\n                        <p>Цвет гибкого камня и термопанелей образуется путем окрашивание самой мраморной крошки, а не\r\n                            нанесение красящего материала сверху или смешивания с колерами на водной основе.\r\n                            Окрашивание материала осуществляется специальными пигментами устойчивыми к выцветанию.\r\n                            Например\r\n                            TiO2.</p>', NULL, NULL),
(4, ' <p>Не трескается, высокопрочный</p>', ' <h5>Не трескается, устойчив к механическому воздействию.</h5>\r\n                        <p>При монтаже материала швы заделываются эластичной смесью на основе акриловой смолы. Сам\r\n                            декоративный слой состоит из эластичной акриловой смолы наполненной натуральной,\r\n                            обеспыленной\r\n                            мраморной крошкой и комплексом модифицированных добавок. Все это позволяет материалу\r\n                            принимать\r\n                            различную форму и под воздействием усадки фундамента не образуются трещины.\r\n                        </p>', NULL, NULL),
(5, '<p>Перечень других преимуществ</p>', ' <h5>Основные преимущества гибкого камня и термопанелей</h5>\r\n                        <p>\r\n                            - Долговечность. Материал устойчив к воздействиям внешней среды. </br>\r\n                            - Пластичность. Материал, при желании, может принять любую необходимую форму, прикрепиться к\r\n                            - любой поверхности. Простор для творчества и фантазии.</br>\r\n                            - Непревзойденный внешний вид, с текстурой среза натурального песчаника.</br>\r\n                            - Широкая сфера применения: отделка фасада, стен, пола, бассейна, сауны, облицовка каминов и\r\n                            лестниц, создание ландшафтного дизайна и многое другое.</br>\r\n                            - Легкий вес изделия. Для транспортировки можно использовать даже легковой автомобиль.</br>\r\n                            - Натуральный материал, совершенно не опасен для здоровья человека, а также не представляет\r\n                            угрозу для окружающей среды.</br>\r\n                            - Материал можно использовать для нанесения фрески.</br>\r\n                        </p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `fields`
--

CREATE TABLE `fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `fields`
--

INSERT INTO `fields` (`id`, `logo`, `email`, `phone1`, `phone2`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'logo3.png', 'eco_dom_nv@mail.ru', '+7 (950) 526-83-52', '+7 (982) 577-39-83', 'г.Нижневартовск пос. Беловежский д.21', '<p>Напишите нам!<br />\r\nПриглашаем к сотрудничеству!<br />\r\nОставьте свой телефон и мы обязательно с вами свяжемся!</p>', NULL, '2018-07-08 16:31:36');

-- --------------------------------------------------------

--
-- Структура таблицы `fotos`
--

CREATE TABLE `fotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `fotos`
--

INSERT INTO `fotos` (`id`, `image`, `title`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'gal_max_1.jpg', 'image', 'image', NULL, NULL),
(2, 'gal_max_2.jpg', 'image', 'image', NULL, NULL),
(3, 'gal_max_3.jpg', 'image', 'image', NULL, NULL),
(4, 'gal_max_4.jpg', 'image', 'image', NULL, NULL),
(5, 'gal_max_5.jpg', 'image', 'image', NULL, NULL),
(6, 'gal_max_6.jpg', 'image', 'image', NULL, NULL),
(7, 'gal_max_7.jpg', 'image', 'image', NULL, NULL),
(8, 'gal_max_8.jpg', 'image', 'image', NULL, NULL),
(9, 'gal_max_9.jpg', 'image', 'image', NULL, NULL),
(10, 'gal_max_10.jpg', 'image', 'image', NULL, NULL),
(11, 'gal_max_11.jpg', 'image', 'image', NULL, NULL),
(12, 'gal_max_12.jpg', 'image', 'image', NULL, NULL),
(13, 'gal_max_13.jpg', 'image', 'image', NULL, NULL),
(14, 'gal_max_14.jpg', 'image', 'image', NULL, NULL),
(15, 'gal_max_15.jpg', 'image', 'image', NULL, NULL),
(16, 'gal_max_16.jpg', 'image', 'image', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gk`
--

CREATE TABLE `gk` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gk`
--

INSERT INTO `gk` (`id`, `image`, `name`, `description`, `price`, `units`, `created_at`, `updated_at`) VALUES
(1, 'gk_1.png', 'Гибкий камень №1', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:01:17'),
(2, 'gk_2.png', 'Гибкий камень №2', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:01:28'),
(3, 'gk_3.png', 'Гибкий камень №3', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:01:36'),
(4, 'gk_4.png', 'Гибкий камень №4', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:01:45'),
(5, 'gk_5.png', 'Гибкий камень №5', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:01:54'),
(6, 'gk_6.png', 'Гибкий камень №6', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:02:07'),
(7, 'gk_7.png', 'Гибкий камень №7', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:02:18'),
(8, 'gk_8.png', 'Гибкий камень №8', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:02:27'),
(9, 'gk_9.png', 'Гибкий камень №9', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:02:37'),
(10, 'gk_10.png', 'Гибкий камень №10', '<p>Ширина: 0,55 м<br />\r\nДлина: 0,95 м<br />\r\nТолщина: 1,5-2 мм<br />', '999', '<p>за м<sup><small>2</small></sup></p>', NULL, '2018-04-10 12:02:48');

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
(7, '2018_03_03_152744_create_table_advantage', 1),
(8, '2018_07_08_140216_create_table_fields', 1),
(11, '2018_07_08_142525_create_table_sliders', 2),
(12, '2018_07_08_142609_create_table_fotos', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `link`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Главная', '/', 'ЭКОДОМ: Гибкий камень и термопанели', 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.', NULL, '2018-07-10 14:12:53'),
(2, 'Гибкий камень', 'kamen', 'ЭКОДОМ: Гибкий камень', 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.', NULL, '2018-07-10 14:13:35'),
(3, 'Термопанели', 'termopanel', 'ЭКОДОМ: Термопанели', 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.', NULL, '2018-07-10 14:13:44'),
(4, 'Фотогалерея', 'gallery', 'ЭКОДОМ: Фотогалерея - гибкий камень и термопанели', 'Гибкий камень и термопанели. Готовое решение для дизайна интерьера и внешней отделки фасадов.', NULL, '2018-07-10 14:13:53'),
(5, 'Контакты', '#contact_footer', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('eco_dom_nv@mail.ru', '$2y$10$ugXVktnfcQqvNwSRSM85e.jw/7aSj2YB6vHHspgh8b76ePV82Yjlq', '2018-03-21 09:59:46');

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
(3, 'ico_pochemu_3.png', '<p>Нам доверяют постоянные клиенты</p>', NULL, NULL),
(4, 'ico_pochemu_4.png', '<p>Мы выпускаем продукцию высшего качества</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'productslide1.jpg', 'Гибкий кирпич', 'Гибкий кирпич', NULL, NULL),
(2, 'productslide2.jpg', 'Гибкие обои', 'Гибкие обои', NULL, NULL),
(3, 'productslide3.jpg', 'Гибкий камень: Плитка', 'Гибкий камень: Плитка', NULL, NULL),
(4, 'productslide4.jpg', 'Гибкий камень: Текстурированный', 'Термопанели', NULL, NULL),
(5, 'productslide5.jpg', 'Термопанели', 'Термопанели', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tp`
--

CREATE TABLE `tp` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tp`
--

INSERT INTO `tp` (`id`, `image`, `name`, `description`, `price`, `units`, `created_at`, `updated_at`) VALUES
(3, 'tp_1.png', 'Термопанель №1', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 11:59:03'),
(4, 'tp_2.png', 'Термопанель №2', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 11:59:15'),
(5, 'tp_3.png', 'Термопанель №3', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 11:59:32'),
(6, 'tp_4.png', 'Термопанель №4', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 11:59:45'),
(7, 'tp_5.png', 'Термопанель №5', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 12:00:04'),
(8, 'tp_6.png', 'Термопанель №6', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 12:00:16'),
(9, 'tp_7.png', 'Термопанель №7', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 12:00:27'),
(10, 'tp_8.png', 'Термопанель №8', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 12:00:38'),
(11, 'tp_9.png', 'Термопанель №9', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 12:00:51'),
(12, 'tp_10.png', 'Термопанель №10', 'Ширина: 0,55 м</br> Длина: 0,95 м</br>Толщина мраморного слоя: 1,5-2 мм</br>Утеплитель: 25мм</br>', '1499', '<p>за м<sup>2</sup></p>', NULL, '2018-04-10 12:01:06');

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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'novak4712', 'novak4803@gmail.com', '$2y$10$AH0OXc9YXypv847ro8gjiuJ0Yy6woIbq5XLMZe5BHnEdHRRT7SPV6', '1d1AC27ayC1YYluaAXPW7FWev195OdZuxeyJwNq3P0achgODB44FFZ8GwTo7', '2018-03-05 11:46:56', '2018-03-05 11:46:56'),
(2, 'Zahar', 'eco_dom_nv@mail.ru', '$2y$10$pgiF0LP0h17SjTSh.uacg.Wfxewsz7r77DQZYi6SI/yNk3nFzfka6', 'fidHVE7fKfAdN1aM70yn4V00hPDhknr8lVTAt24HjuH1JNY909kz2f52arNN', '2018-03-21 09:58:26', '2018-03-21 09:58:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advantage`
--
ALTER TABLE `advantage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fotos`
--
ALTER TABLE `fotos`
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
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT для таблицы `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `gk`
--
ALTER TABLE `gk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tp`
--
ALTER TABLE `tp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
