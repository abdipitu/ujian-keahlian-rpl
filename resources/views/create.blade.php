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
  <body>
    <div class="d-flex justify-content-center">
        <div class="mx-5">
            <h2 class="mt-2 fw-bold">Create Page</h2>

            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" class="mt-5">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="judul" placeholder="Masukan teks..">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" name="keterangan" placeholder="Masukan teks.."></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
