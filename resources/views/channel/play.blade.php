<x-app-layout>

    <x-slot name="header">
        <button onclick="openPopupWindow()">Open Pop-up Window</button>
    </x-slot>
    <div class="py-12">

        <div>
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid">

                        @foreach($channels as $channel)

                            <div class="cell">
                                <div class="cell-first">
                                    <div class="cell-name"><b>{{$channel->name}}</b></div>

                                    <div class="cell-delete">
                                        <a href="#"><img class="icon-delete" title="Удалить канал"
                                                         src="{{ asset('images/icons/cross.png') }}">
                                        </a>
                                    </div>
                                </div>

                                <div class="cell-second">
                                    <div id="ch_screenshot_div_{{$channel->screenshot_name}}" style="width:55pt;height:37pt">
                                        <img  height="45pt" src="http://86.57.251.22/screenshots/{{$channel->screenshot_name}}"
                                             onerror="imgError('{{$channel->screenshot_name}}')">
                                    </div>

                                    <div class="cell-details">

                                        <div class="status-connect">
                                            <img title="{{$channel->ready ? 'Работает' : 'Не работает'}}" height="20px"
                                                 width="20px" src="images/icons/{{$channel->ready ? 'connect.png' : 'disconnect.png'}}"/>
                                        </div>

                                        @if($channel->scrambled)
                                            <div class="status-cam">
                                                <img title="{{ $channel->cam ? 'Канал бесплатный.' : 'Ошибка соединения с cam сервером.'}} {{ !$channel->keys ? ' Нет подписки.' : ''}}"
                                                     height="20px" width="20px" src="images/icons/{{$channel->cam ? 'monitor.png' : 'monitor.png'}}"/>
                                            </div>
                                        @else
                                            <div class="status-cam">
                                                <img title="{{$channel->cam ? 'Канал бесплатный. Cam включен.' : 'Канал бесплатный. Cam выключен.'}}"
                                                     height="20px" width="20px" src="images/icons/{{$channel->cam ? 'monitor.png' : 'monitor.png'}}"/>
                                            </div>
                                        @endif

                                        <div class="reset">
                                            <a title="{{$channel->reset_title}}" href="{{ 'http://192.168.1.118/wowza_reset.php?host='.$channel->reser_host.':8086&appName=liveorigin/_definst_&streamName='.$channel->reset_name.'&vhostName=_defaultVHost_'}}">
                                                Reset
                                            </a>
                                        </div>

                                        <div class="">
                                            <p>0</p>
                                        </div>

                                        <div class="">
                                            <p>0</p>
                                        </div>
                                        <div class="server">
                                            {{$channel->server}}
                                        </div>
                                    </div>
                                </div>

                                <div class="cell-third">
                                    <div class="cell-bitrate">
                                        <b>{{$channel->bitrate}} kB</b>
                                    </div>
                                    <div class="cell-updated">
                                        <b>{{$channel->updated_at}}</b>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

