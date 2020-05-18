<?php

namespace App\Http\Controllers;

use App\Member;

class AboutController extends Controller {

    public function index() {
        $members = Member::All();
        return view('about.people')->with('members', $members);
    }
}
