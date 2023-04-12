<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::getByDesc();

        return admin_page('blog', compact('blogs'));
    }

    public function single($id)
    {
        $blog = Blog::query()->findOrFail($id);

        return admin_page('blog', compact('blog'), 'single');
    }

    public function create(Request $request)
    {

        $data = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image:png,jpg,svg'],
        ]);
        try {
            $data['image'] = Storage::disk('public')->put("images/blog", $request->file('image'));
            Blog::query()->create($data);

            return to_back('success', 'success');

        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image:png,jpg,svg'],
        ]);

        $image = $request->hasFile('image') ? $request->file('image') : null;
        try {
            $model = Blog::query()->findOrFail($id);

            if ($image) {
                Storage::disk('public')->delete($model->getAttribute('image'));

                $data['image'] = Storage::disk('public')->put("images/blog", $request->file('image'));
            }else{
                $data['image'] = $request->file('image');

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
            $model = Blog::query()->findOrFail($id);

            Storage::disk('public')->delete($model->getAttribute('image'));

            $model->delete();

            return to_back('success', 'success');

        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }
}
