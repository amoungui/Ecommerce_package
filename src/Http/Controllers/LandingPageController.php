<?php

namespace Scaffolder\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Scaffolder\Ecommerce\Product;

/**
 * Description of ContactController
 *
 * @author Amoungui
 */
class LandingPageController extends Controller {

    public function index(){
        $products = Product::inRandomOrder()->take(8)->get();

        return view('ecommerce::ecommerce/partials/landing-page')->with('products', $products);
    }

}
