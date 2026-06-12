<?php
$tekst = "";
$broj = null;
if (isset($_GET["tekst"]) && $_GET["tekst"] !== "") {
    $tekst = $_GET["tekst"];
    $broj = str_word_count($tekst);
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Brojanje riječi</title>
</head>
<body>
  <h2>str_word_count</h2>
  <form method="get">
    <label>Ulazni niz:<br>
      <input type="text" name="tekst" size="50" value="<?php echo htmlspecialchars($tekst); ?>">
    </label><br>
    <button type="submit">Ispiši broj riječi</button>
  </form>
  <?php if ($broj !== null): ?>
    <p>Ulazni niz: <em><?php echo htmlspecialchars($tekst); ?></em> sadrži <strong><?php echo $broj; ?></strong> riječi.</p>
  <?php endif; ?>
</body>
</html>
