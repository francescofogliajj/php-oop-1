<?php
  require_once __DIR__ . "/book.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-1</title>
  </head>
  <body>

    <h1>Libri</h1>

    <h2>
      <?php echo($too_cold_for_september->title); ?>
    </h2>
    <ul>
      <li>
        <strong>Autore:</strong>
        <span> <?php echo($too_cold_for_september->author); ?> </span>
      </li>
      <li>
        <strong>Editore:</strong>
        <span> <?php echo($too_cold_for_september->publisher); ?> </span>
      </li>
      <li>
        <strong>Anno:</strong>
        <span> <?php echo($too_cold_for_september->year); ?> </span>
      </li>
      <li>
        <strong>Trama:</strong>
        <span> <?php echo($too_cold_for_september->plot); ?> </span>
      </li>
      <?php if ($too_cold_for_september->new_release) { ?>
        <li>
          <strong> <?php echo("Nuova uscita!"); ?> </strong>
        </li>
      <?php } ?>
    </ul>

    <h2>
      <?php echo($penelope_s_discipline->title); ?>
    </h2>
    <ul>
      <li>
        <strong>Autore:</strong>
        <span> <?php echo($penelope_s_discipline->author); ?> </span>
      </li>
      <li>
        <strong>Editore:</strong>
        <span> <?php echo($penelope_s_discipline->publisher); ?> </span>
      </li>
      <li>
        <strong>Anno:</strong>
        <span> <?php echo($penelope_s_discipline->year); ?> </span>
      </li>
      <li>
        <strong>Trama:</strong>
        <span> <?php echo($penelope_s_discipline->plot); ?> </span>
      </li>
      <?php if ($penelope_s_discipline->new_release) { ?>
        <li>
          <strong> <?php echo("Nuova uscita!"); ?> </strong>
        </li>
      <?php } ?>
    </ul>

  </body>
</html>
