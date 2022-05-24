<div class="container py-5">
    <div class="row py-3">
        <div class="col">
            <h2 class="font-Montserrat-Light text-center">Semua Paket Hosting Sudah Termasuk</h2>
        </div>
    </div>

    <div class="row">
        @foreach($stacks as $stack)
        <div class="col-lg-4 text-center p-4">
            <img src="{{ url('/assets/svg/'.$stack['img']) }}" width="60"/>
            <h5 class="font-Montserrat-Bold">{{$stack['title']}}</h3>
            <p class="font-Roboto-Light">{{$stack['content']}}</p>
        </div>
        @endforeach
    </div>
</div>