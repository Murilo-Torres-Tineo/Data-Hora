<?php
date_default_timezone_set("America/Sao_Paulo");
echo date("d/m/y") . "<br>";
echo date("H:i:s") . "<br>";
echo date("d/m/y /// H:i:s") . "<br>" . "<br>";

echo time() . "<br>";

$agora = time();
$seteDias = 60 * 60 * 24 * 7;
$futuro = $agora + $seteDias;
echo date("d/m/y", $futuro) . "<br>" . "<br>";

$data = strtotime("+7 days");
echo "Daqui a 7 dias será: " . "<br>";
echo date("d/m/y", $data) . "<br>" . "<br>";

$data = strtotime("tomorrow");
echo "Amanhã será: " . "<br>";
echo date("d/m/y", $data) . "<br>" . "<br>";

$data1 = strtotime("2026-10-10");
$data2 = strtotime("2026-11-10");
if ($data1 < $data2) {
    echo "A data 1 (" . date("d/m/y", $data1) . "), é menor que a data 2 (" . date("d/m/y", $data2) . ")" . "<br>" . "<br>";
} else {
    echo "A data 1 (" . date("d/m/y", $data1) . "), é maior que a data 2 (" . date("d/m/y", $data2) . ")" . "<br>" . "<br>";
}

$vencimento = strtotime("2026-09-20");
$hoje = time();
if ($hoje > $vencimento) {
    echo "O prazo de vencimento ( " . date("d/m/y", $vencimento) . " ), já passou!" . "<br>" . "<br>";
} else {
    echo "A validade ( " . date("d/m/y", $vencimento) . " ) do produto ainda não venceu!" . "<br>" . "<br>";
}

echo "<hr>" . "<br>";

echo "Exercício 1: " . "<br>";

date_default_timezone_set("America/Sao_Paulo");
echo "Hoje: " . date("d/m/Y") . "<br>";
echo "Amanhã: " . date("d/m/Y", strtotime("tomorrow")) . "<br>";
echo "Ontem: " . date("d/m/Y", strtotime("yesterday")) . "<br>";

echo "<br>Exercício 2: " . "<br>";
echo "Data atual: " . date("d/m/Y") . "<br>";
echo "25 dias atrás: " . date("d/m/Y", strtotime("-25 days")) . "<br>";

echo "<br>Exercício 3: " . "<br>";
echo "Data atual: " . date("d/m/Y") . "<br>";
echo "15 dias depois: " . date("d/m/Y", strtotime("+15 days")) . "<br>";

echo "<br>Exercício 4: " . "<br>";

$primeiraData = "";
$segundaData = "";
$quantidadeDias = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $primeiraData = $_POST["primeiraData"] ?? "";
    $segundaData = $_POST["segundaData"] ?? "";

    if (!empty($primeiraData) && !empty($segundaData)) {
        $timestamp1 = strtotime($primeiraData);
        $timestamp2 = strtotime($segundaData);
        $diferenca = abs($timestamp2 - $timestamp1);
        $quantidadeDias = floor($diferenca / (60 * 60 * 24));
    }
}
?>
<div class="form-box">
    <h3>Exercício 4</h3>
    <form method="POST">
        <label for="primeiraData">Primeira data:</label>
        <input type="date" id="primeiraData" name="primeiraData" value="<?php echo htmlspecialchars($primeiraData); ?>">

        <label for="segundaData">Segunda data:</label>
        <input type="date" id="segundaData" name="segundaData" value="<?php echo htmlspecialchars($segundaData); ?>">

        <button type="submit">Calcular</button>
    </form>

    <?php if ($quantidadeDias !== ""): ?>
        <div class="resultado">
            Quantidade de dias entre as datas: <?php echo $quantidadeDias; ?> dias
        </div>
    <?php endif; ?>
</div>

<?php
echo "<br>Exercício 5: " . "<br>";

$primeiroHorario = "";
$segundoHorario = "";
$quantidadeSegundos = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $primeiroHorario = $_POST["primeiroHorario"] ?? "";
    $segundoHorario = $_POST["segundoHorario"] ?? "";

    if (!empty($primeiroHorario) && !empty($segundoHorario)) {
        $inicio = strtotime(date("Y-m-d") . " " . $primeiroHorario);
        $fim = strtotime(date("Y-m-d") . " " . $segundoHorario);
        $quantidadeSegundos = abs($fim - $inicio);
    }
}
?>
<div class="form-box">
    <h3>Exercício 5</h3>
    <form method="POST">
        <label for="primeiroHorario">Primeiro horário:</label>
        <input type="time" id="primeiroHorario" name="primeiroHorario" step="1"
            value="<?php echo htmlspecialchars($primeiroHorario); ?>">

        <label for="segundoHorario">Segundo horário:</label>
        <input type="time" id="segundoHorario" name="segundoHorario" step="1"
            value="<?php echo htmlspecialchars($segundoHorario); ?>">

        <button type="submit">Calcular</button>
    </form>

    <?php if ($quantidadeSegundos !== ""): ?>
        <div class="resultado">
            Quantidade de segundos entre os horários: <?php echo $quantidadeSegundos; ?> segundos
        </div>
    <?php endif; ?>
</div>

<?php
echo "<br>Exercício 6: " . "<br>";
$dataAtual = date("Y-m-d");
$dataVencimento = "2026-10-05";

echo "Data atual: " . date("d/m/Y", strtotime($dataAtual)) . "<br>";
echo "Data de vencimento: " . date("d/m/Y", strtotime($dataVencimento)) . "<br>";

$hojeTimestamp = strtotime($dataAtual);
$vencimentoTimestamp = strtotime($dataVencimento);
$diferencaDias = floor(($vencimentoTimestamp - $hojeTimestamp) / (60 * 60 * 24));

if ($hojeTimestamp > $vencimentoTimestamp) {
    $diasAtraso = floor(($hojeTimestamp - $vencimentoTimestamp) / (60 * 60 * 24));
    echo "O prazo já venceu. Está atrasado há " . $diasAtraso . " dias." . "<br>";
} elseif ($hojeTimestamp < $vencimentoTimestamp) {
    echo "O prazo ainda não venceu. Faltam " . $diferencaDias . " dias." . "<br>";
} else {
    echo "O prazo vence hoje." . "<br>";
}

echo "<br>" . "<hr>" . "<br>";

echo "<a href='LuckyTT.php'>Lucky's Travel Time</a>" . "<br>" . "<br>";
?>