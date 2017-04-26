<?php

namespace Wasson_ECE\Partly;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = "partly_part";

    public function translations()
    {
        return $this->hasMany(PartTranslation::class);
    }

    public function translation($language)
    {
        return $this->translations()->where('language',$language);
    }

    public static function exists($partNumber, $partRevision = "")
    {
        return count(static::where('number', $partNumber)->where('revision', $partRevision)->get());
    }
}
