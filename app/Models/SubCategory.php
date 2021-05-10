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
class SubCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'subcategory'; 
    protected $fillable = ['name', 'cat_id', 'image', 'active'];

    // returns category of any subcategory
	public function category()  {
	  return $this->belongsTo('App\Models\Category', 'cat_id');
	}

    
}
