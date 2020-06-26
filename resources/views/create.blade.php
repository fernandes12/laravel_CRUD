@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($book)) Editar @else Cadastrar @endif</h1>
    <hr>

    {{-- @php
    if (isset($book)) {
        //echo $book->id; 
        $book_new = $book->find($book->id);
        echo $book_new ?? ''->title;
    }
    @endphp --}}
    

    <div class="col-8 m-auto">

        @if (isset($errors) && count($errors) > 0 )
            <div class="text-center mt-5 mb-4 p-4 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if (isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
                @method('PUT')
        @else
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @endif

            @csrf
        <input class="form-control" type="text" name="title" id="title" placeholder="Book Title" value="{{$book->title ?? ''}}" required>
            <br>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option> 
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Pages" value="{{$book->pages ?? ''}}" required>
            <br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Book Price" value="{{$book->price ?? ''}}" required>
            <br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection