<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Kalkulator kredytów</h2>

    <form action="loan.php" method="GET">
        Kwota:
        <input type="text" name="amount" value="<?= htmlspecialchars($amount ?? '') ?>">
        <?= $errorAmount ?>
        <br>
        Lata:
        <input type="text" name="years" value="<?= htmlspecialchars($years ?? '') ?>">
        <?= $errorYears ?>
        <br>
        Oprocentowanie:
        <input type="text" name="interest" value="<?= htmlspecialchars($interest ?? '') ?>">
        <?= $errorInterest ?>
        <br>
        <input type="submit" value="Oblicz">
    </form>

    <?php if (isset($monthlyPayment) && $monthlyPayment !== null): ?>
        <h2>Miesięczna rata:
            <?= round($monthlyPayment, 2) ?> zł
        </h2>
    <?php endif; ?>

</body>

</html>