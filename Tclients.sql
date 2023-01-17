--
--Database: 'leclercrenovation'
--
-- --------------------------------------------------------



USE leclercrenovation
GO


-- Table structure for table `clients`
--
CREATE TABLE clients(
	cli_id INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	cli_nom VARCHAR(30) NOT NULL,
	cli_prenom VARCHAR(30)  NOT NULL,
	cli_adresse VARCHAR(70) NOT NULL,
    cli_ville VARCHAR(30) NOT NULL,
    cli_codepostal INT  NOT NULL,
    cli_mail VARCHAR(50) NOT NULL);

	INSERT INTO clients (cli_nom,cli_prenom,cli_adresse,cli_ville,cli_codepostal,cli_mail)
	VALUES
	('Guillet','Audrey','54 Place Marechal Joffre','Hyeres',83400,''),
	('','Bar Tabac de la Mairie','Boulevard Lazare Carnot','Collobrieres',83610,''),
	('','OURSIBAT','Avenue du Colonel Fabien','Carnoules',83660,''),
	('','CHEZ NENE','222 chemin des plantades','LA GARDE',83130,''),
	('GUENET','Clementine','Les rouguielles','Puget sur argens',83480,''),
	('Mr&Mme MAUCLER','','723 chemin  Hoirs','SIX FOURS LES PLAGES',81140,''),
	('SIMON','Audrey','92 avenue blaise pascal','Draguignan',83300,'sim8313@msn.com'),
	('BONAMICO','Matthieu','1 rue Georges Saunier','Toulon',83000,''),
	('BONAMICO','Jean Marc','484 avenue de la santoline clos des pins','Saint Raphael',83700,''),
	('Mr PEREDA & Mme CHESTA','','15 Chemin du bon puit','Pierrefeu',83390,''),
	('Mme BOUAKKADIA','','449 Chemin de la tourisse','LA MOUTONNE',83260,''),
	('Mme LAPORTE','','567 Avenue des Magnolias','Saint Raphael',83700,''),
	('LEHOT','Severine','1563 Boulevard de l’aspe','Saint Raphael',83700,''),
	('PAGEARD','Sophie','1765 Boulevard de l’aspe','Saint Raphael',83700,''),
	('PAGEARD','Sophie','68 Avenue de la république','Toulon',83000,''),
	('Vallerot','Severine','60 allée des Bruyères','Fréjus',83700,''),
	('Mme VANGEERT','','192 Avenue caroline','Saint Raphael',83700,''),
	('Mr VANEGAS','Nelson','55 rue Gauthey','Paris',75017,''),
	('Mr COME','','1042 CHEMIN LONG','Cassis',83260,''),
	('Mr LACROIX','Jean-Marc','484 avenue de la santoline clos des pins','Saint Raphael',83700,''),
	('Mr PEREDA','Ludovic','15 Chemin du bon puit','Pierrefeu',83390,'pereda@live.fr'),
	('','Sebastien','89 Boulevard de nice','Saint Raphael',83700,'');




	
	--CREATE TABLE travaux(
	--tra_id INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	--tra_designation VARCHAR(100) NOT NULL,
	--tra_ville VARCHAR(30)  NOT NULL,
	--tra_date  DATE);




