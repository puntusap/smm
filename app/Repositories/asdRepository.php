<?php

namespace App\Repositories;

use App\Models\asd;
use App\Repositories\BaseRepository;

/**
 * Class asdRepository
 * @package App\Repositories
 * @version September 23, 2019, 7:19 am UTC
*/

class asdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return asd::class;
    }
}
