<?php

namespace App\Http\Controllers;

use App\Models\DataTesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PrediksiController extends Controller
{
    private $dataTrain = [
        "Cabai" => [
            "Oksigen" => [42, 37, 45, 39, 48, 41, 43, 38, 46, 50],
            "Tekstur" => [0.06, 0.03, 0.07, 0.05, 0.09, 0.04, 0.08, 0.02, 0.1, 0.02],
            "Kelembapan" => [75, 78, 73, 79, 76, 72, 77, 80, 71, 74],
            "Suhu" => [12, 14, 15, 11, 13, 10, 16, 18, 20, 22],
            "Keasaman" => [7.2, 6.8, 7.4, 6.6, 7.1, 7.3, 6.9, 7.0, 7.5, 6.7]
        ],
        "Jagung" => [
            "Oksigen" => [68, 64, 72, 70, 66, 62, 69, 63, 67, 71],
            "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
            "Kelembapan" => [50, 45, 55, 52, 48, 42, 57, 46, 49, 54],
            "Suhu" => [30, 32, 34, 31, 28, 36, 29, 33, 35, 28],
            "Keasaman" => [6.0, 5.8, 6.2, 5.9, 5.7, 6.4, 6.1, 5.6, 6.3, 5.6]
        ],
        "Padi" => [
            "Oksigen" => [55, 53, 58, 56, 52, 59, 57, 54, 60, 51],
            "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
            "Kelembapan" => [65, 62, 68, 63, 61, 67, 64, 66, 69, 61],
            "Suhu" => [25, 24, 26, 23, 27, 25, 26, 24, 23, 27],
            "Keasaman" => [6.3, 5.8, 6.1, 5.7, 6.0, 5.6, 6.2, 5.9, 6.4, 5.6]
        ],
        "Kacang Tanah" => [
            "Oksigen" => [40, 44, 37, 43, 48, 38, 41, 46, 50, 36],
            "Tekstur" => [0.05, 0.08, 0.03, 0.06, 0.1, 0.02, 0.04, 0.07, 0.1, 0.03],
            "Kelembapan" => [75, 78, 71, 76, 80, 72, 74, 77, 80, 71],
            "Suhu" => [24, 26, 23, 25, 27, 24, 23, 26, 27, 23],
            "Keasaman" => [6.8, 7.2, 6.6, 7.0, 7.5, 6.7, 6.6, 7.3, 7.5, 6.6]
        ],
        "Kedelai" => [
            "Oksigen" => [55, 53, 58, 56, 52, 59, 57, 54, 60, 51],
            "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
            "Kelembapan" => [65, 62, 68, 63, 61, 67, 64, 66, 69, 61],
            "Suhu" => [30, 32, 34, 31, 28, 36, 29, 33, 35, 28],
            "Keasaman" => [6.0, 5.8, 6.2, 5.9, 5.7, 6.4, 6.1, 5.6, 6.3, 5.6]
        ],
        "Semangka" => [
            "Oksigen" => [53, 58, 56, 52, 59, 57, 54, 60, 51, 55],
            "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
            "Kelembapan" => [65, 68, 63, 61, 67, 64, 66, 69, 61, 65],
            "Suhu" => [24, 25, 26, 27, 23, 24, 25, 26, 27, 23],
            "Keasaman" => [5.8, 6.2, 5.9, 5.7, 6.4, 6.1, 5.6, 6.3, 5.6, 6.0]
        ]
    ];

    private function calculateProbability($value, $mean, $stdDev)
    {
        $exponent = exp(- (($value - $mean) ** 2) / (2 * ($stdDev ** 2)));
        return (1 / (sqrt(2 * M_PI) * $stdDev)) * $exponent;
    }

    private function calculateMean($values)
    {
        return array_sum($values) / count($values);
    }

    private function calculateStdDev($values, $mean)
    {
        $variance = 0.0;
        foreach ($values as $value) {
            $variance += ($value - $mean) ** 2;
        }
        $variance /= count($values) - 1;
        return sqrt($variance);
    }

    public function index()
    {
        $resultHtml = ""; // Initialize the variable with an empty string
        $inputValues = "";
        $jenisTanaman1 = ""; // Initialize the variable with an empty string

        // Check if there is a prediction result
        if (session()->has('inputValues')) {
            $inputValues = session('inputValues');
            session()->forget('inputValues');
        }

        return view('home.prediksi', [
            "title" => 'Prediksi Tanaman',
            "resultHtml" => $resultHtml,
            "inputValues" => $inputValues,
            "jenisTanaman1" => $jenisTanaman1,
        ]);
    }

    public function resetSession()
    {
        session()->forget('inputValues');
        return redirect()->route('prediksi.view');
    }


    public function predict(Request $request)
    {
        $attributes = $request->validate([
            'oksigen' => 'required|numeric',
            'tekstur' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'kelembapan' => 'required|numeric',
            'suhu' => 'required|numeric',
            'keasaman' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
        ], [
            'oksigen.required' => 'Oksigen wajib diisi.',
            'oksigen.numeric' => 'Oksigen harus berupa angka.',
            'tekstur.required' => 'Tekstur wajib diisi.',
            'tekstur.regex' => 'Tekstur harus berupa angka desimal dengan maksimal dua angka di belakang koma.',
            'kelembapan.required' => 'Kelembapan wajib diisi.',
            'kelembapan.numeric' => 'Kelembapan harus berupa angka.',
            'suhu.required' => 'Suhu wajib diisi.',
            'suhu.numeric' => 'Suhu harus berupa angka.',
            'keasaman.required' => 'Keasaman wajib diisi.',
            'keasaman.regex' => 'Keasaman harus berupa angka desimal dengan maksimal dua angka di belakang koma.',
        ]);

        $probabilities = [];

        foreach ($this->dataTrain as $jenisTanaman => $atribut) {
            $probabilities[$jenisTanaman] = 1;

            foreach ($atribut as $key => $values) {
                $mean = $this->calculateMean($values);
                $stdDev = $this->calculateStdDev($values, $mean);
                $probabilities[$jenisTanaman] *= $this->calculateProbability($attributes[strtolower($key)], $mean, $stdDev);
            }
        }

        // Normalize probabilities
        $totalProbability = array_sum($probabilities);
        foreach ($probabilities as $jenisTanaman => $probability) {
            $probabilities[$jenisTanaman] = ($probability / $totalProbability) * 100;
        }

        arsort($probabilities);
        $topPredictions = array_slice($probabilities, 0, 2, true);
        $leastPrediction = array_slice($probabilities, -1, 1, true);

        $resultHtml = "";

        // Tanaman yang paling cocok (nomor 1)
        $jenisTanaman1 = key($topPredictions);
        $probabilitas1 = reset($topPredictions);
        $resultHtml .= "Tanaman $jenisTanaman1 adalah tanaman <strong>Paling Cocok</strong> ditanam di tanah anda, dengan probabilitas " . number_format($probabilitas1, 2) . "%<br>";

        // Tanaman yang paling cocok (nomor 2)
        next($topPredictions);
        $jenisTanaman2 = key($topPredictions);
        $probabilitas2 = current($topPredictions);
        $resultHtml .= "Tanaman $jenisTanaman2 adalah opsi tanaman yang bisa ditanam di tanah anda, dengan probabilitas " . number_format($probabilitas2, 2) . "%<br>";

        // Tanaman yang paling tidak cocok
        $jenisTanamanLeast = key($leastPrediction);
        $probabilitasLeast = reset($leastPrediction);
        $resultHtml .= "<br>" . "Hindari menanam tanaman $jenisTanamanLeast di tanah anda karena kadar tanah <strong>Tidak Cocok</strong>, probabilitas " . number_format($probabilitasLeast, 2) . "%";

        $dataTesting = new DataTesting();

        // Mengisi kolom-kolom dengan nilai inputan dan jenisTanaman1
        $dataTesting->oksigen = $attributes['oksigen'];
        $dataTesting->tekstur = $attributes['tekstur'];
        $dataTesting->kelembapan = $attributes['kelembapan'];
        $dataTesting->suhu = $attributes['suhu'];
        $dataTesting->keasaman = $attributes['keasaman'];
        $dataTesting->tanaman = $jenisTanaman1; // Menggunakan variabel $jenisTanaman1 dari proses prediksi

        $dataTesting->save();

        $inputValues = $request->except('_token');
        $request->session()->put('inputValues', $inputValues);

        return view('home.prediksi', [
            "title" => 'Prediksi Tanaman',
            "resultHtml" => $resultHtml,
            "inputValues" => $inputValues,
            "jenisTanaman1" => $jenisTanaman1,
        ]);
    }
}
