<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckClientHasApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = config('api_tokens.token');

//        if ($request->header('Api-Token') !== $token) {
//            throw new EnsureTokenException('Forbidden!', 403);
//        }

        return $next($request);
    }
}
// Handler.php Обработать нужно исключение
// Создать свой класс исключения (EnsureTokenException)
//
