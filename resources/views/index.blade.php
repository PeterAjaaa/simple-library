<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Simple Library Dashboard</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h1>Simple Library Dashboard</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('add') }}" class="btn btn-primary">Add Book</a>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Page Count</th>
                    <th scope="col">Author Name</th>
                    <th scope="col">Author Email</th>
                    <th scope="col">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->page_count }}</td>
                        <td>{{ $book->author_name }}</td>
                        <td>{{ $book->author_email }}</td>
                        <td>{{ $book->published_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
