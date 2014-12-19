<!-- Player class extract the data from database -->

<?php
require_once('Dbase.php');


class Player extends Dbase{
    private $_table = 'player_info';
    private $_db;
    
    public function __construct(){
        $this->_db = new Dbase();
    }
    
    public function getPlayers(){
        $sql = "select *from ".$this->_table." where goals>20 and ratio>=.4 order by goals desc,ratio desc,player_name asc limit 88";
        return $this->_db->fetchAll($sql);
    }
    
}
