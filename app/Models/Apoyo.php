<?php

namespace App\Models;

use App\Traits\UuidModel;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Apoyo
 * @package App\Models
 * @version August 12, 2019, 7:28 pm -05
 *
 * @property string name
 */
class Apoyo extends Model
{
    use UuidModel;
    public $incrementing = false;

    protected $primaryKey = 'uuid';
    use SoftDeletes;

    public $table = 'apoyos';


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
        return $this->belongsToMany('App\Models\Votante', 'apoyo_votante')->withTimestamps();
    }
}
