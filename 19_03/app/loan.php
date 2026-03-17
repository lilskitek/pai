<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_GET["amount"] ?? "";
$years = $_GET["years"] ?? "";
$interest = $_GET["interest"] ?? "";

$errorAmount = "";
$errorYears = "";
$errorInterest = "";
$error = false;

$monthlyPayment = null;

if ($amount !== "" || $years !== "" || $interest !== "") {
    if ($amount === "") {
        $errorAmount = "Podaj kwotę";
    } elseif (!is_numeric($amount) || $amount <= 0) {
        $errorAmount = "Zła kwota (wymagana liczba dodatnia)";
        $error = true;
    }

    if ($years === "") {
        $errorYears = "Podaj lata";
    } elseif (!is_numeric($years) || $years <= 0) {
        $errorYears = "Zła liczba lat (wymagana liczba dodatnia)";
        $error = true;
    }

    if ($interest === "") {
        $errorInterest = "Podaj oprocentowanie";
    } elseif (!is_numeric($interest) || $interest < 0) {
        $errorInterest = "Złe oprocentowanie (wymagana liczba dodatnia)";
        $error = true;
    }

    if (!$error) {
        $amount = (float) $amount;
        $years = (int) $years;
        $interest = (float) $interest;

        $installments = $years * 12;

        $monthlyRate = ($interest / 100) / 12;

        if ($monthlyRate == 0) {
            $monthlyPayment = $amount / $installments;
        } else {
            $power = pow(1 + $monthlyRate, $installments);

            $monthlyPayment =
                $amount *
                ($monthlyRate * $power) /
                ($power - 1);
        }
    }
}

include "loan_view.php";