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

// /**
//  * @param Song[] $songs
//  */

// class Playlist
// {
//     public function __construct(public string $name, public array $songs)
//     {
        
//     }
// }

// class Song
// {
//     public function __construct(public string $name, public string $artist)
//     {

//     }
// }

// $songs = [
//     new Song('My Heart Will Go On', 'Celin Dion')
// ];

// $playlist = new Playlist('90s Movie Soundtracks', $songs);

// // foreach($playlist->songs as $song){
// //     var_dump($song->artist);
// // }

// var_dump($playlist->songs[0]->name);


class User
{

}

class Newsletter
{
    public function __construct(public NewsletterProvider $provider)
    {
        //
    }

    public function subscribe(User $user, NewsletterProvider $provider)
    {
        $this->$provider->addToList('default', $user->email);
        // Update the user and mark them as subscribed.
        $user->update(['subscribed' => true]);

        return true;
    }
}

interface NewsletterProvider
{
    public function addToList(string $list, string $email): void;
}

class CampaignMonitorProvider implements NewsletterProvider
{
    public function addToList(string $list, string $email): void
    {
        $cm = new CampaignMonitorAPI();

        $cm->addApiKey('adsfafddfa');

        $list = $cm->lists->find($list);

        $list->addToList($email);
    }
}

class PostmarkProvider implements NewsletterProvider
{
    public function addToList(string $list, string $email): void
    {
        $cm = new PostmarkAPI('dafdasfdaf');

        $list = $cm->addToDefaultList($email);
    }
}

$newsletter = new Newsletter(
    new CampaignMonitorProvider()
);
$newsletter->subscribe(new User);