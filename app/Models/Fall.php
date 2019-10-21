<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fall
 * @package App\Models
 * @version September 23, 2019, 4:56 am UTC
 *
 * @property string name
 */
class Fall extends Model
{

    public $table = 'Fall';
    


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
