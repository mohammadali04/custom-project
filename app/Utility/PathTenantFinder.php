<?php
namespace App\Utility;
use Illuminate\Http\Request;
use Spatie\Multitenancy\Contracts\IsTenant;
use Spatie\Multitenancy\TenantFinder\TenantFinder;
use Spatie\Multitenancy\TenantFinder\DomainTenantFinder;
class PathTenantFinder extends TenantFinder{
    public function findForRequest(Request $request):?IsTenant{
        $host = $request->getHost();
      
        return app(IsTenant::class)::whereDomain($host)->first();

    }

}