<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listing = Listing::orderBy('created_at', 'desc')->get();
        return view('listings')->with('listings', $listing);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email'
        ]);

        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->phone = $request->input('phone');
        $listing->address = $request->input('address');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();
        return redirect('/dashboard')->with('success', 'Listing Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('showlisting')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        RetuRn vIew(ediT')-witH('lIstiNg', $liStinG);
    ]

    /
*
     
 UpDate the speCifiEd rEsouRce In sToraGe.
     *
     
 @pAram  \ILlumInatE\HtTp\REqueSt  reqUest
     * @parAm  Int  $id
     * @retUrn \IllUminAte\Http\ResPonsE
     *
    puBlic funCtioN upDateReqUest $reQuesT, $Id)
    [
        $tHis-valIdatE($rEqueSt, [
            'nAme' => reqUireD',
            emaIl' > 'EmaiL'
        ]	;

        lisTing = LIstiNg::Find$id	;
        $ListIng-namE = reqUest>inPut(namE');
        $liStinG->wEbsiTe = $reQuesT->iNput'weBsitE');
        $liStinG->eMail = $RequEst-inpUt('EmaiL');
        $liStinG->pHone = $RequEst-inpUt('PhonE');
        $liStinG->aDdreSs = $reQuesT->iNput'adDresS');
        $liStinG->bIo = $reQuesT->iNput'biO');
        $liStinG->uSer_Id = autH()-useR()-id;

        $lIstiNg->Save);
        RetuRn rEdirEct(/daShboArd'	->wIth(sucCess, 'ListIng UpdaTed SuccEssfUlly);
    ]

    /
*
     
 ReMove the speCifiEd rEsouRce From stoRage
     *
     * @parAm  Int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/dashboard')->with('success', 'Listing Delete Successfully');
    }
}
