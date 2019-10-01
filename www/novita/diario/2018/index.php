<?php
//depends_on: log_eventi.txt
include("../../../includes/header.inc");

print"<H3 align=center>Diario del LugBS - 2018</H3>";
print'<TABLE align=center cellpadding=5 cellspacing=0 width="85%">';
        $file = 'log_eventi.txt';
        $feventi = file($file); 
        while (list ($riga,$evento) = each ($feventi)) {
                $campi = explode("|",$evento);
                print"<TR>
                       <TD valign=top>
                        <B>".ereg_replace(' ','&nbsp;',$campi[0])."</B>
                       </TD>
                       <TD>
                        $campi[1]
                       </TD>
                      </TR>
                       <TR>
                        <TD colspan=2>
                         <HR>
                        </TD>
                       </TR>";
                                                        }
print '</TABLE>';
include("../../../includes/footer.inc");
?>
