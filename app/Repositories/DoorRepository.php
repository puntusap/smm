<?php

namespace App\Repositories;

use App\Models\Door;
use App\Repositories\BaseRepository;

/**
 * Class DoorRepository
 * @package App\Repositories
 * @version September 26, 2019, 7:09 am UTC
*/

class DoorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'color'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Door::class;
    }
}
