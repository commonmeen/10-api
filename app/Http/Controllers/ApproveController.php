<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApproveController extends Controller
{
    //
    function Index(){
        return response()->json([
            'status' => 200,
            'message' => 'Hi! Approve',
            'array' => [
                '0' => ['id'=>0,'name'=>'farang','surname'=>'emmel',
                    'document'=>[
                        '0'=>['name'=>'Transcript','isApprove'=>0],
                        '1'=>['name'=>'ParentPermission','isApprove'=>1]
                    ]
                ],
                '1' => ['id'=>1,'name'=>'bas','surname'=>'tualek',
                    'document'=>[
                        '0'=>['name'=>'Transcript','isApprove'=>1],
                        '1'=>['name'=>'ParentPermission','isApprove'=>0]
                    ]
                ]
            ]
        ]); 
    }
    function WithParams(Request $req){
        return 'hello ' . $req->name . ' : ' . $req->surname;
    }
    function GetCheckTranscriptAmount(){
        return 31;
    }
    function GetCheckParentPermissionAmount(){
        return 44;
    }
}

