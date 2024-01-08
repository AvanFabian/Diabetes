<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DiabetesPredictionController extends Controller
{
    public function predict(Request $request)
    {
        // Ambil data dari formulir
        $data = $request->all();
        // echo 'data:' . $data . '<br>';
        dd($data); // Cek data yang diterima
        
        // Panggil API Python
        $client = new Client();
        # Kirim data ke API Python (sebelumnya harus dijalankan dulu API Python-nya)
        # command: python app.py
        $response = $client->post('http://localhost:5000/predict', [
            'json' => ['input' => $data]  // Sesuaikan dengan input yang diharapkan oleh API Python
        ]);

        // Ambil hasil prediksi dari respons API
        $prediction = json_decode($response->getBody(), true)['prediction'];

        // Tampilkan hasil prediksi
        return view('FormDiabetes.index', ['prediction' => $prediction]);
    }
}
