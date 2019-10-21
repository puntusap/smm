<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Note
 * @package App\Models
 * @version September 29, 2019, 10:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer name_id
 */
class Note extends Model
{

    
    public $table = 'Note';
    


    public $fillable = [
        'name_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'name', 'name_id');
    }
}
