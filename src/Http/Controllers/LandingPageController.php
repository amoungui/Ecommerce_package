<?php

namespace Scaffolder\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Description of ContactController
 *
 * @author Amoungui
 */
class LandingPageController extends Controller {

    public function index(){
        return view('ecommerce::home');
    }

}
