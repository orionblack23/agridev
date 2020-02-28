<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['shortName', 'longName', 'shortDesc', 'longDesc', 'price', 'cancelPrice', 'tag', 'categories_id'];

    public function presetPrice()
    {
        return ($this->price) . ' CFA';
    }

    public function addPresetPrice($qty)
    {
        return ($this->price) * $qty . ' CFA';
    }

    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory');
    }
}
