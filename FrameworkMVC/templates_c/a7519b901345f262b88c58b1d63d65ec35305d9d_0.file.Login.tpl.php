<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 00:01:46
  from 'C:\xampp\htdocs\Framework-de-desarrollo2\Framework-de-desarrollo-2\FrameworkMVC\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06424a03a0e3_20918935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7519b901345f262b88c58b1d63d65ec35305d9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-de-desarrollo2\\Framework-de-desarrollo-2\\FrameworkMVC\\templates\\Login.tpl',
      1 => 1594163467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06424a03a0e3_20918935 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
  <div class="col-6">
  <br><h1>LOGIN</h1><br>
  <form method="post" action="?controller=User&action=ValidarUsuario">
  <dic class="form-group">
  <label for="usuario">Usuario</label>
  <input type="tex" class="form-control" id="usuario" aria-describedby="emailHelp">
  </div><br>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password"class="form-control" name"password" id="password">
  </div><br>
  <div class="form-group">
  <label for="tipo"Tipo Trabajador</label>
  <select class="form-control"name="tipo" id="tipo"> 
  <option value="Trabajador">Trabajador</option>
  <option value="Administrador">Administrador</option>
  </select>
  </div><br>
  <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
  </div>
  </div>
<?php }
}
