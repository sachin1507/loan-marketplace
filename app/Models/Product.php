<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 *
 * @package App
 * @property string $code
 * @property string $name
 * @property boolean $active
*/
class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product'; 
    protected $fillable = ['name', 'sub_title', 'cat_id', 'subcat_id', 'title', 'button_text', 'button_link', 'description', 'title1', 'content1', 'title2', 'content2', 'title3', 'content3', 'image', 'slug', 'active'];

    public function category() {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public function subcategory() {
	  return $this->belongsTo('App\Models\SubCategory', 'subcat_id');
	}

    
}
