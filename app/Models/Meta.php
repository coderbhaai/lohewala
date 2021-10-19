<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = ['url','title', 'description'];

    public function scopeSearch($query, $val){
        return $query
        ->where('url', 'like', '%'.$val.'%')
        ->Orwhere('title', 'like', '%'.$val.'%')
        ->Orwhere('description', 'like', '%'.$val.'%');
    }

    public static function metatag(){
        $url = str_replace("http://sbslss.test","", url()->current());
        if(!$url){ $url = '/'; }
        $meta = Meta::select('*')->where('url', '=' , $url)->first();
        if($meta === NULL){
            $meta = Meta::select('*')->where('url', '=' , 'default')->first();
        }
        $blogMetaImage = Blogmeta::select('name')->where('url', $url)->where('type', 'page')->first();
        $blogImage = Blog::select('cover_img')->where('url', substr($url, 1) )->first();
        if($blogMetaImage != NULL){ 
            $meta['image'] = '/images/static/'.$blogMetaImage->name;
        }else if($blogImage != NULL){
            $meta['image'] = '/images/blog/'.$blogImage->cover_img;
        }else{
            $meta['image'] = '/images/static/banner-4.jpg';
        }
        $meta['url'] = $url;
        return $meta;
    }
}
