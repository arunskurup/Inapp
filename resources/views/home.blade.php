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
                <div class="card-header">{{ __('Import') }}</div>

                <div class="card-body">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group m-3 .">
                          <label for="exampleInputEmail1">Import CSV</label>
                          <input type="file" class="form-control" name="file">
                        </div>
                        <div class="d-flex justify-content-end m-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                       
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
