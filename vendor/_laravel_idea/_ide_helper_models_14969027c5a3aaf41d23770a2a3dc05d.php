<?php //fd899862245a31ac6ce66ae6eaea99c1
/** @noinspection all */

namespace Laravel\Passport {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Laravel\Passport\Database\Factories\ClientFactory;
    use LaravelIdea\Helper\Laravel\Passport\_IH_AuthCode_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_AuthCode_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_PersonalAccessClient_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_PersonalAccessClient_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_RefreshToken_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_RefreshToken_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_QB;

    /**
     * @property Client $client
     * @method BelongsTo|_IH_Client_QB client()
     * @method static _IH_AuthCode_QB onWriteConnection()
     * @method _IH_AuthCode_QB newQuery()
     * @method static _IH_AuthCode_QB on(null|string $connection = null)
     * @method static _IH_AuthCode_QB query()
     * @method static _IH_AuthCode_QB with(array|string $relations)
     * @method _IH_AuthCode_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AuthCode_C|AuthCode[] all()
     * @mixin _IH_AuthCode_QB
     */
    class AuthCode extends Model {}

    /**
     * @property-read null|string $plain_secret attribute
     * @property _IH_AuthCode_C|AuthCode[] $authCodes
     * @property-read int $auth_codes_count
     * @method HasMany|_IH_AuthCode_QB authCodes()
     * @property _IH_Token_C|Token[] $tokens
     * @property-read int $tokens_count
     * @method HasMany|_IH_Token_QB tokens()
     * @method static _IH_Client_QB onWriteConnection()
     * @method _IH_Client_QB newQuery()
     * @method static _IH_Client_QB on(null|string $connection = null)
     * @method static _IH_Client_QB query()
     * @method static _IH_Client_QB with(array|string $relations)
     * @method _IH_Client_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Client_C|Client[] all()
     * @mixin _IH_Client_QB
     * @method static ClientFactory factory(...$parameters)
     */
    class Client extends Model {}

    /**
     * @property Client $client
     * @method BelongsTo|_IH_Client_QB client()
     * @method static _IH_PersonalAccessClient_QB onWriteConnection()
     * @method _IH_PersonalAccessClient_QB newQuery()
     * @method static _IH_PersonalAccessClient_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessClient_QB query()
     * @method static _IH_PersonalAccessClient_QB with(array|string $relations)
     * @method _IH_PersonalAccessClient_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PersonalAccessClient_C|PersonalAccessClient[] all()
     * @mixin _IH_PersonalAccessClient_QB
     */
    class PersonalAccessClient extends Model {}

    /**
     * @property Token $accessToken
     * @method BelongsTo|_IH_Token_QB accessToken()
     * @method static _IH_RefreshToken_QB onWriteConnection()
     * @method _IH_RefreshToken_QB newQuery()
     * @method static _IH_RefreshToken_QB on(null|string $connection = null)
     * @method static _IH_RefreshToken_QB query()
     * @method static _IH_RefreshToken_QB with(array|string $relations)
     * @method _IH_RefreshToken_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RefreshToken_C|RefreshToken[] all()
     * @mixin _IH_RefreshToken_QB
     */
    class RefreshToken extends Model {}

    /**
     * @property Client $client
     * @method BelongsTo|_IH_Client_QB client()
     * @method static _IH_Token_QB onWriteConnection()
     * @method _IH_Token_QB newQuery()
     * @method static _IH_Token_QB on(null|string $connection = null)
     * @method static _IH_Token_QB query()
     * @method static _IH_Token_QB with(array|string $relations)
     * @method _IH_Token_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Token_C|Token[] all()
     * @mixin _IH_Token_QB
     */
    class Token extends Model {}
}
