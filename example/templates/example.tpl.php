<DOCTYPE html>
<html>
  <head>
    <title>
      <?= $title ?>
    </title>
  </head>

  <body>

    <h1><?= $title ?></h1>

    <p>Hello world!</p>
    <p>
      I am <?= $name ?> :)
    </p>

    <ul>
      <?php foreach($numbers as $num): ?>
        <li>
          <?= $num ?>
        </li>
      <?php endforeach ?>
    </ul>

  </body>
</html>
