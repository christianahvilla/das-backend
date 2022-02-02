<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Interfaces\PatientRepositoryInterface;

class PatientController extends Controller
{

    private $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    /**
    * @OA\Get(
    *     path="/api/patients",
    *     summary="Display patients",
    *     tags={"Patients"},
    *     security={{"bearerAuth":{}}},
    *     @OA\Response(
    *         response=200,
    *         description="Display all patients"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */

    public function index()
    {
        return $this->patientRepository->index();
    }

    /**
    * @OA\Get(
    *     path="/api/patients/{id}",
    *     summary="Display patient",
    *     tags={"Patients"},
    *     security={{"bearerAuth":{}}},
    *     @OA\Parameter(
    *       name="id",
    *       in="path",
    *       required=true,
    *     ),
    *     @OA\Parameter(
    *       name="id",
    *       in="path",
    *       required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Display an specific patient"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */

    public function show($id)
    {
        return $this->patientRepository->show($id);
    }

    /**
    * @OA\Post(
    *   path="/api/patients",
    *   summary="Store patient",
    *   tags={"Patients"},
    *   security={{"bearerAuth":{}}},
    *   @OA\RequestBody(
    *     @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(
    *             @OA\Property(
    *                 property="id",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="name",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="second_name",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="last_name",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="birthday",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="street",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="street_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="interior_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="settlement",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="zip_code",
    *                 type="integer"
    *             ),
    *             @OA\Property(
    *                 property="country",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="state",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="city",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="phone_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="cell_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="email",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="kind_patient",
    *                 type="string"
    *             ),
    *             example=
    *             {
    *                 "id": "4ed6914e-eff9-3b61-b0b0-6498f77a35f0",
    *                 "name": "Javier",
    *                 "second_name": "Sanchez",
    *                 "last_name": "Miroslava",
    *                 "birthday": "24-07-1995",
    *                 "street": "Diego Hernandez Topete",
    *                 "street_number": "71",
    *                 "interior_number": "",
    *                 "settlement": "Primo Tapia",
    *                 "zip_code": "58000",
    *                 "country": "Mexico",
    *                 "state": "Michoacan",
    *                 "city": "Morelia",
    *                 "phone_number": "5555555555",
    *                 "cell_number": "5555555555",
    *                 "email": "jgutierrez@net.com",
    *                 "kind_patient": "Ortodoncia",
    *             }
    *           )
    *       )
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Store patient"
    *   ),
    *   @OA\Response(
    *       response="500",
    *       description="Something when wrong"
    *    )
    * )
    */

    public function store(StorePatientRequest $patient)
    {
        return $this->patientRepository->store($patient);
    }

    /**
    * @OA\Put(
    *   path="/api/patients/{id}",
    *   summary="Update patient",
    *   tags={"Patients"},
    *   security={{"bearerAuth":{}}},
    *     @OA\Parameter(
    *       name="id",
    *       in="path",
    *       required=true,
    *     ),
    *   @OA\RequestBody(
    *     @OA\MediaType(
    *         mediaType="application/json",
    *         @OA\Schema(
    *             @OA\Property(
    *                 property="id",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="name",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="second_name",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="last_name",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="birthday",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="street",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="street_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="interior_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="settlement",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="zip_code",
    *                 type="integer"
    *             ),
    *             @OA\Property(
    *                 property="country",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="state",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="city",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="phone_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="cell_number",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="email",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="kind_patient",
    *                 type="string"
    *             ),
    *             example=
    *             {
    *                 "id": "4ed6914e-eff9-3b61-b0b0-6498f77a35f0",
    *                 "name": "Javier",
    *                 "second_name": "Sanchez",
    *                 "last_name": "Miroslava",
    *                 "birthday": "24-07-1995",
    *                 "street": "Diego Hernandez Topete",
    *                 "street_number": "71",
    *                 "interior_number": "",
    *                 "settlement": "Primo Tapia",
    *                 "zip_code": "58000",
    *                 "country": "Mexico",
    *                 "state": "Michoacan",
    *                 "city": "Morelia",
    *                 "phone_number": "5555555555",
    *                 "cell_number": "5555555555",
    *                 "email": "jgutierrez@net.com",
    *                 "kind_patient": "Ortodoncia",
    *             }
    *           )
    *       )
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Update patient"
    *   ),
    *   @OA\Response(
    *       response="500",
    *       description="Something when wrong"
    *    )
    * )
    */

    public function update(UpdatePatientRequest $patient, $id)
    {
        return $this->patientRepository->update($patient, $id);
    }

    /**
        * @OA\Delete(
        *     path="/api/patients/{id}",
        *     summary="Delete patient",
        *     tags={"Patients"},
        *     security={{"bearerAuth":{}}},
        *     @OA\Parameter(
        *       name="id",
        *       in="path",
        *       required=true,
        *     ),
        *     @OA\Response(
        *         response=204,
        *         description="Delete patient"
        *     ),
        *     @OA\Response(
        *         response="500",
        *         description="Something when wrong"
        *     )
        * )
    */

    public function destroy($id)
    {
        return $this->patientRepository->destroy($id);
    }
}
