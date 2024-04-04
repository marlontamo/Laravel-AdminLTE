@extends('layouts.AdminLTE.index')

@section('icon_page', 'home')

@section('title', 'list Of Store')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('store-list') }}" class="link_menu_page">
			<i class="fa fa-user"></i> Store's
		</a>								
	</li>

@endsection

@section('content')    
    <div>
    <h1>Store List</h1>
    <div class="col-md-12">	
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>			 
                                                <th>ID</th>			 
                                                <th>StoreName</th>			 
                                                <th>Description</th>	 
                                                <th>Actions</th>		 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($store as $tindahan)
                                                <tr>           
                                                    <td>{{ $tindahan->id }}</td>  
                                                    <td>{{ $tindahan->name }}</td>                        
                                                    <td>{{ $tindahan->description }}</td>                         
                                                                         
                                                    <td class="text-center"> 
                                                    <button class="btn btn-primary  btn-xs"  title="View " data-toggle="modal" data-target="#modal-{{$tindahan->id}}"><i class="fa fa-eye"></i></button>
                                                        <a class="btn btn-warning  btn-xs" href="" title="Edit " data-toggle="modal" data-target="#modal"><i class="fa fa-pencil"></i></a> 
                                                        
                                                        <a class="btn btn-danger  btn-xs" href="" title="Delete " data-toggle="modal" data-target="#modal"><i class="fa fa-trash"></i></a>
                                                    </td> 
                                                
                                                            </form>  
                                                        </div>
                                                    </div>
                                                </div>
                                               <!-- modal> -->
                                               <div class="modal" tabindex="-1" role="dialog" id="modal-{{$tindahan->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Store # <b>{{$tindahan->id}}</b> View</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Store Name</label>
                                    <input type="text" name="name" class="form-control" maxlength="30" minlength="4" placeholder="Name" required="" value="{{$tindahan->name }}" autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Description</label>
                                    <input type="text" name="name" class="form-control" maxlength="30" minlength="4" placeholder="Name" required="" value="{{$tindahan->description }}" autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Created At</label>
                                    <input type="text" name="name" class="form-control" maxlength="30" minlength="4" placeholder="Name" required="" value="{{ $tindahan->created_at }}" autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Updated At</label>
                                    <input type="text" name="name" class="form-control" maxlength="30" minlength="4" placeholder="Name" required="" value="{{ $tindahan->updated_at }}" autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                               <!-- modalend -->
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>			 
                                                <th>ID</th>		
                                                <th>StoreName</th>	 
                                                <th>Description</th>		 
                                                <th>Actions</th>		 
                                            </tr>
                                        </tfoot>
                                    </table>
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