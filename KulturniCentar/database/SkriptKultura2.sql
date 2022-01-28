CREATE DATABASE `IP_KOL2022_1_KULTURA2` CHARACTER SET utf8 COLLATE utf8_general_ci;

create table `IP_KOL2022_1_KULTURA2`.`RepertoarKoncerta`
(
   ID                         int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   NazivKoncerta              varchar(40) NOT NULL,
   DatumIzvodjenjaKoncerta    date NOT NULL,
   RedniBrojKompozicije       int NOT NULL,
   NazivAutora                varchar(80) NOT NULL,
   NazivKompozicije           varchar(40) NOT NULL,
   NazivIzvodjaca             varchar(80) NOT NULL
);

create table `IP_KOL2022_1_KULTURA2`.`KORISNIK`
(
   IDKORISNIKA          int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   PREZIME              varchar(50) not null,
   IME                  varchar(40) not null,
   EMAIL                varchar(60) not null,
   KORISNICKOIME        varchar(30) not null,
   SIFRA                varchar(30) not null,
   URLSLike		         varchar(250) null,
   statusucesca		   varchar(30) not null
);