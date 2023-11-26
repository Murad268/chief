<?php namespace Murad\Settings\Models;

use Model;
use RainLab\Translate\Behaviors\TranslatableModel;
/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['copywrite'];
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_settings_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'copywrite' => ['required']
    ];

}
