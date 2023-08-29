<x-app-layout>

    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div>
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                            <h1>Редактирование канала</h1>
                            <form method="POST" action="{{ route('channel.update', $channel->id)}}" >
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Название канала</label>
                                    <input name="name" class="form-control"  value="{{$channel->name}}"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                    <div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



