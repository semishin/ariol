-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "brief" ------------------------------------
CREATE TABLE `brief` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`phone` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`core` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`type` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`purpose` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`brand` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`example` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`section` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`language` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`style` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`budget` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`additional` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 27;
-- ---------------------------------------------------------


-- Dump data of "brief" ------------------------------------
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '24', 'бог', 'бог@рай.ком', 'бог-бог', 'ну блин', 'a:1:{i:0;s:37:"Информационный сайт";}', 'a:2:{i:0;s:31:"Повышение имиджа";i:1;s:61:"Продвижение нового товара/услуги";}', 'Го', 'Го.го', 'a:2:{i:0;s:33:"каталог продукции";i:1;s:74:"корзина(возможность приемаonline платежей)";}', 'a:2:{i:0;s:14:"Русский";i:1;s:20:"Английский";}', 'N;', '100 у.е.', 'N;' );
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '26', 'бог2', 'бог2@рай.ком', 'бог-бог', 'ну блин', 'a:1:{i:0;s:37:"Информационный сайт";}', 'a:2:{i:0;s:31:"Повышение имиджа";i:1;s:61:"Продвижение нового товара/услуги";}', 'Го', 'Го.го', 'a:2:{i:0;s:33:"каталог продукции";i:1;s:74:"корзина(возможность приемаonline платежей)";}', 'a:2:{i:0;s:14:"Русский";i:1;s:20:"Английский";}', 'a:5:{i:0;s:1:"2";i:1;s:1:"7";i:2;s:1:"3";i:3;s:1:"2";i:4;s:1:"5";}', '100 у.е.', 'N;' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


