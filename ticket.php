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

    public function getTicket()
    {
        ?>
        <link rel="stylesheet" href="css/ticket.css">
        <div class="ticket">
            <h1>La Guinguette d'Orléans</h1>
            <p>45 Place du Martroi 45000 Orléans<br> Tel 02 38 63 89 56</p>
            <div class="date"> 
                <span><?php echo date("d-m-y"); ?></span>
                <span><?php echo date("H:i:s"); ?></span>
            </div>
            <h1 >TABLE<?php echo " le numéro de la table avec requête sql ";?></h1>
            <div class="after"></div><br>
            
        </div>
       
        <?php
    }


}

$ticket01 = new ticket;
$ticket01 -> getTicket();
?>

