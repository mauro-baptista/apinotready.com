<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SegmentIsValid implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $segments = trim($value, '/');

        $parts = explode('/', $segments);

        return collect($parts)->filter()->isNotEmpty();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is invalid';
    }
}
