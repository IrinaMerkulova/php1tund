<?php
echo "Tere hommikust!";
echo "<br>";
$muutuja='PHP on skriptikeel';
echo "<strong>";
echo $muutuja;
echo "</strong>";
echo "<br>";
// Tekstifunktsioonid
echo "<h2>Tekstifunktsioonid</h2>";
$tekst='Esmaspäev on 4.november';
echo $tekst;
// kõik tähed on suured
echo "<br>";
echo strtoupper($tekst); // ei tunne ä täht
echo "<br>";
echo mb_strtoupper($tekst); // tunneb ä
//kõik tähed on väiksed
echo "<br>";
echo strtolower($tekst);
echo "<br>";
//iga sõna algab suure tähega
echo ucwords($tekst);
echo "<br>";
//teksti pikkus
echo "Teksti pikkus - ".strlen($tekst);
echo "<br>";
//eraldame esimesed 5 tähte
echo "Esimesed 5 tähte - ".substr($tekst,0,5);
echo "<br>";
//leiame on positsiooni
$otsing='on';
echo "On asukoht lauses on ".strpos($tekst,$otsing);
echo "<br>";
// eralda esimene sõna kuni $otsing
echo substr($tekst,0,strpos($tekst,$otsing));
echo "<br>";

//eralda peale esimest sõna, alates 'on'
echo substr($tekst,strpos($tekst,$otsing));
echo "<br>";
echo "<h2>Kasutame veebis kasutavaid näidised</h2>";
//https://www.metshein.com/unit/php-tekstifunktsioonid-ulesanne-9/
// sõnade arv lauses
echo "sõnade arv lauses - ".str_word_count($tekst);
// Iseseisvalt - teksti kärpimine
echo "<br>";
$tekst2='     Põhitoetus võetakse ära 11.11 kui võlgnevused ei ole parandatud';
echo ltrim($tekst2);
echo trim($tekst2, "P, t..k");
//test

// Iseseisvalt - tekst kui massiiv