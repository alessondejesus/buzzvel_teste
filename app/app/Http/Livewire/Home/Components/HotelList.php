<?php

namespace App\Http\Livewire\Home\Components;

use App\Services\BuzzvelService;
use App\Services\GeocoderService;
use App\Services\PaginationService;
use Livewire\Component;

class HotelList extends Component
{
    public $perPage = 9, $sortBy = 'distance',
        $orderAsc = false,
        $page;

    private $hotels = [];

    protected $listeners = [
        'search_hotels' => 'search',
    ];

    public function updatedSortBy()
    {
        $this->emit('submit');
    }

    public function search($reference)
    {
        try {

            $hotels = (new BuzzvelService)
                ->getHotels();

            $hotels = $hotels->map(function ($hotel) use ($reference) {

                $coordinates = array_slice($hotel, -3, -1);

                $hotel['distance'] = (!$coordinates[0] or !$coordinates[1]) ?
                    false :
                    round(GeocoderService::calculateDistance($coordinates, $reference));

                $price = array_slice($hotel, -2, 1);

                $price = str_replace('.', ',', $price[0]);

                $hotel['price'] = $price;

                return $hotel;
            });

            $hotels = $hotels->filter(function ($hotel) {

                return $hotel['distance'];
            });

            $hotels = $hotels
                ->sortBy($this->sortBy);

            if ($this->orderAsc)
                $hotels = $hotels->reverse();

            /*
                NOTA: o sistema de paginação já deveria vir montado da api, bem como o de ordenação, tirando a
                      responsabilidade de mutar a entrega de dados no front end.. Com a falta da paginação por parte da API,
                     com isso, a paginação com o Livewire não irá funcionar..
            */

            $this->hotels = PaginationService::paginateArray(collect($hotels));
        }catch (\Exception $exception) {

            session()->flash('message', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.components.hotel-list', [
            'hotels' => $this->hotels,
        ]);
    }
}
