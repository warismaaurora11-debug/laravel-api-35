<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::latest()->get();

        return response()->json([
            'status' => true,
            'message' => 'Kategori retrieved successfully',
            'data' => $kategori,
        ], Response::HTTP_OK);
    }
    public function store(Request $request)
{
    $kategori = Kategori::create([
        'name' => $request->name,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Kategori created successfully',
        'data' => $kategori,
    ], Response::HTTP_CREATED);
}
    public function update(Request $request, Kategori $kategori)
{
    $kategori->update([
        'name' => $request->name,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Kategori updated successfully',
        'data' => $kategori,
    ], Response::HTTP_OK);
}
    public function destroy(Kategori $kategori)
{
    $kategori->delete();

    return response()->json([
        'status' => true,
        'message' => 'Kategori deleted successfully',
    ], Response::HTTP_OK);
}
}
