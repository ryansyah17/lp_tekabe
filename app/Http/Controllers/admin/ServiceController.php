<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('backend.service.index', compact('service'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated);
        }

        $image = 'default.png';
        if ($request->hasFile('image')) {
            $image = 'service-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/img/service'), $image);
        }

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'slug' => Str::slug($request->name, '-'),
            'status' => true,
        ]);

        return redirect()->route('service.index')->with('success', 'Service created successfully');
    }

    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:1024',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated);
        }

        $image = $service->image;
        if ($request->hasFile('image')) {
            $image = 'service-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/img/service'), $image);

            $service->image = $image;
        }

        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully');
    }
}
