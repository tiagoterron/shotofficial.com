-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 02:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shotofficial_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_albuns`
--

CREATE TABLE `tb_albuns` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` longtext NOT NULL,
  `clicks` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `dt_update` datetime NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_albuns`
--

INSERT INTO `tb_albuns` (`id`, `imagem`, `nome`, `descricao`, `clicks`, `position`, `status`, `dt_update`, `dt_cad`) VALUES
(11, '2_dsc07784_.jpg', 'X-MAS 2011', '', 677, 2, 'off', '2012-01-30 21:12:25', '2012-01-30 21:12:25'),
(8, 'sam_1149.jpg', 'S.H.O.T. 2012', '', 1025, 3, 'off', '2016-10-10 23:29:12', '2012-01-29 20:51:02'),
(9, '2.jpg', 'S.H.O.T. 2011', '', 707, 1, 'off', '2016-10-21 20:41:02', '2012-01-30 20:35:03'),
(10, 'pqaaaobwd0_-sg0xswlcx5epn4yv8ovua81uxqfioyngqrcvawlk6zytpdfp-zhqtanwrvnmkf8jh_8tzw2xtijvtteam1t1unzqgyfcu3emtttbpmxio3mtsefk-copia.jpg', 'S.H.O.T. LIVE', '', 832, 4, 'off', '2012-02-02 22:45:29', '2012-01-30 20:39:41'),
(12, 'dsc_6709.jpg', 'LIVE Mar 03rd - Grito Rock', '', 531, 0, 'off', '2012-07-22 15:54:02', '2012-03-08 11:17:40'),
(13, '523321_378137915542419_100000386402972_1241634_1388039598_n.jpg', 'LIVE Mar 31th - EGO CLUB', '', 908, 0, 'off', '2012-04-03 16:39:55', '2012-04-03 11:17:24'),
(14, 'banner_final-recovered.jpg', 'S.H.O.T. 2016', '', 242, 0, 'on', '2016-10-21 20:41:49', '2016-10-11 15:29:19'),
(15, '13438864_1290641017627614_292315214847229064_n.jpg', 'Shooting Music Video &acute;This is Our War&acute;', '', 607, 0, 'on', '2016-10-13 01:39:05', '2016-10-13 01:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biografia`
--

CREATE TABLE `tb_biografia` (
  `id` int(11) NOT NULL,
  `titulo_tab` varchar(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` longtext NOT NULL,
  `status` enum('on','off') NOT NULL,
  `dt_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biografia`
--

INSERT INTO `tb_biografia` (`id`, `titulo_tab`, `titulo`, `texto`, `status`, `dt_update`) VALUES
(1, 'BIOGRAPHY', '', '&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family: \'trebuchet ms\', geneva; font-size: x-small;&quot;&gt; &lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;In the year &lt;strong&gt;2010 &lt;/strong&gt;the band began their history, formed by &lt;span style=&quot;color: #c0c0c0;&quot;&gt;&lt;strong&gt;Lenny Terron&lt;/strong&gt;&lt;/span&gt; on the vocals/guitar, &lt;span style=&quot;color: #c0c0c0;&quot;&gt;&lt;strong&gt;Henry Terron&lt;/strong&gt;&lt;/span&gt; on the lead guitar, &lt;span style=&quot;color: #c0c0c0;&quot;&gt;&lt;strong&gt;Guiller Terron&lt;/strong&gt;&lt;/span&gt; on the drums and &lt;span style=&quot;color: #c0c0c0;&quot;&gt;&lt;strong&gt;Traci Klinger&lt;/strong&gt; &lt;/span&gt;on the bass. Trying to get prominence in the scene they were at, the band has always struggled to do their work on an independent way.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Around one year later, in &lt;strong&gt;2011&lt;/strong&gt;, they released their first demo, entitled &lt;strong&gt;Holocaus Riot&lt;/strong&gt;, and after many gigs in &lt;strong&gt;Brazil&lt;/strong&gt;, next year they decided to take another step further: in &lt;strong&gt;2012&lt;/strong&gt; they were moving to &lt;strong&gt;Europe&lt;/strong&gt;, along two friends, the youngest &lt;strong&gt;Terron &lt;/strong&gt;brother, and &lt;strong&gt;Traci\'s &lt;/strong&gt;cousin.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;The first country where they disembarked was &lt;strong&gt;Spain&lt;/strong&gt;. The band arrives there with very few resources, and, after three months, on a struggle for survival, they even had to sell their own instruments.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;With all the finance difficulties and the lack of any stability, the bassist &lt;strong&gt;Traci Klinger &lt;/strong&gt;decided moving back to &lt;strong&gt;Brazil&lt;/strong&gt;, leaving the place to their younger brother, &lt;strong&gt;Mey Terron&lt;/strong&gt;, who had been with them through the highs and lows during those last 2 years.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;After a big destabilization and with no other way out, the four brothers are forced to live on the streets of &lt;strong&gt;Madrid&lt;/strong&gt;.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Past 2 months living on the streets, the band manages to buy an old guitar, and start getting a little stability from playing music on the streets and in the subway of the city. Eating in charity centers to save some money, they then rented a small room and managed enough money to start recording a new EP (that never got to be released).&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;After eight months obtaining good popularity in the streets of &lt;strong&gt;Madrid&lt;/strong&gt;, the four brothers along the friend &lt;strong&gt;Sonny Klinger&lt;/strong&gt;, they manage to attract everyday hundreds of people with those unusual concerts on the street, and get to make some new contacts.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;With the help of a manager who found them on one of those street gigs, the band then gets to play a handful of concerts and to record two EPs in Poland: &quot;&lt;strong&gt;Silent Harm Over Time&lt;/strong&gt;&quot; and &quot;&lt;strong&gt;Crazy System&lt;/strong&gt;&quot;. In the year &lt;strong&gt;2014&lt;/strong&gt;, after releasing these EPs, they decide it\'s time to move out of &lt;strong&gt;Madrid&lt;/strong&gt;. Making their way through cities like &lt;strong&gt;Barcelona&lt;/strong&gt;, &lt;strong&gt;Paris &lt;/strong&gt;and &lt;strong&gt;Frankfurt&lt;/strong&gt;, and always earning their money with playing on the streets, they eventually make it to their final destination, &lt;strong&gt;Berlin&lt;/strong&gt;.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;But when they get there, there\'s yet again the difficulty of starting from point zero. After living and playing their gigs two more months on the streets, they manage to buy an old trailer, where they lived for a while. In that same period, they enter a recording studio one more time, this time to record the acoustic EP, called &quot;&lt;strong&gt;Acoustic S.H.O.T.&lt;/strong&gt;&quot;.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;All in all, six months after their arrival in &lt;strong&gt;Berlin&lt;/strong&gt;, they saved enough cash to start their own small studio, where they recorded their EP &quot;&lt;strong&gt;Watchdogs&lt;/strong&gt;&quot;. It is then that the oldest brother, &lt;strong&gt;Guiller Terron&lt;/strong&gt;, decides to leave the band, to form his own project with the friend &lt;strong&gt;Sonny Klinger&lt;/strong&gt;.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;With &lt;strong&gt;Guiller &lt;/strong&gt;out of the band, and for the first time counting on only 3 members, they make a big change on the lineup: &lt;strong&gt;Lenny &lt;/strong&gt;still on the vocals/guitar, &lt;strong&gt;Henry &lt;/strong&gt;on the bass, and &lt;strong&gt;Mey &lt;/strong&gt;on the drums.&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;But unfortunatelly this line up did not keep for so long, after a couple concerts &lt;strong&gt;Mey Terron&lt;/strong&gt; left the band for personal reasons.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;The next drummer to join to the band was &lt;strong&gt;Frederik Seibel &lt;/strong&gt;from &lt;strong&gt;Germany&lt;/strong&gt;, but he was temporarily in the band just to record a new EP.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;With that new formation they recorded on their studio their newest EP, entitled &amp;ldquo;&lt;strong&gt;BRN FCK&lt;/strong&gt;&amp;ldquo;.&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;End of &lt;strong&gt;2015 Frederik Seibel&lt;/strong&gt; left the band also for personal reasons.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;In &lt;strong&gt;2016&lt;/strong&gt;, the Australian &lt;strong&gt;Geraint Morton&lt;/strong&gt; joined permanently to the band to start working on new stuff for the future.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Since &lt;strong&gt;Geraint Morton&lt;/strong&gt; has joined the band they have taken their music in a different direction. Rather than playing straight and fast all the time they have choosen to add more genres into the mix.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Now you will find elements of not just punk and hardcore but also more traditional metal as well as new metal and even rock and roll. The band are not turning their back on their older material but are just evolving as musicians and are now more capable of playing more intricate styles.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Over the winter of &lt;strong&gt;2016/17 &lt;/strong&gt;the band have been working on all new material that they have been releasing sporadically over the course of 2017. Their new album will be out in &lt;strong&gt;Oct 2017&lt;/strong&gt; and the band have since started playing shows again around Berlin showcasing their new material as well as playing their older songs.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size: small;&quot;&gt;&lt;strong&gt;The band currently is in the studio working on a new album for 2017.&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;To be continued...&lt;/p&gt;', 'on', '2017-06-22 23:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blocked_sessions`
--

CREATE TABLE `tb_blocked_sessions` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `times` int(11) NOT NULL DEFAULT '1',
  `dt_cad` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_country`
--

CREATE TABLE `tb_country` (
  `id` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_country`
--

INSERT INTO `tb_country` (`id`, `name`, `titulo`, `iso3`, `numcode`) VALUES
('AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4),
('AL', 'ALBANIA', 'Albania', 'ALB', 8),
('DZ', 'ALGERIA', 'Algeria', 'DZA', 12),
('AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16),
('AD', 'ANDORRA', 'Andorra', 'AND', 20),
('AO', 'ANGOLA', 'Angola', 'AGO', 24),
('AI', 'ANGUILLA', 'Anguilla', 'AIA', 660),
('AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL),
('AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28),
('AR', 'ARGENTINA', 'Argentina', 'ARG', 32),
('AM', 'ARMENIA', 'Armenia', 'ARM', 51),
('AW', 'ARUBA', 'Aruba', 'ABW', 533),
('AU', 'AUSTRALIA', 'Australia', 'AUS', 36),
('AT', 'AUSTRIA', 'Austria', 'AUT', 40),
('AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31),
('BS', 'BAHAMAS', 'Bahamas', 'BHS', 44),
('BH', 'BAHRAIN', 'Bahrain', 'BHR', 48),
('BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50),
('BB', 'BARBADOS', 'Barbados', 'BRB', 52),
('BY', 'BELARUS', 'Belarus', 'BLR', 112),
('BE', 'BELGIUM', 'Belgium', 'BEL', 56),
('BZ', 'BELIZE', 'Belize', 'BLZ', 84),
('BJ', 'BENIN', 'Benin', 'BEN', 204),
('BM', 'BERMUDA', 'Bermuda', 'BMU', 60),
('BT', 'BHUTAN', 'Bhutan', 'BTN', 64),
('BO', 'BOLIVIA', 'Bolivia', 'BOL', 68),
('BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70),
('BW', 'BOTSWANA', 'Botswana', 'BWA', 72),
('BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL),
('BR', 'BRAZIL', 'Brazil', 'BRA', 76),
('IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL),
('BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96),
('BG', 'BULGARIA', 'Bulgaria', 'BGR', 100),
('BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854),
('BI', 'BURUNDI', 'Burundi', 'BDI', 108),
('KH', 'CAMBODIA', 'Cambodia', 'KHM', 116),
('CM', 'CAMEROON', 'Cameroon', 'CMR', 120),
('CA', 'CANADA', 'Canada', 'CAN', 124),
('CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132),
('KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136),
('CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140),
('TD', 'CHAD', 'Chad', 'TCD', 148),
('CL', 'CHILE', 'Chile', 'CHL', 152),
('CN', 'CHINA', 'China', 'CHN', 156),
('CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL),
('CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL),
('CO', 'COLOMBIA', 'Colombia', 'COL', 170),
('KM', 'COMOROS', 'Comoros', 'COM', 174),
('CG', 'CONGO', 'Congo', 'COG', 178),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180),
('CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184),
('CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188),
('CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384),
('HR', 'CROATIA', 'Croatia', 'HRV', 191),
('CU', 'CUBA', 'Cuba', 'CUB', 192),
('CY', 'CYPRUS', 'Cyprus', 'CYP', 196),
('CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203),
('DK', 'DENMARK', 'Denmark', 'DNK', 208),
('DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262),
('DM', 'DOMINICA', 'Dominica', 'DMA', 212),
('DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214),
('EC', 'ECUADOR', 'Ecuador', 'ECU', 218),
('EG', 'EGYPT', 'Egypt', 'EGY', 818),
('SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222),
('GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226),
('ER', 'ERITREA', 'Eritrea', 'ERI', 232),
('EE', 'ESTONIA', 'Estonia', 'EST', 233),
('ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231),
('FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238),
('FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234),
('FJ', 'FIJI', 'Fiji', 'FJI', 242),
('FI', 'FINLAND', 'Finland', 'FIN', 246),
('FR', 'FRANCE', 'France', 'FRA', 250),
('GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254),
('PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258),
('TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL),
('GA', 'GABON', 'Gabon', 'GAB', 266),
('GM', 'GAMBIA', 'Gambia', 'GMB', 270),
('GE', 'GEORGIA', 'Georgia', 'GEO', 268),
('DE', 'GERMANY', 'Germany', 'DEU', 276),
('GH', 'GHANA', 'Ghana', 'GHA', 288),
('GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292),
('GR', 'GREECE', 'Greece', 'GRC', 300),
('GL', 'GREENLAND', 'Greenland', 'GRL', 304),
('GD', 'GRENADA', 'Grenada', 'GRD', 308),
('GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312),
('GU', 'GUAM', 'Guam', 'GUM', 316),
('GT', 'GUATEMALA', 'Guatemala', 'GTM', 320),
('GN', 'GUINEA', 'Guinea', 'GIN', 324),
('GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624),
('GY', 'GUYANA', 'Guyana', 'GUY', 328),
('HT', 'HAITI', 'Haiti', 'HTI', 332),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL),
('VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336),
('HN', 'HONDURAS', 'Honduras', 'HND', 340),
('HK', 'HONG KONG', 'Hong Kong', 'HKG', 344),
('HU', 'HUNGARY', 'Hungary', 'HUN', 348),
('IS', 'ICELAND', 'Iceland', 'ISL', 352),
('IN', 'INDIA', 'India', 'IND', 356),
('ID', 'INDONESIA', 'Indonesia', 'IDN', 360),
('IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364),
('IQ', 'IRAQ', 'Iraq', 'IRQ', 368),
('IE', 'IRELAND', 'Ireland', 'IRL', 372),
('IL', 'ISRAEL', 'Israel', 'ISR', 376),
('IT', 'ITALY', 'Italy', 'ITA', 380),
('JM', 'JAMAICA', 'Jamaica', 'JAM', 388),
('JP', 'JAPAN', 'Japan', 'JPN', 392),
('JO', 'JORDAN', 'Jordan', 'JOR', 400),
('KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398),
('KE', 'KENYA', 'Kenya', 'KEN', 404),
('KI', 'KIRIBATI', 'Kiribati', 'KIR', 296),
('KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408),
('KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410),
('KW', 'KUWAIT', 'Kuwait', 'KWT', 414),
('KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417),
('LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418),
('LV', 'LATVIA', 'Latvia', 'LVA', 428),
('LB', 'LEBANON', 'Lebanon', 'LBN', 422),
('LS', 'LESOTHO', 'Lesotho', 'LSO', 426),
('LR', 'LIBERIA', 'Liberia', 'LBR', 430),
('LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434),
('LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438),
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442),
('MO', 'MACAO', 'Macao', 'MAC', 446),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807),
('MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450),
('MW', 'MALAWI', 'Malawi', 'MWI', 454),
('MY', 'MALAYSIA', 'Malaysia', 'MYS', 458),
('MV', 'MALDIVES', 'Maldives', 'MDV', 462),
('ML', 'MALI', 'Mali', 'MLI', 466),
('MT', 'MALTA', 'Malta', 'MLT', 470),
('MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584),
('MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474),
('MR', 'MAURITANIA', 'Mauritania', 'MRT', 478),
('MU', 'MAURITIUS', 'Mauritius', 'MUS', 480),
('YT', 'MAYOTTE', 'Mayotte', NULL, NULL),
('MX', 'MEXICO', 'Mexico', 'MEX', 484),
('FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583),
('MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498),
('MC', 'MONACO', 'Monaco', 'MCO', 492),
('MN', 'MONGOLIA', 'Mongolia', 'MNG', 496),
('MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500),
('MA', 'MOROCCO', 'Morocco', 'MAR', 504),
('MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508),
('MM', 'MYANMAR', 'Myanmar', 'MMR', 104),
('NA', 'NAMIBIA', 'Namibia', 'NAM', 516),
('NR', 'NAURU', 'Nauru', 'NRU', 520),
('NP', 'NEPAL', 'Nepal', 'NPL', 524),
('NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528),
('AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530),
('NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540),
('NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554),
('NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558),
('NE', 'NIGER', 'Niger', 'NER', 562),
('NG', 'NIGERIA', 'Nigeria', 'NGA', 566),
('NU', 'NIUE', 'Niue', 'NIU', 570),
('NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574),
('MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580),
('NO', 'NORWAY', 'Norway', 'NOR', 578),
('OM', 'OMAN', 'Oman', 'OMN', 512),
('PK', 'PAKISTAN', 'Pakistan', 'PAK', 586),
('PW', 'PALAU', 'Palau', 'PLW', 585),
('PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL),
('PA', 'PANAMA', 'Panama', 'PAN', 591),
('PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598),
('PY', 'PARAGUAY', 'Paraguay', 'PRY', 600),
('PE', 'PERU', 'Peru', 'PER', 604),
('PH', 'PHILIPPINES', 'Philippines', 'PHL', 608),
('PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612),
('PL', 'POLAND', 'Poland', 'POL', 616),
('PT', 'PORTUGAL', 'Portugal', 'PRT', 620),
('PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630),
('QA', 'QATAR', 'Qatar', 'QAT', 634),
('RE', 'REUNION', 'Reunion', 'REU', 638),
('RO', 'ROMANIA', 'Romania', 'ROM', 642),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('RW', 'RWANDA', 'Rwanda', 'RWA', 646),
('SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654),
('KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659),
('LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662),
('PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666),
('VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670),
('WS', 'SAMOA', 'Samoa', 'WSM', 882),
('SM', 'SAN MARINO', 'San Marino', 'SMR', 674),
('ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678),
('SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682),
('SN', 'SENEGAL', 'Senegal', 'SEN', 686),
('CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL),
('SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690),
('SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694),
('SG', 'SINGAPORE', 'Singapore', 'SGP', 702),
('SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703),
('SI', 'SLOVENIA', 'Slovenia', 'SVN', 705),
('SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90),
('SO', 'SOMALIA', 'Somalia', 'SOM', 706),
('ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
('ES', 'SPAIN', 'Spain', 'ESP', 724),
('LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144),
('SD', 'SUDAN', 'Sudan', 'SDN', 736),
('SR', 'SURINAME', 'Suriname', 'SUR', 740),
('SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744),
('SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748),
('SE', 'SWEDEN', 'Sweden', 'SWE', 752),
('CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756),
('SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760),
('TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158),
('TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762),
('TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834),
('TH', 'THAILAND', 'Thailand', 'THA', 764),
('TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL),
('TG', 'TOGO', 'Togo', 'TGO', 768),
('TK', 'TOKELAU', 'Tokelau', 'TKL', 772),
('TO', 'TONGA', 'Tonga', 'TON', 776),
('TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780),
('TN', 'TUNISIA', 'Tunisia', 'TUN', 788),
('TR', 'TURKEY', 'Turkey', 'TUR', 792),
('TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795),
('TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796),
('TV', 'TUVALU', 'Tuvalu', 'TUV', 798),
('UG', 'UGANDA', 'Uganda', 'UGA', 800),
('UA', 'UKRAINE', 'Ukraine', 'UKR', 804),
('AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784),
('GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826),
('US', 'UNITED STATES', 'United States', 'USA', 840),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL),
('UY', 'URUGUAY', 'Uruguay', 'URY', 858),
('UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860),
('VU', 'VANUATU', 'Vanuatu', 'VUT', 548),
('VE', 'VENEZUELA', 'Venezuela', 'VEN', 862),
('VN', 'VIET NAM', 'Viet Nam', 'VNM', 704),
('VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92),
('VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850),
('WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876),
('EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732),
('YE', 'YEMEN', 'Yemen', 'YEM', 887),
('ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894),
('ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716);

-- --------------------------------------------------------

--
-- Table structure for table `tb_discografia`
--

CREATE TABLE `tb_discografia` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `ano` date NOT NULL,
  `gravadora` varchar(200) NOT NULL,
  `descricao` longtext NOT NULL,
  `faixas` longtext NOT NULL,
  `moeda` enum('REAL','DOLAR','EURO','OUTRA') NOT NULL,
  `preco` float NOT NULL,
  `link_compra` text NOT NULL,
  `link_download` text NOT NULL,
  `n_downloads` int(11) NOT NULL DEFAULT '0',
  `status` enum('on','off') NOT NULL,
  `main` enum('Y','N') NOT NULL DEFAULT 'N',
  `dt_update` datetime NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_discografia`
--

INSERT INTO `tb_discografia` (`id`, `imagem`, `titulo`, `ano`, `gravadora`, `descricao`, `faixas`, `moeda`, `preco`, `link_compra`, `link_download`, `n_downloads`, `status`, `main`, `dt_update`, `dt_cad`) VALUES
(1, '127001-holocaust_riot_capa.jpg', 'Holocaust Riot', '2010-09-21', '', '', 'Intro|*|Holocaust Riot|*|One More Time|*|Wake Up|*|Livin\' Lies|*|Dark Way|*|Wicked|*|Shadow\'s Gaze|*|Seventh Night|*|Die Today', 'DOLAR', 10, 'www.amazon.com/Holocaust-Riot/dp/B008OUTVTO/ref=sr_1_3?ie=UTF8&amp;qid=1343253256&amp;sr=8-3&amp;keywords=holocaust+riot', 'http://itunes.apple.com/us/album/holocaust-riot/id547813390', 715, 'on', 'Y', '2017-01-24 13:53:46', '2012-01-22 23:16:10'),
(3, '887229128-crazy_system_shot_cover.jpg', 'Crazy System (EP)', '2014-10-01', 'Independent', '', 'Sick Side|*|Baby Tonight|*|A Song For Our Dreams|*|Believe in Me|*|This is Our War', 'DOLAR', 5, '', 'http://soundcloud.com/shotofficial/sets/crazy-system-ep', 0, 'on', 'N', '2016-11-12 13:25:16', '2016-10-10 23:05:21'),
(4, '887229128-cover.jpg', 'Silent Harm Over Time (EP)', '2014-12-01', 'Independent', '', 'Silent Harm Over Time|*|Im Still Alive|*|Livin&acute; On Desire|*|Suffocation', 'DOLAR', 5, 'http://itunes.apple.com/us/album/silent-harm-over-time-ep/id889611966', 'http://soundcloud.com/shotofficial/sets/silent-harm-over-time-ep', 0, 'on', 'N', '2016-11-12 13:25:10', '2016-10-10 23:09:01'),
(5, '887229128-acoustic_shot_cover_cd.jpg', 'Acoustic S.H.O.T. (EP)', '2015-03-01', 'Independent', '', 'Hey Mama!|*|Believe in Me|*|Spring Melody|*|Give it Up|*|Spring Melody (Drums Version)', 'DOLAR', 5, 'http://itunes.apple.com/de/album/acoustic-s.h.o.t.-ep/id1084918413', 'http://soundcloud.com/shotofficial/sets/acoustic-s-h-o-t-ep', 0, 'on', 'N', '2016-11-12 13:25:04', '2016-10-10 23:13:39'),
(6, '887229128-shot_collection_cover.jpg', 'SHOT Collection', '2015-08-01', 'Independent', '', 'Silent Harm Over Time EP|*|Crazy System EP|*|Acoustic S.H.O.T. EP|*|Watchdogs EP', 'DOLAR', 15, '', '', 0, 'on', 'N', '2016-11-12 13:25:54', '2016-10-10 23:15:42'),
(7, '887229128-watchdogs_cover_shot_ep.jpg', 'Watchdogs (EP)', '2015-06-10', 'Independent', '', 'Watchdogs|*|Love N Hate|*|Scream Loud|*|(You make my) Heart Screaming', 'DOLAR', 5, 'http://itunes.apple.com/us/album/watchdogs-ep/id1084931024', 'http://soundcloud.com/shotofficial/sets/watchdogs-ep', 0, 'on', 'N', '2016-11-12 13:24:53', '2016-10-10 23:18:16'),
(8, '887229128-brn_fck_shot_cover.jpg', 'BRN FCK (EP)', '2016-01-01', 'Independent', '', 'Who Are You|*|Sinners|*|Scream and Jump|*|I Wanna Be Alone|*|Angels|*|Down|*|Make Yourself a Criminal', 'DOLAR', 7, 'http://itunes.apple.com/us/album/brn-fck/id1083164105', 'http://soundcloud.com/shotofficial/sets/brn-fck', 0, 'on', 'N', '2016-11-12 13:27:05', '2016-10-10 23:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_events`
--

CREATE TABLE `tb_events` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `hour_type` enum('AM','PM') NOT NULL,
  `location` varchar(250) NOT NULL,
  `venue` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `value_ticket` float NOT NULL,
  `moeda` enum('REAL','DOLAR','EURO','OUTRA') NOT NULL,
  `country` varchar(2) NOT NULL,
  `buy_ticket` text NOT NULL,
  `clicks` int(11) NOT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_events`
--

INSERT INTO `tb_events` (`id`, `date`, `hour_type`, `location`, `venue`, `description`, `value_ticket`, `moeda`, `country`, `buy_ticket`, `clicks`, `status`, `dt_cad`) VALUES
(4, '2012-03-17 18:00:00', 'PM', 'Paraguacu Paulista, SP', 'Concha Acustica', '', 0, 'REAL', 'BR', '', 0, 'on', '2012-01-30 23:53:47'),
(5, '2012-03-31 22:00:00', 'PM', 'Sao Paulo, SP', 'EGO CLUB', '', 20, 'REAL', 'BR', '', 0, 'on', '2012-02-14 04:41:22'),
(30, '2017-05-27 06:00:00', 'PM', 'Berlin', 'Private Club', '', 7, 'EURO', 'DE', 'http://www.sph-bandcontest.de/shows/details/1640', 0, 'on', '2017-02-10 15:12:01'),
(6, '2012-03-24 21:00:00', 'PM', 'Sorocaba, SP', 'Dark House (Sound 2)', '', 5, 'REAL', 'BR', '', 0, 'on', '2012-02-15 10:11:09'),
(8, '2012-03-03 20:00:00', 'PM', 'Votorantim, SP', 'Grito Rock', '', 0, 'REAL', 'BR', 'http://tnb.art.br/oportunidades/grito-rock-america-latina/grito-rock-2012-votorantim/', 0, 'on', '2012-02-15 11:51:24'),
(9, '2012-02-18 22:00:00', 'PM', 'Sorocaba, SP', 'Tequilas Bar', '', 5, 'REAL', 'BR', '', 0, 'on', '2012-02-15 11:59:21'),
(10, '2012-02-20 22:00:00', 'PM', 'Votorantim, SP', 'Carrocao Rock Bar', '', 5, 'REAL', 'BR', '', 0, 'on', '2012-02-17 06:09:47'),
(15, '2012-07-13 09:00:00', 'PM', 'Sorocaba, SP', 'Sound 2', '', 5, 'REAL', 'BR', '', 0, 'on', '2012-07-01 11:55:52'),
(13, '2012-04-30 21:00:00', 'PM', 'Votorantim, SP', 'Carrocao Rock Bar', '', 5, 'REAL', 'BR', '', 0, 'on', '2012-04-24 09:34:40'),
(14, '2012-07-13 03:00:00', 'PM', 'Votorantim, SP', 'TV Votorantim', '', 0, '', 'BR', '', 0, 'on', '2012-07-01 11:55:17'),
(12, '2012-08-11 00:00:00', 'AM', 'Votorantim, SP', 'Green Valley Sleaze Festival', '', 0, '', 'BR', '', 0, 'on', '2012-03-28 13:04:36'),
(16, '2013-08-20 00:00:00', 'PM', 'Augustow', 'Hometown', '', 0, 'EURO', 'PL', '', 0, 'on', '2016-10-10 23:36:06'),
(17, '2013-09-05 10:00:00', 'PM', 'Bialystok', 'Bialystok', '', 0, 'EURO', 'PL', '', 0, 'on', '2016-10-10 23:37:17'),
(18, '2013-07-27 10:00:00', 'PM', 'Madrid', 'We Rock', '', 7, 'EURO', 'ES', '', 0, 'on', '2016-10-10 23:38:55'),
(19, '2015-08-22 10:00:00', 'PM', 'Berlin', 'Wild At Heart', '', 6, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:40:40'),
(20, '2016-02-04 10:00:00', 'PM', 'Berlin', 'Bi Nuu', '', 12, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:41:38'),
(21, '2016-03-05 11:00:00', 'PM', 'Berlin', 'Backdoor Studio Party', '', 3, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:42:19'),
(22, '2016-04-01 10:00:00', 'PM', 'Berlin', 'Zasch Club', '', 4, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:42:46'),
(23, '2016-06-04 11:00:00', 'PM', 'Berlin', 'Backdoor Studio Party', '', 3, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:43:24'),
(24, '2016-06-11 06:00:00', 'PM', 'Osnabr&uuml;ck', 'Fairytale Festival', '', 0, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:44:07'),
(25, '2016-07-09 10:00:00', 'PM', 'Berlin', 'Red Star Festival', '', 0, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:45:06'),
(26, '2016-05-20 08:00:00', 'PM', 'Berlin', 'SO36', '', 12, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:45:41'),
(27, '2016-08-27 10:00:00', 'PM', 'Berlin', 'Tiefgrund', '', 5, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:47:09'),
(28, '2015-04-04 08:00:00', 'PM', 'Berlin', 'Comet Club', '', 5, 'EURO', 'DE', '', 0, 'on', '2016-10-10 23:48:14'),
(31, '2017-07-08 06:00:00', 'PM', 'Berlin', 'Private Club (SPH - Semifinals)', '', 7, 'EURO', 'DE', 'http://www.sph-bandcontest.de/shows/details/1674', 0, 'on', '2017-06-05 15:59:02'),
(32, '2017-06-17 08:00:00', 'PM', 'Hennigsdorf', 'ROCK IM CONNYS', '', 3, 'EURO', 'DE', 'http://www.facebook.com/events/321230468298134', 0, 'on', '2017-06-12 15:43:22'),
(33, '2017-10-27 08:00:00', 'PM', 'Berlin', 'DRUGSTORE (Album Releasing Party)', '', 0, 'EURO', 'DE', '', 0, 'on', '2017-06-12 15:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fotos`
--

CREATE TABLE `tb_fotos` (
  `id` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `imagem` text NOT NULL,
  `descricao` text NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fotos`
--

INSERT INTO `tb_fotos` (`id`, `id_album`, `imagem`, `descricao`, `dt_cad`) VALUES
(139, 10, 'pqaaacmfvnpdg3o1t4bsvhqpsw32m7tm2vibtsztty7a3nmxwr0btqmhet6enrjefnyxh7pewfqizykdzlcdorfapleam1t1ufohtietpt2cdcg_ugntierz-nkt.jpg', '', '2012-02-02 22:45:29'),
(138, 10, 'sdc12859.jpg', '', '2012-02-02 22:45:29'),
(137, 10, 'sdc12851.jpg', '', '2012-02-02 22:45:29'),
(136, 10, 'sdc12827.jpg', '', '2012-02-02 22:45:29'),
(135, 10, 'sdc12826.jpg', '', '2012-02-02 22:45:29'),
(132, 10, 'sdc12810-copia.jpg', '', '2012-02-02 22:45:29'),
(133, 10, 'sdc12816.jpg', '', '2012-02-02 22:45:29'),
(134, 10, 'sdc12825.jpg', '', '2012-02-02 22:45:29'),
(129, 10, 'sdc12782.jpg', '', '2012-02-02 22:45:29'),
(130, 10, 'sdc12788.jpg', '', '2012-02-02 22:45:29'),
(131, 10, 'sdc12794-copia.jpg', '', '2012-02-02 22:45:29'),
(128, 10, 'pqaaaobwd0_-sg0xswlcx5epn4yv8ovua81uxqfioyngqrcvawlk6zytpdfp-zhqtanwrvnmkf8jh_8tzw2xtijvtteam1t1unzqgyfcu3emtttbpmxio3mtsefk-copia.jpg', '', '2012-02-02 22:45:29'),
(126, 10, '313588_136765419757381_100002717711142_139277_358438397_n.jpg', '', '2012-02-02 22:45:29'),
(766, 9, '5.jpg', '', '2016-10-21 20:41:02'),
(127, 10, 'pqaaags062faptcmxo_fri4w044sxwl4inwbqxsptvyozigefne7p155w3yhbb4um1ikatoifdcnlszusahdpb4snmwam1t1ucxb2skj1vnbcrtdcv5rwr7aaagk-copia.jpg', '', '2012-02-02 22:45:29'),
(765, 9, '4.jpg', '', '2016-10-21 20:41:02'),
(764, 9, '3.jpg', '', '2016-10-21 20:41:02'),
(763, 9, '2.jpg', '', '2016-10-21 20:41:02'),
(762, 9, '1.jpg', '', '2016-10-21 20:41:02'),
(741, 8, 'sam_1415555555.jpg', '', '2016-10-10 23:29:12'),
(740, 8, 'sam_1310_2.jpg', '', '2016-10-10 23:29:12'),
(739, 8, 'sam_1170.jpg', '', '2016-10-10 23:29:12'),
(738, 8, 'sam_1173.jpg', '', '2016-10-10 23:29:12'),
(125, 10, '303725_204036782998001_100001750423878_443393_645122916_n.jpg', '', '2012-02-02 22:45:29'),
(124, 10, '302501_204036839664662_100001750423878_443395_632889842_n.jpg', '', '2012-02-02 22:45:29'),
(106, 11, '2_dsc07784_.jpg', '', '2012-01-30 21:12:25'),
(107, 11, '1_dsc07830_.jpg', '', '2012-01-30 21:12:25'),
(737, 8, 'sam_1149.jpg', 'S.H.O.T. 2012', '2016-10-10 23:29:12'),
(736, 12, 'dsc_6710.jpg', '', '2012-07-22 15:54:02'),
(735, 12, 'dsc_6709.jpg', '', '2012-07-22 15:54:02'),
(734, 12, 'dsc_6704.jpg', '', '2012-07-22 15:54:02'),
(733, 12, 'dsc_6700.jpg', '', '2012-07-22 15:54:02'),
(732, 12, 'dsc_6695.jpg', '', '2012-07-22 15:54:02'),
(731, 12, 'dsc_6694.jpg', '', '2012-07-22 15:54:02'),
(730, 12, 'dsc_6693.jpg', '', '2012-07-22 15:54:02'),
(729, 12, 'dsc_6692.jpg', '', '2012-07-22 15:54:02'),
(728, 12, 'dsc_6689.jpg', '', '2012-07-22 15:54:02'),
(727, 12, 'dsc_6687.jpg', '', '2012-07-22 15:54:02'),
(726, 12, 'dsc_6672.jpg', '', '2012-07-22 15:54:02'),
(725, 12, 'dsc_6671.jpg', '', '2012-07-22 15:54:02'),
(724, 12, 'dsc_6669.jpg', '', '2012-07-22 15:54:02'),
(723, 12, 'dsc_6666.jpg', '', '2012-07-22 15:54:02'),
(722, 12, 'dsc_6665.jpg', '', '2012-07-22 15:54:02'),
(721, 12, 'dsc_6663.jpg', '', '2012-07-22 15:54:02'),
(720, 12, 'dsc_6661.jpg', '', '2012-07-22 15:54:02'),
(719, 12, 'dsc_6657.jpg', '', '2012-07-22 15:54:02'),
(718, 12, 'dsc_6655.jpg', '', '2012-07-22 15:54:02'),
(717, 12, 'dsc_6654.jpg', '', '2012-07-22 15:54:02'),
(716, 12, 'dsc_6650.jpg', '', '2012-07-22 15:54:02'),
(715, 12, 'dsc_6647.jpg', '', '2012-07-22 15:54:02'),
(714, 12, 'dsc_6640.jpg', '', '2012-07-22 15:54:02'),
(713, 12, 'dsc_6639.jpg', '', '2012-07-22 15:54:02'),
(712, 12, 'dsc_6638.jpg', '', '2012-07-22 15:54:02'),
(711, 12, 'dsc_6637.jpg', '', '2012-07-22 15:54:02'),
(710, 12, 'dsc_6632.jpg', '', '2012-07-22 15:54:02'),
(709, 12, 'dsc_6627.jpg', '', '2012-07-22 15:54:02'),
(708, 12, 'dsc_6625.jpg', '', '2012-07-22 15:54:02'),
(707, 12, 'dsc_6623.jpg', '', '2012-07-22 15:54:02'),
(706, 12, 'dsc_6620.jpg', '', '2012-07-22 15:54:02'),
(705, 12, 'dsc_6613.jpg', '', '2012-07-22 15:54:02'),
(704, 12, 'dsc_6612.jpg', '', '2012-07-22 15:54:02'),
(703, 12, 'dsc_6611.jpg', '', '2012-07-22 15:54:02'),
(702, 12, 'dsc_6609.jpg', '', '2012-07-22 15:54:02'),
(701, 12, 'dsc_6604.jpg', '', '2012-07-22 15:54:02'),
(700, 12, 'dsc_6601.jpg', '', '2012-07-22 15:54:02'),
(699, 12, 'dsc_6600.jpg', '', '2012-07-22 15:54:02'),
(698, 12, 'dsc_6599.jpg', '', '2012-07-22 15:54:02'),
(697, 12, 'dsc_6597.jpg', '', '2012-07-22 15:54:02'),
(696, 12, 'dsc_6590.jpg', '', '2012-07-22 15:54:02'),
(695, 12, 'dsc_6587.jpg', '', '2012-07-22 15:54:02'),
(694, 12, 'dsc_6582.jpg', '', '2012-07-22 15:54:02'),
(564, 13, '543015_378142795541931_100000386402972_1241648_1204074649_n.jpg', '', '2012-04-03 16:39:55'),
(563, 13, '543015_378142782208599_100000386402972_1241646_1324485640_n.jpg', '', '2012-04-03 16:39:55'),
(562, 13, '540844_378138968875647_100000386402972_1241640_1364016140_n.jpg', '', '2012-04-03 16:39:55'),
(560, 13, '540844_378138955542315_100000386402972_1241638_950669115_n.jpg', '', '2012-04-03 16:39:55'),
(561, 13, '540844_378138962208981_100000386402972_1241639_595345887_n.jpg', '', '2012-04-03 16:39:55'),
(559, 13, '540844_378138945542316_414500607_n.jpg', '', '2012-04-03 16:39:55'),
(558, 13, '540844_378138938875650_100000386402972_1241636_785027395_n.jpg', '', '2012-04-03 16:39:55'),
(557, 13, '523321_378137925542418_100000386402972_1241635_1870759795_n.jpg', '', '2012-04-03 16:39:55'),
(556, 13, '523321_378137915542419_100000386402972_1241634_1388039598_n.jpg', '', '2012-04-03 16:39:55'),
(555, 13, '523321_378137912209086_100000386402972_1241633_912432829_n.jpg', '', '2012-04-03 16:39:55'),
(553, 13, '523321_378137892209088_100000386402972_1241631_639386838_n.jpg', '', '2012-04-03 16:39:55'),
(554, 13, '523321_378137905542420_100000386402972_1241632_2127385600_n.jpg', '', '2012-04-03 16:39:55'),
(552, 13, '547829_378137032209174_1053848072_n.jpg', '', '2012-04-03 16:39:55'),
(551, 13, '547829_378137022209175_100000386402972_1241629_1334610195_n.jpg', '', '2012-04-03 16:39:55'),
(550, 13, '547829_378137012209176_100000386402972_1241628_1634854160_n.jpg', '', '2012-04-03 16:39:55'),
(549, 13, '547829_378137005542510_100000386402972_1241627_1046383778_n.jpg', '', '2012-04-03 16:39:55'),
(548, 13, '547829_378136995542511_100000386402972_1241626_2097734996_n.jpg', '', '2012-04-03 16:39:55'),
(547, 13, '549227_378135982209279_100000386402972_1241624_1237224807_n.jpg', '', '2012-04-03 16:39:55'),
(546, 13, '549227_378135948875949_100000386402972_1241620_925714493_n.jpg', '', '2012-04-03 16:39:55'),
(742, 8, 'new.jpg', '', '2016-10-10 23:29:12'),
(767, 14, 'banner_final-recovered.jpg', '', '2016-10-21 20:41:49'),
(768, 14, 'shot2016.jpg', '', '2016-10-21 20:41:49'),
(759, 15, '13620981_1290640980960951_6538198038181420653_n.jpg', '', '2016-10-13 01:39:05'),
(757, 15, '13592707_1290641250960924_8000153453607246769_n.jpg', '', '2016-10-13 01:39:05'),
(758, 15, '13620724_1290641107627605_917081675788167583_n.jpg', '', '2016-10-13 01:39:05'),
(756, 15, '13590374_1290641004294282_2519923642278053638_n.jpg', '', '2016-10-13 01:39:05'),
(755, 15, '13438864_1290641017627614_292315214847229064_n.jpg', '', '2016-10-13 01:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_membros`
--

CREATE TABLE `tb_membros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(200) NOT NULL,
  `instrumento` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `twitter` text NOT NULL,
  `status` enum('on','off') NOT NULL,
  `position` int(11) NOT NULL,
  `dt_update` datetime NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_membros`
--

INSERT INTO `tb_membros` (`id`, `imagem`, `clicks`, `nome`, `instrumento`, `message`, `twitter`, `status`, `position`, `dt_update`, `dt_cad`) VALUES
(1, '127001-henry-terron.jpg', 0, 'Henry Terron', 'Guitarz', '&lt;p&gt;hehe&lt;/p&gt;', 'http://www.facebook.com/henryterron', 'on', 2, '2012-02-02 20:37:29', '2012-01-23 16:46:45'),
(4, '127001-guiller-terron.jpg', 0, 'Guiller Terron', 'Drumz', '', '', 'on', 4, '2012-02-02 20:41:35', '2012-01-23 16:56:08'),
(2, '127001-lenny-terron.jpg', 0, 'Lenny Terron', 'Vox/Guitarz', '&lt;p&gt;veio loko&lt;/p&gt;', 'http://www.facebook.com/profile.php?id=100001651005592', 'on', 1, '2012-02-02 20:34:11', '2012-01-23 16:52:49'),
(3, '127001-traci-klinger.jpg', 0, 'Traci Klinger', 'Bass', '', 'http://www.facebook.com/profile.php?id=100001995374021', 'on', 3, '2012-02-02 20:38:05', '2012-01-23 16:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_newsletter`
--

CREATE TABLE `tb_newsletter` (
  `id` int(11) NOT NULL,
  `t_name` varchar(100) DEFAULT NULL,
  `t_email` varchar(100) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dt_cad` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_newsletter`
--

INSERT INTO `tb_newsletter` (`id`, `t_name`, `t_email`, `status`, `dt_cad`) VALUES
(7, 'Gabriel', 'gabriel_sleaze@live.com', 'Y', '2012-02-03 12:20:43'),
(6, 'Igors', 'BiGASsSiK@gmail.com', 'Y', '2012-02-03 10:57:01'),
(5, 'Henry Terron', 'henry@shotofficial.com', 'Y', '2012-02-02 19:49:54'),
(8, 'jean leroux', 'jean-leroux@hotmail.com', 'Y', '2012-02-03 12:37:51'),
(9, 'roxy', 'glamnroll@yahoo.com', 'Y', '2012-02-03 13:09:47'),
(10, 'Nikk&Atilde;&para; KRAZZY', 'ni.bizouard@orange.fr', 'Y', '2012-02-03 14:01:39'),
(11, 'James Schguk', 'Vince-Neil@live.de', 'Y', '2012-02-04 07:44:37'),
(12, 'lily.arthur@optusnet.com.au', 'lily.arthur@optusnet.com.au', 'Y', '2012-02-04 12:14:13'),
(13, 'Meider', 'marcelo_meider@hotmail.com', 'Y', '2012-02-06 07:27:53'),
(14, '&Atilde;&para;zlem', 'karakabus_22@hotmail.com', 'Y', '2012-02-13 08:06:33'),
(15, 'Katerina', 'katerina_rk@mail.ru', 'Y', '2012-02-13 08:38:20'),
(16, 'Wslg', 'lonelyghost88r@hotmail.com', 'Y', '2012-02-14 00:11:56'),
(18, 'dyxxx', 'daniel0209_@hotmail.com', 'Y', '2012-02-21 19:16:58'),
(20, 'roby', 'crue@tiscali.it', 'Y', '2012-02-28 13:42:14'),
(21, 'Guzz\' Cold', 'guzz89@gmail.com', 'Y', '2012-02-29 08:22:42'),
(22, 'joseph luna', 'lunatic1939@yahoo.com', 'Y', '2012-03-08 13:48:00'),
(23, 'Vale Arias', 'vdaa24@hotmail.com', 'Y', '2012-03-15 13:08:07'),
(24, 'FallenAngel', 'darsksoul88gr@gmail.com', 'Y', '2012-03-16 08:01:33'),
(25, 'Pathy Bach', 'pathyskidrow@yahoo.com.br', 'Y', '2012-03-19 07:58:07'),
(26, 'Daniela ', 'dani_vaqueira_da_rosa@hotmail.com', 'Y', '2012-03-19 14:43:00'),
(29, 'leo69eyes', 'leo69eyes@hotmail.com', 'Y', '2012-03-20 11:49:08'),
(30, 'Nat&Atilde;&iexcl;lia', 'natty.leone@hotmail.com', 'Y', '2012-03-21 17:15:59'),
(31, 'oneida', 'oneida.rs@hotmail.com', 'Y', '2012-03-21 18:57:09'),
(32, 'BiaQueen', 'darkrocketqueen@hotmail.com', 'Y', '2012-03-22 20:36:37'),
(33, 'mirian', 'mirian.cobre@hotmail.com', 'Y', '2012-03-27 09:45:05'),
(34, 'Lee', 'slash.maia@gmail.com', 'Y', '2012-03-27 13:09:50'),
(35, 'eliete', 'elieteinrio@hotmail.com', 'Y', '2012-03-27 18:34:12'),
(36, 'Solange', 'solzinha023@hotmail.com', 'Y', '2012-03-28 14:13:35'),
(37, 'G&uacute;pi Munhoz', 'gupimunhoz@hotmail.com', 'Y', '2012-03-29 06:35:07'),
(38, 'Bonadia', 'strykemanagement@hotmail.com', 'Y', '2012-03-29 06:53:19'),
(39, 'marcobatera', 'marcobatera_music@hotmail.com', 'Y', '2012-04-07 16:47:28'),
(40, 'cibele', 'cibele.benatti@hotmail.com', 'Y', '2012-04-11 12:45:02'),
(41, 'pam sand', 'psmidnightstar@gmail.com', 'Y', '2012-04-15 17:20:46'),
(42, 'jeff micham', 'jeffmicham@yahoo.com', 'Y', '2012-04-16 19:52:24'),
(43, 'craig carvill', 'chomparecord@bigpond.com', 'Y', '2012-04-16 23:07:11'),
(44, 'Jessy Hoonys', 'sleaze.4ever@live.com', 'Y', '2012-04-18 09:12:22'),
(45, 'Gabriel Palma', 'palmagabriel@gmail.com', 'Y', '2012-04-18 13:05:16'),
(46, 'gypsi medb markey', 'shauvani@live.co.uk', 'Y', '2012-04-27 11:38:35'),
(47, 'Pilar', 'pilar_rimisan@hotmail.com', 'Y', '2012-04-30 08:55:08'),
(61, 'Henry Terron', 'shotband69@gmail.com', 'Y', '2016-10-13 00:32:48'),
(51, 'malcolm alred', 'alred469@yahoo.co.uk', 'Y', '2012-05-12 08:53:56'),
(53, 'gordon', 'dbfuzz@hotmail.com', 'Y', '2012-05-28 11:36:16'),
(55, 'Glen Mennig', 'leatherlonghair@yahoo.com', 'Y', '2012-07-14 18:57:30'),
(56, 'Daniel Mattos', 'daniel_mattos@hotmail.com', 'Y', '2012-07-17 08:50:16'),
(57, 'pano de banda', 'panodebanda@gmail.com', 'Y', '2012-07-17 15:17:05'),
(58, 'denise Coombs', 'talksoon.neverforget@yahoo.com', 'Y', '2012-07-22 15:14:35'),
(59, 'waixtumma', 'julianw@8ig.pl', 'Y', '2012-08-17 23:41:11'),
(60, 'Vickie Griffin', 'lustfallen13@aol.com', 'Y', '2012-08-18 20:18:25'),
(62, '58efe8da91f3a', 'gevans97@hotmail.com', 'Y', '2017-04-13 21:09:00'),
(63, '58efed5de1561', 'etetri@gmail.com', 'Y', '2017-04-13 21:27:59'),
(64, '58efeff1a5427', 'kirkned@gmail.com', 'Y', '2017-04-13 21:38:05'),
(65, '58eff2bc57748', 'karaikovice@gmail.com', 'Y', '2017-04-13 21:50:03'),
(66, '58eff2a49cd55', 'funambulistic@yahoo.com', 'Y', '2017-04-13 21:50:39'),
(67, '58eff533c62ba', 'jason_61787@yahoo.com', 'Y', '2017-04-13 22:01:25'),
(68, '58eff95b0bb52', 'auraramirez@gmail.com', 'Y', '2017-04-13 22:18:29'),
(69, '58eff9b513142', 'lojalvo1006@gmail.com', 'Y', '2017-04-13 22:20:47'),
(70, '58effb10b70c0', 'cjmejia4@yahoo.com', 'Y', '2017-04-13 22:26:47'),
(71, '58effc0c352d4', 'autohausentinc@msn.com', 'Y', '2017-04-13 22:29:48'),
(72, '58f004df4c800', 'gloria.donaubauer@gmail.com', 'Y', '2017-04-13 23:08:28'),
(73, '58f0075767991', 'lissfelix@hotmail.com', 'Y', '2017-04-13 23:17:59'),
(74, '58f0086e3dbe1', 'cochranb84@gmail.com', 'Y', '2017-04-13 23:22:45'),
(75, '58f00ef69871d', 'paul@speedreadingpeople.com', 'Y', '2017-04-13 23:51:19'),
(76, '58f01077c7f42', 'sdilling17@yahoo.com', 'Y', '2017-04-13 23:57:48'),
(77, '58f012856671b', 'chavez949@gmail.com', 'Y', '2017-04-14 00:05:36'),
(78, '58f018100af6e', 'riflores1@yahoo.com', 'Y', '2017-04-14 00:30:16'),
(79, '58f01b2378901', 'totah67@aol.com', 'Y', '2017-04-14 00:43:00'),
(80, '58f01b27f03e0', 'marco.perrone15.06@gmail.com', 'Y', '2017-04-14 00:43:16'),
(81, '58f0210107f8a', 'gunteng@indo.net.id', 'Y', '2017-04-14 01:07:37'),
(82, '58f0240339807', 'martha@amdigital.co.uk', 'Y', '2017-04-14 01:21:16'),
(83, '58f0250369e0a', 'marissa.morelli@gmail.com', 'Y', '2017-04-14 01:25:36'),
(84, '58f0254a9050a', 'nicopresov@gmail.com', 'Y', '2017-04-14 01:26:52'),
(85, '58f026f7ecde1', 'jim_witmer@yahoo.com', 'Y', '2017-04-14 01:32:21'),
(86, '58f026e27b38d', 'dedwards821@gmail.com', 'Y', '2017-04-14 01:33:32'),
(87, '58f029a739dad', 'hussain_sheikh@hotmail.co.uk', 'Y', '2017-04-14 01:44:21'),
(88, '58f02f74ac97b', 'fatmarmasoud@yahoo.com', 'Y', '2017-04-14 02:08:34'),
(89, '58f0364cb6c31', 'svetlanastewart288@yahoo.co.uk', 'Y', '2017-04-14 02:39:25'),
(90, '58f037aa5f627', 'hbohn@charter.net', 'Y', '2017-04-14 02:44:06'),
(91, '58f0399bc5c3c', 'elpol16@yahoo.com', 'Y', '2017-04-14 02:53:25'),
(92, '58f051edd70d9', 'tina.hoehnke@gmail.com', 'Y', '2017-04-14 04:37:18'),
(93, '58f062cbe3898', 'fozzie07@gmail.com', 'Y', '2017-04-14 05:48:09'),
(94, '58f0638d0e239', 'mwot82@gmail.com', 'Y', '2017-04-14 05:52:26'),
(95, '58f06434e9ab9', 'petecwhite@gmail.com', 'Y', '2017-04-14 05:55:20'),
(96, '58f065e4e120d', 'jennytzagonzalez@gmail.com', 'Y', '2017-04-14 06:01:30'),
(97, '58f0698f02498', 'sbeehair4su@yahoo.com', 'Y', '2017-04-14 06:18:04'),
(98, '58f06fecdec23', 'sawamaor786@gmail.com', 'Y', '2017-04-14 06:44:10'),
(99, '58f07350ddfcd', 'admin@rsdetech.com', 'Y', '2017-04-14 06:59:31'),
(100, '58f07d9a8ad7f', 'bap319@yahoo.com', 'Y', '2017-04-14 07:42:31'),
(101, '58f07fa1be135', 'jahara@live.com', 'Y', '2017-04-14 07:51:08'),
(102, '58f0878f3ce1d', 'robbymendez@gmail.com', 'Y', '2017-04-14 08:26:00'),
(103, '58f08d34c8de7', 'tomdwyer24@hotmail.com', 'Y', '2017-04-14 08:50:01'),
(104, '58f0a5be2b590', 'txkent@gmail.com', 'Y', '2017-04-14 10:34:47'),
(105, '58f0a8b2873f1', 'pazzarella1@hotmail.com', 'Y', '2017-04-14 10:47:25'),
(106, '58f0b3e9e31b3', 'sales@motofablifts.com', 'Y', '2017-04-14 11:35:17'),
(107, '58f0cc017d4fa', 'sigismondklyta878625@yahoo.com', 'Y', '2017-04-14 13:17:01'),
(108, '58f0ccfe93b5f', 'marjoruhl@me.com', 'Y', '2017-04-14 13:21:25'),
(109, '58f0ce44ba5da', 'brianb@highergroundmsp.com', 'Y', '2017-04-14 13:27:33'),
(110, '58f0ce52d4596', 'jrfowler1420@yahoo.com', 'Y', '2017-04-14 13:27:51'),
(111, '58f0cf5c460fa', 'smbtruckn@yahoo.com', 'Y', '2017-04-14 13:31:19'),
(112, '58f0d3fca8e81', 'pruhl@me.com', 'Y', '2017-04-14 13:51:38'),
(113, '58f0e8908d5d3', 'charlotte-simpson@hotmail.co.uk', 'Y', '2017-04-14 15:18:16'),
(114, '58f10338767db', 'givens7@hotmail.com', 'Y', '2017-04-14 17:13:31'),
(115, '58f109b81c498', 'chadcrnkovich@gmail.com', 'Y', '2017-04-14 17:40:29'),
(116, '58f121080c30c', 'brandi_ward22@yahoo.com', 'Y', '2017-04-14 19:19:41'),
(117, '58f14ad5b2435', 'elgatopequeno@yahoo.co.uk', 'Y', '2017-04-14 22:17:59'),
(118, '58f16fefe0726', 'childress_wes@yahoo.com', 'Y', '2017-04-15 00:56:21'),
(119, '58f1908ed9aa1', 'tfulton@bigpond.com', 'Y', '2017-04-15 03:16:09'),
(120, '58f1b93be0021', 'fmsgated@gmail.com', 'Y', '2017-04-15 06:10:14'),
(121, '58f1cb6c2ba7d', 'mindyrowan@yahoo.com', 'Y', '2017-04-15 07:28:01'),
(122, '58f1df51d20bb', 'abdelgollo@yahoo.com', 'Y', '2017-04-15 08:52:45'),
(123, '58f4ed7875208', 'acostae785@hotmail.com', 'Y', '2017-04-17 16:30:09'),
(124, '58f4f3075ceea', 'drone1238@yahoo.com', 'Y', '2017-04-17 16:53:52'),
(125, '58f5008747569', 'phoenixfriction@yahoo.com', 'Y', '2017-04-17 17:51:22'),
(126, 'Henry Terron', 'terron.shot@gmail.com', 'Y', '2017-04-28 05:36:46'),
(127, '5903994cdc12c', 'matthewebarr@gmail.com', 'Y', '2017-04-28 19:34:49'),
(128, '5903a892b05dc', 'lori@kilmorbugs.com', 'Y', '2017-04-28 20:40:13'),
(129, '5903a8de4d915', 'tijuana7305@att.net', 'Y', '2017-04-28 20:41:02'),
(130, '5903b134df253', 'misslovelynai@yahoo.com', 'Y', '2017-04-28 21:15:20'),
(131, '5903b35764dc0', 'trinh_nguyen15@yahoo.com', 'Y', '2017-04-28 21:24:31'),
(132, '5903b7c88e456', 'djordan98119@yahoo.com', 'Y', '2017-04-28 21:44:43'),
(133, '5903bb8e049cd', 'carbon409@yahoo.com', 'Y', '2017-04-28 21:58:17'),
(134, '5903c314ebdc5', 'bassfisher152@gmail.com', 'Y', '2017-04-28 22:32:56'),
(135, '5903c3fa35695', 'luzardoa@yahoo.com', 'Y', '2017-04-28 22:34:15'),
(136, '5903c88dcfb63', 'zackka2@yahoo.com', 'Y', '2017-04-28 22:55:00'),
(137, '5903c973aa770', 'dgl1706@yahoo.co.uk', 'Y', '2017-04-28 23:00:40'),
(138, '5903cc5a3e3aa', 'rosefamdamily88@yahoo.com', 'Y', '2017-04-28 23:09:57'),
(139, '5903d18189936', 'smith6032@yahoo.com', 'Y', '2017-04-28 23:31:54'),
(140, '5903d5a4c31b6', 'daytonz@killamail.com', 'Y', '2017-04-28 23:52:04'),
(141, '5903da1749cdc', 'jenniferkoepsell@yahoo.com', 'Y', '2017-04-29 00:09:18'),
(142, '5903ec8c05770', 'tyrannosaurus67@hotmail.com', 'Y', '2017-04-29 01:27:45'),
(143, '5903f22a5268b', 'shrosenblum@yahoo.com', 'Y', '2017-04-29 01:53:47'),
(144, '5903fcb65f64b', 'jihadtisdale@yahoo.com', 'Y', '2017-04-29 02:38:47'),
(145, '5904021d2f5bc', 'heckeler@charter.net', 'Y', '2017-04-29 03:01:52'),
(146, '590404f89af38', 'cowsayingmoo@yahoo.com', 'Y', '2017-04-29 03:11:23'),
(147, '59040505c7953', 'aj.figueroa17@yahoo.com', 'Y', '2017-04-29 03:14:52'),
(148, '590409a21fff8', 'kolconstruction@wp.pl', 'Y', '2017-04-29 03:32:39'),
(149, '590409a8863df', 'darin.duvernay@yahoo.com', 'Y', '2017-04-29 03:34:01'),
(150, '59040af047eb1', 'allan.execugifts@gmail.com', 'Y', '2017-04-29 03:37:43'),
(151, '5904216241b3b', 'frankandjaime@yahoo.com', 'Y', '2017-04-29 05:14:09'),
(152, '59042493d0bed', 'namtrantx@hotmail.com', 'Y', '2017-04-29 05:28:55'),
(153, '590425ca0a11c', 'teriastephens@bellsouth.net', 'Y', '2017-04-29 05:34:14'),
(154, '590432700a02b', 'connie3582008@yahoo.com', 'Y', '2017-04-29 06:28:37'),
(155, '5904453929bfa', 't_julie@bellsouth.net', 'Y', '2017-04-29 07:48:48'),
(156, '59044717e135b', 'oliverleif@yahoo.com', 'Y', '2017-04-29 07:54:02'),
(157, '5904593ad9d09', 'matt.brian.harrison@gmail.com', 'Y', '2017-04-29 09:12:25'),
(158, '5904711a9ad5f', 'tonyman1616@yahoo.com', 'Y', '2017-04-29 10:55:44'),
(159, '59047e8d243b7', 'gklei214@gmail.com', 'Y', '2017-04-29 11:53:22'),
(160, '5904931a3fdf2', 'dharbin.hokiefan@gmail.com', 'Y', '2017-04-29 13:18:38'),
(161, '5904985c28bb2', 'cook1976@yahoo.com', 'Y', '2017-04-29 13:41:50'),
(162, '59049c2b48d25', 'arvidligard@hotmail.com', 'Y', '2017-04-29 13:59:36'),
(163, '5904afe73ebc8', 'michael.andreozzi@gmail.com', 'Y', '2017-04-29 15:21:52'),
(172, '59051844d3233', 'orders@cameracanada.com', 'Y', '2017-04-29 22:46:24'),
(173, '5905194b4352c', 'kimber2a31@yahoo.com', 'Y', '2017-04-29 22:53:11'),
(174, '590529c36364c', 'rasztafaree2@citromail.hu', 'Y', '2017-04-30 00:03:53'),
(175, '5905452360425', 'mrcub32806@aol.com', 'Y', '2017-04-30 02:00:25'),
(176, '59054aad6132e', 'jchou1980@hotmail.com', 'Y', '2017-04-30 02:21:07'),
(177, '59056a3445155', 'boatemaah_b@hotmail.com', 'Y', '2017-04-30 04:38:24'),
(178, '590573e03306e', 'jdgstat@yahoo.com', 'Y', '2017-04-30 05:19:41'),
(179, '59057621aecbb', 'rich900rr@yahoo.com', 'Y', '2017-04-30 05:27:54'),
(180, '5905af5cd4d5f', 'sfeuropean@yahoo.com', 'Y', '2017-04-30 09:33:17'),
(181, '5905b76114fb8', 'bridgetdooney@gmail.com', 'Y', '2017-04-30 10:05:36'),
(182, '5905c1c9c7ad8', 'kmevans33@yahoo.com', 'Y', '2017-04-30 10:50:00'),
(183, '5905d2054a053', 'sugarbodylan@yahoo.com', 'Y', '2017-04-30 11:59:16'),
(184, '5905f503e6903', 'moijevous-inscrit@yahoo.fr', 'Y', '2017-04-30 14:30:58'),
(185, '5905f9597c7fc', 'mangueken@gmail.com', 'Y', '2017-04-30 14:49:38'),
(186, '5905ff6c8b1e5', 'reagen.darling@gmail.com', 'Y', '2017-04-30 15:14:52'),
(187, '59060a7bd724e', 'fonz1986@gmail.com', 'Y', '2017-04-30 16:00:28'),
(188, '59060adfdd4ff', 'cgecks9@yahoo.com', 'Y', '2017-04-30 16:02:30'),
(189, '59062c59c040c', 'tinnyou@yahoo.com', 'Y', '2017-04-30 18:24:12'),
(190, '5906369284898', 'ekrusze@yahoo.com', 'Y', '2017-04-30 19:10:35'),
(191, '59064dbc905a5', 'ebook4airbnb@gmail.com', 'Y', '2017-04-30 20:47:23'),
(192, '5906fbb980065', 'famballreich@gmail.com', 'Y', '2017-05-01 09:12:02'),
(193, '5907714b7509c', 'raymond.funk@yahoo.com', 'Y', '2017-05-01 17:33:13'),
(194, '5908b8cde96fb', 'rena@spcanevada.org', 'Y', '2017-05-02 16:50:57'),
(195, '5908d64c852fc', 'tfwood12@hotmail.com', 'Y', '2017-05-02 18:56:55'),
(196, '5908dc66b78ff', 'bowenmellado@rocketmail.com', 'Y', '2017-05-02 19:20:07'),
(197, '5908debdef19c', 'mark.roberts212@gmail.com', 'Y', '2017-05-02 19:29:29'),
(198, '5908f70613b7f', 'chhhhhh@gmail.com', 'Y', '2017-05-02 21:16:25'),
(199, '5908fc047ba0c', 'ara_aslyan@yahoo.com', 'Y', '2017-05-02 21:35:16'),
(200, '590901bc50e10', 'willienelson715@yahoo.com', 'Y', '2017-05-02 22:01:46'),
(201, '59090f6fb454f', 'digitalprismco@gmail.com', 'Y', '2017-05-02 22:59:25'),
(202, '59091156551e3', 'jon.caughron@gmail.com', 'Y', '2017-05-02 23:08:49'),
(203, '59091e8175387', 'gallefr1@gmail.com', 'Y', '2017-05-03 00:02:50'),
(204, '59092197c1d6b', 'rebirthrenewal@yahoo.com', 'Y', '2017-05-03 00:18:01'),
(205, '590922b5e62ac', 'lexakitchen@gmail.com', 'Y', '2017-05-03 00:22:44'),
(206, '59092699d6f6f', 'deepep81@verizon.net', 'Y', '2017-05-03 00:38:53'),
(207, '59092e806037f', 'ernestoag2000@yahoo.com', 'Y', '2017-05-03 01:13:33'),
(208, '5909319476306', 'tkhamielec@yahoo.com', 'Y', '2017-05-03 01:26:08'),
(209, '59093518cee0b', 'tony.gatlin@yahoo.com', 'Y', '2017-05-03 01:39:13'),
(210, '590935deb8470', 'amandabo81@aol.com', 'Y', '2017-05-03 01:42:13'),
(211, '5909486521165', 'carlos_tt_2@hotmail.com', 'Y', '2017-05-03 03:01:07'),
(212, '59094a72584aa', 'bettyboop1k@yahoo.com', 'Y', '2017-05-03 03:10:05'),
(213, '5909679c2ae07', 'ddreger30@hotmail.com', 'Y', '2017-05-03 05:14:02'),
(214, '5909733f5fea4', 'smith_20_01@yahoo.com', 'Y', '2017-05-03 06:06:25'),
(215, '59098a0f1dad4', 'paulinetsirkin@yahoo.com', 'Y', '2017-05-03 07:43:54'),
(216, '590992135be21', 'tmgreen@comcast.net', 'Y', '2017-05-03 08:15:28'),
(217, '5909a549833e2', 'dianegma1@yahoo.com', 'Y', '2017-05-03 09:37:32'),
(218, '5909a8f3d0be6', 'nilu_prasad12@yahoo.com', 'Y', '2017-05-03 09:55:38'),
(219, '5909ae8025135', 'stevens2717@gmail.com', 'Y', '2017-05-03 10:15:39'),
(220, '5909d6ded23ee', 'mireya1968@yahoo.com', 'Y', '2017-05-03 13:09:33'),
(221, '5909d87832ebe', 'eva.vanderhaar@gmail.com', 'Y', '2017-05-03 13:15:56'),
(222, '5909d99b5a1d4', 'mag_game6@yahoo.com', 'Y', '2017-05-03 13:23:04'),
(223, '5909e4888a1d9', 'amazonhomestore26@gmail.com', 'Y', '2017-05-03 14:07:21'),
(224, '5909e3edae9f6', 'lspaldi1@gmail.com', 'Y', '2017-05-03 14:07:40'),
(225, '5909fdfa7990a', 'gsilvagnoli@optonline.net', 'Y', '2017-05-03 15:57:50'),
(226, '590a06734da30', 'tweaver1313@yahoo.com', 'Y', '2017-05-03 16:34:10'),
(227, '590a08fc03d46', 'gary@homesecurityresources.net', 'Y', '2017-05-03 16:44:50'),
(228, '590a0d5b93ffc', 'portergs@pacbell.net', 'Y', '2017-05-03 17:01:52'),
(229, '590a46d08060d', 'budwill1950@comcast.net', 'Y', '2017-05-03 21:08:13'),
(230, '590a4e60472e1', 'dpenslar@gmail.com', 'Y', '2017-05-03 21:40:28'),
(231, '590a592c83150', 'michaelcarter83@gmail.com', 'Y', '2017-05-03 22:26:59'),
(232, '590a7f80da4d9', 'alan@tvalley.com', 'Y', '2017-05-04 01:08:51'),
(233, 'Name', 'carbafos68@mail.ru', 'Y', '2017-05-04 06:25:49'),
(234, '590ace8f5cb51', 'datsclark@gmail.com', 'Y', '2017-05-04 06:46:17'),
(235, '590b3cea0bf58', 'jo6jor@yahoo.com', 'Y', '2017-05-04 14:35:29'),
(236, '590b4c730d654', 'janet982@gmail.com', 'Y', '2017-05-04 15:43:22'),
(237, '590b50d03671e', 'holzwurm@termitenhuegel.de', 'Y', '2017-05-04 16:01:31'),
(238, '590b6c9d0aa31', 'terry_sanders_jr@yahoo.com', 'Y', '2017-05-04 18:00:35'),
(239, '590ba16ad46e4', 'couturetj@gmail.com', 'Y', '2017-05-04 21:44:05'),
(240, '590ba19a4ca3f', 'mulock@yahoo.com', 'Y', '2017-05-04 21:49:15'),
(241, '590ba69531f82', 'natashakgulati@gmail.com', 'Y', '2017-05-04 22:06:19'),
(242, '590ba83c613ab', 'mrmostrealtyinc@gmail.com', 'Y', '2017-05-04 22:14:28'),
(243, '590bb8e5c66dd', 'alexandria20101992@yahoo.com', 'Y', '2017-05-04 23:24:25'),
(244, '590bbb97f10f6', 'mattisabella1001@gmail.com', 'Y', '2017-05-04 23:40:09'),
(245, '590bc9abf12bc', 'lloyd.l.amanda@gmail.com', 'Y', '2017-05-05 00:36:00'),
(246, '590be7a67bcf3', 'viviamrob_1222@yahoo.com', 'Y', '2017-05-05 02:47:36'),
(247, '590c06e516bda', 'kapashh2@gmail.com', 'Y', '2017-05-05 04:57:11'),
(248, '590c0d610e5f9', 'drscudworth@gmail.com', 'Y', '2017-05-05 05:26:00'),
(249, '590c3230cc20e', 'stangns84@yahoo.com', 'Y', '2017-05-05 08:01:54'),
(250, '590c3fc5bcabd', 'dennis.mcvicker@gmail.com', 'Y', '2017-05-05 09:03:06'),
(251, '590c467d564e9', 'jhorstma@yahoo.com', 'Y', '2017-05-05 09:28:32'),
(252, '590c47925d22a', 'jday_530@yahoo.com', 'Y', '2017-05-05 09:36:18'),
(253, '590c4de2c3b60', 'mrzblessu@yahoo.com', 'Y', '2017-05-05 10:01:18'),
(254, '590c53c236400', 'gabrielle.beretta@gmail.com', 'Y', '2017-05-05 10:26:07'),
(255, '590c775ea3ae9', 'leopoldoleopoldo@gmail.com', 'Y', '2017-05-05 12:58:32'),
(256, '590cb5cfd16a7', 'jamisonbethell581612@yahoo.com', 'Y', '2017-05-05 17:26:50'),
(257, '590cc13c32827', 'lawoodard74@gmail.com', 'Y', '2017-05-05 18:16:31'),
(258, '590cc927e2df2', 'kylix.rd@gmail.com', 'Y', '2017-05-05 18:47:29'),
(259, '590cea2e04697', 'herigol1@hotmail.com', 'Y', '2017-05-05 21:06:48'),
(260, '590d645dadafd', 'withlove113@hotmail.com', 'Y', '2017-05-06 05:48:10'),
(261, '590d915fc8a3b', 'rommelhale@yahoo.com', 'Y', '2017-05-06 09:01:25'),
(262, '590d9c543d9e9', 'pbova@yahoo.com', 'Y', '2017-05-06 09:48:25'),
(263, '590daad112c5d', 'jonewsome@yahoo.co.uk', 'Y', '2017-05-06 10:52:45'),
(264, '590dafe0032fc', 'lucy.thompson@outlook.com', 'Y', '2017-05-06 11:11:24'),
(265, '590dd618b9296', 'mjcalligaris@yahoo.com', 'Y', '2017-05-06 13:56:57'),
(266, '590dd7f9c4eb7', 'summersmarcusxq840@yahoo.com', 'Y', '2017-05-06 14:04:59'),
(267, '590e2fc5e3477', 'fanny_bouvelle@hotmail.fr', 'Y', '2017-05-06 20:17:28'),
(268, '590e41714bd24', 'lespesjulien33@gmail.com', 'Y', '2017-05-06 21:32:51'),
(269, '590ed6cd0b189', 'jherndon@slmstaffing.com', 'Y', '2017-05-07 08:12:32'),
(270, '590ef4b5d8b6d', 'anne.lothian@gmail.com', 'Y', '2017-05-07 10:19:50'),
(271, '590efc03bfdd2', 'tacsandental@gmail.com', 'Y', '2017-05-07 10:51:29'),
(272, '590f06cb8c7b3', 'fatcos00@yahoo.com', 'Y', '2017-05-07 11:34:17'),
(273, '590f3cb8d1f7a', 'dmsers@hotmail.com', 'Y', '2017-05-07 15:24:14'),
(274, '590f62ce76936', 'creighton.lee@gmail.com', 'Y', '2017-05-07 18:05:52'),
(275, '590fc53d8ca6d', 'mrmrsbauer@gmail.com', 'Y', '2017-05-08 01:09:18'),
(276, '590fec71ee686', 'escottcarlis@gmail.com', 'Y', '2017-05-08 03:56:45'),
(277, '5910206141caa', 'kitechk@interlink.or.jp', 'Y', '2017-05-08 07:38:26'),
(278, '5910448fca120', 'bmurraylbz@hotmail.com', 'Y', '2017-05-08 10:10:33'),
(279, '5910530d84357', 'ctownsend000@gmail.com', 'Y', '2017-05-08 11:11:48'),
(280, '59107bd67ff47', 'buttons13@hotmail.com', 'Y', '2017-05-08 14:05:48'),
(281, '59107f36bc366', 'denis.urata@gmail.com', 'Y', '2017-05-08 14:18:59'),
(282, '59108aaf70658', 'gavinhessey1@aol.com', 'Y', '2017-05-08 15:12:00'),
(283, '59108e8f1f42b', 'barbzooc@aol.com', 'Y', '2017-05-08 15:29:03'),
(284, '5910a066e0736', 'bruce_hall@hotmail.co.uk', 'Y', '2017-05-08 16:44:56'),
(285, '5910b99c2b278', 'samiern@yahoo.com', 'Y', '2017-05-08 18:28:25'),
(286, '5910e406eab30', 'allishaw3@gmail.com', 'Y', '2017-05-08 21:31:03'),
(287, '59111029de99e', 'rynofilms@gmail.com', 'Y', '2017-05-09 00:37:35'),
(288, '5911747cf1c37', 'rgazoorian@charter.net', 'Y', '2017-05-09 07:45:29'),
(289, '591174a63e562', 'chsocheleau@orange.fr', 'Y', '2017-05-09 07:50:11'),
(290, '59118abb29a48', 'ilyassohrab1@yahoo.com', 'Y', '2017-05-09 09:24:16'),
(291, '5911b4e515e42', 'eguam@web.de', 'Y', '2017-05-09 12:24:43'),
(292, '591202b451dd8', 'donacac@inovise.com', 'Y', '2017-05-09 17:56:03'),
(293, '59120bf51e89c', 'schan13@gmail.com', 'Y', '2017-05-09 18:35:46'),
(294, '59122bb405c89', 'ke11y@comcast.net', 'Y', '2017-05-09 20:48:52'),
(295, '59124019e42a0', 'deshondavis39@yahoo.com', 'Y', '2017-05-09 22:15:17'),
(296, '591243b039df5', 'kristina.m.todd@gmail.com', 'Y', '2017-05-09 22:33:55'),
(297, '5912493001eee', 'shanelledot@gmail.com', 'Y', '2017-05-09 22:56:47'),
(298, '59125a9adc8a2', 'nkatko@tenmast.com', 'Y', '2017-05-10 00:11:22'),
(299, '591260ba34e0a', 'jcrommelinck@gmail.com', 'Y', '2017-05-10 00:37:19'),
(300, '591264d1bd946', 'gans42@gmail.com', 'Y', '2017-05-10 00:54:38'),
(301, '591265709e2e8', 'davidchandlerbeach@gmail.com', 'Y', '2017-05-10 00:57:20'),
(302, '5912d005e2fbf', 'christisaindon@gmail.com', 'Y', '2017-05-10 08:32:20'),
(303, '5912d4376907f', 'traneamaro@gmail.com', 'Y', '2017-05-10 08:47:07'),
(304, '5912ed1b14fba', 'carrascolisa@yahoo.com', 'Y', '2017-05-10 10:33:33'),
(305, '5912ee5c14c12', 'gerig2@windstream.net', 'Y', '2017-05-10 10:41:50'),
(306, '5912f77cc55f4', 'lorenayeya@yahoo.com', 'Y', '2017-05-10 11:17:59'),
(307, '591329d6b91f1', 'moon.nirvana@gmail.com', 'Y', '2017-05-10 14:55:11'),
(308, '59134e8789b98', 'mbiggs@pccarx.com', 'Y', '2017-05-10 17:29:39'),
(309, '591353a57b120', 'annaizabel@yahoo.com.br', 'Y', '2017-05-10 17:53:56'),
(310, '59138a8c505b9', 'olena.masui@outlook.com', 'Y', '2017-05-10 21:48:32'),
(311, '5913bdc657567', 'ybaquera@gmail.com', 'Y', '2017-05-11 01:27:11'),
(312, '5913c0ceeea6b', 'graystone8732@outlook.com', 'Y', '2017-05-11 01:35:12'),
(313, '5913ff3197e32', 'pcabello6134@yahoo.com', 'Y', '2017-05-11 06:04:17'),
(314, '59142b79d6695', 'johnlee310@yahoo.com', 'Y', '2017-05-11 09:14:19'),
(315, '59144a70965d0', 'dan@basicbeginnings.net', 'Y', '2017-05-11 11:22:50'),
(316, '591455391a560', 'schrijn.eric@gmail.com', 'Y', '2017-05-11 12:08:37'),
(317, '59145e70f336e', 'g.chatelus@gmail.com', 'Y', '2017-05-11 12:49:44'),
(318, '5914816b46f72', 'david.ingram@fuse.net', 'Y', '2017-05-11 15:17:11'),
(319, '5914a2a2a9436', 'lynn.martin3947@yahoo.com', 'Y', '2017-05-11 17:43:54'),
(320, '5914ccbb12850', 'jinadang4728@yahoo.com', 'Y', '2017-05-11 20:43:11'),
(321, '5914d2f0227b8', 'hbw600@gmail.com', 'Y', '2017-05-11 21:08:46'),
(322, '5914d36be51fe', 'southlandbeer@gmail.com', 'Y', '2017-05-11 21:11:14'),
(323, '5914d6d980764', 'danieldodson@me.com', 'Y', '2017-05-11 21:21:48'),
(324, '5914f453ab763', 'russasper@optimum.net', 'Y', '2017-05-11 23:31:50'),
(325, '591505a7a063a', 'jasmin24-10@hotmail.com', 'Y', '2017-05-12 00:46:28'),
(326, '5915492dd7521', 'garrytaylor57@hotmail.co.uk', 'Y', '2017-05-12 05:33:33'),
(327, '59156b7c9a9ad', 'proofofperchise@yahoo.com', 'Y', '2017-05-12 07:57:03'),
(328, '5915a84351fc4', 'rkennedy1014@yahoo.com', 'Y', '2017-05-12 12:18:52'),
(329, '5915c7d2a4a1b', 'signedlongint@gmail.com', 'Y', '2017-05-12 14:34:14'),
(330, '59161ea337702', 'kramusica@gmail.com', 'Y', '2017-05-12 20:41:25'),
(331, '59163f0463947', 'sankha80@gmail.com', 'Y', '2017-05-12 23:02:28'),
(332, '5916441804f43', 'jacy.legault@gmail.com', 'Y', '2017-05-12 23:21:42'),
(333, '591757da0ed2f', 'jacobsmd@nycap.rr.com', 'Y', '2017-05-13 19:00:41'),
(334, '591888ba68d9c', 'jim.e.walsh@gmail.com', 'Y', '2017-05-14 16:41:51'),
(335, '5918c7bc551fa', 'nvnative59@yahoo.com', 'Y', '2017-05-14 21:10:59'),
(336, '5918f656373f6', 'careheart@hnblaw.com', 'Y', '2017-05-15 00:29:20'),
(337, '59197081a24c7', 'ksjrod@yahoo.com', 'Y', '2017-05-15 09:06:04'),
(338, '59199ebc89853', 'timothy.haxton@gmail.com', 'Y', '2017-05-15 12:28:30'),
(339, '5919a987a3ff0', 'mmontill@bellsouth.net', 'Y', '2017-05-15 13:13:04'),
(340, '5919d620678f3', 'altman.mark@gmail.com', 'Y', '2017-05-15 16:20:46'),
(341, '5919d8aadc8a6', 'info@biomudcosmetics.com', 'Y', '2017-05-15 16:33:05'),
(342, '5919df52a2e3f', 'info@plaksinlaw.com', 'Y', '2017-05-15 17:03:35'),
(343, '591a09e3c2be2', 'christy.casler@gmail.com', 'Y', '2017-05-15 20:00:32'),
(344, '591a27c7563f6', 'thomasrellis@yahoo.com', 'Y', '2017-05-15 22:12:44'),
(345, '591a4a611f2c6', 'margaret.mcconn@gmail.com', 'Y', '2017-05-16 00:40:41'),
(346, '591a6d6c8a3f1', 'plstiver@yahoo.com', 'Y', '2017-05-16 03:10:24'),
(347, '591abeae3d2c6', 'selfexpansion@msn.com', 'Y', '2017-05-16 08:56:24'),
(348, '591ac44e2298d', 'crawley.cathy@yahoo.com', 'Y', '2017-05-16 09:15:00'),
(349, '591add7712405', 'matthewkbrian@aim.com', 'Y', '2017-05-16 11:07:56'),
(350, '591af38e64279', 'bjmoses5@gmail.com', 'Y', '2017-05-16 12:43:23'),
(351, '591b149a809fb', 'bhaug@gmx.de', 'Y', '2017-05-16 15:03:58'),
(352, '591b14d249f23', 'edgarjeuneroxas@yahoo.com', 'Y', '2017-05-16 15:04:53'),
(353, '591b36669104f', 'diogo.rustoff@gmail.com', 'Y', '2017-05-16 17:25:11'),
(354, '591b46df72f67', 'carv0008@yahoo.com', 'Y', '2017-05-16 18:38:28'),
(355, '591bbc5e62dc9', 'tjarnold_94@yahoo.com', 'Y', '2017-05-17 02:59:00'),
(356, '591bc006d186a', 'thsimmons17@gmail.com', 'Y', '2017-05-17 03:14:36'),
(357, '591be676cbda2', 'jim_hill@oropeza-parks.com', 'Y', '2017-05-17 05:54:42'),
(358, '591bebd118a55', 'ibisbayevents@gmail.com', 'Y', '2017-05-17 06:21:02'),
(359, '591bf11baca1a', 'sayandawn@gmail.com', 'Y', '2017-05-17 06:44:31'),
(360, '591bf6a56632e', 'jwi.richardson@btinternet.com', 'Y', '2017-05-17 07:03:52'),
(361, '591c212f03fd5', 'ninou-lincat@orange.fr', 'Y', '2017-05-17 10:08:43'),
(362, '591c2b32a7847', 'christicavness@gmail.com', 'Y', '2017-05-17 10:52:40'),
(363, '591c3209d8ce1', 'ben.l.burton@gmail.com', 'Y', '2017-05-17 11:15:57'),
(364, '591c44b3705e6', 'winchesterdavewalker@gmail.com', 'Y', '2017-05-17 12:36:44'),
(365, '591c584281668', 'marylou.elizabeth@gmail.com', 'Y', '2017-05-17 13:59:17'),
(366, '591c5b01b0587', 'mark.andrew.davis1@gmail.com', 'Y', '2017-05-17 14:12:52'),
(367, '591c5c079b281', 'acehauling@gmail.com', 'Y', '2017-05-17 14:15:20'),
(368, '591c5b181a84b', 'barbara.e.maldonado@gmail.com', 'Y', '2017-05-17 14:15:51'),
(369, '591c5e04dc2b1', 'crispy1957@gmail.com', 'Y', '2017-05-17 14:29:15'),
(370, '591c6cf4e3641', 'bourriquet007@gmail.com', 'Y', '2017-05-17 15:32:26'),
(371, '591c6f27973a1', 'lauraenglish124@gmail.com', 'Y', '2017-05-17 15:37:52'),
(372, '591c76885178a', 'parsonspromopmi@gmail.com', 'Y', '2017-05-17 16:13:03'),
(373, '591c8821f38d7', 'kyong.park2009@gmail.com', 'Y', '2017-05-17 17:28:24'),
(374, '591c8b072408a', 'geraldjeanfelix@gmail.com', 'Y', '2017-05-17 17:40:36'),
(375, '591c8d4ec6263', 'brooklynntennelle@gmail.com', 'Y', '2017-05-17 17:51:16'),
(376, '591c913f08d99', 'brittney.oneal@gmail.com', 'Y', '2017-05-17 18:06:02'),
(377, '591c91fe15448', 'hegartycxu@gmail.com', 'Y', '2017-05-17 18:10:20'),
(378, '591c9733b7c86', 'yocusm1@gmail.com', 'Y', '2017-05-17 18:29:01'),
(379, '591c9820444f8', 'moonbug006@gmail.com', 'Y', '2017-05-17 18:37:08'),
(380, '591c9897d506f', 'beverlynclark3@gmail.com', 'Y', '2017-05-17 18:38:38'),
(381, '591c9d63230bf', 'adamhirshman@gmail.com', 'Y', '2017-05-17 18:55:07'),
(382, '591ca27f2390d', 'jacqueline.sm.park@gmail.com', 'Y', '2017-05-17 19:16:56'),
(383, '591ca7885a28b', 'tleivo@gmail.com', 'Y', '2017-05-17 19:37:28'),
(384, '591cae0d47620', 'elhern99@yahoo.com', 'Y', '2017-05-17 20:09:41'),
(385, '591cb4e26793e', 'debmolusky@gmail.com', 'Y', '2017-05-17 20:36:19'),
(386, '591cb74d63ed6', 'esperonoelle@gmail.com', 'Y', '2017-05-17 20:49:39'),
(387, '591cb9255b556', 'danlebrun88@gmail.com', 'Y', '2017-05-17 20:57:31'),
(388, '591cbdc748693', 'bgoodhart083@gmail.com', 'Y', '2017-05-17 21:17:02'),
(389, '591cc6e34f909', 'qle2life@gmail.com', 'Y', '2017-05-17 21:51:09'),
(390, '591cc6a6d8052', 'bodirockbeats@gmail.com', 'Y', '2017-05-17 21:51:13'),
(391, '591cc5d322446', 'kjp3070@yahoo.com', 'Y', '2017-05-17 21:51:14'),
(392, '591ccd16c12c4', 'masontstorm@yahoo.com', 'Y', '2017-05-17 22:18:42'),
(393, '591cd2ecdae37', 'anika.art@gmail.com', 'Y', '2017-05-17 22:42:35'),
(394, '591cd4f9451bc', 'aabeyta1988@gmail.com', 'Y', '2017-05-17 22:52:17'),
(395, '591cd66863b84', 'vprinterdude2@gmail.com', 'Y', '2017-05-17 22:57:28'),
(396, 'JimmiXzSq', 'jimos45812rt1@hotmail.com', 'Y', '2017-05-17 23:30:40'),
(397, '591ce07546e5a', 'xannedemesa@yahoo.com', 'Y', '2017-05-17 23:41:16'),
(398, '591cec9067c3f', 'kimmerdavis@yahoo.com', 'Y', '2017-05-18 00:36:23'),
(399, '591cf6eeb0521', 'meyerptcfd@gmail.com', 'Y', '2017-05-18 01:21:09'),
(400, '591cff6237822', 'pkendig777@gmail.com', 'Y', '2017-05-18 01:52:17'),
(401, '591d01b7adedc', 'celine.sandoval13@gmail.com', 'Y', '2017-05-18 02:02:15'),
(402, '591d035dbe8ff', 'djohnston1998@gmail.com', 'Y', '2017-05-18 02:13:57'),
(403, '591e0bde6bde9', 'chelseazick@yahoo.com', 'Y', '2017-05-18 21:03:35'),
(404, '591ebc67f01ae', 'swanreflections@yahoo.com', 'Y', '2017-05-19 09:35:38'),
(405, '591ed9749cbab', 'eaokt1@yahoo.com', 'Y', '2017-05-19 11:35:48'),
(406, '591f4f9be9247', 'tanman1067@yahoo.com', 'Y', '2017-05-19 19:59:57'),
(407, '591f6772821ec', 'm_heitt@yahoo.com', 'Y', '2017-05-19 21:45:40'),
(408, '591fcc067665d', 'bobmacchi@yahoo.com', 'Y', '2017-05-20 04:49:42'),
(409, '59207b518a36c', 'lr.price@yahoo.com', 'Y', '2017-05-20 17:22:14'),
(410, '5920b9b64b881', 'jnf1988@yahoo.com', 'Y', '2017-05-20 21:50:22'),
(411, '5920d80ad9285', 'lestley_lewis@yahoo.com', 'Y', '2017-05-20 23:59:08'),
(412, '5923b7eab33a9', 'gomezadriana1014@yahoo.com', 'Y', '2017-05-23 04:18:11'),
(413, '5923ba34872b8', 'thesfmint@gmail.com', 'Y', '2017-05-23 04:28:32'),
(414, '5923d450be6fc', 'flipmason5@yahoo.com', 'Y', '2017-05-23 06:20:02'),
(415, '592402e5a775b', 'adlumbard@yahoo.com', 'Y', '2017-05-23 09:37:42'),
(416, '59241c2293d77', 'jennr23@gmail.com', 'Y', '2017-05-23 11:24:43'),
(417, '59244a4dcb35a', 'jamieb77_2000@yahoo.com', 'Y', '2017-05-23 14:41:54'),
(418, '59248a49e8dab', 'mansolil@yahoo.com', 'Y', '2017-05-23 19:11:11'),
(419, '5924c1bb3ecdc', 'avianthompson6132@yahoo.com', 'Y', '2017-05-23 23:12:02'),
(420, '59259c954e840', 'agallata@yahoo.com', 'Y', '2017-05-24 14:45:52'),
(421, '592b508356e92', 'jackie.casano@yahoo.com', 'Y', '2017-05-28 22:35:58'),
(422, '592b7f3bd0bc4', 'adoptionhs@yahoo.com', 'Y', '2017-05-29 01:54:08'),
(423, '592ba91f1bc2f', 'm_rincon83@yahoo.com', 'Y', '2017-05-29 04:51:47'),
(424, '592bc359899a8', 'dkduke57@gmail.com', 'Y', '2017-05-29 06:44:44'),
(425, '592bd30f6c466', 'devynlmcnichol@gmail.com', 'Y', '2017-05-29 07:51:47'),
(426, '592bf206361ff', 'lgebow@yahoo.com', 'Y', '2017-05-29 10:04:01'),
(427, '592c1b9e45d41', 'bmarsh921@gmail.com', 'Y', '2017-05-29 12:59:42'),
(428, '592c60df7b1ea', 'cameron.krog@yahoo.com', 'Y', '2017-05-29 17:57:09'),
(429, '592c68c81eddb', 'david.panagiotis@gmail.com', 'Y', '2017-05-29 18:30:36'),
(430, '592c749c33d8e', 'bartlyc@gmail.com', 'Y', '2017-05-29 19:21:55'),
(431, '592d1b6811a83', 'mski036@gmail.com', 'Y', '2017-05-30 07:06:47'),
(432, '592d2c1fe5af3', 'lkvharper@gmail.com', 'Y', '2017-05-30 08:23:10'),
(433, '592d42582dfeb', 'ravonanderson11@yahoo.com', 'Y', '2017-05-30 09:56:39'),
(434, '592d8766adb68', 'kumaravell@gmail.com', 'Y', '2017-05-30 14:53:40'),
(435, '592d8d8bddfef', 'saskbob@gmail.com', 'Y', '2017-05-30 15:19:05'),
(436, '592d9a03b701c', 'janblettner@yahoo.com', 'Y', '2017-05-30 16:14:57'),
(437, '592dc3009b8d0', 'jaredblankenship@gmail.com', 'Y', '2017-05-30 19:06:48'),
(438, '592ddaa9b355e', 'heatherwest80@gmail.com', 'Y', '2017-05-30 20:48:45'),
(439, '592dfd2b6017d', 'khorsanddentalgroup@gmail.com', 'Y', '2017-05-30 23:17:04'),
(440, '592e447563e78', 'kiker127@yahoo.com', 'Y', '2017-05-31 04:20:08'),
(441, '592e53cb0d170', 'skotwilyums@yahoo.com', 'Y', '2017-05-31 05:19:32'),
(442, '592e59da5cfb3', 'pierre.delbe@gmail.com', 'Y', '2017-05-31 05:50:44'),
(443, '592eb5a0f2c60', 'randal.moore@yahoo.com', 'Y', '2017-05-31 12:23:35'),
(444, '592eb8706cac4', 'cktwallis@gmail.com', 'Y', '2017-05-31 12:35:00'),
(445, '592efd6d7aecd', 'geraldlam05@yahoo.com', 'Y', '2017-05-31 17:29:09'),
(446, '592f1d08bf0e6', 'sixxtysixx2258@yahoo.com', 'Y', '2017-05-31 19:44:50'),
(447, '592f1fba15f76', 'melissaeagar@yahoo.com', 'Y', '2017-05-31 19:56:00'),
(448, '592f63a7a1d28', 'anthony.carnevale@yahoo.com', 'Y', '2017-06-01 00:44:52'),
(449, '592fa7bedba5e', 'jplanger@gmail.com', 'Y', '2017-06-01 05:38:08'),
(450, '592fcf5f32164', 'jharry12@gmail.com', 'Y', '2017-06-01 08:25:43'),
(451, '593012477777c', 'krixxxxtian@gmail.com', 'Y', '2017-06-01 13:04:15'),
(452, '59301f595c278', 'stacienj07@gmail.com', 'Y', '2017-06-01 14:05:07'),
(453, '593038c47237d', 'account.verify@airbnb.com', 'Y', '2017-06-01 15:55:14'),
(454, '59311fb111c9b', 'leal.q.elizabeth@ttu.edu', 'Y', '2017-06-02 08:20:20'),
(455, '593134f58a57f', 'cspole@pacbell.net', 'Y', '2017-06-02 09:50:50'),
(456, '5931af5ba2877', 'brian.chesky@airbnb.com', 'Y', '2017-06-02 18:33:18'),
(457, '5931afb58366e', 'rsvp2tracey@yahoo.com', 'Y', '2017-06-02 18:34:06'),
(458, '5931c7feae67f', 'rbphxcyote@yahoo.com', 'Y', '2017-06-02 20:17:55'),
(459, '5932071e2cb11', 'babsz64@yahoo.com', 'Y', '2017-06-03 00:47:29'),
(460, '59320ab279a3c', 'quyenp520@yahoo.com', 'Y', '2017-06-03 00:58:38'),
(461, '593211fa2aa8c', 'beyberrybea@yahoo.com', 'Y', '2017-06-03 01:29:41'),
(462, '59323f015c449', 'dmcathie@carmelcoffeeroasters.com', 'Y', '2017-06-03 04:45:58'),
(463, '5932e83b24380', 'onemiami1214@yahoo.com', 'Y', '2017-06-03 16:47:32'),
(464, '593314e2220bc', 'hendrix7532@sbcglobal.net', 'Y', '2017-06-03 19:51:54'),
(465, '59335e8e41517', 'toccosells@yahoo.com', 'Y', '2017-06-04 01:13:29'),
(466, '5933935079945', 'miguellegaspi7@yahoo.com', 'Y', '2017-06-04 04:58:23'),
(467, '5933c11ca8cab', 'mtuazon1@yahoo.com', 'Y', '2017-06-04 08:14:17'),
(468, '5934495665e29', 'stevecraig_07@yahoo.com', 'Y', '2017-06-04 17:50:17'),
(469, '59344d8ea3373', 'tracie_crisci@yahoo.com', 'Y', '2017-06-04 18:12:06'),
(470, '593460a5a9a42', 'meclif@yahoo.com', 'Y', '2017-06-04 19:34:01'),
(471, '59346583c294e', 'plowe2@yahoo.com', 'Y', '2017-06-04 19:55:13'),
(472, '5934958f00255', 'tmartinrich@yahoo.com', 'Y', '2017-06-04 23:19:11'),
(473, '5934977117377', 'rdtalsky@yahoo.com', 'Y', '2017-06-04 23:29:00'),
(474, '59349f1b355c5', 'troytolar@yahoo.com', 'Y', '2017-06-05 00:00:31'),
(475, '5950dbe25ca94', 'ghostshipvolunteers@gmail.com', 'Y', '2017-06-26 10:00:02'),
(476, '5950de3d47c97', 'elvisxxx@t-online.de', 'Y', '2017-06-26 10:09:37'),
(477, '5950debf16255', 'jordanpatricklanger@gmail.com', 'Y', '2017-06-26 10:16:23'),
(478, '5950df90d743f', 'jordan@projectwreckless.org', 'Y', '2017-06-26 10:19:30'),
(479, '5951123e84d3e', 'clairin@gmail.com', 'Y', '2017-06-26 13:55:52'),
(480, '59511263cfce7', 'makebigart@gmail.com', 'Y', '2017-06-26 13:56:06'),
(481, '595122fac8d7c', 'mgumpel@gmail.com', 'Y', '2017-06-26 15:02:26'),
(482, '595149fa24404', 'cortesj1619@yahoo.com', 'Y', '2017-06-26 17:53:16'),
(483, '5953b3e5beb32', 'jordan@nonplusultrainc.com', 'Y', '2017-06-28 13:50:37'),
(484, '5953db2c52d40', 'kenna5106@yahoo.com', 'Y', '2017-06-28 16:38:45'),
(485, '5953dd550423c', 'jeff@themidwaysf.com', 'Y', '2017-06-28 16:47:57'),
(486, '5953e2b2901b8', 'jhart886@gmail.com', 'Y', '2017-06-28 17:00:01'),
(487, '5953f08c76306', 'ddoherty6@cfl.rr.com', 'Y', '2017-06-28 18:08:13'),
(488, '5954009999ff2', 'soberanis3@gmail.com', 'Y', '2017-06-28 19:17:53'),
(489, '595404126b00a', 'artheeee@yahoo.com', 'Y', '2017-06-28 19:27:06'),
(490, '59540d21939e3', 'hoginsmog1@yahoo.com', 'Y', '2017-06-28 20:10:10'),
(491, '59540e52954d9', 'reccatinsley@gmail.com', 'Y', '2017-06-28 20:15:12'),
(492, '59540f1617f45', 'brianmac87@yahoo.com', 'Y', '2017-06-28 20:18:54'),
(493, '595410b7f152b', 'rlimoges1@icloud.com', 'Y', '2017-06-28 20:25:29'),
(494, '5954161bd2904', 'mathilde.gourmelon@orange.fr', 'Y', '2017-06-28 20:48:28'),
(495, '595417d24b9c3', 'b.bigas@publicsf.com', 'Y', '2017-06-28 20:55:43'),
(496, '59541d592fb88', 'aalfon10@gmail.com', 'Y', '2017-06-28 21:15:54'),
(497, '595421b9675c2', 'crbuilder@qwestoffice.net', 'Y', '2017-06-28 21:31:40'),
(498, '5954227185101', 'ciminosales@gmail.com', 'Y', '2017-06-28 21:31:59'),
(499, '595428956810d', 'jimrosario22@gmail.com', 'Y', '2017-06-28 22:02:53'),
(500, '59542e267eff9', 'watch986@163.com', 'Y', '2017-06-28 22:31:00'),
(501, '59542fefe2d24', 'ebeesemyer@mac.com', 'Y', '2017-06-28 22:34:41'),
(502, '59543b9b2a4b3', 'hday@heydaycreative.com', 'Y', '2017-06-28 23:28:28'),
(503, '59543e3e95f18', 'onkaar.dhaliwal@gmail.com', 'Y', '2017-06-28 23:39:39'),
(504, '595448fad9cdd', 'johnathanjester@gmail.com', 'Y', '2017-06-29 00:21:04'),
(505, '59545f97e1c8c', 'chrisjlwong@gmail.com', 'Y', '2017-06-29 02:02:00'),
(506, '5954652c76f67', 'deandipstick@yahoo.com', 'Y', '2017-06-29 02:25:49'),
(507, '59546a11c5082', 'karn.mattila@yahoo.com', 'Y', '2017-06-29 02:48:07'),
(508, '59546dc0c0c61', 'vanrees@gmail.com', 'Y', '2017-06-29 03:03:03'),
(509, '5954964e0cf79', 'cqueve1@gmail.com', 'Y', '2017-06-29 05:56:52'),
(510, '59549c49550a8', 'crghaly@gmail.com', 'Y', '2017-06-29 06:21:40'),
(511, '5954a1de95cfd', 'avanil723@gmail.com', 'Y', '2017-06-29 06:44:47'),
(512, '5954b4abe62be', 'mdreynol77@yahoo.com', 'Y', '2017-06-29 08:05:00'),
(513, 'Barnypok', 'ecrev22vtv@hotmail.com', 'Y', '2017-07-07 09:10:12'),
(514, '59706c7cdafa6', 'gabiearellano@yahoo.com', 'Y', '2017-07-20 08:40:29'),
(515, '597078f0a945b', 'mic1213c@yahoo.com', 'Y', '2017-07-20 09:33:38'),
(516, '59707fb945e6d', 'jamjlc17@gmail.com', 'Y', '2017-07-20 10:02:34'),
(517, '59709a79d5474', 'kgilbert7@gmail.com', 'Y', '2017-07-20 11:56:42'),
(518, '5970ad110e5a7', 'harold.anderson60@yahoo.com', 'Y', '2017-07-20 13:16:02'),
(519, '59712353eeb15', 'naldiegn@yahoo.com', 'Y', '2017-07-20 21:40:37'),
(520, '597150278ce73', 'caputomeister@gmail.com', 'Y', '2017-07-21 00:51:52'),
(521, '597166382e4f0', 'avimscher@gmail.com', 'Y', '2017-07-21 02:26:02'),
(522, '59716e293b798', 'haithamshafey@yahoo.com', 'Y', '2017-07-21 02:59:53'),
(523, '597305a4559ed', 'oescobedo2@yahoo.com', 'Y', '2017-07-22 07:58:29'),
(524, '59737cf15ecdf', 'rwallace789@gmail.com', 'Y', '2017-07-22 16:27:31'),
(525, '59738b14a02f1', 'dvu504@gmail.com', 'Y', '2017-07-22 17:26:05'),
(526, '59739eba099f5', 'jjackets7@gmail.com', 'Y', '2017-07-22 18:51:35'),
(527, '5973c614248b1', 'byron3_fly@yahoo.com', 'Y', '2017-07-22 21:39:34'),
(528, '5975b8d7959db', 'lakampg@gmail.com', 'Y', '2017-07-24 09:07:37'),
(529, '5975e4ca6f0c4', 'bobbartosch52@gmail.com', 'Y', '2017-07-24 12:15:07'),
(530, '597606022d4c7', 'slaclaire@gmail.com', 'Y', '2017-07-24 14:36:48'),
(531, '597630f238bc6', 'madsmartguy@yahoo.com', 'Y', '2017-07-24 17:41:27'),
(532, '597656413f030', 'emmanuellehilson@yahoo.co.uk', 'Y', '2017-07-24 20:19:10'),
(533, '59766dc0d59d7', 'shearlann@gmail.com', 'Y', '2017-07-24 21:59:40'),
(534, '597696068bd5e', 'silvangjura@gmail.com', 'Y', '2017-07-25 00:51:19'),
(535, '5976de90bee41', 'michaelrbaron@me.com', 'Y', '2017-07-25 06:00:43'),
(536, '5976f4a4a101d', 'rzackai@yahoo.com', 'Y', '2017-07-25 07:35:01'),
(537, '59789ab6cae3c', 'lsprochnow@gmail.com', 'Y', '2017-07-26 13:35:51'),
(538, '5978b144e86e7', 'elenthall@cox.net', 'Y', '2017-07-26 15:12:06'),
(539, '5978c0eded54c', 'bookkeeper@cactushotel.net', 'Y', '2017-07-26 16:20:24'),
(540, '5978d41de103a', 'ccampbell@compugen.com', 'Y', '2017-07-26 17:40:46'),
(541, '5978e53ece319', 'urbat1@verizon.net', 'Y', '2017-07-26 18:53:48'),
(542, '5978eee9edae9', 'michael.jay.brown@gmail.com', 'Y', '2017-07-26 19:35:07'),
(543, '59790b791cda8', 'donnakagy@gmail.com', 'Y', '2017-07-26 21:36:53'),
(544, '597915489af08', 'jlwilson152@comcast.net', 'Y', '2017-07-26 22:16:38'),
(545, '597916ba98be3', 'wgugliuzza@cox.net', 'Y', '2017-07-26 22:24:59'),
(546, '59792158d8afd', 'jholcombmonroe@gmail.com', 'Y', '2017-07-26 23:10:12'),
(547, '597951129535f', 'jmnewgent@gmail.com', 'Y', '2017-07-27 02:33:56'),
(548, '59798d8ca52d6', 'lagnaut@gmail.com', 'Y', '2017-07-27 06:51:50'),
(549, '597b01889f7e2', 'fldoug42@bellsouth.net', 'Y', '2017-07-28 09:19:05'),
(550, '597b06d4558aa', 'garsch@comcast.net', 'Y', '2017-07-28 09:41:49'),
(551, '597b71e0ad13f', 'nkbizios@verizon.net', 'Y', '2017-07-28 17:18:25'),
(552, '597bada2b4f6c', 'teagandooley@yahoo.com', 'Y', '2017-07-28 21:33:23'),
(553, '597bb7cf80548', 'ltymkiv@yahoo.com', 'Y', '2017-07-28 22:16:56'),
(554, '597bcd752750d', 'brit1090@yahoo.com', 'Y', '2017-07-28 23:49:11'),
(555, '597bd462a79ba', 'fullcircletoys@gmail.com', 'Y', '2017-07-29 00:18:44'),
(556, '597c1b359db08', 'xyzbooter@yahoo.com', 'Y', '2017-07-29 05:20:55'),
(557, '597c229bf161c', 'enjolimckinzie@yahoo.com', 'Y', '2017-07-29 05:52:34'),
(558, '597c79f909983', 'jgrammer2011@gmail.com', 'Y', '2017-07-29 12:05:12'),
(559, '597ced34a4e67', 'jomartinez6@gmail.com', 'Y', '2017-07-29 20:18:30'),
(560, '597cf6a2dd5a5', 'terriharkins@gmail.com', 'Y', '2017-07-29 20:57:07'),
(561, '597d02fa00d99', 'steve.flynt@gmail.com', 'Y', '2017-07-29 21:49:47'),
(562, '597d548f65abd', 'aramisoffical@gmail.com', 'Y', '2017-07-30 03:37:47'),
(563, '597d7e5542197', 'elipyke@gmail.com', 'Y', '2017-07-30 06:36:06'),
(564, '597f0c7b2867f', 'tmdsaz@yahoo.com', 'Y', '2017-07-31 10:54:51'),
(565, '597f571c911c6', 'job33.14@hotmail.fr', 'Y', '2017-07-31 16:13:17'),
(566, '597f7edce9a3f', 'robwagner39@gmail.com', 'Y', '2017-07-31 19:02:51'),
(567, '597fd0d6ef7cf', 'gbk@charter.net', 'Y', '2017-08-01 00:52:39'),
(568, '59819a7906f1a', 'mmaggui1@nycap.rr.com', 'Y', '2017-08-02 09:25:13'),
(569, '5981ca0544f92', 'emileepollock@yahoo.com', 'Y', '2017-08-02 12:48:06'),
(570, '5981d37e19050', 'seijiblue@yahoo.com', 'Y', '2017-08-02 13:28:29'),
(571, '5981d62a87548', 'warrenalec@yahoo.com', 'Y', '2017-08-02 13:41:41'),
(572, '5981dd63eac14', 'sacreisha@yahoo.com', 'Y', '2017-08-02 14:10:45'),
(573, '5981e86b386b7', 'bryanmsun@gmail.com', 'Y', '2017-08-02 14:57:48'),
(574, '59820c1b71666', 'atinklepaugh@gmail.com', 'Y', '2017-08-02 17:30:04'),
(575, '598269043bc62', 'granda.r.daniel@gmail.com', 'Y', '2017-08-03 00:06:24'),
(576, '5982826a609f5', 'brehmrs@gmail.com', 'Y', '2017-08-03 01:54:50'),
(577, '5982a73c327c0', 'stevelaabs@yahoo.com', 'Y', '2017-08-03 04:31:51'),
(578, '5982b9b3d685d', 'farmandgardenflowers@gmail.com', 'Y', '2017-08-03 05:50:59'),
(579, '5982bf72520de', 'zellermd@yahoo.com', 'Y', '2017-08-03 06:15:16'),
(580, '598432a23b761', 'crou4008@bellsouth.net', 'Y', '2017-08-04 08:38:59'),
(581, '59848a0527ec4', 'j.h.berger@t-online.de', 'Y', '2017-08-04 14:52:06'),
(582, '5984a8da82d85', 'jbarner@amckc.com', 'Y', '2017-08-04 17:03:23'),
(583, '5984fcf9c8d97', 'charlesreccardo1@gmail.com', 'Y', '2017-08-04 22:59:08'),
(584, '5984fda8a412a', 'sherry0501@gmail.com', 'Y', '2017-08-04 23:05:13'),
(585, '5987068a09e3b', 'devynmcnichol@gmail.com', 'Y', '2017-08-06 12:04:18'),
(586, '59871a1ed15d8', 'lrnunez67@yahoo.com', 'Y', '2017-08-06 13:31:09'),
(587, '59875634850d6', 'support@seancody.com', 'Y', '2017-08-06 17:47:52'),
(588, '598774e27d8a6', 'tricity1200000@yahoo.com', 'Y', '2017-08-06 19:58:23'),
(589, '5987a9f5622f1', 'mehie1313@gmail.com', 'Y', '2017-08-06 23:44:55'),
(590, '5987ceb1703e2', 'mary.hunter@oup.com', 'Y', '2017-08-07 02:21:58'),
(591, '5987d8226389a', 'gregorypittman@gmail.com', 'Y', '2017-08-07 03:01:55'),
(592, '5989adbb14262', 'judithchambliss@sbcglobal.net', 'Y', '2017-08-08 12:25:31'),
(593, '5989ce397ab29', 'dastalter@optonline.net', 'Y', '2017-08-08 14:44:10'),
(594, '5989d0caea913', 'joe@atarler.com', 'Y', '2017-08-08 14:55:08'),
(595, '5989f0c56e962', 'why_5679@yahoo.com', 'Y', '2017-08-08 17:11:34'),
(596, '5989f80ec622e', 'renetta.wright@gmail.com', 'Y', '2017-08-08 17:42:40'),
(597, '598a07a568b5c', 'jpshardy@gmail.com', 'Y', '2017-08-08 18:49:10'),
(598, '598a165e37e2b', 'quan212bk@yahoo.com', 'Y', '2017-08-08 19:51:59'),
(599, '598a45ddc76c4', 'harindermb@yahoo.com', 'Y', '2017-08-08 23:14:39'),
(600, '598a47bc88a3f', 'figaroo_99@yahoo.com', 'Y', '2017-08-08 23:22:37'),
(601, '598a4d159b51c', 'sfn817@yahoo.com', 'Y', '2017-08-08 23:45:28'),
(602, '598a57f2da5e1', 'tsommerf@gmail.com', 'Y', '2017-08-09 00:28:10'),
(603, '598a7749ce8ad', 'joe0705@gmail.com', 'Y', '2017-08-09 02:45:31'),
(604, '598a7b71935c6', 'fram0027@gmail.com', 'Y', '2017-08-09 03:03:14'),
(605, 'bnpnjpk', 'qcwsbh@tgppfr.com', 'Y', '2017-08-18 23:38:08'),
(606, 'Name\\wf\\f', 'fawawf@hdu.com', 'Y', '2017-08-20 04:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pago` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL,
  `archived` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sessao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `id_produto`, `id_usuario`, `quantidade`, `modelo`, `color`, `pago`, `archived`, `txn_id`, `id_sessao`, `dt_cad`) VALUES
(42, 13, 17, 1, '', '', 'Y', 'Y', 'DE9433808612-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:16:29'),
(41, 9, 17, 1, 'S', '9_Black', 'Y', 'Y', 'DE9433808612-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:16:29'),
(46, 11, 17, 3, '', '', 'Y', 'Y', 'DE2043424946-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:45:20'),
(47, 12, 17, 2, 'L', '12_Purple', 'Y', 'Y', 'DE2043424946-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:45:20'),
(48, 13, 17, 1, '', '', 'Y', 'Y', 'DE2043424946-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:45:20'),
(49, 9, 17, 1, 'XL', '9_Black', 'Y', 'Y', 'DE2043424946-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:45:20'),
(50, 12, 17, 1, 'S', '12_Yellow', 'Y', 'Y', 'DE2043424946-17', '5277i86184gsmups501gdsdo45', '2016-10-21 00:45:20'),
(52, 13, 17, 1, '', '', 'N', 'Y', 'DE4294177650-17', '0fhqt7mc0gpkbaa9cigvqrsmj6', '2016-10-21 17:19:19'),
(53, 13, 17, 1, '', '', 'N', 'Y', 'DE9822754605-17', '0fhqt7mc0gpkbaa9cigvqrsmj6', '2016-10-21 17:26:15'),
(54, 9, 20, 1, 'M', '9_Black', 'N', 'N', 'US5234237523-20', '6b0km1r5rl09k3m50ulph05f55', '2017-04-24 20:28:27'),
(55, 13, 22, 4, '', '', 'Y', 'N', 'US7315140731-22', '3a48sute9ngot7en27ar162j56', '2017-07-30 16:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_paypal`
--

CREATE TABLE `tb_order_paypal` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` text COLLATE utf8_unicode_ci NOT NULL,
  `payer_id` text COLLATE utf8_unicode_ci NOT NULL,
  `payer_status` text COLLATE utf8_unicode_ci NOT NULL,
  `first_name` text COLLATE utf8_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8_unicode_ci NOT NULL,
  `address_city` text COLLATE utf8_unicode_ci NOT NULL,
  `address_country` text COLLATE utf8_unicode_ci NOT NULL,
  `address_country_code` text COLLATE utf8_unicode_ci NOT NULL,
  `address_name` text COLLATE utf8_unicode_ci NOT NULL,
  `address_state` text COLLATE utf8_unicode_ci NOT NULL,
  `address_status` text COLLATE utf8_unicode_ci NOT NULL,
  `address_street` text COLLATE utf8_unicode_ci NOT NULL,
  `address_zip` text COLLATE utf8_unicode_ci NOT NULL,
  `custom` text COLLATE utf8_unicode_ci NOT NULL,
  `handling_amount` text COLLATE utf8_unicode_ci NOT NULL,
  `item_name` text COLLATE utf8_unicode_ci NOT NULL,
  `item_number` text COLLATE utf8_unicode_ci NOT NULL,
  `mc_currency` text COLLATE utf8_unicode_ci NOT NULL,
  `mc_fee` text COLLATE utf8_unicode_ci NOT NULL,
  `mc_gross` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_fee` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_type` text COLLATE utf8_unicode_ci NOT NULL,
  `protection_eligibility` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` text COLLATE utf8_unicode_ci NOT NULL,
  `shipping` text COLLATE utf8_unicode_ci NOT NULL,
  `tax` text COLLATE utf8_unicode_ci NOT NULL,
  `notify_version` text COLLATE utf8_unicode_ci NOT NULL,
  `charset` text COLLATE utf8_unicode_ci NOT NULL,
  `verify_sign` text COLLATE utf8_unicode_ci NOT NULL,
  `error` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order_paypal`
--

INSERT INTO `tb_order_paypal` (`id`, `id_user`, `txn_id`, `payer_email`, `payer_id`, `payer_status`, `first_name`, `last_name`, `address_city`, `address_country`, `address_country_code`, `address_name`, `address_state`, `address_status`, `address_street`, `address_zip`, `custom`, `handling_amount`, `item_name`, `item_number`, `mc_currency`, `mc_fee`, `mc_gross`, `payment_date`, `payment_fee`, `payment_gross`, `payment_status`, `payment_type`, `protection_eligibility`, `quantity`, `shipping`, `tax`, `notify_version`, `charset`, `verify_sign`, `error`) VALUES
(25, 0, '3CJ634485U4567642', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 240', '12681', 'DE4369552562-17', '', 'Produto 1: T-shirt S.H.O.T. Skull</br>\nProduto 2: SHOT Collection</br>\n', 'Quantidade 1: 2</br>\n\nQuantidade 2: 1</br>\n\n', 'USD', '0.03', '0.03', '18:04:02 Oct 11, 2016 PDT', '0.03', '0.03', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'Aa7EqZtD-oUCr6IWqyfIgQT9Kun6AwuR44vLU6DFnJS7bjJoQgqrCrOE', ''),
(26, 0, '3K742888R8760280K', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 240', '12681', 'DE9200306440-17', '', 'Produto 1: SHOT Collection</br>\n', 'Quantidade 1: 1</br>\n\n', 'USD', '0.01', '0.01', '18:33:00 Oct 11, 2016 PDT', '0.01', '0.01', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'AfAkavmC3xOd-bBA3ryNkIOB-nAFANoNMHdkvYusH7Ffk8uqvHHuOeI0', ''),
(27, 0, '2GK80205LE087772K', 'cdbaby@cdbaby.com', 'L2AL4QZKBKD6W', 'verified', 'Barbara', 'Matthews', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '14.72', '11:59:08 Oct 15, 2016 PDT', '', '14.72', 'Completed', 'instant', 'Ineligible', '', '', '', '3.8', 'windows-1252', 'APioMws2wuxbSdpVCGS5l5doAkp1ABD9q.xbvu2f8i8zhFHf5vfaKjjE', ''),
(28, 0, '4NV808339D003632R', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 240', '12681', 'DE2664172057-17', '', 'Produto 1: SHOT Collection (Album)</br>\n', 'Quantidade 1: 1</br>\n\n', 'USD', '0.01', '0.01', '09:30:17 Oct 20, 2016 PDT', '0.01', '0.01', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'ArXI7Hbi2P4lJeWc-yi6x4mjZA-XAF.JuZ0UWZ7RHDDwjz8oT7B1za9V', ''),
(29, 0, '8WF46257W7237381P', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 240', '12681', 'DE7754487552-17', '', 'Produto 1: T-shirt S.H.O.T. Skull</br>\nProduto 2: SHOT Collection (Album)</br>\n', 'Quantidade 1: 1</br>\n\nQuantidade 2: 1</br>\n\n', 'USD', '0.02', '0.02', '17:05:30 Oct 20, 2016 PDT', '0.02', '0.02', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'AlObED.2c.sLLAH84Jr8bZje3vwSA-NefV67hPVIbyOVlpnQJ4.oS9Ec', ''),
(30, 0, '15108614V9795622J', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 240', '12681', 'DE9433808612-17', '', 'Produto 1: T-shirt S.H.O.T. Skull</br>\nProduto 2: SHOT Collection (Album)</br>\n', 'Quantidade 1: 1</br>\n\nQuantidade 2: 1</br>\n\n', 'USD', '0.02', '0.02', '17:16:44 Oct 20, 2016 PDT', '0.02', '0.02', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'AOXBJceK-kZJi0zRBTmCHA6tDRWIAUn5jpr5rDC-AtgOYpWlDczo..sA', ''),
(31, 0, '9SR216162Y8850149', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 240', '12681', 'DE2043424946-17', '', 'Produto 1: BRN FCK (EP)</br>\nProduto 2: T-shirt Model 2</br>\nProduto 3: SHOT Collection (Album)</br>\nProduto 4: T-shirt S.H.O.T. Skull</br>\nProduto 5: T-shirt Model 2</br>\n', 'Quantidade 1: 3</br>\n\nQuantidade 2: 2</br>\n\nQuantidade 3: 1</br>\n\nQuantidade 4: 1</br>\n\nQuantidade 5: 1</br>\n\n', 'USD', '0.08', '0.08', '17:45:49 Oct 20, 2016 PDT', '0.08', '0.08', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'AMPo3K1LSUKSldkfsDQETR.ecu8aAeQGxmvRJ6ytEcExduz-3.4FvUd6', ''),
(32, 0, '7JG505243X836153M', 'henry@shotofficial.com', 'G9WL4KM6AVVGW', 'verified', 'Tiago', 'Terron', 'Berlin', 'Germany', 'DE', 'Henry Terron', 'Berlin', 'confirmed', 'Allee Der Kosmonauten, 24', '12681', 'DE567291906-1', '', 'Produto 1: The Red Box EP</br>\n', 'Quantidade 1: 1</br>\n\n', 'USD', '0.01', '0.01', '12:41:36 Oct 24, 2016 PDT', '0.01', '0.01', 'Completed', 'instant', 'Eligible', '', '', '0.00', '3.8', 'windows-1252', 'A603SUjO7FDctKake8FuDp6m-8UdAamrc5ARx7YDbXIw2wy9ezbKalII', ''),
(33, 0, '7L009817V1808181C', 'starz7@ligtel.com', '9D48C4G4V75AU', 'verified', 'Brent', 'Grate', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '18.00', '16:06:12 May 12, 2017 PDT', '', '18.00', 'Completed', 'instant', 'Ineligible', '', '', '', '3.8', 'windows-1252', 'Ac2vPLbHj-CHp-02lM-tO1.27KzXARnmZwNfhaAxMzYsDQjWgtEX5mMt', ''),
(34, 0, '8DK97495PT776452P', 'OTISTONGEE@aol.com', 'ZCCEBKG2QR45J', 'verified', 'DON', 'MILLER', 'kalamazoo', 'United States', 'US', 'don miller', 'michigan', 'confirmed', '5334 four seasons drive', '49009', 'US7315140731-22', '', 'Produto 1: SHOT Collection (Album)</br>\n', 'Quantidade 1: 4</br>\n\n', 'USD', '1.52', '42.00', '09:40:13 Jul 30, 2017 PDT', '1.52', '42.00', 'Completed', 'instant', 'Eligible', '', '', '2.00', '3.8', 'windows-1252', 'A0q8tFBwCEB3fwyL8HPKd8a9-cq3Aof6.GDI4ehmO2SxdoyxOTDf86rO', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pages_links`
--

CREATE TABLE `tb_pages_links` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `link` text,
  `clicks` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pages_links`
--

INSERT INTO `tb_pages_links` (`id`, `titulo`, `link`, `clicks`) VALUES
(33, 'txt_seo', '&lt;meta name=&quot;description&quot; content=&quot;S.H.O.T. - Official website (Find Music, Photos, Videos, Biography, Discography, Dates, Tickets, Merchandises, etc) (Rock/Metal band based in Berlin)&quot; /&gt;\r\n&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;\r\n&lt;meta name=&quot;keywords&quot; content=&quot;band, brazilian, brazil, germany, berlin, holocaust riot, crazy system, silent harm over time, watchdogs, brn fck, acoustic, blackout, metal, hard rock, punk, sleaze, glam, hair rock Berlin&quot;/&gt;\r\n&lt;meta name=&quot;robots&quot; content=&quot;index, follow&quot;&gt;', 0),
(32, 'newsletter_status', 'ON', 0),
(31, 'blog_status', 'OFF', 0),
(30, 'store_status', 'ON', 0),
(29, 'domain', 'http://shotofficial.com', 0),
(28, 'band_name', 'S.H.O.T.', 0),
(17, 'facebook', 'http://facebook.com/shotfband', 0),
(18, 'twitter', 'http://twitter.com/shotband', 0),
(19, 'youtube', 'http://youtube.com/shotfuckband', 0),
(20, 'soundcloud', 'http://soundcloud.com/shotofficial', 0),
(21, 'instagram', 'http://instagram.com/henry.terron', 0),
(22, 'myspace', '', 0),
(23, 'email1', 'shotband69@gmail.com', 0),
(24, 'email2', 'info@shotofficial.com', 0),
(25, 'telephone', '+49 1520 605 11 60', 0),
(26, 'x', '53', 0),
(27, 'y', '43', 0),
(16, 'req', 'manage-settings-tab_two', 0),
(34, 'txt_js', '', 0),
(35, 'photos_status', 'OFF', 0),
(36, 'videos_status', 'ON', 0),
(37, 'seo', '', 0),
(38, 'impressum', '', 0),
(39, 'status_impressum', 'OFF', 0),
(40, 'multilang', 'OFF', 0),
(41, 'status_soundcloud', 'ON', 0),
(42, 'upload_banner', '', 0),
(43, 't_imagem', '922081973-shot_before_i_die_header.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_posts`
--

CREATE TABLE `tb_posts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `t_titulo` varchar(200) DEFAULT NULL,
  `t_content` longtext,
  `t_titulo_2` varchar(200) NOT NULL,
  `t_content_2` longtext NOT NULL,
  `t_titulo_3` varchar(200) NOT NULL,
  `t_content_3` longtext NOT NULL,
  `t_titulo_4` varchar(200) NOT NULL,
  `t_content_4` longtext NOT NULL,
  `fonte` text NOT NULL,
  `type` enum('post','press') NOT NULL DEFAULT 'post',
  `clicks` int(11) DEFAULT '0',
  `status` enum('on','off','view') DEFAULT 'on',
  `dt_cad` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_posts`
--

INSERT INTO `tb_posts` (`id`, `id_user`, `t_titulo`, `t_content`, `t_titulo_2`, `t_content_2`, `t_titulo_3`, `t_content_3`, `t_titulo_4`, `t_content_4`, `fonte`, `type`, `clicks`, `status`, `dt_cad`) VALUES
(22, 1, 'S.H.O.T. - This is Our War (Official Video)', '&lt;p&gt;We got a new mixing for the song &amp;acute;THIS IS OUR WAR&amp;acute;.&lt;/p&gt;\r\n&lt;p&gt;Check it out and help to spread the word.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;\r\n&lt;object style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; width=&quot;425&quot; height=&quot;350&quot; data=&quot;http://www.youtube.com/v/ggABQuWi0kk&quot; type=&quot;application/x-shockwave-flash&quot;&gt;\r\n&lt;param name=&quot;src&quot; value=&quot;http://www.youtube.com/v/ggABQuWi0kk&quot; /&gt;\r\n&lt;/object&gt;\r\n&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 185, 'on', '2017-02-06 00:37:43'),
(23, 1, 'S.H.O.T. in studio (2017)', '&lt;p&gt;After releasing our last single &amp;acute;THIS IS OUR WAR&amp;acute; in 2016, we decided to go back in studio for working on a new album.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;\r\n&lt;object style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; width=&quot;425&quot; height=&quot;350&quot; data=&quot;http://www.youtube.com/v/JXJXsjmPPW8&quot; type=&quot;application/x-shockwave-flash&quot;&gt;\r\n&lt;param name=&quot;data&quot; value=&quot;http://www.youtube.com/v/JXJXsjmPPW8&quot; /&gt;\r\n&lt;param name=&quot;src&quot; value=&quot;http://www.youtube.com/v/JXJXsjmPPW8&quot; /&gt;\r\n&lt;/object&gt;\r\n&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 182, 'on', '2017-03-10 12:09:30'),
(24, 1, 'New single BEFORE I DIE available on Youtube', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;GONNA FIND MY&amp;nbsp;&lt;span style=&quot;color: #ff0000;&quot;&gt;LIBERATION&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;strong&gt;I&amp;acute;M SO&amp;nbsp;&lt;span style=&quot;color: #ff0000;&quot;&gt;RIGHT&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;span style=&quot;color: #ff0000; font-size: medium;&quot;&gt;&lt;strong&gt;I DO BEFORE I DIE&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;\r\n&lt;object style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; width=&quot;425&quot; height=&quot;350&quot; data=&quot;http://www.youtube.com/v/Ps4vLSPs4MQ&quot; type=&quot;application/x-shockwave-flash&quot;&gt;\r\n&lt;param name=&quot;src&quot; value=&quot;http://www.youtube.com/v/Ps4vLSPs4MQ&quot; /&gt;\r\n&lt;/object&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Music video is coming soon.&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 372, 'on', '2017-03-22 15:19:34'),
(26, 1, 'S.H.O.T. live at Private Club in Berlin', '&lt;p&gt;Hey folks,&lt;/p&gt;\r\n&lt;p&gt;After a while working in studio, we decided to book a concert.&lt;/p&gt;\r\n&lt;p&gt;It is gonna be on this Saturday (27.05) at Private Club in Berlin.&lt;/p&gt;\r\n&lt;p&gt;Find more informations on the facebook event:&amp;nbsp;&lt;a href=&quot;http://www.facebook.com/events/1865303020395286&quot;&gt;http://www.facebook.com/events/1865303020395286&lt;/a&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-9/18671254_1715246305167081_368878388820958363_n.jpg?oh=0f2d5ecdca1e6b13d36202e344576140&amp;amp;oe=59B0EF8C&quot; alt=&quot;&quot; width=&quot;520px&quot; /&gt;&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 49, 'off', '2017-05-23 18:04:17'),
(25, 1, 'NEW MUSIC VIDEO FOR SINGLE BEFORE I DIE', '&lt;p&gt;We are proud to show you guys after few days of working, our newslest video for our second single &amp;acute;BEFORE I DIE&amp;acute; taken from our upcoming album.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Special thanks to Lisa Loriene, Jan Henrik Bauer and Todd James and to all our friends for helping us in this project.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Enjoy it&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;\r\n&lt;object style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; width=&quot;425&quot; height=&quot;350&quot; data=&quot;http://www.youtube.com/v/MqFbwVggLho&quot; type=&quot;application/x-shockwave-flash&quot;&gt;\r\n&lt;param name=&quot;src&quot; value=&quot;http://www.youtube.com/v/MqFbwVggLho&quot; /&gt;\r\n&lt;/object&gt;\r\n&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 142, 'on', '2017-04-28 20:09:32'),
(27, 1, 'S.H.O.T. + REDSUN live at Rock Im Connys', '&lt;p&gt;Suprise everybody!! We have a gig this saturday (17th), tickets are the low low price of 3euros. It would be great to see as many people there as we can! We will unviel a new song or 2 as well!&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/19059130_1744855552206156_3319000669040990780_n.jpg?oh=261a8fe7fa29963474b37732601d3b71&amp;amp;oe=59A253EF&quot; alt=&quot;&quot; width=&quot;500&quot; /&gt;&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 90, 'on', '2017-06-13 14:29:57'),
(28, 1, 'NEW MUSIC VIDEO IS OUT ', '&lt;p style=&quot;text-align: left;&quot;&gt;Check out the new music video \'ANIMALS\'&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;\r\n&lt;object style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; width=&quot;425&quot; height=&quot;350&quot; data=&quot;http://www.youtube.com/v/LbItbU49aIs&quot; type=&quot;application/x-shockwave-flash&quot;&gt;\r\n&lt;param name=&quot;data&quot; value=&quot;http://www.youtube.com/v/LbItbU49aIs&quot; /&gt;\r\n&lt;param name=&quot;src&quot; value=&quot;http://www.youtube.com/v/LbItbU49aIs&quot; /&gt;\r\n&lt;/object&gt;\r\n&lt;/p&gt;', '', '', '', '', '', '', '', 'post', 79, 'on', '2017-06-25 21:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_signup`
--

CREATE TABLE `tb_signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `street_adress` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_province` text NOT NULL,
  `zip_post` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_signup`
--

INSERT INTO `tb_signup` (`id`, `first_name`, `last_name`, `street_adress`, `city`, `state_province`, `zip_post`, `country`, `email`, `password`, `status`, `dt_cad`) VALUES
(12, 'Lily', 'Arthur', '10 Regal Ave', 'HALLAM', 'VIC', '3803', 'AU', 'lily.arthur@optusnet.com.au', '1e9bb06d77b35901b9b28eb2428a0500', 'Y', '2012-07-25 22:27:29'),
(5, 'BIZOUARD', 'Nicolas', '3 chemin du moulin', 'LA TERRASSE', 'ALBERTA', '38660', 'FR', 'ni.bizouard@orange.fr', '9cafdf5ec3f7c68b58e4e91a20c6e472', 'Y', '2012-06-07 11:17:56'),
(15, 'joao paulo', 'reis', 'willian cannavam', 'sorocaba', 'sao paulo', '18077366', 'BR', 'jp.reis@live.com', '3e02efcb0ec91cee1d936f42c911e3a9', 'Y', '2012-08-20 16:38:23'),
(9, 'Lindasy', 'Bulach', '15 Bower Road', 'Semaphore South ', 'SA', '5019', 'AU', 'lindsayb@adam.com.au', '953574d1aa47296a184570d60ea1100d', 'Y', '2012-07-23 04:07:40'),
(14, 'Miloslav', 'Vanek', 'Lazany 48', 'Pencin u Liberce', '', '463 45', 'DJ', 'mila44vanek@seznam.cz', 'da7b106d52cec95d55c219e71a138b69', 'Y', '2012-08-06 05:16:33'),
(17, 'Henry', 'Terron', 'Allee Der Kosmonauten, 24', 'Berlin', 'Berlin', '12681', 'DE', 'henry@shotofficial.com', 'a45958517604f5cd90d6ee51ad9cfdb6', 'Y', '2016-10-11 14:01:23'),
(18, 'Tiago', 'Terron', 'Kopenicker Str, 110', 'Berlin', 'Berlin', '12681', 'DE', 'shotband69@gmail.com', 'a45958517604f5cd90d6ee51ad9cfdb6', 'N', '2016-10-12 00:37:13'),
(20, 'Santino', 'Sasso', '25 APPLETREE DR', 'Saugerties', 'NY', '12477', 'US', 'tinosasso88@hotmail.com', '370062d13852ba143055e0bb578d4bf5', 'Y', '2017-04-24 20:28:08'),
(21, 'Brent', 'Grate', 'PO Box 653', 'Avilla', 'Indiana', '46710', 'US', 'starz7@ligtel.com', '1dbb47d0470384c80262247b91b08b2c', 'Y', '2017-05-12 01:14:50'),
(22, 'don', 'miller', '5334 four seasons drive', 'kalamazoo', 'michigan', '49009', 'US', 'otistongee@aol.com', 'c9e510fa37117cb38486a1e53ae223c8', 'Y', '2017-07-30 16:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_store_carrinho`
--

CREATE TABLE `tb_store_carrinho` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `color` varchar(10) NOT NULL,
  `checkout` enum('Y','N') NOT NULL DEFAULT 'N',
  `id_sessao` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_store_carrinho`
--

INSERT INTO `tb_store_carrinho` (`id`, `id_produto`, `id_usuario`, `quantidade`, `modelo`, `color`, `checkout`, `id_sessao`) VALUES
(156, 13, 0, 5, '', '', 'N', '3qi999c9677e52rlgmanainik2'),
(155, 13, 0, 5, '', '', 'N', 'h9mvqnru4huno2sbkflf04umh7'),
(158, 13, 0, 5, '', '', 'N', 'marcngaqlo3lt8o38e8dm7f9d6'),
(159, 13, 0, 5, '', '', 'N', '70dnovs2frd8j8hounk4197nn2'),
(161, 13, 0, 4, '', '', 'N', '8r4c07k0m3b60d2g4a2n5ak3s7');

-- --------------------------------------------------------

--
-- Table structure for table `tb_store_produtos`
--

CREATE TABLE `tb_store_produtos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `usd_preco` float NOT NULL,
  `brl_preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tipo` enum('NULL','tshirt','cd','outros') NOT NULL DEFAULT 'NULL',
  `modelo` varchar(100) NOT NULL,
  `position` int(11) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_store_produtos`
--

INSERT INTO `tb_store_produtos` (`id`, `imagem`, `titulo`, `descricao`, `usd_preco`, `brl_preco`, `quantidade`, `tipo`, `modelo`, `position`, `status`, `dt_cad`) VALUES
(9, '887229128-tshirt.jpg', 'T-shirt S.H.O.T. Skull', '&lt;p&gt;Won&amp;acute;t you miss the only t-shirt available at our store, are you?&lt;/p&gt;', 10, 30, 0, 'tshirt', '', 0, 'Y', '2016-10-10 23:52:34'),
(11, '887229128-brn_fck_shot_cover.jpg', 'BRN FCK (EP)', '&lt;p&gt;Unfortunatelly the phisical version for this album is not available, but if you find the digital version on this link:&amp;nbsp;&lt;a href=&quot;http://goo.gl/fDzNmG&quot; target=&quot;_blank&quot;&gt;goo.gl/fDzNmG&lt;/a&gt;&lt;/p&gt;', 10, 25, 0, 'cd', '', 0, 'Y', '2016-10-11 14:22:39'),
(13, '887229128-shot_collection_cover.jpg', 'SHOT Collection (Album)', '&lt;p&gt;&lt;strong&gt;SHOT Collection&lt;/strong&gt; is 04 EPs in 01 with 18 songs.&lt;br /&gt;&lt;span style=&quot;color: #ffff99;&quot;&gt;Silent Harm Over Time&lt;/span&gt; | &lt;span style=&quot;color: #ffff99;&quot;&gt;Crazy System&lt;/span&gt; | &lt;span style=&quot;color: #ffff99;&quot;&gt;Watchdogs &lt;/span&gt;| &lt;span style=&quot;color: #ffff99;&quot;&gt;Acoustic S.H.O.T.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', 10, 25, 46, 'cd', '', 0, 'Y', '2016-10-13 01:49:39'),
(12, '887229128-arte_3gray.jpg', 'T-shirt Model 2', '&lt;p&gt;Model available in six different colors.&lt;/p&gt;', 20, 30, 0, 'tshirt', '', 0, 'Y', '2016-10-11 16:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_store_produtos_fotos`
--

CREATE TABLE `tb_store_produtos_fotos` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_store_produtos_fotos`
--

INSERT INTO `tb_store_produtos_fotos` (`id`, `id_produto`, `imagem`, `descricao`, `dt_cad`) VALUES
(116, 11, 'brn_fck_shot_cover2.jpg', '', '2016-10-21 01:26:58'),
(100, 13, 'shot_collection_back_cover.jpg', '', '2016-10-21 00:56:40'),
(99, 13, 'shot_collection_booklet.jpg', '', '2016-10-21 00:56:40'),
(98, 13, 'shot_collection_cover.jpg', '', '2016-10-21 00:56:40'),
(117, 11, 'brn_fck_back_cover.jpg', '', '2016-10-21 01:26:58'),
(105, 12, 'arte_3red.jpg', 'Red', '2016-10-21 00:56:50'),
(104, 12, 'arte_3pink.jpg', 'Purple', '2016-10-21 00:56:50'),
(103, 12, 'arte_3green.jpg', 'Green', '2016-10-21 00:56:50'),
(101, 12, 'arte_3blue.jpg', 'Blue', '2016-10-21 00:56:50'),
(102, 12, 'arte_3gray.jpg', 'Gray', '2016-10-21 00:56:50'),
(118, 9, 'tshirt.jpg', 'Black', '2017-07-30 20:06:08'),
(106, 12, 'arte_3yellow.jpg', 'Yellow', '2016-10-21 00:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sys_informacoes`
--

CREATE TABLE `tb_sys_informacoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sys_informacoes`
--

INSERT INTO `tb_sys_informacoes` (`id`, `titulo`, `texto`) VALUES
(16, 'band_name', 'S.H.O.T.'),
(15, 'telephone', '+49 1520 605 11 60'),
(14, 'email1', 'shotband69@gmail.com'),
(13, 'email2', 'info@shotofficial.com'),
(42, 'impressum', ''),
(44, 'multilang', 'OFF'),
(45, 'status_soundcloud', 'ON'),
(18, 'newsletter_status', 'ON'),
(41, 'seo', ''),
(10, 'txt_seo', '&lt;meta name=&quot;description&quot; content=&quot;S.H.O.T. - Official website (Find Music, Photos, Videos, Biography, Discography, Dates, Tickets, Merchandises, etc) (Rock/Metal band based in Berlin)&quot; /&gt;\r\n&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;\r\n&lt;meta name=&quot;keywords&quot; content=&quot;band, brazilian, brazil, germany, berlin, holocaust riot, crazy system, silent harm over time, watchdogs, brn fck, acoustic, blackout, metal, hard rock, punk, sleaze, glam, hair rock Berlin&quot;/&gt;\r\n&lt;meta name=&quot;robots&quot; content=&quot;index, follow&quot;&gt;'),
(11, 'txt_js', ''),
(12, 'domain', 'http://shotofficial.com'),
(19, 'blog_status', 'OFF'),
(20, 'req', 'manage-settings-tab_two'),
(46, 'upload_banner', ''),
(47, 't_imagem', '922081973-shot_before_i_die_header.jpg'),
(31, 'store_status', 'ON'),
(32, 'facebook', 'http://facebook.com/shotfband'),
(33, 'twitter', 'http://twitter.com/shotband'),
(34, 'youtube', 'http://youtube.com/shotfuckband'),
(35, 'soundcloud', 'http://soundcloud.com/shotofficial'),
(36, 'instagram', 'http://instagram.com/henry.terron'),
(37, 'myspace', ''),
(38, 'photos_status', 'OFF'),
(39, 'videos_status', 'ON'),
(40, 'header_image', '922081973-shot_before_i_die_header.jpg'),
(30, 'y', '43'),
(29, 'x', '53'),
(43, 'status_impressum', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `tb_textos_fixos`
--

CREATE TABLE `tb_textos_fixos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL,
  `dt_update` date NOT NULL,
  `page` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `t_email` varchar(150) NOT NULL,
  `t_password` varchar(40) NOT NULL,
  `t_name` varchar(250) DEFAULT NULL,
  `t_nick` varchar(250) DEFAULT NULL,
  `manage` enum('Y','N') DEFAULT 'N',
  `latest_login` datetime DEFAULT NULL,
  `dt_cad` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `t_email`, `t_password`, `t_name`, `t_nick`, `manage`, `latest_login`, `dt_cad`) VALUES
(1, 'henry@shotofficial.com', 'a45958517604f5cd90d6ee51ad9cfdb6', 'Henry Terron', 'Henry', 'Y', NULL, '2012-01-06 00:22:43'),
(6, 'gerant@shotofficial.com', 'e40f01afbb1b9ae3dd6747ced5bca532', 'Geraint Morton', NULL, 'Y', NULL, '2016-10-25 02:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_online`
--

CREATE TABLE `tb_users_online` (
  `id` int(11) NOT NULL,
  `ip` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `url_atual` text COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_users_online`
--

INSERT INTO `tb_users_online` (`id`, `ip`, `url_atual`, `time`) VALUES
(69527, '127.0.0.1', 'S.H.O.T. - Official band | \'ANIMALS\' new album 2018 | EUROPEAN TOUR APRIL 2018', '1526417545');

-- --------------------------------------------------------

--
-- Table structure for table `tb_videos`
--

CREATE TABLE `tb_videos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `video` text NOT NULL,
  `position` int(11) NOT NULL,
  `main` enum('Y','N') NOT NULL DEFAULT 'N',
  `status` enum('on','off') NOT NULL,
  `dt_cad` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_videos`
--

INSERT INTO `tb_videos` (`id`, `nome`, `video`, `position`, `main`, `status`, `dt_cad`) VALUES
(1, 'Wicked (Official Video)', 'http://www.youtube.com/watch?feature=player_embedded&amp;v=hw_Ug0SQs5M', 1, 'N', 'off', '2012-01-30 23:01:55'),
(2, 'Seventh Night (Official Video)', 'http://www.youtube.com/watch?v=Fo6PdObBR4s&amp;feature=related', 2, 'N', 'off', '2012-01-30 23:02:19'),
(9, 'Spring Melody (Acoustic Video)', 'https://www.youtube.com/watch?v=sEbTAwQI0PU', 0, 'N', 'on', '2016-10-10 23:26:39'),
(8, 'Watchdogs (Music Video)', 'https://www.youtube.com/watch?v=_h2UZWLHc7s', 0, 'N', 'on', '2016-10-10 23:26:17'),
(7, 'Hey Mama! (Acoustic Video)', 'https://www.youtube.com/watch?v=owL9J-wuJVQ', 0, 'N', 'on', '2016-10-10 23:25:49'),
(10, 'I&acute;m Still Alive (Music Video)', 'https://www.youtube.com/watch?v=uFdSzF2NOUM', 0, 'N', 'on', '2016-10-10 23:27:05'),
(11, 'This is Our War (Music Video)', 'https://www.youtube.com/watch?v=ggABQuWi0kk', 0, 'N', 'on', '2016-10-10 23:27:40'),
(12, 'Before I Die (Lyric Video)', 'https://www.youtube.com/watch?v=Ps4vLSPs4MQ', 0, 'N', 'on', '2017-03-22 15:18:11'),
(13, 'Before I Die (Music Video)', 'https://www.youtube.com/watch?v=MqFbwVggLho', 0, 'N', 'on', '2017-04-28 20:09:54'),
(14, 'S.H.O.T. - BEFORE I DIE (Studio Live Session)', 'https://www.youtube.com/watch?v=_KQU0G6GqPA', 0, 'N', 'on', '2017-06-13 14:34:09'),
(15, 'S.H.O.T. - Animals (Official Video) ', 'http://www.youtube.com/watch?v=LbItbU49aIs', 0, 'Y', 'on', '2017-06-25 21:06:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_albuns`
--
ALTER TABLE `tb_albuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_biografia`
--
ALTER TABLE `tb_biografia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blocked_sessions`
--
ALTER TABLE `tb_blocked_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_country`
--
ALTER TABLE `tb_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_discografia`
--
ALTER TABLE `tb_discografia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_events`
--
ALTER TABLE `tb_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fotos`
--
ALTER TABLE `tb_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_membros`
--
ALTER TABLE `tb_membros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order_paypal`
--
ALTER TABLE `tb_order_paypal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `txn_id` (`txn_id`);

--
-- Indexes for table `tb_pages_links`
--
ALTER TABLE `tb_pages_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_signup`
--
ALTER TABLE `tb_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_store_carrinho`
--
ALTER TABLE `tb_store_carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_store_produtos`
--
ALTER TABLE `tb_store_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_store_produtos_fotos`
--
ALTER TABLE `tb_store_produtos_fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sys_informacoes`
--
ALTER TABLE `tb_sys_informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_textos_fixos`
--
ALTER TABLE `tb_textos_fixos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users_online`
--
ALTER TABLE `tb_users_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_albuns`
--
ALTER TABLE `tb_albuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_biografia`
--
ALTER TABLE `tb_biografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_blocked_sessions`
--
ALTER TABLE `tb_blocked_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_discografia`
--
ALTER TABLE `tb_discografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_events`
--
ALTER TABLE `tb_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tb_fotos`
--
ALTER TABLE `tb_fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=769;
--
-- AUTO_INCREMENT for table `tb_membros`
--
ALTER TABLE `tb_membros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_newsletter`
--
ALTER TABLE `tb_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tb_order_paypal`
--
ALTER TABLE `tb_order_paypal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tb_pages_links`
--
ALTER TABLE `tb_pages_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_signup`
--
ALTER TABLE `tb_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_store_carrinho`
--
ALTER TABLE `tb_store_carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `tb_store_produtos`
--
ALTER TABLE `tb_store_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_store_produtos_fotos`
--
ALTER TABLE `tb_store_produtos_fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `tb_sys_informacoes`
--
ALTER TABLE `tb_sys_informacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tb_textos_fixos`
--
ALTER TABLE `tb_textos_fixos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_users_online`
--
ALTER TABLE `tb_users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69528;
--
-- AUTO_INCREMENT for table `tb_videos`
--
ALTER TABLE `tb_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
