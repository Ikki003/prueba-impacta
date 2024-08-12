<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'contactos';
}
