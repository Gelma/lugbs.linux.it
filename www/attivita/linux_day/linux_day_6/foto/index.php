<?php include("../../../../includes/header.inc"); ?>
<H3 align=center>Sesto Linux Day: Album Fotografico</H3>
<?php
function mostra($inizio,$fine){
 $r=1;
 for ($f=$inizio;$f<=$fine;$f++){
   if ($r==1) {
     print '<tr>';
     }
   print '<td align="center"><a href="'.$f.'.jpg"> <img ALT="Foto della manifestazione" src="provini/'.$f.'.jpg"></a></td>';
   $r++;
   if ($r==5) {
     print '</tr>';
     $r=1;
     }
 }
}
?>
<?php
print '<table border="1" align="center">';

if (isset($foto_range)) {
 $foto_arr=split("-","$foto_range");
 $foto_inizio=$foto_arr[0];
 $foto_fine=$foto_arr[1];
};
if (isset($foto_inizio) && isset($foto_fine)){
	mostra($foto_inizio,$foto_fine);
}
else
{
 mostra(1,88);
};

print '</table>';
?>
<?php include("../../../../includes/footer.inc"); ?>
