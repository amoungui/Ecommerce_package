<?php

namespace Scaffolder\Ecommerce\Repositories;

use Scaffolder\Ecommerce\Product;

/**
 * Description of CartRepository
 *
 * @author Amoungui
 */
class CartRepository extends ResourceRepository{

    public function __construct(Product $product) {
        $this->model = $product;
    }

    private function queryPaginateWithOrder() {
        return $this->model->orderBy('created_at', 'desc');		
    }    

    public function getWithNewsletterPaginate($n) {
        return $this->queryPaginateWithOrder()->paginate($n);
    }       
}