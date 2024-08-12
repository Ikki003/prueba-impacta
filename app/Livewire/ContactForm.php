<?php

namespace App\Livewire;

use App\DTOs\ContactoDto;
use App\Enums\OpcionesFormularioEnum;
use App\Services\ContactoService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{

    public $nombre;
    public $email;
    public $telefono;
    public $planeta_nacimiento;
    public $mensaje;
    public $opcion_formulario;
    public $politica_privacidad;

    public function rules() 
    {
        $opciones = implode(',', array_map(fn ($case) => $case->value, OpcionesFormularioEnum::cases()));

        return [
            'nombre' => 'required|string|min:2',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'planeta_nacimiento' => 'required|string',
            'mensaje' => 'required|string|min:10',
            'opcion_formulario' => "required|in:$opciones",
            'politica_privacidad' => 'required|accepted',
        ];
    }

    public function messages() 
    {
        return [
            'nombre.required' => "El campo 'nombre' es obligatorio.",
            'nombre.string' => "El campo 'nombre' debe ser un texto.",
            'nombre.min' => "El campo 'nombre' debe tener al menos 2 caracteres.",
            'email.required' =>  "El campo 'email' es obligatorio.",
            'email.email' =>  "El campo 'email' debe ser un email válido.",
            'telefono.required' =>  "El campo 'teléfono' es obligatorio.",
            'planeta_nacimiento.required' =>  "El campo 'planeta de nacimiento' es obligatorio.",
            'mensaje.required' =>  "El campo 'mensaje' es obligatorio.",
            'mensaje.min' =>  "El campo 'mensaje' debe tener al menos 10 caracteres.",
            'opcion_formulario.required' =>  "Tienes que seleccionar una opción.",
            'opcion_formulario.in' =>  "El campo 'opción de formulario' debe ser uno de los valores permitidos.",
            'politica_privacidad.accepted' =>  "Tienes que aceptar la política de privacidad.",
        ];
    }

    public function submit()
    {

        $this->validate();

        try {
            $contactoService = new ContactoService();
            $contactoService->store(ContactoDto::fromRequest($this->all()));
        } catch(\Exception $e) {
            Log::error('Error en el controlador de contacto: '.$e->getMessage());

            return redirect()->back()->with('form_error', 'Ha ocurrido un error al enviar el formulario.');
        }
        
        return redirect()->back()->with('form_success', 'El formulario se ha enviado correctamente.');

        $this->reset();
    }


    public function render()
    {
        $opciones_radio_input = array_map(fn ($case) => $case->value, OpcionesFormularioEnum::cases());

        return view('livewire.contact-form', compact('opciones_radio_input'));
    }
}
