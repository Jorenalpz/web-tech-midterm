<?php

namespace App\Repositories;

use App\Models\EarthQuake;
use App\Repositories\BaseRepository;

/**
 * Class EarthQuakeRepository
 * @package App\Repositories
 * @version October 25, 2021, 8:44 am UTC
*/

class EarthQuakeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'location',
        'intensity',
        'date_time_happen',
        'number_of_casualty'
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
        return EarthQuake::class;
    }
}
