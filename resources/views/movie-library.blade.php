<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Movie Library</title>
</head>
<body class="h-screen">
    <main class="bg-blue-500 h-full">
        <h1 class="text-4xl uppercase text-center py-8">Cineteca Boolean</h1>
        <div class="container mx-auto ">
            <section class="grid grid-cols-5 gap-4   rounded-lg">
                @foreach ($movies as $movie)
                <div class="card  border border-black bg-white rounded p-4 flex flex-col justify-between box-shadow ">
                    <h2 class="text-xl font-bold">{{ $movie->title }}</h2>
                    <h3 class="pb-4">{{ $movie->original_title }}</h2>
                        <div>
                            <span> Anno: {{ date('Y',strtotime($movie->date)) }}</span>
                            <br>
                            <span >Voto: {{ $movie->vote }} &starf;</span>
                        </div>

                </div>
                    
                @endforeach

            </section>
        </div>
    </main>
</body>
</html>