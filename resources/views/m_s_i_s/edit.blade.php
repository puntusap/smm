@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M S I
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mSI, ['route' => ['mSIS.update', $mSI->id], 'method' => 'patch']) !!}

                        @include('m_s_i_s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection