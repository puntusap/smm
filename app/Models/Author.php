<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @package App\Models
 * @version September 23, 2019, 4:10 am UTC
 *
 */
class Author extends Model
{
    use SoftDeletes;

    public $table = 'authors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class);
    }

    
}
