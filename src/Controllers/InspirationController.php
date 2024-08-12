<?php
namespace Fhsinchy\Inspire\Controllers;

use Illuminate\Http\Request;
use Fhsinchy\Inspire\Inspire;
use Fhsinchy\Inspire\Models\Inspiration;
class InspirationController
{
    // public function __invoke(Inspire $inspire) {
    //     $quote = $inspire->justDoIt();

    //     return view('inspire::index', compact('quote'));
    // }

    public function pageview(){
        $quote = 'YOU CAN DO IT EVEN IF THE ODDS NOT IN YOUR FAVOR';
        return view('inspire::index', compact('quote'));

    }

    public function list(){
        $quotes = Inspiration::all();
        // return $quotes;
        return view('inspire::list', compact('quotes'));

    }

    public function create(){

        return view('inspire::create');

    }

    public function store(Request $request){
        $quote = new Inspiration;
        $quote->author = $request->author;
        $quote->quote = $request->quote;
        $quote->save();
        return redirect('list');

    }


}
