<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Show form to create a portfolio
    

public function index()
{
    $portfolios = Portfolio::where('user_id', auth()->id())->get();  // Assuming 'user_id' field links to the user
    return view('dashboard', compact('portfolios'));
}

    public function create()
    {
        return view('portfolio.create');
    }

    // Store portfolio in database
    public function store(Request $request)
    {
        // Validate and save portfolio details
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'graduation_year' => 'required|string',
            'tech_stack' => 'required|string',
            'interests' => 'nullable|string',
            'certificates' => 'nullable|file',
            'user_image' => 'nullable|image',
            'projects' => 'nullable|array',
        ]);
    
        // Ensure 'projects' field defaults to an empty array if not provided
        $validated['projects'] = $validated['projects'] ?? [];
    
        $portfolio = auth()->user()->portfolios()->create($validated);
    
        return redirect()->route('portfolio.show', $portfolio->id)->with('success', 'Portfolio created successfully!');
    }
    

    // Display a specific portfolio
    public function show($id)
    {
        $portfolio = auth()->user()->portfolios()->findOrFail($id);
        return view('portfolio.show', compact('portfolio'));
    }

    // Show form to edit a portfolio
    public function edit($id)
    {
        $portfolio = auth()->user()->portfolios()->findOrFail($id);
        return view('portfolio.edit', compact('portfolio'));
    }

    // Update portfolio in database
    public function update(Request $request, $id)
    {
        $portfolio = auth()->user()->portfolios()->findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'graduation_year' => 'required|string',
            'tech_stack' => 'required|string',
            'interests' => 'nullable|string',
            'certificates' => 'nullable|file',
            'user_image' => 'nullable|image',
            'projects' => 'nullable|array',
        ]);

        $portfolio->update($validated);

        return redirect()->route('portfolio.show', $id)->with('success', 'Portfolio updated successfully!');
    }

    // Delete a portfolio
    public function destroy($id)
    {
        $portfolio = auth()->user()->portfolios()->findOrFail($id);
        $portfolio->delete();

        return redirect()->route('dashboard')->with('success', 'Portfolio deleted successfully!');
    }

    // Show template selection for a portfolio
    public function selectTemplate($id)
    {
        $portfolio = auth()->user()->portfolios()->findOrFail($id);
        return view('portfolio.template', compact('portfolio'));
    }
}
