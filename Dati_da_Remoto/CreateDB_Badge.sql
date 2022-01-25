DROP TABLE IF EXISTS Employees;
DROP TABLE IF EXISTS EmployeesAtWork;
DROP TABLE IF EXISTS History;

CREATE TABLE Employees (
	id_Employee INTEGER PRIMARY KEY AUTOINCREMENT,
	Name TEXT,
	Sex TEXT,
	CodBadge TEXT
);

CREATE TABLE History (
	Name TEXT,
	Status TEXT,
	Date TEXT
);

CREATE TABLE EmployeesAtWork (
	id_Employee INTEGER,
	Date TEXT,
	CONSTRAINT EmployeesAtWork_Employees FOREIGN KEY (id_Employee) REFERENCES Employees(id_Employee)
);

INSERT INTO Employees (Name,Sex,CodBadge) VALUES('Emanuele','M','74F8483');
INSERT INTO Employees (Name,Sex,CodBadge) VALUES('Alessia','F','8C166AC');
INSERT INTO Employees (Name,Sex,CodBadge) VALUES('Antimo','M','466A25D');
INSERT INTO Employees (Name,Sex,CodBadge) VALUES('Antimo Marzocchella','M','466A25D9D0');
INSERT INTO Employees (Name,Sex,CodBadge) VALUES('Antimo M.','M','466A25D9D');
INSERT INTO Employees (Name,Sex,CodBadge) VALUES('Antimo M.','M','25D9D0');


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

