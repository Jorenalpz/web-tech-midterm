<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EarthQuake
 * @package App\Models
 * @version October 25, 2021, 8:44 am UTC
 *
 * @property string $location
 * @property number $intensity
 * @property string|\Carbon\Carbon $date_time_happen
 * @property integer $number_of_casualty
 */
class EarthQuake extends Model
{

    use HasFactory;

    public $table = 'earthquake_info';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'location',
        'intensity',
        'date_time_happen',
        'number_of_casualty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'string',
        'intensity' => 'decimal:2',
        'date_time_happen' => 'datetime',
        'number_of_casualty' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'location' => 'required|string|max:255',
        'intensity' => 'required|numeric',
        'date_time_happen' => 'required',
        'number_of_casualty' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
