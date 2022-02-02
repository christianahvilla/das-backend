<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Interfaces\EventRepositoryInterface;

class EventController extends Controller
{

    private $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
    * @OA\Get(
    *     path="/api/events",
    *     summary="Display events",
    *     tags={"Events"},
    *     security={{"bearerAuth":{}}},
    *     @OA\Response(
    *         response=200,
    *         description="Display all events"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */

    public function index()
    {
        return $this->eventRepository->index();
    }

    /**
    * @OA\Get(
    *     path="/api/events/{id}",
    *     summary="Display event",
    *     tags={"Events"},
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
    *         description="Display an specific event"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */

    public function show($id)
    {
        return $this->eventRepository->show($id);
    }

    /**
    * @OA\Post(
    *   path="/api/events",
    *   summary="Store event",
    *   tags={"Events"},
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
    *                 property="patient",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="treatment",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="start_date",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="stat_hour",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="end_date",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="end_hour",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="notes",
    *                 type="string"
    *             ),
    *             example=
    *             {
    *                 "id": "4ed6914e-eff9-3b61-b0b0-6498f77a35f0",
    *                 "patient": "Javier",
    *                 "treatment": "Caries",
    *                 "start_date": "12-12-2022",
    *                 "start_hour": "12:00",
    *                 "end_date": "12-12-2022",
    *                 "end_hour": "13:00",
    *                 "notes": "",
    *             }
    *           )
    *       )
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Store event"
    *   ),
    *   @OA\Response(
    *       response="500",
    *       description="Something when wrong"
    *    )
    * )
    */

    public function store(StoreEventRequest $event)
    {
        return $this->eventRepository->store($event);
    }

    /**
    * @OA\Put(
    *   path="/api/events/{id}",
    *   summary="Update event",
    *   tags={"Events"},
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
    *                 property="patient",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="treatment",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="start_date",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="stat_hour",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="end_date",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="end_hour",
    *                 type="string"
    *             ),
    *             @OA\Property(
    *                 property="notes",
    *                 type="string"
    *             ),
    *             example=
    *             {
    *                 "id": "4ed6914e-eff9-3b61-b0b0-6498f77a35f0",
    *                 "patient": "Javier",
    *                 "treatment": "Caries",
    *                 "start_date": "12-12-2022",
    *                 "start_hour": "12:00",
    *                 "end_date": "12-12-2022",
    *                 "end_hour": "13:00",
    *                 "notes": "",
    *             }
    *           )
    *       )
    *   ),
    *   @OA\Response(
    *       response=200,
    *       description="Update event"
    *   ),
    *   @OA\Response(
    *       response="500",
    *       description="Something when wrong"
    *    )
    * )
    */

    public function update(UpdateEventRequest $event, $id)
    {
        return $this->eventRepository->update($event, $id);
    }

    /**
        * @OA\Delete(
        *     path="/api/events/{id}",
        *     summary="Delete event",
        *     tags={"Events"},
        *     security={{"bearerAuth":{}}},
        *     @OA\Parameter(
        *       name="id",
        *       in="path",
        *       required=true,
        *     ),
        *     @OA\Response(
        *         response=204,
        *         description="Delete event"
        *     ),
        *     @OA\Response(
        *         response="500",
        *         description="Something when wrong"
        *     )
        * )
    */

    public function destroy($id)
    {
        return $this->eventRepository->destroy($id);
    }
}
