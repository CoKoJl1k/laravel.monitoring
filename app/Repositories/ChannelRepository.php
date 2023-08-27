<?php

namespace App\Repositories;
use App\Models\Channel;
use App\Repositories\Interfaces\ChannelRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ChannelRepository implements ChannelRepositoryInterface
{
    public function all()
    {
        return Channel::all();
    }

    public function getChannelsDecrypt()
    {
        $channels = DB::select("select c.*,`keys`,`cam`,d.id as d_id, d.updated_at as d_updated_at
            from channels c
                left join decrypt d using (server, output)
            order by c.name");
        return $channels;
    }


    public function getById($id)
    {
        return Channel::find($id);
    }

    public function getByName(string $name)
    {
        return Channel::where('name', $name)->get();
    }

    public function create(array $channel)
    {
        return  Channel::create($channel);
    }
}
