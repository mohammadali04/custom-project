<?php
namespace App\Http\Controllers\ApiBaseController;
use App\Http\Controllers\Controller;
class BaseController extends Controller{
    public function sendResponse($message,$data,$code=200){
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data
        ];
        return response()->json($response,$code);
    }
    public function sendError($message,$errorMessages,$code=404){
        $response = [
            'success' => false,
            'message' => $message,
        ];
        if(!empty($data)){
            $response['data'] = $errorMessages;
        }
        return response()->json($response,$code);
    }
}