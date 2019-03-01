<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2019-03-01
 * Time: 12:27 AM
 */

namespace Calormyn\Database\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class BlueprintAugmentProvider extends ServiceProvider
{
    public function register(){

        Blueprint::macro('managedTimestamps', function( $precision = 0 ){
            $this->timestamp('created_at', $precision)->useCurrent();
            $this->timestamp('updated_at', $precision)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        Blueprint::macro('dropManagedTimestamps', function(){
            $this->dropColumn(['created_at','updated_at']);
        });

        Blueprint::macro('fullString', function( $column ){
            return $this->string( $column, 255 )->charset('utf8');
        });

        Blueprint::macro('dropFullString', function( $column ){
            $this->dropColumn($column);
        });

    }
}