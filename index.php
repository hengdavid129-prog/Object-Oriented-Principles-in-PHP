<?php

class Playlist 
{
    // traditional way pass through constructor arguments then assign as properties

    public $name;
    public $songs;

    public function __construct($name, $songs) 
    {
        $this->name = $name;
        $this->songs = $songs;
    }

    // PHP8 Constructor Property Promotion
    // public function __construct(public $name, public $songs)
    // {
    //     //
    // }

    public function shuffle()
    {
        shuffle($this->songs);
    }
}

// $playlists = [];

// $playlists[] = new Playlist('80s Headbangers', [
//     'Back in Black',
//     'Are you ready',
//     'Hells Bells',
//     'Highway to Hell'
// ]);

// $playlists[0]->shuffle();

// die(var_dump($playlists));