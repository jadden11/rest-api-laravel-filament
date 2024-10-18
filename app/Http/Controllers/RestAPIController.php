<?php

namespace App\Http\Controllers;

use App\Models\RestAPI;
use Illuminate\Http\Request;

class RestAPIController extends Controller
{
    public function index()
    {
        $data = RestAPI::all();
        try {
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $data
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'error' . $e->getMessage(),
                'data' => $e
            ], 500);
        }
    }
}
