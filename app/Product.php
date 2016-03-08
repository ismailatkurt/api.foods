<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Fields those can be filled.
     *
     * @var array
     */
    protected $fillable = ['name', 'content', 'season'];

    /**
     * Product model.
     *
     * @var string
     */
    protected $productModel = 'App\Models\Product';


}
