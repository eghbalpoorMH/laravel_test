<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SystemHealthController extends Controller
{
    public function index()
    {
        return response()->json(['status' => 'success'], 200);
    }

    public function database()
    {
        try {
            DB::connection()->getPDO();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'fail'], 500);
        }
    }
}
