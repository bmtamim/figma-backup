<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FigmaApiController extends Controller {
    public function callback( Request $request ) {
        $code  = $request->filled( 'code' ) ? $request->query( 'code' ) : null;
        $state = $request->filled( 'state' ) ? $request->query( 'state' ) : null;
        if ( $code && $state == 'state1' ) {
            $response = Http::post( 'https://www.figma.com/api/oauth/token', [
                'client_id'     => env( 'FIGMA_CLIENT_ID' ),
                'client_secret' => env( 'FIGMA_CLIENT_SECRET' ),
                'redirect_uri'  => env( 'FIGMA_CALLBACK_URL' ),
                'code'          => $code,
                'grant_type'    => 'authorization_code'
            ] );

            return $response;
        }

        abort( 404 );
    }
}
