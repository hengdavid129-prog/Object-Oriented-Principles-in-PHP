<?php

// class Playlist 
// {
//     // traditional way pass through constructor arguments then assign as properties

//     public $name;
//     public $songs;

//     public function __construct($name, $songs) 
//     {
//         $this->name = $name;
//         $this->songs = $songs;
//     }

//     // PHP8 Constructor Property Promotion
//     // public function __construct(public $name, public $songs)
//     // {
//     //     //
//     // }

//     public function shuffle()
//     {
//         shuffle($this->songs);
//     }
// }

// $playlists = [];

// $playlists[] = new Playlist('80s Headbangers', [
//     'Back in Black',
//     'Are you ready',
//     'Hells Bells',
//     'Highway to Hell'
// ]);

// $playlists[0]->shuffle();

// die(var_dump($playlists));

/**
 * @param Song[] $songs
 */

class Playlist
{
    public function __construct(public string $name, public array $songs)
    {
        
    }
}

class Song
{
    public function __construct(public string $name, public string $artist)
    {

    }
}

$songs = [
    new Song('My Heart Will Go On', 'Celin Dion')
];

$playlist = new Playlist('90s Movie Soundtracks', $songs);

// foreach($playlist->songs as $song){
//     var_dump($song->artist);
// }

var_dump($playlist->songs[0]->name);