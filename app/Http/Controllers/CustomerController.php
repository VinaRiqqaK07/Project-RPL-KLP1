<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Orders;
use App\Models\Category;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $list_pesanan = [];

    public function index(Request $request)
    {
        //
        //$menus = Menu::all();
        $categories = Category::all();

        $categories->map(function ($category) {
            switch ($category->name) {
                case 'Nasi':
                    # code...
                    $category->icon = 'fa-solid fa-bowl-food';
                    break;

                case 'Minuman':
                    # code...
                    $category->icon = 'fa-solid fa-wine-glass';
                    break;

                case 'Snack':
                    $category->icon = 'fa-solid fa-cookie-bite';
                    break;
                
                default:
                    # code...
                    $category->icon = 'fa-solid fa-utensils';
                    break;
            }
            return $category;
        });

        $activeCategory = $request->input('category', 'All');

        if($activeCategory === 'All'){
            $menus = Menu::all();
        } else {
            $category = Category::where('name', $activeCategory)->first();
            $menus = Menu::where('categories_id', $category->id)->get();
        }
        
        return view('order', [
            'menus' => $menus,
            'categories' => $categories,
            'activeCategory' => $activeCategory,
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
        $sumprice = 0;

        foreach ($cart as $item){
            $sumprice += $item['price'] * $item['qty'];
        }
        return view('check-out',[
            'list_pesanan' => $cart,
            'cart' => $cart,
            'sumprice' => $sumprice,
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

            DB::commit();
            $orderId = $order->id;

            //DB::beginTransaction();

            // Buat order items
            foreach ($cart as $menuId => $item) {
                OrderItems::create([
                    'orders_id' => $orderId,
                    'menu_id' => $menuId,
                    'qty' => $item['qty'],
                    'total_amount' => $item['price'] * $item['qty'],
                    'note' => $item['note'] ?? null, // Pastikan ada kolom note di cart jika ada
                ]);
            }
            //DB::commit();

            session()->forget('cart');

            return redirect()->route('payment')->with('success', 'Order Tersimpan');
        } catch (\Exception $e) {
            //throw $th;
            //dd($e->getMessage());
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
