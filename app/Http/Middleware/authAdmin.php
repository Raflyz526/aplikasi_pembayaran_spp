<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class authAdmin
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
        $currentRouteName=Route::currentRouteName();
        $userLevel=auth()->user()->level;

        if(in_array($currentRouteName,$this->userAccessRole()[$userLevel])){
            return $next($request);
        }else{
            abort(403,'u are allowed to access this page');
        }
    }
    private function userAccessRole(){
        return[
            'admin'=>[
                'home',
                'siswa',
                'petugas',
                'kelas',
                'spp',
                'transaksi',
                'historyPembayaran',
                'laporan'
            ],
            'petugas'=>[
                'home',
                'transaksi',
                'historyPembayaran'
            ],
            'siswa'=>[
                'home',
                'historyPembayaran'
            ]
        ];
    }
}
