<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
    <title>SliTaz - Mailing list (it)</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="slitaz users developpers mailing list" />
    <meta name="keywords" content="slitaz list mail discussione" lang="it" />
    <meta name="author" content="Giovanni Santini" />
    <?php include("../lib/html/meta-link.html"); ?>
	<style type="text/css">
	table {
		border: 1px solid #000000;
		width: variable;
		border-collapse: collapse;
	}
	td {
		border: 1px dotted #6495ed;
		width: variable;
		padding: 2px;
	}
	.rowodd {
		background-color: #ffffff;
	}
	.roweven {
		background-color: #e1ffe1; /* the tower */
	}
	th {
		border: 1px solid #000000;
		width: variable;
		padding: 4px;
	}
	.alignright {
		text-align: right;
	}
	</style>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.it.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Mailing list</h4>
		<p>
			Annunci e discussioni dei collaboratori di Slitaz (inclusi 
			supporto e sviluppo). Tutto ciò fa parte della mailing list
			(sottoscrizione via email). Partecipaci ora per aiuto o per aderire al progetto.
		</p>
		<p>
			<img src="../images/users.png" alt="Users" />
			Puoi anche <a href="http://scn.slitaz.org/">entrare nella rete SCN</a>
			e nel <a href="http://forum.slitaz.org/">forum di supporto</a> or:
			<!-- Follow -->
			<div style="margin-top: 12px;">
				<a href="https://twitter.com/slitaz" class="twitter-follow-button" 
					data-show-count="true" data-show-screen-name="false">Follow @slitaz</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</p>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>SliTaz list</h2>

<ul>
	<li><a href="#about">Cos'è la mailing list</a> - Supporto e sviluppo.</li>
	<li><a href="#usage">Usare la mailing list</a> - Sottoscrizione, annullamento di questa
		e possibili operazioni.</li>
	<li><a href="#archives">Archivi della mailing list</a> -  Leggi e/o 
		cerca nei messaggi archiviati.</li>
</ul>

<a name="about"></a>
<h3>About the list</h3>
<p>
La lista di sottoscrizione (mailing list) è la principale forma di comunicazione 
nella comunità di SliTaz. La lista è aperta a chiunque e ci si può iscrivere e 
disiscrivere a proprio piacere.  E' un mezzo veramente efficace di collaborazione, 
e viene utilizzato per offrire supporto tecnico gratuito agli utenti di SliTaz. 
Sviluppatori, utenti esperti, correttori di codice ed altri usano la stessa lista 
per gestire lo sviluppo del progetto. Usare la stessa lista per il supporto e lo
sviluppo ci permette di contattare un numero maggiore di persone, dando una risposta 
più veloce e accurata. Purtroppo i membri della lista sono tutti volontari e fanno 
il possibile nel loro tempo libero. Gentilezza e rispetto sono d'obbligo e un po'
di comicità non fa male a nessuno.
</p>
<p>
La <em>mailing list</em> viene utilizzata per inviare messaggi e ricevere mail. 
Ciò significa che tutti gli utenti registrati possono scrivere nella mailing list
e ricevere tutti i messaggi inviati dagli altri utenti. I messaggi sono inviati 
mediante il servizio offerto da <a href="http://www.tuxfamily.org/">TuxFamily</a> 
che utilizza la piattaforma <a href="http://www.vhffs.org/">VHFFS</a>.
</p>
<h4>Rispetto</h4>
<p>
La mailing list viene utilizzata da gente appassionata e con sentimenti.
Fai uno sforzo in più per trattare le persone con rispetto, anche se senti 
te stesso trattato male. Se vuoi scrivere una critica o un giudizio negativo, 
ti preghiamo di non farlo. Se una persona si comporta in modo inappropriato contatta 
uno sviluppatore SliTaz.
</p>


<a name="usage"></a>
<h3>Usare la lista</h3>
<p>
Per essere in grado di scrivere nella lista, devi prima iscriverti, quindi riceverai 
un messaggio di conferma. Questa mail contiene un numero di attivazione
che devi inviare all'amministratore della lista (ciò previene lo spam).
Una volta ricevuti la mail e il messaggio di conferma, puoi scrivere nella lista 
e ricevere tutti i messaggi che vengono scritti. Nota che i messaggi possono essere 
reindirizzati dal tuo programma di posta elettronica in una cartella specifica. E' anche 
consigliabile usare "Reply" ("Risposta" in italiano), per rispondere a un messaggio 
affinchè la discussione possa essere seguita senza problemi.
</p>
<ul>
    <li>Mail amministrativa :
    <a href="mailto:slitaz-request@lists.tuxfamily.org"
     >slitaz-request@lists.tuxfamily.org</a></li>
    <li>Inscriviti inserendo in oggetto : subscribe</li>
    <li>Disiscriviti inserendo in oggetto : unsubscribe</li>
    <li>Ricevi aiuto inserendo in oggetto : help</li>
    <li>Indirizzo per scrivere nella lista :
    <a href="mailto:slitaz@lists.tuxfamily.org">slitaz@lists.tuxfamily.org</a></li>
</ul>
<h4>Formato</h4>
<p>
I messaggi devono essere inviati come testo semplice e non HTML, giustificando le
linee e con testo compreso tra 72-80 caratteri affinchè le persone con un client 
di posta elettronica in modalità testo possa leggere le mail senza problemi. 
La formattazione di questi messaggi può essere eseguita automaticamente dalla 
maggior parte di client email come Sylpheed e permette inoltre una lettura degli 
archivi veloce e immediata. E' anche consigliato rimuovere citazioni inutili e non 
allegare file di grandi dimensioni.
</p>

<a name="archives"></a>
<h3>Archivi della lista</h3>
<p>
La mailing list è un forum pubblico, tutti i file sono salvati onliane e sono da lì 
rintracciabili. Questo permette ai non registrati di seguire comunque la lista, 
è anche un ottima risorsa per informazioni su argomenti spegifici. La lista
viene archiviata ogni notte e puoi navigare l'archivio facilmente mediante lo strumento 
di controllo lista di TuxFamily. I messaggi sono organizzati per mese e data o per argomento 
della discussione.
(<em>Argomento</em>) :
<a href="http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/"
 >Archivio della mailing list</a>
</p>

<div>
<object type="text/html" width="100%" height="345" data="../lib/archives.php">
</object>
</div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
