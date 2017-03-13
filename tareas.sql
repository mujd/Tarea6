-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2017 a las 17:39:53
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tareas`
--

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombres`, `apellidoP`, `apellidoM`, `rut`, `direccion`, `email`, `fono`) VALUES
(11, 'Basil', 'Rodgers', 'Weeks', '16.102.234-9', '1200 Felis Ave', 'Aliquam@laoreetliberoet.net', 41925953),
(12, 'Boris', 'Lynn', 'Gates', '23.658.618-9', 'Ap #286-7207 Mus. Avenue', 'a.neque@nislNulla.ca', 29928650),
(13, 'Cody', 'Blankenship', 'Coleman', '21.950.491-8', 'P.O. Box 905, 5634 Eros St.', 'tempus.scelerisque@Proinvel.org', 64370473),
(14, 'Cally', 'Gallagher', 'David', '18.932.368-9', '355-1075 Id, Rd.', 'lacus.Aliquam.rutrum@bibendum.edu', 28317361),
(15, 'Mariko', 'Mcclure', 'Gates', '8.703.233-7', 'P.O. Box 512, 398 Faucibus St.', 'nec.enim@consequat.org', 13932947),
(16, 'Taylor', 'Hendrix', 'Kemp', '23.684.112-K', 'P.O. Box 915, 2056 Ante, St.', 'diam.at.pretium@arcu.ca', 28239653),
(17, 'Lucy', 'Lynch', 'Goff', '30.461.213-4', '9855 Magna Street', 'ornare.egestas@atrisusNunc.com', 50447112),
(18, 'Kamal', 'Bush', 'Marshall', '30.862.930-9', '761-1409 Fermentum Ave', 'In@hendrerita.org', 85768184),
(19, 'Yoshi', 'Cortez', 'Miranda', '14.214.517-0', 'Ap #197-2267 Elit Rd.', 'a.purus@nuncid.ca', 66231547),
(20, 'Steel', 'Figueroa', 'Sykes', '35.643.242-8', 'Ap #107-2464 Ullamcorper Av.', 'ac.fermentum.vel@pharetra.com', 62663831),
(21, 'Myles', 'Simon', 'Bray', '33.909.893-K', '2388 Nec, St.', 'Integer@Quisqueporttitor.ca', 51772237),
(22, 'Eliana', 'Wade', 'Cochran', '45.925.952-K', '260-6209 Enim. Av.', 'ligula@sempercursusInteger.net', 41216643),
(23, 'Conan', 'Robbins', 'Frazier', '17.765.011-0', '4587 Sit Ave', 'porttitor.vulputate@quam.edu', 39174761),
(24, 'Rhea', 'Hoffman', 'Myers', '7.514.081-9', 'Ap #133-9046 A, Street', 'molestie@luctus.net', 63051961),
(25, 'Clare', 'Cote', 'Bryan', '29.989.807-5', 'P.O. Box 349, 4956 Faucibus. St.', 'et@diamatpretium.ca', 89097238),
(26, 'Keelie', 'Deleon', 'Browning', '23.969.295-8', '3489 Lacus. Avenue', 'Vivamus.euismod@porttitor.ca', 34455158),
(27, 'Ivor', 'Knox', 'Hammond', '24.074.910-6', '257-5408 Sapien. St.', 'ultrices.Vivamus.rhoncus@fringilla.com', 42074618),
(28, 'Nadine', 'Hendrix', 'Chambers', '48.305.681-8', '613-6306 Ipsum. Rd.', 'ligula.Donec@Vivamussitamet.org', 99618831),
(29, 'Imani', 'Pitts', 'Cervantes', '20.741.780-7', '4488 Massa. Rd.', 'libero.Morbi.accumsan@ligula.org', 96258556),
(30, 'Kim', 'Blankenship', 'Goodman', '44.650.973-K', '9456 Vitae Street', 'Phasellus.dapibus.quam@posuere.co.uk', 36928163),
(31, 'Lilah', 'Dunn', 'Knox', '45.143.065-3', '877-379 In Rd.', 'auctor.vitae.aliquet@nisimagna.co.uk', 28810884),
(32, 'Jackson', 'Rodriguez', 'Sears', '20.105.452-4', 'P.O. Box 914, 500 Mollis St.', 'porttitor@orciUt.com', 71463437),
(33, 'Baker', 'Blankenship', 'Petersen', '20.015.191-7', 'P.O. Box 587, 3736 Donec Ave', 'lacinia.orci.consectetuer@luctusipsum.edu', 60192001),
(34, 'Wyatt', 'Pitts', 'Mullins', '18.672.260-4', 'P.O. Box 603, 3263 Ante Rd.', 'auctor@eget.com', 19208701),
(35, 'Patrick', 'Mcguire', 'Graves', '10.776.162-4', '1112 Fringilla, Av.', 'gravida@et.org', 63610418),
(36, 'Roary', 'Ward', 'Dotson', '30.150.336-9', 'P.O. Box 825, 9244 Metus Avenue', 'nascetur@ipsum.ca', 14748385),
(37, 'Yuli', 'Day', 'Keller', '39.243.108-K', '6893 Proin Av.', 'diam.Proin.dolor@cursus.co.uk', 26330191),
(38, 'Yael', 'Noble', 'Wilder', '43.950.107-3', 'P.O. Box 538, 2020 Libero. Av.', 'senectus@quispedePraesent.co.uk', 88079096),
(39, 'Plato', 'Barr', 'Mercer', '27.099.250-1', 'Ap #906-7218 Purus, Rd.', 'diam@veliteu.com', 36166722),
(40, 'Evan', 'Hess', 'Todd', '38.077.716-9', 'Ap #276-5581 In Rd.', 'Morbi.metus.Vivamus@DonectinciduntDonec.edu', 85100348),
(41, 'Aretha', 'Mccullough', 'Flynn', '30.641.459-3', 'P.O. Box 460, 3016 Enim St.', 'conubia.nostra.per@Donecest.ca', 14324165),
(42, 'Garth', 'Ruiz', 'Rocha', '25.288.840-3', 'P.O. Box 523, 4006 Turpis. Ave', 'Sed.auctor@fames.net', 85298502),
(43, 'Geoffrey', 'Kelley', 'Pruitt', '7.951.098-K', '933-6263 Sed Road', 'lectus@quamquis.ca', 39402416),
(44, 'Julian', 'Compton', 'Pruitt', '7.674.009-7', '982-6056 Malesuada Av.', 'massa@adipiscingelit.com', 79676912),
(45, 'Reagan', 'Crane', 'Reed', '46.442.376-1', 'P.O. Box 481, 4141 Duis Rd.', 'arcu@Quisquetincidunt.edu', 45844942),
(46, 'Lev', 'Mcguire', 'Stanton', '33.805.146-8', 'P.O. Box 148, 3901 Elit, Rd.', 'mattis@parturient.com', 31624333),
(47, 'Hadley', 'Ward', 'Cortez', '35.462.545-8', 'P.O. Box 492, 5439 Non Rd.', 'turpis@nulla.edu', 62074011),
(48, 'Omar', 'Curtis', 'Fuller', '48.722.653-K', '798-8381 Sapien. Rd.', 'dictum.placerat.augue@Fusce.org', 41121670),
(49, 'Wyoming', 'Lott', 'Benson', '10.135.404-0', '7249 Amet Rd.', 'Duis.risus.odio@dolordolortempus.org', 98618407),
(50, 'Aurelia', 'Boyd', 'Cardenas', '38.347.153-2', '9921 Id St.', 'in.magna@pedeCum.net', 93194162),
(51, 'Keefe', 'Moon', 'Mcmahon', '40.873.962-4', 'Ap #938-4772 Maecenas Street', 'nulla.Integer.vulputate@et.com', 51530031),
(52, 'Lev', 'Macdonald', 'Mccall', '39.858.756-1', '703-4111 Ligula. Street', 'Donec.at.arcu@velmauris.net', 97540990),
(53, 'Cleo', 'Munoz', 'Wooten', '9.606.702-K', '1802 Curabitur Rd.', 'Duis.mi@posuerecubiliaCurae.ca', 81953046),
(54, 'Wang', 'Hubbard', 'Hardin', '12.173.457-5', '4834 Gravida. Rd.', 'mauris@Suspendisse.net', 48382177),
(55, 'Cyrus', 'Edwards', 'Farley', '32.919.167-2', 'P.O. Box 285, 1042 Sodales St.', 'Pellentesque@vestibulum.edu', 38147692),
(56, 'Patricia', 'Matthews', 'Long', '25.761.161-2', 'P.O. Box 704, 4891 Commodo Avenue', 'Morbi@Utsemper.edu', 81183646),
(57, 'Dolan', 'Puckett', 'Garrett', '29.632.515-5', 'Ap #102-9011 Enim Rd.', 'eleifend.vitae.erat@nonummy.org', 65692026),
(58, 'Dustin', 'Owens', 'Glass', '11.801.787-0', 'P.O. Box 784, 8226 Ut Ave', 'enim.sit.amet@sagittisfelis.co.uk', 10013879),
(59, 'Kennedy', 'Hopper', 'Blanchard', '49.924.351-0', '393 Ridiculus St.', 'gravida@pedePraesent.co.uk', 11786531),
(60, 'Madeline', 'Goff', 'Savage', '40.998.975-6', '7131 Egestas Avenue', 'pede.nec@arcuimperdiet.ca', 38734734),
(61, 'Asher', 'Steele', 'Daugherty', '9.451.433-9', 'P.O. Box 215, 7535 Suspendisse Road', 'enim@ornare.org', 26724993),
(62, 'Hermione', 'Bender', 'Wilcox', '29.674.190-6', '430-8144 Morbi Av.', 'Donec.elementum.lorem@vehicula.net', 89645805),
(63, 'Darrel', 'Koch', 'Greer', '12.820.779-1', '590-7085 In Street', 'sed.dictum.eleifend@libero.org', 63700143),
(64, 'Medge', 'Sharpe', 'Bauer', '26.633.928-3', 'Ap #301-7604 Risus. Rd.', 'faucibus@leo.co.uk', 92325615),
(65, 'Madonna', 'Hoover', 'Young', '39.232.877-7', 'Ap #248-8945 Odio Av.', 'tellus.Suspendisse.sed@etnetus.com', 68420459),
(66, 'Raymond', 'Montoya', 'Rocha', '15.143.354-5', '4556 Orci, Avenue', 'egestas@interdumfeugiatSed.net', 70709230),
(67, 'Uta', 'Roth', 'Christensen', '47.170.676-0', 'Ap #366-9315 Nec Rd.', 'est@non.edu', 83294671),
(68, 'Quynn', 'Hill', 'Holt', '13.717.320-4', '5688 Accumsan St.', 'et.pede.Nunc@Praesenteu.ca', 24036888),
(69, 'Eugenia', 'Holden', 'Pena', '22.775.707-8', 'Ap #790-2444 Pellentesque Av.', 'nisi.Mauris.nulla@risus.com', 72793670),
(70, 'Indira', 'Parsons', 'Oneill', '33.530.909-K', '3746 Dictum Av.', 'velit.egestas@Proinnisl.ca', 63606965),
(71, 'Mark', 'Munoz', 'Reeves', '16.771.983-K', '899-7727 Posuere Rd.', 'aptent@adipiscing.net', 21989922),
(72, 'Clayton', 'Miles', 'Gonzales', '29.260.020-8', 'Ap #224-5960 Cursus Rd.', 'risus@Nulla.co.uk', 51559294),
(73, 'Brielle', 'Pena', 'Pearson', '36.140.056-9', '457-5915 Rutrum, Rd.', 'mus@necurnasuscipit.org', 96884933),
(74, 'Avram', 'Chambers', 'Flynn', '8.847.597-6', '280-6397 Et Rd.', 'nunc@molestie.net', 42322313),
(75, 'Griffith', 'Murphy', 'Greer', '10.144.848-7', 'Ap #586-2810 Accumsan Rd.', 'dui.nec.tempus@quisarcuvel.net', 64524125),
(76, 'Dorothy', 'Compton', 'Navarro', '30.614.584-3', '9071 Aliquam Ave', 'sociis.natoque.penatibus@dolorFusce.com', 85712277),
(77, 'Clio', 'Odom', 'Rogers', '50.445.457-6', '918-1226 Nullam St.', 'enim.sit.amet@dolorsitamet.ca', 76925612),
(78, 'Lareina', 'Perez', 'Dominguez', '10.961.640-0', 'P.O. Box 325, 1782 Ultrices. Street', 'in.molestie.tortor@enim.ca', 78396702),
(79, 'Harper', 'Hawkins', 'Baker', '46.113.353-3', '301-2716 Velit Rd.', 'Integer.urna.Vivamus@Aeneansed.co.uk', 64932280),
(80, 'Tallulah', 'Patel', 'Coffey', '29.169.323-7', 'P.O. Box 419, 6462 Gravida. St.', 'feugiat.metus@senectuset.ca', 56698258),
(81, 'Brody', 'Page', 'Garner', '6.657.043-6', '1973 Dapibus St.', 'sem.semper.erat@Utnecurna.org', 15929169),
(82, 'Tatum', 'Lancaster', 'Benson', '39.828.460-7', '100-6336 Scelerisque Rd.', 'elit@auctorodio.net', 27390707),
(83, 'Yeo', 'Parrish', 'Mckinney', '22.347.055-6', '971 Ac Street', 'elit.pede.malesuada@risus.com', 97180659),
(84, 'Jessica', 'Delacruz', 'Merrill', '33.787.065-1', '6621 Dis St.', 'lacinia@estmaurisrhoncus.ca', 59694458),
(85, 'Amelia', 'Terrell', 'Garza', '8.456.379-K', 'Ap #975-5864 Ridiculus Av.', 'aliquet.metus@neque.org', 77915486),
(86, 'Charissa', 'Wilcox', 'James', '8.749.324-5', '562-6861 Aliquam Avenue', 'scelerisque@Integereulacus.com', 53439026),
(87, 'August', 'Bird', 'Stanley', '34.855.966-4', '6382 Est Rd.', 'in.aliquet.lobortis@liberoettristique.net', 41628081),
(88, 'Cadman', 'Jacobs', 'Mcconnell', '23.623.129-1', 'Ap #805-5885 Orci St.', 'eu.tellus@maurisut.org', 84099988),
(89, 'Jana', 'Hendrix', 'Fernandez', '46.176.632-3', '2964 Sed Road', 'eleifend.nunc@urnaconvalliserat.ca', 70433683),
(90, 'Gage', 'Whitehead', 'Mejia', '8.005.795-4', '8211 Morbi Avenue', 'Fusce.fermentum.fermentum@utpellentesque.edu', 88382372),
(91, 'Beatrice', 'Kaufman', 'Hampton', '10.929.543-4', 'Ap #781-2790 At Av.', 'magna@commodoauctor.ca', 54312374),
(92, 'Scarlet', 'Hahn', 'Mcfadden', '38.521.492-8', 'Ap #279-9838 Mauris Street', 'In@nisi.com', 18019284),
(93, 'Paki', 'Rosa', 'Mckay', '22.664.269-2', '194-9891 Sapien, Rd.', 'Curabitur.consequat@feugiatplaceratvelit.edu', 91843784),
(94, 'Genevieve', 'Aguilar', 'Atkinson', '9.680.805-4', 'Ap #240-7721 Ac Street', 'Nullam@natoquepenatibus.com', 94614120),
(95, 'Gage', 'Castillo', 'Haley', '45.252.339-6', '921-9500 Convallis Avenue', 'aliquam@ipsumCurabiturconsequat.co.uk', 40584488),
(96, 'Cecilia', 'Silva', 'Hodges', '7.504.860-2', '9737 Diam Rd.', 'hendrerit@eratsemper.co.uk', 52187689),
(97, 'Yoshi', 'Burt', 'Perkins', '45.147.180-5', '2624 Ultrices. Av.', 'ultrices.posuere.cubilia@dui.org', 82672218),
(98, 'Larissa', 'Anthony', 'Lawrence', '28.206.104-K', 'P.O. Box 122, 9764 Urna, Ave', 'ante.ipsum.primis@Donectempuslorem.org', 57858524),
(99, 'Moana', 'Mooney', 'Hansen', '44.043.508-4', 'P.O. Box 774, 5721 Dictum Road', 'nisi.Aenean@bibendumDonec.org', 91916415),
(100, 'Fritz', 'Webster', 'Nieves', '50.401.995-0', '847-9629 Nec, Av.', 'enim@estac.net', 63247166),
(101, 'Daniel', 'Briggs', 'Scott', '10.168.978-6', 'P.O. Box 275, 8374 Dignissim Road', 'massa.Quisque@vulputateposuere.edu', 16576295),
(102, 'Shannon', 'Weaver', 'Ballard', '30.916.659-0', 'Ap #533-208 Donec Avenue', 'luctus.vulputate@ornarelectusjusto.com', 47317260),
(103, 'John', 'Russo', 'Arnold', '48.828.153-4', 'Ap #694-2926 Magna. Avenue', 'sit.amet@tellus.com', 73154862),
(104, 'Liberty', 'Gray', 'Black', '10.377.006-8', '755-1322 Etiam Av.', 'Morbi@magnanec.ca', 75519523),
(105, 'Madeline', 'Gregory', 'Lester', '9.875.471-7', '847-3207 Eget, Rd.', 'ante.Vivamus@nequevitaesemper.co.uk', 57180059),
(109, 'wqee', 'qweq', 'qwe', 'wqe', 'ewq', 'wq@sd', 111),
(110, '1', '1', '2', '20.123.369-5', '2', 'wq@sd', 123456789),
(111, '2', '3', '4', '5', '6', 'joserojas@email.cl', 1234567890);

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre`, `ruta`, `listar`, `agregar`, `editar`, `eliminar`) VALUES
(1, 'Cliente', '/Tarea6/web/app_dev.php/Cliente/list', 1, 1, 1, 1),
(2, 'Proveedor', '/Tarea6/web/app_dev.php/Proveedor/list', 1, 1, 1, 1),
(3, 'Usuario', '/Tarea6/web/app_dev.php/Usuario/list', 1, 1, 1, 1),
(4, 'Roles', '/Tarea6/web/app_dev.php/Rol/list\r\n', 1, 1, 1, 1),
(5, 'Menus', '/Tarea6/web/app_dev.php/Menu/list', 1, 1, 1, 1),
(6, 'MenuRol', '/Tarea6/web/app_dev.php/MenuRol/list', 1, 1, 1, 1);

--
-- Volcado de datos para la tabla `menu_rol`
--

INSERT INTO `menu_rol` (`id`, `menu_id`, `rol_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 3),
(5, 2, 3),
(6, 1, 2),
(7, 2, 2),
(8, 4, 1),
(9, 5, 1),
(14, 6, 1);

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombres`, `apellidoP`, `apellidoM`, `rut`, `razonSocial`, `email`, `fono`) VALUES
(2, 'Cristian Alejandro', 'Fernandez', 'Nuñez', '14.213.258-3', 'Cristian SA', 'cristian@mail.cl', 65422258),
(3, 'Pablo daniel', 'mendez', 'sossa', '18.521.632-5', 'Av Grecia 1232', 'pablo@mail.cl', 12314431),
(4, 'Sybill', 'Noel', 'Donovan', '7.470.912-5', 'Phasellus Ltd', 'semper@euismodacfermentum.ca', 57125828),
(5, 'Debra', 'Weaver', 'Sargent', '49.438.528-7', 'Fermentum Convallis Ligula Institute', 'vestibulum.neque.sed@vulputaterisus.org', 50095300),
(6, 'Lionel', 'Ortiz', 'Nunez', '14.502.663-6', 'Ipsum Ac Industries', 'nibh.lacinia.orci@egetvariusultrices.co.uk', 47831554),
(7, 'Rama', 'Robertson', 'Wilcox', '43.394.486-0', 'Dignissim Ltd', 'dictum.cursus@nonmagna.com', 93022804),
(8, 'Naida', 'Bryan', 'Donaldson', '7.702.657-6', 'Vitae Diam Proin Incorporated', 'felis@sit.org', 38839903),
(9, 'Asher', 'Hays', 'Chan', '6.411.578-2', 'Ut Inc.', 'mi.fringilla.mi@dui.com', 49248646),
(10, 'Dana', 'Delacruz', 'Hensley', '48.314.703-1', 'In Faucibus Morbi Inc.', 'nisl@convallisest.ca', 57193378),
(11, 'Brendan', 'Roach', 'Fitzgerald', '41.617.295-1', 'Sed Libero Consulting', 'mollis.nec@Nunc.org', 53759576),
(12, 'Myra', 'Sosa', 'Ellison', '33.592.074-0', 'Vivamus Non Lorem PC', 'dictum@musAeneaneget.edu', 77853636),
(13, 'Yeo', 'Conley', 'Norton', '43.134.933-7', 'Non Enim Incorporated', 'metus.Aenean.sed@atvelitPellentesque.edu', 68320862),
(14, 'Amir', 'Lindsey', 'Cox', '40.888.056-4', 'Phasellus Industries', 'Phasellus@estNunclaoreet.org', 68924912),
(15, 'Rana', 'Avery', 'Case', '15.053.559-K', 'Eu Corporation', 'quis.arcu.vel@semperduilectus.ca', 67797436),
(16, 'Zenia', 'Chang', 'Coleman', '41.259.804-0', 'Non Magna Inc.', 'velit@Donecat.com', 33082269),
(17, 'Yoshi', 'Fulton', 'Steele', '26.038.313-2', 'Luctus Ut Pellentesque Consulting', 'amet@eratSed.ca', 61748769),
(18, 'Ifeoma', 'Miles', 'Fry', '15.544.300-6', 'Enim Nunc Ut Company', 'Nunc@nibh.edu', 13307312),
(19, 'Tobias', 'Hansen', 'Flores', '15.318.454-2', 'Ut Aliquam Limited', 'Duis.risus.odio@turpisNulla.org', 55585565),
(20, 'Brady', 'Blackburn', 'Calderon', '7.139.522-7', 'Nulla Industries', 'a.malesuada@egetmetuseu.org', 87230573),
(21, 'Anika', 'Fox', 'Shepard', '28.075.085-9', 'Dolor Sit Amet LLP', 'ridiculus.mus.Proin@justo.co.uk', 22289214),
(22, 'Garth', 'Huffman', 'Richardson', '45.907.223-3', 'Pellentesque Industries', 'in.molestie.tortor@ac.net', 12024534),
(23, 'Jeanette', 'Fox', 'Meyers', '15.608.949-4', 'Eget Odio Limited', 'parturient.montes.nascetur@Seddictum.net', 53671682),
(24, 'Cecilia', 'Foley', 'Wilkinson', '29.388.550-8', 'Ac Feugiat PC', 'ipsum@Aliquamgravidamauris.edu', 29472046),
(25, 'Brenda', 'Patton', 'Glover', '41.930.179-5', 'Facilisis Facilisis Associates', 'dui.Fusce.diam@loremvehicula.net', 91739125),
(26, 'Serena', 'White', 'Irwin', '49.540.626-1', 'Velit Justo Nec Inc.', 'vel.lectus.Cum@Quisqueporttitor.net', 73680739),
(27, 'Noelle', 'Hudson', 'Daniel', '46.599.741-9', 'Quam Dignissim Ltd', 'Cum.sociis@vulputateveliteu.org', 58319009),
(28, 'Chava', 'Cortez', 'Patton', '15.844.983-8', 'Eget Mollis Lectus Company', 'enim.Etiam@magnaCras.edu', 28165101),
(29, 'Kenyon', 'Baker', 'Bentley', '10.954.801-4', 'Ac Sem Corp.', 'Suspendisse@PhasellusornareFusce.net', 66804334),
(30, 'Damian', 'Howe', 'Charles', '23.555.482-8', 'Malesuada Vel Corp.', 'dictum.eu.placerat@Aenean.co.uk', 82818840),
(31, 'Abdul', 'Garrett', 'Morgan', '27.987.462-5', 'Sem Corp.', 'ac.mattis@tinciduntdui.net', 93315406),
(32, 'Jameson', 'Albert', 'Foster', '29.555.773-7', 'In Foundation', 'cursus.a.enim@sedtortor.edu', 92819210),
(33, 'Pearl', 'Goodman', 'Cook', '45.107.876-3', 'Velit Eu Institute', 'parturient@bibendum.ca', 49858826),
(34, 'Ainsley', 'Small', 'Ratliff', '40.661.087-K', 'A Dui Cras Incorporated', 'erat@Nuncac.com', 89000195),
(35, 'Maris', 'Irwin', 'Davenport', '42.057.876-8', 'Mollis Phasellus Libero Ltd', 'arcu@sapienNuncpulvinar.com', 86789238),
(36, 'Cooper', 'Nichols', 'Obrien', '20.265.391-K', 'Orci Quis Lectus PC', 'molestie.in.tempus@natoque.net', 90603897),
(37, 'Nathaniel', 'Lara', 'Conley', '37.737.063-5', 'Nulla Ante Iaculis PC', 'diam.Sed@ornare.co.uk', 12531345),
(38, 'Herman', 'Noble', 'Hardin', '38.945.642-K', 'Nulla Tempor Augue Corp.', 'Maecenas.malesuada@ac.ca', 68557269),
(39, 'Deacon', 'Bass', 'Rojas', '36.301.219-1', 'Non Feugiat Nec Institute', 'Suspendisse.ac.metus@sitametdiam.co.uk', 64229744),
(40, 'Simone', 'Calderon', 'Simon', '50.031.524-5', 'At Auctor Ullamcorper Consulting', 'nec.orci.Donec@posuere.net', 15451512),
(41, 'Kai', 'Farmer', 'Berry', '31.475.159-0', 'Tincidunt Nunc Corp.', 'amet@fermentummetus.ca', 18379118),
(42, 'Quail', 'Sears', 'Randall', '31.724.809-1', 'Ridiculus Mus Donec LLC', 'elit.Curabitur@nasceturridiculus.ca', 63517688),
(43, 'Naomi', 'Brady', 'Quinn', '35.364.885-3', 'Vulputate Ullamcorper Magna Ltd', 'vestibulum.lorem.sit@dictummi.net', 59036603),
(44, 'Kareem', 'Mcleod', 'Craig', '13.318.629-8', 'Nascetur Inc.', 'molestie.sodales@Nuncsed.edu', 12273095),
(45, 'Aline', 'Adams', 'Christian', '28.380.211-6', 'Nibh Enim Incorporated', 'habitant@estmollis.edu', 41327160),
(46, 'Aphrodite', 'Boyle', 'Tyson', '13.090.171-9', 'Ante Corp.', 'gravida.Praesent@ac.co.uk', 18882948),
(47, 'Tasha', 'Bruce', 'Dorsey', '9.313.139-8', 'Massa Lobortis LLP', 'Suspendisse.ac@egetlacus.com', 49936893),
(48, 'Imogene', 'Dixon', 'Weiss', '34.723.369-2', 'Dignissim Lacus Aliquam Limited', 'vitae.purus@massanon.net', 31603646),
(49, 'Candace', 'Morris', 'Rojas', '50.307.666-7', 'A Institute', 'risus@cursusluctus.co.uk', 18829120),
(50, 'Hilda', 'Benton', 'Erickson', '48.085.341-5', 'Augue Eu LLC', 'a@purusmauris.edu', 58359537),
(51, 'Iona', 'Dillard', 'Gillespie', '19.492.066-0', 'Montes Nascetur Ridiculus Corp.', 'Fusce.feugiat.Lorem@ullamcorpernislarcu.ca', 97181708),
(52, 'Quyn', 'Barrera', 'Santiago', '28.862.445-3', 'Hendrerit A Foundation', 'auctor.nunc.nulla@ipsumCurabiturconsequat.edu', 95289326),
(53, 'Zane', 'Collins', 'Sharp', '9.928.895-7', 'Non Feugiat Nec Limited', 'malesuada.malesuada.Integer@adipiscingMauris.net', 54886768),
(54, 'Olga', 'Larson', 'Elliott', '20.216.378-5', 'Dapibus Id Industries', 'eu.nulla.at@magna.co.uk', 56737846),
(55, 'Kuame', 'Clemons', 'Berger', '15.938.043-2', 'Aliquet LLP', 'Etiam.gravida.molestie@famesacturpis.ca', 98064348),
(56, 'Alma', 'Jefferson', 'Marquez', '14.907.334-5', 'In Corporation', 'at.fringilla@nulla.net', 80696591),
(57, 'Brock', 'Ayers', 'Hogan', '13.171.173-5', 'Lacinia Mattis Incorporated', 'dolor@lorem.co.uk', 69672367),
(58, 'Lacota', 'Robertson', 'Hebert', '24.930.065-9', 'Purus Duis Elementum LLC', 'montes@ridiculusmus.net', 25799435),
(59, 'Xandra', 'Pate', 'Dale', '14.008.128-0', 'Volutpat Nulla Facilisis LLC', 'Proin.dolor.Nulla@acturpisegestas.net', 31101230),
(60, 'Karyn', 'Levy', 'Stout', '12.221.409-5', 'Sem Elit Foundation', 'erat.volutpat.Nulla@nasceturridiculusmus.net', 68000102),
(61, 'Shoshana', 'Mcconnell', 'Riddle', '7.516.248-0', 'Dictum Eu Placerat Limited', 'magnis.dis.parturient@quamPellentesquehabitant.ca', 44815232),
(62, 'Kevyn', 'Ortega', 'Bullock', '41.822.927-6', 'Iaculis Lacus Incorporated', 'Cras@gravidanon.net', 58813146),
(63, 'Tanya', 'Owens', 'Monroe', '49.248.911-5', 'Torquent Foundation', 'eget.nisi@necurna.edu', 93175844),
(64, 'Deacon', 'Phelps', 'Hensley', '46.759.308-0', 'Lacus Etiam Ltd', 'velit.eu.sem@ante.net', 54313257),
(65, 'Adara', 'William', 'Lester', '8.573.762-7', 'Eu Odio Tristique Company', 'magna.Duis@Infaucibus.co.uk', 78769836),
(66, 'Martin', 'Steele', 'Odom', '36.935.938-K', 'Diam Lorem Consulting', 'sed.dui.Fusce@auguescelerisquemollis.co.uk', 79394339),
(67, 'Iola', 'Delaney', 'Mcfarland', '11.869.581-K', 'Orci Sem LLP', 'eget.massa@etmalesuada.com', 82320731),
(68, 'Ginger', 'Bryan', 'White', '12.108.475-9', 'Tempus Corp.', 'condimentum@arcuVestibulum.ca', 33615835),
(69, 'Oprah', 'Barber', 'Cummings', '24.511.852-K', 'Sapien Corporation', 'erat.in@malesuadaut.ca', 75847186),
(70, 'Kirk', 'Nicholson', 'Noel', '21.205.808-4', 'Est Ac Industries', 'fames.ac.turpis@lobortis.edu', 19029771),
(71, 'Echo', 'Ingram', 'Berg', '28.412.723-4', 'Quisque Consulting', 'iaculis@convalliserateget.com', 86134665),
(72, 'Veronica', 'Sellers', 'Pearson', '40.414.438-3', 'Nulla Aliquet Foundation', 'Morbi@Aliquamultrices.com', 62134306),
(73, 'Amena', 'Mcguire', 'Mayer', '36.129.184-0', 'Egestas Incorporated', 'lorem.tristique@Donec.co.uk', 26334024),
(74, 'Olga', 'Hickman', 'Newman', '6.306.483-1', 'Aliquet Molestie Tellus Company', 'hymenaeos@tinciduntvehicula.co.uk', 24038095),
(75, 'Karleigh', 'Nolan', 'Mcclure', '34.438.288-3', 'Lorem Eget Industries', 'nunc.risus@eget.edu', 18249090),
(76, 'Jasmine', 'Barton', 'Maldonado', '47.322.098-9', 'Neque Et Limited', 'interdum.Nunc@quispede.com', 96365303),
(77, 'Bradley', 'Mills', 'Acevedo', '17.996.909-2', 'Vehicula Et Rutrum Corp.', 'sapien.Cras@ligula.co.uk', 25205854),
(78, 'Wesley', 'Farley', 'Combs', '41.135.252-8', 'Ante Nunc Company', 'Nullam@loremipsum.edu', 37762867),
(79, 'Cassady', 'Tyson', 'Hogan', '19.362.834-6', 'Vivamus Non Corp.', 'tellus@Fuscefermentumfermentum.co.uk', 82591599),
(80, 'Leilani', 'Richards', 'Baxter', '48.120.907-2', 'Mollis Limited', 'lorem@vestibulum.edu', 79477440),
(81, 'Harper', 'Kent', 'Best', '5.907.842-9', 'Arcu Industries', 'Quisque.varius@Ut.co.uk', 13220697),
(82, 'Arden', 'Oconnor', 'Becker', '40.636.135-7', 'Non Luctus Sit Foundation', 'et@egetipsumDonec.org', 98922947),
(83, 'Zoe', 'Knapp', 'Santiago', '48.751.601-5', 'Justo Ltd', 'odio.auctor@Quisqueporttitoreros.org', 20753971),
(84, 'Kelly', 'King', 'Good', '44.752.224-1', 'Et Corp.', 'faucibus.leo.in@tinciduntcongue.ca', 20478188),
(85, 'Iliana', 'Avery', 'Thornton', '48.986.652-8', 'Sit Institute', 'Fusce.mi.lorem@turpis.co.uk', 66951287),
(86, 'Wylie', 'Dillon', 'Kerr', '26.138.398-5', 'Auctor Nunc Nulla Corporation', 'sagittis@estarcuac.org', 50771787),
(87, 'Charissa', 'Wells', 'Strong', '9.638.946-9', 'Facilisis Facilisis Company', 'leo.Cras.vehicula@antedictum.co.uk', 45275758),
(88, 'Martena', 'Marsh', 'Mcbride', '47.313.236-2', 'Elit Pellentesque A Limited', 'a.purus.Duis@mollis.net', 98628287),
(89, 'Emily', 'Kirby', 'Thompson', '24.082.202-4', 'Natoque Penatibus Company', 'tristique.neque.venenatis@duinec.edu', 62601293),
(90, 'Zachary', 'Sparks', 'Brown', '11.671.021-8', 'Nisi Nibh Lacinia Institute', 'quam@esttemporbibendum.edu', 65212835),
(91, 'Keely', 'Jacobson', 'Watts', '31.354.814-7', 'Orci Quis Lectus Ltd', 'dolor@aenimSuspendisse.ca', 60376062),
(92, 'Joy', 'Bishop', 'Ramos', '34.950.859-1', 'Ante Iaculis Associates', 'eu.ligula.Aenean@suscipit.edu', 36172351),
(93, 'Walter', 'Blankenship', 'Christensen', '25.654.926-3', 'Consequat Corp.', 'arcu.Morbi.sit@quislectusNullam.net', 75121681),
(94, 'Hiram', 'England', 'Kirby', '49.227.561-1', 'Donec Nibh Corp.', 'enim.commodo@luctusetultrices.co.uk', 90327380),
(95, 'Mallory', 'Collins', 'Freeman', '12.182.633-K', 'Ut Cursus Luctus Limited', 'morbi.tristique@sagittissemper.net', 38269458),
(96, 'Kaitlin', 'Shepherd', 'Waters', '22.630.996-9', 'Vel Convallis Associates', 'porttitor.interdum.Sed@tellusSuspendisse.com', 90540103),
(97, 'Burke', 'Cortez', 'Cochran', '20.884.974-3', 'A Aliquet Vel Institute', 'Nullam.nisl@justo.org', 55898943),
(98, 'Armand', 'Knowles', 'Mcgee', '50.768.636-2', 'Aliquet Magna Corp.', 'quis.diam.Pellentesque@nulla.net', 78785978),
(99, 'Irene', 'Sanchez', 'Morse', '17.532.401-1', 'Id Inc.', 'ac@lacinia.com', 76610153),
(100, 'Xavier', 'Wolfe', 'Salazar', '6.307.092-0', 'Dictum Cursus Consulting', 'ultrices.sit@varius.net', 54022438),
(101, 'Sierra', 'Rowland', 'Sheppard', '23.985.208-4', 'Feugiat Placerat Velit Industries', 'feugiat.non.lobortis@pharetra.ca', 58123444),
(102, 'Stacey', 'Crawford', 'Lowe', '19.337.312-7', 'Habitant Ltd', 'sit.amet@variusultricesmauris.edu', 87195918),
(103, 'Patricia', 'Duncan', 'Macdonald', '46.584.229-6', 'Integer Sem Elit Ltd', 'Proin.mi@dapibus.edu', 21579258);

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `listar`, `agregar`, `editar`, `eliminar`) VALUES
(1, 'Administrador', 1, 1, 1, 1),
(2, 'Usuario', 1, 1, 1, 1),
(3, 'Visita', 1, 1, 1, 1);

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `rol_id`, `rut`, `nombres`, `apellidoP`, `apellidoM`, `username`, `password`, `email`) VALUES
(1, 1, '174212732', 'Maximiliano André', 'Rojas', 'Flores', 'mujd', '1234', 'mujd19@gmail.com'),
(2, 3, '165216325', 'Tomy', 'Rojas', 'Flores', 'tomy', '1234', 'tomy@mail.cl'),
(3, 2, '12345678', 'Juan andres', 'Perez', 'Gonzalez', 'juan', 'juan', 'juan@mail.cl'),
(4, 1, '852136251', 'camila', 'pacheco', 'rios', 'cami', '123', 'cami@mail.cl'),
(5, 3, '123216528', 'Pedro', 'Pablobich', 'Lopez', 'pedro', '123', 'pedro@mail.cl'),
(6, 2, '15241636522', 'Fabian', 'Pozo', 'Ibañez', 'fabian', '123', 'fabian@mail.cl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
