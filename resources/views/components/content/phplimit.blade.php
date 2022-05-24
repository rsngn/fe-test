<div class="container py-5">
    <div class="row py-3">
        <div class="col">
            <h2 class="font-Montserrat-Light text-center">Powerful dengan Limit PHP yang Lebih Besar</h2>
        </div>
    </div>

    <div class="row justify-content-md-center">
        @foreach($limits as $l)
        <div class="col-12 col-lg-5">
            <ul class="list-group mx-auto">
                @foreach($l as $s)
                <li class="list-group-item @if($loop->even)bg-gray @endif">
                    <div class="d-flex">
                        <span>
                            <i class="fa-solid fa-circle-check fs-5 niaga-green"></i>
                        </span>
                        <span class="text-center flex-grow-1">
                            {{ $s }}
                        </span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</div>