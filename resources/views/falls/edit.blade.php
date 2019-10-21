@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fall
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fall, ['route' => ['falls.update', $fall->id], 'method' => 'patch']) !!}

                        @include('falls.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection