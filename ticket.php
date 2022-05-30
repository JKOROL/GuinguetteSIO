<?php 
class ticket
{
  
    public static function calculPrixTotal($idReservation)
    {
        require("db.php");
        $total = 0;
        $plats= $bdd -> query("SELECT * FROM consommer INNER JOIN plat WHERE consommer.IdPlat = plat.IdPlat and 
        IdReservation = ".$idReservation."")->fetchAll(PDO::FETCH_ASSOC);
        foreach($plats as $curr_plats){
            $total += $curr_plats['PrixPlat']* $curr_plats['Quantite'];
        }
        echo $total." €";
    }

    public function getTicket($idReservation)
    {
        require("db.php");
        $req = $bdd -> query("SELECT * FROM reservation WHERE IdReservation = ".$idReservation."")->fetch();
        $plats= $bdd -> query("SELECT * FROM consommer INNER JOIN plat WHERE consommer.IdPlat = plat.IdPlat and
        IdReservation = ".$idReservation."")->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <link rel="stylesheet" href="css/ticket.css">
        <div class="ticket">
            <h1>La Guinguette d'Orléans</h1>
            <p>45 Place du Martroi 45000 Orléans<br> Tel 02 38 63 89 56</p>
            <div class="date"> 
                <span><?php echo $req[9]; ?></span>
                <span><?php echo $req[10]; ?></span>
            </div>
            <h1 >TABLE <?php echo $req[7];?></h1>
            <div class="after"></div><br>
            <p class = "titre"><strong>Quantité</strong><span><strong>Plats</strong></span><strong>Prix</strong></p>
            <div class="commande">
                <?php
                foreach($plats as $curr_plats){
                    echo '<p class="consommation"><span>'.$curr_plats['Quantite'].'</span>'.utf8_encode($curr_plats['Libelle']).
                    '<span>'.$curr_plats['PrixPlat']." €".'</span></p><br>';
                }
                ?>
            </div> 
            <div class="after"></div><br>
            <div class="total">
                <p><strong>Sous-total :</strong> <?php self::calculPrixTotal($idReservation); ?></p>
            </div>
        </div><br>
       
        <?php
    }


}

require("db.php");
$rep = $bdd -> query("SELECT DISTINCT(reservation.IdReservation) FROM reservation INNER JOIN consommer 
WHERE reservation.IdReservation = consommer.Idreservation")->fetchAll(PDO::FETCH_ASSOC); 
foreach($rep as $curr_rep){
    $ticket = new ticket;
    $ticket -> getTicket($curr_rep['IdReservation']);
}

?>

