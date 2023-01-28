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

(4,'Charmander','Fire',NULL,2),
(5,'Charmeleon','Fire',NULL,2),
(6,'Charizard','Fire','Flying',2),

(7,'Squirtle','Water',NULL,3),
(8,'Wartortle','Water',NULL,3),
(9,'Blastoise','Water',NULL,3),

(10,'Caterpie','Bug',NULL,4),
(11,'Metapod','Bug',NULL,4),
(12,'Butterfree','Bug','Flying',4),

(13,'Weedle','Bug','Poison',5),
(14,'Kakuna','Bug','Poison',5),
(15,'Beedrill','Bug','Poison',5),

(16,'Pidgey','Normal','Flying',6),
(17,'Pidgeotto','Normal','Flying',6),
(18,'Pidgeot','Normal','Flying',6),

(19,'Rattata','Normal',NULL,NULL),
(20,'Raticate','Normal',NULL,19),

(21,'Spearow','Normal','Flying',NULL),
(22,'Fearow','Normal','Flying',21),

(23,'Ekans','Poison',NULL,NULL),
(24,'Arbok','Poison',NULL,23),

(25,'Pikachu','Electric',NULL,NULL),
(26,'Raichu','Electric',NULL,25),

(27,'Sandshrew','Ground',NULL,NULL),
(28,'Sandslash','Ground',NULL,27),

(29,'NidoranF','Poison',NULL,NULL),
(30,'Nidorina','Poison',NULL,29),
(31,'Nidoqueen','Poison','Ground',30),

(32,'NidoranM','Poison',NULL,NULL),
(33,'Nidorino','Poison',NULL,32),
(34,'Nidoking','Poison','Ground',33),

(35,'Clefairy','Fairy',NULL,NULL),
(36,'Clefable','Fairy',NULL,35),

(37,'Vulpix','Fire',NULL,NULL),
(38,'Ninetales','Fire',NULL,37),

(39,'Jigglypuff','Normal','Fairy',NULL),
(40,'Wigglytuff','Normal','Fairy',39),

(41,'Zubat','Poison','Flying',NULL),
(42,'Golbat','Poison','Flying',41),

(43,'Oddish','Grass','Poison',NULL),
(44,'Gloom','Grass','Poison',43),
(45,'Vileplume','Grass','Poison',44),

(46,'Paras','Bug','Grass',NULL),
(47,'Parasect','Bug','Grass',46),

(48,'Venonat','Bug','Poison',NULL),
(49,'Venomoth','Bug','Poison',48),

(50,'Diglett','Ground',NULL,NULL),
(51,'Dugtrio','Ground',NULL,50),

(52,'Meowth','Normal',NULL,NULL),
(53,'Persian','Normal',NULL,52),

(54,'Psyduck','Water',NULL,NULL),
(55,'Golduck','Water',NULL,54),

(56,'Mankey','Fighting',NULL,NULL),
(57,'Primeape','Fighting',NULL,56),

(58,'Growlithe','Fire',NULL,NULL),
(59,'Arcanine','Fire',NULL,58),

(60,'Poliwag','Water',NULL,NULL),
(61,'Poliwhirl','Water',NULL,60),
(62,'Poliwrath','Water','Fighting',61),

(63,'Abra','Psychic',NULL,NULL),
(64,'Kadabra','Psychic',NULL,63),
(65,'Alakazam','Psychic',NULL,64),

(66,'Machop','Fighting',NULL,NULL),
(67,'Machoke','Fighting',NULL,66),
(68,'Machamp','Fighting',NULL,67),

(69,'Bellsprout','Grass','Poison',NULL),
(70,'Weepinbell','Grass','Poison',69),
(71,'Victreebel','Grass','Poison',70),

(72,'Tentacool','Water','Poison',NULL),
(73,'Tentacruel','Water','Poison',72),

(74,'Geodude','Rock','Ground',NULL),
(75,'Graveler','Rock','Ground',74),
(76,'Golem','Rock','Ground',75),

(77,'Ponyta','Fire',NULL,NULL),
(78,'Rapidash','Fire',NULL,77),

(79,'Slowpoke','Water','Psychic',NULL),
(80,'Slowbro','Water','Psychic',79),

(81,'Magnemite','Electric','Steel',NULL),
(82,'Magneton','Electric','Steel',81),

(83,'Farfetch','Normal','Flying',NULL),

(84,'Doduo','Normal','Flying',NULL),
(85,'Dodrio','Normal','Flying',84),

(86,'Seel','Water',NULL,NULL),
(87,'Dewgong','Water','Ice',86),

(88,'Grimer','Poison',NULL,NULL),
(89,'Muk','Poison',NULL,88),

(90,'Shellder','Water',NULL,NULL),
(91,'Cloyster','Water','Ice',90),

(92,'Gastly','Ghost','Poison',NULL),
(93,'Haunter','Ghost','Poison',92),
(94,'Gengar','Ghost','Poison',93),

(95,'Onix','Rock','Ground',NULL),

(96,'Drowzee','Psychic',NULL,NULL),
(97,'Hypno','Psychic',NULL,96),

(98,'Krabby','Water',NULL,NULL),
(99,'Kingler','Water',NULL,98),

(100,'Voltorb','Electric',NULL,NULL),
(101,'Electrode','Electric',NULL,100),

(102,'Exeggcute','Grass','Psychic',NULL),
(103,'Exeggutor','Grass','Psychic',102),

(104,'Cubone','Ground',NULL,NULL),
(105,'Marowak','Ground',NULL,104),

(106,'Hitmonlee','Fighting',NULL,NULL),

(107,'Hitmonchan','Fighting',NULL,NULL),

(108,'Lickitung','Normal',NULL,NULL),

(109,'Koffing','Poison',NULL,NULL),
(110,'Weezing','Poison',NULL,109),

(111,'Rhyhorn','Ground','Rock',NULL),
(112,'Rhydon','Ground','Rock',111),

(113,'Chansey','Normal',NULL,NULL),

(114,'Tangela','Grass',NULL,NULL),

(115,'Kangaskhan','Normal',NULL,NULL),

(116,'Horsea','Water',NULL,NULL),
(117,'Seadra','Water',NULL,116),

(118,'Goldeen','Water',NULL,NULL),
(119,'Seaking','Water',NULL,118),

(120,'Staryu','Water',NULL,NULL),
(121,'Starmie','Water','Psychic',120),

(122,'Mr. Mime','Psychic','Fairy',NULL),

(123,'Scyther','Bug','Flying',NULL),

(124,'Jynx','Ice','Psychic',NULL),

(125,'Electabuzz','Electric',NULL,NULL),

(126,'Magmar','Fire',NULL,NULL),

(127,'Pinsir','Bug',NULL,NULL),

(128,'Tauros','Normal',NULL,NULL),

(129,'Magikarp','Water',NULL,NULL),
(130,'Gyarados','Water','Flying',129),

(131,'Lapras','Water','Ice',NULL),

(132,'Ditto','Normal',NULL,NULL),

(133,'Eevee','Normal',NULL,NULL),
(134,'Vaporeon','Water',NULL,133),
(135,'Jolteon','Electric',NULL,133),
(136,'Flareon','Fire',NULL,133),

(137,'Porygon','Normal',NULL,NULL),

(138,'Omanyte','Rock','Water',NULL),
(139,'Omastar','Rock','Water',138),

(140,'Kabuto','Rock','Water',NULL),
(141,'Kabutops','Rock','Water',140),

(142,'Aerodactyl','Rock','Flying',NULL),

(143,'Snorlax','Normal',NULL,NULL),

(144,'Articuno','Ice','Flying',NULL),

(145,'Zapdos','Electric','Flying',NULL),

(146,'Moltres','Fire','Flying',NULL),

(147,'Dratini','Dragon',NULL,NULL),
(148,'Dragonair','Dragon',NULL,147),
(149,'Dragonite','Dragon','Flying',148),

(150,'Mewtwo','Psychic',NULL,NULL),

(151,'Mew','Psychic',NULL,NULL);
