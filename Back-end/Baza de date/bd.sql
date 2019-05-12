DROP TABLE IF EXISTS Mese;

DROP TABLE IF EXISTS Stoc;

DROP TABLE IF EXISTS Produse;

DROP TABLE IF EXISTS Categorii;

DROP TABLE IF EXISTS Note;
 
DROP TABLE IF EXISTS Clienti;

DROP TABLE IF EXISTS Comanda;

CREATE TABLE Clienti(
	id_client INT NOT NULL PRIMARY KEY,
	nume VARCHAR(30) NOT NULL,
	prenume VARCHAR(30) NOT NULL,
	parola VARCHAR(20) NOT NULL,
	numar_telefon VARCHAR(11) NOT NULL
);

CREATE TABLE Comanda(
	id_nota INT NOT NULL PRIMARY KEY,
	id_client INT NOT NULL,
	id_produs INT NOT NULL,
	id_comanda INT NOT NULL,
	FOREIGN KEY (id_client) REFERENCES Clienti (id_clienti),
	FOREIGN KEY (id_produs) REFERENCES Produse(id_produs),
	FOREIGN KEY (id_nota) REFERENCES Note(id_nota)
	
);
 
CREATE TABLE Stoc(
	id_stoc INT NOT NULL PRIMARY KEY,
	id_produs INT NOT NULL,
	data_update DATE NOT NULL,
	numar INT NOT NULL,
	FOREIGN KEY (id_produs) REFERENCES Produse (id_produs)
);

CREATE TABLE Note(
	id_nota INT NOT NULL PRIMARY KEY,
    id_client INT NOT NULL,
	cod INT NOT NULL,
	data_inregistrare DATE NOT NULL,
    FOREIGN KEY (id_client) REFERENCES Clienti (id_clienti)
);

CREATE TABLE Categorii(
	categorie VARCHAR(100) NOT NULL PRIMARY KEY,
	poza VARCHAR(30) NOT NULL,
	alergeni VARCHAR(100) NOT NULL
);

CREATE TABLE Produse(
	id_produs INT NOT NULL PRIMARY KEY,
	nume VARCHAR(30) NOT NULL,
	categorie VARCHAR(30) NOT NULL,
	poza VARCHAR(30) NOT NULL,
	descriere VARCHAR(300) NOT NULL,
	pret INT NOT NULL,
	FOREIGN KEY (categorie) REFERENCES Categorii(categorie)
);

CREATE TABLE Mese(
	id_mese INT NOT NULL PRIMARY KEY,
	id_client INT NOT NULL,
	status_masa VARCHAR(30) NOT NULL,
	numar INT NOT NULL
	
);

