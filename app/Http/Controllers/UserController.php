<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Validator;
use Response;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        return view('welcome');
    }

    public function view(Request $request)
    {
        $response = Http::withToken('8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B')->withHeaders([
            'Client-Service' => 'gmedia-recruitment',
            'Auth-Key' => 'demo-admin',
            'User-id' => '1',
            'Token' => '8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B'
        ])->post('http://gmedia.bz/DemoCase/main/detail_karyawan', [
             // your data array
             'request' => $request->id,
        ]);

        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {
            // todo i.e get the response body save the date etc.
            return view('view', compact('response'));
        } else {
            // todo i.e schedule to try again later etc.
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::withToken('8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B')->withHeaders([
            'Client-Service' => 'gmedia-recruitment',
            'Auth-Key' => 'demo-admin',
            'User-id' => '1',
            'Token' => '8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B'
        ])->post('http://gmedia.bz/DemoCase/main/add_karyawan', [
             // your data array
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {
            // todo i.e get the response body save the date etc.
            return redirect()->route('karyawan');
        } else {
            // todo i.e schedule to try again later etc.
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $user = User::all();
        // $user = User::find($id);
        $response = Http::withToken('8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B')->withHeaders([
            'Client-Service' => 'gmedia-recruitment',
            'Auth-Key' => 'demo-admin',
            'User-id' => '1',
            'Token' => '8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B'
        ])->post('http://gmedia.bz/DemoCase/main/list_karyawan', [
             // your data array
            // "start" => 0,
            // "count" =>10,
        ]);

        $body = json_decode($response->getBody());

        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {
            // todo i.e get the response body save the date etc.
            return view('karyawan', [
                'response' => $response,
                'body' => $body,
            ]);
            // return json_decode($body);
            // return response(view('karyawan',array('response'=>$response)),200, ['Content-Type' => 'application/json']);
        } else {
            // todo i.e schedule to try again later etc.
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        $response = Http::withToken('8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B')->withHeaders([
            'Client-Service' => 'gmedia-recruitment',
            'Auth-Key' => 'demo-admin',
            'User-id' => '1',
            'Token' => '8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B'
        ])->post('http://gmedia.bz/DemoCase/main/update_karyawan', [
             // your data array
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        $body = json_decode($response->getBody());
        return dd($body);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('home')->with('success3', 'test berhasil terhapus');
    }

    public function convert() 
    {
        $headers = array(
            "Content-type"=>"text/html",
            "Content-Disposition"=>"attachment;Filename=myfile.doc"
        );

        $content = DB::select('select * from users');

        return Response::make($content,200, $headers);
    }

    public function login(Request $request,) 
    {
        $response = Http::withToken('8godoajVqNNOFz21npycK6iofUgFXl1kluEJt/WYFts9C8IZqUOf7rOXCe0m4f9B')->withHeaders([
            'Client-Service' => 'gmedia-recruitment',
            'Auth-Key' => 'demo-admin',
        ])->post('http://gmedia.bz/DemoCase/auth/login', [
             // your data array
            'username' => $request->username,
            'password' => $request->password
        ]);
        $body = $response->getBody(true)->getContents();
        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {
            // todo i.e get the response body save the date etc.
            // return redirect()->route('karyawan');
            // return view('karyawan', compact('response'));
            return redirect()->route('karyawan');
            // return json_decode($body);
        } else {
            // todo i.e schedule to try again later etc.
            return back();
        }
    }
}
