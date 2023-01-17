   --
--Database: 'leclercrenovation'
--
-- --------------------------------------------------------

USE leclercrenovation
GO


-- Table structure for table `materiaux`
--
   
   
   
   CREATE TABLE materiaux(
     mat_id INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	mat_materiaux VARCHAR(100) NOT NULL,
	mat_unite VARCHAR(10)  NOT NULL,
	mat_quantite FLOAT NOT NULL,
    mat_puht FLOAT NOT NULL,
    mat_totalht FLOAT  NOT NULL);

	INSERT INTO materiaux (mat_materiaux,mat_unite,mat_quantite,mat_puht,mat_totalht)
	VALUES
	('Faux plafond suspendu pr�t � peindre','M2','46.8','45','2106'),
	('pose de cloisons  en p�riph�rie de murs pr�t � peindre','M2','82.2','38','3123.60'),
	('pose de cloisons pr�t � peindre','M2','81.6','45','3672'),
	('Pose de wc','Forfait','0','0','1800'),
	('pose d�une estrade en bois','Forfait','0','0','850'),
	('pose de carrelage pour estrade','M2','7.25','55','398.75'),
	('pose d�un cumulus multi positions','Forfait','0','0','1800'),
	('R�fection de plomberie alimentation et �vacuation','Forfait','0','0','2400'),
	('Pose de carrelage pour douche','M2','5.4','55','297'), 
    ('pose de 2 portes scrigno + une porte WC handicap�','Forfait','0','0','3600'),
	('pose d�interrupteur de spot au plafond et prise de courant','Forfait','0','0','5900'),
	('Fourniture et pose de 2 couches de peinture acrylique blanc','M2','208','20','4160'),
	('D�pose et repose de plinthes � gorges','ML','8','28.75','230'),
	('D�pose et repose de carrelage (30x30)','M2','5','111','555'),
	('�vacuation des gravas','Forfait','0','0','250'),
	('R�agencement cuisine travaux d��lectricit� et plomberie (cause fuite)','Forfait','0','0','655'),
	('Cr�ation de cloison et plafond','M2','250','20','5000'),
	('D�pose et �vacuation de cloison et carrelage','0','0','0','0');