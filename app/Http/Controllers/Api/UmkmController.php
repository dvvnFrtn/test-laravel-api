<?php

namespace App\Http\Controllers\Api;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UmkmController extends Controller
{
    public function index() {
        $allData = Umkm::all();
        return response()->json([
            'status' => true,
            'message' => 'Berhasil mendapatkan data umkm',
            'data' => $allData
        ]);
    }
}
