<?php

namespace App\Models;

use App\Traits\UuidModel;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Barrio
 * @package App\Models
 * @version August 8, 2019, 2:47 pm -05
 *
 * @property string name
 */
class Barrio extends Model
{
    use UuidModel;
    public $incrementing = false;

    protected $primaryKey = 'uuid';
    use SoftDeletes;

    public $table = 'barrios';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function votantes()
    {
        return $this->hasMany('App\Models\Votante','barrio_id');
    }
}
