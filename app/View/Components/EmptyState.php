<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmptyState extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string  $message     = 'Aucun enregistrement trouvé.',
        public readonly ?string $actionLabel = null,
        public readonly string  $actionUrl   = '#',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.empty-state');
    }
}
