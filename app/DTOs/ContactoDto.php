<?php

namespace App\DTOs;

class ContactoDto
{
   public function __construct(
    public string $nombre,
    public string $email,
    public string $telefono,
    public string $planeta_nacimiento,
    public string $mensaje,
    public string $opcion_formulario,
   ) {}

    public static function fromRequest(array $data): self
    {
         return new self(
            $data['nombre'],
            $data['email'],
            $data['telefono'],
            $data['planeta_nacimiento'],
            $data['mensaje'],
            $data['opcion_formulario'],
        );
    }
}