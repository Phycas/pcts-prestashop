<?php
/* Smarty version 3.1.32, created on 2018-09-03 18:35:49
  from '/srv/http/prestashop/presta/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8db745a0d7e2_95055260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e310c20f46dfa273cf37f125e711bcea30858e40' => 
    array (
      0 => '/srv/http/prestashop/presta/themes/classic/templates/index.tpl',
      1 => 1535234417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8db745a0d7e2_95055260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14270754665b8db745a0a9e8_61443230', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4264108435b8db745a0b2b9_10461752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_8874210895b8db745a0c328_06431212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11720768015b8db745a0bda6_22192793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8874210895b8db745a0c328_06431212', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14270754665b8db745a0a9e8_61443230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14270754665b8db745a0a9e8_61443230',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4264108435b8db745a0b2b9_10461752',
  ),
  'page_content' => 
  array (
    0 => 'Block_11720768015b8db745a0bda6_22192793',
  ),
  'hook_home' => 
  array (
    0 => 'Block_8874210895b8db745a0c328_06431212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4264108435b8db745a0b2b9_10461752', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11720768015b8db745a0bda6_22192793', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
