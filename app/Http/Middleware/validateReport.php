<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validateReport
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $validated=$request->validate([
        //     'photo' => 'required|mimes:jpg,png,jpeg,bmp|max:2000',
        //     'optionalAttachments' => 'required|mimes:jpg,png,jpeg,bmp|max:10000',
        //     'name' => 'required',
        //     // 'ContactNumber' => 'required',
        //     // 'email_address' => 'required',
        //     'reportDescription' => 'required'
        // ]);
        if (isset($request->reportDescription)){
            return $next($request);
        }
        return response()->json([
            'message'=>'Description Cannot be Empty'
        ]);
        
    }
}
