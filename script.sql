DROP TABLE IF EXISTS `pokemon`;

CREATE TABLE `pokemon` (
  `pokemon_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type_1` varchar(45) NOT NULL,
  `type_2` varchar(45) DEFAULT NULL,
  `evolution_line` int(11) DEFAULT NULL,
  PRIMARY KEY (`pokemon_id`)
); 

INSERT INTO `pokemon` VALUES 
(1,"Bulbasaur",'Grass','Poison',1),
(2,'Ivysaur','Grass','Poison',1),
(3,'Venusaur','Grass','Poison',1),
(4,'Charmander','Fire',NULL,4),
(5,'Charmeleon','Fire',NULL,4),
(6,'Charizard','Fire','Flying',4),
(7,'Squirtle','Water',NULL,7),
(8,'Wartortle','Water',NULL,7),
(9,'Blastoise','Water',NULL,7),
(10,'Caterpie','Bug',NULL,10),
(11,'Metapod','Bug',NULL,10),
(12,'Butterfree','Bug','Flying',10),
(13,'Weedle','Bug','Poison',13),
(14,'Kakuna','Bug','Poison',13),
(15,'Beedrill','Bug','Poison',13),
(16,'Pidgey','Normal','Flying',16),
(17,'Pidgeotto','Normal','Flying',16),
(18,'Pidgeot','Normal','Flying',16),
(19,'Rattata','Normal',NULL,19),
(20,'Raticate','Normal',NULL,19),
(21,'Spearow','Normal','Flying',21),
(22,'Fearow','Normal','Flying',21),
(23,'Ekans','Poison',NULL,23),
(24,'Arbok','Poison',NULL,23),
(25,'Pikachu','Electric',NULL,25),
(26,'Raichu','Electric',NULL,25),
(27,'Sandshrew','Ground',NULL,27),
(28,'Sandslash','Ground',NULL,27),
(29,'NidoranF','Poison',NULL,29),
(30,'Nidorina','Poison',NULL,29),
(31,'Nidoqueen','Poison','Ground',29),
(32,'NidoranM','Poison',NULL,32),
(33,'Nidorino','Poison',NULL,32),
(34,'Nidoking','Poison','Ground',32),
(35,'Clefairy','Fairy',NULL,35),
(36,'Clefable','Fairy',NULL,35),
(37,'Vulpix','Fire',NULL,37),
(38,'Ninetales','Fire',NULL,37),
(39,'Jigglypuff','Normal','Fairy',39),
(40,'Wigglytuff','Normal','Fairy',39),
(41,'Zubat','Poison','Flying',41),
(42,'Golbat','Poison','Flying',41),
(43,'Oddish','Grass','Poison',43),
(44,'Gloom','Grass','Poison',43),
(45,'Vileplume','Grass','Poison',43),
(46,'Paras','Bug','Grass',46),
(47,'Parasect','Bug','Grass',46),
(48,'Venonat','Bug','Poison',48),
(49,'Venomoth','Bug','Poison',48),
(50,'Diglett','Ground',NULL,50),
(51,'Dugtrio','Ground',NULL,50),
(52,'Meowth','Normal',NULL,52),
(53,'Persian','Normal',NULL,52),
(54,'Psyduck','Water',NULL,54),
(55,'Golduck','Water',NULL,54),
(56,'Mankey','Fighting',NULL,56),
(57,'Primeape','Fighting',NULL,56),
(58,'Growlithe','Fire',NULL,58),
(59,'Arcanine','Fire',NULL,58),
(60,'Poliwag','Water',NULL,60),
(61,'Poliwhirl','Water',NULL,60),
(62,'Poliwrath','Water','Fighting',60),
(63,'Abra','Psychic',NULL,63),
(64,'Kadabra','Psychic',NULL,63),
(65,'Alakazam','Psychic',NULL,63),
(66,'Machop','Fighting',NULL,66),
(67,'Machoke','Fighting',NULL,66),
(68,'Machamp','Fighting',NULL,66),
(69,'Bellsprout','Grass','Poison',69),
(70,'Weepinbell','Grass','Poison',69),
(71,'Victreebel','Grass','Poison',69),
(72,'Tentacool','Water','Poison',72),
(73,'Tentacruel','Water','Poison',72),
(74,'Geodude','Rock','Ground',74),
(75,'Graveler','Rock','Ground',74),
(76,'Golem','Rock','Ground',74),
(77,'Ponyta','Fire',NULL,77),
(78,'Rapidash','Fire',NULL,77),
(79,'Slowpoke','Water','Psychic',79),
(80,'Slowbro','Water','Psychic',79),
(83,'Farfetch','Normal','Flying',83),
(84,'Doduo','Normal','Flying',84),
(85,'Dodrio','Normal','Flying',84),
(86,'Seel','Water',NULL,86),
(87,'Dewgong','Water','Ice',86),
(88,'Grimer','Poison',NULL,88),
(89,'Muk','Poison',NULL,88),
(90,'Shellder','Water',NULL,90),
(91,'Cloyster','Water','Ice',90),
(92,'Gastly','Ghost','Poison',92),
(93,'Haunter','Ghost','Poison',92),
(94,'Gengar','Ghost','Poison',92),
(95,'Onix','Rock','Ground',NULL),
(96,'Drowzee','Psychic',NULL,96),
(97,'Hypno','Psychic',NULL,96),
(98,'Krabby','Water',NULL,98),
(99,'Kingler','Water',NULL,98),
(100,'Voltorb','Electric',NULL,100),
(101,'Electrode','Electric',NULL,100),
(102,'Exeggcute','Grass','Psychic',102),
(103,'Exeggutor','Grass','Psychic',102),
(104,'Cubone','Ground',NULL,104),
(105,'Marowak','Ground',NULL,104),
(106,'Hitmonlee','Fighting',NULL,NULL),
(107,'Hitmonchan','Fighting',NULL,NULL),
(108,'Lickitung','Normal',NULL,NULL),
(109,'Koffing','Poison',NULL,109),
(110,'Weezing','Poison',NULL,109),
(111,'Rhyhorn','Ground','Rock',111),
(112,'Rhydon','Ground','Rock',111),
(113,'Chansey','Normal',NULL,NULL),
(114,'Tangela','Grass',NULL,NULL),
(115,'Kangaskhan','Normal',NULL,NULL),
(116,'Horsea','Water',NULL,116),
(117,'Seadra','Water',NULL,116),
(118,'Goldeen','Water',NULL,118),
(119,'Seaking','Water',NULL,119),
(120,'Staryu','Water',NULL,120),
(121,'Starmie','Water','Psychic',120),
(122,'Mr. Mime','Psychic','Fairy',NULL),
(123,'Scyther','Bug','Flying',NULL),
(124,'Jynx','Ice','Psychic',NULL),
(125,'Electabuzz','Electric',NULL,NULL),
(126,'Magmar','Fire',NULL,NULL),
(127,'Pinsir','Bug',NULL,NULL),
(128,'Tauros','Normal',NULL,NULL),
(129,'Magikarp','Water',NULL,129),
(130,'Gyarados','Water','Flying',129),
(131,'Lapras','Water','Ice',NULL),
(132,'Ditto','Normal',NULL,NULL),
(133,'Eevee','Normal',NULL,133),
(134,'Vaporeon','Water',NULL,133),
(135,'Jolteon','Electric',NULL,133),
(136,'Flareon','Fire',NULL,133),
(137,'Porygon','Normal',NULL,NULL),
(138,'Omanyte','Rock','Water',138),
(139,'Omastar','Rock','Water',138),
(140,'Kabuto','Rock','Water',140),
(141,'Kabutops','Rock','Water',140),
(142,'Aerodactyl','Rock','Flying',NULL),
(143,'Snorlax','Normal',NULL,NULL),
(144,'Articuno','Ice','Flying',NULL),
(145,'Zapdos','Electric','Flying',NULL),
(146,'Moltres','Fire','Flying',NULL),
(147,'Dratini','Dragon',NULL,147),
(148,'Dragonair','Dragon',NULL,147),
(149,'Dragonite','Dragon','Flying',147),
(150,'Mewtwo','Psychic',NULL,150),
(151,'Mew','Psychic',NULL,151);
