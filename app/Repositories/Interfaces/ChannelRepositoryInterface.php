<?php


namespace App\Repositories\Interfaces;


interface ChannelRepositoryInterface
{
    public function all();
    public function getById($id);
}
