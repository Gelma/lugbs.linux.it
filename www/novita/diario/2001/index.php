<?php
//depends_on: novita/diario/2001/log_eventi_2001.txt
include("../../../includes/header.inc");

print"<H3 align=center>Diario del LugBS - 2001</H3>";
print"<TABLE align=center cellpadding=5 cellspacing=0 width=\"80%\">";
        $file = "log_eventi_2001.txt";
	$feventi = file($file); 
	while (list ($riga,$evento) = each ($feventi)) {
		$campi = explode("|",$evento);
		print"<TR><TD valign=top><B>$campi[0]</B></TD>";
		print"<TD>$campi[1]</TD></TR><TR><TD colspan=2><HR></TD></TR>";
							}
	print "</TABLE>";
include("../../../includes/footer.inc");
?>
