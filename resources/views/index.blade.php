<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    {{-- <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body data-hasqtip="0" data-new-gr-c-s-check-loaded="14.1087.0" data-gr-ext-installed="" cz-shortcut-listen="true">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRTZG4B" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <script>
        if ((self.parent && !(self.parent === self)) && (self.parent.frames.length != 0)) {
            self.parent.location = document.location
        }
    </script>

    <div id="top_line">
        <div class="lang_text"></div>
        <div class="lang_sw">
            <a href="/" title="English" class="en"></a><a href="/de/" title="Deutsch" class="de"></a><a
                href="/fr/" title="Français" class="fr"></a><a href="/it/" title="Italiano"
                class="it"></a><a href="/es/" title="Español" class="es"></a>
        </div>
    </div>

    <div id="wrp">

        <div id="menu_list">
            <div class="logo"><a href="/"><span>Similar</span>.porn</a></div>
            <ul>
                <li class="act"><a href="/">Home</a></li>
                <li><a href="/type/videos/" title="Sites with Videos">Videos</a></li>
                <li><a href="/type/pictures/" title="Sites with Pictures">Photos</a></li>
                <li><a href="/type/webcams/" title="Webcam Sites">Live Cams</a></li>
            </ul>
        </div>
        @php
            // echo $data;
            // echo gettype($data);
        @endphp
        @php
            $totalTab = ceil(count($data) / 10);
            $arrayTables = array_chunk((array) $data, 40);

        @endphp
        <div id="block">
            <div class="sim_by_type">
                <div class="title">Sites with <span>Videos</span></div>
                <div class="tab">
                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport"
                            style="width: 100%; overflow: hidden; position: relative; height: 760px;">
                            <div id="tab_videos"
                                style="width: 1015%; position: relative; transition-duration: 0s; transform: translate3d(-1135px, 0px, 0px);">
                                @foreach ($arrayTables as $arrayTable)
                                    @php
                                        $arrayTablesRows = array_chunk((array) $arrayTable, 10);
                                    @endphp
                                    <div class="tab_item tab_item_first"
                                        style="float: left; list-style: none; position: relative; width: 1120px;">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    @foreach ($arrayTablesRows as $arrayTableDataItem)
                                                        <td width="25%" valign="top">
                                                            @foreach ($arrayTableDataItem as $item)
                                                                <div class="tb_line"><a href="/s/699/sos.xxx/"
                                                                        target="_blank" title={{ $item['name'] }}>
                                                                        <div class="tb_left">
                                                                            {{-- <div class="tb_img"><img
                                                                                    src={{ $item['image'] }}
                                                                                    width="16" height="16"
                                                                                    alt={{ $item['name'] }}>
                                                                            </div> --}}
                                                                            <div class="tb_a">
                                                                                {{ $item['name'] }}</div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="tb_l">Rating:</div>
                                                                            @for ($i = 0; $i < $item['star']; $i++)
                                                                                <div class="l_star l_star1"></div>
                                                                            @endfor
                                                                            @for ($i = 0; $i < abs($item['star'] - 5); $i++)
                                                                                <div class="l_star l_star2"></div>
                                                                            @endfor
                                                                        </div>
                                                                        <div class="tb_right">
                                                                            @if ($item['mobile'] == 1)
                                                                                <img src="https://xxxtarget.com/similar.porn/img/mob.png"
                                                                                    width="17" height="24">
                                                                            @endif
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                    @endforeach
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="bx-controls bx-has-pager bx-has-controls-direction">
                            <div class="bx-pager bx-default-pager">
                                <div class="bx-pager-item"><a href="" data-slide-index="0"
                                        class="bx-pager-link active">1</a></div>

                            </div>
                            <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a
                                    class="bx-next" href="">Next</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="bot_line">
        Please contact us if you have found inappropriate content or do you have a good site for us. <a
            href="/feedback/">Contact form here</a> / <a href="https://thepornmap.com/">The Porn Map</a>
    </div>

    <div id="scrolup" style="display: block;"></div>
    <script type="text/javascript" src="//xxxtarget.com/similar.porn/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#tab_videos").bxSlider();
            $("#tab_pics").bxSlider();
            $("#tab_cams").bxSlider();
        });
    </script>
    <script type="text/javascript" src="//xxxtarget.com/similar.porn/js/script.js"></script>



</body>

</html>
