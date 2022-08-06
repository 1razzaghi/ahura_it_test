<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Salarmehr\Cosmopolitan\Cosmo;

class HomeController extends Controller
{
    public function converts(Request $request)
    {
        $this->validate($request, [
            '*'      => 'required',
            'number' => 'numeric'
        ]);

        $response = 'Result for ' . "\r\n";

        $response .= json_encode($request->all()) . "\r\n";

        try
        {
            $cosmo    = new Cosmo($request->input('locale'));
            $language = $cosmo->language();
            $country  = $cosmo->country();
            $flag     = $cosmo->flag(); // emoji flag of the country

            $response .= "$flag $country - $language" . "\r\n";

            $response .= $cosmo->spellout($request->input('number'));
        }
        catch (\Exception $exception)
        {
            $response = 'Library error for selected locale : ' . $request->input('locale') . "\r\n";
            $response .= $exception->getMessage() . "\r\n";
            $response .= 'try another way :-) ' . "\r\n";
            $response .= Cosmo::create($request->input('locale'))->spellout($request->input('number'));
        }

        //return response()->json(Cosmo::create($request->language)->spellout($request->number));
        return response()->json($response);
    }
}
