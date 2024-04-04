@section('title', 'Reset Password')
@section('layout_css')
    <style>
        #box-login-personalize{
            width: 360px;
            margin: 3% auto;
        }
    </style>
@stop

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        @include('layouts.AdminLTE._includes._head')

    </head>
    <body class="hold-transition login-page">
        <div id="box-login-personalize">
            <div class="login-logo">
                
                @if(\App\Models\Config::find(1)->img_login == 'T')
                    <img src="{{ asset(\App\Models\Config::find(1)->caminho_img_login) }}" width="{{ \App\Models\Config::find(1)->tamanho_img_login }}%"/>
                    <br/>
                @endif
               
                {!! \App\Models\Config::find(1)->titulo_login !!}             
            </div>
            <div class="login-box-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form  method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required="" AUTOCOMPLETE='off'>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <br/>
                            <span class="help-block">
                                <strong><p class="text-red">{{ $errors->first('email') }}</p></strong>
                            </span>
                        @endif
                    </div>                    
                    <div class="row">  
                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Redefine password</button>
                        </div>  
                        <br/><br/><br/>
                        <div class="col-xs-12">
                            <center>
                                <a href="{{ route('login') }}">Login</a>
                            </center>                    
                        </div>
                    </div>                  
                </form> 
            </div>
        </div>

        @include('layouts.AdminLTE._includes._script_footer')

    </body>
</html>
