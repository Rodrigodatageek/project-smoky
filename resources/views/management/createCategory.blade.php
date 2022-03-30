@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row justity-content-center'>
            <div class='col-md-4'>
                <div class='list-group'>
                    <a class='list-group-item list-group-item-action' href="/management/category"><i class="fas fa-align-justify"></i> Category</a>
                    <a class='list-group-item list-group-item-action' href=""><i class="fa-solid fa-bars"></i> Menu</a>
                    <a class='list-group-item list-group-item-action' href=""><i class="fa-solid fa-hand-holding"></i> Table</a>
                    <a class='list-group-item list-group-item-action' href=""><i class="fa-brands fa-octopus-deploy"></i> User</a>
                </div>
            </div>
            <div class='col-md-8'>
                <i class="fas fa-align-justify"></i> Create a Category
                <hr>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)

                            <li>{{$error}}</li>

                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/management/category" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>

    </div>


@endsection