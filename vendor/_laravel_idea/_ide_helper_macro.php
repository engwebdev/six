<?php //f76c38dd250ff49da193298724d96686
/** @noinspection all */

namespace Illuminate\Contracts\View {
    
    /**
     * @method $this extends($view, $params = [])
     * @method $this layout($view, $params = [])
     * @method $this layoutData($data = [])
     * @method $this section($section)
     * @method $this slot($slot)
     */
    class View {}
}

namespace Illuminate\Database\Eloquent {
    
    /**
     * @method $this onlyTrashed(Builder $builder)
     * @method int restore(Builder $builder)
     * @method $this withTrashed(Builder $builder, $withTrashed = true)
     * @method $this withoutTrashed(Builder $builder)
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method $this banner($message)
     * @method void dangerBanner($message)
     */
    class RedirectResponse {}
    
    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignature($absolute = true)
     * @method array validate(array $rules, ...$params)
     * @method array validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Routing {
    
    /**
     * @method $this permission($permissions = [])
     * @method $this role($roles = [])
     */
    class Route {}
}

namespace Illuminate\Support {
    
    /**
     * @method $this debug()
     */
    class Collection {}
}

namespace Illuminate\Testing {
    
    /**
     * @method $this assertDontSeeLivewire($component)
     * @method $this assertSeeLivewire($component)
     */
    class TestResponse {}
    
    /**
     * @method $this assertDontSeeLivewire($component)
     * @method $this assertSeeLivewire($component)
     */
    class TestView {}
}

namespace Illuminate\View {

    use Livewire\WireDirective;
    
    /**
     * @method WireDirective wire($name)
     */
    class ComponentAttributeBag {}
    
    /**
     * @method $this extends($view, $params = [])
     * @method $this layout($view, $params = [])
     * @method $this layoutData($data = [])
     * @method $this section($section)
     * @method $this slot($slot)
     */
    class View {}
}