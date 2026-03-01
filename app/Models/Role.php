<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'rol_id';

    protected $fillable = [
        'rol_nombre',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'int_rol', 'rol_id');
    }
}
