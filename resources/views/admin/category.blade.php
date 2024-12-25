@extends('admin.layout.app')
@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Category</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">All Category</h6>
                               
                              
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">category_Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cat as $item)

                                        <tr>
                                            <th>{{$item->id}}</th>
                                            <td>Jo{{$item->category_name}}</td>
                                            <td>
                                                <a href="{{route('categorydelete',$item->id)}}" class="btn btn-danger">Delete</a>                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
    
@endsection
