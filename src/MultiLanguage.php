<?php
/**
 * Created by PhpStorm.
 * User: abed
 * Date: 2/12/19
 * Time: 7:24 AM
 */

namespace abedhamada\laravel_multi_lang;

use Illuminate\Support\Facades\App;

trait MultiLanguage
{

    /**
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->multi_lang) && in_array($key, $this->multi_lang)) {
            $key = $key . '_' . App::getLocale();
        }
        return parent::__get($key);
    }
}
