<?php
session_start();
if (isset($_GET["spremi"])) {
    $_SESSION["ime"] = $_GET["ime"];
    $poruka = "Sjednica spremljena!";
}
if (isset($_GET["brisi"])) {
    session_destroy();
    $poruka = "Sjednica obrisana!";
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Sjednica</title>
</head>
<body>
  <h2>Demonstracija session</h2>
  <form method="get">
    <label>Upiši ime: <input type="text" name="ime" value="<?php echo htmlspecialchars($_SESSION['ime'] ?? ''); ?>"></label>
    <button type="submit" name="spremi">Spremi session</button>
    <button type="submit" name="brisi">Briši session</button>
  </form>

  <?php if (isset($poruka)): ?>
    <p><?php echo $poruka; ?></p>
  <?php endif; ?>
  <p>
    <?php if (!empty($_SESSION["ime"])): ?>
      Spremljeno u sjednici: <strong><?php echo htmlspecialchars($_SESSION["ime"]); ?></strong>
    <?php else: ?>
      Nema aktivne sjednice.
    <?php endif; ?>
  </p>
</body>
</html>
<!-- Naziv datoteke: vjezba13.php -->
