<?php
$rezultat = "";
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["op"]) && $_GET["a"] !== "" && $_GET["b"] !== "") {
    $a = (float)$_GET["a"];
    $b = (float)$_GET["b"];
    switch ($_GET["op"]) {
        case "+": $rezultat = $a + $b; break;
        case "-": $rezultat = $a - $b; break;
        case "*": $rezultat = $a * $b; break;
        case "/": $rezultat = $b != 0 ? $a / $b : "Dijeljenje s nulom!"; break;
        default:  $rezultat = "Nepoznata operacija.";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Kalkulator</title>
</head>
<body>
  <form method="get">
    <label>Upiši prvi broj: <input type="number" name="a" step="any" value="<?php echo htmlspecialchars($_GET['a'] ?? ''); ?>"></label><br>
    <label>Upiši drugi broj: <input type="number" name="b" step="any" value="<?php echo htmlspecialchars($_GET['b'] ?? ''); ?>"></label><br>
    Rezultat: <?php echo $rezultat !== "" ? "<strong>$rezultat</strong>" : ""; ?><br>
    <button type="submit" name="op" value="+">+</button>
    <button type="submit" name="op" value="-">-</button>
    <button type="submit" name="op" value="*">*</button>
    <button type="submit" name="op" value="/">/</button>
  </form>
</body>
</html>
<!-- Naziv datoteke: vjezba3-2.php -->
