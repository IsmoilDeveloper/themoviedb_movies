<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $token_key = '5cb73b68870b70a436b10ea06298de07';
        $searchResults = [];

        if(strlen($this->search) > 2){
            $searchResults = Http::get('https://api.themoviedb.org/3/search/movie?api_key='.$token_key.'&language=en-US&query='.$this->search.'&page=1&include_adult=false')
                ->json()['results'];
        }

        // dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
