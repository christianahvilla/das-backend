<?php

namespace App\Interfaces;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

interface PatientRepositoryInterface
{

    public function index();

    public function show($id);

    public function store(StorePatientRequest $event);

    public function update(UpdatePatientRequest $event, $id);

    public function destroy($id);

}
