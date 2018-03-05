<?php

namespace Wasson_ECE\Partly;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomsCode extends Model
{
    use SoftDeletes;
    protected $table = "partly_customs_code";


    public function part()
    {
        return $this->belongsTo(Part::class)
            ->withTimestamps();
    }
}
