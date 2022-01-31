@extends('template.template')


@section('content')
<div class="container">
        @if(isset($rec))
            <form action="{{ route('app-update', ['id'=>$rec->id]) }}" Method="POST">
        @else 
            <form action="{{ route('app-store') }}" Method="POST">   
        @endif

        @csrf

        @if(isset($rec))
         @method('PUT')
        @else    
        @endif

        <div class="form-group">
            <div class="form-group">
                <label for="name">Name:</label>
                @if(isset($rec))
                    <input type="text" name="name" value="{{$rec->name   }}"  class="form-control col-md-4">
                @else
                    <input type="text" name="name"  class="form-control col-md-4">  
                @endif
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                @if(isset($rec))
                    <input type="text" name="age" value="{{$rec->age   }}"  class="form-control col-md-4">
                @else
                    <input type="text" name="age"  class="form-control col-md-4">  
                @endif
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                @if(isset($rec))
                    <input type="text" name="surname" value="{{$rec->surname   }}"  class="form-control col-md-4">
                @else
                    <input type="text" name="surname"  class="form-control col-md-4">  
                @endif
            </div>
            <div class="form-group">
                <label for="color">color:</label>
                @if(isset($rec))
                    <input type="text" name="color" value="{{$rec->color   }}"  class="form-control col-md-4">
                @else
                    <input type="text" name="color"  class="form-control col-md-4">  
                @endif
            </div>
            <br>
            @if(isset($rec))
                <input type="submit" name="send" class="btn btn-success" value="Actualizar">
            @else
                <input type="submit" name="send" class="btn btn-primary" value="Send" >
            @endif
        </div>
    </form>
</div>


@endsection