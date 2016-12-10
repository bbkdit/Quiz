<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Closure;
class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    public function handle($request, closure $next)
    {
    	return parent::handle($request, $next);
    }
    protected function tokensMatch($request){
    	$token=$request->ajax() ? $request->header('X-CSRF-Token') : $request->input('-token');
    	return $request->session()->token() == $token;
    }

}