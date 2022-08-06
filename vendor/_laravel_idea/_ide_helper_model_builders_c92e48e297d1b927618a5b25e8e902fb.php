<?php //5b3a95c1f3735110f14cd28f6f379ace
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Passport {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Passport\AuthCode;
    use Laravel\Passport\Client;
    use Laravel\Passport\PersonalAccessClient;
    use Laravel\Passport\RefreshToken;
    use Laravel\Passport\Token;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method AuthCode|$this shift(int $count = 1)
     * @method AuthCode|$this pop(int $count = 1)
     * @method AuthCode|null get($key, $default = null)
     * @method AuthCode|null pull($key, $default = null)
     * @method AuthCode|null first(callable $callback = null, $default = null)
     * @method AuthCode|null firstWhere(string $key, $operator = null, $value = null)
     * @method AuthCode|null find($key, $default = null)
     * @method AuthCode[] all()
     * @method AuthCode|null last(callable $callback = null, $default = null)
     * @method AuthCode|$this random(int|null $number = null)
     * @method AuthCode|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_AuthCode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AuthCode[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method AuthCode baseSole(array|string $columns = ['*'])
     * @method AuthCode create(array $attributes = [])
     * @method _IH_AuthCode_C|AuthCode[] cursor()
     * @method AuthCode|null|_IH_AuthCode_C|AuthCode[] find($id, array $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOrFail($id, array $columns = ['*'])
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOrNew($id, array $columns = ['*'])
     * @method AuthCode first(array|string $columns = ['*'])
     * @method AuthCode firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AuthCode firstOrCreate(array $attributes = [], array $values = [])
     * @method AuthCode firstOrFail(array $columns = ['*'])
     * @method AuthCode firstOrNew(array $attributes = [], array $values = [])
     * @method AuthCode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AuthCode forceCreate(array $attributes)
     * @method _IH_AuthCode_C|AuthCode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AuthCode_C|AuthCode[] get(array|string $columns = ['*'])
     * @method AuthCode getModel()
     * @method AuthCode[] getModels(array|string $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] hydrate(array $items)
     * @method AuthCode make(array $attributes = [])
     * @method AuthCode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AuthCode[]|_IH_AuthCode_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AuthCode[]|_IH_AuthCode_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AuthCode sole(array|string $columns = ['*'])
     * @method AuthCode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AuthCode_QB extends _BaseBuilder {}

    /**
     * @method Client|$this shift(int $count = 1)
     * @method Client|$this pop(int $count = 1)
     * @method Client|null get($key, $default = null)
     * @method Client|null pull($key, $default = null)
     * @method Client|null first(callable $callback = null, $default = null)
     * @method Client|null firstWhere(string $key, $operator = null, $value = null)
     * @method Client|null find($key, $default = null)
     * @method Client[] all()
     * @method Client|null last(callable $callback = null, $default = null)
     * @method Client|$this random(int|null $number = null)
     * @method Client|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Client_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Client[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Client baseSole(array|string $columns = ['*'])
     * @method Client create(array $attributes = [])
     * @method _IH_Client_C|Client[] cursor()
     * @method Client|null|_IH_Client_C|Client[] find($id, array $columns = ['*'])
     * @method _IH_Client_C|Client[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Client|_IH_Client_C|Client[] findOrFail($id, array $columns = ['*'])
     * @method Client|_IH_Client_C|Client[] findOrNew($id, array $columns = ['*'])
     * @method Client first(array|string $columns = ['*'])
     * @method Client firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Client firstOrCreate(array $attributes = [], array $values = [])
     * @method Client firstOrFail(array $columns = ['*'])
     * @method Client firstOrNew(array $attributes = [], array $values = [])
     * @method Client firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Client forceCreate(array $attributes)
     * @method _IH_Client_C|Client[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Client_C|Client[] get(array|string $columns = ['*'])
     * @method Client getModel()
     * @method Client[] getModels(array|string $columns = ['*'])
     * @method _IH_Client_C|Client[] hydrate(array $items)
     * @method Client make(array $attributes = [])
     * @method Client newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Client[]|_IH_Client_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Client[]|_IH_Client_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Client sole(array|string $columns = ['*'])
     * @method Client updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Client_QB extends _BaseBuilder {}

    /**
     * @method PersonalAccessClient|$this shift(int $count = 1)
     * @method PersonalAccessClient|$this pop(int $count = 1)
     * @method PersonalAccessClient|null get($key, $default = null)
     * @method PersonalAccessClient|null pull($key, $default = null)
     * @method PersonalAccessClient|null first(callable $callback = null, $default = null)
     * @method PersonalAccessClient|null firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessClient|null find($key, $default = null)
     * @method PersonalAccessClient[] all()
     * @method PersonalAccessClient|null last(callable $callback = null, $default = null)
     * @method PersonalAccessClient|$this random(int|null $number = null)
     * @method PersonalAccessClient|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_PersonalAccessClient_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessClient[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method PersonalAccessClient baseSole(array|string $columns = ['*'])
     * @method PersonalAccessClient create(array $attributes = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] cursor()
     * @method PersonalAccessClient|null|_IH_PersonalAccessClient_C|PersonalAccessClient[] find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessClient first(array|string $columns = ['*'])
     * @method PersonalAccessClient firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessClient firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstOrFail(array $columns = ['*'])
     * @method PersonalAccessClient firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessClient forceCreate(array $attributes)
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] get(array|string $columns = ['*'])
     * @method PersonalAccessClient getModel()
     * @method PersonalAccessClient[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] hydrate(array $items)
     * @method PersonalAccessClient make(array $attributes = [])
     * @method PersonalAccessClient newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessClient sole(array|string $columns = ['*'])
     * @method PersonalAccessClient updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessClient_QB extends _BaseBuilder {}

    /**
     * @method RefreshToken|$this shift(int $count = 1)
     * @method RefreshToken|$this pop(int $count = 1)
     * @method RefreshToken|null get($key, $default = null)
     * @method RefreshToken|null pull($key, $default = null)
     * @method RefreshToken|null first(callable $callback = null, $default = null)
     * @method RefreshToken|null firstWhere(string $key, $operator = null, $value = null)
     * @method RefreshToken|null find($key, $default = null)
     * @method RefreshToken[] all()
     * @method RefreshToken|null last(callable $callback = null, $default = null)
     * @method RefreshToken|$this random(int|null $number = null)
     * @method RefreshToken|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_RefreshToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RefreshToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method RefreshToken baseSole(array|string $columns = ['*'])
     * @method RefreshToken create(array $attributes = [])
     * @method _IH_RefreshToken_C|RefreshToken[] cursor()
     * @method RefreshToken|null|_IH_RefreshToken_C|RefreshToken[] find($id, array $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOrFail($id, array $columns = ['*'])
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOrNew($id, array $columns = ['*'])
     * @method RefreshToken first(array|string $columns = ['*'])
     * @method RefreshToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RefreshToken firstOrCreate(array $attributes = [], array $values = [])
     * @method RefreshToken firstOrFail(array $columns = ['*'])
     * @method RefreshToken firstOrNew(array $attributes = [], array $values = [])
     * @method RefreshToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RefreshToken forceCreate(array $attributes)
     * @method _IH_RefreshToken_C|RefreshToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RefreshToken_C|RefreshToken[] get(array|string $columns = ['*'])
     * @method RefreshToken getModel()
     * @method RefreshToken[] getModels(array|string $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] hydrate(array $items)
     * @method RefreshToken make(array $attributes = [])
     * @method RefreshToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RefreshToken[]|_IH_RefreshToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RefreshToken[]|_IH_RefreshToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RefreshToken sole(array|string $columns = ['*'])
     * @method RefreshToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RefreshToken_QB extends _BaseBuilder {}

    /**
     * @method Token|$this shift(int $count = 1)
     * @method Token|$this pop(int $count = 1)
     * @method Token|null get($key, $default = null)
     * @method Token|null pull($key, $default = null)
     * @method Token|null first(callable $callback = null, $default = null)
     * @method Token|null firstWhere(string $key, $operator = null, $value = null)
     * @method Token|null find($key, $default = null)
     * @method Token[] all()
     * @method Token|null last(callable $callback = null, $default = null)
     * @method Token|$this random(int|null $number = null)
     * @method Token|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Token_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Token[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Token baseSole(array|string $columns = ['*'])
     * @method Token create(array $attributes = [])
     * @method _IH_Token_C|Token[] cursor()
     * @method Token|null|_IH_Token_C|Token[] find($id, array $columns = ['*'])
     * @method _IH_Token_C|Token[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrFail($id, array $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrNew($id, array $columns = ['*'])
     * @method Token first(array|string $columns = ['*'])
     * @method Token firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Token firstOrCreate(array $attributes = [], array $values = [])
     * @method Token firstOrFail(array $columns = ['*'])
     * @method Token firstOrNew(array $attributes = [], array $values = [])
     * @method Token firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Token forceCreate(array $attributes)
     * @method _IH_Token_C|Token[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Token_C|Token[] get(array|string $columns = ['*'])
     * @method Token getModel()
     * @method Token[] getModels(array|string $columns = ['*'])
     * @method _IH_Token_C|Token[] hydrate(array $items)
     * @method Token make(array $attributes = [])
     * @method Token newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Token[]|_IH_Token_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Token[]|_IH_Token_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Token sole(array|string $columns = ['*'])
     * @method Token updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Token_QB extends _BaseBuilder {}
}
