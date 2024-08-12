<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContactoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Contacto::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contacto');
        CRUD::setEntityNameStrings('contacto', 'contactos');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::column([
            'name' => 'nombre',
            'label' => "Nombre contacto",
            'type' => 'Text'
        ]);

        CRUD::column([
            'name' => 'email',
            'label' => "Email contacto",
            'type' => 'Text'
        ]);

        CRUD::column([
            'name' => 'telefono',
            'label' => "Telefono",
            'type' => 'Text'
        ]);

        CRUD::column([
            'name' => 'planeta_nacimiento',
            'label' => "Planeta de nacimiento",
            'type' => 'Text'
        ]);

        CRUD::column([
            'name' => 'mensaje',
            'label' => "Mensaje",
            'type' => 'Text'
        ]);

        CRUD::column([
            'name' => 'opcion_formulario',
            'label' => "Opción seleccionada",
            'type' => 'Text'
        ]);

    }


}
