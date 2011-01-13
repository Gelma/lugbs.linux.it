{
OFS="";
filename=$0;
base=$3;
mese=substr(base,5,2); 
anno=substr(base,1,4);
gsub("01","Gennaio",mese);
gsub("02","Febbraio",mese);
gsub("03","Marzo",mese);
gsub("04","Aprile",mese);
gsub("05","Maggio",mese);
gsub("06","Giugno",mese);
gsub("07","Luglio",mese);
gsub("08","Agosto",mese);
gsub("09","Settembre",mese);
gsub("10","Ottobre",mese);
gsub("11","Novembre",mese);
gsub("12","Dicembre",mese);
print "<a href=\"http://ml.lugbs.linux.it/lug/monthly/",base,"\">",mese," ",anno,"</a><p>";
system("mkdir ~lugbs/public_html/archive/lug/monthly/" base);
system("cat ~lugbs/archive/lug/" filename " | ~lugbs/bin/hypermail -c ~lugbs/bin/hypermail.cfg -n \"lug\@lugbs.linux.it\" -l \"Lista Lug - " mese " " anno " \"  -d ~lugbs/public_html/archive/lug/monthly/" base "/ -i - > /dev/null 2> /dev/null");
}
