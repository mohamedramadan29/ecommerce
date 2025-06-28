<?php

namespace App\Models\admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ProductPreview extends Model
{
    //

    protected $table = 'product_previews';
    protected $fillable = ['comment','stars','product_id','user_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
