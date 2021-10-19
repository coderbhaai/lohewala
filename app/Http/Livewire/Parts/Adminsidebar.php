<?php

namespace App\Http\Livewire\Parts;

use Livewire\Component;

class Adminsidebar extends Component
{
    public $data =[
        [ "link"=>"adminmaster", "name"=>"Masters" ],
        [ "link"=>"meta", "name"=>"Meta Tags" ],
        [ "link"=>"blogmeta", "name"=>"Blog Meta" ],
        [ "link"=>"adminblog", "name"=>"Blog" ],
        [ "link"=>"admincomments", "name"=>"Comments" ],
        [ "link"=>"adminusers", "name"=>"Users" ],
        [ "link"=>"adminproducts", "name"=>"Products" ],
        [ "link"=>"adminreview", "name"=>"Reviews" ],
        // [ "link"=>"admincontact", "name"=>"Contact" ],
        // [ "link"=>"adminsitemap", "name"=>"Sitemap" ],
        // [ "link"=>"adminschema", "name"=>"Schema" ],
    ];

    public function render(){
        return view('livewire.parts.adminsidebar');
    }
}
