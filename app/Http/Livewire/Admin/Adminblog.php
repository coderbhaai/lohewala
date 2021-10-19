<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Blogmeta;
use Livewire\WithPagination;

class Adminblog extends Component
{
    use WithPagination;    
    public $category = [];
    public $tag = [];
    public $sortBy = 'url';
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $search = '';
    public $perPageOptions = [10,25,50,100,1000];

    public function render(){
        // $data =   Blog::select('id', 'title', 'url', 'smallImg', 'category', 'tag', 'updated_at')
        //                 ->search($this->search)
        //                 ->orderBy($this->sortBy, $this->sortDirection)
        //                 ->paginate($this->perPage);
        $this->category = Blogmeta::select('id', 'name', 'url')->where('type', 'category')->get();
        $this->tag = Blogmeta::select('id', 'name', 'url')->where('type', 'tag')->get();

        $data =   Blog::select('id', 'title', 'url', 'smallImg', 'category', 'tag', 'updated_at')->get()->map(function($i) {
            $xx   =   Blogmeta::select('name')->whereIn('id', json_decode( $i->category ) )->get();
            $catArray = [];
            for ($j=0; $j <count($xx) ; $j++) { array_push( $catArray, $xx[$j]['name'] ); }
            $i['catArray']  =   $catArray;

            $yy   =   Blogmeta::select('name')->whereIn('id', json_decode( $i->tag ) )->get();
            $tagArray = [];
            for ($j=0; $j <count($yy) ; $j++) { array_push( $tagArray, $yy[$j]['name'] ); }
            $i['tagArray']  =   $tagArray;

            return $i;
        });
        
        return view('livewire.admin.adminblog', 
            [
                'data'              =>  $data,
                'category'          =>  $this->category,
                'tag'               =>  $this->tag,
                'perPageOptions'    =>  $this->perPageOptions,
            ]
        );
    }

    public function sortBy($field){
        if($this->sortDirection == 'asc'){ $this->sortDirection = 'desc'; }else{ $this->sortDirection = 'asc'; }
        return $this->sortBy = $field;
    }

    public function updatingSearch(){ $this->resetPage(); }
}