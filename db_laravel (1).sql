-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2022 г., 11:11
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_08_13_082225_create_posts_table', 2);

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
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categori_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `price` double(8,2) DEFAULT NULL,
  `img0` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `categori_id`, `price`, `img0`, `img1`, `img2`, `img3`, `img4`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'Шкаф с зеркалом', 'Обустройство гардеробной зоны позволяет разгрузить жилое пространство. Легкий доступ к вещам, четкое структурирование одежды и обуви по типам и сезонности способствуют более рациональной организации жизни и экономии времени.', 1, 34238.00, 'uploads/Ykhvq9Ao7lSFcAJRkYJDIqFR6KQsWZWYkMUtf4gB.jpg', 'uploads/Zafn3OyUPoLqjphYr3lo4j7Xh18w1WofFFgdAMjg.jpg', 'uploads/qg0PsOj2UgRH3z8DziSX7ejMVGJFw9It1vSr91qo.jpg', NULL, NULL, 1, '2022-08-23 21:28:25', '2022-08-23 21:28:25'),
(10, 'Шкаф для гардероб', '\"\"\"Гардеробная система Оскар предлагает большой выбор элементов, а также потребностям и стилю жизни пользователя. Благодаря основным и вспомогательным модулям появляются бесконечные композиционные вариации оформления интерьера.\"\"\"', 1, 13490.00, 'uploads/jEIc3VctoyFgyuX85szBogjrde8PqDqIzoBO6Nlo.jpg', NULL, NULL, NULL, NULL, 1, '2022-08-23 21:34:38', '2022-08-23 22:09:32'),
(11, 'Письменный стол', 'Письменный стол из коллекции Соренто понравится ценителям современного стиля с его простыми, лаконичными формами и привлекательными цветовыми решениями. Выдвижные ящики открываются плавно и бесшумно.', 2, 7599.00, 'uploads/rIVSUDMlG6kyND9sofrkZBblqn9fzbmHrqiR8xeG.jpg', 'uploads/9MVAaKoF9YwIGVS5zrocfFtOnqGuSHoTQQlPGYWg.jpg', 'uploads/tG08q3VyPOmiCl4JtJegL0s1k3HviYftd9WUmdmx.jpg', NULL, NULL, 1, '2022-08-23 21:41:37', '2022-08-23 21:41:37'),
(12, 'Стол Риано-03', 'Благодаря лаконичному дизайну он подойдет для спальни, оформленной в современном стиле. В верхней части стола расположен ящик с откидной крышкой и перегородками, где можно аккуратно разложить принадлежности для макияжа и аксессуары.', 2, 5199.00, 'uploads/RD1EZlM5MLHnwe31PLAVGg1Iu9Ihw8VXJG6AMTgT.jpg', 'uploads/mU6mgUY9DypJMG0klZArc2hKJSJq3dYl5GZBKNou.jpg', 'uploads/r7skCHq2z7prNiQadSIAY7GMdMKs0BoF3YllgMGW.jpg', NULL, NULL, 1, '2022-08-23 21:52:25', '2022-08-23 21:52:25'),
(13, 'Тумба Кварт', 'Столы со встроенными тумбами, более легкие и многофункциональные конструкции. Напольные тумбы с выдвижными ящиками часто устанавливают под рабочими столами. Тумба - неотъемлемая часть в обустройстве современного интерьера .', 3, 7990.00, 'uploads/7794YHNXYMuPlDPNQDu2nzlbVZgCo6UrfU9DXHdL.jpg', 'uploads/WeSgaRSwUFFWQSTHpA9vQSiTFGH4N4Bqcq43drfD.jpg', 'uploads/1HzsmtwVI0aUPE4LrWwLtR4aHnaMHAI10lpar0O6.jpg', NULL, NULL, 1, '2022-08-23 22:01:18', '2022-08-23 22:04:45'),
(14, 'Тумба выкатная', 'Тумба для офисных принадлежностей – неотъемлемый атрибут офисной мебели. Благодаря колесным опорам выкатная тумба по сравнению с приставной более мобильна. Тумба с открытой нишей и закрытой нижней частью. Рекомендуется дополнить с двух сторон', 3, 9599.00, 'uploads/HTpY0k7jA03jVtLfWCy2FjnXZhXHH7NRye60LRGS.jpg', 'uploads/eK3QoW88hTlJTlTg2EKW35QbmuAaad5sqVQzwoj5.jpg', NULL, NULL, NULL, 1, '2022-08-23 22:07:53', '2022-08-23 22:07:53');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yaker', 'yaker2018@yandex.ru', NULL, '$2y$10$dt3IGbNaUYqGFonf9ZhMFecwDdNYYUyyf3YZLKiGGKQZZvtOY37rm', 'zbgwqMY0H1FZjZekbXJXQvp1HNU5mebCCDwxDRSjR0uhHrwvSlRwt5IgmsQc', '2022-08-17 16:04:30', '2022-08-17 16:04:30'),
(2, 'yaker', '123@yan.ru', NULL, '$2y$10$dOF7cAlHKMKtzBaAhxdVHu64y4UCPisQMA.m2GP5k8X9X/lGuiWbK', NULL, '2022-08-18 01:11:30', '2022-08-18 01:11:30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
