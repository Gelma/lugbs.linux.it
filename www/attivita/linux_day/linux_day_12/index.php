<?php
include("../../../includes/header.inc");
function talk($ora,$email,$oratore,$titolo){
    print "<dt class=\"programma\">$ora <span class=\"relatore\"><a href=\"mailto:$email\">$oratore</a></span></dt>
           <dd class=\"programma\">$titolo</dd>";
}
?>

<P align="center">
</P>
<H3 align="center">Dodicesimo Linux Day: Linux Day Nazionale</H3>

<dl>
<dt>Data e Luogo</dt>
<dd>Nell'ambito della <a href="http://www.linuxday.it/">Giornata Nazionale di Linux e del Software Libero</a>, promossa da
<a href="http://www.linux.it/">ILS</a>, il LugBS organizza il suo dodicesimo Linux Day. La manifestazione ha luogo
Sabato 25 Ottobre 2008, dalle 14:00 alle 18:00, presso <a href="http://maps.google.it/maps?f=q&hl=it&q=Via+Caleppe,+13,+25125+Brescia+Brescia,+Lombardia,+Italia&sll=45.932813,10.242779&sspn=0.015491,0.035791&ie=UTF8&cd=1&geocode=FVm2tgIdmcabAA&ll=45.52884,10.210655&spn=0.007802,0.017896&t=h&z=16">l'auditorium</a> della Scuola Media Statale Bettinzoli di Brescia.
</dd>

<dt>Iscrizione</dt>
<dd>L'incontro &egrave; completamente libero, gratuito e aperto a tutti.
</dd>

<dt>Programma</dt>
<dd>
<?php
# talk(orario,email dell'oratore,oratore,tema)
talk("14:00",'','Prof. Gabriele Chiesa',"Benvenuto e apertura dei lavori");
talk("14:30",'andrea.gelmini@lugbs.linux.it','Andrea Gelmini',"Dieci anni di LugBS");
talk("15:00",'luisa.ravelli@lugbs.linux.it','Luisa Ravelli',"Dimostrazione dell'utilizzo di Linux nella produttivit&agrave; quotidiana");
talk("15:30",'michele.bonera@lugbs.linux.it','Michele Bonera',"Quando le cose non funzionano: panoramica sugli aiuti della comunit&agrave; Linux");
talk("16:00",'','',"Pausa");
talk("16:30",'antonello.facchetti@lugbs.linux.it','Antonello Facchetti, Giuseppe Cento, Giuseppe Dagani','Esperienze di utilizzo del software libero nelle scuole bresciane');
talk("17:00",'andrea.gelmini@lugbs.linux.it','Andrea Gelmini, Alessandro Rubini, Carlo Strozzi',"Tavola rotonda sul software libero con sessione di domande/risposte dal pubblico");
?>
</dd>

<dt>Note</dt>
<dd>Durante tutta la giornata &egrave; possibile provare Linux sui computer disponibili, o avere ragguagli dai membri del LugBS.
&Egrave; inoltre possibile essere assistiti nell'installazione di Linux sul proprio PC (fisso o portatile che sia).
In questo caso, per evidenti ragioni logistiche, &egrave; richiesta una segnalazione via email all'indirizzo
<a href="mailto:linuxday@lugbs.linux.it">linuxday@lugbs.linux.it</a>, dove concordare i dettagli dell'operazione.
<p>Come tradizione, dopo il Linux Day, &egrave; prevista una cena. Chi fosse interessato a partecipare pu&ograve;
contattare <a href="mailto:michele.bonera@lugbs.linux.it">Michele Bonera</a> <b>entro</b> marted&igrave; 21 Ottobre.
<p>Il programma &egrave; disponibile anche in formato <a href="LugBS_ProgrammaLinuxDay_04102008.pdf">stampabile</a>, e nel
<a href="LugBS_ComunicatoStampa.pdf">comunicato stampa</a>.
</dd>

<dt>Contatti</dt>
<dd>Per qualsiasi richiesta di informazioni si pu&ograve; contattare l'organizzazione scrivendo all'indirizzo
<a href="mailto:linuxday@lugbs.linux.it">linuxday@lugbs.linux.it</a>, oppure telefonando ad
<a href="mailto:andrea.gelmini@lugbs.linux.it">Andrea Gelmini</a> al numero 328/7296628.
</dd>
</dl>
<?php include("../../../includes/footer.inc"); ?>
