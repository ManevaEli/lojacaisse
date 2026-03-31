<?php
class CaisseController{
    public static function getCaisse()
{
    $db = getDB();
    $caisses = $db->query("select * from caisse") -> fetchAll();
    require 'app/views/caisse.php';
}
public static function choisir() {
        $db = getDB();
        $id = $_POST['caisse_id'];
        $stmt = $db->prepare("SELECT * FROM caisse WHERE id=?");
        $stmt->execute([$id]);
        $_SESSION['caisse'] = $stmt->fetch();
        Flight::redirect('/achats');
    }
}