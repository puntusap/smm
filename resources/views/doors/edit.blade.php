@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Door
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($door, ['route' => ['doors.update', $door->id], 'method' => 'patch']) !!}

                        @include('doors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection