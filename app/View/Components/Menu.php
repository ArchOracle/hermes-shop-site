<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
	private string $type;
	private array $elementList;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'horizontal', $elementList = ['Main' => '/', 'Catalog' => '/catalog', 'Info' => '/info'])
    {
        $this->type = $type;
		$this->elementList = $elementList;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.' . $this->type, ['elementList' => $this->elementList]);
    }

	public function isSelectedElement($elementName): false
	{
		return false;
	}
}
