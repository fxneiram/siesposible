<?php

namespace App\Models;

use App\Traits\UuidModel;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lider
 * @package App\Models
 * @version August 9, 2019, 12:39 am -05
 *
 * @property string nombre
 * @property string documento
 * @property string telefono
 * @property string barrio
 * @property string email
 */
class Lider extends Model
{
 use UuidModel;
 public $incrementing = false;

    protected $primaryKey = 'uuid';
    use SoftDeletes;

    public $table = 'liders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'documento',
        'telefono',
        'barrio',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'uuid' => 'string',
        'nombre' => 'string',
        'documento' => 'string',
        'telefono' => 'string',
        'barrio' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
