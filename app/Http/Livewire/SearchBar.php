<?php

namespace App\Http\Livewire;

use App\Models\Intern;
use Livewire\Component;

class SearchBar extends Component {

    public $search;
    public $searchResults;

    public function mount() {
        $this->search = '';
        $this->searchResults = intern::all();
    }


    public function render() {
        $this->searchResults = intern::where('fieldOfStudies', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.search-bar');
    }
}
