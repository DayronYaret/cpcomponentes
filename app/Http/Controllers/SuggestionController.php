<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function addSuggestion(){
        $this->validate(request(), [
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Suggestion::create(request(['name', 'subject', 'email', 'message']));
        return redirect()->to("/");
    }
}
