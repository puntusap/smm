<?php

namespace App\Repositories;

use App\Models\Magazine;
use App\Repositories\BaseRepository;

/**
 * Class MagazineRepository
 * @package App\Repositories
 * @version September 23, 2019, 3:07 am UTC
*/

class MagazineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type_id'
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
        return Magazine::class;
    }
}
