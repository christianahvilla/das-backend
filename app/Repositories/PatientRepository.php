<?php

namespace App\Repositories;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Interfaces\PatientRepositoryInterface;
use App\Models\Patient;

class PatientRepository implements PatientRepositoryInterface
{
    public function index()
    {
        return Patient::orderBy('name')->get();
    }

    public function show($id)
    {
        return Patient::findOrFail($id);
    }

    public function store(StorePatientRequest $patient)
    {
        return Patient::create($patient->all());
    }

    public function update(UpdatePatientRequest $patient, $id)
    {
        $oldPatient = Patient::findOrFail($id);
        $oldPatient->update($patient->all());
        return $oldPatient;
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return $patient;
    }
}
