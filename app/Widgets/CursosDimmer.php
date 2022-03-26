<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;

use App\Curso;

class CursosDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function run()
    {
        $count = Curso::count();
        $string = trans_choice('Cursos', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-study',
            'title' => "{$count} {$string}",
            'text' => "Você possui {$count} cursos cadastrados no sistema. Clique no botão abaixo para ver todos os utilizadores.",
            'button' => [
                'text' => "Visualizar",
                'link' => route('voyager.cursos.index'),
            ],
            'image' => asset('https://catbr.com.br/developer/public/storage/widgets/store_background.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Curso::first());
    }
}

