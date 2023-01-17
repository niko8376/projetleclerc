--
--Database: 'leclercrenovation'
--
-- --------------------------------------------------------



USE leclercrenovation
GO

CREATE TABLE travaux(
	tra_id INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	tra_designation VARCHAR(100) NOT NULL,
	tra_ville VARCHAR(30)  NOT NULL,
	tra_date  DATE);

	INSERT INTO travaux (tra_designation,tra_ville,tra_date)
	VALUES
	('renovation interieur','Hyeres','2022/07/10'),
	('Cuisine','Collobrieres','2022/03/01'),
	('Chantier de pierre feu','Carnoules','2022/02/17'),
	('Pose cloison & isolation','La garde','2021/01/07'),
	('Pose de carrelage incluant colle et joint','La garde','2021/04/12'),
	('Pose d’un plancher en bois','La garde','2021/04/12'),
	('creation de piscine','Puget sur argens','2021/07/07'),
	('Toiture','Six fours les plages','2021/10/04'),
	('Travaux de maconnerie','Draguignan','2022/02/15'),
	('Renovation interieur','Toulon','2022/06/14'),
	('Travaux exterieur','Saint raphael','2022/05/05'),
	('Mur agglo bancher','Saint raphael','2022/05/19'),
	('Renovation energetique','Pierrefeu','2022/07/07'),
	('Renovation exterieur','La Moutonne','2022/04/25'),
	('Renovation exterieur','Saint Raphael','2022/04/05'),
	('Travaux suite aux degats des eaux','Saint Raphael','2022/07/13'),
	('Renovation','Saint Raphael','2022/02/01'),
	('Renovation','Saint Raphael','2022/07/01'),
	('Location','Saint Raphael','2022/04/15'),
	('Salle de bain','Saint Raphael','2022/04/15'),
	('Salle de bain','Saint Raphael','2022/04/20'),
	('Travaux exterieur','Frejus','2022/04/07'),
	('Travaux supplementaire','Frejus','2022/04/07'),
	('Maçonnerie','Frejus','2022/03/10'),
	('Renovation piscine','Saint raphael','2022/06/24'),
	('Renovation interieur','Paris','2022/06/03'),
	('Maçonnerie','Cassis','2021/04/17'),
	('Terrasse','Saint raphael','2022/04/07'),
	('Extension','Pierrefeu','2021/02/27'),
	('Reglement fin de chantier','Pierrefeu','2022/05/04'),
	('Isolation & Enduit de façade','Pierrefeu','2022/02/23'),
	('renovation','Pierrefeu','2022/02/27'),
	('Electricite & Plomberie','Pierrefeu','2022/02/27'),
	('Extension','Pierrefeu','2022/02/27'),
	('Renovation interieur avec fourniture','Saint raphael','2022/06/22');
