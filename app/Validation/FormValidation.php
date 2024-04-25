<?php

namespace App\Validation;

use Illuminate\Support\Facades\Validator;

class FormValidation
{
    public function validate(array $data)
    {
        $validator = Validator::make($data, [
        'personal_email' => 'required|email|max:255',
        'name' => 'required|string|max:100',
        'company_name' => 'required|string|max:255',
        'official_email' => 'nullable|email|max:255',
        'linkedin_profile' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'association_preference' => 'nullable|string|max:255',
        'iamai_member' => 'nullable|in:yes,no',
        'sectors.*' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return ['status' => 'error', 'message' => 'Validation Error', 'errors' => $validator->errors()->all()];
        }

        return null;
    }
}