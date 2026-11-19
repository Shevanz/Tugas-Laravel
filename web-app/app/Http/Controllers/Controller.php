<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Web extends Controller {
    public function profil($andro) {
        return "<h2>Laman Profil ",$andro."<\h2>";
}
public function profil() {
    return "<h2>Laman Profile</h2>"
}
}