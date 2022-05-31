<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ModalForm extends Component
{
    public $name;
    public $number;
    private $baseUrl = 'https://api.telegram.org/bot';
    private $token = '5384596286:AAFFZreRT5LTw5H2RuVuJk5VwWqAvZ8hXGQ';
    private $method = '/sendMessage';
    private $chatId = '-656927872';

    protected $rules = [
        'name' => 'required|min:2|max:25',
        'number' => 'required|min:9|max:19|not_regex:/[^0-9()+\s\-]/',
//        'check' => 'accepted',
    ];

    public function mount()
    {
        $this->name = '';
        $this->number = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $telegramRequest = $this->baseUrl . $this->token . $this->method;
        $response = Http::get($telegramRequest, [
            'chat_id' => $this->chatId,
            'parse_mode' => 'html',
            'text' => "#Заяавки \n<b>Имя - </b>" . $this->name . "\n" . "<b>Телефон - </b>" . $this->number
        ]);

        if($response->status() == 200) {
            session()->flash('ok', 'Data successfully sent!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }

        $this->mount();
    }

    public function render()
    {
        return view('livewire.modal-form');
    }
}
