<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc');
// pagina dinamica

if(isset($_REQUEST['req_submit'])){
  $_REQUEST['req_nome']=='' && $errorstring.='<li>devi inserire un nome';
  if(isset($errorstring)){
    print '
<table>
<tr>
<td><img src="/images/warning.png"></td><td>Non tutti i dati richiesti sono stati inseriti</td>
</tr>
</table>
<ul>'.$errorstring.'</ul>';
  }else{
    print '<h3 align="center">Iscrizione al Linux Day 7</h3>
<p>Complimenti, sei riuscito a compilare correttamente il nostro form. Questi 
sono i dati che ci sono arrivati:
';
    
    $body='
ciao, ho appena completato la form di iscrizione al linux day 7
questi sono i miei dati:

    nome:       '.$_REQUEST['req_nome'].'
    email:      '.$_REQUEST['req_email'].'
    numero:     '.$_REQUEST['req_number'].'
    numero cd:  '.$_REQUEST['req_cd'].'

questi sono i miei commenti:

'.$_REQUEST['req_commenti'].'

-- 
iscrizione web al linux day
';
    mail("lug-eventi@lugbs.linux.it",'richiesta iscrizione linux day',$body);
    print '<div style="border: 1px solid gray; margin-left: 20px;"><pre>'.$body.'</pre></div>';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc');
    exit();
  }
}
print '
<h3 align="center">Iscrizione al Linux Day 7</h3>
<P>Se hai raggiunto questa pagina verosimilmente vuoi iscriverti al prossimo
<a href="/attivita/linux_day/linux_day_7/">linux day</a>, organizzato dal
lugbs, che si terr&agrave; a Brescia il il 29 novembre 2003.</p>
<p>Questa iscrizione ovviamente non &egrave; obbligatoria ne vincolante, ma 
sapere indicativamente quante persone parteciperanno al linuxday ci permette
di organizzarlo meglio.</P>
<p>Note:
<ul>
<li>Nel form seguente il solo campo &laquo;nome&raquo; &egrave; obbligatorio.
<li>il cd del linuxday (una versione di knoppix modificata) viene distribuito 
gratuitamente in cambio di un cd vergine.
</ul>
<p>
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<p>Nome:<br>
<input type="text" name="req_nome" value="'.$_REQUEST['req_nome'].'">
</p>
<p>Indirizzo email:<br>
<input type="text" name="req_email" value="'.$_REQUEST['req_email'].'">
</p>
<p>Numero di persone partecipanti:<br />
<input type="text" name="req_number" value="'.$_REQUEST['req_number'].'">
</p>
<p>Numero di CD eduKnoppix richiesti:<br />
<input type="text" name="req_cd" value="'.$_REQUEST['req_cd'].'">
</p>
<p>
<p>Commenti:<br>
<textarea name="req_commenti" rows="10" cols="60">'.$_REQUEST['req_commenti'].'</textarea>
</p>
<p>
<input type="submit" name="req_submit" value="invia richiesta"><br>
</form>
<p>
Nel caso tu abbia bisogno di metterti in contatto con noi per altri
motivi puoi scrivere a: <a href="mailto:lug@lugbs.linux.it">lug@lugbs.linux.it</a></p>
';

include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc');
?>
 
