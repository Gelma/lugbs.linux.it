<?php
	$titolo='LugBS &raquo; Contatti &raquo; FAQ';
	include($_SERVER["DOCUMENT_ROOT"].'/includes/header.inc');
//depends_on: contatti/faq_del_lug/faq.txt

print "<H3 align=\"center\">Faq del LugBs</H3><p><ul>";
	$ffaq = file("faq.txt");
	while (list ($riga,$domanda) = each ($ffaq)) {
		$campi = explode("|",$domanda);
		print"<li><b>$campi[0]</b><br>$campi[1]";}
print "</ul>";
include($_SERVER["DOCUMENT_ROOT"].'/includes/footer.inc');
?>
