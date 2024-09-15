<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Simple Library: Add New Book</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h1>Add New Book</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('index') }}" class="btn btn-primary">Main Page</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="page_count" class="form-label">Page Count</label>
                        <input type="number" class="form-control" id="page_count" name="page_count" required>
                    </div>
                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author Name</label>
                        <input type="text" class="form-control" id="author_name" name="author_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="author_email" class="form-label">Author Email</label>
                        <input type="email" class="form-control" id="author_email" name="author_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="published_date" class="form-label">Published Date</label>
                        <input type="date" class="form-control" id="published_date" name="published_date">
                    </div>
                    <div class="d-flex">
                        <div class="me-auto text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
                @vite(['resources/js/app.js'])
            </div>
        </div>
    </div>
</body>

</html>
