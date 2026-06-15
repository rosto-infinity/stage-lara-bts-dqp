<?php
declare(strict_types=1);
namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $name,
        public readonly ?string $label = null,
        public readonly string $type = 'text',
        public readonly string $value = '',
        public readonly bool $required =false,
        public readonly string $placeholder ='',

    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
