@extends('template.template')
<style>
  .button_p {
    width: 100%;
  } 
  .button_p a {
    margin: 20px;
  }  
</style>

@section('content')
    <p align="right" class="button_p"><a href="app/insert" class="btn btn-primary">Insert</a></p>
    <div align="center">
        <div class="col-md-8">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Color</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($all_informa as $key)
                    <tr>
                        <th> {{ $key->id }} </th>
                        <th> {{ $key->name }} </th>
                        <th> {{ $key->age }} </th>
                        <th> {{ $key->surname }} </th>
                        <th> {{ $key->color }} </th>
                        <th><a href="{{ route('app-edit', ['id'=>$key->id]) }}" class="btn btn-primary">e</a></th>
                        <th>
                          <form action="{{ route('app-delete', ['id'=>$key->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                          <button class="btn btn-danger" type="submit" name = "delete">d</button>
                      </form>
                        </th>                        
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div> 
        </div>  
    

@endsection