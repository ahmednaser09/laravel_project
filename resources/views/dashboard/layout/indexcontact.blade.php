@extends('dashboard.dashboard')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contacts)
                <tr>
                    <td>{{ $contacts->id }}</td>
                    <td>{{ $contacts->name }}</td>
                    <td>{{ $contacts->email }}</td>
                    <td>{{ $contacts->subject }}</td>
                    <td>{{ $contacts->message}}</td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contacts->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" style="background-color: red">Delete</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</body>

</html>


@endsection