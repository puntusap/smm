<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Magazine
 * @package App\Models
 * @version September 23, 2019, 3:07 am UTC
 *
 * @property string name
 * @property integer type_id
 */
class Magazine extends Model
{
    use SoftDeletes;

    public $table = 'magazines';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'type_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'type_id' => 'required'
    ];

    
}
