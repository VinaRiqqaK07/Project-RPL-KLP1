<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $list_pesanan = [];

    public function index()
    {
        //
        $menus = Menu::all();
        
        return view('order', [
            'menus' => $menus,
        ]);
    }

    public function checkout()
    {
        //echo('Halo');
        $list = $this->list_pesanan;

        $list = [
            [
                'name' => 'Mie Ayam',
                'price' => 'Rp22.000',
                'qty' => 1,
                'note' => 'Tidak pakai bawang goreng',
            ],
            [],
            [],
            [],
        ];

        foreach($list as &$pesanan) {
            $pesanan += [
                'name' => 'Nama menu',
                'price' => 'Rp20.000',
                'qty' => 1,
                'image' => 'https://th.bing.com/th/id/OIP.R-2OxDXmafvmLXU57LFELQHaHa?w=167&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'note' => "Masukkan note pesanan..",
            ];
            
        }
        unset($pesanan);

        return view('check-out',[
            'list_pesanan' => $list
        ]);
    }

    public function paymentSuccess()
    {
        return view('payment-success');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}