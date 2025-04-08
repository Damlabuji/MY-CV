<?php
if (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') {
  setcookie('theme', 'light', time() + (86400 * 30), "/");
} else {
  setcookie('theme', 'dark', time() + (86400 * 30), "/");
}
header("Location: index.php");
exit;
?>
