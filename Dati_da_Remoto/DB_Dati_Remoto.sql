
-- --------------------------------------------------------
-- DROP TABLE IF EXISTS `Timbrature`;

-- 
-- Struttura della tabella Timbrature`
-- 
CREATE TABLE IF NOT EXISTS `Timbrature` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT,
  `CodBadge` text NOT NULL,
  `dateentered` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- 

INSERT INTO `Timbrature` VALUES (1, '466A25D9D0', '2019-02-08 18:12:13');

-- --------------------------------------------------------


