<?php include("../../../includes/header.inc"); ?>
<h3 align="center">11/06/99 - Come utilizzare Linux per uso personale</h3>
<hr align="left" size="1" noshade>
<p><font color="red"><b><i>Cosa manca ancora a Linux (Luciano Ghezzi)</i></b></font>
Cosa manca ancora a Linux? Manca ancora qualcosa per essere un
sistema operativo alla pari di altri. Considerata ormai vinta la
battaglia tra i server, in quanto le previsioni dicono che
quest'anno ci sarà il sorpasso a discapito di Windows NT. Le pecche
le troviamo sul lato workstation.
<p><i>Linux e l'hardware</i><br>
 Esiste hardware non ancora supportato e hardware che non sarà mai
supportato in quanto concepito e realizzato esclusivamente pensando
ad uno specifico sistema operativo (parlo dei winmodem e delle
stampanti windows 95 only).
<p>Gli sviluppatori di driver per Linux
non sempre trovano collaborazione da parte delle aziende
produttrici di HW, che hanno avuto paura a dare le specifiche per
l'interfacciamento ai propri dispositivi. Per fortuna è una
tendenza destinata ad essere abbandonata, dopo l'abbraccio da parte
delle più grandi (CompaQ, IBM, HP, ...) a Linux; esempio purtroppo non seguito da tutte:<br>
<ul>
<li><i>"Dopo ripetuti tentativi di ottenere specifiche delle schede TV della
ATI, video4linux ha deciso di non supportare queste schede..."</i></li>
<li><i>"SANE Scanner Access Now Easy non supporta alcun scanner ACER perché
questa non rilascia le specifiche del proprio HW"</i></li>
</ul>
Ma piano piano:<br>
<ul>
<li><i>"E' stato reso pubblico il 01/05/1999 un driver in versione 0.1 beta per la
Soundblaster Live! in versione modulare senza in sorgenti"</i><br>
 Recentemente è stato rilasciato la seconda beta, che funziona egregiamente.</li>
</ul>
Linux supporta pienamente i seguenti HW:<br>
 <ul>
<li><i>ISA, VLB, EISA, PCI e AGP bus</i></li>
<li><i>APM</i></li>
<li><i>Qualcheproblema in più si può avere nel portatili, anche se sono già
supportati in parte i CompaQ, IBM ThinkPad, TravelMate, NEC e Toshiba</i></li>
<li><i>PCMCIA,
completamente, tranne che per il controller Motorola
6AHC05GA</i></li>
<li><i>Tutti i processori della classe Intel, AMC, Cyrix, tranne che per alcuni vecchi K6</i></li>
<li><i>SMP completamente funzionante (funzionalità sono state aggiunte nel k2.2)</i></li>
<li><i>Tutte le memorie DRAM, EDO, SDRAM</i></li>
<li><i>Il 98% delle schede video, e probabilmente il rimanente è supportato o
verrà supportato in breve. La S33D funziona solo in 640x480 con il
driver standard. Esistono dei driver commerciali che coprono le rimanenti schede</i></li>
<li><i>IDE, MFM e RLL controller. EIDE triton I e II con DMA busmastering</i></li>
<li><i>SCSI, tutta la classe Adaptec, BusLogic, DPT, Future Domain, Vortex, NCR
symbios, Tekram, Western Digital con supporto RAID</i></li>
<li><i>IOMEGA zip (interno ed esterno 100/250Mb) e ditto</i></li>
<li><i>Controller multiporta</i></li>
<li><i>Net card, in particolare NE2K, RTL e 3com</i></li>
<li><i>ISDN asuscom, 3com, hisax, teles, USR Sporster</i></li>
<li><i>ATM, Frame Relay</i></li>
<li><i>Non pienamente supportate le IBM PCI token ring</i></li>
<li><i>Tutte le schede audio, tranne la Soundblaster Live! (non completamente) e
possibili problemi con schede integrate nella motherboard</i></li>
<li><i>DAT, QIC</i></li>
<li><i>CDROM ATAPI, SCSI e molti non ATAPI (vecchi)</i></li>
<li><i>Tutti i masterizzatori tranne alcuni vecchi (tipo il CW1701)</i></li>
<li><i>Modem e FAX, esclusi i WinModem</i></li>
<li><i>Stampanti, in particolare HP, Epson, Canon e tutte quelle con supporto postscript</i></li>
<li><i>Scanner, in particolare la classe HP ScanJet, Logitech ScanMan, Microtek
ScanMaker, Mustek, UMAX, tranne gli ACER perché non rilascia la
documentazione, e l'Ami Scan</i></li>
<li><i>Joystick</i></li>
<li><i>Video capture board, frame grabber, TV tuner tra cui Quickcam, Video Blaster e VT1500 TV card</i></li>
<li><i>Schede radio, tra cui AIMS Labs RadioTrack, Reveal FM card</i></li>
</ul>
Attenzione all'hardware "windows only":<br>
<ul>
<li><i>Canon LBP-465</i></li>
<li><i>Lexmark 1000 inkjet</i></li>
<li><i>Epson stylus color 400</i></li>
<li><i>USRobotics WinModem</i></li>
</ul>
<i>Programmi non disponibili in licenza di tipo OpenSource</i><br>
 CAD: Non mancano programmi per far CAD, ma il problema è che non
si trovano programmi che importano documenti in formato DXF.<br>
 Programmi fatti apposta per W$, tipo i programmi per stampare serigrafie.<br>
<?php include("../../../includes/footer.inc"); ?>
