<?php

namespace App\Services;

use App\DTOs\ContactoDto;
use App\Models\Contacto;

class ContactoService
{
    public function __construct()
    {
    }

    public function store(ContactoDto $contactoDto): Contacto
    {
        return Contacto::create([
            'nombre' => $contactoDto->nombre,
            'email' => $contactoDto->email,
            'telefono' => $contactoDto->telefono,
            'planeta_nacimiento' => $contactoDto->planeta_nacimiento,
            'mensaje' => $contactoDto->mensaje,
            'opcion_formulario' => $contactoDto->opcion_formulario,
        ]);
    }
}