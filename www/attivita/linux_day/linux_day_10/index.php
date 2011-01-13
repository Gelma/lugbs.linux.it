<?php
include("../../../includes/header.inc");
function talk($ora,$email,$oratore,$titolo){
    print "<dt class=\"programma\">$ora <span class=\"relatore\"><a href=\"mailto:$email\">$oratore</a></span></dt>
           <dd class=\"programma\">$titolo</dd>";
}
?>

<P align="center">
<A HREF="http://www.linux.it/LinuxDay/main.shtml">
<IMG alt="Logo LinuxDay 2004"
     src="http://www.linux.it/LinuxDay/banner/logo2004-540x140.jpg">
</A>
</P>
<H3 align="center">Decimo Linux Day: Linux Oggi</H3>

<dl>
<dt>Data e Luogo</dt>
<dd>Nell'ambito della <a href="http://www.linux.it/LinuxDay/">IV Giornata
Nazionale di Linux e del Software Libero</a> promossa da
<a href="http://www.linux.it/">ILS</a> il LugBS, in collaborazione con la Mathesis
di Brescia, organizza il suo
decimo Linux Day. La manifestazione avr&agrave; luogo Sabato 27 novembre 2004
dalle 14:30 alle 18:00 circa presso
l'<a href="http://www.itiscastelli.org/">Istituto Castelli</a>.
</dd>

<dt>Iscrizione</dt>
<dd>L'incontro &egrave; completamente libero, gratuito e aperto a tutti. Per
ragioni organizzative &egrave; gradita la pre-iscrizione.
<dt>Target</dt>
<dd>Neofiti.
</dd>

<dt>Programma</dt>
<dd>
<?php
# talk(orario,email dell'oratore,oratore,tema)
talk("14:00",'','',"Apertura dei lavori");
talk("14:15","andrea.mauro@lugbs.linux.it","Ing. Andrea Mauro","Cos'&egrave; il Software Libero");
talk("15:00","maurizio.paolini@lugbs.linux.it","Prof. Maurizio Paolini","EduKnoppix: software libero per le scuole");
talk("15:30","giorgio.pasini@lugbs.linux.it","Giorgio Pasini Ruffoni","Strumenti liberi gestionali e per l'ufficio");
talk("16:00",'','',"Pausa");
talk("16:30","alessandro.bonometti@lugbs.linux.it","Alessandro Bonometti","Strumenti liberi di sviluppo");
talk("17:00","manfred.caruso@lugbs.linux.it","Manfred Caruso","Installazione di Linux su X-Box");
talk("17:30","carlo.sardi@lugbs.linux.it","Carlo Sardi e Francesco Acchiappati","Videogiochi liberi per Linux");
talk("18:00",'','',"Chiusura dei lavori");
?>

</dd>
<dt>Attestati di partecipazione</dt>
<dd>
Vengono rilasciati su richiesta, solo durante l'evento, da parte della Mathesis,
sezione di Brescia. 
<p><b>Per i docenti</b>: questo incontro, ai sensi dell'art. 14 - comma 1,2 e 7 -
del CCNI, rientra nelle iniziative di formazione ed aggiornamento progettate
e realizzate da soggetti autorizzati dal MIUR e quindi automaticamente
"riconosciuto dall'amministrazione". Inoltre ai sensi degli artt. 12 e 13 del
CCNL 1998-2001, il personale docente pu&ograve; usufruire, con l'esonero dal
servizio e con sostituzione ai sensi della normativa vigente sulle supplenze
brevi dei diversi gradi scolastici, di cinque giorni nel corso dell'anno
scolastico per la partecipazione a iniziative di aggiornamento riconosciute
dall'amministrazione.
<p><b>Per gli studenti</b>: l'iniziativa rientra nelle tipologie di esperienze
che danno luogo ai crediti formativi riconoscibili per l'esame di
maturit&agrave; come recita il D.M. n° 49 del 24/02/2000. 
</dd>

</dl>
<?php include("../../../includes/footer.inc"); ?>
