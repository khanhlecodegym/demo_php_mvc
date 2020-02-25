<?php

class PagesController
{
    public function home()
    {
        $listbrands = App::get('database')->selectAll('brands');


        $listbrands = array_map(function ($brand) {
            return new Brand($brand->brand_id, $brand->brand_name);
        }, $listbrands);

        include 'views/index.view.php';
    }

    public function about()
    {
    }

    public function contact()
    {
    }
}
