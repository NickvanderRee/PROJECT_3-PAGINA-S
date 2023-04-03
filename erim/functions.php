<?php



function maakg($conn, $naam, $wachtwoord){
    $sql = "INSERT INTO loginn (naam, wachtwoord) VALUES (:naam, :wachtwoord)";
    $stmt = $conn->prepare($sql);
    if(!$stmt){
        header('Location: login.php');
        exit();
    }
    $hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':wachtwoord', $hash);
    $stmt->execute();
    header('Location: login.php');
} 




function login($conn, $naam, $wachtwoord){
   $stmt = $conn->prepare("SELECT * FROM loginn WHERE naam = :naam");
   $stmt->bindParam(':naam', $naam);
   $stmt->execute();

   if($row = $stmt->fetch()){
      $Oww = $row['wachtwoord'];
      $checkpwd = password_verify($wachtwoord, $Oww);

      if ($checkpwd === false){
         header('Location: login.php?passwordfalse');
      } else {
         session_start();
         $_SESSION['naam'] = $naam;
         header('Location: index.php?loginsucces');
      }
   } else {
      header('Location: login.php?error=notexist');
   }
}






?>