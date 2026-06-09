<?php
$poruka = "";
if (isset($_GET["k1"]) && isset($_GET["k2"]) && $_GET["k1"] !== "" && $_GET["k2"] !== "") {
    $ocjene = [(float)$_GET["k1"], (float)$_GET["k2"]];    
    if ($ocjene[0] < 0 || $ocjene[1] < 0) {
        $poruka = "Krajnja ocjena je negativna.";
    } else {
        $prosjek = array_sum($ocjene) / count($ocjene);
        $ocjena = round($prosjek);       
        if ($ocjena < 1) $ocjena = 1;
        if ($ocjena > 5) $ocjena = 5;
        $poruka = "Prosjek: $prosjek | Konačna ocjena: $ocjena";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Ocjene</title>
  <style>
    body { font-family: sans-serif; padding: 20px; }
    label { display: block; margin: 8px 0 4px; }
    input { padding: 6px; }
    button { margin-top: 10px; padding: 8px 16px; }
    .rezultat { margin-top: 15px; font-weight: bold; }
  </style>
</head>
<body>
  <h2>Unos ocjena kolokvija</h2>
  <form method="get">
    <label>Ocjena I. kolokvija: <input type="number" name="k1" step="0.1" value="<?php echo htmlspecialchars($_GET['k1'] ?? ''); ?>"></label>
    <label>Ocjena II. kolokvija: <input type="number" name="k2" step="0.1" value="<?php echo htmlspecialchars($_GET['k2'] ?? ''); ?>"></label>
    <button type="submit">Izračunaj</button>
  </form>
  <?php if ($poruka !== ""): ?>
    <p class="rezultat"><?php echo $poruka; ?></p>
  <?php endif; ?>
</body>
</html>
