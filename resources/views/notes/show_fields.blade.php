<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $note->id !!}</p>
</div>

<!-- Name Id Field -->
<div class="form-group">
    {!! Form::label('name_id', 'Name Id:') !!}
    <p>{!! $note->name_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $note->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $note->updated_at !!}</p>
</div>

