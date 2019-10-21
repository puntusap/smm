<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Client
 * @package App\Models
 * @version September 23, 2019, 3:29 am UTC
 *
 * @property integer name
 * @property integer sale
 */
class Client extends Model
{

    public $table = 'Client';
    


    public $fillable = [
        'name',
        'sale'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'integer',
        'sale' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class, 'type_id','id');
    }
}
