<?php
/* Smarty version 5.8.0, created on 2026-03-22 01:38:04
  from 'file:/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/app/loan.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69bf39ecb3bfb3_92610156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9023dc2d4a8b4bd1f36f64d009c1cd9c6fc3b49' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/app/loan.html',
      1 => 1774139879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69bf39ecb3bfb3_92610156 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_81517218469bf39ecb29c84_86435131', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_81517218469bf39ecb29c84_86435131 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/pai/4_szablonowanie/app';
?>

	<section id="calc" class="wrapper style1 fullscreen fade-up">
		<div class="inner">
			<h1>Kalkulator kredytów</h1>

			<?php if ((true && ($_smarty_tpl->hasVariable('messages') && null !== ($_smarty_tpl->getValue('messages') ?? null)))) {?>
				<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
					<div class="messages">
						<h4>Wystąpiły błędy:</h4>
						<ol class="err">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
								<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</ol>
					</div>
				<?php }?>
			<?php }?>

			<?php if ((true && ($_smarty_tpl->hasVariable('infos') && null !== ($_smarty_tpl->getValue('infos') ?? null)))) {?>
				<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
					<div class="messages">
						<h4>Informacje:</h4>
						<ol class="inf">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
								<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</ol>
					</div>
				<?php }?>
			<?php }?>

			<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/loan.php" method="get">
				<div class="fields">

					<div class="field">
						<label for="amount">Kwota</label>
						<input id="amount" type="text" name="amount" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['amount'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
					</div>

					<div class="field">
						<label for="years">Lata</label>
						<input id="years" type="text" name="years" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['years'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
					</div>

					<div class="field">
						<label for="interest">Oprocentowanie (%)</label>
						<input id="interest" type="text" name="interest" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')['interest'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
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

			<?php if ((true && ($_smarty_tpl->hasVariable('result') && null !== ($_smarty_tpl->getValue('result') ?? null)))) {?>
				<p>Miesięczna rata:</p>
				<h3><?php echo round((float) $_smarty_tpl->getValue('result'), (int) 2, (int) 1);?>
 zł</h3>
			<?php } else { ?>
				<p>Uzupełnij dane i kliknij „Oblicz”.</p>
			<?php }?>

		</div>
	</section>
<?php
}
}
/* {/block 'content'} */
}
