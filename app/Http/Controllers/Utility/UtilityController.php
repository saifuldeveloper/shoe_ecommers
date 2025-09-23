<?php

namespace App\Http\Controllers\Utility;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class UtilityController extends Controller
{
    public function clear()
    {
        Artisan::call('optimize:clear');
        return redirect('/');
    }

    public function composer()
    {
        exec('composer update');
        exec('composer dump-autoload');
        return redirect('/');
    }

    public function iseed()
    {
        $tables = DB::select('SHOW TABLES');
        $prevent_tables = ['failed_jobs', 'migrations', 'password_reset_tokens', 'personal_access_tokens', 'sessions'];
        foreach ($tables as $table) {
            $table_name = 'Tables_in_' . env('DB_DATABASE');
            $table_name = $table->$table_name;
            if (!in_array($table_name, $prevent_tables))
                Artisan::call('iseed ' . $table_name . ' --force');
        }
        return redirect('/');
    }
}
