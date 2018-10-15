<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {
    //
    public function hello(){
        return 'Hello from WelcomeController';
    }

//    public function page($id='kmutt'){
//        return 'Welcome to Page ' . $id;
//    }

    public function page($id=null, $title=null){
        return 'Welcome to Page ' . $id . ' ' . $title;
    }

}
