<?php
$praznici = ["01-01", "06-01", "01-05", "30-05", "22-06", "25-06", "05-08", "15-08", "01-11", "18-11", "25-12", "26-12"];
$sat      = (int)date("H");
$dan      = (int)date("N");
$danas    = date("d-m");
function jeOtvoren($sat, $dan, $danas, $praznici) {
    if (in_array($danas, $praznici)) return "Dućan je zatvoren (državni praznik).";
    if ($dan == 7) return "Dućan je zatvoren (nedjelja).";
    if ($dan == 6) return ($sat >= 9 && $sat < 14) ? "Dućan je otvoren." : "Dućan je zatvoren.";
    return ($sat >= 8 && $sat < 20) ? "Dućan je otvoren." : "Dućan je zatvoren.";
}
$status = jeOtvoren($sat, $dan, $danas, $praznici);
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Radno vrijeme</title>
</head>
<body>
  <h2>Radno vrijeme dućana</h2>
  <p>Trenutno vrijeme: <strong><?php echo date("H:i"); ?></strong></p>
  <p>Dan: <strong><?php echo date("l, d.m.Y"); ?></strong></p>
  <p><?php echo $status; ?></p>
</body>
</html>
