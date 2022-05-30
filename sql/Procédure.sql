-- Procédure Compte--
--On récupère IdReservation + DateJour de la réservation en fonction du mois avant celui fournit en paramètre--
CREATE PROCEDURE Compte()
BEGIN
DECLARE @IdReservation, @PrixPlat, @PrixMenu, @CoutPlat, @CoutMenu INT;
DECLARE @DateJour DATE;

CREATE TEMPORARY TABLE boby(
    IdReservation INT,
    DateJour DATE,
    Prix INT,
    Cout INT,
);

DECLARE CalculPrix CURSOR FOR SELECT IdReservation, DateJour FROM reservation WHERE Mois - 1 < MONTH(DateJour) < Mois;

OPEN CalculPrix
 
FETCH CalculPrix INTO @IdReservation, @DateJour;
 
WHILE @@FETCH_STATUS = 0
BEGIN
    CALL PrixPlat(@IdReservation)
    CALL PrixMenu(@IdReservation)
    FETCH CalculPrix INTO @IdReservation, @DateJour;
END

CLOSE CalculPrix
DEALLOCATE CalculPrix

--Procédure Prixplat--
--On récupère la somme des couts (plats) d'une réservation donnée en paramètre--
CREATE PROCEDURE PrixPlat(@IdReservation) 
BEGIN
DECLARE @Prix, @Cout INT;
SELECT SUM(PrixPlat), SUM(Cout) FROM Consommer INNER JOIN Plat WHERE Plat.IdPlat = Consommer.IdPlat AND IdReservation = @IdReservation GROUP BY IdReservation;
RETURN 
END

CREATE PROCEDURE PrixMenu(@IdReservation)
BEGIN
DECLARE @PrixMenu, @CoutMenu INT;
SELECT SUM(Prix), SUM(Cout) FROM Choisir INNER JOIN Menu WHERE Menu.IdMenu = Choisir.IdMenu AND IdReservation = @IdReservation GROUP BY IdReservation;
END