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

CREATE TABLE Client(
   IdClient INT,
   Nom VARCHAR(50),
   NbClient INT,
   Telephone VARCHAR(15),
   NbVehicules INT,
   NbPHandicape INT,
   Allergene VARCHAR(50),
   PRIMARY KEY(IdClient)
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

CREATE TABLE Utilisateurs(
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
   IdClient INT,
   IdTable INT,
   PRIMARY KEY(IdClient, IdTable),
   FOREIGN KEY(IdClient) REFERENCES Client(IdClient),
   FOREIGN KEY(IdTable) REFERENCES Tables(IdTable)
);

CREATE TABLE Choisir(
   IdMenu INT,
   IdClient INT,
   PRIMARY KEY(IdMenu, IdClient),
   FOREIGN KEY(IdMenu) REFERENCES Menu(IdMenu),
   FOREIGN KEY(IdClient) REFERENCES Client(IdClient)
);

CREATE TABLE Consommer(
   IdPlat INT,
   IdClient INT,
   PRIMARY KEY(IdPlat, IdClient),
   FOREIGN KEY(IdPlat) REFERENCES Plat(IdPlat),
   FOREIGN KEY(IdClient) REFERENCES Client(IdClient)
);
