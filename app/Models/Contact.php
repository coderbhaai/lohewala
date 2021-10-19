<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['url', 'name', 'email', 'phone', 'message'];
    public function scopeSearch($query, $val){
        return $query
        ->where('name', 'like', '%'.$val.'%')
        ->Orwhere('email', 'like', '%'.$val.'%');
    }
}
