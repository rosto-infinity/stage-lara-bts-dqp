<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    private const COLORS = [
        'green'  => 'bg-green-50 text-green-700 border border-green-200',
        'gray'   => 'bg-gray-100 text-gray-600',
        'red'    => 'bg-red-50 text-red-700 border border-red-200',
        'amber'  => 'bg-amber-50 text-amber-700 border border-amber-200',
        'purple' => 'bg-purple-50 text-purple-700 border border-purple-200',
        'black'  => 'bg-gray-900 text-white',
    ];
    public readonly string $cls;
    /**
     * Create a new component instance.
     */
  public function __construct(
        public readonly string $color = 'gray',
    ) {
        $this->cls = self::COLORS[$color] ?? self::COLORS['gray'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.badge');
    }
}
