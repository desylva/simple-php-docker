<DOCTYPE! html>
<html>
<body>
<?php

echo "<p>" . PHP_EOL;
echo "Hello " . date('Y') . " world!<br>" . PHP_EOL;
echo "PHP Version: " . PHP_VERSION . "<br>" . PHP_EOL;
echo "</p>" . PHP_EOL;

echo "<p>" . PHP_EOL;
echo "<code>" . PHP_EOL;
print_r(get_loaded_extensions());
echo "</code>" . PHP_EOL;
echo "</p>" . PHP_EOL;
?>
</body>
</html>
