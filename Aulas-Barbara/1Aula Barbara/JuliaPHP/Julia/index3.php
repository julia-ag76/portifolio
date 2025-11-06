<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <H2>Sistema de Login com CPF</H2>

        <form method = "POST">
            <label>Digite seu CPF (apenas numeros):</label><br><br>
            <input type = "text" name = "cpf" minlength="11" maxlength="11" placeholder="Com 11 digitos" required> 
            <br><br>
            <input type = "submit" name = "Enviar" value = "Cadastrar CPF">
        </form>
        <hr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $cpf = $_POST["cpf"];

            if (!ctype_digit($cpf) || strlen($cpf) != 11) {
                echo "<p>⚠️O CPF deve conter exatamente 11 números.</p>";
                exit;
            }
            $conn = new mysqli("localhost","root","aluno","sistemas","3307");

            if ($conn->connect_error) {
                die("<p>Erro ao conectar: " . $conn->connect_error . "</p>");
            }
            if (isset($_POST["Enviar"])) {
                $sql = "INSERT INTO cliente (cpf) VALUES ('$cpf')";
                
                if ($conn->query($sql) === TRUE){
                    echo "<P>✅ CPF cadastrando com sucesso!</p>";
                } else {
                    echo "<p>⚠️ CPF já cadastrando.</p>";
                }
            }
            $conn->close();
        }
        ?>
</body>
</html>