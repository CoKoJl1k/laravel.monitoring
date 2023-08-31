<x-app-layout>

    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div>
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid">
                        <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">
                        <!-- HTML -->
                        <video id='hls-example'  class="video-js vjs-default-skin" width="600" height="300" controls>
                            <source type="application/x-mpegURL" src="{{$channel_url}}">
                        </video>
                        <!-- JS code -->
                        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
                        <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
                        <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>
                        <script>
                            var player = videojs('hls-example');
                            player.play();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

