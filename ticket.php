<?php 
class ticket
{
    private $IdTicket;
    private $IdReservation;
    private $NomClient;
    private $prix;
    private $PlatChoisi;
    private $table;
    private $date;
    private $heure;

    
    /*public function __construct(int $IdTicket, int $IdReservation, int $idTicket, string $NomClient, float $prix,array $PlatChoisi, int $table, $date, $heure)
    {
        $this -> idticket = $IdTicket;
        $this -> idreservation = $IdReservation;
        $this -> nomclient = $NomClient;
        $this -> prix = $prix;
        $this -> platchoisi = $PlatChoisi;
        $this -> table = $table;
        $this -> date = $date;
        $this -> heure = $heure;
    }*/

    public function getTicket($idReservation)
    {
        require("db.php");
        $req = $bdd -> query("SELECT * FROM reservation WHERE IdReservation = ".$idReservation."")->fetch();
        $plats= $bdd -> query("SELECT * FROM consommer INNER JOIN plat WHERE consommer.IdPlat = plat.IdPlat and IdReservation = ".$idReservation."")->fetchAll(PDO::FETCH_ASSOC);
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
            <div class="commande">
                <?php
                foreach($plats as $curr_plats){
                    //if(isset($req[$idReservation])){
                        echo '<p class="consommation"><span>'.$curr_plats['Quantite'].'</span>'.$curr_plats['Libelle'].'<span>'.$curr_plats['PrixPlat'].'</span></p><br>';
                    //}
                }
                ?>
            </div>
        </div>
       
        <?php
    }


}

require("db.php");
$rep = $bdd -> query("SELECT * FROM reservation INNER JOIN consommer WHERE reservation.IdReservation = consommer.Idreservation")->fetchAll(PDO::FETCH_ASSOC);
//$choix = $bdd -> query("SELECT * FROM reservation INNER JOIN consommer WHERE reservation.IdReservation = consommer.IdReservation"); 
foreach($rep as $curr_rep){
    $ticket = new ticket;
    $ticket -> getTicket($curr_rep['IdReservation']);
}
?>

