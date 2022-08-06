<?php //aac38394302f5e698c5e3efd301429f4
/** @noinspection all */

namespace Spatie\Permission\Models {

    use App\Models\Account;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Account_C;
    use LaravelIdea\Helper\App\Models\_IH_Account_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB;
    
    /**
     * @property int $id
     * @property string $name
     * @property string $guard_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB roles()
     * @method static _IH_Permission_QB onWriteConnection()
     * @method _IH_Permission_QB newQuery()
     * @method static _IH_Permission_QB on(null|string $connection = null)
     * @method static _IH_Permission_QB query()
     * @method static _IH_Permission_QB with(array|string $relations)
     * @method _IH_Permission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Permission_C|Permission[] all()
     * @foreignLinks 
     * @mixin _IH_Permission_QB
     */
    class Permission extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $guard_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Account_C|Account[] $account
     * @property-read int $account_count
     * @method HasMany|_IH_Account_QB account()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @foreignLinks id,\App\Models\Account,role_id
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}
}