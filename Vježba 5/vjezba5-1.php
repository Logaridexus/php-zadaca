<?php
if (isset($_GET["spremi"])) {
    setcookie("ime", $_GET["ime"], time() + 3600);
    $poruka = "Kolačić spremljen!";
}
if (isset($_GET["brisi"])) {
    setcookie("ime", "", time() - 3600);
    $poruka = "Kolačić obrisan!";
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Kolačići</title>
</head>
<body>
  <h2>Demonstracija kolačića</h2>
  <form method="get">
    <label>Upiši ime: <input type="text" name="ime" value="<?php echo htmlspecialchars($_COOKIE['ime'] ?? ''); ?>"></label>
    <button type="submit" name="spremi">Spremi kolačić</button>
    <button type="submit" name="brisi">Briši kolačić</button>
  </form>
  <?php if (isset($poruka)): ?>
    <p><?php echo $poruka; ?></p>
  <?php endif; ?>
  <p>
    <?php if (!empty($_COOKIE["ime"])): ?>
      Spremljeno u kolačiću: <strong><?php echo htmlspecialchars($_COOKIE["ime"]); ?></strong>
    <?php else: ?>
      Nema aktivnog kolačića.
    <?php endif; ?>
  </p>
</body>
</html>
