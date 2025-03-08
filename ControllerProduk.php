<?php



namespace App\Http\Controllers\Tugas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerProduk extends Controller
{
    
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Kopi Hitam', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Teh Manis', 'harga' => 10000],
            ['id' => 3, 'nama' => 'Roti Bakar', 'harga' => 20000],
            ['id' => 4, 'nama' => 'Nasi Goreng', 'harga' => 30000],
            ['id' => 5, 'nama' => 'Ayam Geprek', 'harga' => 25000],
            ['id' => 6, 'nama' => 'Mie Ayam', 'harga' => 20000],
            ['id' => 7, 'nama' => 'Es Jeruk', 'harga' => 12000],
            ['id' => 8, 'nama' => 'Susu Coklat', 'harga' => 17000],
            ['id' => 9, 'nama' => 'Burger', 'harga' => 25000],
            ['id' => 10, 'nama' => 'Kentang Goreng', 'harga' => 15000]
        ];

        return response()->json($produk);
    }

    
    public function show($id)
    {
        $produk = [
            ['id' => 1, 'nama' => 'Kopi Hitam', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Teh Manis', 'harga' => 10000],
            ['id' => 3, 'nama' => 'Roti Bakar', 'harga' => 20000],
            ['id' => 4, 'nama' => 'Nasi Goreng', 'harga' => 30000],
            ['id' => 5, 'nama' => 'Ayam Geprek', 'harga' => 25000],
            ['id' => 6, 'nama' => 'Mie Ayam', 'harga' => 20000],
            ['id' => 7, 'nama' => 'Es Jeruk', 'harga' => 12000],
            ['id' => 8, 'nama' => 'Susu Coklat', 'harga' => 17000],
            ['id' => 9, 'nama' => 'Burger', 'harga' => 25000],
            ['id' => 10, 'nama' => 'Kentang Goreng', 'harga' => 15000]
        ];

        $produkDetail = collect($produk)->firstWhere('id', $id);

        if ($produkDetail) {
            return response()->json($produkDetail);
        } else {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
    }

   
    public function store(Request $request)
    {
        $produk_baru = [
            'id' => 11,  
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
        ];

        return response()->json(['message' => 'Produk berhasil ditambahkan!', 'produk' => $produk_baru]);
    }
}