<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;

    protected $table = "form"; // Corrected table name

    protected $fillable = [
        'personal_email',
        'name',
        'company_name',
        'official_email',
        'linkedin_profile',
        'city',
        'association_preference',
        'iamai_member',
        'sectors',
    ];

    public function setSectorsAttribute($value)
    {
        $this->attributes['sectors'] = json_encode($value);
    }

    public function getSectorsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getData()
    {
        return [
            'personal_email',
            'name',
            'company_name',
            'official_email',
            'linkedin_profile',
            'city',
            'association_preference',
            'iamai_member',
            'sectors', 
        ];
    }

    public function saveData($post)
    {
        $data = $this->getData();
        $id = isset($post['id']) ? (int) $post['id'] : 0;

        unset($post['id']);
        $data = array_intersect_key($post, array_flip($data));

        if ($id == 0) {
            $data['created_at'] = now();
            $data['updated_at'] = null;
            $form = FormModel::create($data);
            return ['id' => $form->id, 'status' => 'success', 'message' => 'Data registered successfully'];
        } else {
            $form = FormModel::find($id);
            if ($form) {
                $data['updated_at'] = now();
                $form->update($data);
                return ['id' => $id, 'status' => 'success', 'message' => 'Data updated successfully'];
            } else {
                return false;
            }
        }
    }

    public function getSingleData($id)
    {
        return FormModel::find($id); 
    }
}
