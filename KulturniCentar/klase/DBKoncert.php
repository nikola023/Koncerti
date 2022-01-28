<?php
class DBKoncert extends Tabela 
{
// ATRIBUTI
private $bazapodataka;
private $UspehKonekcijeNaDBMS;
//
public $NAZIVKONCERTA;
public $DATUMIZVODJENJAKONCERTA; 
public $REDNIBROJKOMPOZICIJE;
public $NAZIVAUTORA;
public $NAZIVKOMPOZICIJE; 
public $NAZIVIZVODJACA;

// METODE

// konstruktor

public function DajKolekcijuSvihKoncerata()
{
$SQL = "select * from `REPERTOARKONCERTA` ORDER BY DATUMIZVODJENJAKONCERTA DESC";
$this->UcitajSvePoUpitu($SQL); // puni atribut bazne klase Kolekcija
return $this->Kolekcija; // uzima iz baznek klase vrednost atributa
}

public function DajKolekcijuKoncerataFiltrirano($filterPolje, $filterVrednost, $nacinFiltriranja, $Sortiranje)
{
if ($nacinFiltriranja=="like")
{
$SQL = "select * from `REPERTOARKONCERTA` WHERE $filterPolje like '%".$filterVrednost."%' ORDER BY $Sortiranje";
}
else
{
$SQL = "select * from `REPERTOARKONCERTA` WHERE $filterPolje ='".$filterVrednost."' ORDER BY $Sortiranje";
}
$this->UcitajSvePoUpitu($SQL);
return $this->Kolekcija; // uzima iz baznek klase vrednost atributa
}


public function DajUkupanBrojSvihKoncerata($KolekcijaZapisa)
{
return $this->BrojZapisa;
}

public function DodajNoviKoncert()
{
	$SQL = "INSERT INTO `REPERTOARKONCERTA` (NAZIVKONCERTA, DATUMIZVODJENJAKONCERTA, REDNIBROJKOMPOZICIJE, NAZIVAUTORA, NAZIVKOMPOZICIJE, NAZIVIZVODJACA) VALUES ('$this->NAZIVKONCERTA','$this->DATUMIZVODJENJAKONCERTA', '$this->REDNIBROJKOMPOZICIJE', '$this->NAZIVAUTORA', '$this->NAZIVKOMPOZICIJE', '$this->NAZIVIZVODJACA')";
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}

public function ObrisiKoncert($IdZaBrisanje)
{
	$SQL = "DELETE FROM `REPERTOARKONCERTA` WHERE ID=".$IdZaBrisanje;
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}

public function IzmeniKoncert($IdZaIzmenu, $NovNazivKoncerta, $NovDatumIzvodjenjaKoncerta, $NovRedniBrojKompozicije, $NovNazivAutora, $NovNazivKompozicije, $NovNazivIzvodjaca)
{
	$SQL = "UPDATE `REPERTOARKONCERTA` SET NAZIVKONCERTA='".$NovNazivKoncerta."', DATUMIZVODJENJAKONCERTA='".$NovDatumIzvodjenjaKoncerta."', REDNIBROJKOMPOZICIJE='".$NovRedniBrojKompozicije."', NAZIVAUTORA='".$NovNazivAutora."', NAZIVKOMPOZICIJE='".$NovNazivKompozicije."', NAZIVIZVODJACA='".$NovNazivIzvodjaca."' WHERE ID=".$IdZaIzmenu;
	$greska=$this->IzvrsiAktivanSQLUpit($SQL);
	
	return $greska;
}

// ostale metode 




}
?>