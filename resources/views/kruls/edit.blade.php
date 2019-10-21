@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Krul
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($krul, ['route' => ['kruls.update', $krul->id], 'method' => 'patch']) !!}

                        @include('kruls.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection