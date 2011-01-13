<?php
include("../../../includes/header.inc");
function talk($ora,$email,$oratore,$titolo){
    print "<dt class=\"programma\">$ora <span class=\"relatore\"><a href=\"mailto:$email\">$oratore</a></span></dt>
           <dd class=\"programma\">$titolo</dd>";
}
?>

<P align="center">
<A HREF="http://www.linuxday.it/">
<IMG alt="Logo LinuxDay 2007"
     src="http://www.linuxday.it/images/log0ld2k7.gif">
</A>
</P>
<H3 align="center">Undicesimo Linux Day: Linux Day Nazionale</H3>

<dl>
<dt>Data e Luogo</dt>
<dd>Nell'ambito della <a href="http://www.linuxday.it/">Giornata
Nazionale di Linux e del Software Libero</a>, promossa da
<a href="http://www.linux.it/">ILS</a>, il LugBS organizza il suo
undicesimo Linux Day. La manifestazione avr&agrave; luogo Sabato 27 Ottobre 2007
dalle 14:00 alle 18:00 circa presso
il <a href="http://maps.google.it/maps?q=via+voltolino+14+collebeato+brescia+italia&f=q&hl=it&ie=UTF8&z=16&iwloc=addr&om=1">Salone La Serra</a> di Collebeato (BS). Il giorno precedente, Venerd&igrave; 26 Ottobre 2007, si svolge la manifestazione gemella organizzata dal <a href="http://wiki.yoda2000.net/doku.php?id=linux_day_2007">Linux User Group di Ingegneria.</a>
</dd>

<dt>Iscrizione</dt>
<dd>L'incontro &egrave; completamente libero, gratuito e aperto a tutti.
<dt>Target</dt>
<dd>Neofiti.
</dd>

<dt>Programma</dt>
<dd>
<?php
# talk(orario,email dell'oratore,oratore,tema)
talk("14:00","michele.bonera@lugbs.linux.it","Michele Bonera",'Apertura dei lavori');
talk("14:05","andrea.mauro@lugbs.linux.it","Ing. Andrea Mauro","Linux e Software Libero: storia e filosofia");
talk("14:25","giorgio.pasini@lugbs.linux.it","Ing. Giorgio Pasini Ruffoni","Panoramica su Software Libero multipiattaforma");
talk("14:45","enrico.colombini@lugbs.linux.it","Enrico Colombini","Da Windows a Linux: trasloco o coabitazione?");
talk("15:05","andrea.occhi@lugbs.linux.it","Ing. Andrea Occhi","Linux e didattica");
talk("15:25","marco.ghidinelli@lugbs.linux.it","Ing. Marco Ghidinelli","Un ponte verso Windows: Samba");
talk("15:45",'','',"Pausa");
talk("16:00","carlo.sardi@lugbs.linux.it","Ing. Carlo Sardi","Il progetto Wikipedia");
talk("16:20","vaghettiroberto@yahoo.it","Roberto Vaghetti","Il simulatore di volo Flightgear");
talk("16:40","marco@manenti.org","Dott. Marco Manenti","Thin Client");
talk("17:00",'bertoz@bertoz.com','Manfred Caruso',"Linux embedded");
talk("17:20",'antonello.facchetti@alice.it','Antonello Facchetti, Giuseppe Cento','Realizzazione di un laboratorio didattico LTSP');
talk("17:40",'andrea.gelmini@lugbs.linux.it','Andrea Gelmini',"Chiusura dei lavori");
?>

</dd>

</dl>
<?php include("../../../includes/footer.inc"); ?>
