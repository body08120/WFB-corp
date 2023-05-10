<?php
class Connect {
    private $db;

    public function __construct() {
        $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
        try {
            $this->db = new PDO($dsn, DBUSER, DBPASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->exec("SET NAMES utf8");
        } catch (PDOException $e) {
            throw new Exception("Impossible de se connecter à la base de données : " . $e->getMessage());
        }
    }

    public function getDb() {
        return $this->db;
    }

    public function prepare($sql) {
        return $this->db->prepare($sql);
    }
}

// Constantes d'environnement
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "wfbcorp");

// Instanciation de la classe Connect
$connect = new Connect();

// Exemple d'utilisation : requête préparée avec des paramètres
$stmt = $connect->prepare("SELECT * FROM ma_table WHERE id = :id");
$stmt->execute(['id' => 1]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
