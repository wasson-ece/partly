<?php

namespace Wasson_ECE\Partly;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Part extends Model
{
    use SoftDeletes;
    protected $table = "partly_part";
    protected $with = ['customsCodes'];

    public function translations()
    {
        return $this->hasMany(PartTranslation::class);
    }

    public function translation($language)
    {
        return $this->translations()->where('language',$language);
    }

    public function customsCodes()
    {
        return $this->hasMany(CustomsCode::class);
    }

    public function customsCode(int $type)
    {
        return $this->customsCodes()->where('type',$type);
    }

    public static function exists($partNumber, $partRevision = "")
    {
        return count(static::where('number', $partNumber)->where('revision', $partRevision)->get());
    }
}
