<?php namespace Murad\Settings\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'murad_settings_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
