<?php
    $str_req = 'hello this is index.php request';
    $res['msg'] = $str_req;
    $res['parameter'] = $_POST['action'];

    echo json_encode($res);