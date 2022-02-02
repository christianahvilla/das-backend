<?php

namespace App\Repositories;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Interfaces\EventRepositoryInterface;
use App\Models\Event;

class EventRepository implements EventRepositoryInterface
{
    public function index()
    {
        return Event::orderBy('start_date')->get();
    }

    public function show($id)
    {
        return Event::findOrFail($id);
    }

    public function store(StoreEventRequest $event)
    {
        return Event::create($event->all());
    }

    public function update(UpdateEventRequest $event, $id)
    {
        $oldEvent = Event::findOrFail($id);
        $oldEvent->update($event->all());
        return $oldEvent;
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return $event;
    }
}
