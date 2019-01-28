<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <form method="POST" action="{{ route('audience') }}">
        @csrf
        <div class="p-4">
            <div class="mb-4">
                <input placeholder="Your Email" class="border p-2 rounded" name="email" id="type" type="email" value="{{ old('email') }}">
            </div>
            <div>
                <button class="border rounded p-2 text-grey-darker">Sign Up</button>
            </div>
        </div>
    </form>
    
</body>
</html>