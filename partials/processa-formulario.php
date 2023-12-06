<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    $contato_preferido = $_POST["contato"];
    $horario_preferido = $_POST["horario"];
    $receber_novidades = isset($_POST["novidades"]) ? 1 : 0;

    $servername = "localhost";
    $username = "laravel";
    $password = "laravelPassword";
    $dbname = "barbearia_database";

    if(empty($nome) || empty($email) || empty($telefone)) {
        echo "Nome, email e telefone são campos obrigatórios.";
        exit();
    }

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO agendamentos (nome, email, telefone, mensagem, contato_preferido, horario_preferido, receber_novidades) 
                               VALUES (:nome, :email, :telefone, :mensagem, :contato_preferido, :horario_preferido, :receber_novidades)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);
        $stmt->bindParam(':contato_preferido', $contato_preferido);
        $stmt->bindParam(':horario_preferido', $horario_preferido);
        $stmt->bindParam(':receber_novidades', $receber_novidades);

        $stmt->execute();

        echo "<script>
                    alert('Agendamento crido com sucesso! Redirecionando para pagina principal...');
                    setTimeout(function(){
                    window.location.href = '../index.php';
                    }, 5000); // 5000 milliseconds = 5 seconds
              </script>";


    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

    $conn = null;
}
?>