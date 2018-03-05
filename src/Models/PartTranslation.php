<?php

namespace Wasson_ECE\Partly;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartTranslation extends Model
{
    use SoftDeletes;
    protected $table = "partly_part_translation";


    public function part()
    {
        return $this->belongsTo(Part::class)
            ->withTimestamps();
    }
}
