<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model {
    public $timestamps = false;

    public function faqs() {
        return $this->hasMany(Faq::class);
    }
}
