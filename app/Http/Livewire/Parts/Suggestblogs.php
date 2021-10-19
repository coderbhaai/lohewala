<?php

namespace App\Http\Livewire\Parts;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Blogmeta;

class Suggestblogs extends Component
{
    public $data;
    
    public function render(){
        $this->data =   Blog::select('id', 'title', 'url', 'smallImg', 'category', 'created_at')->inRandomOrder()->limit(6)->get()
        ->map(function($i) {
            $xx   =   Blogmeta::select('name', 'url')->whereIn('id', json_decode( $i->category ) )->get();
            $catArray = [];
            for ($j=0; $j <count($xx) ; $j++) { array_push( $catArray, $xx[$j] ); }
            $i['catArray']  =   $catArray;            
            return $i;
        });
        return view('livewire.parts.suggestblogs');
    }
}
