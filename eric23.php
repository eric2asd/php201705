<?php
$upload = $_FILES['upload'];
$uploads_dir="./upload";
var_dump($upload);
//foreach ($upload['error'] as $index => $error){
//    if($error==0){
//        copy($upload['tmp_name'][$index],"./upload/{$upload['name'][$index]}");
//    }
//}
foreach ($upload["error"] as $key => $error) {
    if ($error == 0) {
        $tmp_name = $upload["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($upload["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}