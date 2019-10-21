@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Magazine
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($magazine, ['route' => ['magazines.update', $magazine->id], 'method' => 'patch']) !!}

                        @include('magazines.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection