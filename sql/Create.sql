CREATE TABLE Menu(
   IdMenu INT,
   Nom VARCHAR(50),
   Prix DECIMAL(15,2),
   PRIMARY KEY(IdMenu)
);

CREATE TABLE CategoriePlat(
   IdCategorie INT,
   Nom VARCHAR(50),
   PRIMARY KEY(IdCategorie)
);

CREATE TABLE Ingredient(
   IdIngredient INT,
   Libelle VARCHAR(50),
   PRIMARY KEY(IdIngredient)
);

CREATE TABLE Animation(
   IdAnimation INT,
   Poster VARCHAR(50),
   DateA DATE,
   Heure TIME,
   NomGroupe VARCHAR(50),
   PRIMARY KEY(IdAnimation)
);

CREATE TABLE Tables(
   IdTable INT,
   IntExt LOGICAL NOT NULL,
   NbSiege INT,
   Disponible LOGICAL,
   PRIMARY KEY(IdTable)
);

CREATE TABLE Utilisateur(
   idUtilisateur INT,
   Email VARCHAR(50),
   Password VARCHAR(50),
   PRIMARY KEY(idUtilisateur)
);

CREATE TABLE Plat(
   IdPlat INT,
   PrixPlat DECIMAL(10,2),
   Photo VARCHAR(50),
   Libelle VARCHAR(50),
   IdCategorie INT NOT NULL,
   PRIMARY KEY(IdPlat),
   FOREIGN KEY(IdCategorie) REFERENCES CategoriePlat(IdCategorie)
);

CREATE TABLE Reservation(
   IdReservation INT,
   Nom VARCHAR(50),
   NbClient INT,
   Telephone VARCHAR(15),
   NbVehicules INT,
   NbPHandicape INT,
   Allergene VARCHAR(50),
   idUtilisateur INT NOT NULL,
   PRIMARY KEY(IdReservation),
   FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur)
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
