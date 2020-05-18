<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    public $timestamps = false;

    public function getImageAttribute($path) {
        return "/img/members/" . $path;
    }

}
