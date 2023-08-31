<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ChannelService
{

    public function getDetails($channel)
    {
        $exp_channel = explode("|",$channel->stream);
        $sattellike = $exp_channel[0] ?? '';
        $transponder =  $exp_channel[1] ?? '';
        $astra =  $exp_channel[2] ?? '';
        $exp_transcoder = explode("@", $channel->output);
        $trascoder = $exp_transcoder[0] ?? '';
        $channel->reset_url = 'http://192.168.1.118/wowza_reset.php?host='.$channel->reser_host.':8086&appName=liveorigin/_definst_&streamName='.$channel->reset_name.'&vhostName=_defaultVHost_';

        switch($channel->server){
            case "reciver1":
                $channel->reset_title = "\nSattellite: ".$sattellike."\nTransponder: ".$transponder."\nReciver: 192.168.1.118\nAstra: start_".$astra."\nCardserver: \nTranscoder: ".$trascoder."\nStreamname: ".$channel->name.".stream\nGateway: ".$channel->getaway."\nStreamer: 86.57.251.100";
                break;
            case "reciver2":
                $channel->reset_title = "\nSattellite: ".$sattellike."\nTransponder: ".$transponder."\nReciver: 192.168.1.119\nAstra: start_".$astra."\nCardserver: \nTranscoder: ".$trascoder."\nStreamname: ".$channel->name.".stream\nGateway: ".$channel->getaway."\nStreamer: 86.57.251.100";
                break;
            case "reciver3":
                $channel->reset_title = "\nSattellite: ".$sattellike."\nTransponder: ".$transponder."\nReciver: 192.168.1.126\nAstra: start_".$astra."\nCardserver: \nTranscoder: ".$trascoder."\nStreamname: ".$channel->name.".stream\nGateway: ".$channel->getaway."\nStreamer: 86.57.251.100";
                break;
            case "reciver4":
                $channel->reset_title = "\nSattellite: ".$sattellike."\nTransponder: ".$transponder."\nReciver: 192.168.1.127\nAstra: start_".$astra."\nCardserver: \nTranscoder: ".$trascoder."\nStreamname: ".$channel->name.".stream\nGateway: ".$channel->getaway."\nStreamer: 86.57.251.100";
                break;
        }
        return $channel;
    }
}
