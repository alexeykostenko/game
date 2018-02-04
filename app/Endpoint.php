<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    protected $perPage = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'class', 'endpoint', 'active', 'url'];

    public function getOpponents()
    {
        $elements = $this->elements()->paginate($this->perPage);

        if (!$elements->nextPageUrl()) {
            $this->addElements();
            $elements = $this->elements()->paginate($this->perPage);
        }

        return $elements;
    }

    public function getPreviousOpponents()
    {
        request()->validate([
            'elements' => 'required|array',
        ]);

        return $this->elements()->whereIn('id', request()->elements)->get();
    }

    public function scopeActive()
    {
        return $this->where('active', 1);
    }

    public function scopeGetActiveList()
    {
        return $this->active()->with('elements')->get();
    }

    /**
     * Get the elements for the endpoint.
     */
    public function elements()
    {
        return $this->hasMany(Element::class, 'endpoint_id', 'id');
    }

    public function addElements()
    {
        $elements = (new $this->class)->getElements($this->endpoint, request()->page ?: 1);

        foreach ($elements as $element) {
            $this->elements()->addElement($element + ['endpoint_id' => $this->id]);
        }
    }

    public function changeRating()
    {
        request()->validate([
            'element' => 'required|numeric',
            'elements' => 'required|array',
        ]);

        foreach (request()->elements as $elementId) {
            $voteNumber = request()->element == $elementId ? 1 : -1;
            $vote = new Vote;
            $vote->element_id = $elementId;
            $vote->voter_id = auth()->guard('voter')->user()->id;
            $vote->vote = $voteNumber;
            $vote->save();

            if ($voteNumber == 1) {
                $this->elements()->where('id', $elementId)
                    ->increment('votes');
            } else {
                $this->elements()->where('id', $elementId)
                    ->decrement('votes');
            }
        }
    }
}
