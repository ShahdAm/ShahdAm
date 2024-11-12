<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Shopping extends Controller
{
    public function index()
    {
        return view('shopping.landingpage');
    }


    public function Seeds()
    {
        $product = products::all();
        return view('shopping.Seeds', [
            'item1' => $product[0] ?? null,
            'item2' => $product[1] ?? null,
            'item3' => $product[2] ?? null,
            'item4' => $product[3] ?? null,
            'item5' => $product[4] ?? null,
            'item6' => $product[5] ?? null,
            'item7' => $product[6] ?? null,
        ]);
    }
    
    
    public function Indoor_Plants()
    {
       
        $product = products::all();
        return view('shopping.Indoor_Plants', [
            'item14' => $product[14] ?? null,
            'item15' => $product[15] ?? null,
            'item16' => $product[16] ?? null,
            'item17' => $product[17] ?? null,
            'item18' => $product[18] ?? null,
            'item19' => $product[19] ?? null,
            'item20' => $product[20] ?? null,
        ]);
    }

    public function Outdoor_plants()
    {
       
        $product = products::all();
        return view('shopping.Outdoor_plants', [
            'item7' => $product[7] ?? null,
            'item8' => $product[8] ?? null,
            'item9' => $product[9] ?? null,
            'item10' => $product[10] ?? null,
            'item11' => $product[11] ?? null,
            'item12' => $product[12] ?? null,
            'item13' => $product[13] ?? null,
        ]);
    }

    public function Gardening_Tools()
    {
       
        $product = products::all();
        return view('shopping.Gardening_Tools', [
            'item21' => $product[21] ?? null,
            'item22' => $product[22] ?? null,
            'item23' => $product[23] ?? null,
            'item24' => $product[24] ?? null,
            'item25' => $product[25] ?? null,
            'item26' => $product[26] ?? null,
            'item27' => $product[27] ?? null,
        ]);
    }

    public function add_to_cart()
    {
      $count=session::get('counter');
      $count++;
      session::put('counter',$count);
      return view('shopping.landingpage');

    }


    public function productdetails($id)
    {
        
        $producdetails=DB::table('products')
        ->join('products__details','products.id','=','products__details.id_products')
        ->where('products.id','=',$id)
        ->first();

       
        return view('shopping.product_details',['prod'=>$producdetails]);
    }


    public function electric()
    {
        $product=products::all();
        return view('shopping.electric',['product'=>$product]);
    }
}
