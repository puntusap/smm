<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Door
 * @package App\Models
 * @version September 26, 2019, 7:09 am UTC
 *
 * @property string color
 */
class Door extends Model
{

    public $table = 'Door';
    


    public $fillable = [
        'color'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'color' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
