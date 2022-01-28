 <?php
        
		session_start();  
	   // citanje vrednosti iz sesije - da bismo uvek proverili da li je to prijavljeni korisnik
	   $idkorisnika=$_SESSION["idkorisnika"];
	   
	   // preuzimanje vrednosti sa forme
	   $NazivKoncerta = $_POST['NazivKoncerta'];
	   
	   $DatumIzvodjenjaKoncerta = $_POST["DatumIzvodjenjaKoncerta"];
	   $DatumIzvodjenjaKoncerta = strtotime($DatumIzvodjenjaKoncerta);
	   $DatumIzvodjenjaKoncerta = date("Y-m-d",$DatumIzvodjenjaKoncerta);
	   
	   $RedniBrojKompozicije = $_POST['RedniBrojKompozicije'];
	   $NazivAutora = $_POST['NazivAutora'];
	   $NazivKompozicije = $_POST['NazivKompozicije'];
	   $NazivIzvodjaca = $_POST['NazivIzvodjaca'];
	   

      //KONEKCIJA KA SERVERU
	
// koristimo klasu za poziv procedure za konekciju
	require "klase/BaznaKonekcija.php";
	require "klase/BaznaTabela.php";
	$KonekcijaObject = new Konekcija('klase/BaznaParametriKonekcije.xml');
	$KonekcijaObject->connect();
	if ($KonekcijaObject->konekcijaDB) // uspesno realizovana konekcija ka DBMS i bazi podataka
    {	
		require "klase/DBKoncert.php";
		$KoncertObject = new DBKoncert($KonekcijaObject, 'repertoarkoncerta');
		$KoncertObject->NAZIVKONCERTA=$NazivKoncerta;
		$KoncertObject->DATUMIZVODJENJAKONCERTA=$DatumIzvodjenjaKoncerta;
		$KoncertObject->REDNIBROJKOMPOZICIJE=$RedniBrojKompozicije;
		$KoncertObject->NAZIVAUTORA=$NazivAutora;
		$KoncertObject->NAZIVKOMPOZICIJE=$NazivKompozicije;
		$KoncertObject->NAZIVIZVODJACA=$NazivIzvodjaca;
		$greska=$KoncertObject->DodajNoviKoncert();
        	
		} // od if db selected

      // ZATVARANJE KONEKCIJE KA DBMS
	  $KonekcijaObject->disconnect();
	
	// prikaz uspeha aktivnosti	
	
	if ($greska) {
	echo "Greska $greska";	
     }	
	 else
	 {
	 
		header ('Location:KoncertLista.php');	
	 }
		
	  
      ?>

