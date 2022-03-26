<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;

use App\Service;

class ServiceDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function run()
    {
        $count = Service::count();
        $string = trans_choice('Serviços', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-hammer',
            'title' => "{$count} {$string}",
            'text' => "Você possui {$count} serviços cadastrados no sistema. Clique no botão abaixo para ver todos os utilizadores.",
            'button' => [
                'text' => "Visualizar",
                'link' => route('voyager.services.index'),
            ],
            'image' => asset('http://catbr.com.br/developer/public/storage/widgets/service_background.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Service::first());
    }
}
