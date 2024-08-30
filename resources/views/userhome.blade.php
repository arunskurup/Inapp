@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
            
                    <li>{{ $error }}</li>
            
                @endforeach
                </ul>
            </div>
            @endif
           
            @if($message = Session::get('success'))
                      @php
                        Session::forget('success');
                    @endphp
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            @if($message = Session::get('error'))
                    @php
                        Session::forget('error');
                    @endphp
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('DashBorad') }}</div>

                <div class="card-body">
                    Welcome
                       
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
