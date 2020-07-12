<?php

namespace Scaffolder\Ecommerce\Repositories;

use Scaffolder\Ecommerce\Product;

/**
 * Description of ShopRepository
 *
 * @author Amoungui
 */
class ShopRepository extends ResourceRepository{

    public function __construct(Product $product) {
        $this->model = $product;
    }

    private function queryPaginateWithOrder() {
        return $this->model->orderBy('created_at', 'desc');		
    }    

    public function getWithNewsletterPaginate($n) {
        return $this->queryPaginateWithOrder()->paginate($n);
    }      

    public function getFirstOrFailWithSlug($slug){
        return $this->model::where('slug', $slug)->firstOrFail();
    }

    public function getFirstOrFailWithSlugDif($slug, $n){
        return $this->model::where('slug', '!=', $slug)->inRandomOrder()->take($n)->get();
    }    
}