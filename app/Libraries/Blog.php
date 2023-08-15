<?php namespace App\Libraries;

class Blog
{
    public function poststuff($ourparam)
    {
        return view('components/post_item', $ourparam);
    }

    public function tunarudiaStuff($rudiaparam)
    {
        return view('components/view_item', $rudiaparam );
    }
}