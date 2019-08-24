<?php

namespace App\Models;

use App\Traits\UuidModel;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Casa
 * @package App\Models
 * @version August 22, 2019, 4:36 pm -05
 *
 * @property string nombre_cuidador
 * @property string telefono_cuidador
 * @property string capacidad_personas
 * @property string gps
 * @property integer numero_casa
 */
class Casa extends Model
{
 use UuidModel;
 public $incrementing = false;

    protected $primaryKey = 'uuid';
    use SoftDeletes;

    public $table = 'casas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre_cuidador',
        'telefono_cuidador',
        'capacidad_personas',
        'gps',
        'numero_casa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre_cuidador' => 'string',
        'telefono_cuidador' => 'string',
        'capacidad_personas' => 'string',
        'gps' => 'string',
        'numero_casa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_cuidador' => 'required',
        'capacidad_personas' => 'required',
        'gps' => 'required',
        'numero_casa' => 'required'
    ];

    
}
