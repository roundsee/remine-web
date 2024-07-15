<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $paket = Paket::all();
        $slots=DB::statement('CALL spgetdateslot(?)', [ $customerPhone]);
        return  view("landingpage",['paket','slots']);
    }
}
