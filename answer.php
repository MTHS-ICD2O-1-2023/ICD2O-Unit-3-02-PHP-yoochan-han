<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The infomation program, in php" />
  <meta name="author" content="Yoochan Han" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <title>volume of square pyramid calculator</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">volume of square pyramid calculator</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/notebook-animation.svg" alt="laptop image">
      </div>
      <div id="Answer" class="text-box">
        <?php
        $length = $_POST["get_length"];
        $width = $_POST["get_width"];
        $height = $_POST["get_height"];

        $ans = ($length * $width * $height) / 3;
        echo "volume of pyramid is " . $ans . "cm³.";
        ?>
      </div>
    </main>
  </div>
</body>

</html>