<?php
/* Smarty version 5.8.0, created on 2026-03-22 01:38:04
  from 'file:/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/app/../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69bf39ecb49a18_49441692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3a800c9b4db358f33306b6c37e540967a55070' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/app/../templates/main.html',
      1 => 1774139801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69bf39ecb49a18_49441692 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Podstawowy tytuł" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/noscript.css" /></noscript>
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

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11392949869bf39ecb47db0_72444462', 'content');
?>


	</div>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_11392949869bf39ecb47db0_72444462 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/templates';
}
}
/* {/block 'content'} */
}
