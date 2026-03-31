<?php
class CaisseController{
    public static function getCaisse()
{
    $db = getDB();
    $caisses = $db->query("select * from caisse") -> fetchAll();
    require 'app/views/caisse.php';
}

}