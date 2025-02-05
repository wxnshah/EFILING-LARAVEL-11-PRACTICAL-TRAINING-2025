<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer(['AddInformation'], function($view){
        
            $query_gender = DB::table('lt_gender')->get();
            $query_course = DB::table('lt_course')->get();
            $query_ipta = DB::table('lt_ipta')->get();
            
            $view
            ->with('query_gender', $query_gender)
            ->with('query_course', $query_course)
            ->with('query_ipta', $query_ipta)
            ;
        
        });

        View::composer(['ListInformation'], function($view){

            $query_info = DB::table('tb_info')
            ->select(
                'tb_info.id_info',
                'tb_info.id_user',
                'users.name',
                'tb_info.id_gender',
                'lt_gender.name_gender',
                'tb_info.no_matrik',
                'tb_info.tarikh_lapor',
                'tb_info.id_course',
                'lt_course.name_course',
                'tb_info.id_ipta',
                'lt_ipta.name_ipta',
            )
            ->leftJoin('users', 'users.id', 'tb_info.id_user')
            ->leftJoin('lt_gender', 'lt_gender.id_gender', 'tb_info.id_gender')
            ->leftJoin('lt_course', 'lt_course.id_course', 'tb_info.id_course')
            ->leftJoin('lt_ipta', 'lt_ipta.id_ipta', 'tb_info.id_ipta')
            ->get();

            $view
            ->with('query_info', $query_info)
            ;
        });

        view::composer(['UpdateInformation'], function($view){

            $id_info = request()->route('id_info');

            $query_gender = DB::table('lt_gender')->get();
            $query_course = DB::table('lt_course')->get();
            $query_ipta = DB::table('lt_ipta')->get();

            $data_info = DB::table('tb_info')
            ->select(
                'tb_info.id_info',
                'tb_info.id_user',
                'users.name',
                'tb_info.id_gender',
                'tb_info.no_matrik',
                'tb_info.tarikh_lapor',
                'tb_info.id_course',
                'tb_info.id_ipta',
            )
            ->leftJoin('users', 'users.id', 'tb_info.id_user')
            ->where('id_info', $id_info)
            ->first();

            $view
            ->with('id_info', $id_info)
            ->with('query_gender', $query_gender)
            ->with('query_course', $query_course)
            ->with('query_ipta', $query_ipta)
            ->with('data_info', $data_info)
            ;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
