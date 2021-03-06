-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2020 г., 20:50
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news item`
--

CREATE TABLE IF NOT EXISTS `news item` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news item`
--

INSERT INTO `news item` (`id`, `title`, `content`) VALUES
(1, 'Кроссовер Nissan за $7000 выходит на рынок', 'Компания Nissan начнет продажи своего самого бюджетного кроссовера Magnite в конце ноября. Первыми автомобиль получат покупатели в Индии. Позже новинка доберется и до других стран, хотя их список пока не разглашается.'),
(4, 'Opel может порадовать новым кроссовером', 'По предварительным данным SUV немецкой марки могут дать имя Monza: так же назывался концепт, представленный в 2013 году.\r\n\r\nКомпания Opel продавала двухдверное купе Monza в период с 1978 по 1986 годы. Кроме того, в Южной Африке Opel Kadett E тоже именовали Opel Monza. Ещё название модели было у «неродственной» модели американского бренда – в США с 1975-го по 1980-ый продавался автомобиль Chevrolet Monza; помимо этого в 80-90-ых годах это название было у бразильского клона Opel Ascona.'),
(6, 'Yamaha MT-Turbo в разработке?!', 'В сети появились слухи относительно скорого появления на рынке турбо мотоцикла Yamaha, а пока у нас есть схемы из патентов. На них показан трехцилиндровый 847-кубовый двигатель с турбонагнетателем.\r\n\r\n\r\n\r\nПатент может означать, что мотоцикл будет выпущен в ближайшие годы. И, скорей всего, это будет Yamaha MT-09 Turbo. Согласно патенту, турбо версия имеет меньший диаметр цилиндров и больший ход поршней. Диаметр уменьшен до 73 мм, а ход увеличен до 67.5 мм. Инженеры Yamaha сделали такие изменения, чтобы увеличить крутящий момент на низких оборотах и сбалансировать увеличение мощности от нагнетателя.'),
(23, 'Lamborghini-амфиби', 'В минувшие выходные американскую Флориду накрыл тропический шторм Эта. Дороги серьезно затопило, но местные водители настолько суровы, что готовы штурмовать броды даже на суперкарах.\r\n\r\nНа закрепленном наверху видео творится настоящий сюр. Пока озябшие легковушки ждут спасения, некий отважный товарищ на дорогущем Lamborghini просто жмет на газ и буквально врывается в воду. Причем атаковало брод не купе с жестким верхом, а открытый Huracan Spyder – пикантная подробность с учетом того, что в один момент машина почти скрылась под волной.\r\n\r\nКонечно, среднемоторный автомобиль в теории лучше защищен от гидроудара. Но видео, увы, обрезано, поэтому мы не знаем, сколько еще после столь лихого маневра смог проехать владелец Lamborghini. Есть подозрение, на нехилый ремонт человеку все равно придется раскошелиться.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news item`
--
ALTER TABLE `news item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news item`
--
ALTER TABLE `news item`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
