<?php


if(isset($_POST["id"])) {
    include_once 'crud.php';
    $crud = new crud();
    $result = $crud->edit($_POST);
    print_r(json_encode("你修改成功啦！", JSON_UNESCAPED_UNICODE));
	
}
?>