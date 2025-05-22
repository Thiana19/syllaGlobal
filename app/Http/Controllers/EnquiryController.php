<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnquiryController extends Controller
{
    /**
     * Store a newly created enquiry in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Enquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Thank you for your enquiry! We will get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    /**
     * Display all enquiries for admin.
     */
    public function index()
    {
        $enquiries = Enquiry::latest()->paginate(10);
        return view('admin.enquiries', compact('enquiries'));
    }

    /**
     * Update the replied status of an enquiry.
     */
    public function updateReplyStatus(Request $request, Enquiry $enquiry)
    {
        $request->validate([
            'replied' => 'required|in:Yes,No'
        ]);

        $enquiry->update([
            'replied' => $request->replied
        ]);

        return redirect()->back()->with('success', 'Reply status updated successfully.');
    }

    /**
     * Delete an enquiry.
     */
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();
        return redirect()->back()->with('success', 'Enquiry deleted successfully.');
    }
}