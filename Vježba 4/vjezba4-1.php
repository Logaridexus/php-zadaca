<?php
$cars = ["Audi", "BMW", "Renault", "Citroen"];
$odabrano = "";
if (isset($_GET["auto"])) {
    $odabrano = $_GET["auto"];
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Vozila</title>
</head>
<body>
  <p>Lista vozila:</p>
  <ul>
    <?php foreach ($cars as $car): ?>
      <li><?php echo $car; ?></li>
    <?php endforeach; ?>
  </ul>
  <form method="get">
    <p>Označi vozilo:</p>
    <?php foreach ($cars as $car): ?>
      <label>
        <input type="radio" name="auto" value="<?php echo $car; ?>" <?php echo $odabrano === $car ? "checked" : ""; ?>>
        <?php echo $car; ?>
      </label><br>
    <?php endforeach; ?>
    <button type="submit">Pošalji</button>
  </form>
  <?php if ($odabrano !== ""): ?>
    <p>Odabrano vozilo: <strong><?php echo htmlspecialchars($odabrano); ?></strong></p>
  <?php endif; ?>
</body>
</html>
