#!/usr/bin/perl
# script per inviare mails di notifica
use IO::Socket;
$remote = IO::Socket::INET->new(
			Proto => "tcp",
			PeerAddr => "mail.lugbs.linux.it",
			PeerPort => "25",
			Timeout  => "100",
			);
@input=(<STDIN>);
select($remote);
print <<EOHEADER;
EHLO lugbs.linux.it 
MAIL FROM: cvs\@lugbs.linux.it
RCPT TO: @ARGV[0]\@lugbs.linux.it
DATA
Subject: Modifica CVS

@input
.
EOHEADER
close $remote;
exit;
