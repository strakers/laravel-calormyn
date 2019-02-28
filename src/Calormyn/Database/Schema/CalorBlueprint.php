<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2019-02-27
 * Time: 7:53 PM
 */

namespace Calormyn\Database\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
class CalorBlueprint extends Blueprint
{

    /**
     * Add default timestamp creation and update timestamps to the table.
     *
     * @param  int  $precision
     * @return void
     */
    public function timestamps($precision = 0)
    {
        $this->timestamp('created_at', $precision)->useCurrent();

        $this->timestamp('updated_at', $precision)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
    }
}