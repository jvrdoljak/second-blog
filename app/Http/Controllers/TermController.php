<?php

namespace App\Http\Controllers;

use App\Term;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

use App\Type;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::all();

        return view('terms.index')->with('terms',$terms);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();

        return view('terms.create')->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request, array(
            'description'   => 'required|max:200',
            'start_time'    => 'required',
            'term_type'     => 'required'
        ));

        $term = new Term;

        $term->description  = $request->description;
        $term->start_time   = $request->start_time;
        $term->term_type    = $request->term_type;

        $term->save();

        return redirect()->route('terms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $term = Term::find($id);

        return view('terms.show')->with('term',$term);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'term'  => Term::find($id),
            'types' => Type::all()
        );
        return view('terms.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'description'   => 'required|max:200',
            'start_time'    => 'required',
            'term_type'     => 'required'
        ));

        $term = Term::find($id);

        $term->description  = $request->description;
        $term->start_time   = $request->start_time;
        $term->term_type    = $request->term_type;

        $term->save();

        return redirect()->route('terms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $term = Term::find($id);

        $term->delete();
        
        return redirect()->route('terms.index');
    }
}
