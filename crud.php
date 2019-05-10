<?php
include_once 'Dao.php';
class crud
{

    /* 获取所有数据 */
    public function readData()
    {
        try {
            
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT id,title,date,content,name FROM posts ORDER BY id DESC"; 
            $resource = $conn->query($sql); 
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            $dao->closeConnection();
       
        } catch (PDOException $e) {            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* 通过id获得单条记录 */
    public function readSingle($id)
    {
        try {
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT id,title,date,content,name FROM posts WHERE id=" . $id . " ORDER BY id DESC";  
            $resource = $conn->query($sql);
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* 增加一条新记录 */
    public function add($formArray)
    {
        $title = $formArray['title'];
        $date = $formArray['date'];
        $content = $formArray['content'];
        $name = $formArray['name'];
        $dao = new Dao();
        $conn = $dao->openConnection();
        $sql = "INSERT INTO posts SET title='".$title."',date=now(),content='".$content."',name='".$name."'"; 
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* 编辑一条新记录 */
    public function edit($formArray)
    {
        $id = $formArray['id'];
        $title = $formArray['title'];
        $content = $formArray['content'];
        $name = $formArray['name'];
        $dao = new Dao();
        $conn = $dao->openConnection();
        $sql = "UPDATE posts SET title='".$title."',date=now(),content='".$content."',name='".$name."' WHERE id=".$id;

        $conn->query($sql);
        $dao->closeConnection();
    }

    /* 删除一条记录*/
    public function delete($id)
    {
        $dao = new Dao();
        $conn = $dao->openConnection();
        $sql = "DELETE  FROM posts where id=".$id;
        $conn->query($sql);
        $dao->closeConnection();
    }


}

?>