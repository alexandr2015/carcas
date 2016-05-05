<?php
namespace App\Helpers;

use Illuminate\Database\Migrations\Migration;

class BaseMigration extends Migration
{
    protected $connections = [
        'mysql',
        'mysql_usa2',
        'mysql_usa3',
    ];
}