<?php

include "../util/dbhelper.php";

$db = new DbHelper;

if (isset($_POST["submit"])) {
    $JobposterId = $_POST["JobposterId"];
    $JobName = $_POST["JobName"];

    
    if (!empty(trim($JobName))) {
        $joblister = $db->addRecord("company_lister_job", ["JobposterId" => $JobposterId, "JobName" => $JobName]);
        if ($joblister > 0) {
            header("Location: ../");
            exit();
        } else {
            header("Location: ../?m=NO+DATA+WAS+ADDED");
            exit();
        }
    } else {
        header("Location: ../upload_job.php");    
        exit();
    }
} else {
    header("Location: ../");
    exit();
}
