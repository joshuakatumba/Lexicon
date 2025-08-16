<?php

namespace App\Http\Controllers\admin;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\FileUploadService;

class LanguageController extends Controller
{
    public function __construct(private readonly FileUploadService $fileUploadService)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::orderBy('sort_order')->get();
        return view('backend.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:5|unique:languages,code',
            'flag' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'is_default' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->except('flag');
        
        // Handle flag upload
        if ($request->hasFile('flag')) {
            $data['flag'] = $this->fileUploadService->imageUpload($request, new Language(), 'flag', 'uploads/flags/');
        }

        // If this is set as default, remove default from others
        if ($request->boolean('is_default')) {
            Language::where('is_default', true)->update(['is_default' => false]);
        }

        Language::create($data);

        return redirect()->route('language.index')->with('success', 'Language created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        return view('backend.language.show', compact('language'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        return view('backend.language.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:5|unique:languages,code,' . $language->id,
            'flag' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'is_default' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $data = $request->except('flag');
        
        // Handle flag upload
        if ($request->hasFile('flag')) {
            // Delete old flag if exists
            if ($language->flag) {
                $old_file = public_path('uploads/flags/' . $language->flag);
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }
            $data['flag'] = $this->fileUploadService->imageUpload($request, $language, 'flag', 'uploads/flags/');
        }

        // If this is set as default, remove default from others
        if ($request->boolean('is_default')) {
            Language::where('is_default', true)->where('id', '!=', $language->id)->update(['is_default' => false]);
        }

        $language->update($data);

        return redirect()->route('language.index')->with('success', 'Language updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        // Don't allow deletion of default language
        if ($language->is_default) {
            return redirect()->route('language.index')->with('error', 'Cannot delete the default language!');
        }

        // Delete flag file if exists
        if ($language->flag) {
            $old_file = public_path('uploads/flags/' . $language->flag);
            if (file_exists($old_file)) {
                unlink($old_file);
            }
        }

        $language->delete();

        return redirect()->route('language.index')->with('success', 'Language deleted successfully!');
    }

    /**
     * Toggle language active status
     */
    public function toggleStatus(Language $language)
    {
        $language->update(['is_active' => !$language->is_active]);
        
        return redirect()->route('language.index')->with('success', 'Language status updated successfully!');
    }

    /**
     * Set language as default
     */
    public function setDefault(Language $language)
    {
        $language->setAsDefault();
        
        return redirect()->route('language.index')->with('success', 'Default language updated successfully!');
    }
}
