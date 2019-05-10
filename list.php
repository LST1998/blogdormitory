<!--主页所有记录显示-->


<?php

if (! empty($result)) {
    foreach ($result as $k => $v) {   //$k:key  $v:value
        ?>
<div class="box-container">
    <div class="title"><h3><?php echo $result[$k]["title"]; ?></h3></div>
    <div class="date"><?php echo $result[$k]["date"]; ?></div>
    <div class="content"><?php echo $result[$k]["content"]; ?>...</div>
    <div class="name"><?php echo $result[$k]["name"]; ?></div>
    <div class="action">
        <button class="btn-action bn-edit"
            id="<?php echo $result[$k]["id"]; ?>">编辑</button>
        <button class="btn-action bn-delete"
            id="<?php echo $result[$k]["id"]; ?>">删除</button>
    </div>
</div>
<?php
    }
}
?>