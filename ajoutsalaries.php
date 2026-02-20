<?php

include_once("connexion.php");

			$nom = $_POST['name'];
            $prenom = $_POST['surname'];
			$naissance = $_POST['naissance'];
			$embauche = $_POST['embauche'];
      $service = $_POST["service"];

      
        //On essaie de se connecter

      try {
        $sql = "INSERT INTO `salaries` (nom,prenom,date_embauche,date_naissance,service) VALUES
        ('$nom','$prenom','$embauche', '$naissance', '$service')";

        $conn->exec($sql);
        header('Location: listeSalaries.php');
      }

      catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
      }
    ?>

    
    <div class="container my-5">
      <p>Copyright &copy; Mon application 2026</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>