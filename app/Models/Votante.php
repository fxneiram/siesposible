<?php

namespace App\Models;

use App\Traits\UuidModel;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Votante
 * @package App\Models
 * @version August 8, 2019, 3:38 pm -05
 *
 * @property string nombre
 * @property string apellido
 * @property string cedula
 * @property string celular
 * @property string barrio_id
 * @property date nacimiento
 * @property string gps
 * @property string sector
 * @property string tipo_voto
 * @property boolean incentivado
 */
class Votante extends Model
{
    use UuidModel;
    public $incrementing = false;

    protected $primaryKey = 'uuid';
    use SoftDeletes;

    public $table = 'votantes';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'celular',
        'barrio_id',
        'nacimiento',
        'usuario_regitra',
        'sexo',
        'lider_id',
        'evento_id',
        'gps',
        'sector',
        'tipo_voto',
        'intencion_voto',
        'incentivado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'cedula' => 'string',
        'celular' => 'string',
        'sexo' => 'string',
        'lider_id' => 'string',
        'barrio_id' => 'string',
        'nacimiento' => 'date',
        'gps' => 'string',
        'sector' => 'string',
        'tipo_voto' => 'string',
        'intencion_voto' => 'string',
        'incentivado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'integer|min:1000000|max:2000000000|required|unique:votantes',
        'barrio_id' => 'required',
        'sector' => 'required',
        'tipo_voto' => 'required'
    ];

    public function apoyos()
    {
        return $this->belongsToMany('App\Models\Apoyo', 'apoyo_votante', 'votante_uuid', 'apoyo_uuid')->withTimestamps();
    }

    public function barrio()
    {
        return $this->belongsTo('App\Models\Barrio');
    }
}
