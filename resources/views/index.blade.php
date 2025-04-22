<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Artikel</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Geist:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Special+Gothic+Expanded+One&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <style>
        *{
            font-family: 'Geist';
        }
    </style>
  </head>
  <body class="w-100 d-flex justify-content-center">
        <div class="col-md-8">
            <h2 class="mt-2 fw-bold">Hajime Blog</h2>
            <p>Selamat datang di Hajime Blog...</p>

            <div class="row mt-5">
                <div class="row justify-content-between">
                    <div class="col">
                        <a href="{{ route('create') }}" class="btn btn-success">+ Add</a>
                    </div>
                    
                    <div class="col">
                        <form class="d-flex gap-2">
                            <input type="date" name="date" class="form-control" placeholder="date filter..">
                            <input type="text" name="search" class="form-control" placeholder="search..">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>

                <div class="row row-cols-lg-3 gap-5 justify-content-between mt-4">
                    {{-- @foreach ($dataArtikel as $getDataArtikel) 
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('/storage/'.$getDataArtikel->foto) }}" class="card-img-top" style="width: 100px; height: 100px;" alt="...">
                            <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $getDataArtikel->judul }}</h5>
                            <p class="card-text" style="opacity: 70%">{{ $getDataArtikel->keterangan }}</p>
                            <div class="row gap-3">
                                <a href="/edit/{{ $getDataArtikel->id }}" class="col btn btn-warning">Edit</a>
                                <a href="/destroy/{{ $getDataArtikel->id }}" class="col btn btn-danger">Delete</a>
                            </div>
                            </div>
                        </div>
                    @endforeach --}}

                    @if (count($all) > 0)
                        <div class="d-flex row-cols-5 gap-5">
                            @foreach ($all as $item)
                            <div class="card col" style="width: 18rem;">
                                <img src="{{ url('/storage/'.$item->foto) }}" class="card-img-top" style="width: 285px; height: 285px;" alt="...">
                                <div class="card-body">
                                <h5 class="card-title fw-semibold">{{ $item->judul }}</h5>
                                <p class="card-text" style="opacity: 70%">{{ $item->keterangan }}</p>
                                <div class="row gap-3 mx-3">
                                    <a href="/edit/{{ $item->id }}" class="col btn btn-warning">Edit</a>
                                    <a href="/destroy/{{ $item->id }}" class="col btn btn-danger">Delete</a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <p>No results found.</p>
                    @endif
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
