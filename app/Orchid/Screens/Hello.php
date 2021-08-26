<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use RicorocksDigitalAgency\Soap\Facades\Soap;

class Hello extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Hello';

    public $description = 'Hi everyone!';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
//        $node = Soap::node(['xmlns' => 'http://www.dataaccess.com/webservicesserver/'])->body(['ubiNum' => 500]);
//        Soap::to('https://www.dataaccess.com/webservicesserver/NumberConversion.wso')
//            ->information('NumberToWords' => $node);
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Greet')->icon('emotsmile')->method('sayHi')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::view('custom'),
            Layout::rows([

            ])
        ];
    }

    public function sayHi() {
        Alert::success('Hello there!');
    }
}
