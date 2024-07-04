<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Formation;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function generateQrCode()
    {
        $url = 'https://www.ofppt.ma';
        $qrCode = QrCode::size(300)->generate($url);
        return view("formations.qrCode" , compact("qrCode"));
    }
    public function index()
    {
        $formations = Formation::all();
        return view("formations.index", compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view("formations.about");
    }
    public function contact()
    {
        return view("formations.contact");
    }
    public function formations()
    {
        $formations = Formation::all();
        return view("formations.formations", compact("formations"));
    }
    public function events()
    {
        return view("formations.events");
    }
    public function signup()
    {
        return view("formations.signup");
    }
    public function signin()
    {
        return view("formations.signin");
    }
    public function create()
    {
        //
    }
    public function show(string $id)
    {
        $formation = Formation::findOrFail($id);
        return view("/formations.show-formation", compact("formation"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
