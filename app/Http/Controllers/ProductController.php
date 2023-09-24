<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Transaction;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pageTitle = 'Dashboard';

        return view('welcome', compact('pageTitle'));
    }

    public function about()
    {
        $pageTitle = 'Tentang Kami';

        return view('about', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Pesan';
        $payments = Payment::all();

        return view('order', compact('pageTitle', 'payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'Name' => 'required',
            'Address' => 'required',
            'Qty' => 'required|numeric',
        ], $messages);

        $reansaction = New Transaction();
        $reansaction->user_id = $request->User;
        $reansaction->uname = $request->Name;
        $reansaction->product_id = $request->Product;
        $reansaction->address = $request->Address;
        $reansaction->tqty = $request->Qty;
        $reansaction->payment_id = $request->Payment;

        $reansaction->save();

        Alert::success('Added Successfully', 'Pesanan Kami Terima dan Segera Kami Antar');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
