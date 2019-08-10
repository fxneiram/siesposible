<?php

namespace App\Models;

use App\Traits\UuidModel;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoVoto
 * @package App\Models
 * @version August 8, 2019, 3:42 pm -05
 *
 * @property string name
 */
class TipoVoto extends Model
{
 use UuidModel;
 public $incrementing = false;

    protected $primaryKey = 'uuid';
    use SoftDeletes;

    public $table = 'tipo_votos';
    

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

    
}
