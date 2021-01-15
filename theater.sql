CREATE DATABASE `theater`;
--
-- База данных: `theater`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `name_actor` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `age` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `photo` varchar(250) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `actor`
--

INSERT INTO `actor` (`id_actor`, `name_actor`, `gender`, `age`, `photo`) VALUES
(1, 'Васильева Леанеора Николаевна', 'Ж', '30', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img\\bg-2'),
(2, 'Байков Урман Алексеевич', 'М', '27', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img'),
(3, 'Городнова Сталь Ефимовна', 'Ж', '23', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img'),
(4, 'Афанасьев Иннокентий Иванович', 'М', '25', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img'),
(5, 'Соловьёв Леонид Ефимович', 'М', '35', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img'),
(6, 'Дмитриев Фадей Денисович', 'М', '21', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img'),
(7, 'Чернышева Алена Валерьевна', 'Ж', '34', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img'),
(8, 'Мятлева Арина Максимовна', 'Ж', '19', 'D:\\OpenServer\\domains\\localhost\\theater\\web\\img\\bg-img');

-- --------------------------------------------------------

--
-- Структура таблицы `bookkeeping`
--

CREATE TABLE `bookkeeping` (
  `id` int(11) NOT NULL,
  `month` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL,
  `consume` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `decor`
--

CREATE TABLE `decor` (
  `id_decor` int(11) NOT NULL,
  `discription` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `decor`
--

INSERT INTO `decor` (`id_decor`, `discription`) VALUES
(1, 'Костюм рыцаря'),
(2, 'Костюм принцесы'),
(3, 'Декорация дерева');

-- --------------------------------------------------------

--
-- Структура таблицы `director`
--

CREATE TABLE `director` (
  `id_director` int(11) NOT NULL,
  `name_director` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `director`
--

INSERT INTO `director` (`id_director`, `name_director`, `gender`, `age`) VALUES
(1, 'Салко Сергей Савванович', 'М', 44),
(2, 'Мурзаков Тимофей Всеволодович', 'М', 45),
(3, 'Сарнычев Иван Леонтьевич', 'М', 51);

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`id_genre`, `title`) VALUES
(1, 'Комедия'),
(2, 'Драма'),
(3, 'Опера'),
(4, 'Балет'),
(5, 'Мюзикл');

-- --------------------------------------------------------

--
-- Структура таблицы `hall`
--

CREATE TABLE `hall` (
  `id_hall` int(11) NOT NULL,
  `amount_seats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `hall`
--

INSERT INTO `hall` (`id_hall`, `amount_seats`) VALUES
(1, 200),
(2, 300);

-- --------------------------------------------------------

--
-- Структура таблицы `musician`
--

CREATE TABLE `musician` (
  `id_musician` int(11) NOT NULL,
  `name_musician` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `photo` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `musician`
--

INSERT INTO `musician` (`id_musician`, `name_musician`, `gender`, `age`, `photo`) VALUES
(1, 'Торсунова Аполлинария Яковна', 'Ж', 20, NULL),
(2, 'Мосяков Максим Семенович', 'М', 21, NULL),
(3, 'Богомазов Максим Саввеевич', 'М', 23, NULL),
(4, 'Бодров Серафим Данилович', 'М', 23, NULL),
(5, 'Киреева Полина Степановна', 'Ж', 24, NULL),
(6, 'Носатенко Семен Венедиктович', 'М', 31, NULL),
(7, 'Селезнёв Федот Серафимович', 'М', 31, NULL),
(8, 'Дубков Кирилл Валерьевич', 'М', 26, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `music_group`
--

CREATE TABLE `music_group` (
  `id_music_group` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `cover` varchar(200) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `music_group`
--

INSERT INTO `music_group` (`id_music_group`, `title`, `cover`) VALUES
(1, 'Ударная группа', NULL),
(2, 'Духовая группа', NULL),
(3, 'Струнная группа', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `music_musician`
--

CREATE TABLE `music_musician` (
  `id` int(11) NOT NULL,
  `id_musician` int(11) DEFAULT NULL,
  `id_music_group` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `music_musician`
--

INSERT INTO `music_musician` (`id`, `id_musician`, `id_music_group`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 3),
(7, 7, 3),
(8, 8, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `provider`
--

CREATE TABLE `provider` (
  `id_provider` int(11) NOT NULL,
  `name_provider` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `provider`
--

INSERT INTO `provider` (`id_provider`, `name_provider`) VALUES
(1, 'Постащик костюмов'),
(2, 'Поставщик декораций');

-- --------------------------------------------------------

--
-- Структура таблицы `show`
--

CREATE TABLE `show` (
  `id_show` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL,
  `date_show` datetime DEFAULT NULL,
  `duration` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `id_director` int(11) DEFAULT NULL,
  `id_troup` int(11) DEFAULT NULL,
  `id_music_group` int(11) DEFAULT NULL,
  `id_decor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `show`
--

INSERT INTO `show` (`id_show`, `title`, `id_genre`, `date_show`, `duration`, `id_director`, `id_troup`, `id_music_group`, `id_decor`) VALUES
(1, 'Ромео и Джульетта', 2, '2020-12-01 00:00:00', '120', 1, 1, 1, 1),
(2, 'Безумный день или женитьба Фигаро', 2, '2020-12-02 00:00:00', '120', 2, 2, 2, 1),
(3, 'Собака на сене', 2, '2020-12-03 00:00:00', '135', 3, 3, 3, 1),
(4, 'Трамвай «Желание', 1, '2020-12-04 00:00:00', '135', 1, 1, 1, 1),
(5, 'Пигмалион', 1, '2020-12-05 00:00:00', '140', 2, 2, 2, 2),
(6, 'Слуга двух господ', 3, '2020-12-06 00:00:00', '130', 3, 3, 3, 2),
(7, 'Три сестры', 2, '2020-12-07 00:00:00', '130', 1, 1, 1, 2),
(8, 'На дне', 2, '2020-12-08 00:00:00', '100', 2, 1, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `supply`
--

CREATE TABLE `supply` (
  `id_supply` int(11) NOT NULL,
  `id_decor` int(11) DEFAULT NULL,
  `id_provider` int(11) DEFAULT NULL,
  `date_supply` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `supply`
--

INSERT INTO `supply` (`id_supply`, `id_decor`, `id_provider`, `date_supply`, `price`) VALUES
(7, 1, 1, '2020-11-11', 1000),
(8, 2, 2, '2020-11-12', 1500),
(9, 3, 2, '2020-11-13', 2000);

-- --------------------------------------------------------

--
-- Структура таблицы `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_show` int(11) DEFAULT NULL,
  `id_hall` int(11) DEFAULT NULL,
  `amount_tickets` int(11) DEFAULT NULL,
  `price_one_ticket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `troup`
--

CREATE TABLE `troup` (
  `id_troup` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `head` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `troup`
--

INSERT INTO `troup` (`id_troup`, `title`, `head`) VALUES
(1, 'Балетная', 'Клюев Давид Алексеевич'),
(2, 'Оперная', 'Гришаева Марианна Павловна'),
(3, 'Драматическая', 'Запорожеца Маргарита Евгеньевна');

-- --------------------------------------------------------

--
-- Структура таблицы `troup_actor`
--

CREATE TABLE `troup_actor` (
  `id` int(11) NOT NULL,
  `id_actor` int(11) DEFAULT NULL,
  `id_troup` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `troup_actor`
--

INSERT INTO `troup_actor` (`id`, `id_actor`, `id_troup`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(450) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `name` varchar(450) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `email` varchar(450) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `password` varchar(450) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `auth_key` varchar(450) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `role` varchar(45) COLLATE utf8_general_mysql500_ci DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `auth_key`, `role`) VALUES
(1, 'admin', 'Dexter', '', '$2y$13$0yPZK7naGZQroBmcfHjM5OwXZhvbtx5P1IFMdTWseAuTdHhBZHpY.', '1548041675', 'Admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Индексы таблицы `bookkeeping`
--
ALTER TABLE `bookkeeping`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `decor`
--
ALTER TABLE `decor`
  ADD PRIMARY KEY (`id_decor`);

--
-- Индексы таблицы `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_director`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Индексы таблицы `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id_hall`);

--
-- Индексы таблицы `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`id_musician`);

--
-- Индексы таблицы `music_group`
--
ALTER TABLE `music_group`
  ADD PRIMARY KEY (`id_music_group`);

--
-- Индексы таблицы `music_musician`
--
ALTER TABLE `music_musician`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_musician` (`id_musician`),
  ADD KEY `id_music_group` (`id_music_group`);

--
-- Индексы таблицы `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id_provider`);

--
-- Индексы таблицы `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`id_show`),
  ADD KEY `id_genre` (`id_genre`),
  ADD KEY `id_troup` (`id_troup`),
  ADD KEY `id_director` (`id_director`),
  ADD KEY `id_decor` (`id_decor`),
  ADD KEY `id_music_group` (`id_music_group`);

--
-- Индексы таблицы `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id_supply`),
  ADD KEY `id_decor` (`id_decor`),
  ADD KEY `id_provider` (`id_provider`);

--
-- Индексы таблицы `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_show` (`id_show`),
  ADD KEY `id_hall` (`id_hall`);

--
-- Индексы таблицы `troup`
--
ALTER TABLE `troup`
  ADD PRIMARY KEY (`id_troup`);

--
-- Индексы таблицы `troup_actor`
--
ALTER TABLE `troup_actor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_troup` (`id_troup`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `bookkeeping`
--
ALTER TABLE `bookkeeping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `decor`
--
ALTER TABLE `decor`
  MODIFY `id_decor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `director`
--
ALTER TABLE `director`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `hall`
--
ALTER TABLE `hall`
  MODIFY `id_hall` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `musician`
--
ALTER TABLE `musician`
  MODIFY `id_musician` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `music_group`
--
ALTER TABLE `music_group`
  MODIFY `id_music_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `music_musician`
--
ALTER TABLE `music_musician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `provider`
--
ALTER TABLE `provider`
  MODIFY `id_provider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `show`
--
ALTER TABLE `show`
  MODIFY `id_show` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `supply`
--
ALTER TABLE `supply`
  MODIFY `id_supply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `troup`
--
ALTER TABLE `troup`
  MODIFY `id_troup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `troup_actor`
--
ALTER TABLE `troup_actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `music_musician`
--
ALTER TABLE `music_musician`
  ADD CONSTRAINT `music_musician_ibfk_1` FOREIGN KEY (`id_musician`) REFERENCES `musician` (`id_musician`),
  ADD CONSTRAINT `music_musician_ibfk_2` FOREIGN KEY (`id_music_group`) REFERENCES `music_group` (`id_music_group`);

--
-- Ограничения внешнего ключа таблицы `show`
--
ALTER TABLE `show`
  ADD CONSTRAINT `show_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`),
  ADD CONSTRAINT `show_ibfk_2` FOREIGN KEY (`id_music_group`) REFERENCES `music_group` (`id_music_group`),
  ADD CONSTRAINT `show_ibfk_3` FOREIGN KEY (`id_troup`) REFERENCES `troup` (`id_troup`),
  ADD CONSTRAINT `show_ibfk_4` FOREIGN KEY (`id_director`) REFERENCES `director` (`id_director`),
  ADD CONSTRAINT `show_ibfk_5` FOREIGN KEY (`id_decor`) REFERENCES `decor` (`id_decor`);

--
-- Ограничения внешнего ключа таблицы `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`id_decor`) REFERENCES `decor` (`id_decor`),
  ADD CONSTRAINT `supply_ibfk_2` FOREIGN KEY (`id_provider`) REFERENCES `provider` (`id_provider`);

--
-- Ограничения внешнего ключа таблицы `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_hall`) REFERENCES `hall` (`id_hall`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_show`) REFERENCES `show` (`id_show`);

--
-- Ограничения внешнего ключа таблицы `troup_actor`
--
ALTER TABLE `troup_actor`
  ADD CONSTRAINT `troup_actor_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `troup_actor_ibfk_2` FOREIGN KEY (`id_troup`) REFERENCES `troup` (`id_troup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
