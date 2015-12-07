<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formuláro Dinâmico</title>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>
<body>
<style>label{width: 100%;}</style>

<div class="container">
    <form method="post">
        <label>Tipo:
            <select class="form-control" name="tipo">
                <option value="1">Text</option>
                <option value="2">Submit</option>
                <option value="3">Email</option>
            </select>
        </label>
        <labe>Nome:
            <input type="text" name="nome" class="form-control">
        </labe>
        <labe>Label:
            <input type="text" name="label" class="form-control">
        </labe>
        <labe>Classe:
            <input type="text" name="class" class="form-control">
        </labe>
        <labe>Placeholder:
            <input type="text" name="placeholder" class="form-control">
        </labe>
        <label>Obrigatório:
            <input type="checkbox" name="required">
        </label>
        <input type="submit" value="Adicionar" class="btn btn-default">
    </form>
<?php
require_once("../autoload.php");

if(!isset($_SESSION['inputs'])) {
    $_SESSION['inputs'] = array();
}

$form = new \SON\Form\Form();
$form->setMethod("post")->setAction("minhapagina.php");

if(isset($_POST['nome'])){

    if($_POST['tipo'] == "1") {
        $InputDinamico = new \SON\Form\Input\Type\InputText($_POST['nome']);
    }else if($_POST['tipo'] == "2"){
        $InputDinamico = new \SON\Form\Input\Type\InputSubmit($_POST['nome']);
    }else if($_POST['tipo'] == "3"){
        $InputDinamico = new \SON\Form\Input\Type\InputEmail($_POST['nome']);
    }

        $InputDinamico->setLabel($_POST['label']);
        $InputDinamico->setClass($_POST['class']);
        $InputDinamico->setPlaceholder($_POST['placeholder']);

        if(isset($_POST['required'])){
           $InputDinamico->setRequired("required");
        }

        array_push($_SESSION['inputs'], serialize($InputDinamico));
        echo "<br><br>";

        foreach($_SESSION['inputs'] as $input) {
           $form->addInput(unserialize($input));
        }

}

$form->render();

?>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</html>