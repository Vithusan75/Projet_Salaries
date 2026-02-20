<?php
require_once 'connexion.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    try {
        $id = $_GET['id'];
        
       
        $sql = "DELETE FROM salaries WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
    
        header('Location: listeSalaries.php?msg=suppression_ok');
        exit();
        
    } catch(PDOException $e) {
       
        die("Erreur lors de la suppression : " . $e->getMessage());
    }
} else {

    header('Location: listeSalaries.php?err=id_invalide');
    exit();
}
?>