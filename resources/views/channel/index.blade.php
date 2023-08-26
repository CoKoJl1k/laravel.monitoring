<x-app-layout>

    <x-slot name="header">
        <!--
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Список каналов</h1>
        </h2>
        -->
    </x-slot>

    <div class="py-12">
        <!--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  overflow-hidden-->
        <div >
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="grid">

                        @foreach($channels as $channel)

                            <div class="cell">

                                <div class="cell-first">
                                    <div class="cell-name">
                                        <b>{{$channel->name}}</b>
                                    </div>
                                    <div class="cell-delete">
                                        <a href="#"><img class="icon-delete" title="Удалить канал"
                                                         src="{{ asset('images/icons/cross.png') }}"> </a>
                                    </div>
                                </div>

                                <div class="cell-second">
                                    <div id="ch_screenshot_div_1TV.jpg" style="width:45pt;height:33pt">
                                        <img id="ch_screenshot_1TV.jpg" height="45pt"
                                             src="http://86.57.251.22/screenshots/{{$channel->screenshot_name}}"
                                             onerror="imgError('1TV.jpg')">
                                    </div>

                                    <div class="cell-details">

                                    </div>
                                </div>

                                <div class="cell-third">

                                    <div class="cell-bitrate">
                                        <b>{{$channel->bitrate}}</b>
                                    </div>

                                    <div class="cell-updated">
                                        <b>{{$channel->updated_at}}</b>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                    <!--
                    <table class="border border-collapse table-auto w-full">
                        <thead>
                        <tr>
                            <th class="bg-gray-100 py-2 px-4">Заголовок 1</th>
                            <th class="bg-gray-100 py-2 px-4">Заголовок 2</th>
                            <th class="bg-gray-100 py-2 px-4">Заголовок 3</th>
                            <th class="bg-gray-100 py-2 px-4">Заголовок 3</th>
                            <th class="bg-gray-100 py-2 px-4">Заголовок 3</th>
                            <th class="bg-gray-100 py-2 px-4">Заголовок 3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="py-1 px-4">Ячейка 1</td>
                            <td class="py-1 px-4">Ячейка 2</td>
                            <td class="py-1 px-4">Ячейка 3</td>
                            <td class="py-1 px-4">Ячейка 4</td>
                            <td class="py-1 px-4">Ячейка 5</td>
                            <td class="py-1 px-4">Ячейка 6</td>
                            <td class="py-1 px-4">Ячейка 7</td>
                            <td class="py-2 px-4">Ячейка 8</td>
                            <td class="py-2 px-4">Ячейка 9</td>
                            <td class="py-2 px-4">Ячейка 10</td>
                            <td class="py-2 px-4">Ячейка 11</td>
                            <td class="py-2 px-4">Ячейка 12</td>
                            <td class="py-2 px-4">Ячейка 13</td>
                        </tr>
                        </tbody>
                    </table>
-->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

