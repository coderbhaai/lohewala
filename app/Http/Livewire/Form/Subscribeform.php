<?php

namespace App\Http\Livewire\Parts;

use Livewire\Component;
use Mail;
use App\Models\Subscribe;
use App\Mail\Subscription;

class SubscribeForm extends Component
{
    public $email, $status;

    public function render(){
        return view('livewire.parts.subscribe-form');
    }

    public function submit(){        
        $this->validate([
            'email' => 'required'
        ]);
        Subscribe::create([
            'email' =>  $this->email,
            'status' =>  1,
        ]);
        $user_email = $this->email;
        Mail::to( $user_email)->cc('amit@amitkk.com')->send(new Subscription);
        $this->email = '';
        session()->flash('message', 'You subscribed Successfully.');
        return redirect(route('thankyou') );
    }
}