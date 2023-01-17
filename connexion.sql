CREATE LOGIN admin_bdd WITH PASSWORD = 'admin_bdd123', DEFAULT_DATABASE =leclercrenovation;

GO



USE leclercrenovation;

go



CREATE USER admin_bdd for login [admin_bdd];

GO



CREATE ROLE Administrateur;
ALTER ROLE Administrateur ADD MEMBER Administrateur;
GRANT SELECT ON DATABASE::leclercrenovation TO Administrateur ; -- Read
GRANT INSERT ON DATABASE::leclercrenovation  TO Administrateur; -- Create
GRANT UPDATE ON DATABASE::leclercrenovation TO Administrateur; -- Update
GRANT DELETE ON DATABASE::leclercrenovation  TO Administrateur; -- Delete

GO
