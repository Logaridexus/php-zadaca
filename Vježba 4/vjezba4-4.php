<?php
function jeProst($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}
$prosti = [];
for ($i = 2; $i < 100; $i++) {
    if (jeProst($i)) $prosti[] = $i;
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Prosti brojevi</title>
</head>
<body>
  <h2>Prosti brojevi manji od 100</h2>
  <p><?php echo implode(", ", $prosti); ?></p>
</body>
</html>
