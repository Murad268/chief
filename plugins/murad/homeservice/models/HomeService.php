<?php namespace Murad\Homeservice\Models;

use Model;

/**
 * Model
 */
class HomeService extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'desc'];
    public $table = 'murad_homeservice_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'title' => ['required'],
        'desc' => ['required']
    ];

}
