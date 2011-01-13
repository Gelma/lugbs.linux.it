#!/bin/sh

# questo simpatico script viene invocato da make, ricrea le pagine
# html, partendo dai sorgenti php, le confronta con quelle gia`
# presenti ed eventualmente le sostuituisce

for filephp in $(find -type f -name \*.php)
do
   grep -q '^// pagina dinamica$' $filephp && echo non genero $filephp && continue 
   filehtml=${filephp%%php}html
   which php4 >/dev/null || (echo "Errore: Non trovo l'interprete php." ; exit 1)
   php4 -q $filephp > .tmp || (echo "Errore nell'esecuzione dell'interprete php." ; exit 1)
   cmp -s .tmp $filehtml || (echo "Aggiorno $filehtml" ; mv -f .tmp $filehtml)
   [ -e .tmp ] && rm -f .tmp
done

exit 0
