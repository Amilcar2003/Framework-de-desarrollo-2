<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 22:07:46
  from 'C:\xampp\htdocs\Framework-de-desarrollo2\Framework-de-desarrollo-2\FrameworkMVC\templates\Logueo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa4a12986905_73807132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99d04f7f637091951d4978fdaf9b3ea84e7a3c7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-de-desarrollo2\\Framework-de-desarrollo-2\\FrameworkMVC\\templates\\Logueo.tpl',
      1 => 1593461097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa4a12986905_73807132 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
  <div class="col-6">
    <header> 
      <div align="center" id="ENCABEZADO">
        <h1>REGISTRO</h1>
      </div>
    </header>
    <section>
       <div id="CONTENIDO">
          <form method="post" action="USUARIOS.php">
            <div class="form-group">
              <label for="NOMBRE" >NOMBRE</label>
              <input type="text" name="NOMBRE" class="form-control" placeholder="Ingrese Usuario" required>
            </div>
            <div class="form-group">
              <label for="CONTRASEÑA">CLAVE</label>
              <input type="password" class="form-control" name="CONTRASEÑA" placeholder="Ingrese Clave" required>
            </div>
            <div class="form-group">
              <label for="TIPO">TIPO DE USUARIO</label>
              <select class="form-control" name="TIPO" id="TIPO">
                <option value="TRABAJADOR">Trabajador</option>
                <option value="ADMINISTRADOR">Administrador</option>
              </select>
            </div>
            <div class="form-group" align="center">
              <input type="submit" value="INGRESAR" class="btn btn-primary btn-lg" required>
            </div>
          </form>
       </div>
    </section>
  </div>
</div>
<?php }
}
