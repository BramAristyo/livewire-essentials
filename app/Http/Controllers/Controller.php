<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function successResponse($data = [], $message = 'Success', $status = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    protected function successResponseWithoutData($message = 'Success', $status = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
        ], $status);
    }

    protected function errorResponse($message = 'Error', $status = 400, $errors = [])
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors,
        ], $status);
    }

    protected function successRespond($data)
    {
        return response()->json($data);
    }
}
