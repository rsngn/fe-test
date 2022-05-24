<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="font-Montserrat-Bold text-center">Pakett Hosting Singapura yang Tepat</h2>
            <h3 class="font-Montserrat-Light text-center">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
        </div>
    </div>

    <div class="row py-5">
        @foreach ($packets as $p)
            <div class="col-12 col-md-6 col-lg-3 px-lg-0">
                <div class="border rounded @if($p['best']) border-niaga @endif position-relative" style="@if (!$loop->first)margin-left:-1px;@endif @if($p['best'])z-index:1;@endif">

                    @if($p['best'])
                    <div class="ribbon ribbon-top-left font-Montserrat-Regular fs-6"><span><small>BEST SELLER!</small></span></div>
                    @endif

                    <div class="text-center border-bottom py-1 @if($p['best']) border-niaga text-white @endif">
                        <h3 class="font-Montserrat-Bold">{{ $p['name'] }}</h3>
                    </div>
                    <div class="text-center border-bottom py-1 @if($p['best']) border-niaga text-white @endif font-Montserrat-Light">
                        <div>
                            <span class="strike-niaga">Rp @angka($p['original_price'])</span>
                        </div>
                        <div>
                            <b>
                                <span class="align-top">Rp</span>
                                <span class="font-Montserrat-Bold">
                                    <?php
                                        $format = number_format($p['current_price']);
                                        $arr = explode(',', $format);
                                        echo '<span class="fs-1 diskon-big-number">'.$arr[0].'</span><span class="align-top">.'.$arr[1].'<span>';
                                    ?>
                                </span>
                            </b>
                            <span class="align-top">/ bln</span>
                        </div>
                    </div>
                    <div class="text-center border-bottom py-1 font-Roboto-Regular @if($p['best']) border-niaga-dark text-white @endif">
                        <b>@angka($p['users_count'])</b> Pengguna Terdaftar
                    </div>
                    <div class="text-center py-3 bg-white font-Roboto-Regular">
                        @foreach ($p['features'] as $f)
                            <div class="pt-1">
                            @if($f['type'] === 'text')
                                <b>{{$f['col1']}}</b>
                                {{$f['col2']}}
                            @else
                                <span class="fs-5 niaga-blue">{!! $f['value'] !!}</span>
                            @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center py-4 bg-white font-Montserrat-Regular">
                        <button class="rounded-pill py-2 px-4 @if($p['best']) border-niaga text-white @else bg-white @endif">
                            @if($p['button'] === 'default')
                                Pilih Sekarang
                            @else
                                {{ $p['button'] }}
                            @endif
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>