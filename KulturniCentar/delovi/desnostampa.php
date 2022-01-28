
<meta charset="UTF-8">
<!--==================================== SADRZAJ STRANICE DESNO pocinje ovde ------------------------------>
<img src="images/sredinagore.jpg" width="100%" height="3" alt="" class="flt1 rp_topcornn" /> 

<table style="width:100%;style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0"  bgcolor="white">

<tr>
<td style="width:5%;">
</td>

<td>
<!---podnaslov spiska - ne treba -->
<!--<font face="Trebuchet MS" color="darkblue" size="4px">-->
<!--<b></br> </font>-->


</td>

<td style="width:5%;">
</td>
</tr>


<tr>
<td style="width:5%;">
</td>

<td align="left">
<br/>
<font face="Trebuchet MS" color="darkblue" size="4px">

<?php

	// PRETHODNI KOD PREUZIMA PODATKE I TO JE NA STAMPA.PHP
	
	    if ($UkupanBrojZapisa>0) {
			
			//$rbvesti=0;
			// ------------ zaglavlje ----------------
			echo "<table style=\"width:100%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\"  bgcolor=\"white\">";
			echo "<tr>";
			echo "<td>";
			echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Naziv koncerta</font><br/>";
			echo "</td>";
			echo "<td >";
			echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum izvodjenja koncerta</font><br/>";
			echo "</td>";
			echo "<td >";
			echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Redni broj kompozicije</font><br/>";
			echo "</td>";
			echo "<td >";
			echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Naziv autora</font><br/>";
			echo "</td>";
			echo "<td >";
			echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Naziv kompozicije</font><br/>";
			echo "</td>";
			echo "<td>";
			echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Naziv izvodjaca</font><br/>";
			echo "</td>";
			echo "</tr>";
			
			for ($RBZapisa = 0; $RBZapisa < $UkupanBrojZapisa; $RBZapisa++) 
			{
			        				
				// CITANJE VREDNOSTI IZ MEMORIJSKE KOLEKCIJE $RESULT I DODELJIVANJE PROMENLJIVIM
				$Id=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 0);//mysql_result($result,$row,"REGISTARSKIBROJ");
				$NazivKoncerta=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 1);
				$DatumIzvodjenjaKoncerta=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 2);
				$RedniBrojKompozicije=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 3);
				$NazivAutora=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 4);
				$NazivKompozicije=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 5);
				$NazivIzvodjaca=$KoncertObject->DajVrednostPoRednomBrojuZapisaPoRBPolja ($KolekcijaZapisa, $RBZapisa, 6);
				
				// CRTANJE REDA TABELE SA PODACIMA
				echo "<tr>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$NazivKoncerta</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$DatumIzvodjenjaKoncerta</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$RedniBrojKompozicije</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$NazivAutora</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$NazivKompozicije</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$NazivIzvodjaca</font><br/>";
				echo "</td>";
				echo "</tr>";
			
			}  //za for 
				echo "</table>";
				echo "<br/>";
				echo "<br/>";
		}   
		else 
		{
              echo "Nema podataka!";
         } // ZA ELSE
           
           //mysql_close($db_handle);
		   $KonekcijaObject->disconnect();

?>


</td>

<td style="width:5%;">
</td>

</tr>
</table>

    