<DOCTYPE! html>
<html>
<body>
  <p>
    Hello <?php echo date('Y') ?> world!<br>
    PHP Version: <?php echo PHP_VERSION ?><br>
  </p>
  <p>
    <code>
      <?php print_r(get_loaded_extensions()); ?>
    </code>
  </p>
</body>
</html>
