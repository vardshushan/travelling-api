<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::getByDesc();
        return admin_page('content', compact('contents'));
    }

    public function single($id)
    {
        $content = Content::query()->findOrFail($id);
        return admin_page('content', compact('content'), 'single');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'type' => ['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image:png,jpg,svg'],
            'content' => ['required', 'string'],
        ]);
        try {
            $data['image'] = Storage::disk('public')->put("images/content", $request->file('image'));
            Content::query()->create($data);
            return to_back('success', 'success');
        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'type' => ['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image:png,jpg,svg'],
            'content' => ['required', 'string'],
            'image_url' => ['nullable', 'string'],
        ]);

        $image = $request->hasFile('image') ? $request->file('image') : null;
        try {
            $model = Content::query()->findOrFail($id);
            if ($image) {
                Storage::disk('public')->delete($model->getAttribute('image'));
                $data['image'] = Storage::disk('public')->put("images/content", $request->file('image'));
            } else {
                $data['image'] = $request->get('image_url');
            }
            $model->update($data);
            return to_back('success', 'success');
        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $model = Content::query()->findOrFail($id);
            Storage::disk('public')->delete($model->getAttribute('image'));
            $model->delete();
            return to_back('success', 'success');
        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }
}
