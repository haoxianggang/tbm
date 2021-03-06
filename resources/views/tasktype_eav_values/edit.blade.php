@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('view.edit')@lang('view.Tasktype Eav Value')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tasktypeEavValue, ['route' => ['tasktypeEavValues.update', $tasktypeEavValue->id], 'method' => 'patch']) !!}

                        @include('tasktype_eav_values.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection