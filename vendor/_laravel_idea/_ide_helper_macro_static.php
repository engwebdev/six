<?php //37709db1d899e6507728b44417a4d876
/** @noinspection all */

namespace Illuminate\Contracts\View {
    
    /**
     * @method static $this extends($view, $params = [])
     * @method static $this layout($view, $params = [])
     * @method static $this layoutData($data = [])
     * @method static $this section($section)
     * @method static $this slot($slot)
     */
    class View {}
}

namespace Illuminate\Database\Eloquent {
    
    /**
     * @method static $this onlyTrashed(Builder $builder)
     * @method static int restore(Builder $builder)
     * @method static $this withTrashed(Builder $builder, $withTrashed = true)
     * @method static $this withoutTrashed(Builder $builder)
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method static $this banner($message)
     * @method static void dangerBanner($message)
     */
    class RedirectResponse {}
    
    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignature($absolute = true)
     * @method static array validate(array $rules, ...$params)
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Routing {
    
    /**
     * @method static $this permission($permissions = [])
     * @method static $this role($roles = [])
     */
    class Route {}
}

namespace Illuminate\Support {
    
    /**
     * @method static $this debug()
     */
    class Collection {}
}

namespace Illuminate\Testing {
    
    /**
     * @method static $this assertDontSeeLivewire($component)
     * @method static $this assertSeeLivewire($component)
     */
    class TestResponse {}
    
    /**
     * @method static $this assertDontSeeLivewire($component)
     * @method static $this assertSeeLivewire($component)
     */
    class TestView {}
}

namespace Illuminate\View {

    use Livewire\WireDirective;
    
    /**
     * @method static WireDirective wire($name)
     */
    class ComponentAttributeBag {}
    
    /**
     * @method static $this extends($view, $params = [])
     * @method static $this layout($view, $params = [])
     * @method static $this layoutData($data = [])
     * @method static $this section($section)
     * @method static $this slot($slot)
     */
    class View {}
}