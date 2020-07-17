<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ps;
use Storage;
use DateTime;

class PsController extends Controller
{
    //
    public function ps()
       {

        $data_ps = \App\Ps::paginate(10);

        return view('/ps',['data_ps' => $data_ps]);

       }

       public function tambah()
       {
           return view('ps_tambah');
       }

       public function create(Request $request)
       {
          // \App\Ps::create($request->all());
          
          $this->validate($request, [
            'ps_perhari'=>'required',
            'ps_overtime'=>'required',
            'ps_foto'=>'image|mimes:jpeg,png,jpg,gif',
            'ps_pdf'=>'mimes:pdf'
          ]);

          $now = new DateTime("NOW");
          $namagambar = NULL;
          $namapdf = NULL;
          
          if($request->ps_foto != null){
              $namagambar = $now->format('Y-m-d__H-i-s').$request->ps_foto->getClientOriginalName();
              $request->ps_foto->storeAs('gambar', $namagambar, 'public');
          }
          
          if($request->ps_pdf != null){
              $namapdf = $now->format('Y-m-d__H-i-s').$request->ps_pdf->getClientOriginalName();
              $request->ps_pdf->storeAs('pdf', $namapdf, 'public');
          }
          
          Ps::create([
              'ps_perhari'=>$request->ps_perhari,
              'ps_overtime'=>$request->ps_overtime,
              'ps_foto'=>$namagambar,
              'ps_pdf'=>$namapdf
          ]);

          return redirect('/ps');
       }
       public function edit($id)
       {
           $ps = \App\Ps::find($id);
           return view('ps_edit', ['ps' => $ps]);

       }

       public function update(Request $request,$id)
       {
        // $ps = \App\Ps::find($id);
        // $ps->update($request->all());
        // if($request->hasFile('ps_foto')){
        //     $request->file('ps_foto')->move('images/',$request->file('ps_foto')->getClientOriginalName());
        //     $ps->ps_foto = $request->file('ps_foto')->getClientOriginalName();
        //     $ps->save();
        // }

        $this->validate($request, [
          'ps_perhari'=>'required',
          'ps_overtime'=>'required',
          'ps_foto'=>'image|mimes:jpeg,png,jpg,gif',
          'ps_pdf'=>'mimes:pdf'
        ]);

        $now = new DateTime("NOW");
        $namagambar = NULL;
        $namapdf = NULL;
        
        if($request->oldgambar!=NULL){
            $namagambar=$request->oldgambar;
        }
        
        if($request->oldpdf!=NULL){
            $namapdf=$request->oldpdf;
        }

        if($request->ps_foto != null){
            Storage::disk('public')->delete('gambar/'.$request->oldgambar);
            $namagambar = $now->format('Y-m-d__H-i-s').$request->ps_foto->getClientOriginalName();
            $request->ps_foto->storeAs('gambar', $namagambar, 'public');
        }

        if($request->ps_pdf != null){
            Storage::disk('public')->delete('pdf/'.$request->oldpdf);
            $namapdf = $now->format('Y-m-d__H-i-s').$request->ps_pdf->getClientOriginalName();
            $request->ps_pdf->storeAs('pdf', $namapdf, 'public');
        }        

        $ps = Ps::find($id);
        $ps->update([
          'ps_perhari'=>$request->ps_perhari,
          'ps_overtime'=>$request->ps_overtime,
          'ps_foto'=>$namagambar,
          'ps_pdf'=>$namapdf
        ]);

        $ps->save();

        return redirect('/ps');
       }

       public function delete($id)
       {
         $ps = \App\Ps::find($id);
         $ps->delete($ps);
         return redirect('/ps');
       }

       public function detail($id)
       {
         $ps = Ps::find($id);
         return view('ps_detail', compact('ps'));
       }
}
