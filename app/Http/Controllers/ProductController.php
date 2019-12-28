<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public  function getProducts(){
        $products = Products::all();
        //dd($products);

        return view('catalog-page')
            ->with('products', $products);
    }
    public function showProduct(Request $request){

        $product = Products::get()
            ->where('id',$request->id)
            ->first();
        return view('product-page')
            ->with('product',$product);
    }

    public function getLatestProducts(Request $request){
        if ($request->ajax()) {
            $output = '<div class="row justify-content-center">';
            $products = Products::latest()
            ->take(3)
            ->get();
            if ($products) {
                foreach ($products as $product) {

                    $output .=
                        '<div class="col-12 col-md-6 col-lg-4">'.
                            '<div class="border rounded-0 clean-product-item">'.
                                '<div class="image"><img class="img-fluid d-block mx-auto" src="'.$product->imageUrl.'"></div>'.
                                '<div class="product-name">'.$product->name.'</div>'.
                                '<div class="product-name"> '.$product->description.
                                    '<div class="price">'.
                                        '<h3>'.$product->price.'$</h3>'.'<br>'.
                                        '<button class="btn btn-primary" >Ver producto</button>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>';
                    /**
                    $output .= '<tr>' .
                        '<td>' . $product->name . '</td>' .
                        '<td>' . $product->description . '</td>' .
                        '<td>' . $product->price . '</td>' .
                        '<td>' . $product->stock . '</td>' .
                        '<td>' . $product->processor . '</td>' .
                        '<td>' . $product->graphic . '</td>' .
                        '<td>' . $product->RAM . '</td>' .
                        '<td>' . $product->motherboard . '</td>' .
                        "<td><img src='$product->imageUrl'></td>" .
                        "<td><button>Ver producto</button></td>".
                        '</tr>';
                     **/
                }
                $output .= '</div>';
                return Response($output);
            }
        }
    }
}
