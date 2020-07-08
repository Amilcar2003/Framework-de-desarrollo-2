<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 00:01:45
  from 'C:\xampp\htdocs\Framework-de-desarrollo2\Framework-de-desarrollo-2\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f064249ce2676_75362805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf796e50f0b75125d6589e1e9a57e570983e49d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-de-desarrollo2\\Framework-de-desarrollo-2\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1594239397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Admin.tpl' => 1,
    'file:Trab.tpl' => 1,
    'file:Login.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5f064249ce2676_75362805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
   <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'Administrador') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:Admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php } else { ?>
   <?php $_smarty_tpl->_subTemplateRender('file:Trab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php }?>
     <?php } else { ?>
   <?php $_smarty_tpl->_subTemplateRender("file:Login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php }
$_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
