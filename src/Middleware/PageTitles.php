<?php

declare(strict_types = 1);

namespace Aon2003\PageTitles\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class PageTitles
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $route = $request->route()->getName();

        View::share('page_title', config('page-titles.translation_file_name') . '.' . $route);

        return $next($request);
    }
}
