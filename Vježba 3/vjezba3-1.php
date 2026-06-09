<?php
$zamisljenBroj = rand(1, 9);
$poruka = "";
if (isset($_GET["broj"]) && $_GET["broj"] !== "") {
    $unos = (int)$_GET["broj"];
    if ($unos === $zamisljenBroj) {
        $poruka = "Pogodak!";
    } else {
        $poruka = "Krivo, zamišljeni broj je bio $zamisljenBroj.";
    }
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Pogodi broj</title>
</head>
<body>
  <form method="get">
    <label>Upiši jedan broj od 1 do 9:
      <input type="number" name="broj" min="1" max="9">
    </label>
    <button type="submit">Pošalji</button>
  </form>
  <?php if ($poruka !== ""): ?>
    <p><?php echo $poruka; ?></p>
  <?php endif; ?>
</body>
</html>
