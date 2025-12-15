<?php

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::with(['patientDetail', 'medicalRecords'])->get();
        return view('patients.index', compact('patients'));
    }

    public function create() {
        return view('patients.create');
    }

    public function store(Request $request) {
        $patient = Patient::create([
            'name' => $request->name
        ]);

        $patient->patientDetail()->create([
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'bpjs_number' => $request->bpjs_number,
        ]);

        return redirect('/')->with('success', 'Pasien berhasil ditambahkan');
    }

    public function storeRecord(Request $request, $id) {
        $patient = Patient::findOrFail($id);

        $patient->medicalRecords()->create([
            'diagnosis' => $request->diagnosis,
            'treatment' => $request->treatment,
            'visit_date' => $request->visit_date,
        ]);

        return redirect('/')->with('success', 'Rekam medis berhasil ditambahkan');
    }
}
