<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','category_id’,’manufacture’,’model’,’serial’,’year’,’ran’,’description’,’dimensions’,’electrical’,’owner’,’location’,’purchase’,’sale’,’notes’,’image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
