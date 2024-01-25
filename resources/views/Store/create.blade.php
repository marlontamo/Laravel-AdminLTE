@extends('layouts.AdminLTE.index')

@section('icon_page', 'home')

@section('title', 'Create a Store')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('store-list') }}" class="link_menu_page">
			<i class="fa fa-user"></i> Store's
		</a>								
	</li>

@endsection

@section('content')    
<div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">	
					 <form action="{{ route('store-store') }}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('storename') ? 'has-error' : '' }}">
                                    <label for="nome">Store Name</label>
                                    <input type="text" name="storename" class="form-control" placeholder="Store-Name" required="" value="{{ old('storename') }}">
                                    @if($errors->has('storename'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('storename') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                    <label for="description">Store Description</label>
                                    <input type="text" name="description" class="form-control" placeholder="description"  required="" value="{{ old('description') }}">
                                    @if($errors->has('store-description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                                </div>
                            </div>
                            <div class="col-lg-6"></div> 
                            <div class="col-lg-6">
                               <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-fw fa-plus"></i> Add</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>    

@endsection

@section('layout_js')    

    <script> 
        $(function(){             
            $('.select2').select2({
                "language": {
                    "noResults": function(){
                        return "No records found.";
                    }
                }
            });
            
            $('#icheck').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue'
            });
        }); 

    </script>

@endsection