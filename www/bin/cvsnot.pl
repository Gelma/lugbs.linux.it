#!/usr/bin/perl
#invio mail di notifica 
#aggiornamenti cvs

###
# N.B.
#  il filtro sui paths di cvs non funziona
#  e' quindi necessario lavorare a livello
#  di script
$CVSROOT="/cvsroot/";

use IO::Socket;

sub composemail(\@\@)
{
  ($directory,$file)=@_;
  while(@$directory)
   {
	$where = shift @$directory;
	$what = shift @$file;
	push (@out,$where);
	push (@out,$what);
   }
 return(@out);
}

sub sendmail(\@\@)
{
($directory,$file)=@_;
$remote = IO::Socket::INET->new(
			Proto => "tcp",
			PeerAddr => "mail.lugbs.linux.it",
			PeerPort => "25",
			Timeout  => "100",
			);
#select($remote);
print <<EOHEADER;
EHLO lugbs.linux.it 
MAIL FROM: cvs\@lugbs.linux.it
RCPT TO: cvs\@lugbs.linux.it
DATA
Subject: Modifica CVS
X-Subliminal: Support GNU and the FSF
X-Subliminal: Compliant HTML or death
X-MailingList: CVS Lugbs

Server CVS LugBS...

----

Rilevato commit su:

EOHEADER
while(@$directory)
{
 $dr = shift @$directory;
 $dr =~ s/^$CVSROOT//;
 $fl = shift @$file;
 print "Directory : $dr \n" ;
 print "File      : $fl \n";
 print "URL       : http://cvs.lugbs.linux.it/cgi/viewcvs.cgi/$dr/$fl\n\n";
}
print <<EOFOOTER;

----

.
EOFOOTER
close $remote;
}

$notify=0;
while(@ARGV)
{
    $_=shift @ARGV;
    if(not(/^.?lug/))
	{
	shift @ARGV;
	}
    else
	{
    push (@pathname,$_);
    push (@filename, shift @ARGV);
    $notify=1;
    	}
}
if ($notify)
{
sendmail (@pathname,@filename);
}
