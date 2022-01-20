-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 20 2022 г., 13:29
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `property`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `CategoryId` int(8) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `CategoryImg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`CategoryId`, `CategoryName`, `CategoryImg`) VALUES
(1, 'PRIVATE HOUSES', 'https://media.rightmove.co.uk/66k/65806/79055890/65806_HAM130309_IMG_01_0001.jpg'),
(2, 'STUDIOS', 'https://media.rightmove.co.uk/49k/48943/114281558/48943_SLH180109_IMG_04_0001.jpeg'),
(5, '1-ROOMS FLATS', 'https://media.rightmove.co.uk/87k/86681/78267507/86681_SHP002630_IMG_00_0004.jpeg'),
(7, '2-ROOMS FLATS', 'https://media.rightmove.co.uk/87k/86681/78267507/86681_SHP002630_IMG_02_0004.jpeg'),
(10, '4+ ROOMS FLATS', 'https://media.rightmove.co.uk/87k/86681/78267507/86681_SHP002630_IMG_03_0001.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `privileges`
--

CREATE TABLE `privileges` (
  `PrivilegesId` int(8) NOT NULL,
  `PrivilegesName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `privileges`
--

INSERT INTO `privileges` (`PrivilegesId`, `PrivilegesName`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Owner');

-- --------------------------------------------------------

--
-- Структура таблицы `property`
--

CREATE TABLE `property` (
  `PropertyId` int(8) NOT NULL,
  `CategoryId` int(8) NOT NULL,
  `PropertyName` varchar(30) NOT NULL,
  `PropertyImage1` varchar(200) NOT NULL DEFAULT 'assets/img/demo/property-3.jpg',
  `PropertyImage2` varchar(200) NOT NULL,
  `PropertyArea` int(7) NOT NULL,
  `PropertyDesc` text NOT NULL,
  `PropertyZonePlace` varchar(30) NOT NULL,
  `PropertyPrice` varchar(30) NOT NULL,
  `ContactPhone` int(11) NOT NULL,
  `PropertyAdress` varchar(200) NOT NULL,
  `NearestStation` varchar(100) NOT NULL,
  `PropertyCondition` varchar(20) NOT NULL,
  `StatusId` int(11) NOT NULL DEFAULT 1,
  `PropertyGarages` int(2) NOT NULL,
  `PropertyBathRooms` int(2) NOT NULL,
  `PropertyLivingRooms` int(2) NOT NULL,
  `PropertyBedRooms` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `property`
--

INSERT INTO `property` (`PropertyId`, `CategoryId`, `PropertyName`, `PropertyImage1`, `PropertyImage2`, `PropertyArea`, `PropertyDesc`, `PropertyZonePlace`, `PropertyPrice`, `ContactPhone`, `PropertyAdress`, `NearestStation`, `PropertyCondition`, `StatusId`, `PropertyGarages`, `PropertyBathRooms`, `PropertyLivingRooms`, `PropertyBedRooms`) VALUES
(11, 5, 'Lichfield house', 'https://media.rightmove.co.uk/66k/65815/117053621/65815_WER012075695_IMG_01_0000.jpeg', 'https://media.rightmove.co.uk/66k/65815/117053621/65815_WER012075695_IMG_00_0000.jpeg', 213, 'No description there', '1', '199999', 2147483647, 'Westminster road 12, W21D', '', 'Used', 1, 2, 1, 1, 1),
(13, 5, 'SALMON HOUSE', 'https://media.rightmove.co.uk/66k/65809/114916088/65809_KEN190090_IMG_00_0000.jpeg', 'https://media.rightmove.co.uk/66k/65809/114916088/65809_KEN190090_IMG_01_0002.jpeg', 402, 'Its good place', '4', '210000', 2147483647, 'Granger Street 12, E12 0F', 'Shadwell', 'Brand new', 1, 1, 1, 1, 1),
(14, 5, 'Garfield House', 'https://media.rightmove.co.uk/66k/65815/98010533/65815_WER012054000_IMG_01_0001.jpeg', 'https://media.rightmove.co.uk/66k/65815/98010533/65815_WER012054000_IMG_19_0001.jpeg', 523, 'Yeah, here is garfild home', '1', '599999', 2147483647, 'Garfield street, W10 DF', 'Tower Bridge station', 'Used', 1, 1, 3, 1, 2),
(15, 5, 'Sherlock House', 'https://media.rightmove.co.uk/dir/crop/10:9-16:9/222k/221522/97872269/221522_21UGS_IMG_01_0000_max_476x317.jpg', 'No', 483, 'So. Now is 5 am, I am doing this assignment. Yep, for joke I will add it here. Without jokes I have sleeping yet...', '1', '828000', 2147483647, 'Sherlock street 21, W2DFS', 'Shadwell', 'Brand new', 1, 2, 1, 1, 2),
(16, 5, 'Stake House Residence', 'https://media.rightmove.co.uk/177k/176396/89685296/176396_1781_ROKS_IMG_01_0000.jpg', 'https://media.rightmove.co.uk/177k/176396/89685296/176396_1781_ROKS_IMG_02_0000.jpg', 213, 'Nothing', '1', '2000000', 2147483647, 'Stake Street 20, N1', 'Stake OverGround', 'Used', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `StatusName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`StatusId`, `StatusName`) VALUES
(1, 'Available '),
(2, 'Booked'),
(3, 'Sold'),
(4, 'No Information about status');

-- --------------------------------------------------------

--
-- Структура таблицы `userfavproperty`
--

CREATE TABLE `userfavproperty` (
  `UserId` int(8) NOT NULL,
  `PropertyId` int(8) NOT NULL,
  `PropertyAddDate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `UserId` int(8) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPass` varchar(30) NOT NULL,
  `PrivilegesId` int(8) NOT NULL DEFAULT 1,
  `FirstName` varchar(50) NOT NULL,
  `SecondName` varchar(50) NOT NULL,
  `UserNumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `UserPass`, `PrivilegesId`, `FirstName`, `SecondName`, `UserNumber`) VALUES
(1, 'Moderator', 'fec@nnet.eu', 'moderator', 2, 'Alexander', 'Shultz', '43636734'),
(3, 'Admin', 'vladimir@mail.ru', 'admin', 3, 'Vladimir', 'Pritulin', '55560443'),
(11, 'aivanov', 'aivanov@mail.ru', 'aivanov', 1, 'Andrei', 'Ivanov', '8080032'),
(12, 'mfedorova', 'mfedorova@gmail.com', 'mfedorova', 1, 'Maria', 'Fedorova', '56764576'),
(13, 'nonuser', 'nonuser', 'nonuser', 1, 'nonuser', 'nonuser', '2131312313'),
(14, 'nonuser1', 'nonuser1', 'nonuser1', 1, 'nonuser1', 'nonuser1', 'nonuser1'),
(15, 'valgeratsu', 'vladprit71@yandex.ru', 'Vp5510027', 1, 'Vladimir', 'Pritulin', '8372551002');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Индексы таблицы `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`PrivilegesId`);

--
-- Индексы таблицы `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`PropertyId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Индексы таблицы `userfavproperty`
--
ALTER TABLE `userfavproperty`
  ADD PRIMARY KEY (`UserId`,`PropertyId`),
  ADD KEY `CourseId` (`PropertyId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `UserEmail` (`UserEmail`),
  ADD KEY `PrivilegesId` (`PrivilegesId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `privileges`
--
ALTER TABLE `privileges`
  MODIFY `PrivilegesId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `property`
--
ALTER TABLE `property`
  MODIFY `PropertyId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`CategoryId`);

--
-- Ограничения внешнего ключа таблицы `userfavproperty`
--
ALTER TABLE `userfavproperty`
  ADD CONSTRAINT `userfavproperty_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `userfavproperty_ibfk_2` FOREIGN KEY (`PropertyId`) REFERENCES `property` (`PropertyId`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`PrivilegesId`) REFERENCES `privileges` (`PrivilegesId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
