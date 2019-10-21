<div class="table-responsive">
    <table class="table" id="magazines-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Type Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($magazines as $magazine)
            <tr>
                <td>{!! $magazine->name !!}</td>
            <td>{!! $magazine->type_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['magazines.destroy', $magazine->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('magazines.show', [$magazine->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('magazines.edit', [$magazine->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
