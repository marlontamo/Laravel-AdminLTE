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