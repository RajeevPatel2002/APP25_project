<?php
    // $res = fopen("topa.jpeg", "r");
    // $photo= fread($res, filesize("topa.jpeg"));
    // $dest = fopen("topppa.jpeg", 'w');
    // fwrite($dest,$photo);
    // fclose($dest);
    // fclose($res);
    $data=file_get_contents("topppa.jpeg");
    file_get_contents("topa.jpeg",$data)
?>