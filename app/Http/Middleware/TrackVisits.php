<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\WebsiteVisit;
use App\Models\ProductVisit;

class TrackVisits
{
    public function handle($request, Closure $next)
    {
       // Update data kunjungan website
       $websiteVisit = WebsiteVisit::firstOrNew(['visit_date' => now()->format('Y-m-d')]);
       $websiteVisit->visits++;
       $websiteVisit->save();

       // Update data kunjungan produk
       $productVisit = ProductVisit::firstOrNew(['visit_date' => now()->format('Y-m-d')]);
       $productVisit->visits++;
       $productVisit->save();

       return $next($request);
    }
}