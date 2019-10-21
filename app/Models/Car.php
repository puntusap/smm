<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Car
 * @package App\Models
 * @version September 29, 2019, 10:05 am UTC
 *
 * @property \App\Models\Type name
 * @property string name
 * @property integer types_id
 */
class Car extends Model
{

    public $table = 'Car';
    


    public $fillable = [
        'name',
        'types_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'types_id' => 'integer'
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
    public function name()
    {
        return $this->belongsTo(\App\Models\Type::class, 'name', 'type_id');
    }
}
