<div class="container py-5">
    <div class="row py-3">
        <div class="col">
            <h2 class="font-Montserrat-Light text-center">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-xs-center font-Roboto-Regular">
        @foreach($arr as $r)
        <div style="width:160px;">
            @foreach($r as $m)
                <div>{{ $m }}</div>
            @endforeach
        </div>
        @endforeach
    </div>

    <div class="row py-5">
        <div class="col text-center font-Montserrat-Regular">
            <button class="rounded-pill py-2 px-4 bg-white">
                Selengkapnya
            </button>
        </div>
    </div>
</div>