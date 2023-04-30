<?php

namespace App\Http\Livewire;

use App\Models\Postulant;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use Livewire\Component;

class ValidatedPay extends Component
{
    use WithFileUploads;

    public $code, $img;

    public function render()
    {
        return view('livewire.validated-pay');
    }

    public function store()
    {
        try {
            $this->validate([
                'code' => 'required|exists:postulants,code',
                'img' => 'required|image|max:2048',
            ]);

            $url = Storage::put('validated-pays', $this->img);

            $postulant = Postulant::where('code', $this->code)->first();

            $postulant->update([
                'validated' => true,
                'url_voucher' => $url,
            ]);

            $this->reset(['code', 'img']);
            
            return redirect()->route('validate-pay')->with('success', '¡Pago validado con exito!');
        } catch (\Exception $e) {
            return redirect()->route('validate-pay')->with('error', 'Error al validar el pago');
        }
    }
}
