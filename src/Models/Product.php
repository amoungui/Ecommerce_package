<?php

namespace Scaffolder\Ecommerce;
use Money\Currency as Currency;
use Money\Money as Money;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {   
        return number_format( $this->price/ 100, 0, ',', '.');  //money_format('$%i', $this->price / 100);
    }
}
