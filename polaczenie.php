<?php 
 $servername='localhost';
    $username='r45k1';
    $password='r45k1';
    $dbname = "r45k1";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Nie udało się połączyć:' .mysql_error());
        }
		?>
		
<?php

$haslo = $_GET['haslo'];

if(isset($haslo))
{    
    $rodzaj = $_GET['rodzaj'];
	$data = $_GET['data'];
	$godzina = $_GET['czas'];
	$email = $_GET['email'];
	
	
    $sql = "INSERT INTO wyjazdy (data,godzina,rodzaj,email) VALUES ('$data','$godzina','$rodzaj','$email')";
     if (mysqli_query($conn, $sql)) {
        echo "Nowy rekord został dodany!";
     } else {
        echo "Błąd - rekord nie został dodany: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>