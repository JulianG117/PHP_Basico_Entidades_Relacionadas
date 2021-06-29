<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlist";
    protected $primaryKey="PlaylistId";
    public $timestamps= false;

    public function canciones(){

       return $this->belongsToMany('App\Cancion',
                              'playlisttrack',
                              'PlaylistId',
                              'TrackId'
                            );
    }


}
