import React from "react";

function App() {
    return <div id="wrp">

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

    </div>;
}

export default App;
