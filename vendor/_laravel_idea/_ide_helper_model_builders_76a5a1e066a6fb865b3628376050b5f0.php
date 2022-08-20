<?php //0253ca6b4626ba7f249e4947fbd1da1d
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Access;
    use App\Models\AccessWork;
    use App\Models\Account;
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
    use App\Models\ParentableTypeConditions;
    use App\Models\ProductCategory;
    use App\Models\ProductCustomerComments;
    use App\Models\ProductPriceHistory;
    use App\Models\ProductsImage;
    use App\Models\ProductTag;
    use App\Models\RelationShop;
    use App\Models\RolesShopsUsers;
    use App\Models\Shop;
    use App\Models\ShopImages;
    use App\Models\ShopParentableType;
    use App\Models\ShopsRelationParentableTypes;
    use App\Models\ShopWork;
    use App\Models\Tag;
    use App\Models\Task;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\TopModel;
    use App\Models\User;
    use App\Models\Work;
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
     * @method AccessWork|$this shift(int $count = 1)
     * @method AccessWork|$this pop(int $count = 1)
     * @method AccessWork|null get($key, $default = null)
     * @method AccessWork|null pull($key, $default = null)
     * @method AccessWork|null first(callable $callback = null, $default = null)
     * @method AccessWork|null firstWhere(string $key, $operator = null, $value = null)
     * @method AccessWork|null find($key, $default = null)
     * @method AccessWork[] all()
     * @method AccessWork|null last(callable $callback = null, $default = null)
     * @method AccessWork|$this random(int|null $number = null)
     * @method AccessWork|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_AccessWork_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AccessWork[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AccessWork_QB whereId($value)
     * @method _IH_AccessWork_QB whereWorkId($value)
     * @method _IH_AccessWork_QB whereWorkName($value)
     * @method _IH_AccessWork_QB whereWorkTitle($value)
     * @method _IH_AccessWork_QB whereAccessId($value)
     * @method _IH_AccessWork_QB whereAccessTitle($value)
     * @method _IH_AccessWork_QB whereAccessWorkAcceptStatus($value)
     * @method _IH_AccessWork_QB whereAccessWorkPublishStatus($value)
     * @method _IH_AccessWork_QB whereAccessWorkShowStatus($value)
     * @method _IH_AccessWork_QB whereDeletedAt($value)
     * @method _IH_AccessWork_QB whereCreatedAt($value)
     * @method _IH_AccessWork_QB whereUpdatedAt($value)
     * @method AccessWork baseSole(array|string $columns = ['*'])
     * @method AccessWork create(array $attributes = [])
     * @method _IH_AccessWork_C|AccessWork[] cursor()
     * @method AccessWork|null|_IH_AccessWork_C|AccessWork[] find($id, array $columns = ['*'])
     * @method _IH_AccessWork_C|AccessWork[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method AccessWork|_IH_AccessWork_C|AccessWork[] findOrFail($id, array $columns = ['*'])
     * @method AccessWork|_IH_AccessWork_C|AccessWork[] findOrNew($id, array $columns = ['*'])
     * @method AccessWork first(array|string $columns = ['*'])
     * @method AccessWork firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method AccessWork firstOrCreate(array $attributes = [], array $values = [])
     * @method AccessWork firstOrFail(array $columns = ['*'])
     * @method AccessWork firstOrNew(array $attributes = [], array $values = [])
     * @method AccessWork firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AccessWork forceCreate(array $attributes)
     * @method _IH_AccessWork_C|AccessWork[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AccessWork_C|AccessWork[] get(array|string $columns = ['*'])
     * @method AccessWork getModel()
     * @method AccessWork[] getModels(array|string $columns = ['*'])
     * @method _IH_AccessWork_C|AccessWork[] hydrate(array $items)
     * @method AccessWork make(array $attributes = [])
     * @method AccessWork newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AccessWork[]|_IH_AccessWork_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AccessWork[]|_IH_AccessWork_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AccessWork sole(array|string $columns = ['*'])
     * @method AccessWork updateOrCreate(array $attributes, array $values = [])
     * @method _IH_AccessWork_QB withTrashed()
     * @method _IH_AccessWork_QB onlyTrashed()
     * @method _IH_AccessWork_QB withoutTrashed()
     * @method _IH_AccessWork_QB restore()
     */
    class _IH_AccessWork_QB extends _BaseBuilder {}
    
    /**
     * @method Access|$this shift(int $count = 1)
     * @method Access|$this pop(int $count = 1)
     * @method Access|null get($key, $default = null)
     * @method Access|null pull($key, $default = null)
     * @method Access|null first(callable $callback = null, $default = null)
     * @method Access|null firstWhere(string $key, $operator = null, $value = null)
     * @method Access|null find($key, $default = null)
     * @method Access[] all()
     * @method Access|null last(callable $callback = null, $default = null)
     * @method Access|$this random(int|null $number = null)
     * @method Access|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Access_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Access[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Access_QB whereId($value)
     * @method _IH_Access_QB whereTitle($value)
     * @method _IH_Access_QB whereFarsiName($value)
     * @method _IH_Access_QB whereEnglishName($value)
     * @method _IH_Access_QB whereAccessType($value)
     * @method _IH_Access_QB whereAccessAcceptStatus($value)
     * @method _IH_Access_QB whereAccessActivationStatus($value)
     * @method _IH_Access_QB whereAccessActivatorAdminId($value)
     * @method _IH_Access_QB whereAccessActivatorCommentId($value)
     * @method _IH_Access_QB whereAccessActivatorCommentValue($value)
     * @method _IH_Access_QB whereAccessOptionStatus($value)
     * @method _IH_Access_QB whereDeletedAt($value)
     * @method _IH_Access_QB whereCreatedAt($value)
     * @method _IH_Access_QB whereUpdatedAt($value)
     * @method Access baseSole(array|string $columns = ['*'])
     * @method Access create(array $attributes = [])
     * @method _IH_Access_C|Access[] cursor()
     * @method Access|null|_IH_Access_C|Access[] find($id, array $columns = ['*'])
     * @method _IH_Access_C|Access[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Access|_IH_Access_C|Access[] findOrFail($id, array $columns = ['*'])
     * @method Access|_IH_Access_C|Access[] findOrNew($id, array $columns = ['*'])
     * @method Access first(array|string $columns = ['*'])
     * @method Access firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Access firstOrCreate(array $attributes = [], array $values = [])
     * @method Access firstOrFail(array $columns = ['*'])
     * @method Access firstOrNew(array $attributes = [], array $values = [])
     * @method Access firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Access forceCreate(array $attributes)
     * @method _IH_Access_C|Access[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Access_C|Access[] get(array|string $columns = ['*'])
     * @method Access getModel()
     * @method Access[] getModels(array|string $columns = ['*'])
     * @method _IH_Access_C|Access[] hydrate(array $items)
     * @method Access make(array $attributes = [])
     * @method Access newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Access[]|_IH_Access_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Access[]|_IH_Access_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Access sole(array|string $columns = ['*'])
     * @method Access updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Access_QB withTrashed()
     * @method _IH_Access_QB onlyTrashed()
     * @method _IH_Access_QB withoutTrashed()
     * @method _IH_Access_QB restore()
     * @method _IH_Access_QB customFilter($filter)
     * @method _IH_Access_QB customOrder($sort)
     * @method _IH_Access_QB customPagination($pagination)
     */
    class _IH_Access_QB extends _BaseBuilder {}
    
    /**
     * @method Account|$this shift(int $count = 1)
     * @method Account|$this pop(int $count = 1)
     * @method Account|null get($key, $default = null)
     * @method Account|null pull($key, $default = null)
     * @method Account|null first(callable $callback = null, $default = null)
     * @method Account|null firstWhere(string $key, $operator = null, $value = null)
     * @method Account|null find($key, $default = null)
     * @method Account[] all()
     * @method Account|null last(callable $callback = null, $default = null)
     * @method Account|$this random(int|null $number = null)
     * @method Account|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Account_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Account[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Account_QB whereId($value)
     * @method _IH_Account_QB whereAccountName($value)
     * @method _IH_Account_QB whereUserId($value)
     * @method _IH_Account_QB whereRoleId($value)
     * @method _IH_Account_QB whereShopId($value)
     * @method _IH_Account_QB whereShopAccountSize($value)
     * @method _IH_Account_QB whereShopAccountType($value)
     * @method _IH_Account_QB whereAccountType($value)
     * @method _IH_Account_QB whereAccountUniqueValue($value)
     * @method _IH_Account_QB whereAccountConfirmUserId($value)
     * @method _IH_Account_QB whereAccountStatusConfirmUser($value)
     * @method _IH_Account_QB whereAccountConfirmShopkeeperId($value)
     * @method _IH_Account_QB whereAccountStatusConfirmShopkeeper($value)
     * @method _IH_Account_QB whereAccountActiveByUserId($value)
     * @method _IH_Account_QB whereAccountActiveAt($value)
     * @method _IH_Account_QB whereDeletedAt($value)
     * @method _IH_Account_QB whereCreatedAt($value)
     * @method _IH_Account_QB whereUpdatedAt($value)
     * @method Account baseSole(array|string $columns = ['*'])
     * @method Account create(array $attributes = [])
     * @method _IH_Account_C|Account[] cursor()
     * @method Account|null|_IH_Account_C|Account[] find($id, array $columns = ['*'])
     * @method _IH_Account_C|Account[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Account|_IH_Account_C|Account[] findOrFail($id, array $columns = ['*'])
     * @method Account|_IH_Account_C|Account[] findOrNew($id, array $columns = ['*'])
     * @method Account first(array|string $columns = ['*'])
     * @method Account firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Account firstOrCreate(array $attributes = [], array $values = [])
     * @method Account firstOrFail(array $columns = ['*'])
     * @method Account firstOrNew(array $attributes = [], array $values = [])
     * @method Account firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Account forceCreate(array $attributes)
     * @method _IH_Account_C|Account[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Account_C|Account[] get(array|string $columns = ['*'])
     * @method Account getModel()
     * @method Account[] getModels(array|string $columns = ['*'])
     * @method _IH_Account_C|Account[] hydrate(array $items)
     * @method Account make(array $attributes = [])
     * @method Account newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Account[]|_IH_Account_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Account[]|_IH_Account_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Account sole(array|string $columns = ['*'])
     * @method Account updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Account_QB withTrashed()
     * @method _IH_Account_QB onlyTrashed()
     * @method _IH_Account_QB withoutTrashed()
     * @method _IH_Account_QB restore()
     */
    class _IH_Account_QB extends _BaseBuilder {}
    
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
     * @method AttributeValue|$this random(int|null $number = null)
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
     * @method Attribute|$this random(int|null $number = null)
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
     * @method Category|$this random(int|null $number = null)
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
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereParentId($value)
     * @method _IH_Category_QB whereShopCategoryName($value)
     * @method _IH_Category_QB whereShopCategoryImageUrl($value)
     * @method _IH_Category_QB whereShopCategoryAcceptStatus($value)
     * @method _IH_Category_QB whereShopCategoryPublishStatus($value)
     * @method _IH_Category_QB whereShopCategoryShowStatus($value)
     * @method _IH_Category_QB whereShopCategoryAdditionalUserId($value)
     * @method _IH_Category_QB whereShopCategoryConfirmUserId($value)
     * @method _IH_Category_QB whereShopCategoryConfirmCommentId($value)
     * @method _IH_Category_QB whereShopCategoryConfirmCommentValue($value)
     * @method _IH_Category_QB whereDeletedAt($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
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
     * @method ConfirmComment|$this random(int|null $number = null)
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
     * @method CustomProduct|$this random(int|null $number = null)
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
     * @method CustomService|$this random(int|null $number = null)
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
     * @method _IH_CustomService_QB whereCustomServiceCategoryId($value)
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
     * @method Detail|$this random(int|null $number = null)
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
     * @method _IH_Detail_QB wherePriceable($value)
     * @method _IH_Detail_QB wherePriceType($value)
     * @method _IH_Detail_QB wherePriceId($value)
     * @method _IH_Detail_QB wherePriceValue($value)
     * @method _IH_Detail_QB whereDetailType($value)
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
     * @method Membership|$this random(int|null $number = null)
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
     * @method NormalProduct|$this random(int|null $number = null)
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
     * @method NormalService|$this random(int|null $number = null)
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
     * @method ParentableTypeConditions|$this shift(int $count = 1)
     * @method ParentableTypeConditions|$this pop(int $count = 1)
     * @method ParentableTypeConditions|null get($key, $default = null)
     * @method ParentableTypeConditions|null pull($key, $default = null)
     * @method ParentableTypeConditions|null first(callable $callback = null, $default = null)
     * @method ParentableTypeConditions|null firstWhere(string $key, $operator = null, $value = null)
     * @method ParentableTypeConditions|null find($key, $default = null)
     * @method ParentableTypeConditions[] all()
     * @method ParentableTypeConditions|null last(callable $callback = null, $default = null)
     * @method ParentableTypeConditions|$this random(int|null $number = null)
     * @method ParentableTypeConditions|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ParentableTypeConditions_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ParentableTypeConditions[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ParentableTypeConditions_QB whereId($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionTitle($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionName($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionValue($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleId($value)
     * @method _IH_ParentableTypeConditions_QB whereShopParentAbleName($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionAcceptStatus($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionPublishStatus($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionShowStatus($value)
     * @method _IH_ParentableTypeConditions_QB whereConditionAdditionalUserId($value)
     * @method _IH_ParentableTypeConditions_QB whereConditionConfirmUserId($value)
     * @method _IH_ParentableTypeConditions_QB whereConditionConfirmCommentId($value)
     * @method _IH_ParentableTypeConditions_QB whereParentAbleTypeConditionAdditionalCommentValue($value)
     * @method _IH_ParentableTypeConditions_QB whereDeletedAt($value)
     * @method _IH_ParentableTypeConditions_QB whereCreatedAt($value)
     * @method _IH_ParentableTypeConditions_QB whereUpdatedAt($value)
     * @method ParentableTypeConditions baseSole(array|string $columns = ['*'])
     * @method ParentableTypeConditions create(array $attributes = [])
     * @method _IH_ParentableTypeConditions_C|ParentableTypeConditions[] cursor()
     * @method ParentableTypeConditions|null|_IH_ParentableTypeConditions_C|ParentableTypeConditions[] find($id, array $columns = ['*'])
     * @method _IH_ParentableTypeConditions_C|ParentableTypeConditions[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ParentableTypeConditions|_IH_ParentableTypeConditions_C|ParentableTypeConditions[] findOrFail($id, array $columns = ['*'])
     * @method ParentableTypeConditions|_IH_ParentableTypeConditions_C|ParentableTypeConditions[] findOrNew($id, array $columns = ['*'])
     * @method ParentableTypeConditions first(array|string $columns = ['*'])
     * @method ParentableTypeConditions firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ParentableTypeConditions firstOrCreate(array $attributes = [], array $values = [])
     * @method ParentableTypeConditions firstOrFail(array $columns = ['*'])
     * @method ParentableTypeConditions firstOrNew(array $attributes = [], array $values = [])
     * @method ParentableTypeConditions firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ParentableTypeConditions forceCreate(array $attributes)
     * @method _IH_ParentableTypeConditions_C|ParentableTypeConditions[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ParentableTypeConditions_C|ParentableTypeConditions[] get(array|string $columns = ['*'])
     * @method ParentableTypeConditions getModel()
     * @method ParentableTypeConditions[] getModels(array|string $columns = ['*'])
     * @method _IH_ParentableTypeConditions_C|ParentableTypeConditions[] hydrate(array $items)
     * @method ParentableTypeConditions make(array $attributes = [])
     * @method ParentableTypeConditions newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ParentableTypeConditions[]|_IH_ParentableTypeConditions_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ParentableTypeConditions[]|_IH_ParentableTypeConditions_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ParentableTypeConditions sole(array|string $columns = ['*'])
     * @method ParentableTypeConditions updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ParentableTypeConditions_QB withTrashed()
     * @method _IH_ParentableTypeConditions_QB onlyTrashed()
     * @method _IH_ParentableTypeConditions_QB withoutTrashed()
     * @method _IH_ParentableTypeConditions_QB restore()
     */
    class _IH_ParentableTypeConditions_QB extends _BaseBuilder {}
    
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
     * @method ProductCategory|$this random(int|null $number = null)
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
     * @method ProductCustomerComments|$this random(int|null $number = null)
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
     * @method ProductPriceHistory|$this random(int|null $number = null)
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
     * @method _IH_ProductPriceHistory_QB whereId($value)
     * @method _IH_ProductPriceHistory_QB whereProductPriceHistoriableId($value)
     * @method _IH_ProductPriceHistory_QB whereProductPriceHistoriableType($value)
     * @method _IH_ProductPriceHistory_QB whereAttributeValueId($value)
     * @method _IH_ProductPriceHistory_QB whereAttributeValueName($value)
     * @method _IH_ProductPriceHistory_QB whereProductPrice($value)
     * @method _IH_ProductPriceHistory_QB whereProductOldPrice($value)
     * @method _IH_ProductPriceHistory_QB whereUpdatePriceDate($value)
     * @method _IH_ProductPriceHistory_QB whereHaveDiscount($value)
     * @method _IH_ProductPriceHistory_QB whereDiscountPercentageValue($value)
     * @method _IH_ProductPriceHistory_QB whereDiscountType($value)
     * @method _IH_ProductPriceHistory_QB whereDeletedAt($value)
     * @method _IH_ProductPriceHistory_QB whereCreatedAt($value)
     * @method _IH_ProductPriceHistory_QB whereUpdatedAt($value)
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
     * @method ProductTag|$this random(int|null $number = null)
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
     * @method ProductsImage|$this random(int|null $number = null)
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
     * @method RelationShop|$this shift(int $count = 1)
     * @method RelationShop|$this pop(int $count = 1)
     * @method RelationShop|null get($key, $default = null)
     * @method RelationShop|null pull($key, $default = null)
     * @method RelationShop|null first(callable $callback = null, $default = null)
     * @method RelationShop|null firstWhere(string $key, $operator = null, $value = null)
     * @method RelationShop|null find($key, $default = null)
     * @method RelationShop[] all()
     * @method RelationShop|null last(callable $callback = null, $default = null)
     * @method RelationShop|$this random(int|null $number = null)
     * @method RelationShop|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_RelationShop_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RelationShop[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RelationShop_QB whereId($value)
     * @method _IH_RelationShop_QB whereTypeShopTop($value)
     * @method _IH_RelationShop_QB whereTopShopId($value)
     * @method _IH_RelationShop_QB whereTypeShopBottom($value)
     * @method _IH_RelationShop_QB whereBottomShopId($value)
     * @method _IH_RelationShop_QB whereTypeTopBetweenBottom($value)
     * @method _IH_RelationShop_QB whereDeletedAt($value)
     * @method _IH_RelationShop_QB whereCreatedAt($value)
     * @method _IH_RelationShop_QB whereUpdatedAt($value)
     * @method RelationShop baseSole(array|string $columns = ['*'])
     * @method RelationShop create(array $attributes = [])
     * @method _IH_RelationShop_C|RelationShop[] cursor()
     * @method RelationShop|null|_IH_RelationShop_C|RelationShop[] find($id, array $columns = ['*'])
     * @method _IH_RelationShop_C|RelationShop[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RelationShop|_IH_RelationShop_C|RelationShop[] findOrFail($id, array $columns = ['*'])
     * @method RelationShop|_IH_RelationShop_C|RelationShop[] findOrNew($id, array $columns = ['*'])
     * @method RelationShop first(array|string $columns = ['*'])
     * @method RelationShop firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RelationShop firstOrCreate(array $attributes = [], array $values = [])
     * @method RelationShop firstOrFail(array $columns = ['*'])
     * @method RelationShop firstOrNew(array $attributes = [], array $values = [])
     * @method RelationShop firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RelationShop forceCreate(array $attributes)
     * @method _IH_RelationShop_C|RelationShop[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RelationShop_C|RelationShop[] get(array|string $columns = ['*'])
     * @method RelationShop getModel()
     * @method RelationShop[] getModels(array|string $columns = ['*'])
     * @method _IH_RelationShop_C|RelationShop[] hydrate(array $items)
     * @method RelationShop make(array $attributes = [])
     * @method RelationShop newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RelationShop[]|_IH_RelationShop_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RelationShop[]|_IH_RelationShop_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RelationShop sole(array|string $columns = ['*'])
     * @method RelationShop updateOrCreate(array $attributes, array $values = [])
     * @method _IH_RelationShop_QB withTrashed()
     * @method _IH_RelationShop_QB onlyTrashed()
     * @method _IH_RelationShop_QB withoutTrashed()
     * @method _IH_RelationShop_QB restore()
     * @method _IH_RelationShop_QB customFilter($filter)
     * @method _IH_RelationShop_QB customOrder($sort)
     * @method _IH_RelationShop_QB customPagination($pagination)
     */
    class _IH_RelationShop_QB extends _BaseBuilder {}
    
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
     * @method RolesShopsUsers|$this random(int|null $number = null)
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
     * @method ShopImages|$this random(int|null $number = null)
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
     * @method ShopParentableType|$this shift(int $count = 1)
     * @method ShopParentableType|$this pop(int $count = 1)
     * @method ShopParentableType|null get($key, $default = null)
     * @method ShopParentableType|null pull($key, $default = null)
     * @method ShopParentableType|null first(callable $callback = null, $default = null)
     * @method ShopParentableType|null firstWhere(string $key, $operator = null, $value = null)
     * @method ShopParentableType|null find($key, $default = null)
     * @method ShopParentableType[] all()
     * @method ShopParentableType|null last(callable $callback = null, $default = null)
     * @method ShopParentableType|$this random(int|null $number = null)
     * @method ShopParentableType|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ShopParentableType_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShopParentableType[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ShopParentableType_QB whereId($value)
     * @method _IH_ShopParentableType_QB whereShopParentAbleTitle($value)
     * @method _IH_ShopParentableType_QB whereShopParentAbleFaName($value)
     * @method _IH_ShopParentableType_QB whereShopParentAbleEnName($value)
     * @method _IH_ShopParentableType_QB whereShopsParentAbleAcceptStatus($value)
     * @method _IH_ShopParentableType_QB whereShopsParentAblePublishStatus($value)
     * @method _IH_ShopParentableType_QB whereShopsParentAbleShowStatus($value)
     * @method _IH_ShopParentableType_QB whereParentAbleAdditionalUserId($value)
     * @method _IH_ShopParentableType_QB whereParentAbleAdditionalCommentId($value)
     * @method _IH_ShopParentableType_QB whereShopsParentAbleAdditionalCommentValue($value)
     * @method _IH_ShopParentableType_QB whereDeletedAt($value)
     * @method _IH_ShopParentableType_QB whereCreatedAt($value)
     * @method _IH_ShopParentableType_QB whereUpdatedAt($value)
     * @method ShopParentableType baseSole(array|string $columns = ['*'])
     * @method ShopParentableType create(array $attributes = [])
     * @method _IH_ShopParentableType_C|ShopParentableType[] cursor()
     * @method ShopParentableType|null|_IH_ShopParentableType_C|ShopParentableType[] find($id, array $columns = ['*'])
     * @method _IH_ShopParentableType_C|ShopParentableType[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ShopParentableType|_IH_ShopParentableType_C|ShopParentableType[] findOrFail($id, array $columns = ['*'])
     * @method ShopParentableType|_IH_ShopParentableType_C|ShopParentableType[] findOrNew($id, array $columns = ['*'])
     * @method ShopParentableType first(array|string $columns = ['*'])
     * @method ShopParentableType firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ShopParentableType firstOrCreate(array $attributes = [], array $values = [])
     * @method ShopParentableType firstOrFail(array $columns = ['*'])
     * @method ShopParentableType firstOrNew(array $attributes = [], array $values = [])
     * @method ShopParentableType firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShopParentableType forceCreate(array $attributes)
     * @method _IH_ShopParentableType_C|ShopParentableType[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShopParentableType_C|ShopParentableType[] get(array|string $columns = ['*'])
     * @method ShopParentableType getModel()
     * @method ShopParentableType[] getModels(array|string $columns = ['*'])
     * @method _IH_ShopParentableType_C|ShopParentableType[] hydrate(array $items)
     * @method ShopParentableType make(array $attributes = [])
     * @method ShopParentableType newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShopParentableType[]|_IH_ShopParentableType_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShopParentableType[]|_IH_ShopParentableType_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShopParentableType sole(array|string $columns = ['*'])
     * @method ShopParentableType updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ShopParentableType_QB withTrashed()
     * @method _IH_ShopParentableType_QB onlyTrashed()
     * @method _IH_ShopParentableType_QB withoutTrashed()
     * @method _IH_ShopParentableType_QB restore()
     */
    class _IH_ShopParentableType_QB extends _BaseBuilder {}
    
    /**
     * @method ShopWork|$this shift(int $count = 1)
     * @method ShopWork|$this pop(int $count = 1)
     * @method ShopWork|null get($key, $default = null)
     * @method ShopWork|null pull($key, $default = null)
     * @method ShopWork|null first(callable $callback = null, $default = null)
     * @method ShopWork|null firstWhere(string $key, $operator = null, $value = null)
     * @method ShopWork|null find($key, $default = null)
     * @method ShopWork[] all()
     * @method ShopWork|null last(callable $callback = null, $default = null)
     * @method ShopWork|$this random(int|null $number = null)
     * @method ShopWork|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ShopWork_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShopWork[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ShopWork_QB whereId($value)
     * @method _IH_ShopWork_QB whereShopId($value)
     * @method _IH_ShopWork_QB whereShopName($value)
     * @method _IH_ShopWork_QB whereWorkId($value)
     * @method _IH_ShopWork_QB whereWorkTitle($value)
     * @method _IH_ShopWork_QB whereSubcategoryId($value)
     * @method _IH_ShopWork_QB whereSubcategoryName($value)
     * @method _IH_ShopWork_QB whereShopsWorksAcceptStatus($value)
     * @method _IH_ShopWork_QB whereShopsWorksPublishStatus($value)
     * @method _IH_ShopWork_QB whereShopsWorksShowStatus($value)
     * @method _IH_ShopWork_QB whereShopsWorksConfirmUserId($value)
     * @method _IH_ShopWork_QB whereShopsWorksConfirmCommentId($value)
     * @method _IH_ShopWork_QB whereShopsWorksConfirmCommentValue($value)
     * @method _IH_ShopWork_QB whereDeletedAt($value)
     * @method _IH_ShopWork_QB whereCreatedAt($value)
     * @method _IH_ShopWork_QB whereUpdatedAt($value)
     * @method ShopWork baseSole(array|string $columns = ['*'])
     * @method ShopWork create(array $attributes = [])
     * @method _IH_ShopWork_C|ShopWork[] cursor()
     * @method ShopWork|null|_IH_ShopWork_C|ShopWork[] find($id, array $columns = ['*'])
     * @method _IH_ShopWork_C|ShopWork[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ShopWork|_IH_ShopWork_C|ShopWork[] findOrFail($id, array $columns = ['*'])
     * @method ShopWork|_IH_ShopWork_C|ShopWork[] findOrNew($id, array $columns = ['*'])
     * @method ShopWork first(array|string $columns = ['*'])
     * @method ShopWork firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ShopWork firstOrCreate(array $attributes = [], array $values = [])
     * @method ShopWork firstOrFail(array $columns = ['*'])
     * @method ShopWork firstOrNew(array $attributes = [], array $values = [])
     * @method ShopWork firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShopWork forceCreate(array $attributes)
     * @method _IH_ShopWork_C|ShopWork[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShopWork_C|ShopWork[] get(array|string $columns = ['*'])
     * @method ShopWork getModel()
     * @method ShopWork[] getModels(array|string $columns = ['*'])
     * @method _IH_ShopWork_C|ShopWork[] hydrate(array $items)
     * @method ShopWork make(array $attributes = [])
     * @method ShopWork newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShopWork[]|_IH_ShopWork_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShopWork[]|_IH_ShopWork_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShopWork sole(array|string $columns = ['*'])
     * @method ShopWork updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ShopWork_QB withTrashed()
     * @method _IH_ShopWork_QB onlyTrashed()
     * @method _IH_ShopWork_QB withoutTrashed()
     * @method _IH_ShopWork_QB restore()
     */
    class _IH_ShopWork_QB extends _BaseBuilder {}
    
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
     * @method Shop|$this random(int|null $number = null)
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
     * @method _IH_Shop_QB whereShopParentAbleStatus($value)
     * @method _IH_Shop_QB whereShopParentAbleRequest($value)
     * @method _IH_Shop_QB whereShopNumberPoints($value)
     * @method _IH_Shop_QB whereShopTotalPoints($value)
     * @method _IH_Shop_QB whereShopAveragePoints($value)
     * @method _IH_Shop_QB whereShopLastPoint($value)
     * @method _IH_Shop_QB whereAdditionalUserId($value)
     * @method _IH_Shop_QB whereShopNumberLikes($value)
     * @method _IH_Shop_QB whereNormalProductNumberLikes($value)
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
     * @method ShopsRelationParentableTypes|$this shift(int $count = 1)
     * @method ShopsRelationParentableTypes|$this pop(int $count = 1)
     * @method ShopsRelationParentableTypes|null get($key, $default = null)
     * @method ShopsRelationParentableTypes|null pull($key, $default = null)
     * @method ShopsRelationParentableTypes|null first(callable $callback = null, $default = null)
     * @method ShopsRelationParentableTypes|null firstWhere(string $key, $operator = null, $value = null)
     * @method ShopsRelationParentableTypes|null find($key, $default = null)
     * @method ShopsRelationParentableTypes[] all()
     * @method ShopsRelationParentableTypes|null last(callable $callback = null, $default = null)
     * @method ShopsRelationParentableTypes|$this random(int|null $number = null)
     * @method ShopsRelationParentableTypes|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_ShopsRelationParentableTypes_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShopsRelationParentableTypes[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ShopsRelationParentableTypes_QB whereId($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereShopId($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereParentAbleId($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereShopParentAbleTitle($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereShopsOwenParentAbleAcceptStatus($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereShopsOwenParentAblePublishStatus($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereShopsOwenParentAbleShowStatus($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereTypeAdditionalId($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereTypeConfirmUserId($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereTypeConfirmCommentId($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereShopsOwenParentAbleConfirmCommentValue($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereDeletedAt($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereCreatedAt($value)
     * @method _IH_ShopsRelationParentableTypes_QB whereUpdatedAt($value)
     * @method ShopsRelationParentableTypes baseSole(array|string $columns = ['*'])
     * @method ShopsRelationParentableTypes create(array $attributes = [])
     * @method _IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] cursor()
     * @method ShopsRelationParentableTypes|null|_IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] find($id, array $columns = ['*'])
     * @method _IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ShopsRelationParentableTypes|_IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] findOrFail($id, array $columns = ['*'])
     * @method ShopsRelationParentableTypes|_IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] findOrNew($id, array $columns = ['*'])
     * @method ShopsRelationParentableTypes first(array|string $columns = ['*'])
     * @method ShopsRelationParentableTypes firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ShopsRelationParentableTypes firstOrCreate(array $attributes = [], array $values = [])
     * @method ShopsRelationParentableTypes firstOrFail(array $columns = ['*'])
     * @method ShopsRelationParentableTypes firstOrNew(array $attributes = [], array $values = [])
     * @method ShopsRelationParentableTypes firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShopsRelationParentableTypes forceCreate(array $attributes)
     * @method _IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] get(array|string $columns = ['*'])
     * @method ShopsRelationParentableTypes getModel()
     * @method ShopsRelationParentableTypes[] getModels(array|string $columns = ['*'])
     * @method _IH_ShopsRelationParentableTypes_C|ShopsRelationParentableTypes[] hydrate(array $items)
     * @method ShopsRelationParentableTypes make(array $attributes = [])
     * @method ShopsRelationParentableTypes newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShopsRelationParentableTypes[]|_IH_ShopsRelationParentableTypes_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShopsRelationParentableTypes[]|_IH_ShopsRelationParentableTypes_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShopsRelationParentableTypes sole(array|string $columns = ['*'])
     * @method ShopsRelationParentableTypes updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ShopsRelationParentableTypes_QB withTrashed()
     * @method _IH_ShopsRelationParentableTypes_QB onlyTrashed()
     * @method _IH_ShopsRelationParentableTypes_QB withoutTrashed()
     * @method _IH_ShopsRelationParentableTypes_QB restore()
     */
    class _IH_ShopsRelationParentableTypes_QB extends _BaseBuilder {}
    
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
     * @method Tag|$this random(int|null $number = null)
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
     * @method _IH_Tag_QB whereId($value)
     * @method _IH_Tag_QB whereShopTagName($value)
     * @method _IH_Tag_QB whereShopTagImageUrl($value)
     * @method _IH_Tag_QB whereShopTagAcceptStatus($value)
     * @method _IH_Tag_QB whereShopTagPublishStatus($value)
     * @method _IH_Tag_QB whereShopTagAdditionalUserId($value)
     * @method _IH_Tag_QB whereDeletedAt($value)
     * @method _IH_Tag_QB whereCreatedAt($value)
     * @method _IH_Tag_QB whereUpdatedAt($value)
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
     * @method Task|$this random(int|null $number = null)
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
     * @method TeamInvitation|$this random(int|null $number = null)
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
     * @method Team|$this random(int|null $number = null)
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
     * @method TopModel|$this random(int|null $number = null)
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
     * @method User|$this random(int|null $number = null)
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
    
    /**
     * @method Work|$this shift(int $count = 1)
     * @method Work|$this pop(int $count = 1)
     * @method Work|null get($key, $default = null)
     * @method Work|null pull($key, $default = null)
     * @method Work|null first(callable $callback = null, $default = null)
     * @method Work|null firstWhere(string $key, $operator = null, $value = null)
     * @method Work|null find($key, $default = null)
     * @method Work[] all()
     * @method Work|null last(callable $callback = null, $default = null)
     * @method Work|$this random(int|null $number = null)
     * @method Work|null sole($key = null, $operator = null, $value = null)
     */
    class _IH_Work_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Work[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Work_QB whereId($value)
     * @method _IH_Work_QB whereSubcategoryId($value)
     * @method _IH_Work_QB whereSubcategoryName($value)
     * @method _IH_Work_QB whereTitle($value)
     * @method _IH_Work_QB whereWorkNature($value)
     * @method _IH_Work_QB whereTypeLocation($value)
     * @method _IH_Work_QB whereSubcategoryAcceptStatus($value)
     * @method _IH_Work_QB whereSubcategoryPublishStatus($value)
     * @method _IH_Work_QB whereSubcategoryShowStatus($value)
     * @method _IH_Work_QB whereSubcategoryConfirmUserId($value)
     * @method _IH_Work_QB whereSubcategoryConfirmCommentId($value)
     * @method _IH_Work_QB whereSubcategoryConfirmCommentValue($value)
     * @method _IH_Work_QB whereDeletedAt($value)
     * @method _IH_Work_QB whereCreatedAt($value)
     * @method _IH_Work_QB whereUpdatedAt($value)
     * @method Work baseSole(array|string $columns = ['*'])
     * @method Work create(array $attributes = [])
     * @method _IH_Work_C|Work[] cursor()
     * @method Work|null|_IH_Work_C|Work[] find($id, array $columns = ['*'])
     * @method _IH_Work_C|Work[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Work|_IH_Work_C|Work[] findOrFail($id, array $columns = ['*'])
     * @method Work|_IH_Work_C|Work[] findOrNew($id, array $columns = ['*'])
     * @method Work first(array|string $columns = ['*'])
     * @method Work firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Work firstOrCreate(array $attributes = [], array $values = [])
     * @method Work firstOrFail(array $columns = ['*'])
     * @method Work firstOrNew(array $attributes = [], array $values = [])
     * @method Work firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Work forceCreate(array $attributes)
     * @method _IH_Work_C|Work[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Work_C|Work[] get(array|string $columns = ['*'])
     * @method Work getModel()
     * @method Work[] getModels(array|string $columns = ['*'])
     * @method _IH_Work_C|Work[] hydrate(array $items)
     * @method Work make(array $attributes = [])
     * @method Work newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Work[]|_IH_Work_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Work[]|_IH_Work_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Work sole(array|string $columns = ['*'])
     * @method Work updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Work_QB withTrashed()
     * @method _IH_Work_QB onlyTrashed()
     * @method _IH_Work_QB withoutTrashed()
     * @method _IH_Work_QB restore()
     * @method _IH_Work_QB customFilter($filter)
     * @method _IH_Work_QB customOrder($sort)
     * @method _IH_Work_QB customPagination($pagination)
     */
    class _IH_Work_QB extends _BaseBuilder {}
}