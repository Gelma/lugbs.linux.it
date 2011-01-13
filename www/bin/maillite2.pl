#!/usr/bin/perl
# Versione minimale di mail... nessuna verifica
#  su errori di delivery...

($daddr,$subj)=(@ARGV[0],@ARGV[1]);
use IO::Socket;
($user,$host)=split('\@',$daddr);
$remote = IO::Socket::INET->new(
			Proto => "tcp",
			PeerAddr => "$host",
			PeerPort => "25",
			Timeout  => "100",
			);
@input=(<STDIN>);
select($remote);
print <<EOHEADER;
EHLO lugbs.linux.it 
MAIL FROM: cvs\@lugbs.linux.it
RCPT TO: $user\@$host
DATA
Subject: $subj

@input
.
EOHEADER
close $remote;
exit;
