<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer(['AddInformation'], function($view){

            $query_department = DB::table('lt_department')->get();
            
            $view
            ->with('query_department', $query_department)
            ;
        
        });

        View::composer(['ListInformation'], function($view){

            $query_info = DB::table('tb_info')
            ->select(
                'tb_info.id_info',
                'tb_info.image',
                'tb_info.nama_fail',
                'tb_info.id_user',
                'users.name',
                'tb_info.id_department',
                'lt_department.name_department',
                'tb_info.tarikh_fail',
            )
            ->leftJoin('users', 'users.id', 'tb_info.id_user')
            ->leftJoin('lt_department', 'lt_department.id_department', 'tb_info.id_department')
            ->get();

            $view
            ->with('query_info', $query_info)
            ;
        });

        view::composer(['UpdateInformation'], function($view){

            $id_info = request()->route('id_info');
            
            $query_department = DB::table('lt_department')->get();

            $data_info = DB::table('tb_info')
            ->select(
                'tb_info.id_info',
                'tb_info.image',
                'tb_info.nama_fail',
                'tb_info.id_user',
                'users.name',
                'tb_info.id_department',
                'lt_department.name_department',
                'tb_info.tarikh_fail',
            )
            ->leftJoin('users', 'users.id', 'tb_info.id_user')
            ->leftJoin('lt_department', 'lt_department.id_department', 'tb_info.id_department')
            ->where('id_info', $id_info)
            ->first();

            $view
            ->with('id_info', $id_info)
            ->with('query_department', $query_department)
            ->with('data_info', $data_info)
            ;
        });

        View::composer(['ListUsers'], function($view){

            $query_users = DB::table('users')
            ->get();

            $view
            ->with('query_users', $query_users)
            ;
        });

        view::composer(['UpdateUsersInformation'], function($view){

            $id_user = request()->route('id_user');

            $data_user = DB::table('users')
            ->where('id', $id_user)
            ->first()
            ;

            $view
            ->with('id_user', $id_user)
            ->with('data_user', $data_user)
            ;

        });

        View::composer(['PersonalInformation'], function($view){

            $id_user = request()->route('id_user');

            $data_personal = DB::table('users')
            ->where('id', $id_user)
            ->first();

            $view
            ->with('id_user', $id_user)
            ->with('data_personal', $data_personal)
            ;

        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
