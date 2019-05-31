<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_user extends Model
{
    protected $fillable = [
        'user_id','class','clientType','subscriber_name','street','city','province','postal_code','country','phone','phone_mobile','email','sin','signatory_first_name','signatory_last_name','official_capacity_or_title_of_authorized_signatory','business_number','total_investment','ind_ck1','ind_ck2',
        'ind_ck3','ind_ck14','ind_ck5','ind_ck6','bus_ck1',
        'bus_ck2','bus_ck3','bus_ck4', 'bus_ck5', 'bus_ck6',
        'bus_ck7','bus_ck8','bus_ck9','bus_ck10','access_level','form_level',
        'profile_changed',
        
    ];
}
