<?php
function nameLengthIsValid($nameToValid){
    $length= strlen($nameToValid);
    $responses=[
        'isValid'=>false,
        'msg'=>''

    ];
    if ($length <2) {
        $responses=[
            'isValid'=>false,
            'msg'=>'Nom trop court'
        ];
    }
    elseif ($length >10) {
        $responses=[
            'isValid'=>false,
            'msg'=>'Nom trop long'
        ];
    }
    return $responses;
}



?>