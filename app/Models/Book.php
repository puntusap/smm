<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Book
 * @package App\Models
 * @version September 29, 2019, 10:01 am UTC
 *
 * @property \App\Models\Author name
 * @property string name
 * @property integer author
 */
class Book extends Model
{

    public $table = 'Book';
    


    public $fillable = [
        'name',
        'author'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'author' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    
    
    public function author()
    {
        return $this->hasOne(\App\Models\Author::class, 'author','id');
    }
}
