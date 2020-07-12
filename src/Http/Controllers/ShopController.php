<?php
namespace Scaffolder\Ecommerce\Http\Controllers;

use Scaffolder\Ecommerce\Product;
use App\Http\Controllers\Controller;
use Scaffolder\Ecommerce\Repositories\ShopRepository;

class ShopController extends Controller {
    
    public function __construct(ShopRepository $shopRepository) {
        $this->ShopRepository = $shopRepository;
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->ShopRepository->inRandomOrderItem(9);

        return view('ecommerce::ecommerce/partials/shop')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = $this->ShopRepository->getFirstOrFailWithSlug($slug);
        $mightAlsoLike = $this->ShopRepository->getFirstOrFailWithSlugDif($slug, 4);

        return view('ecommerce::ecommerce/partials/product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
