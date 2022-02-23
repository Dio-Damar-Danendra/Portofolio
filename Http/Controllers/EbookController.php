<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function createEbook(Request $input)
    {
        $ebook = new Ebook();
        $ebook->ebook_id = $input->ebook_id;
        $ebook->title = $input->title;
        $ebook->author = $input->author;
        $ebook->description = $input->description;
        $ebook->save();

        return redirect()->back();
    }
}
