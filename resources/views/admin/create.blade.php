@extends('layout')
@section('content')

@section('title','users controls')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="flex justfiy-center pt-8 ">

<h1> users controls page </h1>

</div>
<div class="flex justify-center">
<form action="" method="post">
    @csrf
     <div>
     <label for="user-name"> user Name </label>
     <input id= "user-name" name= "user-name" value="{{old('user-name')}}" type= "text">
    @error('user-name')
    <div class="form-error">
        {{$message}}
    </div>
    @enderror 
    </div>

     <div>
     <label for="user-email"> user email </label>
     <input id= "user-email" name= "user-email" value="{{old('user-email')}}" type= "text">
     @error('user-email')
     <div class="form-error">
         {{$message}}
     </div>
     @enderror 
    </div>

    <div>
        <label for="password">password</label>
        <input id= "password" name= "password" value="{{old('password')}}" type= "text">
        @error('password')
        <div class="form-error">
            {{$message}}
        </div>
        @enderror 
       </div>
<div>
    <button type="submit">Submit</button>
</div>
</form>
</div>
</div>
@endsection