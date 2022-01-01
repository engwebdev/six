<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Query\Expression;
    
    /**
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method int insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Closure|\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(array|string $column)
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::raw
     * @method Expression raw($value)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::average
     * @method mixed average(string $column)
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method int|mixed sum(string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkMap
     * @method $this chunkMap(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::min
     * @method mixed min(string $column)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method $this unless($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method int insertUsing(array $columns, \Closure|\Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyById
     * @method $this lazyById($chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Closure|\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(...$groups)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::dd
     * @method void dd()
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereBetweenColumns
     * @method $this orWhereBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::applyBeforeQueryCallbacks
     * @method $this applyBeforeQueryCallbacks()
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method bool doesntExist()
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method int count(string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns
     * @method $this orWhereNotBetweenColumns(string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::whereBetweenColumns
     * @method $this whereBetweenColumns(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::cleanBindings
     * @method $this cleanBindings(array $bindings)
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method mixed avg(string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(string $column, array $values)
     * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
     * @method $this explain()
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array|mixed $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array|mixed $column)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method $this when($value, callable $callback, callable|null $default = null)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::beforeQuery
     * @method $this beforeQuery(callable $callback)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(string $column, null|string $operator = null, null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(string $column, $values)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(\Closure|\Illuminate\Database\Query\Builder|Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazy
     * @method $this lazy(int $chunkSize = 1000)
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::max
     * @method mixed max(string $column)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method bool exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method ConnectionInterface getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::crossJoinSub
     * @method $this crossJoinSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::whereNotBetweenColumns
     * @method $this whereNotBetweenColumns(string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method int insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(Expression|string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method bool insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(\Closure|\Illuminate\Database\Query\Builder|Expression|null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::dump
     * @method \Illuminate\Database\Query\Builder dump()
     * @see \Illuminate\Database\Query\Builder::implode
     * @method $this implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method string toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(string $column, null|string $operator = null, null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method array getBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     */
    class _BaseBuilder extends Builder {}
    
    /**
     * @method \Illuminate\Support\Collection mapSpread(callable $callback)
     * @method \Illuminate\Support\Collection mapWithKeys(callable $callback)
     * @method \Illuminate\Support\Collection zip(array $items)
     * @method \Illuminate\Support\Collection partition(callable|string $key, $operator = null, $value = null)
     * @method \Illuminate\Support\Collection mapInto(string $class)
     * @method \Illuminate\Support\Collection mapToGroups(callable $callback)
     * @method \Illuminate\Support\Collection map(callable $callback)
     * @method \Illuminate\Support\Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
     * @method \Illuminate\Support\Collection pluck(array|string $value, null|string $key = null)
     * @method \Illuminate\Support\Collection pad(int $size, $value)
     * @method \Illuminate\Support\Collection split(int $numberOfGroups)
     * @method \Illuminate\Support\Collection combine($values)
     * @method \Illuminate\Support\Collection countBy(callable|string $countBy = null)
     * @method \Illuminate\Support\Collection mapToDictionary(callable $callback)
     * @method \Illuminate\Support\Collection keys()
     * @method \Illuminate\Support\Collection transform(callable $callback)
     * @method \Illuminate\Support\Collection flatMap(callable $callback)
     * @method \Illuminate\Support\Collection collapse()
     */
    class _BaseCollection extends \Illuminate\Database\Eloquent\Collection {}
}

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Attribute;
    use App\Models\AttributeValue;
    use App\Models\Category;
    use App\Models\ConfirmComment;
    use App\Models\CustomProduct;
    use App\Models\CustomService;
    use App\Models\Detail;
    use App\Models\Membership;
    use App\Models\NormalProduct;
    use App\Models\NormalService;
    use App\Models\ProductCategory;
    use App\Models\ProductCustomerComments;
    use App\Models\ProductPriceHistory;
    use App\Models\ProductsImage;
    use App\Models\ProductTag;
    use App\Models\RolesShopsUsers;
    use App\Models\Shop;
    use App\Models\ShopImages;
    use App\Models\Tag;
    use App\Models\Task;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\TopModel;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;
    
    /**
     * @method AttributeValue|$this shift(int $count = 1)
     * @method AttributeValue|$this pop(int $count = 1)
     * @method AttributeValue|null get($key, $default = null)
     * @method AttributeValue|null pull($key, $default = null)
     * @method AttributeValue|null first(callable $callback = null, $default = null)
     * @method AttributeValue|null firstWhere(string $key, $operator = null, $value = null)
     * @method AttributeValue|null find($key, $default = null)
     * @method AttributeValue[] all()
     * @method AttributeValue|null last(callable $callback = null, $default = null)
     * @method AttributeValue|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_AttributeValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AttributeValue[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AttributeValue_QB whereId($value)
     * @method _IH_AttributeValue_QB whereAttributeId($value)
     * @method _IH_AttributeValue_QB whereAttributeName($value)
     * @method _IH_AttributeValue_QB whereAttributeValueName($value)
     * @method _IH_AttributeValue_QB whereAttributeValueAdditionalUserId($value)
     * @method _IH_AttributeValue_QB whereAttributeValueAdditionalType($value)
     * @method _IH_AttributeValue_QB whereAttributeValueStatusAccept($value)
     * @method _IH_AttributeValue_QB whereAttributeValuePublishStatus($value)
     * @method _IH_AttributeValue_QB whereDeletedAt($value)
     * @method _IH_AttributeValue_QB whereCreatedAt($value)
     * @method _IH_AttributeValue_QB whereUpdatedAt($value)
     * @method AttributeValue baseSole(array|string $columns = ['*'])
     * @method AttributeValue create(array $attributes = [])
     * @method _IH_AttributeValue_C|AttributeValue[] cursor()
     * @method AttributeValue|null|_IH_AttributeValue_C|AttributeValue[] find($id, array $columns = ['*'])
     * @method _IH_AttributeValue_C|AttributeValue[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AttributeValue|_IH_AttributeValue_C|AttributeValue[] findOrFail($id, array $columns = ['*'])
     * @method AttributeValue|_IH_AttributeValue_C|AttributeValue[] findOrNew($id, array $columns = ['*'])
     * @method AttributeValue first(array|string $columns = ['*'])
     * @method AttributeValue firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AttributeValue firstOrCreate(array $attributes = [], array $values = [])
     * @method AttributeValue firstOrFail(array $columns = ['*'])
     * @method AttributeValue firstOrNew(array $attributes = [], array $values = [])
     * @method AttributeValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AttributeValue forceCreate(array $attributes)
     * @method _IH_AttributeValue_C|AttributeValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AttributeValue_C|AttributeValue[] get(array|string $columns = ['*'])
     * @method AttributeValue getModel()
     * @method AttributeValue[] getModels(array|string $columns = ['*'])
     * @method _IH_AttributeValue_C|AttributeValue[] hydrate(array $items)
     * @method AttributeValue make(array $attributes = [])
     * @method AttributeValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AttributeValue[]|_IH_AttributeValue_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AttributeValue[]|_IH_AttributeValue_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AttributeValue sole(array|string $columns = ['*'])
     * @method AttributeValue updateOrCreate(array $attributes, array $values = [])
     * @method _IH_AttributeValue_QB withTrashed()
     * @method _IH_AttributeValue_QB onlyTrashed()
     * @method _IH_AttributeValue_QB withoutTrashed()
     * @method _IH_AttributeValue_QB restore()
     * @method _IH_AttributeValue_QB customFilter($filter)
     * @method _IH_AttributeValue_QB customOrder($sort)
     * @method _IH_AttributeValue_QB customPagination($pagination)
     */
    class _IH_AttributeValue_QB extends _BaseBuilder {}
    
    /**
     * @method Attribute|$this shift(int $count = 1)
     * @method Attribute|$this pop(int $count = 1)
     * @method Attribute|null get($key, $default = null)
     * @method Attribute|null pull($key, $default = null)
     * @method Attribute|null first(callable $callback = null, $default = null)
     * @method Attribute|null firstWhere(string $key, $operator = null, $value = null)
     * @method Attribute|null find($key, $default = null)
     * @method Attribute[] all()
     * @method Attribute|null last(callable $callback = null, $default = null)
     * @method Attribute|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Attribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Attribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Attribute_QB whereId($value)
     * @method _IH_Attribute_QB whereAttributeName($value)
     * @method _IH_Attribute_QB whereAttributeAdditionalUserId($value)
     * @method _IH_Attribute_QB whereAttributeAdditionalType($value)
     * @method _IH_Attribute_QB whereAttributeStatusAccept($value)
     * @method _IH_Attribute_QB whereAttributePublishStatus($value)
     * @method _IH_Attribute_QB whereDeletedAt($value)
     * @method _IH_Attribute_QB whereCreatedAt($value)
     * @method _IH_Attribute_QB whereUpdatedAt($value)
     * @method Attribute baseSole(array|string $columns = ['*'])
     * @method Attribute create(array $attributes = [])
     * @method _IH_Attribute_C|Attribute[] cursor()
     * @method Attribute|null|_IH_Attribute_C|Attribute[] find($id, array $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Attribute|_IH_Attribute_C|Attribute[] findOrFail($id, array $columns = ['*'])
     * @method Attribute|_IH_Attribute_C|Attribute[] findOrNew($id, array $columns = ['*'])
     * @method Attribute first(array|string $columns = ['*'])
     * @method Attribute firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Attribute firstOrCreate(array $attributes = [], array $values = [])
     * @method Attribute firstOrFail(array $columns = ['*'])
     * @method Attribute firstOrNew(array $attributes = [], array $values = [])
     * @method Attribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Attribute forceCreate(array $attributes)
     * @method _IH_Attribute_C|Attribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Attribute_C|Attribute[] get(array|string $columns = ['*'])
     * @method Attribute getModel()
     * @method Attribute[] getModels(array|string $columns = ['*'])
     * @method _IH_Attribute_C|Attribute[] hydrate(array $items)
     * @method Attribute make(array $attributes = [])
     * @method Attribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Attribute[]|_IH_Attribute_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Attribute[]|_IH_Attribute_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Attribute sole(array|string $columns = ['*'])
     * @method Attribute updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Attribute_QB withTrashed()
     * @method _IH_Attribute_QB onlyTrashed()
     * @method _IH_Attribute_QB withoutTrashed()
     * @method _IH_Attribute_QB restore()
     * @method _IH_Attribute_QB customFilter($filter)
     * @method _IH_Attribute_QB customOrder($sort)
     * @method _IH_Attribute_QB customPagination($pagination)
     */
    class _IH_Attribute_QB extends _BaseBuilder {}
    
    /**
     * @method Category|$this shift(int $count = 1)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null get($key, $default = null)
     * @method Category|null pull($key, $default = null)
     * @method Category|null first(callable $callback = null, $default = null)
     * @method Category|null firstWhere(string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     * @method Category|null last(callable $callback = null, $default = null)
     * @method Category|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Category_QB withTrashed()
     * @method _IH_Category_QB onlyTrashed()
     * @method _IH_Category_QB withoutTrashed()
     * @method _IH_Category_QB restore()
     * @method _IH_Category_QB customFilter($filter)
     * @method _IH_Category_QB customOrder($sort)
     * @method _IH_Category_QB customPagination($pagination)
     */
    class _IH_Category_QB extends _BaseBuilder {}
    
    /**
     * @method ConfirmComment|$this shift(int $count = 1)
     * @method ConfirmComment|$this pop(int $count = 1)
     * @method ConfirmComment|null get($key, $default = null)
     * @method ConfirmComment|null pull($key, $default = null)
     * @method ConfirmComment|null first(callable $callback = null, $default = null)
     * @method ConfirmComment|null firstWhere(string $key, $operator = null, $value = null)
     * @method ConfirmComment|null find($key, $default = null)
     * @method ConfirmComment[] all()
     * @method ConfirmComment|null last(callable $callback = null, $default = null)
     * @method ConfirmComment|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ConfirmComment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ConfirmComment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ConfirmComment_QB whereId($value)
     * @method _IH_ConfirmComment_QB whereParentId($value)
     * @method _IH_ConfirmComment_QB whereConfirmCommentableId($value)
     * @method _IH_ConfirmComment_QB whereConfirmCommentableType($value)
     * @method _IH_ConfirmComment_QB whereSystemUserId($value)
     * @method _IH_ConfirmComment_QB whereSystemUserComment($value)
     * @method _IH_ConfirmComment_QB whereConfirmCommentValue($value)
     * @method _IH_ConfirmComment_QB whereTypeReview($value)
     * @method _IH_ConfirmComment_QB whereTypeStatus($value)
     * @method _IH_ConfirmComment_QB whereDeletedAt($value)
     * @method _IH_ConfirmComment_QB whereCreatedAt($value)
     * @method _IH_ConfirmComment_QB whereUpdatedAt($value)
     * @method ConfirmComment baseSole(array|string $columns = ['*'])
     * @method ConfirmComment create(array $attributes = [])
     * @method _IH_ConfirmComment_C|ConfirmComment[] cursor()
     * @method ConfirmComment|null|_IH_ConfirmComment_C|ConfirmComment[] find($id, array $columns = ['*'])
     * @method _IH_ConfirmComment_C|ConfirmComment[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ConfirmComment|_IH_ConfirmComment_C|ConfirmComment[] findOrFail($id, array $columns = ['*'])
     * @method ConfirmComment|_IH_ConfirmComment_C|ConfirmComment[] findOrNew($id, array $columns = ['*'])
     * @method ConfirmComment first(array|string $columns = ['*'])
     * @method ConfirmComment firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ConfirmComment firstOrCreate(array $attributes = [], array $values = [])
     * @method ConfirmComment firstOrFail(array $columns = ['*'])
     * @method ConfirmComment firstOrNew(array $attributes = [], array $values = [])
     * @method ConfirmComment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ConfirmComment forceCreate(array $attributes)
     * @method _IH_ConfirmComment_C|ConfirmComment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ConfirmComment_C|ConfirmComment[] get(array|string $columns = ['*'])
     * @method ConfirmComment getModel()
     * @method ConfirmComment[] getModels(array|string $columns = ['*'])
     * @method _IH_ConfirmComment_C|ConfirmComment[] hydrate(array $items)
     * @method ConfirmComment make(array $attributes = [])
     * @method ConfirmComment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ConfirmComment[]|_IH_ConfirmComment_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ConfirmComment[]|_IH_ConfirmComment_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ConfirmComment sole(array|string $columns = ['*'])
     * @method ConfirmComment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ConfirmComment_QB withTrashed()
     * @method _IH_ConfirmComment_QB onlyTrashed()
     * @method _IH_ConfirmComment_QB withoutTrashed()
     * @method _IH_ConfirmComment_QB restore()
     * @method _IH_ConfirmComment_QB customFilter($filter)
     * @method _IH_ConfirmComment_QB customOrder($sort)
     * @method _IH_ConfirmComment_QB customPagination($pagination)
     */
    class _IH_ConfirmComment_QB extends _BaseBuilder {}
    
    /**
     * @method CustomProduct|$this shift(int $count = 1)
     * @method CustomProduct|$this pop(int $count = 1)
     * @method CustomProduct|null get($key, $default = null)
     * @method CustomProduct|null pull($key, $default = null)
     * @method CustomProduct|null first(callable $callback = null, $default = null)
     * @method CustomProduct|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomProduct|null find($key, $default = null)
     * @method CustomProduct[] all()
     * @method CustomProduct|null last(callable $callback = null, $default = null)
     * @method CustomProduct|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_CustomProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CustomProduct_QB whereId($value)
     * @method _IH_CustomProduct_QB whereCustomProductName($value)
     * @method _IH_CustomProduct_QB whereCustomProductDescription($value)
     * @method _IH_CustomProduct_QB whereCustomProductInfo($value)
     * @method _IH_CustomProduct_QB whereCustomProductNote($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusAccept($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusConfirmUserId($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusConfirmUserComment($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusPublish($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusPublishDate($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPrice($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPriceDate($value)
     * @method _IH_CustomProduct_QB whereCustomProductStatusPriceDiscount($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPriceDiscountPercentage($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPriceDiscountType($value)
     * @method _IH_CustomProduct_QB whereCustomProductIndexImageUrl($value)
     * @method _IH_CustomProduct_QB whereCustomProductCategoryId($value)
     * @method _IH_CustomProduct_QB whereCustomProductCategoryName($value)
     * @method _IH_CustomProduct_QB whereCustomProductShopId($value)
     * @method _IH_CustomProduct_QB whereCustomProductRegistryUserId($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantityTotal($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantitySold($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantitySelling($value)
     * @method _IH_CustomProduct_QB whereCustomProductQuantityReturned($value)
     * @method _IH_CustomProduct_QB whereCustomProductNumberComments($value)
     * @method _IH_CustomProduct_QB whereCustomProductTotalPoints($value)
     * @method _IH_CustomProduct_QB whereCustomProductAveragePoints($value)
     * @method _IH_CustomProduct_QB whereCustomProductLastPoint($value)
     * @method _IH_CustomProduct_QB whereDeletedAt($value)
     * @method _IH_CustomProduct_QB whereCreatedAt($value)
     * @method _IH_CustomProduct_QB whereUpdatedAt($value)
     * @method CustomProduct baseSole(array|string $columns = ['*'])
     * @method CustomProduct create(array $attributes = [])
     * @method _IH_CustomProduct_C|CustomProduct[] cursor()
     * @method CustomProduct|null|_IH_CustomProduct_C|CustomProduct[] find($id, array $columns = ['*'])
     * @method _IH_CustomProduct_C|CustomProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomProduct|_IH_CustomProduct_C|CustomProduct[] findOrFail($id, array $columns = ['*'])
     * @method CustomProduct|_IH_CustomProduct_C|CustomProduct[] findOrNew($id, array $columns = ['*'])
     * @method CustomProduct first(array|string $columns = ['*'])
     * @method CustomProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomProduct firstOrFail(array $columns = ['*'])
     * @method CustomProduct firstOrNew(array $attributes = [], array $values = [])
     * @method CustomProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomProduct forceCreate(array $attributes)
     * @method _IH_CustomProduct_C|CustomProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomProduct_C|CustomProduct[] get(array|string $columns = ['*'])
     * @method CustomProduct getModel()
     * @method CustomProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomProduct_C|CustomProduct[] hydrate(array $items)
     * @method CustomProduct make(array $attributes = [])
     * @method CustomProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomProduct[]|_IH_CustomProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomProduct[]|_IH_CustomProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomProduct sole(array|string $columns = ['*'])
     * @method CustomProduct updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CustomProduct_QB withTrashed()
     * @method _IH_CustomProduct_QB onlyTrashed()
     * @method _IH_CustomProduct_QB withoutTrashed()
     * @method _IH_CustomProduct_QB restore()
     * @method _IH_CustomProduct_QB customFilter($filter)
     * @method _IH_CustomProduct_QB customOrder($sort)
     * @method _IH_CustomProduct_QB customPagination($pagination)
     */
    class _IH_CustomProduct_QB extends _BaseBuilder {}
    
    /**
     * @method CustomService|$this shift(int $count = 1)
     * @method CustomService|$this pop(int $count = 1)
     * @method CustomService|null get($key, $default = null)
     * @method CustomService|null pull($key, $default = null)
     * @method CustomService|null first(callable $callback = null, $default = null)
     * @method CustomService|null firstWhere(string $key, $operator = null, $value = null)
     * @method CustomService|null find($key, $default = null)
     * @method CustomService[] all()
     * @method CustomService|null last(callable $callback = null, $default = null)
     * @method CustomService|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_CustomService_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CustomService[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CustomService_QB whereId($value)
     * @method _IH_CustomService_QB whereCustomServicesName($value)
     * @method _IH_CustomService_QB whereCustomServicesDescription($value)
     * @method _IH_CustomService_QB whereCustomServicesInfo($value)
     * @method _IH_CustomService_QB whereCustomServicesNote($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPrice($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPriceDate($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusPriceDiscount($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPriceDiscountPercentage($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPriceDiscountType($value)
     * @method _IH_CustomService_QB whereCustomServicesIndexImageUrl($value)
     * @method _IH_CustomService_QB whereCustomServicesCategoryId($value)
     * @method _IH_CustomService_QB whereCustomServicesCategoryName($value)
     * @method _IH_CustomService_QB whereCustomServicesShopId($value)
     * @method _IH_CustomService_QB whereCustomServicesRegistryUserId($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusAccept($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusConfirmUserId($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusConfirmUserComment($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusPublish($value)
     * @method _IH_CustomService_QB whereCustomServicesStatusPublishDate($value)
     * @method _IH_CustomService_QB whereCustomServicesQuantitySold($value)
     * @method _IH_CustomService_QB whereCustomServicesQuantitySelling($value)
     * @method _IH_CustomService_QB whereCustomServicesQuantityReturned($value)
     * @method _IH_CustomService_QB whereCustomServicesNumberComments($value)
     * @method _IH_CustomService_QB whereCustomServicesTotalPoints($value)
     * @method _IH_CustomService_QB whereCustomServicesAveragePoints($value)
     * @method _IH_CustomService_QB whereCustomServicesLastPoint($value)
     * @method _IH_CustomService_QB whereDeletedAt($value)
     * @method _IH_CustomService_QB whereCreatedAt($value)
     * @method _IH_CustomService_QB whereUpdatedAt($value)
     * @method CustomService baseSole(array|string $columns = ['*'])
     * @method CustomService create(array $attributes = [])
     * @method _IH_CustomService_C|CustomService[] cursor()
     * @method CustomService|null|_IH_CustomService_C|CustomService[] find($id, array $columns = ['*'])
     * @method _IH_CustomService_C|CustomService[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CustomService|_IH_CustomService_C|CustomService[] findOrFail($id, array $columns = ['*'])
     * @method CustomService|_IH_CustomService_C|CustomService[] findOrNew($id, array $columns = ['*'])
     * @method CustomService first(array|string $columns = ['*'])
     * @method CustomService firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CustomService firstOrCreate(array $attributes = [], array $values = [])
     * @method CustomService firstOrFail(array $columns = ['*'])
     * @method CustomService firstOrNew(array $attributes = [], array $values = [])
     * @method CustomService firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CustomService forceCreate(array $attributes)
     * @method _IH_CustomService_C|CustomService[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomService_C|CustomService[] get(array|string $columns = ['*'])
     * @method CustomService getModel()
     * @method CustomService[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomService_C|CustomService[] hydrate(array $items)
     * @method CustomService make(array $attributes = [])
     * @method CustomService newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CustomService[]|_IH_CustomService_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CustomService[]|_IH_CustomService_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CustomService sole(array|string $columns = ['*'])
     * @method CustomService updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CustomService_QB withTrashed()
     * @method _IH_CustomService_QB onlyTrashed()
     * @method _IH_CustomService_QB withoutTrashed()
     * @method _IH_CustomService_QB restore()
     * @method _IH_CustomService_QB customFilter($filter)
     * @method _IH_CustomService_QB customOrder($sort)
     * @method _IH_CustomService_QB customPagination($pagination)
     */
    class _IH_CustomService_QB extends _BaseBuilder {}
    
    /**
     * @method Detail|$this shift(int $count = 1)
     * @method Detail|$this pop(int $count = 1)
     * @method Detail|null get($key, $default = null)
     * @method Detail|null pull($key, $default = null)
     * @method Detail|null first(callable $callback = null, $default = null)
     * @method Detail|null firstWhere(string $key, $operator = null, $value = null)
     * @method Detail|null find($key, $default = null)
     * @method Detail[] all()
     * @method Detail|null last(callable $callback = null, $default = null)
     * @method Detail|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Detail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Detail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Detail_QB whereId($value)
     * @method _IH_Detail_QB whereProductableId($value)
     * @method _IH_Detail_QB whereProductableType($value)
     * @method _IH_Detail_QB whereProductName($value)
     * @method _IH_Detail_QB whereProductAttributeNameId($value)
     * @method _IH_Detail_QB whereProductAttributeName($value)
     * @method _IH_Detail_QB whereProductAttributeValueId($value)
     * @method _IH_Detail_QB whereProductAttributeValue($value)
     * @method _IH_Detail_QB wherePriceId($value)
     * @method _IH_Detail_QB wherePriceValue($value)
     * @method _IH_Detail_QB whereType($value)
     * @method _IH_Detail_QB whereDeletedAt($value)
     * @method _IH_Detail_QB whereCreatedAt($value)
     * @method _IH_Detail_QB whereUpdatedAt($value)
     * @method Detail baseSole(array|string $columns = ['*'])
     * @method Detail create(array $attributes = [])
     * @method _IH_Detail_C|Detail[] cursor()
     * @method Detail|null|_IH_Detail_C|Detail[] find($id, array $columns = ['*'])
     * @method _IH_Detail_C|Detail[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Detail|_IH_Detail_C|Detail[] findOrFail($id, array $columns = ['*'])
     * @method Detail|_IH_Detail_C|Detail[] findOrNew($id, array $columns = ['*'])
     * @method Detail first(array|string $columns = ['*'])
     * @method Detail firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Detail firstOrCreate(array $attributes = [], array $values = [])
     * @method Detail firstOrFail(array $columns = ['*'])
     * @method Detail firstOrNew(array $attributes = [], array $values = [])
     * @method Detail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Detail forceCreate(array $attributes)
     * @method _IH_Detail_C|Detail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Detail_C|Detail[] get(array|string $columns = ['*'])
     * @method Detail getModel()
     * @method Detail[] getModels(array|string $columns = ['*'])
     * @method _IH_Detail_C|Detail[] hydrate(array $items)
     * @method Detail make(array $attributes = [])
     * @method Detail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Detail[]|_IH_Detail_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Detail[]|_IH_Detail_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Detail sole(array|string $columns = ['*'])
     * @method Detail updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Detail_QB withTrashed()
     * @method _IH_Detail_QB onlyTrashed()
     * @method _IH_Detail_QB withoutTrashed()
     * @method _IH_Detail_QB restore()
     * @method _IH_Detail_QB customFilter($filter)
     * @method _IH_Detail_QB customOrder($sort)
     * @method _IH_Detail_QB customPagination($pagination)
     */
    class _IH_Detail_QB extends _BaseBuilder {}
    
    /**
     * @method Membership|$this shift(int $count = 1)
     * @method Membership|$this pop(int $count = 1)
     * @method Membership|null get($key, $default = null)
     * @method Membership|null pull($key, $default = null)
     * @method Membership|null first(callable $callback = null, $default = null)
     * @method Membership|null firstWhere(string $key, $operator = null, $value = null)
     * @method Membership|null find($key, $default = null)
     * @method Membership[] all()
     * @method Membership|null last(callable $callback = null, $default = null)
     * @method Membership|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Membership_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Membership[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Membership baseSole(array|string $columns = ['*'])
     * @method Membership create(array $attributes = [])
     * @method _IH_Membership_C|Membership[] cursor()
     * @method Membership|null|_IH_Membership_C|Membership[] find($id, array $columns = ['*'])
     * @method _IH_Membership_C|Membership[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOrFail($id, array $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOrNew($id, array $columns = ['*'])
     * @method Membership first(array|string $columns = ['*'])
     * @method Membership firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Membership firstOrCreate(array $attributes = [], array $values = [])
     * @method Membership firstOrFail(array $columns = ['*'])
     * @method Membership firstOrNew(array $attributes = [], array $values = [])
     * @method Membership firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Membership forceCreate(array $attributes)
     * @method _IH_Membership_C|Membership[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Membership_C|Membership[] get(array|string $columns = ['*'])
     * @method Membership getModel()
     * @method Membership[] getModels(array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] hydrate(array $items)
     * @method Membership make(array $attributes = [])
     * @method Membership newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Membership[]|_IH_Membership_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Membership[]|_IH_Membership_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Membership sole(array|string $columns = ['*'])
     * @method Membership updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Membership_QB extends _BaseBuilder {}
    
    /**
     * @method NormalProduct|$this shift(int $count = 1)
     * @method NormalProduct|$this pop(int $count = 1)
     * @method NormalProduct|null get($key, $default = null)
     * @method NormalProduct|null pull($key, $default = null)
     * @method NormalProduct|null first(callable $callback = null, $default = null)
     * @method NormalProduct|null firstWhere(string $key, $operator = null, $value = null)
     * @method NormalProduct|null find($key, $default = null)
     * @method NormalProduct[] all()
     * @method NormalProduct|null last(callable $callback = null, $default = null)
     * @method NormalProduct|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_NormalProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NormalProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NormalProduct_QB whereId($value)
     * @method _IH_NormalProduct_QB whereNormalProductName($value)
     * @method _IH_NormalProduct_QB whereNormalProductDescription($value)
     * @method _IH_NormalProduct_QB whereNormalProductInfo($value)
     * @method _IH_NormalProduct_QB whereNormalProductNote($value)
     * @method _IH_NormalProduct_QB whereNormalProductStatusAccept($value)
     * @method _IH_NormalProduct_QB whereNormalProductStatusConfirmUserId($value)
     * @method _IH_NormalProduct_QB whereNormalProductStatusConfirmUserComment($value)
     * @method _IH_NormalProduct_QB whereNormalProductStatusPublish($value)
     * @method _IH_NormalProduct_QB whereNormalProductStatusPublishDate($value)
     * @method _IH_NormalProduct_QB whereNormalProductLastPrice($value)
     * @method _IH_NormalProduct_QB whereNormalProductLastPriceDate($value)
     * @method _IH_NormalProduct_QB whereNormalProductStatusPriceDiscount($value)
     * @method _IH_NormalProduct_QB whereNormalProductLastPriceDiscountPercentage($value)
     * @method _IH_NormalProduct_QB whereNormalProductLastPriceDiscountType($value)
     * @method _IH_NormalProduct_QB whereNormalProductIndexImageUrl($value)
     * @method _IH_NormalProduct_QB whereNormalProductCategoryId($value)
     * @method _IH_NormalProduct_QB whereNormalProductCategoryName($value)
     * @method _IH_NormalProduct_QB whereNormalProductShopId($value)
     * @method _IH_NormalProduct_QB whereNormalProductRegistryUserId($value)
     * @method _IH_NormalProduct_QB whereNormalProductQuantityTotal($value)
     * @method _IH_NormalProduct_QB whereNormalProductQuantitySold($value)
     * @method _IH_NormalProduct_QB whereNormalProductQuantitySelling($value)
     * @method _IH_NormalProduct_QB whereNormalProductQuantityReturned($value)
     * @method _IH_NormalProduct_QB whereNormalProductNumberComments($value)
     * @method _IH_NormalProduct_QB whereNormalProductTotalPoints($value)
     * @method _IH_NormalProduct_QB whereNormalProductAveragePoints($value)
     * @method _IH_NormalProduct_QB whereNormalProductLastPoint($value)
     * @method _IH_NormalProduct_QB whereDeletedAt($value)
     * @method _IH_NormalProduct_QB whereCreatedAt($value)
     * @method _IH_NormalProduct_QB whereUpdatedAt($value)
     * @method NormalProduct baseSole(array|string $columns = ['*'])
     * @method NormalProduct create(array $attributes = [])
     * @method _IH_NormalProduct_C|NormalProduct[] cursor()
     * @method NormalProduct|null|_IH_NormalProduct_C|NormalProduct[] find($id, array $columns = ['*'])
     * @method _IH_NormalProduct_C|NormalProduct[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method NormalProduct|_IH_NormalProduct_C|NormalProduct[] findOrFail($id, array $columns = ['*'])
     * @method NormalProduct|_IH_NormalProduct_C|NormalProduct[] findOrNew($id, array $columns = ['*'])
     * @method NormalProduct first(array|string $columns = ['*'])
     * @method NormalProduct firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method NormalProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method NormalProduct firstOrFail(array $columns = ['*'])
     * @method NormalProduct firstOrNew(array $attributes = [], array $values = [])
     * @method NormalProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NormalProduct forceCreate(array $attributes)
     * @method _IH_NormalProduct_C|NormalProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NormalProduct_C|NormalProduct[] get(array|string $columns = ['*'])
     * @method NormalProduct getModel()
     * @method NormalProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_NormalProduct_C|NormalProduct[] hydrate(array $items)
     * @method NormalProduct make(array $attributes = [])
     * @method NormalProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NormalProduct[]|_IH_NormalProduct_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|NormalProduct[]|_IH_NormalProduct_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NormalProduct sole(array|string $columns = ['*'])
     * @method NormalProduct updateOrCreate(array $attributes, array $values = [])
     * @method _IH_NormalProduct_QB withTrashed()
     * @method _IH_NormalProduct_QB onlyTrashed()
     * @method _IH_NormalProduct_QB withoutTrashed()
     * @method _IH_NormalProduct_QB restore()
     * @method _IH_NormalProduct_QB customFilter($filter)
     * @method _IH_NormalProduct_QB customOrder($sort)
     * @method _IH_NormalProduct_QB customPagination($pagination)
     */
    class _IH_NormalProduct_QB extends _BaseBuilder {}
    
    /**
     * @method NormalService|$this shift(int $count = 1)
     * @method NormalService|$this pop(int $count = 1)
     * @method NormalService|null get($key, $default = null)
     * @method NormalService|null pull($key, $default = null)
     * @method NormalService|null first(callable $callback = null, $default = null)
     * @method NormalService|null firstWhere(string $key, $operator = null, $value = null)
     * @method NormalService|null find($key, $default = null)
     * @method NormalService[] all()
     * @method NormalService|null last(callable $callback = null, $default = null)
     * @method NormalService|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_NormalService_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NormalService[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NormalService_QB whereId($value)
     * @method _IH_NormalService_QB whereNormalServiceName($value)
     * @method _IH_NormalService_QB whereNormalServiceDescription($value)
     * @method _IH_NormalService_QB whereNormalServiceTimespanByMinutes($value)
     * @method _IH_NormalService_QB whereNormalServiceNumberSessions($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPrice($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPriceDate($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusPriceDiscount($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPriceDiscountPercentage($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPriceDiscountType($value)
     * @method _IH_NormalService_QB whereNormalServiceIndexImageUrl($value)
     * @method _IH_NormalService_QB whereNormalServiceCategoryId($value)
     * @method _IH_NormalService_QB whereNormalServiceCategoryName($value)
     * @method _IH_NormalService_QB whereNormalServiceShopId($value)
     * @method _IH_NormalService_QB whereNormalServiceRegistryUserId($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusAccept($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusConfirmUserId($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusConfirmUserComment($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusPublish($value)
     * @method _IH_NormalService_QB whereNormalServiceStatusPublishDate($value)
     * @method _IH_NormalService_QB whereNormalServiceNumberComments($value)
     * @method _IH_NormalService_QB whereNormalServiceTotalPoints($value)
     * @method _IH_NormalService_QB whereNormalServiceAveragePoints($value)
     * @method _IH_NormalService_QB whereNormalServiceLastPoint($value)
     * @method _IH_NormalService_QB whereDeletedAt($value)
     * @method _IH_NormalService_QB whereCreatedAt($value)
     * @method _IH_NormalService_QB whereUpdatedAt($value)
     * @method NormalService baseSole(array|string $columns = ['*'])
     * @method NormalService create(array $attributes = [])
     * @method _IH_NormalService_C|NormalService[] cursor()
     * @method NormalService|null|_IH_NormalService_C|NormalService[] find($id, array $columns = ['*'])
     * @method _IH_NormalService_C|NormalService[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method NormalService|_IH_NormalService_C|NormalService[] findOrFail($id, array $columns = ['*'])
     * @method NormalService|_IH_NormalService_C|NormalService[] findOrNew($id, array $columns = ['*'])
     * @method NormalService first(array|string $columns = ['*'])
     * @method NormalService firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method NormalService firstOrCreate(array $attributes = [], array $values = [])
     * @method NormalService firstOrFail(array $columns = ['*'])
     * @method NormalService firstOrNew(array $attributes = [], array $values = [])
     * @method NormalService firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NormalService forceCreate(array $attributes)
     * @method _IH_NormalService_C|NormalService[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NormalService_C|NormalService[] get(array|string $columns = ['*'])
     * @method NormalService getModel()
     * @method NormalService[] getModels(array|string $columns = ['*'])
     * @method _IH_NormalService_C|NormalService[] hydrate(array $items)
     * @method NormalService make(array $attributes = [])
     * @method NormalService newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NormalService[]|_IH_NormalService_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|NormalService[]|_IH_NormalService_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NormalService sole(array|string $columns = ['*'])
     * @method NormalService updateOrCreate(array $attributes, array $values = [])
     * @method _IH_NormalService_QB withTrashed()
     * @method _IH_NormalService_QB onlyTrashed()
     * @method _IH_NormalService_QB withoutTrashed()
     * @method _IH_NormalService_QB restore()
     * @method _IH_NormalService_QB customFilter($filter)
     * @method _IH_NormalService_QB customOrder($sort)
     * @method _IH_NormalService_QB customPagination($pagination)
     */
    class _IH_NormalService_QB extends _BaseBuilder {}
    
    /**
     * @method ProductCategory|$this shift(int $count = 1)
     * @method ProductCategory|$this pop(int $count = 1)
     * @method ProductCategory|null get($key, $default = null)
     * @method ProductCategory|null pull($key, $default = null)
     * @method ProductCategory|null first(callable $callback = null, $default = null)
     * @method ProductCategory|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductCategory|null find($key, $default = null)
     * @method ProductCategory[] all()
     * @method ProductCategory|null last(callable $callback = null, $default = null)
     * @method ProductCategory|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ProductCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductCategory_QB whereId($value)
     * @method _IH_ProductCategory_QB whereParentId($value)
     * @method _IH_ProductCategory_QB whereProductCategoryName($value)
     * @method _IH_ProductCategory_QB whereProductCategoryImageUrl($value)
     * @method _IH_ProductCategory_QB whereProductCategoryableId($value)
     * @method _IH_ProductCategory_QB whereProductCategoryableType($value)
     * @method _IH_ProductCategory_QB whereProductCategoryAdditionalUserId($value)
     * @method _IH_ProductCategory_QB whereProductCategoryAdditionalUserType($value)
     * @method _IH_ProductCategory_QB whereProductCategoryAcceptStatus($value)
     * @method _IH_ProductCategory_QB whereProductCategoryPublishStatus($value)
     * @method _IH_ProductCategory_QB whereProductCategoryShowStatus($value)
     * @method _IH_ProductCategory_QB whereDeletedAt($value)
     * @method _IH_ProductCategory_QB whereCreatedAt($value)
     * @method _IH_ProductCategory_QB whereUpdatedAt($value)
     * @method ProductCategory baseSole(array|string $columns = ['*'])
     * @method ProductCategory create(array $attributes = [])
     * @method _IH_ProductCategory_C|ProductCategory[] cursor()
     * @method ProductCategory|null|_IH_ProductCategory_C|ProductCategory[] find($id, array $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrFail($id, array $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrNew($id, array $columns = ['*'])
     * @method ProductCategory first(array|string $columns = ['*'])
     * @method ProductCategory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategory firstOrFail(array $columns = ['*'])
     * @method ProductCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategory forceCreate(array $attributes)
     * @method _IH_ProductCategory_C|ProductCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategory_C|ProductCategory[] get(array|string $columns = ['*'])
     * @method ProductCategory getModel()
     * @method ProductCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] hydrate(array $items)
     * @method ProductCategory make(array $attributes = [])
     * @method ProductCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategory[]|_IH_ProductCategory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCategory[]|_IH_ProductCategory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategory sole(array|string $columns = ['*'])
     * @method ProductCategory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductCategory_QB withTrashed()
     * @method _IH_ProductCategory_QB onlyTrashed()
     * @method _IH_ProductCategory_QB withoutTrashed()
     * @method _IH_ProductCategory_QB restore()
     * @method _IH_ProductCategory_QB customFilter($filter)
     * @method _IH_ProductCategory_QB customOrder($sort)
     * @method _IH_ProductCategory_QB customPagination($pagination)
     */
    class _IH_ProductCategory_QB extends _BaseBuilder {}
    
    /**
     * @method ProductCustomerComments|$this shift(int $count = 1)
     * @method ProductCustomerComments|$this pop(int $count = 1)
     * @method ProductCustomerComments|null get($key, $default = null)
     * @method ProductCustomerComments|null pull($key, $default = null)
     * @method ProductCustomerComments|null first(callable $callback = null, $default = null)
     * @method ProductCustomerComments|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductCustomerComments|null find($key, $default = null)
     * @method ProductCustomerComments[] all()
     * @method ProductCustomerComments|null last(callable $callback = null, $default = null)
     * @method ProductCustomerComments|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ProductCustomerComments_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCustomerComments[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductCustomerComments_QB whereId($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerComment($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerRate($value)
     * @method _IH_ProductCustomerComments_QB whereUserId($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerRateWeightType($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerRateWeight($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerLastSumRate($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerLastAverageRate($value)
     * @method _IH_ProductCustomerComments_QB whereProductCommentableId($value)
     * @method _IH_ProductCustomerComments_QB whereProductCommentableType($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerCommentAccessStatus($value)
     * @method _IH_ProductCustomerComments_QB whereProductCustomerCommentStatus($value)
     * @method _IH_ProductCustomerComments_QB whereDeletedAt($value)
     * @method _IH_ProductCustomerComments_QB whereCreatedAt($value)
     * @method _IH_ProductCustomerComments_QB whereUpdatedAt($value)
     * @method ProductCustomerComments baseSole(array|string $columns = ['*'])
     * @method ProductCustomerComments create(array $attributes = [])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] cursor()
     * @method ProductCustomerComments|null|_IH_ProductCustomerComments_C|ProductCustomerComments[] find($id, array $columns = ['*'])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductCustomerComments|_IH_ProductCustomerComments_C|ProductCustomerComments[] findOrFail($id, array $columns = ['*'])
     * @method ProductCustomerComments|_IH_ProductCustomerComments_C|ProductCustomerComments[] findOrNew($id, array $columns = ['*'])
     * @method ProductCustomerComments first(array|string $columns = ['*'])
     * @method ProductCustomerComments firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductCustomerComments firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCustomerComments firstOrFail(array $columns = ['*'])
     * @method ProductCustomerComments firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCustomerComments firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCustomerComments forceCreate(array $attributes)
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] get(array|string $columns = ['*'])
     * @method ProductCustomerComments getModel()
     * @method ProductCustomerComments[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCustomerComments_C|ProductCustomerComments[] hydrate(array $items)
     * @method ProductCustomerComments make(array $attributes = [])
     * @method ProductCustomerComments newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCustomerComments[]|_IH_ProductCustomerComments_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCustomerComments[]|_IH_ProductCustomerComments_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCustomerComments sole(array|string $columns = ['*'])
     * @method ProductCustomerComments updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductCustomerComments_QB withTrashed()
     * @method _IH_ProductCustomerComments_QB onlyTrashed()
     * @method _IH_ProductCustomerComments_QB withoutTrashed()
     * @method _IH_ProductCustomerComments_QB restore()
     * @method _IH_ProductCustomerComments_QB customFilter($filter)
     * @method _IH_ProductCustomerComments_QB customOrder($sort)
     * @method _IH_ProductCustomerComments_QB customPagination($pagination)
     */
    class _IH_ProductCustomerComments_QB extends _BaseBuilder {}
    
    /**
     * @method ProductPriceHistory|$this shift(int $count = 1)
     * @method ProductPriceHistory|$this pop(int $count = 1)
     * @method ProductPriceHistory|null get($key, $default = null)
     * @method ProductPriceHistory|null pull($key, $default = null)
     * @method ProductPriceHistory|null first(callable $callback = null, $default = null)
     * @method ProductPriceHistory|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductPriceHistory|null find($key, $default = null)
     * @method ProductPriceHistory[] all()
     * @method ProductPriceHistory|null last(callable $callback = null, $default = null)
     * @method ProductPriceHistory|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ProductPriceHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductPriceHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method ProductPriceHistory baseSole(array|string $columns = ['*'])
     * @method ProductPriceHistory create(array $attributes = [])
     * @method _IH_ProductPriceHistory_C|ProductPriceHistory[] cursor()
     * @method ProductPriceHistory|null|_IH_ProductPriceHistory_C|ProductPriceHistory[] find($id, array $columns = ['*'])
     * @method _IH_ProductPriceHistory_C|ProductPriceHistory[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductPriceHistory|_IH_ProductPriceHistory_C|ProductPriceHistory[] findOrFail($id, array $columns = ['*'])
     * @method ProductPriceHistory|_IH_ProductPriceHistory_C|ProductPriceHistory[] findOrNew($id, array $columns = ['*'])
     * @method ProductPriceHistory first(array|string $columns = ['*'])
     * @method ProductPriceHistory firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductPriceHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductPriceHistory firstOrFail(array $columns = ['*'])
     * @method ProductPriceHistory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductPriceHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductPriceHistory forceCreate(array $attributes)
     * @method _IH_ProductPriceHistory_C|ProductPriceHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductPriceHistory_C|ProductPriceHistory[] get(array|string $columns = ['*'])
     * @method ProductPriceHistory getModel()
     * @method ProductPriceHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductPriceHistory_C|ProductPriceHistory[] hydrate(array $items)
     * @method ProductPriceHistory make(array $attributes = [])
     * @method ProductPriceHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductPriceHistory[]|_IH_ProductPriceHistory_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductPriceHistory[]|_IH_ProductPriceHistory_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductPriceHistory sole(array|string $columns = ['*'])
     * @method ProductPriceHistory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductPriceHistory_QB withTrashed()
     * @method _IH_ProductPriceHistory_QB onlyTrashed()
     * @method _IH_ProductPriceHistory_QB withoutTrashed()
     * @method _IH_ProductPriceHistory_QB restore()
     * @method _IH_ProductPriceHistory_QB customFilter($filter)
     * @method _IH_ProductPriceHistory_QB customOrder($sort)
     * @method _IH_ProductPriceHistory_QB customPagination($pagination)
     */
    class _IH_ProductPriceHistory_QB extends _BaseBuilder {}
    
    /**
     * @method ProductTag|$this shift(int $count = 1)
     * @method ProductTag|$this pop(int $count = 1)
     * @method ProductTag|null get($key, $default = null)
     * @method ProductTag|null pull($key, $default = null)
     * @method ProductTag|null first(callable $callback = null, $default = null)
     * @method ProductTag|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductTag|null find($key, $default = null)
     * @method ProductTag[] all()
     * @method ProductTag|null last(callable $callback = null, $default = null)
     * @method ProductTag|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ProductTag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductTag_QB whereId($value)
     * @method _IH_ProductTag_QB whereProductTagName($value)
     * @method _IH_ProductTag_QB whereProductTagImageUrl($value)
     * @method _IH_ProductTag_QB whereProductTagPublishStatus($value)
     * @method _IH_ProductTag_QB whereProductTagAcceptStatus($value)
     * @method _IH_ProductTag_QB whereProductTagAdditionalUserId($value)
     * @method _IH_ProductTag_QB whereDeletedAt($value)
     * @method _IH_ProductTag_QB whereCreatedAt($value)
     * @method _IH_ProductTag_QB whereUpdatedAt($value)
     * @method ProductTag baseSole(array|string $columns = ['*'])
     * @method ProductTag create(array $attributes = [])
     * @method _IH_ProductTag_C|ProductTag[] cursor()
     * @method ProductTag|null|_IH_ProductTag_C|ProductTag[] find($id, array $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOrFail($id, array $columns = ['*'])
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOrNew($id, array $columns = ['*'])
     * @method ProductTag first(array|string $columns = ['*'])
     * @method ProductTag firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductTag firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTag firstOrFail(array $columns = ['*'])
     * @method ProductTag firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTag forceCreate(array $attributes)
     * @method _IH_ProductTag_C|ProductTag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTag_C|ProductTag[] get(array|string $columns = ['*'])
     * @method ProductTag getModel()
     * @method ProductTag[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] hydrate(array $items)
     * @method ProductTag make(array $attributes = [])
     * @method ProductTag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTag[]|_IH_ProductTag_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTag[]|_IH_ProductTag_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTag sole(array|string $columns = ['*'])
     * @method ProductTag updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductTag_QB withTrashed()
     * @method _IH_ProductTag_QB onlyTrashed()
     * @method _IH_ProductTag_QB withoutTrashed()
     * @method _IH_ProductTag_QB restore()
     * @method _IH_ProductTag_QB customFilter($filter)
     * @method _IH_ProductTag_QB customOrder($sort)
     * @method _IH_ProductTag_QB customPagination($pagination)
     */
    class _IH_ProductTag_QB extends _BaseBuilder {}
    
    /**
     * @method ProductsImage|$this shift(int $count = 1)
     * @method ProductsImage|$this pop(int $count = 1)
     * @method ProductsImage|null get($key, $default = null)
     * @method ProductsImage|null pull($key, $default = null)
     * @method ProductsImage|null first(callable $callback = null, $default = null)
     * @method ProductsImage|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductsImage|null find($key, $default = null)
     * @method ProductsImage[] all()
     * @method ProductsImage|null last(callable $callback = null, $default = null)
     * @method ProductsImage|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ProductsImage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductsImage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductsImage_QB whereId($value)
     * @method _IH_ProductsImage_QB whereProductsImageableId($value)
     * @method _IH_ProductsImage_QB whereProductsImageableType($value)
     * @method _IH_ProductsImage_QB whereImageUrl($value)
     * @method _IH_ProductsImage_QB whereImageThumbnailUrl($value)
     * @method _IH_ProductsImage_QB whereImageIndexParam($value)
     * @method _IH_ProductsImage_QB whereImageType($value)
     * @method _IH_ProductsImage_QB whereImageFormat($value)
     * @method _IH_ProductsImage_QB whereImageSize($value)
     * @method _IH_ProductsImage_QB whereImageResolution($value)
     * @method _IH_ProductsImage_QB whereFileName($value)
     * @method _IH_ProductsImage_QB whereUploaderUserId($value)
     * @method _IH_ProductsImage_QB whereUploaderUserDate($value)
     * @method _IH_ProductsImage_QB whereActivateStatus($value)
     * @method _IH_ProductsImage_QB whereAcceptStatus($value)
     * @method _IH_ProductsImage_QB wherePublishStatus($value)
     * @method _IH_ProductsImage_QB whereDeletedAt($value)
     * @method _IH_ProductsImage_QB whereCreatedAt($value)
     * @method _IH_ProductsImage_QB whereUpdatedAt($value)
     * @method ProductsImage baseSole(array|string $columns = ['*'])
     * @method ProductsImage create(array $attributes = [])
     * @method _IH_ProductsImage_C|ProductsImage[] cursor()
     * @method ProductsImage|null|_IH_ProductsImage_C|ProductsImage[] find($id, array $columns = ['*'])
     * @method _IH_ProductsImage_C|ProductsImage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductsImage|_IH_ProductsImage_C|ProductsImage[] findOrFail($id, array $columns = ['*'])
     * @method ProductsImage|_IH_ProductsImage_C|ProductsImage[] findOrNew($id, array $columns = ['*'])
     * @method ProductsImage first(array|string $columns = ['*'])
     * @method ProductsImage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductsImage firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductsImage firstOrFail(array $columns = ['*'])
     * @method ProductsImage firstOrNew(array $attributes = [], array $values = [])
     * @method ProductsImage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductsImage forceCreate(array $attributes)
     * @method _IH_ProductsImage_C|ProductsImage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductsImage_C|ProductsImage[] get(array|string $columns = ['*'])
     * @method ProductsImage getModel()
     * @method ProductsImage[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductsImage_C|ProductsImage[] hydrate(array $items)
     * @method ProductsImage make(array $attributes = [])
     * @method ProductsImage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductsImage[]|_IH_ProductsImage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductsImage[]|_IH_ProductsImage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductsImage sole(array|string $columns = ['*'])
     * @method ProductsImage updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductsImage_QB withTrashed()
     * @method _IH_ProductsImage_QB onlyTrashed()
     * @method _IH_ProductsImage_QB withoutTrashed()
     * @method _IH_ProductsImage_QB restore()
     * @method _IH_ProductsImage_QB customFilter($filter)
     * @method _IH_ProductsImage_QB customOrder($sort)
     * @method _IH_ProductsImage_QB customPagination($pagination)
     */
    class _IH_ProductsImage_QB extends _BaseBuilder {}
    
    /**
     * @method RolesShopsUsers|$this shift(int $count = 1)
     * @method RolesShopsUsers|$this pop(int $count = 1)
     * @method RolesShopsUsers|null get($key, $default = null)
     * @method RolesShopsUsers|null pull($key, $default = null)
     * @method RolesShopsUsers|null first(callable $callback = null, $default = null)
     * @method RolesShopsUsers|null firstWhere(string $key, $operator = null, $value = null)
     * @method RolesShopsUsers|null find($key, $default = null)
     * @method RolesShopsUsers[] all()
     * @method RolesShopsUsers|null last(callable $callback = null, $default = null)
     * @method RolesShopsUsers|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_RolesShopsUsers_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RolesShopsUsers[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method RolesShopsUsers baseSole(array|string $columns = ['*'])
     * @method RolesShopsUsers create(array $attributes = [])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] cursor()
     * @method RolesShopsUsers|null|_IH_RolesShopsUsers_C|RolesShopsUsers[] find($id, array $columns = ['*'])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RolesShopsUsers|_IH_RolesShopsUsers_C|RolesShopsUsers[] findOrFail($id, array $columns = ['*'])
     * @method RolesShopsUsers|_IH_RolesShopsUsers_C|RolesShopsUsers[] findOrNew($id, array $columns = ['*'])
     * @method RolesShopsUsers first(array|string $columns = ['*'])
     * @method RolesShopsUsers firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RolesShopsUsers firstOrCreate(array $attributes = [], array $values = [])
     * @method RolesShopsUsers firstOrFail(array $columns = ['*'])
     * @method RolesShopsUsers firstOrNew(array $attributes = [], array $values = [])
     * @method RolesShopsUsers firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RolesShopsUsers forceCreate(array $attributes)
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] get(array|string $columns = ['*'])
     * @method RolesShopsUsers getModel()
     * @method RolesShopsUsers[] getModels(array|string $columns = ['*'])
     * @method _IH_RolesShopsUsers_C|RolesShopsUsers[] hydrate(array $items)
     * @method RolesShopsUsers make(array $attributes = [])
     * @method RolesShopsUsers newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RolesShopsUsers[]|_IH_RolesShopsUsers_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RolesShopsUsers[]|_IH_RolesShopsUsers_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RolesShopsUsers sole(array|string $columns = ['*'])
     * @method RolesShopsUsers updateOrCreate(array $attributes, array $values = [])
     * @method _IH_RolesShopsUsers_QB withTrashed()
     * @method _IH_RolesShopsUsers_QB onlyTrashed()
     * @method _IH_RolesShopsUsers_QB withoutTrashed()
     * @method _IH_RolesShopsUsers_QB restore()
     * @method _IH_RolesShopsUsers_QB customFilter($filter)
     * @method _IH_RolesShopsUsers_QB customOrder($sort)
     * @method _IH_RolesShopsUsers_QB customPagination($pagination)
     */
    class _IH_RolesShopsUsers_QB extends _BaseBuilder {}
    
    /**
     * @method ShopImages|$this shift(int $count = 1)
     * @method ShopImages|$this pop(int $count = 1)
     * @method ShopImages|null get($key, $default = null)
     * @method ShopImages|null pull($key, $default = null)
     * @method ShopImages|null first(callable $callback = null, $default = null)
     * @method ShopImages|null firstWhere(string $key, $operator = null, $value = null)
     * @method ShopImages|null find($key, $default = null)
     * @method ShopImages[] all()
     * @method ShopImages|null last(callable $callback = null, $default = null)
     * @method ShopImages|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ShopImages_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShopImages[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ShopImages_QB whereId($value)
     * @method _IH_ShopImages_QB whereShopId($value)
     * @method _IH_ShopImages_QB whereShopImageIndexPoint($value)
     * @method _IH_ShopImages_QB whereShopImageUrl($value)
     * @method _IH_ShopImages_QB whereShopImageType($value)
     * @method _IH_ShopImages_QB whereShopImageFormat($value)
     * @method _IH_ShopImages_QB whereShopImageSize($value)
     * @method _IH_ShopImages_QB whereShopImageResolution($value)
     * @method _IH_ShopImages_QB whereShopImageOldName($value)
     * @method _IH_ShopImages_QB whereShopImageNewName($value)
     * @method _IH_ShopImages_QB whereShopImageUploaderUserId($value)
     * @method _IH_ShopImages_QB whereShopImageAcceptStatus($value)
     * @method _IH_ShopImages_QB whereShopImageActiveStatus($value)
     * @method _IH_ShopImages_QB whereShopImagePublishStatus($value)
     * @method _IH_ShopImages_QB whereShopImageThumbnailUrl($value)
     * @method _IH_ShopImages_QB whereShopImageThumbnailName($value)
     * @method _IH_ShopImages_QB whereDeletedAt($value)
     * @method _IH_ShopImages_QB whereCreatedAt($value)
     * @method _IH_ShopImages_QB whereUpdatedAt($value)
     * @method ShopImages baseSole(array|string $columns = ['*'])
     * @method ShopImages create(array $attributes = [])
     * @method _IH_ShopImages_C|ShopImages[] cursor()
     * @method ShopImages|null|_IH_ShopImages_C|ShopImages[] find($id, array $columns = ['*'])
     * @method _IH_ShopImages_C|ShopImages[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ShopImages|_IH_ShopImages_C|ShopImages[] findOrFail($id, array $columns = ['*'])
     * @method ShopImages|_IH_ShopImages_C|ShopImages[] findOrNew($id, array $columns = ['*'])
     * @method ShopImages first(array|string $columns = ['*'])
     * @method ShopImages firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ShopImages firstOrCreate(array $attributes = [], array $values = [])
     * @method ShopImages firstOrFail(array $columns = ['*'])
     * @method ShopImages firstOrNew(array $attributes = [], array $values = [])
     * @method ShopImages firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShopImages forceCreate(array $attributes)
     * @method _IH_ShopImages_C|ShopImages[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShopImages_C|ShopImages[] get(array|string $columns = ['*'])
     * @method ShopImages getModel()
     * @method ShopImages[] getModels(array|string $columns = ['*'])
     * @method _IH_ShopImages_C|ShopImages[] hydrate(array $items)
     * @method ShopImages make(array $attributes = [])
     * @method ShopImages newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShopImages[]|_IH_ShopImages_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShopImages[]|_IH_ShopImages_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShopImages sole(array|string $columns = ['*'])
     * @method ShopImages updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ShopImages_QB withTrashed()
     * @method _IH_ShopImages_QB onlyTrashed()
     * @method _IH_ShopImages_QB withoutTrashed()
     * @method _IH_ShopImages_QB restore()
     * @method _IH_ShopImages_QB customFilter($filter)
     * @method _IH_ShopImages_QB customOrder($sort)
     * @method _IH_ShopImages_QB customPagination($pagination)
     */
    class _IH_ShopImages_QB extends _BaseBuilder {}
    
    /**
     * @method Shop|$this shift(int $count = 1)
     * @method Shop|$this pop(int $count = 1)
     * @method Shop|null get($key, $default = null)
     * @method Shop|null pull($key, $default = null)
     * @method Shop|null first(callable $callback = null, $default = null)
     * @method Shop|null firstWhere(string $key, $operator = null, $value = null)
     * @method Shop|null find($key, $default = null)
     * @method Shop[] all()
     * @method Shop|null last(callable $callback = null, $default = null)
     * @method Shop|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Shop_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Shop[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Shop_QB whereId($value)
     * @method _IH_Shop_QB whereParentId($value)
     * @method _IH_Shop_QB whereParentType($value)
     * @method _IH_Shop_QB whereShopCategoryId($value)
     * @method _IH_Shop_QB whereName($value)
     * @method _IH_Shop_QB whereDescription($value)
     * @method _IH_Shop_QB whereShopAcceptStatus($value)
     * @method _IH_Shop_QB whereShopPriority($value)
     * @method _IH_Shop_QB whereShopPhotoUrl($value)
     * @method _IH_Shop_QB whereTypeLocation($value)
     * @method _IH_Shop_QB whereLatLocation($value)
     * @method _IH_Shop_QB whereLongLocation($value)
     * @method _IH_Shop_QB whereShopCountry($value)
     * @method _IH_Shop_QB whereShopProvince($value)
     * @method _IH_Shop_QB whereShopCity($value)
     * @method _IH_Shop_QB whereShopLocal($value)
     * @method _IH_Shop_QB whereShopStreet($value)
     * @method _IH_Shop_QB whereShopAlley($value)
     * @method _IH_Shop_QB whereShopNumber($value)
     * @method _IH_Shop_QB whereShopPostalCode($value)
     * @method _IH_Shop_QB whereShopMainPhoneNumber($value)
     * @method _IH_Shop_QB whereDeletedAt($value)
     * @method _IH_Shop_QB whereCreatedAt($value)
     * @method _IH_Shop_QB whereUpdatedAt($value)
     * @method Shop baseSole(array|string $columns = ['*'])
     * @method Shop create(array $attributes = [])
     * @method _IH_Shop_C|Shop[] cursor()
     * @method Shop|null|_IH_Shop_C|Shop[] find($id, array $columns = ['*'])
     * @method _IH_Shop_C|Shop[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Shop|_IH_Shop_C|Shop[] findOrFail($id, array $columns = ['*'])
     * @method Shop|_IH_Shop_C|Shop[] findOrNew($id, array $columns = ['*'])
     * @method Shop first(array|string $columns = ['*'])
     * @method Shop firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Shop firstOrCreate(array $attributes = [], array $values = [])
     * @method Shop firstOrFail(array $columns = ['*'])
     * @method Shop firstOrNew(array $attributes = [], array $values = [])
     * @method Shop firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Shop forceCreate(array $attributes)
     * @method _IH_Shop_C|Shop[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Shop_C|Shop[] get(array|string $columns = ['*'])
     * @method Shop getModel()
     * @method Shop[] getModels(array|string $columns = ['*'])
     * @method _IH_Shop_C|Shop[] hydrate(array $items)
     * @method Shop make(array $attributes = [])
     * @method Shop newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Shop[]|_IH_Shop_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Shop[]|_IH_Shop_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Shop sole(array|string $columns = ['*'])
     * @method Shop updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Shop_QB withTrashed()
     * @method _IH_Shop_QB onlyTrashed()
     * @method _IH_Shop_QB withoutTrashed()
     * @method _IH_Shop_QB restore()
     * @method _IH_Shop_QB customFilter($filter)
     * @method _IH_Shop_QB customOrder($sort)
     * @method _IH_Shop_QB customPagination($pagination)
     * @method _IH_Shop_QB order($sort, $order)
     * @method _IH_Shop_QB shopAcceptStatus($status)
     * @method _IH_Shop_QB shopAccepted()
     * @method _IH_Shop_QB shopRejected()
     */
    class _IH_Shop_QB extends _BaseBuilder {}
    
    /**
     * @method Tag|$this shift(int $count = 1)
     * @method Tag|$this pop(int $count = 1)
     * @method Tag|null get($key, $default = null)
     * @method Tag|null pull($key, $default = null)
     * @method Tag|null first(callable $callback = null, $default = null)
     * @method Tag|null firstWhere(string $key, $operator = null, $value = null)
     * @method Tag|null find($key, $default = null)
     * @method Tag[] all()
     * @method Tag|null last(callable $callback = null, $default = null)
     * @method Tag|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Tag baseSole(array|string $columns = ['*'])
     * @method Tag create(array $attributes = [])
     * @method _IH_Tag_C|Tag[] cursor()
     * @method Tag|null|_IH_Tag_C|Tag[] find($id, array $columns = ['*'])
     * @method _IH_Tag_C|Tag[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrFail($id, array $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrNew($id, array $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method Tag firstOrFail(array $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _IH_Tag_C|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] hydrate(array $items)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tag[]|_IH_Tag_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag sole(array|string $columns = ['*'])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Tag_QB withTrashed()
     * @method _IH_Tag_QB onlyTrashed()
     * @method _IH_Tag_QB withoutTrashed()
     * @method _IH_Tag_QB restore()
     * @method _IH_Tag_QB customFilter($filter)
     * @method _IH_Tag_QB customOrder($sort)
     * @method _IH_Tag_QB customPagination($pagination)
     */
    class _IH_Tag_QB extends _BaseBuilder {}
    
    /**
     * @method Task|$this shift(int $count = 1)
     * @method Task|$this pop(int $count = 1)
     * @method Task|null get($key, $default = null)
     * @method Task|null pull($key, $default = null)
     * @method Task|null first(callable $callback = null, $default = null)
     * @method Task|null firstWhere(string $key, $operator = null, $value = null)
     * @method Task|null find($key, $default = null)
     * @method Task[] all()
     * @method Task|null last(callable $callback = null, $default = null)
     * @method Task|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Task_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Task[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Task_QB whereId($value)
     * @method _IH_Task_QB whereTaskName($value)
     * @method _IH_Task_QB whereTaskDescription($value)
     * @method _IH_Task_QB whereTaskInfo($value)
     * @method _IH_Task_QB whereTaskNote($value)
     * @method _IH_Task_QB whereTaskStatusAccept($value)
     * @method _IH_Task_QB whereTaskStatusConfirmUserId($value)
     * @method _IH_Task_QB whereCustomServicesId($value)
     * @method _IH_Task_QB whereTaskStatusConfirmUserComment($value)
     * @method _IH_Task_QB whereTaskStatusPublish($value)
     * @method _IH_Task_QB whereTaskStatusPublishDate($value)
     * @method _IH_Task_QB whereTaskLastBasePrice($value)
     * @method _IH_Task_QB whereTaskLastBasePriceDate($value)
     * @method _IH_Task_QB whereTaskStatusBasePriceDiscount($value)
     * @method _IH_Task_QB whereTaskLastBasePriceDiscountPercentage($value)
     * @method _IH_Task_QB whereTaskLastBasePriceDiscountType($value)
     * @method _IH_Task_QB whereTaskUnitOfMeasurementId($value)
     * @method _IH_Task_QB whereTaskUnitOfMeasurementName($value)
     * @method _IH_Task_QB whereTaskIndexImageUrl($value)
     * @method _IH_Task_QB whereTaskCategoryId($value)
     * @method _IH_Task_QB whereTaskCategoryName($value)
     * @method _IH_Task_QB whereTaskShopId($value)
     * @method _IH_Task_QB whereTaskRegistryUserId($value)
     * @method _IH_Task_QB whereTaskQuantitySold($value)
     * @method _IH_Task_QB whereTaskQuantitySelling($value)
     * @method _IH_Task_QB whereTaskQuantityReturned($value)
     * @method _IH_Task_QB whereTaskNumberComments($value)
     * @method _IH_Task_QB whereTaskTotalPoints($value)
     * @method _IH_Task_QB whereTaskAveragePoints($value)
     * @method _IH_Task_QB whereTaskLastPoint($value)
     * @method _IH_Task_QB whereDeletedAt($value)
     * @method _IH_Task_QB whereCreatedAt($value)
     * @method _IH_Task_QB whereUpdatedAt($value)
     * @method Task baseSole(array|string $columns = ['*'])
     * @method Task create(array $attributes = [])
     * @method _IH_Task_C|Task[] cursor()
     * @method Task|null|_IH_Task_C|Task[] find($id, array $columns = ['*'])
     * @method _IH_Task_C|Task[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Task|_IH_Task_C|Task[] findOrFail($id, array $columns = ['*'])
     * @method Task|_IH_Task_C|Task[] findOrNew($id, array $columns = ['*'])
     * @method Task first(array|string $columns = ['*'])
     * @method Task firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Task firstOrCreate(array $attributes = [], array $values = [])
     * @method Task firstOrFail(array $columns = ['*'])
     * @method Task firstOrNew(array $attributes = [], array $values = [])
     * @method Task firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Task forceCreate(array $attributes)
     * @method _IH_Task_C|Task[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Task_C|Task[] get(array|string $columns = ['*'])
     * @method Task getModel()
     * @method Task[] getModels(array|string $columns = ['*'])
     * @method _IH_Task_C|Task[] hydrate(array $items)
     * @method Task make(array $attributes = [])
     * @method Task newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Task[]|_IH_Task_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Task[]|_IH_Task_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Task sole(array|string $columns = ['*'])
     * @method Task updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Task_QB withTrashed()
     * @method _IH_Task_QB onlyTrashed()
     * @method _IH_Task_QB withoutTrashed()
     * @method _IH_Task_QB restore()
     * @method _IH_Task_QB customFilter($filter)
     * @method _IH_Task_QB customOrder($sort)
     * @method _IH_Task_QB customPagination($pagination)
     */
    class _IH_Task_QB extends _BaseBuilder {}
    
    /**
     * @method TeamInvitation|$this shift(int $count = 1)
     * @method TeamInvitation|$this pop(int $count = 1)
     * @method TeamInvitation|null get($key, $default = null)
     * @method TeamInvitation|null pull($key, $default = null)
     * @method TeamInvitation|null first(callable $callback = null, $default = null)
     * @method TeamInvitation|null firstWhere(string $key, $operator = null, $value = null)
     * @method TeamInvitation|null find($key, $default = null)
     * @method TeamInvitation[] all()
     * @method TeamInvitation|null last(callable $callback = null, $default = null)
     * @method TeamInvitation|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TeamInvitation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation|null|_IH_TeamInvitation_C|TeamInvitation[] find($id, array $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrFail($id, array $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrNew($id, array $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}
    
    /**
     * @method Team|$this shift(int $count = 1)
     * @method Team|$this pop(int $count = 1)
     * @method Team|null get($key, $default = null)
     * @method Team|null pull($key, $default = null)
     * @method Team|null first(callable $callback = null, $default = null)
     * @method Team|null firstWhere(string $key, $operator = null, $value = null)
     * @method Team|null find($key, $default = null)
     * @method Team[] all()
     * @method Team|null last(callable $callback = null, $default = null)
     * @method Team|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Team_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Team[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Team baseSole(array|string $columns = ['*'])
     * @method Team create(array $attributes = [])
     * @method _IH_Team_C|Team[] cursor()
     * @method Team|null|_IH_Team_C|Team[] find($id, array $columns = ['*'])
     * @method _IH_Team_C|Team[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOrFail($id, array $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOrNew($id, array $columns = ['*'])
     * @method Team first(array|string $columns = ['*'])
     * @method Team firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Team firstOrCreate(array $attributes = [], array $values = [])
     * @method Team firstOrFail(array $columns = ['*'])
     * @method Team firstOrNew(array $attributes = [], array $values = [])
     * @method Team firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Team forceCreate(array $attributes)
     * @method _IH_Team_C|Team[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Team_C|Team[] get(array|string $columns = ['*'])
     * @method Team getModel()
     * @method Team[] getModels(array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] hydrate(array $items)
     * @method Team make(array $attributes = [])
     * @method Team newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Team[]|_IH_Team_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Team[]|_IH_Team_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Team sole(array|string $columns = ['*'])
     * @method Team updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Team_QB extends _BaseBuilder {}
    
    /**
     * @method TopModel|$this shift(int $count = 1)
     * @method TopModel|$this pop(int $count = 1)
     * @method TopModel|null get($key, $default = null)
     * @method TopModel|null pull($key, $default = null)
     * @method TopModel|null first(callable $callback = null, $default = null)
     * @method TopModel|null firstWhere(string $key, $operator = null, $value = null)
     * @method TopModel|null find($key, $default = null)
     * @method TopModel[] all()
     * @method TopModel|null last(callable $callback = null, $default = null)
     * @method TopModel|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_TopModel_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TopModel[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method TopModel baseSole(array|string $columns = ['*'])
     * @method TopModel create(array $attributes = [])
     * @method _IH_TopModel_C|TopModel[] cursor()
     * @method TopModel|null|_IH_TopModel_C|TopModel[] find($id, array $columns = ['*'])
     * @method _IH_TopModel_C|TopModel[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TopModel|_IH_TopModel_C|TopModel[] findOrFail($id, array $columns = ['*'])
     * @method TopModel|_IH_TopModel_C|TopModel[] findOrNew($id, array $columns = ['*'])
     * @method TopModel first(array|string $columns = ['*'])
     * @method TopModel firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TopModel firstOrCreate(array $attributes = [], array $values = [])
     * @method TopModel firstOrFail(array $columns = ['*'])
     * @method TopModel firstOrNew(array $attributes = [], array $values = [])
     * @method TopModel firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TopModel forceCreate(array $attributes)
     * @method _IH_TopModel_C|TopModel[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TopModel_C|TopModel[] get(array|string $columns = ['*'])
     * @method TopModel getModel()
     * @method TopModel[] getModels(array|string $columns = ['*'])
     * @method _IH_TopModel_C|TopModel[] hydrate(array $items)
     * @method TopModel make(array $attributes = [])
     * @method TopModel newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TopModel[]|_IH_TopModel_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TopModel[]|_IH_TopModel_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TopModel sole(array|string $columns = ['*'])
     * @method TopModel updateOrCreate(array $attributes, array $values = [])
     * @method _IH_TopModel_QB customFilter($filter)
     * @method _IH_TopModel_QB customOrder($sort)
     * @method _IH_TopModel_QB customPagination($pagination)
     */
    class _IH_TopModel_QB extends _BaseBuilder {}
    
    /**
     * @method User|$this shift(int $count = 1)
     * @method User|$this pop(int $count = 1)
     * @method User|null get($key, $default = null)
     * @method User|null pull($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereLastName($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB whereMobile($value)
     * @method _IH_User_QB whereMobileVerifiedAt($value)
     * @method _IH_User_QB whereMobileVerifiedCode($value)
     * @method _IH_User_QB whereMobileVerifiedCodeExpireTime($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCurrentTeamId($value)
     * @method _IH_User_QB whereProfilePhotoPath($value)
     * @method _IH_User_QB whereDisableBy($value)
     * @method _IH_User_QB whereDisableAt($value)
     * @method _IH_User_QB whereDeletedAt($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereTwoFactorSecret($value)
     * @method _IH_User_QB whereTwoFactorRecoveryCodes($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB withTrashed()
     * @method _IH_User_QB onlyTrashed()
     * @method _IH_User_QB withoutTrashed()
     * @method _IH_User_QB restore()
     * @method _IH_User_QB customFilter($filter)
     * @method _IH_User_QB customOrder($sort)
     * @method _IH_User_QB customPagination($pagination)
     * @method _IH_User_QB permission(array|Collection|Permission|string $permissions)
     * @method _IH_User_QB role(array|Collection|Role|string $roles, string $guard = null)
     */
    class _IH_User_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method DatabaseNotification|$this shift(int $count = 1)
     * @method DatabaseNotification|$this pop(int $count = 1)
     * @method DatabaseNotification|null get($key, $default = null)
     * @method DatabaseNotification|null pull($key, $default = null)
     * @method DatabaseNotification|null first(callable $callback = null, $default = null)
     * @method DatabaseNotification|null firstWhere(string $key, $operator = null, $value = null)
     * @method DatabaseNotification|null find($key, $default = null)
     * @method DatabaseNotification[] all()
     * @method DatabaseNotification|null last(callable $callback = null, $default = null)
     * @method DatabaseNotification|null sole($key = null, $operator = null, $value = null)
     * @mixin DatabaseNotificationCollection
     */
    class _IH_DatabaseNotification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method DatabaseNotification baseSole(array|string $columns = ['*'])
     * @method DatabaseNotification create(array $attributes = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null|_IH_DatabaseNotification_C|DatabaseNotification[] find($id, array $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOrFail($id, array $columns = ['*'])
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOrNew($id, array $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstOrFail(array $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DatabaseNotification[]|_IH_DatabaseNotification_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DatabaseNotification[]|_IH_DatabaseNotification_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DatabaseNotification sole(array|string $columns = ['*'])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_DatabaseNotification_QB read()
     * @method _IH_DatabaseNotification_QB unread()
     */
    class _IH_DatabaseNotification_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Laravel\Jetstream {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Jetstream\TeamInvitation;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method TeamInvitation|$this shift(int $count = 1)
     * @method TeamInvitation|$this pop(int $count = 1)
     * @method TeamInvitation|null get($key, $default = null)
     * @method TeamInvitation|null pull($key, $default = null)
     * @method TeamInvitation|null first(callable $callback = null, $default = null)
     * @method TeamInvitation|null firstWhere(string $key, $operator = null, $value = null)
     * @method TeamInvitation|null find($key, $default = null)
     * @method TeamInvitation[] all()
     * @method TeamInvitation|null last(callable $callback = null, $default = null)
     * @method TeamInvitation|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TeamInvitation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method TeamInvitation baseSole(array|string $columns = ['*'])
     * @method TeamInvitation create(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation|null|_IH_TeamInvitation_C|TeamInvitation[] find($id, array $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrFail($id, array $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrNew($id, array $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}
}

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

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method PersonalAccessToken|$this shift(int $count = 1)
     * @method PersonalAccessToken|$this pop(int $count = 1)
     * @method PersonalAccessToken|null get($key, $default = null)
     * @method PersonalAccessToken|null pull($key, $default = null)
     * @method PersonalAccessToken|null first(callable $callback = null, $default = null)
     * @method PersonalAccessToken|null firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessToken|null find($key, $default = null)
     * @method PersonalAccessToken[] all()
     * @method PersonalAccessToken|null last(callable $callback = null, $default = null)
     * @method PersonalAccessToken|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_PersonalAccessToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PersonalAccessToken_QB whereId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableType($value)
     * @method _IH_PersonalAccessToken_QB whereName($value)
     * @method _IH_PersonalAccessToken_QB whereToken($value)
     * @method _IH_PersonalAccessToken_QB whereAbilities($value)
     * @method _IH_PersonalAccessToken_QB whereLastUsedAt($value)
     * @method _IH_PersonalAccessToken_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessToken_QB whereUpdatedAt($value)
     * @method PersonalAccessToken baseSole(array|string $columns = ['*'])
     * @method PersonalAccessToken create(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken|null|_IH_PersonalAccessToken_C|PersonalAccessToken[] find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessToken first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] hydrate(array $items)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessToken_QB extends _BaseBuilder {}
}

namespace LaravelIdea\Helper\Spatie\Permission\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission as Permission1;
    use Spatie\Permission\Contracts\Role;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role as Role1;
    
    /**
     * @method Permission|$this shift(int $count = 1)
     * @method Permission|$this pop(int $count = 1)
     * @method Permission|null get($key, $default = null)
     * @method Permission|null pull($key, $default = null)
     * @method Permission|null first(callable $callback = null, $default = null)
     * @method Permission|null firstWhere(string $key, $operator = null, $value = null)
     * @method Permission|null find($key, $default = null)
     * @method Permission[] all()
     * @method Permission|null last(callable $callback = null, $default = null)
     * @method Permission|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Permission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Permission_QB whereId($value)
     * @method _IH_Permission_QB whereName($value)
     * @method _IH_Permission_QB whereGuardName($value)
     * @method _IH_Permission_QB whereCreatedAt($value)
     * @method _IH_Permission_QB whereUpdatedAt($value)
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission|null|_IH_Permission_C|Permission[] find($id, array $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrFail($id, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Permission_QB permission(array|Collection|Permission1|string $permissions)
     * @method _IH_Permission_QB role(array|Collection|Role|string $roles, string $guard = null)
     */
    class _IH_Permission_QB extends _BaseBuilder {}
    
    /**
     * @method Role1|$this shift(int $count = 1)
     * @method Role1|$this pop(int $count = 1)
     * @method Role1|null get($key, $default = null)
     * @method Role1|null pull($key, $default = null)
     * @method Role1|null first(callable $callback = null, $default = null)
     * @method Role1|null firstWhere(string $key, $operator = null, $value = null)
     * @method Role1|null find($key, $default = null)
     * @method Role1[] all()
     * @method Role1|null last(callable $callback = null, $default = null)
     * @method Role1|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role1[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereGuardName($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role1 baseSole(array|string $columns = ['*'])
     * @method Role1 create(array $attributes = [])
     * @method _IH_Role_C|Role1[] cursor()
     * @method Role1|null|_IH_Role_C|Role1[] find($id, array $columns = ['*'])
     * @method _IH_Role_C|Role1[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role1|_IH_Role_C|Role1[] findOrFail($id, array $columns = ['*'])
     * @method Role1|_IH_Role_C|Role1[] findOrNew($id, array $columns = ['*'])
     * @method Role1 first(array|string $columns = ['*'])
     * @method Role1 firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role1 firstOrCreate(array $attributes = [], array $values = [])
     * @method Role1 firstOrFail(array $columns = ['*'])
     * @method Role1 firstOrNew(array $attributes = [], array $values = [])
     * @method Role1 firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role1 forceCreate(array $attributes)
     * @method _IH_Role_C|Role1[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role1[] get(array|string $columns = ['*'])
     * @method Role1 getModel()
     * @method Role1[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role1[] hydrate(array $items)
     * @method Role1 make(array $attributes = [])
     * @method Role1 newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role1[]|_IH_Role_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role1[]|_IH_Role_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role1 sole(array|string $columns = ['*'])
     * @method Role1 updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Role_QB permission(array|Collection|Permission1|string $permissions)
     */
    class _IH_Role_QB extends _BaseBuilder {}
}