 <?php
        
		session_start();  
	   // citanje vrednosti iz sesije - da bismo uvek proverili da li je to prijavljeni korisnik
	   $idkorisnika=$_SESSION["idkorisnika"];
	   
	   // preuzimanje vrednosti sa forme
	   $ID=$_POST['ID'];
	   $NazivKoncerta=$_POST['NazivKoncerta'];
	   $DatumIzvodjenjaKoncerta=$_POST['DatumIzvodjenjaKoncerta'];
	   $RedniBrojKompozicije=$_POST['RedniBrojKompozicije'];
	   $NazivAutora=$_POST['NazivAutora'];
	   $NazivKompozicije=$_POST['NazivKompozicije'];
	   $NazivIzvodjaca=$_POST['NazivIzvodjaca'];
	   
	   // koristimo klasu za poziv procedure za konekciju
	require "klase/BaznaKonekcija.php";
	require "klase/BaznaTabela.php";
	$KonekcijaObject = new Konekcija('klase/BaznaParametriKonekcije.xml');
	$KonekcijaObject->connect();
	if ($KonekcijaObject->konekcijaDB) // uspesno realizovana konekcija ka DBMS i bazi podataka
    {	
		require "klase/DBKoncert.php";
		$KoncertObject = new DBKoncert($KonekcijaObject, 'repertoarkoncerta');
		$greska=$KoncertObject->IzmeniKoncerT($ID, $NazivKoncerta, $DatumIzvodjenjaKoncerta, $RedniBrojKompozicije , $NazivAutora, $NazivKompozicije, $NazivIzvodjaca);
	}
	else
	{
		echo "Nije uspostavljena konekcija ka bazi podataka!";
	}
		
    $KonekcijaObject->disconnect();
	   
	// prikaz uspeha aktivnosti	
	//echo "Ukupno procesirano $retval zapisa";
	//echo "Greska $greska";	

	header ('Location:KoncertLista.php');	
		
	  
      ?>

