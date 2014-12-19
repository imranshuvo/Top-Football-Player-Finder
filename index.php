<?php
require_once('inc/config.php');
require_once('autoload.php');

$player = new Player();

$all_player = $player->getPlayers();

foreach($all_player as $player){?>
    <!-- Do whatever you want to do with them. As an example: let's just echo the players name who have scored more than 20 goals this season including club and national goals and at least have ratio of .4 . Sort in the order goals desc, ratio desc , player name asc(alphabetic)-->
    <ul>
        <li><?php  echo $player['player_name'];?></li>
    </ul>
    
<?php
     
}
