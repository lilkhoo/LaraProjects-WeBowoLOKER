<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            "heading" => "Latest Listings",
            "listings" => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Listing $listing)
    {
        return view("listings.show", [
            "listing" => $listing
        ]);
    }
}
