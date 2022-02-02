<?php

namespace App\Interfaces;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

interface EventRepositoryInterface
{

    public function index();

    public function show($id);

    public function store(StoreEventRequest $event);

    public function update(UpdateEventRequest $event, $id);

    public function destroy($id);

}
