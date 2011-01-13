<?php	$titolo='LugBS &raquo; Contatti &raquo; Attivisti';
	include($_SERVER["DOCUMENT_ROOT"].'/includes/header.inc');
//depends_on: contatti/chi_siamo/attivisti.txt
?>
<H3 align="center">Elenco degli Attivisti</H3>
<table align="center" border="0" cellspacing="3">
<tr bgcolor="#CCCCCC" valign="middle">
<td align="center"><b>Nome</b></td><td align="center"><b>Ruolo</b></td><td align="center"><b>Indirizzo e-mail</b></td></tr>
<?php
        $fattivisti = file("attivisti.txt"); 
        while (list ($riga,$attivista) = each ($fattivisti)) {
                $campi = explode("|",$attivista);
print"<tr bgcolor=\"#CCCCCC\" valign=\"middle\">";
print"<td>$campi[0]</td><td>$campi[1]</td><td>$campi[2]</td></tr>";
}
?>
<?php
/*
print'
</table>
<H3 align="center">Elenco degli ultimi iscritti fittizi</H3>
<table align="center" border="0" cellspacing="3">
<tr bgcolor="#CCCCCC" valign="middle">
<td align="center"><b>Nome</b></td><td align="center"><b>Ruolo</b></td><td align="center"><b>Indirizzo e-mail</b></td></tr>
';

function random_email($length) {
    #srand(date("s"));
    $possible_charactors = "abcdefghijklmnopqrstuvwxyz._-";
    $string = "";
    while(strlen($string)<$length) {
        $string .= substr($possible_charactors, rand()%(strlen($possible_charactors)),1);
    }
    return($string);
} 

$domini[0]="lugbs.it";
$domini[1]="gelma.ath.cx";
$domini[2]="lug.blogdns.net";

for ($i=1;$i<21;$i++){
$dominio=array_rand($domini);
$utente=random_email(rand(3,15));

$e=$utente.'@'.$domini[$dominio];
print"<tr bgcolor=\"#CCCCCC\" valign=\"middle\">";
print"<td>$utente</td><td>Fittizio</td><td><a href=\"mailto:$e\">$e</a></td></tr>";
}
print '</table>';
*/
?>
<?php include($_SERVER["DOCUMENT_ROOT"].'/includes/footer.inc'); ?>
