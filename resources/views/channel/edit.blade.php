<x-app-layout>

    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div>
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="form">
                            <form method="POST" action="{{ route('channel.update', $channel->id)}}" >
                                @method('PUT')
                                @csrf
                                <div class="form__input">
                                    <label for="name" >Название канала</label>
                                    <input name="name" class="form-control"  value="{{$channel->name}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="server">Имя хоста</label>
                                    <input name="server" class="form-control"  value="{{$channel->server}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="output">Output</label>
                                    <input name="output" class="form-control"  value="{{$channel->output}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="stream">Stream</label>
                                    <input name="stream" class="form-control"  value="{{$channel->stream}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="reset_name">Reset name</label>
                                    <input name="reset_name" class="form-control"  value="{{$channel->reset_name}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="reser_host">Reset host</label>
                                    <input name="reser_host" class="form-control"  value="{{$channel->reser_host}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="screenshot_name">Screenshot name</label>
                                    <input name="screenshot_name" class="form-control"  value="{{$channel->screenshot_name}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="getaway">Getaway</label>
                                    <input name="getaway" class="form-control"  value="{{$channel->getaway}}"/>
                                </div>
                                <div class="form__input">
                                    <label for="astra_name">Astra name</label>
                                    <input name="astra_name" class="form-control"  value="{{$channel->astra_name}}"/>
                                </div>


                                <button type="submit" class="button">Сохранить</button>
                            </form>
                    <div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



