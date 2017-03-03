@extends('admin.layout.admin')

@section('content')

    <h3 style="padding-bottom: 25px">Add New Item</h3>

    <div class="row">
        <div class="col-md-1">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <div class="form-group">
            {{ Form::label('name', ' Item Name') }}
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

        </div>




    </div>
    <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('category_id', 'Category') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
                </div>
           </div>
        <div class="col-md-1">
            <div class="form-group">
            {{ Form::label('manufacture', ' Manufacture') }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::text('manufacture', null, array('class' => 'form-control','minlength'=>'2')) }}
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
            <div class="form-group">
            {{ Form::label('model', ' Model') }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::text('model', null, array('class' => 'form-control','minlength'=>'2')) }}
            </div>

        </div>
        <div class="col-md-1">
            <div class="form-group">
            {{ Form::label('serial', 'Serial') }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::text('serial', null, array('class' => 'form-control','minlength'=>'2')) }}
            </div>
       </div>


    </div>
    <div class="row">

        <div class="col-md-1">
            <div class="form-group">
            {{ Form::label('year', ' Year') }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::text('year', null, array('class' => 'form-control','minlength'=>'4')) }}
            </div>

        </div>
        <div class="col-md-1">
                    <div class="form-group">
                    {{ Form::label('ran', 'Previously Ran') }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::text('ran', null, array('class' => 'form-control','minlength'=>'2')) }}
                    </div>
               </div>

    </div>

    <div class="row">
        <div class="col-md-1">
            <div class="form-group">
            {{Form::label('description', 'Description')}}
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                {{Form::textarea('description',null,array('class' => 'form-control', 'placeholder'=>'Item description', 'id' => 'technig'))}}
            </div>
       </div>
    </div>

    <h4 style="padding: 25px 0px; color:#cb0505">More Options</h4>

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('dimensions', ' Dimensions') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::text('dimensions', null, array('class' => 'form-control','minlength'=>'2')) }}
                </div>

            </div>
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('electrical', 'Electrical') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::text('electrical', null, array('class' => 'form-control','minlength'=>'2')) }}
                </div>
           </div>

        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('owner', ' Owner') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::text('owner', null, array('class' => 'form-control','minlength'=>'2')) }}
                </div>

            </div>
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('location', 'Location') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::text('location', null, array('class' => 'form-control','minlength'=>'2')) }}
                </div>
           </div>

        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('purchase', ' Purchase Price') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::text('purchase', null, array('class' => 'form-control','minlength'=>'2')) }}
                </div>

            </div>
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('sale', 'Sales Price') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::text('sale', null, array('class' => 'form-control','minlength'=>'2')) }}
                </div>
           </div>

        </div>

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    {{ Form::label('image', 'Image') }}
                </div>
            </div>
            <div class="col-md-4">
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    {{ Form::label('added', 'Added By') }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{Auth::user()->name}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                {{ Form::label('notes', ' Notes') }}
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    {{ Form::text('notes', null, array('class' => 'form-control','minlength'=>'5')) }}
                </div>

            </div>


        </div>

        <div class="clearfix">
        {{ Form::submit('Add Item', array('class' => 'btn btn-success pull-right')) }}
        {!! Form::close() !!}
        </div>
</div>
    </div>



@endsection