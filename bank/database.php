<?php
include 'connect.php';
include './functions/php/functions.php';
$conn = connect_me();

function registrar($nome, $nick, $email, $senha, $repeat)
{
    global $conn;
    $count = 0;
    $erro[] = "Erro padrão";
    if (strlen($nome) < 8) $erro[] = "Seu nome possui menos que 8 caracteres";
    if (strlen($nick) < 8) $erro[] = "Seu nick possui menos que 8 caracteres";
    if (strpos($email, "@") === false) $erro[] = "Seu email está preenchido incorretamente";
    if (strlen($senha) < 8) $erro[] = "Sua senha deve possuir mais de 8 caracteres";
    if ($senha != $repeat) $erro[] = "Sua senha não são iguais";
    foreach ($erro as $value) $count = $count + 1;
    if ($count == 1) {
        $senha = md5(md5($senha));
        $data = date("Y/m/d");
        $sql = "INSERT INTO users (`name`, `nickname`, `email`, `password`,`date`) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $nick);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $senha);
        $stmt->bindParam(5, $data);

        if ($stmt->execute()) {
            //code
        } else {
            echo "Erro ao salvar";
        }
    } else {
        echo "<spam class='err-log'><p>".$erro[$count - 1]."</p></spam>";
    }
}

function login($data, $senha)
{
    global $conn;
    if (!$data || !$senha) return header("location:?pg=pages/login");
    $base = "SELECT * FROM users ";
    if (contains($data, "@")) {
        $sql = $base . "WHERE email = ?";
    } else {
        $sql = $base . "WHERE name = ?";
    };
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $data);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $cadastro = false;
    foreach ($result as $value) {
        if ($value['name'] == $data && $value['password'] == $senha || $value['email'] == $data && $value['password'] == $senha) {
            $cadastro = true;
            break;
        }
    }
    if ($cadastro === true) {
        //code
    } else {
        echo "<span class='err-log'><p>Sua senha ou email estão incorretos</p></span>";
    }
}
