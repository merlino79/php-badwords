<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>first_php</title>
</head>
<body>

<h1>
  prova get
</h1>
<?php
  $name = $_GET['name']
?>
<h3>ciao <?php echo $name?></h3>


<?php
$nome = 'alessandro';
$testo = "Arsenio Lupin (in francese Arsène Lupin) è un personaggio letterario ideato da Maurice Leblanc nel 1905. È un ladro gentiluomo protagonista di numerosi romanzi dei quali sono state realizzate trasposizioni cinematografiche e televisive. Ha ispirato il famoso manga Lupin III.

Illustrazione di H. Richard Boehm, Doubleday, 1909
Arsenio Lupin è un elegantissimo ladro gentiluomo, ruba per sé ma anche per i più bisognosi e sempre e solo ai più facoltosi. Amante delle donne, del gioco, del lusso e chiaramente del denaro, Lupin è caratterizzato da un notevole senso dello humor. È un abile trasformista, capace di truccarsi e travestirsi secondo le occasioni in altre persone (personaggi) che interpreta alla perfezione. Arsenio viene inoltre descritto come abile negli sport, soprattutto nelle arti marziali, possiede doti di prestigiatore ed eccelle nell'arte del furto. Molto intelligente e furbo, ironico e audace, possiede grande cultura ed è anche un intenditore d'arte oltre che della raffinata arte della seduzione. E soprattutto non ricorre mai alla violenza, o peggio. I suoi avversari sono l'ispettore Garimard della polizia francese e il detective inglese Herlock Sholmes, personaggio chiaramente ispirato a Sherlock Holmes.
Sembra che Leblanc si sia ispirato per questo suo personaggio alla vita di Alexandre Marius Jacob, anarchico francese e ladro geniale. La prima apparizione di Arsenio Lupin fu sulla rivista Je Sais Tout, un periodico per cui Leblanc scriveva in quel momento.";

?>

<h1>ciao  <?php echo $nome ?></h1>
<p class="color">
<?php
echo $testo
?>
</p>

















<!-- php inizio -->
<h1>
<?php
echo 'ciao arsenè benvenuto'
?>

</h1>


  
</body>
</html>