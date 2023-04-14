<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::getByDesc();
        return admin_page('partner', compact('partners'));
    }

    public function single($id)
    {
        $partner = Partner::query()->findOrFail($id);
        return admin_page('partner', compact('partner'), 'single');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string'],
            'email' => ['required', 'string'],
            'logo' => ['required', 'image:png,jpg,svg'],
        ]);
        try {
            $data['logo'] = Storage::disk('public')->put("images/partner", $request->file('logo'));
            Partner::query()->create($data);
            return to_back('success', 'success');

        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string'],
            'email' => ['required', 'string'],
            'logo' => ['nullable', 'image:png,jpg,svg'],
            'image_url' => ['nullable', 'string'],
        ]);

        $image = $request->hasFile('logo') ? $request->file('logo') : null;
        try {
            $model = Partner::query()->findOrFail($id);
            if ($image) {
                Storage::disk('public')->delete($model->getAttribute('logo'));
                $data['logo'] = Storage::disk('public')->put("images/partner", $request->file('logo'));
            }else{
                $data['image'] =  $request->get('image_url');
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
            $model = Partner::query()->findOrFail($id);
            Storage::disk('public')->delete($model->getAttribute('logo'));
            $model->delete();
            return to_back('success', 'success');

        } catch (\Exception $e) {
            return to_back('error', $e->getMessage());
        }
    }
}
