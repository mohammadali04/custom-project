<?php
namespace Modules\Tenancy\Http\Middleware;
use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Context;
use Route;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Multitenancy\Contracts\IsTenant;
class EnsureTenantIsSet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $tenant = Tenant::where('name',Route::current()->parameter('tenant'))->first();
      $current_tenanat = $tenant->makeCurrent();
      Context::add('url',url());
      Context::add('current_tenant',$current_tenanat);
      $check = app(IsTenant::class)::checkCurrent();
   
        
        return $next($request);
    }
}
