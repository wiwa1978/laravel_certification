<?php

namespace App\Http\Controllers\Frontend\Certification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CertificationController extends Controller
{

    public function index()
    {
        $user = access()->user()->id;
        

        $certifications =DB::select(
            DB::raw('SELECT p.id as id, p.name, p.small_description ,p.price, r.stripe_transaction_id FROM certifications p LEFT JOIN purchases r ON p.id = r.certification_id AND r.user_id = :user'), array('user' => $user)
        );

        return view('frontend.certification.index', ['certifications' => $certifications]);
    }
}
