<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Service\FileUploadService;

class ProfileController extends Controller
{
    public function __construct(private readonly FileUploadService $fileUploadService)
    {
        //
    }

    /**
     * Display the admin profile page
     */
    public function index()
    {
        $admin = Auth::user();
        return view('backend.profile.index', compact('admin'));
    }

    /**
     * Update admin profile information
     */
    public function updateProfile(Request $request)
    {
        $admin = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'email']);
        
        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            if ($admin->profile_picture) {
                $old_file = public_path('uploads/profiles/' . $admin->profile_picture);
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }
            
            $data['profile_picture'] = $this->fileUploadService->imageUpload($request, $admin, 'profile_picture', 'uploads/profiles/');
        }

        $admin->update($data);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
    }

    /**
     * Update admin password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $admin = Auth::user();

        // Check current password
        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update password
        $admin->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('admin.profile')->with('success', 'Password updated successfully!');
    }
}
