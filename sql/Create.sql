CREATE TABLE Menu(
   IdMenu INT AUTO_INCREMENT,
   Nom VARCHAR(50),
   Prix DECIMAL(15,2),
   PRIMARY KEY(IdMenu)
);

CREATE TABLE CategoriePlat(
   IdCategorie INT AUTO_INCREMENT,
   Nom VARCHAR(50),
   PRIMARY KEY(IdCategorie)
);

CREATE TABLE Ingredient(
   IdIngredient INT AUTO_INCREMENT,
   Libelle VARCHAR(50),
   PRIMARY KEY(IdIngredient)
);

CREATE TABLE Animation(
   IdAnimation INT AUTO_INCREMENT,
   Poster VARCHAR(50),
   DateA DATE,
   Heure TIME,
   NomGroupe VARCHAR(50),
   PRIMARY KEY(IdAnimation)
);

CREATE TABLE Tables(
   IdTable INT AUTO_INCREMENT,
   IntExt BOOLEAN NOT NULL,
   NbSiege INT,
   Disponible BOOLEAN,
   PRIMARY KEY(IdTable)
);

CREATE TABLE Utilisateur(
   idUtilisateur INT AUTO_INCREMENT,
   Email VARCHAR(50),
   Password VARCHAR(150),
   PRIMARY KEY(idUtilisateur)
);

CREATE TABLE Plat(
   IdPlat INT AUTO_INCREMENT,
   PrixPlat DECIMAL(10,2),
   Photo VARCHAR(50),
   Libelle VARCHAR(50),
   IdCategorie INT NOT NULL,
   PRIMARY KEY(IdPlat),
   FOREIGN KEY(IdCategorie) REFERENCES CategoriePlat(IdCategorie)
);

CREATE TABLE Reservation(
   IdReservation INT AUTO_INCREMENT,
   Nom VARCHAR(50),
   NbClient INT,
   Telephone VARCHAR(15),
   NbVehicules INT,
   NbPHandicape INT,
   Allergene VARCHAR(50),
   IdUtilisateur INT NOT NULL,
   PRIMARY KEY(IdReservation),
   FOREIGN KEY(IdUtilisateur) REFERENCES Utilisateur(IdUtilisateur)
);

CREATE TABLE Composer(
   IdPlat INT,
   IdIngredient INT,
   PRIMARY KEY(IdPlat, IdIngredient),
   FOREIGN KEY(IdPlat) REFERENCES Plat(IdPlat),
   FOREIGN KEY(IdIngredient) REFERENCES Ingredient(IdIngredient)
);

CREATE TABLE Contenir(
   IdPlat INT,
   IdMenu INT,
   PRIMARY KEY(IdPlat, IdMenu),
   FOREIGN KEY(IdPlat) REFERENCES Plat(IdPlat),
   FOREIGN KEY(IdMenu) REFERENCES Menu(IdMenu)
);

CREATE TABLE Reserver(
   IdReservation INT,
   IdTable INT,
   PRIMARY KEY(IdReservation, IdTable),
   FOREIGN KEY(IdReservation) REFERENCES Reservation(IdReservation),
   FOREIGN KEY(IdTable) REFERENCES Tables(IdTable)
);

CREATE TABLE Choisir(
   IdMenu INT,
   IdReservation INT,
   PRIMARY KEY(IdMenu, IdReservation),
   FOREIGN KEY(IdMenu) REFERENCES Menu(IdMenu),
   FOREIGN KEY(IdReservation) REFERENCES Reservation(IdReservation)
);

CREATE TABLE Consommer(
   IdPlat INT,
   IdReservation INT,
   PRIMARY KEY(IdPlat, IdReservation),
   FOREIGN KEY(IdPlat) REFERENCES Plat(IdPlat),
   FOREIGN KEY(IdReservation) REFERENCES Reservation(IdReservation)
);
