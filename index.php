
<!--宿舍伐木累（Dormitory   family），用户可以在这个平台匿名分享宿舍喜怒哀乐，相当于一个树洞，在这个平台，用户可以发布、编辑、删除说说。-->



<?php
include_once 'crud.php';
$crud = new crud();
$result = $crud->readData();
?>

<html>
<head>
<title>宿舍伐木累</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="js/crudEvent.js"></script>

</head>
<body>
    <body background="images/cartoon.png">
    <div class="header">
    <div class="images"><img src="images/logo.jpg" width="1520" height="400" alt="logo" /></div>
    <div class="row">
        <a href="add.php"><button class="btn btn-primary btn-add">+说说你的故事</button></a>
    </div>

    <div class="row" id="container">
    <?php require_once "list.php" ?>
    </div>


    <!--bootstrap Modal模态框 -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form id="frmEdit">
                        <div class="form-group">
                            <div class="row">
                                <label>主题</label> <input type="text"
                                    name="title" id="title"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label>具体内容</label>
                                <textarea class="form-control"
                                    id="content"
                                    name="content"></textarea>
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="row">
                                <label>昵称</label> <input
                                    type="text" name="name"
                                    id="name"
                                    class="form-control">
                            </div>
                        </div>

                      

                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary"
                        id="<?php include_once'read.php'; echo $result[$k]["id"]; ?>" >保存</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ends here -->

    <!-- Modal for message-->
    <div class="modal fade" id="messageModal" tabindex="-1"
        role="dialog" data-backdrop="static"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">通知</h5>
                    <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center" id="msg"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ends here -->
</body>
</html>