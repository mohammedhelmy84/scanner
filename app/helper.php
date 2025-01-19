<?php

function successResponse($message="Success data response",$data=null){
    $response=[
        'status'=>true,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response,200);
}

function failResponse($message="Fail data response",$data=null){
    $response=[
        'status'=>false,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response,400);
}
