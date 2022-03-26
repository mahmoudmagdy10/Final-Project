<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use PhpParser\Node\Stmt\Else_;
use Tymon\JWTAuth\Facades\JWTAuth;
class CheckCustomerToken
{
    use GeneralTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = null;
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return $this->returnError('E3001', 'INVALID_TOKEN');
            } elseif ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return $this->returnError('E3001', 'EXPIRED_TOKEN');
            } else {
                return $this->returnError('E3001', 'TOKEN_NOTFOUND');
            }
        } catch (\Throwable $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return $this->returnError('E3001', 'INVALID_TOKEN');
            } elseif ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return $this->returnError('E3001', 'EXPIRED_TOKEN');
            } else {
                return $this->returnError('E3001', 'TOKEN_NOTFOUND');
            }
        }
        if (!$user)
            return $this->returnError('E3001', trans('Unauthenticated'));

        return $next($request);
    }
}
