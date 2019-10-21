<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Types Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('types_id', 'Types Id:') !!}
    {!! Form::text('types_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cars.index') !!}" class="btn btn-default">Cancel</a>
</div>
