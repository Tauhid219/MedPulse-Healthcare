<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactMessage;

class PageController extends Controller
{
    public function home()
    {
        $settings = \App\Models\Setting::all()->pluck('value', 'key');
        
        $primaryCareService = \App\Models\Service::where('title', 'like', '%Genomic%')
            ->orWhere('category', 'diagnostics')
            ->first();
        $cardioService = \App\Models\Service::where('title', 'like', '%Echocardiography%')
            ->orWhere('category', 'cardiovascular')
            ->first();
        $neuroService = \App\Models\Service::where('title', 'like', '%EEG%')
            ->orWhere('category', 'neurology')
            ->first();

        $doctors = \App\Models\TeamMember::orderBy('order_index')->take(2)->get();

        return view('home', compact('settings', 'primaryCareService', 'cardioService', 'neuroService', 'doctors'));
    }

    public function services()
    {
        $services = \App\Models\Service::all();
        return view('services', compact('services'));
    }

    public function about()
    {
        $teamMembers = \App\Models\TeamMember::orderBy('order_index')->get();
        return view('about', compact('teamMembers'));
    }

    public function contact()
    {
        $settings = \App\Models\Setting::all()->pluck('value', 'key');
        return view('contact', compact('settings'));
    }

    public function storeMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'health_id' => 'nullable|string|max:255',
            'routing_target' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Your encrypted message packet has been dispatched successfully and routed to the triage team.');
    }
}
