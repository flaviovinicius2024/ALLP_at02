<form action="recomenda_equipamento.php" method="POST">
    <label for="ambiente">Tamanho do Ambiente:</label>
    <select name="ambiente" id="ambiente" required>
        <option value="">-- Selecione --</option>
        <option value="residencial">Casa / Apartamento</option>
        <option value="pequeno_escritorio">Pequeno Escritório</option> 
        <option value="data_center">Data Center Corporativo</option>
    </select>

    <br><br>

    <button type="submit">Ver Recomendação</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ambiente = $_POST["ambiente"];

switch ($ambiente) {
    case "residencial": 
        echo "Equipamento Indicado: Roteador Wireless (SOHO). \n 
        Para ambientes residenciais, um roteador Wi-Fi padrão é suficiente para conectar smartphones, TVs e notebooks; \n";
        break;
    case "pequeno_escritorio": 
        echo "Equipamento Indicado: Switch Gerenciável de 24 Portas. \n 
    Para um escritório, recomendamos o uso de um Switch para conectar os computadores via cabo, \n 
    garantindo estabilidade e segurança na rede local (LAN). \n";
        break;
    case "data_center":
        echo "Equipamento Indicado: Roteador de Borda e Switch Layer 3.\n
        Para Data Centers, é necessária uma infraestrutura robusta com equipamentos de alta \n
        capacidade para lidar com grande tráfego de dados e roteamento avançado. \n";
        break;
    default: 
        echo "Erro: Ambiente não reconhecido em nosso banco de dados. \n";
}
}
?>