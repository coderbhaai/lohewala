<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public $adProducts =[
        [ "name"=> "Flex Board Pipes", "pic"=> "pipes.jpg", "text" => "We provide all sizes of flex board pipes to fit the budget." ],
        [ "name"=> "GI Sheets", "pic"=> "gi-sheets.jpg", "text" => "Connect for the lightest GI sheets in market today" ],
        [ "name"=> "Powder Coated Sheets", "pic"=> "white-sheets.jpg", "text" => "Powder coated sheets for sides of glow sign boards" ],
        [ "name"=> "MS / GI Wire", "pic"=> "wire.jpg", "text" => "Wires to tie up and hold the glow sign boards" ],
        [ "name"=> "Polyfix Bond", "pic"=> "polyfix.jpg", "text" => "Connect today for Bonds and glues for glow sign board" ],
        [ "name"=> "Unipole & Hoarding Pipes", "pic"=> "hoardings.jpg", "text" => "Pipes for road side hoardings and signages" ],
        [ "name"=> "Cutting Wheel and Nails", "pic"=> "cutting-wheel.jpg", "text" => "Cutting wheel and nails for cutting of iron pipes and nails for pasting." ],
    ];

    public $shedProducts =[
        [ "name"=> "Foundation Bolts", "pic"=> "foundation-bolts.jpg", "text" => "Connect today for bolts for grouting of pillars."],
        [ "name"=> "Base Plates", "pic"=> "base-plates.jpg", "text" => "Base plates for strong base of pillars"],
        [ "name"=> "Structures", "pic"=> "square-pipes.jpg", "text" => "Complete structure for erection of shed"],
        [ "name"=> "Profile Seats", "pic"=> "profile-sheets.jpg", "text" => "Connect for color coated sheets at reasonable prices."],
        [ "name"=> "Screws & Hooks", "pic"=> "screws.jpg", "text" => "Screws and hooks for fixation of sheets"],
        [ "name"=> "Air Ventilator", "pic"=> "ventilator.jpg", "text" => "Air Ventilators for proper exhaust system in sheds."],
        [ "name"=> "Flashings", "pic"=> "flashing.jpg", "text" => "Connect today for flashings for water outlets"],
        [ "name"=> "Purlins", "pic"=> "purlin.jpg", "text" => "Strong and sturdy purlins for sheds"],
    ];

    public function render(){
        return view('livewire.pages.home');
    }
}
