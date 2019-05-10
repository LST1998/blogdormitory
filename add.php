<!--说说你的....增加新记录-->


<?php
if (isset($_POST["add"])) {
    include_once 'crud.php';
    $crud = new crud();
    $result = $crud->add($_POST);
    header("Location: index.php");
}
?>

<html>
<head>
<title>宿舍伐木累</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="jquery-3.3.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="crudEvent.js"></script>
</head>
<body>

    <div class="row">
        <div class="form-container">
            <form method="POST" >
                <div class="form-group">
                    <div class="row">
                        <label>主题</label> <input type="text"
                            name="title" id="title" class="form-control"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>具体内容</label>
                        <textarea class="form-control" id="content"
                            name="content" required></textarea>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="row">
                        <label>昵称</label> <input type="text"
                            name="name" id="name"
                            class="form-control" required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <button class="btn btn-primary" name="add">发布</button>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <a href="index.php"><button class="btn btn-primary" name="close">关闭</button></a>
                    </div>
                </div>


            </form>
        </div>
    </div>


</body>
</html>