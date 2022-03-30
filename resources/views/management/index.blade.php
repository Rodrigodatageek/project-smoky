@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row justity-content-center'>
            <div class='col-md-4'>
                <div class='list-group'>
                    <a class='list-group-item list-group-item-action' href="/management/category"><i class="fa-solid fa-align-justify"></i> Category</a>
                    <a class='list-group-item list-group-item-action' href=""><i class="fa-solid fa-bars"></i> Menu</a>
                    <a class='list-group-item list-group-item-action' href=""><i class="fa-solid fa-hand-holding"></i> Table</a>
                    <a class='list-group-item list-group-item-action' href=""><i class="fa-brands fa-octopus-deploy"></i> User</a>
                </div>
            </div>
            <div class='col-md-8'></div>

        </div>

    </div>


@endsection
