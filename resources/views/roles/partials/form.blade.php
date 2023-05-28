<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
        'placeholder' => 'Escriba un nombre',
    ]) !!}

    {{-- Directiva de blade->error --}}
    @error('name')
        {{-- La clase "invalid-feedback" necesita que encima de el si o si exista
           un input con la clase "is-invalid", caso contrario no muestra nada --}}
        <span class="invalid-feedback">
            {{-- El mensaje de error esta almacenado temporalmente en una
            var llamada message --}}
            <strong>{{ $message }}</strong>

        </span>
    @enderror

</div>

<strong>
    Permisos:
</strong>

@error('permissions')
    {{-- salto de linea --}}
    <br>
    <small class="text-danger">
        {{-- El mensaje de error esta almacenado temporalmente en una
var llamada message --}}
        <strong>{{ $message }}</strong>
    </small>
    {{-- salto de linea --}}
    <br>
@enderror

@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{ $permission->name }}
        </label>
    </div>
@endforeach
