<!-- Mark Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mark', 'Mark:') !!}
    {!! Form::text('mark', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_id', 'Type Id:') !!}
    {!! Form::text('type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color_id', 'Color Id:') !!}
    {!! Form::text('color_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('autos.index') !!}" class="btn btn-default">Cancel</a>
</div>
