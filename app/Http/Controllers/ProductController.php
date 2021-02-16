<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasta;

class ProductController extends Controller
{
    /*
    *  Home page (elenco prodotti)  
    */
    public function index() {
        // $data = config('pasta');

        $lunghe = Pasta::where('tipo', 'lunga')->get();
        $corte = Pasta::where('tipo', 'corta')->get();
        $cortissime = Pasta::where('tipo', 'cortissima')->get();

        return view('home', compact('lunghe', 'corte', 'cortissime'));

    }    

    /*
    *  Dettaglio prodotto, versione ID da config
    */
    // public function show($id = 11) {
    //     $data = config('pasta');
    //     // dump($id);
    //     // dd($id);
    //     /* 
    //         $prev = $id - 1;
    //         $next = $id + 1;

    //         if($id == 0) {
    //             $prev = count($data) - 1;
    //         } elseif($id == count($data) - 1) {
    //             $next = 0;
    //         }
    //         dd($data);
    //         dump($data[$id]);
    //     */
    //     return view('product', [
    //         'product' => $data[$id],
    //         'id' => $id,
    //         'max' => count($data) - 1
    //         // 'prev' => $prev,
    //         // 'next' => $next 
    //     ]);
    // }

    public function show($slug) {
        $data = config('pasta');
        
        $product = Pasta::where('slug', $slug)->first();
        $productArray = $product->getAttributes();

        $prev = null;
        $index = $product->id - 1;    
        while(empty($prev) && $index >= 1) {
            $prev = Pasta::find($index);
            $index--;
        }

        $max = Pasta::max('id');
        $next = null;
        $index = $product->id + 1;
        while(empty($next) && $index <= $max) {
            $next = Pasta::find($index);
            $index++;
        }

        return view('product', [
            'product' => $productArray,
            'id' => $productArray["id"],
            'prev' => $prev,
            'next' => $next
            // 'max' => count($data) - 1
            // 'prev' => $prev,
            // 'next' => $next 
        ]);
    }
}
