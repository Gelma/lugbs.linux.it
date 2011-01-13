<?php   $titolo='LugBS &raquo; Attivit&agrave; &raquo; Linux Day &raquo; Tredicesima edizione';
        include($_SERVER["DOCUMENT_ROOT"].'/includes/header.inc'); 

function talk($ora,$email,$oratore,$titolo){
    print "<dt class=\"programma\">$ora <span class=\"relatore\"><a href=\"mailto:$email\">$oratore</a></span></dt>
           <dd class=\"programma\">$titolo</dd>";
}
?>

<P align="center">
<A HREF="http://www.linuxday.it/">
<IMG alt="Logo LinuxDay 2009"
     src="http://www.linuxday.it/images/log0ld2k9.gif">
</A>
</P>
<H3 align="center">Tredicesimo Linux Day: Linux Day Nazionale</H3>

<dl>
<dt>Data e Luogo</dt>
<dd>Nell'ambito della <a href="http://www.linuxday.it/">Giornata Nazionale di Linux e del Software Libero</a>, promossa da
<a href="http://www.linux.it/">ILS</a>, il LugBS organizza il suo tredicesimo Linux Day. La manifestazione ha luogo
Sabato 24 Ottobre 2009, dalle 14 alle 18, presso il salone <i>La Serra</i> situato in <a href="http://maps.google.it/maps?f=q&source=s_q&hl=it&geocode=&q=Via+Voltolino,+14+-+25060+Collebeato+Brescia,+Lombardia&sll=45.583027,10.215488&sspn=0.002065,0.004469&ie=UTF8&hq=&hnear=Via+Voltolino,+25060+Collebeato+Brescia,+Lombardia&ll=45.582779,10.214474&spn=0.00413,0.008937&t=k&z=17">via voltolino, 14 a Collebeato (BS)</a>.
</dd>

<dt>Iscrizione</dt>
<dd>L'incontro &egrave; completamente libero, gratuito e aperto a tutti.
</dd>

<dt>Programma</dt>
<dd>
<p>A differenza del modus operandi che ha caratterizzato le precedenti edizioni del Linux Day, quest'anno si prova ad abbandonare la classica struttura ad interventi singoli, per testare la bont&agrave; di una soluzione a stand paralleli monotematici.
<?php
# talk(orario,email dell'oratore,oratore,tema)
talk("Stand",'vips@lugbs.linux.it','Ubuntu Linux',"Informazioni, aiuto per installazione e configurazione, distribuzione cd e altro ancora");
talk("Stand",'didattica@lugbs.linux.it','Scuola',"Le molte possibilit&agrave; di utilizzo di software libero nella scuola: esperienze dei docenti, progetti avviati e software libero educativo");
talk("Stand",'fabrizio@vanzani.it','Asterisk',"Come utilizzare Linux per realizzare un centralino telefonico perfettamente funzionante.");
talk("Stand",'vips@lugbs.linux.it','Grafica e multimedia',"Elaborazione di immagini, di video e musica, cosa potete fare con Linux.");
talk("Stand",'vips@lugbs.linux.it','Software Libero multipiattaforma',"Tutto il software libero che potete utilizzare anche su altre piattaforme.");
talk("Stand",'michele.bonera@lugbs.linux.it','Linux da riga di comando',"Le potenzialit&agrave; della riga di comando, il coltellino svizzero del sistemista.");
talk("Stand",'vips@lugbs.linux.it','Giochi',"Perch&eacute; dovremo pur distrarci no? ;)");
?>
</dd>

<dt>Note</dt>
<dd>
<p>Il programma &egrave; disponibile anche in formato <a href="LugBS_ProgrammaLinuxDay_24102009.pdf">stampabile</a>.
<p>Durante tutta la giornata &egrave; possibile provare Linux sui computer disponibili, o avere ragguagli dai membri del LugBS.
&Egrave; inoltre possibile essere assistiti nell'installazione di Linux sul proprio PC (fisso o portatile che sia).
In questo caso, per evidenti ragioni logistiche, &egrave; richiesta una segnalazione via email all'indirizzo
<a href="mailto:linuxday@lugbs.linux.it">linuxday@lugbs.linux.it</a>, dove concordare i dettagli dell'operazione.
<p>Come tradizione, dopo il Linux Day, &egrave; prevista una cena. Chi fosse interessato a partecipare pu&ograve;
contattare <a href="mailto:michele.bonera@lugbs.linux.it">Michele Bonera</a> <b>entro</b> domenica 18 Ottobre.
<p>Essendo 'ggiovani e di tendenza abbiamo pure
<a href="http://www.facebook.com/event.php?eid=150048843675&ref=nf">l'evento su Facebook</a>.
</dd>

<dt>Contatti</dt>
<dd>Per qualsiasi richiesta di informazioni si pu&ograve; contattare l'organizzazione scrivendo all'indirizzo
<a href="mailto:linuxday@lugbs.linux.it">linuxday@lugbs.linux.it</a>, oppure telefonando ad
<a href="mailto:andrea.gelmini@lugbs.linux.it">Andrea Gelmini</a> al numero 328/7296628.
</dd>

<dt>Atti</dt>
<dd>Grazie al lavoro di <a href="mailto:emanuele.bonardi@lugbs.linux.it">Emanuele</a> &egrave; disponibile un <a href="http://www.youtube.com/watch?v=7OAERwbU7LE">sunto video</a> della giornata.
</dd>
</dl>
<?php include("../../../includes/footer.inc"); ?>
