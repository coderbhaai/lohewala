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

        $meta = null;
        $site = env('APP_URL');
        $url = str_replace("http://lohewala.test","", url()->current());
        
        if(!$url){ $url = '/'; }

        if( request()->routeIs('single') ){
            $check = Blog::where('url', $url)->first();
            
            $meta['url']                    = $url;
            $meta['title']                  = optional($check->meta)->title;
            $meta['description']            = optional($check->meta)->description;
            $meta['image']                  = optional($check->media)->path;
            $meta['preload']                = [ '/storage/blog/small/'.optional($check->media)->media ];
        }else{
            $meta = Meta::select('*')->where('url', $url)->first();
            $img = []; $image = null;
            if( $meta ){
                if( optional($meta->page)->preload ){
                    foreach( optional($meta->page)->preload->toArray() as $i ){
                        array_push( $img, $i['image'] );
                    }
                }
                if( optional($meta->page)->media ){
                    $image = optional($meta->page)->media->path;
                }
                $meta   =   $meta->toArray();
                
                $meta['preload']                    =   $img;
                $meta['image']                      =   $image;
            }else{
                $meta['url']                    = $url;
                $meta['title']                  = config('amitkk.brand');
                $meta['description']            = config('amitkk.brand');
                $meta['image']                  = "/images/logo-red.png";
                $meta['preload']                = [];
            }
        }

        // dd( $meta );

        return $meta;


        $url = str_replace("http://lohewala.test","", url()->current());
        $meta  = null;
        if(!$url){ $url = '/'; }

        $meta = Meta::select('*')->where('url', '=' , $url)->first();

        if( !$meta){
            $meta->url                    =   $url;
            $meta->title                  = "Lohewala";
            $meta->description            = "Lohewala";
            $meta->image                  = "/images/logo.png";
            $meta->preload                = [];
        }

        $blogMetaImage = Blogmeta::select('name')->where('url', $url)->where('type', 'page')->first();
        $blogImage = Blog::select('cover_img')->where('url', substr($url, 1) )->first();
        if($blogMetaImage != NULL){ 
            $meta['image'] = '/images/static/'.$blogMetaImage->name;
        }else if($blogImage != NULL){
            $meta['image'] = '/storage/blog/'.$blogImage->cover_img;
        }else{
            $meta['image'] = '/storage/blog/online-wordpress-theme-developer-in-delhi.jpg';
        }
        $meta['url'] = $url;

        
        return $meta;
    }
}
