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
                <div class="card-header">{{ __('Set a new password') }}</div>

                <div class="card-body">
                    <form action="{{ route('passwordChange') }}" method="POST"  >
                        @csrf
                        {{-- <div class="form-group m-3 .">
                          <label for="exampleInputEmail1">Import CSV</label>
                          <input type="file" class="form-control" name="file">
                        </div> --}}
                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">New Password</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="New Password">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                placeholder="Confirm New Password">
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
