-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2023 г., 14:56
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test-shop-attributes`
--

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ботинки');

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Красный', NULL, NULL),
(2, 'Черный', NULL, NULL),
(3, 'Зелёный', NULL, NULL),
(4, 'Синий', NULL, NULL);

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_06_05_092930_create_products_table', 1);

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Клёвые', 1, NULL, NULL),
(2, 'Модные', 1, NULL, NULL),
(3, 'Странные', 1, NULL, NULL),
(4, 'Весёлые', 1, NULL, NULL),
(5, 'Понтовые', 1, NULL, NULL);

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 40, NULL, NULL),
(2, 41, NULL, NULL),
(3, 42, NULL, NULL),
(4, 43, NULL, NULL),
(5, 44, NULL, NULL);

--
-- Дамп данных таблицы `skus`
--

INSERT INTO `skus` (`id`, `product_id`, `color_id`, `size_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 7, 2500, NULL, NULL),
(2, 1, 1, 2, 8, 4900, NULL, NULL),
(3, 1, 1, 3, 1, 1300, NULL, NULL),
(5, 1, 1, 5, 8, 1200, NULL, NULL),
(6, 1, 2, 1, 7, 4600, NULL, NULL),
(7, 1, 2, 2, 1, 4800, NULL, NULL),
(8, 1, 2, 3, 12, 2400, NULL, NULL),
(9, 1, 2, 4, 2, 1500, NULL, NULL),
(10, 1, 2, 5, 12, 1000, NULL, NULL),
(14, 1, 3, 4, 7, 1700, NULL, NULL),
(15, 1, 3, 5, 12, 2400, NULL, NULL),
(16, 1, 4, 1, 3, 2200, NULL, NULL),
(17, 1, 4, 2, 11, 4000, NULL, NULL),
(18, 1, 4, 3, 5, 1800, NULL, NULL),
(19, 1, 4, 4, 6, 4200, NULL, NULL),
(20, 1, 4, 5, 0, 2800, NULL, NULL),
(26, 2, 2, 1, 4, 4500, NULL, NULL),
(27, 2, 2, 2, 7, 1200, NULL, NULL),
(28, 2, 2, 3, 11, 1100, NULL, NULL),
(30, 2, 2, 5, 4, 1000, NULL, NULL),
(31, 2, 3, 1, 3, 1900, NULL, NULL),
(32, 2, 3, 2, 6, 1400, NULL, NULL),
(33, 2, 3, 3, 2, 2100, NULL, NULL),
(34, 2, 3, 4, 4, 1600, NULL, NULL),
(38, 2, 4, 3, 8, 2100, NULL, NULL),
(40, 2, 4, 5, 11, 2300, NULL, NULL),
(41, 3, 1, 1, 11, 1300, NULL, NULL),
(42, 3, 1, 2, 6, 4900, NULL, NULL),
(43, 3, 1, 3, 11, 4800, NULL, NULL),
(45, 3, 1, 5, 6, 2300, NULL, NULL),
(46, 3, 2, 1, 9, 2300, NULL, NULL),
(47, 3, 2, 2, 12, 3700, NULL, NULL),
(50, 3, 2, 5, 0, 3100, NULL, NULL),
(51, 3, 3, 1, 9, 4600, NULL, NULL),
(52, 3, 3, 2, 1, 4300, NULL, NULL),
(56, 3, 4, 1, 0, 3100, NULL, NULL),
(57, 3, 4, 2, 12, 3600, NULL, NULL),
(58, 3, 4, 3, 5, 3100, NULL, NULL),
(60, 3, 4, 5, 6, 4500, NULL, NULL),
(65, 4, 1, 5, 1, 4300, NULL, NULL),
(67, 4, 2, 2, 6, 3200, NULL, NULL),
(68, 4, 2, 3, 11, 3400, NULL, NULL),
(70, 4, 2, 5, 11, 1400, NULL, NULL),
(72, 4, 3, 2, 3, 3800, NULL, NULL),
(73, 4, 3, 3, 3, 2900, NULL, NULL),
(74, 4, 3, 4, 10, 1700, NULL, NULL),
(75, 4, 3, 5, 8, 1300, NULL, NULL),
(81, 5, 1, 1, 7, 2000, NULL, NULL),
(82, 5, 1, 2, 5, 4700, NULL, NULL),
(83, 5, 1, 3, 2, 4800, NULL, NULL),
(84, 5, 1, 4, 2, 4800, NULL, NULL),
(85, 5, 1, 5, 9, 3300, NULL, NULL),
(86, 5, 2, 1, 10, 1400, NULL, NULL),
(90, 5, 2, 5, 3, 2600, NULL, NULL),
(96, 5, 4, 1, 12, 900, NULL, NULL),
(98, 5, 4, 3, 9, 2400, NULL, NULL),
(99, 5, 4, 4, 1, 4600, NULL, NULL),
(100, 5, 4, 5, 2, 2800, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
