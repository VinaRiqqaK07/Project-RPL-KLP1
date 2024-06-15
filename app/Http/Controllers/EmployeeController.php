<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Orders;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $menus = Menu::all();
        $orderList = Orders::all();
        return view('employee.main-page', [
            'menus' => $menus,
            'orderList' => $orderList,
        ]);
    }

    public function login()
    {
        return view('employee.login');
    }

    public function setting()
    {
        return view('employee.settings');

    }

}
