<?php

declare(strict_types=1);

namespace BladeUI\DateTime;

use BladeUI\Component;
use Illuminate\Contracts\View\View;

class Pikaday extends Component
{
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var string */
    public $value;

    /** @var string */
    public $format;

    /** @var string */
    public $placeholder;

    public function __construct(
        string $name,
        string $id = null,
        string $value = '',
        string $format = 'DD/MM/YYYY',
        string $placeholder = null
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->format = $format;
        $this->placeholder = $placeholder ?? $format;
    }

    public function render(): View
    {
        return view('blade-ui::components.date-time.pikaday');
    }

    public static function styles(): array
    {
        return ['https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css'];
    }

    public static function scripts(): array
    {
        return [
            'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js',
            'https://cdn.jsdelivr.net/npm/pikaday/pikaday.js',
        ];
    }
}