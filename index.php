<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p>
        <a href="Bonjour.php?nom=Egret&amp;prenom=Antoine&amp;age=27">Bonjour </a>
        <br>
        <a href="startDate.php?startDate=2/05/2016&amp;endDate=27/11/2016">Date: </a>
        <?php if(!empty($_GET['startDate'])){     $startDate = $_GET['startDate']; } ?>
        <?php  if(isset($_GET['endDate']))[] ?>
        <br>
        <a href="outils.php?language=php&amp;server=lamp">Outils</a>
        <br>
        <a href="week.php?week=12&amp;room=101">réservation</a>
        <br>
        <a href="building.php?building=12&amp;room=101">Building </a>
 </p>
  </body>
</html>
