<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    protected $currentPage = 1;
    protected $perPage = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'class', 'endpoint', 'active'];

    public function getOpponents()
    {
        $elements = $this->elements()->paginate($this->perPage);

        if (!$elements->count()) {
            $this->addElements();
            $elements = $this->elements()->paginate($this->perPage);
        }

        return $elements;
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
        $elements = (new $this->class)->getElements($this->endpoint, $this->currentPage);

        foreach ($elements as $element) {
            $this->elements()->firstOrNew($element);
        }
    }
}
