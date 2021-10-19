<?php

namespace App\Http\Livewire\Parts;

use Livewire\Component;
use Mail;
use App\Models\Contact;
use App\Mail\ContactMail;

class Contactform extends Component
{
    public $name, $email, $phone, $message;
    public $url = '';
    
    public function render(){
        return view('livewire.parts.contactform');
    }

    public function submit(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'url' =>  $this->url,
            'name' =>  $this->name,
            'email' =>  $this->email,
            'phone' =>  $this->phone,
            'message' =>  $this->message,
        ]);

        $xx = [
            'name' =>  $this->name,
            'email' =>  $this->email,
            'phone' =>  $this->phone,
            'message' =>  $this->message,
        ];

        $user_email = $this->email;
        Mail::to( $user_email)->cc('amit@amitkk.com')->send(new ContactMail($xx));

        session()->flash('message', 'Form Submitted Successfully.');
        return redirect(route('thankyou') );
    }
}