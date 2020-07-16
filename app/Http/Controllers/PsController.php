<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsController extends Controller
{
    //
    public function ps()
       {

        $data_ps = \App\Ps::paginate(10);
<<<<<<< HEAD
        return view('/ps',['data_ps' => $data_ps]);
=======
        return view('ps',['data_ps' => $data_ps]);
>>>>>>> e6aae48f6e7efde89297a4454b653da489d9495b

       }

       public function tambah()
       {
           return view('ps_tambah');
       }

       public function create(Request $request)
       {
           \App\Ps::create($request->all());
           return redirect('/');
       }
       public function edit($id)
       {
           $ps = \App\Ps::find($id);
           return view('ps_edit', ['ps' => $ps]);

       }

       public function update(Request $request,$id)
       {
        $ps = \App\Ps::find($id);
        $ps->update($request->all());
        if($request->hasFile('ps_foto')){
            $request->file('ps_foto')->move('images/',$request->file('ps_foto')->getClientOriginalName());
            $ps->ps_foto = $request->file('ps_foto')->getClientOriginalName();
            $ps->save();
        }
        return redirect('/');
       }

       public function delete($id)
       {
       $ps = \App\Ps::find($id);
       $ps->delete($ps);
       return redirect('/');
       }
}
