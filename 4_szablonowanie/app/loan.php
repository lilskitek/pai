<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

use Smarty\Smarty;

function getParams(&$form)
{
    $form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $form['interest'] = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

function validate(&$form, &$infos, &$msgs, &$hide_intro)
{
    if (!isset($form['amount']) || !isset($form['years']) || !isset($form['interest'])) {
        return false;
    }

    $a = $form['amount'];
    $y = $form['years'];
    $i = $form['interest'];

    if (($a === null || $a === '') && ($y === null || $y === '') && ($i === null || $i === '')) {
        return false;
    }

    $hide_intro = true;

    $infos[] = 'Przekazano parametry.';

    if ($form['amount'] == '') {
        $msgs[] = 'Podaj kwotę';
    }
    if ($form['years'] == '') {
        $msgs[] = 'Podaj lata';
    }
    if ($form['interest'] == '') {
        $msgs[] = 'Podaj oprocentowanie';
    }

    if (count($msgs) == 0) {
        if (!is_numeric($form['amount']) || $form['amount'] <= 0) {
            $msgs[] = 'Zła kwota (wymagana liczba dodatnia)';
        }
        if (!is_numeric($form['years']) || $form['years'] <= 0) {
            $msgs[] = 'Zła liczba lat (wymagana liczba dodatnia)';
        }
        if (!is_numeric($form['interest']) || $form['interest'] < 0) {
            $msgs[] = 'Złe oprocentowanie (wymagana liczba >= 0)';
        }
    }

    if (count($msgs) > 0) {
        return false;
    }

    return true;
}

function process(&$form, &$infos, &$msgs, &$result)
{
    $infos[] = 'Parametry poprawne. Wykonuję obliczenia.';

    $amount = floatval($form['amount']);
    $years = intval($form['years']);
    $interest = floatval($form['interest']);

    $installments = $years * 12;
    $monthlyRate = ($interest / 100) / 12;

    if ($monthlyRate == 0) {
        $result = $amount / $installments;
    } else {
        $power = pow(1 + $monthlyRate, $installments);
        $result =
            $amount *
            ($monthlyRate * $power) /
            ($power - 1);
    }
}

$form = array();
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if (validate($form, $infos, $messages, $hide_intro)) {
    process($form, $infos, $messages, $result);
}

$smarty = new Smarty();
$smarty->setCompileDir(_ROOT_PATH.'/app/templates_c');

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Kalkulator kredytów');
$smarty->assign('page_description', 'Kalkulator kredytu — Smarty');
$smarty->assign('page_header', 'Kalkulator kredytów');

$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);
$smarty->assign('hide_intro', $hide_intro);

$smarty->display(_ROOT_PATH.'/app/loan.html');
