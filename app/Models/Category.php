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
class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'category'; 
    protected $fillable = ['name', 'image', 'active'];

    // category has many subcategory
	// returns all subcategory on that category
	public function subcategory() {
	  return $this->hasMany('App\Models\SubCategory', 'cat_id');
	}

    
}
