@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <h5>Karma Shop Contact</h5>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    {{print_r($errors)}}
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label><strong>Name : </strong></label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">
                                <p>{{$errors->name}}</p>
                            </div>
                        @enderror
                       
                        <div class="form-group">
                            <label><strong>Email : </strong></label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><strong>Mobile No : </strong></label>
                            <input type="text" name="number" value="{{ old('number') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><strong>Message : </strong></label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-success" name="submit" value="Save">
                        </div>
                    </form>                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection