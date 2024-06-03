<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The infomation program, in JS" />
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
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">volume of square pyramid calculator</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./image.png" alt="equation_img" style="height: 150%; width: 150%;">
      </div>
      <form action="answer.php" method="POST" class="text-box">
        <!-- Numeric Textfield -->
        <h2>volume of square pyramid calculator</h2>
        <hr />
        <h5 style="color: green;"> formula</h5>
        <h4> V = (L x W x H) / 3 </h4>
        <p>input square pyramid's height</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="get_height">
          <label class="mdl-textfield__label" for="get_height">input height here ...(mm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <p>input square pyramid's width</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="get_width">
          <label class="mdl-textfield__label" for="get_width">input width here ...(mm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <p>input square pyramid's length</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="get_length">
          <label class="mdl-textfield__label" for="get_length">input length here ...(mm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="CalculatePyramid()">
          Calculate
        </button>
      </form>
      <div>
        <br />
        <p id="Answer"></p>
      </div>
  </div>
  </main>
  </div>
</body>

</html>