<form method="POST" action="{{ route('ventas.store') }}" role="form" enctype="multipart/form-data">

    <div class="box-body">
        <div class="form-group">
            <label for="codigo">
                <input type="text" name="codigo " value="{{$codigo}}">
            </label>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    </div>
</form>
<div class="box box-info padding-1">