<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Info Vaksin</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h2>Info Vaksin DKI Jakarta</h2>
                <hr>
                @php
                    $indexJadwal=0;
                @endphp
                @foreach ($data as $vaksin)
                <div class="col mb-3">
                    @if (!empty($vaksin['jadwal'][$indexJadwal]))
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$vaksin['nama_lokasi_vaksinasi']}}</h5>
                                <p>{{ "Wilayah " . $vaksin['wilayah'] ." Kec. " . $vaksin['kecamatan']}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                @if (!empty($vaksin['jadwal'][$indexJadwal]['label']) &&
                                    !empty($vaksin['jadwal'][$indexJadwal]['kuota']) &&
                                    !empty($vaksin['jadwal'][$indexJadwal]['kuota_sisa']))

                                    <li class="list-group-item">{{"Waktu: " . $vaksin['jadwal'][$indexJadwal]['label']}}</li>
                                    <li class="list-group-item">{{"Kuota: " . $vaksin['jadwal'][$indexJadwal]['kuota']}}</li>
                                    <li class="list-group-item">{{"Sisa kuota: " .$vaksin['jadwal'][$indexJadwal]['kuota_sisa']}}</li>
                                @else
                                    <li class="list-group-item">Belum ada jadwal</li>
                                @endif
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>

                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
