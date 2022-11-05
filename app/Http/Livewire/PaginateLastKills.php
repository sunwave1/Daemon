<?php

namespace App\Http\Livewire;

use App\Models\PlayerDeath;
use App\Models\PlayerOnline;
use App\Models\Player;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithPagination;

class PaginateLastKills extends Component
{
    use WithPagination;
    public function paginationView() {
        return 'livewire.custom-pagination-links-view';
    }

    public function render() {
        $deaths = PlayerDeath::join('players',
            'player_deaths.player_id',
                '=',
            'players.id'
        )
        ->select('player_deaths.*', 'players.name as player_name')
        ->where('player_deaths.time', '>=', Carbon::today()->timestamp)
        ->paginate(10);

        $deaths->through(function ($value) {
            $value->online = PlayerOnline::where('player_id', '=', $value->player_id)->exists();
            if($value->is_player){
                $value->killed_online = Player::where('name', '=', $value->killed_by)->first()->online()->exists();
            }
            return $value;
        });

        return view('livewire.paginate-last-kills', [
              'kills' => $deaths
        ]);
    }
}