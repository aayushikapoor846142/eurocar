<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogTagRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $tagId = $this->route('tag') ? $this->route('tag')->id : null;

        return [
            'name' => 'required|string|max:255|unique:blog_tags,name,' . $tagId,
            'slug' => 'required|string|max:255|unique:blog_tags,slug,' . $tagId,
        ];
    }
}