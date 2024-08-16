<?php
    require ('connect.php');

    $sql = "SELECT `id`, `nome`, `email`,`json_config` FROM `usuarios`";
    $stmt = $conn->prepare($sql);
    //$stmt->bind_param("ss",);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = $result->fetch_assoc();
?>