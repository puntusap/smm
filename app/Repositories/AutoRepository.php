<?php

namespace App\Repositories;

use App\Models\Auto;
use App\Repositories\BaseRepository;

/**
 * Class AutoRepository
 * @package App\Repositories
 * @version September 19, 2019, 6:33 am UTC
*/

class AutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mark',
        'type_id',
        'color_id'
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
        return Auto::class;
    }
}
