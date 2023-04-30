<?php

namespace App\Http\Livewire\Admin;

use App\Models\Postulant;
use Livewire\Component;
use Livewire\WithPagination;

class PostulantTable extends Component
{
    use WithPagination;
    public $search, $open = false;

    public function render()
    {
        $postulants = Postulant::where('validated', false)
            ->where('fullname', 'LIKE', '%' . $this->search . '%')
            ->orWhere('email', 'LIKE', '%' . $this->search . '%')
            ->paginate(10);
        return view('livewire.admin.postulant-table', compact('postulants'));
    }
}
