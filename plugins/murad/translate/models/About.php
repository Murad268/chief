<?php namespace Murad\Translate\Models;

use Model;

/**
 * Model
 */
class About extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ["text"];
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_translate_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'text' => ['required'],
        'key' => ['required'],
    ];

}
