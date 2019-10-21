<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class asd
 * @package App\Models
 * @version September 23, 2019, 7:19 am UTC
 *
 * @property string name
 */
class asd extends Model
{

    public $table = 'asd';
    


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
