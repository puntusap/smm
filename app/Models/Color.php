<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Color
 * @package App\Models
 * @version September 19, 2019, 5:44 am UTC
 *
 * @property string name
 */
class Color extends Model
{

    public $table = 'Colors';
    


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
