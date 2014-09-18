<?php

/**
 * Description of controllerClass
 *
 * @author luis
 */
class controllerClass {

  public function index($args = NULL) {
    $args['datos'] = modelClass::getAll();

    if (is_array($args['datos'])) {
      viewClass::renderHTML('index.php', $args);
    } else {
      viewClass::renderHTML('error.php', $args);
    }
  }

  public function create() {

   $template = 'create.php';
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $rsp = modelClass::putNewUser($_POST['cdrh'], $_POST['dcrh']);
    if ($rsp === true) {
      $args['success'] = 'El rh fue creado';
      $this->index($args);
    } else {
      $args['error'] = $rsp->getMessage();
      $args['formAction'] = 'index.php?action=create';
      $args = array_merge($args, $_POST);
      viewClass::renderHTML($template, $args);
    }
  }
}

public function update() {

  if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['cod_rh']) and is_numeric($_GET['cod_rh'])) {
    $certificate = modelClass::certifyId($_GET['cod_rh']);
    if (is_array($certificate)) {
      if (count($certificate) > 0) {
        $data = modelClass::getRow($_GET['cod_rh']);
        if (is_array($data)) {
        
}
public function delete() {

  $args['formAction'] = 'index.php?action=delete&amp;cod_rh=' . $_GET['cod_rh'];
  if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['cod_rh']) and is_numeric($_GET['cod_rh'])) {
    viewClass::renderHTML('delete.php', $args);
  } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
    $rsp = modelClass::deleteUsuario($_GET['id']);
    if ($rsp === true) {
      $args['success'] = 'El registro ' . $_GET['cod_rh'] . 'se elimino ';
    } else {
      $args['error'] = $rsp;
      viewClass::renderHTML('error.php', $args);
    }
    $this->index($args);
  }
}

public function notFound() {

}
?>