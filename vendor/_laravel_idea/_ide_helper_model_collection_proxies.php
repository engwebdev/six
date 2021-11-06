<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\User;
    use Illuminate\Http\UploadedFile;
    use Illuminate\Notifications\Notification;
    use Laravel\Passport\Token;

    /**
     * @property _IH_Category_C|mixed $id
     * @property _IH_Category_C|mixed $category_name
     * @property _IH_Category_C|mixed $deleted_at
     * @property _IH_Category_C|mixed $created_at
     * @property _IH_Category_C|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _IH_Category_C getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _IH_Category_C getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _IH_Category_C isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _IH_Category_C forceDelete()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _IH_Category_C restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _IH_Category_C trashed()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Category_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Category_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Category_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Category_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Category_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Category_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Category_C delete()
     */
    class _IH_Category_CP {}

    /**
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getRelatedKey
     * @method _IH_Membership_C getRelatedKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getOtherKey
     * @method _IH_Membership_C getOtherKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getQueueableId
     * @method _IH_Membership_C getQueueableId()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getTable
     * @method _IH_Membership_C getTable()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::newQueryForRestoration
     * @method _IH_Membership_C newQueryForRestoration(string|int[]|string[] $ids)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getUpdatedAtColumn
     * @method _IH_Membership_C getUpdatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::delete
     * @method _IH_Membership_C delete()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getForeignKey
     * @method _IH_Membership_C getForeignKey()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::hasTimestampAttributes
     * @method _IH_Membership_C hasTimestampAttributes(array|null $attributes = null)
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::getCreatedAtColumn
     * @method _IH_Membership_C getCreatedAtColumn()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::unsetRelations
     * @method _IH_Membership_C unsetRelations()
     * @see \Illuminate\Database\Eloquent\Relations\Concerns\AsPivot::setPivotKeys
     * @method _IH_Membership_C setPivotKeys(string $foreignKey, string $relatedKey)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Membership_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Membership_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Membership_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Membership_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Membership_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Membership_C fill(array $attributes)
     */
    class _IH_Membership_CP {}

    /**
     * @property _IH_NormalProduct_C|mixed $id
     * @property _IH_NormalProduct_C|mixed $product_name
     * @property _IH_NormalProduct_C|mixed $product_description
     * @property _IH_NormalProduct_C|mixed $product_info
     * @property _IH_NormalProduct_C|mixed $product_note
     * @property _IH_NormalProduct_C|mixed $product_status_accept
     * @property _IH_NormalProduct_C|mixed $product_status_confirm_user_id
     * @property _IH_NormalProduct_C|mixed $product_status_confirm_user_comment
     * @property _IH_NormalProduct_C|mixed $product_status_publish
     * @property _IH_NormalProduct_C|mixed $product_status_publish_date
     * @property _IH_NormalProduct_C|mixed $product_last_price
     * @property _IH_NormalProduct_C|mixed $product_last_price_date
     * @property _IH_NormalProduct_C|mixed $product_status_price_discount
     * @property _IH_NormalProduct_C|mixed $product_last_price_discount_percentage
     * @property _IH_NormalProduct_C|mixed $product_last_price_discount_type
     * @property _IH_NormalProduct_C|mixed $product_index_image_url
     * @property _IH_NormalProduct_C|mixed $product_category_id
     * @property _IH_NormalProduct_C|mixed $product_shop_id
     * @property _IH_NormalProduct_C|mixed $product_registry_shopkeeper_id
     * @property _IH_NormalProduct_C|mixed $product_quantity_total
     * @property _IH_NormalProduct_C|mixed $product_quantity_sold
     * @property _IH_NormalProduct_C|mixed $product_quantity_selling
     * @property _IH_NormalProduct_C|mixed $product_quantity_returned
     * @property _IH_NormalProduct_C|mixed $product_number_comments
     * @property _IH_NormalProduct_C|mixed $product_total_points
     * @property _IH_NormalProduct_C|mixed $product_average_points
     * @property _IH_NormalProduct_C|mixed $product_last_point
     * @property _IH_NormalProduct_C|mixed $deleted_at
     * @property _IH_NormalProduct_C|mixed $created_at
     * @property _IH_NormalProduct_C|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _IH_NormalProduct_C getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _IH_NormalProduct_C getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _IH_NormalProduct_C isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _IH_NormalProduct_C forceDelete()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _IH_NormalProduct_C restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _IH_NormalProduct_C trashed()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_NormalProduct_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_NormalProduct_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_NormalProduct_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_NormalProduct_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_NormalProduct_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_NormalProduct_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_NormalProduct_C delete()
     */
    class _IH_NormalProduct_CP {}

    /**
     * @property _IH_Shop_C|mixed $id
     * @property _IH_Shop_C|mixed $parent_id
     * @property _IH_Shop_C|mixed $name
     * @property _IH_Shop_C|mixed $created_at
     * @property _IH_Shop_C|mixed $updated_at
     * @property _IH_Shop_C|mixed $deleted_at
     * @property _IH_Shop_C|mixed $category_id
     * @property _IH_Shop_C|mixed $description
     * @property _IH_Shop_C|mixed $shop_photo_url
     * @property _IH_Shop_C|mixed $type_location
     * @property _IH_Shop_C|mixed $lat_location
     * @property _IH_Shop_C|mixed $long_location
     * @property _IH_Shop_C|mixed $shop_country
     * @property _IH_Shop_C|mixed $shop_province
     * @property _IH_Shop_C|mixed $shop_city
     * @property _IH_Shop_C|mixed $shop_local
     * @property _IH_Shop_C|mixed $shop_Street
     * @property _IH_Shop_C|mixed $shop_alley
     * @property _IH_Shop_C|mixed $shop_number
     * @property _IH_Shop_C|mixed $shop_postal_code
     * @property _IH_Shop_C|mixed $shop_main_phone_number
     * @property _IH_Shop_C|mixed $shop_accept_status
     * @property _IH_Shop_C|mixed $shop_Priority
     * @property _IH_Shop_C|mixed $category
     * @property _IH_Shop_C|mixed $parent
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _IH_Shop_C getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _IH_Shop_C getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _IH_Shop_C isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _IH_Shop_C forceDelete()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _IH_Shop_C restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _IH_Shop_C trashed()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Shop_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Shop_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Shop_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Shop_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Shop_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Shop_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Shop_C delete()
     */
    class _IH_Shop_CP {}

    /**
     * @property _IH_Tag_C|mixed $id
     * @property _IH_Tag_C|mixed $tag_name
     * @property _IH_Tag_C|mixed $tag_accept_status
     * @property _IH_Tag_C|mixed $deleted_at
     * @property _IH_Tag_C|mixed $created_at
     * @property _IH_Tag_C|mixed $updated_at
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _IH_Tag_C getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _IH_Tag_C getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _IH_Tag_C isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _IH_Tag_C forceDelete()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _IH_Tag_C restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _IH_Tag_C trashed()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Tag_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Tag_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Tag_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Tag_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Tag_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Tag_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Tag_C delete()
     */
    class _IH_Tag_CP {}

    /**
     * @see \App\Models\TeamInvitation::team
     * @method _IH_TeamInvitation_C team()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_TeamInvitation_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_TeamInvitation_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_TeamInvitation_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_TeamInvitation_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_TeamInvitation_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_TeamInvitation_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_TeamInvitation_C delete()
     */
    class _IH_TeamInvitation_CP {}

    /**
     * @see \Laravel\Jetstream\Team::users
     * @method _IH_Team_C users()
     * @see \Laravel\Jetstream\Team::allUsers
     * @method _IH_Team_C allUsers()
     * @see \Laravel\Jetstream\Team::removeUser
     * @method _IH_Team_C removeUser(User $user)
     * @see \Laravel\Jetstream\Team::purge
     * @method _IH_Team_C purge()
     * @see \Laravel\Jetstream\Team::hasUser
     * @method _IH_Team_C hasUser(User $user)
     * @see \Laravel\Jetstream\Team::userHasPermission
     * @method _IH_Team_C userHasPermission(User $user, string $permission)
     * @see \Laravel\Jetstream\Team::hasUserWithEmail
     * @method _IH_Team_C hasUserWithEmail(string $email)
     * @see \Laravel\Jetstream\Team::teamInvitations
     * @method _IH_Team_C teamInvitations()
     * @see \Laravel\Jetstream\Team::owner
     * @method _IH_Team_C owner()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Team_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Team_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Team_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Team_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Team_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Team_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Team_C delete()
     */
    class _IH_Team_CP {}

    /**
     * @property _IH_User_C|mixed $id
     * @property _IH_User_C|mixed $name
     * @property _IH_User_C|mixed $email
     * @property _IH_User_C|mixed $email_verified_at
     * @property _IH_User_C|mixed $password
     * @property _IH_User_C|mixed $remember_token
     * @property _IH_User_C|mixed $current_team_id
     * @property _IH_User_C|mixed $profile_photo_path
     * @property _IH_User_C|mixed $created_at
     * @property _IH_User_C|mixed $updated_at
     * @property _IH_User_C|mixed $two_factor_secret
     * @property _IH_User_C|mixed $two_factor_recovery_codes
     * @property _IH_User_C|mixed $deleted_at
     * @property _IH_User_C|mixed $disable_by
     * @property _IH_User_C|mixed $disable_at
     * @property _IH_User_C|mixed $username
     * @property _IH_User_C|mixed $mobile
     * @property _IH_User_C|mixed $mobile_verified_at
     * @property _IH_User_C|mixed $mobile_verified_code
     * @property _IH_User_C|mixed $mobile_verified_code_expire_time
     * @see \App\Models\User::findOrCreateForPassportVerifyCodeGrant
     * @method _IH_User_C findOrCreateForPassportVerifyCodeGrant($phoneNumber)
     * @see \App\Models\User::validateForPassportVerifyCodeGrant
     * @method _IH_User_C validateForPassportVerifyCodeGrant($verificationCode)
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::twoFactorQrCodeSvg
     * @method _IH_User_C twoFactorQrCodeSvg()
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::twoFactorQrCodeUrl
     * @method _IH_User_C twoFactorQrCodeUrl()
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::recoveryCodes
     * @method _IH_User_C recoveryCodes()
     * @see \Laravel\Fortify\TwoFactorAuthenticatable::replaceRecoveryCode
     * @method _IH_User_C replaceRecoveryCode(string $code)
     * @see \Laravel\Passport\HasApiTokens::clients
     * @method _IH_User_C clients()
     * @see \Laravel\Passport\HasApiTokens::token
     * @method _IH_User_C token()
     * @see \Laravel\Passport\HasApiTokens::tokens
     * @method _IH_User_C tokens()
     * @see \Laravel\Passport\HasApiTokens::withAccessToken
     * @method _IH_User_C withAccessToken(Token $accessToken)
     * @see \Laravel\Passport\HasApiTokens::createToken
     * @method _IH_User_C createToken(string $name, array $scopes = [])
     * @see \Laravel\Passport\HasApiTokens::tokenCan
     * @method _IH_User_C tokenCan(string $scope)
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getDeletedAtColumn
     * @method _IH_User_C getDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::getQualifiedDeletedAtColumn
     * @method _IH_User_C getQualifiedDeletedAtColumn()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::isForceDeleting
     * @method _IH_User_C isForceDeleting()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::forceDelete
     * @method _IH_User_C forceDelete()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::restore
     * @method _IH_User_C restore()
     * @see \Illuminate\Database\Eloquent\SoftDeletes::trashed
     * @method _IH_User_C trashed()
     * @see \Illuminate\Notifications\RoutesNotifications::routeNotificationFor
     * @method _IH_User_C routeNotificationFor(string $driver, Notification|null $notification = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notifyNow
     * @method _IH_User_C notifyNow($instance, array $channels = null)
     * @see \Illuminate\Notifications\RoutesNotifications::notify
     * @method _IH_User_C notify($instance)
     * @see \Illuminate\Notifications\HasDatabaseNotifications::unreadNotifications
     * @method _IH_User_C unreadNotifications()
     * @see \Illuminate\Notifications\HasDatabaseNotifications::readNotifications
     * @method _IH_User_C readNotifications()
     * @see \Laravel\Jetstream\HasProfilePhoto::deleteProfilePhoto
     * @method _IH_User_C deleteProfilePhoto()
     * @see \Laravel\Jetstream\HasProfilePhoto::updateProfilePhoto
     * @method _IH_User_C updateProfilePhoto(UploadedFile $photo)
     * @see \Illuminate\Auth\MustVerifyEmail::hasVerifiedEmail
     * @method _IH_User_C hasVerifiedEmail()
     * @see \Illuminate\Auth\MustVerifyEmail::getEmailForVerification
     * @method _IH_User_C getEmailForVerification()
     * @see \Illuminate\Auth\MustVerifyEmail::sendEmailVerificationNotification
     * @method _IH_User_C sendEmailVerificationNotification()
     * @see \Illuminate\Auth\MustVerifyEmail::markEmailAsVerified
     * @method _IH_User_C markEmailAsVerified()
     * @see \Illuminate\Auth\Authenticatable::getAuthPassword
     * @method _IH_User_C getAuthPassword()
     * @see \Illuminate\Auth\Authenticatable::setRememberToken
     * @method _IH_User_C setRememberToken(string $value)
     * @see \Illuminate\Auth\Authenticatable::getRememberTokenName
     * @method _IH_User_C getRememberTokenName()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierName
     * @method _IH_User_C getAuthIdentifierName()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifierForBroadcasting
     * @method _IH_User_C getAuthIdentifierForBroadcasting()
     * @see \Illuminate\Auth\Authenticatable::getRememberToken
     * @method _IH_User_C getRememberToken()
     * @see \Illuminate\Auth\Authenticatable::getAuthIdentifier
     * @method _IH_User_C getAuthIdentifier()
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cant
     * @method _IH_User_C cant(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::cannot
     * @method _IH_User_C cannot(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::can
     * @method _IH_User_C can(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Foundation\Auth\Access\Authorizable::canAny
     * @method _IH_User_C canAny(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Auth\Passwords\CanResetPassword::getEmailForPasswordReset
     * @method _IH_User_C getEmailForPasswordReset()
     * @see \Illuminate\Auth\Passwords\CanResetPassword::sendPasswordResetNotification
     * @method _IH_User_C sendPasswordResetNotification(string $token)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_User_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_User_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_User_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_User_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_User_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_User_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_User_C delete()
     */
    class _IH_User_CP {}
}

namespace LaravelIdea\Helper\Illuminate\Notifications {

    /**
     * @property _IH_DatabaseNotification_C|mixed $notifiable
     * @see \Illuminate\Notifications\DatabaseNotification::markAsRead
     * @method _IH_DatabaseNotification_C markAsRead()
     * @see \Illuminate\Notifications\DatabaseNotification::unread
     * @method _IH_DatabaseNotification_C unread()
     * @see \Illuminate\Notifications\DatabaseNotification::read
     * @method _IH_DatabaseNotification_C read()
     * @see \Illuminate\Notifications\DatabaseNotification::markAsUnread
     * @method _IH_DatabaseNotification_C markAsUnread()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_DatabaseNotification_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_DatabaseNotification_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_DatabaseNotification_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_DatabaseNotification_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_DatabaseNotification_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_DatabaseNotification_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_DatabaseNotification_C delete()
     */
    class _IH_DatabaseNotification_CP {}
}

namespace LaravelIdea\Helper\Laravel\Jetstream {

    /**
     * @see \Laravel\Jetstream\TeamInvitation::team
     * @method _IH_TeamInvitation_C team()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_TeamInvitation_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_TeamInvitation_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_TeamInvitation_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_TeamInvitation_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_TeamInvitation_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_TeamInvitation_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_TeamInvitation_C delete()
     */
    class _IH_TeamInvitation_CP {}
}

namespace LaravelIdea\Helper\Laravel\Passport {

    /**
     * @see \Laravel\Passport\AuthCode::client
     * @method _IH_AuthCode_C client()
     * @see \Laravel\Passport\AuthCode::getConnectionName
     * @method _IH_AuthCode_C getConnectionName()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_AuthCode_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_AuthCode_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_AuthCode_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_AuthCode_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_AuthCode_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_AuthCode_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_AuthCode_C delete()
     */
    class _IH_AuthCode_CP {}

    /**
     * @see \Laravel\Passport\Client::user
     * @method _IH_Client_C user()
     * @see \Laravel\Passport\Client::firstParty
     * @method _IH_Client_C firstParty()
     * @see \Laravel\Passport\Client::setSecretAttribute
     * @method _IH_Client_C setSecretAttribute(null|string $value)
     * @see \Laravel\Passport\Client::getConnectionName
     * @method _IH_Client_C getConnectionName()
     * @see \Laravel\Passport\Client::getIncrementing
     * @method _IH_Client_C getIncrementing()
     * @see \Laravel\Passport\Client::confidential
     * @method _IH_Client_C confidential()
     * @see \Laravel\Passport\Client::skipsAuthorization
     * @method _IH_Client_C skipsAuthorization()
     * @see \Laravel\Passport\Client::getKeyType
     * @method _IH_Client_C getKeyType()
     * @see \Laravel\Passport\Client::tokens
     * @method _IH_Client_C tokens()
     * @see \Laravel\Passport\Client::authCodes
     * @method _IH_Client_C authCodes()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Client_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Client_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Client_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Client_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Client_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Client_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Client_C delete()
     */
    class _IH_Client_CP {}

    /**
     * @see \Laravel\Passport\PersonalAccessClient::client
     * @method _IH_PersonalAccessClient_C client()
     * @see \Laravel\Passport\PersonalAccessClient::getConnectionName
     * @method _IH_PersonalAccessClient_C getConnectionName()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_PersonalAccessClient_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_PersonalAccessClient_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_PersonalAccessClient_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_PersonalAccessClient_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_PersonalAccessClient_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_PersonalAccessClient_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_PersonalAccessClient_C delete()
     */
    class _IH_PersonalAccessClient_CP {}

    /**
     * @see \Laravel\Passport\RefreshToken::getConnectionName
     * @method _IH_RefreshToken_C getConnectionName()
     * @see \Laravel\Passport\RefreshToken::transient
     * @method _IH_RefreshToken_C transient()
     * @see \Laravel\Passport\RefreshToken::accessToken
     * @method _IH_RefreshToken_C accessToken()
     * @see \Laravel\Passport\RefreshToken::revoke
     * @method _IH_RefreshToken_C revoke()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_RefreshToken_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_RefreshToken_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_RefreshToken_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_RefreshToken_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_RefreshToken_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_RefreshToken_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_RefreshToken_C delete()
     */
    class _IH_RefreshToken_CP {}

    /**
     * @property _IH_Token_C|mixed $user
     * @see \Laravel\Passport\Token::client
     * @method _IH_Token_C client()
     * @see \Laravel\Passport\Token::can
     * @method _IH_Token_C can(string $scope)
     * @see \Laravel\Passport\Token::transient
     * @method _IH_Token_C transient()
     * @see \Laravel\Passport\Token::revoke
     * @method _IH_Token_C revoke()
     * @see \Laravel\Passport\Token::cant
     * @method _IH_Token_C cant(string $scope)
     * @see \Laravel\Passport\Token::getConnectionName
     * @method _IH_Token_C getConnectionName()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Token_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Token_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Token_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Token_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Token_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Token_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Token_C delete()
     */
    class _IH_Token_CP {}
}

namespace LaravelIdea\Helper\Laravel\Sanctum {

    /**
     * @property _IH_PersonalAccessToken_C|mixed $id
     * @property _IH_PersonalAccessToken_C|mixed $tokenable_id
     * @property _IH_PersonalAccessToken_C|mixed $tokenable_type
     * @property _IH_PersonalAccessToken_C|mixed $name
     * @property _IH_PersonalAccessToken_C|mixed $token
     * @property _IH_PersonalAccessToken_C|mixed $abilities
     * @property _IH_PersonalAccessToken_C|mixed $last_used_at
     * @property _IH_PersonalAccessToken_C|mixed $created_at
     * @property _IH_PersonalAccessToken_C|mixed $updated_at
     * @property _IH_PersonalAccessToken_C|mixed $tokenable
     * @see \Laravel\Sanctum\PersonalAccessToken::cant
     * @method _IH_PersonalAccessToken_C cant(string $ability)
     * @see \Laravel\Sanctum\PersonalAccessToken::can
     * @method _IH_PersonalAccessToken_C can(string $ability)
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_PersonalAccessToken_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_PersonalAccessToken_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_PersonalAccessToken_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_PersonalAccessToken_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_PersonalAccessToken_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_PersonalAccessToken_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_PersonalAccessToken_C delete()
     */
    class _IH_PersonalAccessToken_CP {}
}

namespace LaravelIdea\Helper\Spatie\Permission\Models {

    use Illuminate\Support\Collection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;
    use Spatie\Permission\Models\Permission as Permission1;

    /**
     * @property _IH_Permission_C|mixed $id
     * @property _IH_Permission_C|mixed $name
     * @property _IH_Permission_C|mixed $guard_name
     * @property _IH_Permission_C|mixed $created_at
     * @property _IH_Permission_C|mixed $updated_at
     * @see \Spatie\Permission\Models\Permission::users
     * @method _IH_Permission_C users()
     * @see \Spatie\Permission\Models\Permission::getTable
     * @method _IH_Permission_C getTable()
     * @see \Spatie\Permission\Traits\HasRoles::getDirectPermissions
     * @method _IH_Permission_C getDirectPermissions()
     * @see \Spatie\Permission\Traits\HasRoles::syncRoles
     * @method _IH_Permission_C syncRoles(...$roles)
     * @see \Spatie\Permission\Traits\HasRoles::getRoleNames
     * @method _IH_Permission_C getRoleNames()
     * @see \Spatie\Permission\Traits\HasRoles::hasExactRoles
     * @method _IH_Permission_C hasExactRoles(array|Collection|Role|string $roles, string $guard = null)
     * @see \Spatie\Permission\Traits\HasRoles::hasAnyRole
     * @method _IH_Permission_C hasAnyRole(...$roles)
     * @see \Spatie\Permission\Traits\HasRoles::getRoleClass
     * @method _IH_Permission_C getRoleClass()
     * @see \Spatie\Permission\Traits\HasRoles::removeRole
     * @method _IH_Permission_C removeRole(Role|string $role)
     * @see \Spatie\Permission\Traits\HasRoles::hasRole
     * @method _IH_Permission_C hasRole(array|Collection|int|Role|string $roles, string $guard = null)
     * @see \Spatie\Permission\Traits\HasRoles::assignRole
     * @method _IH_Permission_C assignRole(...$roles)
     * @see \Spatie\Permission\Traits\HasRoles::hasAllRoles
     * @method _IH_Permission_C hasAllRoles(array|Collection|Role|string $roles, string $guard = null)
     * @see \Spatie\Permission\Traits\HasPermissions::hasPermissionTo
     * @method _IH_Permission_C hasPermissionTo(int|Permission|string $permission, null|string $guardName = null)
     * @see \Spatie\Permission\Traits\HasPermissions::forgetCachedPermissions
     * @method _IH_Permission_C forgetCachedPermissions()
     * @see \Spatie\Permission\Traits\HasPermissions::hasDirectPermission
     * @method _IH_Permission_C hasDirectPermission(int|Permission|string $permission)
     * @see \Spatie\Permission\Traits\HasPermissions::hasAllDirectPermissions
     * @method _IH_Permission_C hasAllDirectPermissions(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::hasAnyDirectPermission
     * @method _IH_Permission_C hasAnyDirectPermission(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::givePermissionTo
     * @method _IH_Permission_C givePermissionTo(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::hasAllPermissions
     * @method _IH_Permission_C hasAllPermissions(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::getPermissionClass
     * @method _IH_Permission_C getPermissionClass()
     * @see \Spatie\Permission\Traits\HasPermissions::syncPermissions
     * @method _IH_Permission_C syncPermissions(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::getPermissionsViaRoles
     * @method _IH_Permission_C getPermissionsViaRoles()
     * @see \Spatie\Permission\Traits\HasPermissions::hasUncachedPermissionTo
     * @method _IH_Permission_C hasUncachedPermissionTo($permission, $guardName = null)
     * @see \Spatie\Permission\Traits\HasPermissions::checkPermissionTo
     * @method _IH_Permission_C checkPermissionTo(int|Permission|string $permission, null|string $guardName = null)
     * @see \Spatie\Permission\Traits\HasPermissions::getAllPermissions
     * @method _IH_Permission_C getAllPermissions()
     * @see \Spatie\Permission\Traits\HasPermissions::hasAnyPermission
     * @method _IH_Permission_C hasAnyPermission(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::revokePermissionTo
     * @method _IH_Permission_C revokePermissionTo(Permission|Permission[]|string|string[] $permission)
     * @see \Spatie\Permission\Traits\HasPermissions::getPermissionNames
     * @method _IH_Permission_C getPermissionNames()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Permission_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Permission_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Permission_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Permission_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Permission_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Permission_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Permission_C delete()
     */
    class _IH_Permission_CP {}

    /**
     * @property _IH_Role_C|mixed $id
     * @property _IH_Role_C|mixed $name
     * @property _IH_Role_C|mixed $guard_name
     * @property _IH_Role_C|mixed $created_at
     * @property _IH_Role_C|mixed $updated_at
     * @see \Spatie\Permission\Models\Role::users
     * @method _IH_Role_C users()
     * @see \Spatie\Permission\Models\Role::getTable
     * @method _IH_Role_C getTable()
     * @see \Spatie\Permission\Models\Role::hasPermissionTo
     * @method _IH_Role_C hasPermissionTo(Permission1|string $permission)
     * @see \Spatie\Permission\Traits\HasPermissions::forgetCachedPermissions
     * @method _IH_Role_C forgetCachedPermissions()
     * @see \Spatie\Permission\Traits\HasPermissions::hasDirectPermission
     * @method _IH_Role_C hasDirectPermission(int|Permission|string $permission)
     * @see \Spatie\Permission\Traits\HasPermissions::hasAllDirectPermissions
     * @method _IH_Role_C hasAllDirectPermissions(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::hasAnyDirectPermission
     * @method _IH_Role_C hasAnyDirectPermission(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::givePermissionTo
     * @method _IH_Role_C givePermissionTo(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::hasAllPermissions
     * @method _IH_Role_C hasAllPermissions(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::getPermissionClass
     * @method _IH_Role_C getPermissionClass()
     * @see \Spatie\Permission\Traits\HasPermissions::syncPermissions
     * @method _IH_Role_C syncPermissions(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::getPermissionsViaRoles
     * @method _IH_Role_C getPermissionsViaRoles()
     * @see \Spatie\Permission\Traits\HasPermissions::hasUncachedPermissionTo
     * @method _IH_Role_C hasUncachedPermissionTo($permission, $guardName = null)
     * @see \Spatie\Permission\Traits\HasPermissions::checkPermissionTo
     * @method _IH_Role_C checkPermissionTo(int|Permission|string $permission, null|string $guardName = null)
     * @see \Spatie\Permission\Traits\HasPermissions::getAllPermissions
     * @method _IH_Role_C getAllPermissions()
     * @see \Spatie\Permission\Traits\HasPermissions::hasAnyPermission
     * @method _IH_Role_C hasAnyPermission(...$permissions)
     * @see \Spatie\Permission\Traits\HasPermissions::revokePermissionTo
     * @method _IH_Role_C revokePermissionTo(Permission|Permission[]|string|string[] $permission)
     * @see \Spatie\Permission\Traits\HasPermissions::getPermissionNames
     * @method _IH_Role_C getPermissionNames()
     * @see \Illuminate\Database\Eloquent\Model::update
     * @method _IH_Role_C update(array $attributes = [], array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::save
     * @method _IH_Role_C save(array $options = [])
     * @see \Illuminate\Database\Eloquent\Model::increment
     * @method _IH_Role_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Model::decrement
     * @method _IH_Role_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps::touch
     * @method _IH_Role_C touch()
     * @see \Illuminate\Database\Eloquent\Model::fill
     * @method _IH_Role_C fill(array $attributes)
     * @see \Illuminate\Database\Eloquent\Model::delete
     * @method _IH_Role_C delete()
     */
    class _IH_Role_CP {}
}
