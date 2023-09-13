<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nifehub\api\Errorcode\AuthError;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = \JWTAuth::getToken();
            $user = \JWTAuth::authenticate($token);
            if (!$user) {
                throw new Exception('TOKEN_IS_INCORRECT');
                // return response()->json(['message' => 'user not found'], 500);
            }
        } catch (Exception $e) {
            return response()->json([
                'data'          => [],
                'executeDate'   => now()->toDateTimeString(),
                'statusCode'    => Response::HTTP_OK,
                'statusValue'   => 'TOKEN_IS_INCORRECT',
                'success'       => false,
            ]);
            // return response()->json(['message' => $e->getMessage()], 500);
        }
        $request->user = $user;
        return $next($request);
    }
}
