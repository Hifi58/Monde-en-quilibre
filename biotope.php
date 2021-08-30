<?php 
require_once('database/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Monde en équilibre</title>
</head>
<body class="biotope">
    
    <?php require_once('assets/header.php'); 
    
    $sql = "SELECT * FROM biotopes ORDER BY id_biotope DESC";
    $query = $db->prepare($sql);
    $query->execute();?>

  <section>
      <h2>Les différents biotopes</h2>
   <?php while($data = $query->fetch()){?>


    
        
        <div class="container">
            <div class="wrapperbiotope">
                <h3><?= $data['name'] ?></h3>
                <p><?= $data['content'] ?></p>
            </div>
        </div>
    

<?php
};
?>
</section>
</body>
</html>