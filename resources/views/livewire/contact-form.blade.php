<div class="form-section">
    <form wire:submit="submit">
        <div class="white-line"></div>
        <div class="form-wrapper container">
            <p><span>Envíanos tu</span> mensaje</p>

            @if (session('form_error'))
                <span class="error form-error">{{ session('form_error') }}</span>
            @endif

            @if (session('form_success'))
                <span class="success form-success">{{ session('form_success') }}</span>
            @endif

            <div class="form-left">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="name" wire:model='nombre' placeholder="Nombre">
                        @error('nombre') <span class="error input-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" wire:model='email' placeholder="Email">
                        @error('email') <span class="error input-error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="phone" wire:model='telefono' placeholder="Teléfono">
                        @error('telefono') <span class="error input-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" id="planet" wire:model='planeta_nacimiento' placeholder="Planeta de Nacimiento">
                        @error('planeta_nacimiento') <span class="error input-error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group full-width">
                        <textarea id="message" wire:model='mensaje' placeholder="Mensaje"></textarea>
                        @error('mensaje') <span class="error input-error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <p class="small-text">
                    Sus datos serán tratados por IMPACTA para la atención de sus consultas o solicitudes
                    de información realizadas. Puede ejercer sus derechos conforme a lo dispuesto en la
                    Política de Privacidad. <a href="#">Más información aquí</a>
                </p>
            </div>
            <div class="form-right">
                <p>Selecciona solo <span> un resultado:</span></p>
                <div class="radio-wrapper">
                    @foreach ($opciones_radio_input as $index => $opcion)
                        <div class="radio-item">
                            <input type="radio" id="option_{{ $index }}" wire:model='opcion_formulario' value="{{ $opcion }}">
                            <label for="option_{{ $index }}">{{ $opcion }}</label>
                        </div>
                    @endforeach
                    @error('opcion_formulario') <span class="error input-error">{{ $message }}</span> @enderror
                </div>
    
                <div class="send-form-wrapper">
                    <div class="checkbox-item">
                        <input id="privacy-policy" type="checkbox" wire:model='politica_privacidad'>
                        <label for="privacy-policy">He leído y acepto el <span>aviso legal</span>
                            y la <span>política de privacidad</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="form-button"><span>Enviar Mensaje</span></button>

                    @error('politica_privacidad') <span class="error input-error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
   </form>
</div>