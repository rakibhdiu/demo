@extends('admin.layout.app')
@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Add Category<s/h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Category Name</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Add Category name">
                            </div>

                            
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
    
@endsection
