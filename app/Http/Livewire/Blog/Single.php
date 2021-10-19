<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Comments;

class Single extends Component
{
    public $url, $title, $pageId;
    public $comments = [];
    public $response = [];
    public $data;
    public $type = 'Blog';
    
    public function mount($url){
        $this->url =        $url;
        $this->data =       Blog::where('url', $url)->first();
        if($this->data != null){
            $this->title =      $this->data->title;
            $this->pageId =      $this->data->id;
            $this->comments =   Comments::where('pageId', $this->data->id)->where('c_order', 0)->where('status', 1)->get();
            $this->response =   Comments::where('pageId', $this->data->id)->where('c_order', 1)->where('status', 1)->get();
        }else{
            return redirect('/404');
        }
    }
    
    public function render(){
        return view('livewire.blog.single');
    }
}