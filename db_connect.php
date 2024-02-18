<?php 
//Conexão com o banco de dados
$servername = "localhost";
$username="root";
$password ="";
$db_name = "sistemalogin";

//Para conectar com o banco precisamos do servername, username, password e nome do banco de dados, como colocamos dentro de uma vairavel.. acima, vai ficar assim..
$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão".mysqli_connect_error();
endif

?>