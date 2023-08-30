<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Repositories\ChannelRepository;
use App\Services\ChannelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChannelRepository $channelRepository, ChannelService $channelService)
    {
        $channels = $channelRepository->getChannelsDecrypt();
        $channels =collect($channels);
        $channels = $channels->map(function ($channel) use($channelService) {
            return $channelService->getDetails($channel);
        });
        return view('channel.index', ['channels' => $channels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $channel = Channel::find($id);
        return view('channel.edit', ['channel' => $channel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $channel = Channel::findOrFail($id);
        $channel->name = $request->input('name');
        $channel->server = $request->input('server');
        $channel->output = $request->input('output');
        $channel->stream = $request->input('stream');
        $channel->reset_name = $request->input('reset_name');
        $channel->reser_host = $request->input('reser_host');
        $channel->screenshot_name = $request->input('screenshot_name');
        $channel->getaway = $request->input('getaway');
        $channel->astra_name = $request->input('astra_name');
        $channel->save();
        return redirect()->route('channel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = Channel::find($id);
        if ($channel) {
            $channel->delete();
        }
        return redirect()->route('channel.index');
    }


    public function play(Request $request)
    {
        $channel = explode('|', $request->channel_name);
        $channel_name = $channel[0] ? trim($channel[0]) : '';
        // todo KOMEDIA_TV doesnt works
        $channel = DB::connection('mysql170')
            ->table('channels')
            ->whereRaw("INSTR(url, '$channel_name') > 0")
            //->where("url", 'like', '%'.$channel_name.'%')
            ->orderBy('id','desc')->limit(1)->get();
        $channel_url = $channel[0]->url ?? '';
        $channel_url = $channel_url.'?hash='.env('HASH_PLAY_CHANNEL');
        return view('channel.play', ['channel_url' => $channel_url]);
    }
}
