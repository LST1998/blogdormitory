

<?php
    
    include_once 'crud.php';
    $crud = new crud();
    
    if(isset($_POST["type"])){
    switch($_POST["type"]) {
    
        case "single":
            
            if(isset($_POST["id"])) {
                $result = $crud->readSingle($_POST["id"]);
                if(!empty($result)) {
                    $responseArray["title"] = $result[0]["title"];
                    $responseArray["content"] = $result[0]["content"];
                    $responseArray["name"] = $result[0]["name"];
                    echo json_encode($responseArray);
                }
            }
            break;
        case "all":
            $result = $crud->readData();
            require_once "list.php";
            break;
        default:
            break;

    }
}
?>