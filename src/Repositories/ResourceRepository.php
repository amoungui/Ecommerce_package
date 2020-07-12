<?php
namespace Scaffolder\Ecommerce\Repositories;

/**
 * Description of ResourceRepository
 *
 * @author Amoungui
 */
abstract class ResourceRepository {
    protected $model;

    public function getPaginate($n){
        return $this->model->paginate($n);
    }

    //abstract public function store (Array $inputs);

    public function inRandomOrderItem($n){
        return $this->model::inRandomOrder()->take($n)->get();
    }

    private function save(Product $product, Array $inputs) {
        $product->email = $inputs['name'];

        $product->save();
    }        
    
    public function store(Array $inputs) {
        $post = new $this->model;		

        $this->save($post, $inputs);

        return $post;
    }  

    public function getById($id) {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs) {
        $this->getById($id)->update($inputs);
    }

    public function destroy($id) {
        $this->getById($id)->delete();
    }
}
