<?php

namespace Wasson_ECE\Partly;

use Illuminate\Database\Eloquent\Model;

class PartTranslation extends Model
{
    protected $table = "partly_part_translation";


    public function part()
    {
        return $this->belongsTo(Part::class)
            ->withTimestamps();
    }
}
