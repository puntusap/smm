<?php

namespace App\Repositories;

use App\Models\Note;
use App\Repositories\BaseRepository;

/**
 * Class NoteRepository
 * @package App\Repositories
 * @version September 29, 2019, 10:41 am UTC
*/

class NoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_id'
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
        return Note::class;
    }
}
