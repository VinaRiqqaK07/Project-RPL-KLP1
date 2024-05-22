<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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

    public function detailMenu($id)
    {
        $menu = Menu::find($id);
        return response()->json($menu);
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        //echo('Halo');
        /*
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
*/
        return view('check-out',[
            'list_pesanan' => $cart,
            'cart' => $cart,
        ]);
    }

    public function addToCart(Request $request)
    {
        $menuId = $request->id;
        $menuQty = $request->qty;
        //echo('Halo');

        //dd($menuId, $menuQty);

        $menu = Menu::find($menuId);

        if(!$menu) {
            return redirect()->back()->with('error', 'Menu tidak ditemukan');
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$menuId])) {
            $cart[$menuId]['qty'] += $menuQty;
        } else {
            $cart[$menuId] = [
                'name' => $menu->name,
                'price' => $menu->price,
                'qty' => $menuQty,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item berhasil ditambahkan');
    }

    public function removeFromCart($menuId)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$menuId])){
            unset($cart[$menuId]);
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item berhasil dihapus');
    }
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Keranjang berhasil dikosongkan');
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'table_number' => 'required|integer',
        ]);

        try {
            //code...
            DB::beginTransaction();

            $customerName = $request -> input('customer_name');
            $tableNumber = $request -> input('table_number');

            $cart = session()->get('cart', []);
            $grossAmount = 0;

            foreach ($cart as $item){
                $grossAmount += $item['price'] * $item['qty'];
            }

            $order = Orders::create([
                'customer_name' => $customerName,
                'table_number' => $tableNumber,
                'discount_id' => null,
                'gross_amount' => $grossAmount,
                'status' => 'Dipesan'
            ]);

            session()->forget('cart');

            DB::commit();

            return redirect()->route('payment')->with('success', 'Order Tersimpan');


        } catch (\Exception $e) {
            //throw $th;
            DB::rollback();
            return redirect()->back()->with('error', 'Order failed: '. $e->getMessage());
        }
    }

    public function paymentSuccess()
    {
        Session::forget('cart');
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
