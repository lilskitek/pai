<?php require_once dirname(__FILE__) .'/../config.php';?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/main.css" />
  <noscript><link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

  <section id="sidebar">
    <div class="inner">
      <nav>
        <ul>
          <li><a href="#calc"><span class="icon solid fa-calculator"></span> Kalkulator</a></li>
          <li><a href="#result">Wynik</a></li>
        </ul>
      </nav>
    </div>
  </section>

  <div id="wrapper">

    <section id="calc" class="wrapper style1 fullscreen fade-up">
      <div class="inner">
        <h1>Kalkulator kredytów</h1>

        <form action="<?php print(_APP_URL); ?>/app/loan.php" method="GET">
          <div class="fields">

            <div class="field">
              <label for="amount">Kwota</label>
              <input id="amount" type="text" name="amount" value="<?= htmlspecialchars($amount ?? '') ?>">
              <?php if (!empty($errorAmount)) echo "<p>$errorAmount</p>"; ?>
            </div>

            <div class="field">
              <label for="years">Lata</label>
              <input id="years" type="text" name="years" value="<?= htmlspecialchars($years ?? '') ?>">
              <?php if (!empty($errorYears)) echo "<p>$errorYears</p>"; ?>
            </div>

            <div class="field">
              <label for="interest">Oprocentowanie (%)</label>
              <input id="interest" type="text" name="interest" value="<?= htmlspecialchars($interest ?? '') ?>">
              <?php if (!empty($errorInterest)) echo "<p>$errorInterest</p>"; ?>
            </div>

          </div>

          <ul class="actions">
            <li><input type="submit" value="Oblicz" class="primary" /></li>
          </ul>
        </form>

        <ul class="actions">
          <li><a href="#result" class="button scrolly">Przejdź do wyniku</a></li>
        </ul>
      </div>
    </section>

    <section id="result" class="wrapper style2 fade-up">
      <div class="inner">
        <h2>Wynik</h2>

        <?php if (isset($monthlyPayment) && $monthlyPayment !== null): ?>
          <p>Miesięczna rata:</p>
          <h3><?= round($monthlyPayment, 2) ?> zł</h3>
        <?php else: ?>
          <p>Uzupełnij dane i kliknij „Oblicz”.</p>
        <?php endif; ?>

      </div>
    </section>

  </div>

  <script src="<?php print(_APP_URL); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/js/jquery.scrollex.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/js/jquery.scrolly.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/js/browser.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/js/breakpoints.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/js/util.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/js/main.js"></script>

</body>
</html>