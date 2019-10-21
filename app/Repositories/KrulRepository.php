<?php

namespace App\Repositories;

use App\Models\Krul;
use App\Repositories\BaseRepository;

/**
 * Class KrulRepository
 * @package App\Repositories
 * @version September 23, 2019, 4:53 am UTC
*/

class KrulRepository extends BaseRepository
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
        return Krul::class;
    }
}
