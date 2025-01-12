<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Search using ChatGPT</h1>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action="{{ route('search-query') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="query" class="form-control" placeholder="Enter your query" value="{{ $query ?? '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        @if(isset($message))
            <div class="mt-4">
                <h3>Result:</h3>
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
</body>
</html>
