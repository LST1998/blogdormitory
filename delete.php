<?php
if(isset($_POST["id"])) {
    include_once 'crud.php';
    $crud = new crud();
    $result = $crud->delete($_POST["id"]);
    print_r(json_encode("删除成功！"));  //json_encode() — 将数值转换成json数据存储格式。
}
?>

