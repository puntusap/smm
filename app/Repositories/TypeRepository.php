<?php

namespace App\Repositories;

use App\Models\Type;
use App\Repositories\BaseRepository;

/**
 * Class TypeRepository
 * @package App\Repositories
 * @version September 26, 2019, 4:10 am UTC
*/

class TypeRepository extends BaseRepository
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
        return Type::class;
    }
}
