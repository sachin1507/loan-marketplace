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
class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'article'; 
    protected $fillable = ['name', 'sub_title', 'title', 'button_text', 'button_link', 'description', 'image', 'slug', 'active'];

    
}
