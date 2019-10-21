<?php

namespace App\Repositories;

use App\Models\MSI;
use App\Repositories\BaseRepository;

/**
 * Class MSIRepository
 * @package App\Repositories
 * @version September 23, 2019, 7:17 am UTC
*/

class MSIRepository extends BaseRepository
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
        return MSI::class;
    }
}
