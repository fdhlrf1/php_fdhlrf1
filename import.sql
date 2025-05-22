CREATE TABLE hobi (
    id int NOT NULL AUTO_INCREMENT,
    person_id int DEFAULT NULL,
    hobi varchar(200) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO hobi VALUES (1,1,'Futsal'),(2,1,'Soccer'),(3,1,'Tenis Meja'),(4,2,'Basket'),(5,2,'Renang'),(6,3,'Futsal'),(7,3,'Membaca'),(8,3,'Renang'),(9,3,'Game'),(10,4,'Renang'),(11,5,'Jalan-Jalan');

CREATE TABLE person (
    id int NOT NULL AUTO_INCREMENT,
  	nama varchar(200) NOT NULL,
  	alamat varchar(200) DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO person VALUES (1,'Fauzan','Bandung'),(2,'Riki','Jakarta'),(3,'Dedi','Surabaya'),(4,'Irawan','Padang'),(5,'Indah','Padang')