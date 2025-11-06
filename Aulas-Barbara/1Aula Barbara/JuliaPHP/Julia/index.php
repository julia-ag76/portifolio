<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Conserto</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #E0FFFF;
            color: #003333;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #20B2AA;
            color: white;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .formulario {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        form {
            background-color: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 350px;
        }

        label {
            font-weight: bold;
            color: #006666;
        }

        input[type="text"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #20B2AA;
            border-radius: 8px;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #008B8B;
            box-shadow: 0 0 5px #20B2AA;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #20B2AA;
            color: white;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #008B8B;
        }
    </style>
</head>
<body>

<header>Médico do Aparelho</header>
    
<div class="formulario">
    <form action="agendamento2.php" method="post">
        <label for="Nome">Nome do cliente:</label>
        <input type="text" name="nome" required>

        <label for="Tel">Telefone para contato:</label>
        <input type="tel" name="tel" required>

        <label for="Tipo">Tipo de aparelho:</label>
        <select name="aparelho">
            <option>Geladeira</option>
            <option>Micro-ondas</option>
            <option>Máquina de lavar</option>
            <option>Fogão</option>
            <option>Notebook</option>
            <option>Celular</option>
            <option>Tablet</option>
        </select>

        <label for="Nome">Data para atendimento:</label>
        <input type="date" name="data" required>

        <label for="Nome">Descrição do problema:</label>
        <input type="text" name="descr" required>

        <input type="submit" value="Agendar conserto">
    </form>
</div>

</body>
</html>