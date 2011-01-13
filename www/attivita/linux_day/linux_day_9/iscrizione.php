<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc');
// pagina dinamica

if(isset($_REQUEST['req_submit'])){
  $_REQUEST['req_nome']=='' && $errorstring.='<li>Devi inserire il nome';
  if(isset($errorstring)){
    print '
<table>
<tr>
<td><img src="/images/warning.png"></td><td>Non tutti i dati richiesti sono stati inseriti</td>
</tr>
</table>
<ul>'.$errorstring.'</ul>';
  }else{
    print '<h3 align="center">Iscrizione al Nono Linux Day</h3>
<p>Grazie per averci segnalato la tua partecipazione. Questi 
sono i dati che hai inserito:
';
    
    $body='
Ciao, ho intenzione di partecipare al Nono Linux Day.
Questi sono i miei dati:

    Nome:       '.$_REQUEST['req_nome'].'
    Email:      '.$_REQUEST['req_email'].'
    N.persone:  '.$_REQUEST['req_number'].'
    numero cd:  '.$_REQUEST['req_cd'].'

Eventuale commento:

'.$_REQUEST['req_commenti'].'

-- 
Iscrizione web al Nono Linux Day
';
    mail("lug-eventi@lugbs.linux.it",'richiesta iscrizione linux day',$body);
    print '<div style="border: 1px solid gray; margin-left: 20px;"><pre>'.$body.'</pre></div>';
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc');
    exit();
  }
}
print '
<h3 align="center">Iscrizione al Nono Linux Day</h3>
<P>L\'iscrizione al Linux Day non &egrave; obbligatoria, ma ci &egrave; utile
per l\'organizzazione logistica dell\'evento.
<p>Note:
<ul>
<li>Del modulo seguente, solo campo &laquo;nome&raquo; &egrave; obbligatorio.
<li>Il CD di <a href="http://eduknoppix.dmf.unicatt.it/">EduKnoppix</a> viene distribuito gratuitamente in cambio di un cd vergine.
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
<p>Numero di CD di <a href="http://eduknoppix.dmf.unicatt.it/">EduKnoppix</a> richiesti:<br />
<input type="text" name="req_cd" value="'.$_REQUEST['req_cd'].'">
</p>
<p>
<p>Eventuali commenti:<br>
<textarea name="req_commenti" rows="10" cols="60">'.$_REQUEST['req_commenti'].'</textarea>
</p>
<p>
<input type="submit" name="req_submit" value="invia richiesta"><br>
</form>
<p>
Per ulteriori chiarimenti puoi scrivere ad <a href="mailto:andrea.gelmini@linux.it">andrea.gelmini@linux.it</a></p>
';

include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc');
?>
 
