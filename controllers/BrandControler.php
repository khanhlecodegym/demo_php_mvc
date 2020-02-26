<?php

namespace App\Controllers;

use App\Core\App;

class BrandControler
{
    public function store()
    {
        App::get('database')->insert('brands', [
            'brand_name' => $_POST['brand_name']
        ]);
        
        
        
        return redirect();
    }

    public function add()
    {
        return view('addBrand');
    }
}
