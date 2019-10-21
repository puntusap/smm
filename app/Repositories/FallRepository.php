<?php

namespace App\Repositories;

use App\Models\Fall;
use App\Repositories\BaseRepository;

/**
 * Class FallRepository
 * @package App\Repositories
 * @version September 23, 2019, 4:56 am UTC
*/

class FallRepository extends BaseRepository
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
        return Fall::class;
    }
}
