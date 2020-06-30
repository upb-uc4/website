<?php

namespace App\Http\Controllers;

use App\FaqCategory;

class FaqController extends Controller {

    public function index() {
        $faqCategories = FaqCategory::All();
        return view('faq/index')->with('categories', $faqCategories);
    }
}
