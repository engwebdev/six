<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App\Models {

    use Database\Factories\CategoryFactory;
    use Database\Factories\ShopFactory;
    use Database\Factories\TagFactory;
    use Database\Factories\TeamFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOneThrough;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_AttributeValue_C;
    use LaravelIdea\Helper\App\Models\_IH_AttributeValue_QB;
    use LaravelIdea\Helper\App\Models\_IH_Attribute_C;
    use LaravelIdea\Helper\App\Models\_IH_Attribute_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_ConfirmComment_C;
    use LaravelIdea\Helper\App\Models\_IH_ConfirmComment_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_CustomService_C;
    use LaravelIdea\Helper\App\Models\_IH_CustomService_QB;
    use LaravelIdea\Helper\App\Models\_IH_Detail_C;
    use LaravelIdea\Helper\App\Models\_IH_Detail_QB;
    use LaravelIdea\Helper\App\Models\_IH_Membership_C;
    use LaravelIdea\Helper\App\Models\_IH_Membership_QB;
    use LaravelIdea\Helper\App\Models\_IH_NormalProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_NormalProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_NormalService_C;
    use LaravelIdea\Helper\App\Models\_IH_NormalService_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductCustomerComments_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductCustomerComments_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductPriceHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductPriceHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductsImage_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductsImage_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductTag_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductTag_QB;
    use LaravelIdea\Helper\App\Models\_IH_RolesShopsUsers_C;
    use LaravelIdea\Helper\App\Models\_IH_RolesShopsUsers_QB;
    use LaravelIdea\Helper\App\Models\_IH_ShopImages_C;
    use LaravelIdea\Helper\App\Models\_IH_ShopImages_QB;
    use LaravelIdea\Helper\App\Models\_IH_Shop_C;
    use LaravelIdea\Helper\App\Models\_IH_Shop_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tag_C;
    use LaravelIdea\Helper\App\Models\_IH_Tag_QB;
    use LaravelIdea\Helper\App\Models\_IH_Task_C;
    use LaravelIdea\Helper\App\Models\_IH_Task_QB;
    use LaravelIdea\Helper\App\Models\_IH_TeamInvitation_C;
    use LaravelIdea\Helper\App\Models\_IH_TeamInvitation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Team_C;
    use LaravelIdea\Helper\App\Models\_IH_Team_QB;
    use LaravelIdea\Helper\App\Models\_IH_TopModel_C;
    use LaravelIdea\Helper\App\Models\_IH_TopModel_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role;
    
    /**
     * @property int $id
     * @property string|null $attribute_name
     * @property int|null $attribute_additional_user_id
     * @property string|null $attribute_additional_type
     * @property bool|null $attribute_status_accept
     * @property bool|null $attribute_publish_status
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Attribute_QB onWriteConnection()
     * @method _IH_Attribute_QB newQuery()
     * @method static _IH_Attribute_QB on(null|string $connection = null)
     * @method static _IH_Attribute_QB query()
     * @method static _IH_Attribute_QB with(array|string $relations)
     * @method _IH_Attribute_QB newModelQuery()
     * @method static _IH_Attribute_C|Attribute[] all()
     * @mixin _IH_Attribute_QB
     */
    class Attribute extends Model {}
    
    /**
     * @property int $id
     * @property int|null $attribute_id
     * @property string|null $attribute_name
     * @property string|null $attribute_value_name
     * @property int|null $attribute_value_additional_user_id
     * @property string|null $attribute_value_additional_type
     * @property bool|null $attribute_value_status_accept
     * @property bool|null $attribute_value_publish_status
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_AttributeValue_QB onWriteConnection()
     * @method _IH_AttributeValue_QB newQuery()
     * @method static _IH_AttributeValue_QB on(null|string $connection = null)
     * @method static _IH_AttributeValue_QB query()
     * @method static _IH_AttributeValue_QB with(array|string $relations)
     * @method _IH_AttributeValue_QB newModelQuery()
     * @method static _IH_AttributeValue_C|AttributeValue[] all()
     * @mixin _IH_AttributeValue_QB
     */
    class AttributeValue extends Model {}
    
    /**
     * @property _IH_Shop_C|Shop[] $shops
     * @property-read int $shops_count
     * @method HasMany|_IH_Shop_QB shops()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method static _IH_Category_C|Category[] all()
     * @mixin _IH_Category_QB
     * @method static CategoryFactory factory(...$parameters)
     */
    class Category extends Model {}
    
    /**
     * @property int $id
     * @property int|null $parent_id
     * @property int|null $confirm_commentable_id
     * @property string|null $confirm_commentable_type
     * @property int|null $system_user_id
     * @property string|null $system_user_comment
     * @property bool|null $confirm_comment_value
     * @property bool|null $type_review
     * @property string|null $type_status
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $confirm_commentable
     * @method MorphTo confirm_commentable()
     * @property _IH_ConfirmComment_C|ConfirmComment[] $replies
     * @property-read int $replies_count
     * @method HasMany|_IH_ConfirmComment_QB replies()
     * @method static _IH_ConfirmComment_QB onWriteConnection()
     * @method _IH_ConfirmComment_QB newQuery()
     * @method static _IH_ConfirmComment_QB on(null|string $connection = null)
     * @method static _IH_ConfirmComment_QB query()
     * @method static _IH_ConfirmComment_QB with(array|string $relations)
     * @method _IH_ConfirmComment_QB newModelQuery()
     * @method static _IH_ConfirmComment_C|ConfirmComment[] all()
     * @mixin _IH_ConfirmComment_QB
     */
    class ConfirmComment extends Model {}
    
    /**
     * @property int $id
     * @property string|null $custom_product_name
     * @property string|null $custom_product_description
     * @property string|null $custom_product_info
     * @property string|null $custom_product_note
     * @property bool|null $custom_product_status_accept
     * @property int|null $custom_product_status_confirm_user_id
     * @property string|null $custom_product_status_confirm_user_comment
     * @property bool|null $custom_product_status_publish
     * @property string|null $custom_product_status_publish_date
     * @property float|null $custom_product_last_price
     * @property string|null $custom_product_last_price_date
     * @property bool|null $custom_product_status_price_discount
     * @property float|null $custom_product_last_price_discount_percentage
     * @property string|null $custom_product_last_price_discount_type
     * @property string|null $custom_product_index_image_url
     * @property int|null $custom_product_category_id
     * @property string|null $custom_product_category_name
     * @property int|null $custom_product_shop_id
     * @property int|null $custom_product_registry_user_id
     * @property int|null $custom_product_quantity_total
     * @property int|null $custom_product_quantity_sold
     * @property int|null $custom_product_quantity_selling
     * @property int|null $custom_product_quantity_returned
     * @property int|null $custom_product_number_comments
     * @property float|null $custom_product_total_points
     * @property float|null $custom_product_average_points
     * @property float|null $custom_product_last_point
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ProductCategory $customProductCategory
     * @method BelongsTo|_IH_ProductCategory_QB customProductCategory()
     * @property _IH_ProductCustomerComments_C|ProductCustomerComments[] $customProductCustomerComments
     * @property-read int $custom_product_customer_comments_count
     * @method MorphToMany|_IH_ProductCustomerComments_QB customProductCustomerComments()
     * @property _IH_ProductPriceHistory_C|ProductPriceHistory[] $customProductPrices
     * @property-read int $custom_product_prices_count
     * @method MorphToMany|_IH_ProductPriceHistory_QB customProductPrices()
     * @property User $customProductSystemConfirm
     * @method BelongsTo|_IH_User_QB customProductSystemConfirm()
     * @property _IH_ProductTag_C|ProductTag[] $customProductTags
     * @property-read int $custom_product_tags_count
     * @method MorphToMany|_IH_ProductTag_QB customProductTags()
     * @property _IH_Detail_C|Detail[] $normalProductDetails
     * @property-read int $normal_product_details_count
     * @method MorphToMany|_IH_Detail_QB normalProductDetails()
     * @property _IH_ConfirmComment_C|ConfirmComment[] $normalProductStatuses
     * @property-read int $normal_product_statuses_count
     * @method MorphToMany|_IH_ConfirmComment_QB normalProductStatuses()
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property User $shopkeeper
     * @method BelongsTo|_IH_User_QB shopkeeper()
     * @method static _IH_CustomProduct_QB onWriteConnection()
     * @method _IH_CustomProduct_QB newQuery()
     * @method static _IH_CustomProduct_QB on(null|string $connection = null)
     * @method static _IH_CustomProduct_QB query()
     * @method static _IH_CustomProduct_QB with(array|string $relations)
     * @method _IH_CustomProduct_QB newModelQuery()
     * @method static _IH_CustomProduct_C|CustomProduct[] all()
     * @mixin _IH_CustomProduct_QB
     */
    class CustomProduct extends Model {}
    
    /**
     * @property int $id
     * @property string|null $custom_services_name
     * @property string|null $custom_services_description
     * @property string|null $custom_services_info
     * @property string|null $custom_services_note
     * @property int|null $custom_services_last_price
     * @property string|null $custom_services_last_price_date
     * @property bool|null $custom_services_status_price_discount
     * @property float|null $custom_services_last_price_discount_percentage
     * @property string|null $custom_services_last_price_discount_type
     * @property string|null $custom_services_index_image_url
     * @property int|null $custom_service_category_id
     * @property string|null $custom_services_category_name
     * @property int|null $custom_services_shop_id
     * @property int|null $custom_services_registry_user_id
     * @property bool|null $custom_services_status_accept
     * @property int|null $custom_services_status_confirm_user_id
     * @property string|null $custom_services_status_confirm_user_comment
     * @property bool|null $custom_services_status_publish
     * @property string|null $custom_services_status_publish_date
     * @property int|null $custom_services_quantity_sold
     * @property int|null $custom_services_quantity_selling
     * @property int|null $custom_services_quantity_returned
     * @property int|null $custom_services_number_comments
     * @property float|null $custom_services_total_points
     * @property float|null $custom_services_average_points
     * @property float|null $custom_services_last_point
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ProductCategory $customProductCategory
     * @method BelongsTo|_IH_ProductCategory_QB customProductCategory()
     * @property _IH_ProductCustomerComments_C|ProductCustomerComments[] $customServiceCustomerComments
     * @property-read int $custom_service_customer_comments_count
     * @method MorphToMany|_IH_ProductCustomerComments_QB customServiceCustomerComments()
     * @property _IH_ProductPriceHistory_C|ProductPriceHistory[] $customServicePrices
     * @property-read int $custom_service_prices_count
     * @method MorphToMany|_IH_ProductPriceHistory_QB customServicePrices()
     * @property User $customServiceSystemConfirm
     * @method BelongsTo|_IH_User_QB customServiceSystemConfirm()
     * @property _IH_ProductTag_C|ProductTag[] $customServiceTags
     * @property-read int $custom_service_tags_count
     * @method MorphToMany|_IH_ProductTag_QB customServiceTags()
     * @property _IH_Detail_C|Detail[] $normalProductDetails
     * @property-read int $normal_product_details_count
     * @method MorphToMany|_IH_Detail_QB normalProductDetails()
     * @property _IH_ConfirmComment_C|ConfirmComment[] $normalProductStatuses
     * @property-read int $normal_product_statuses_count
     * @method MorphToMany|_IH_ConfirmComment_QB normalProductStatuses()
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property User $shopkeeper
     * @method BelongsTo|_IH_User_QB shopkeeper()
     * @method static _IH_CustomService_QB onWriteConnection()
     * @method _IH_CustomService_QB newQuery()
     * @method static _IH_CustomService_QB on(null|string $connection = null)
     * @method static _IH_CustomService_QB query()
     * @method static _IH_CustomService_QB with(array|string $relations)
     * @method _IH_CustomService_QB newModelQuery()
     * @method static _IH_CustomService_C|CustomService[] all()
     * @mixin _IH_CustomService_QB
     */
    class CustomService extends Model {}
    
    /**
     * @property int $id
     * @property int|null $productable_id
     * @property string|null $productable_type
     * @property string|null $product_name
     * @property int|null $product_attribute_name_id
     * @property string|null $product_attribute_name
     * @property int|null $product_attribute_value_id
     * @property string|null $product_attribute_value
     * @property string|null $priceable
     * @property string|null $price_type
     * @property int|null $price_id
     * @property float|null $price_value
     * @property string|null $detail_type
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $detilable
     * @method MorphTo detilable()
     * @method static _IH_Detail_QB onWriteConnection()
     * @method _IH_Detail_QB newQuery()
     * @method static _IH_Detail_QB on(null|string $connection = null)
     * @method static _IH_Detail_QB query()
     * @method static _IH_Detail_QB with(array|string $relations)
     * @method _IH_Detail_QB newModelQuery()
     * @method static _IH_Detail_C|Detail[] all()
     * @mixin _IH_Detail_QB
     */
    class Detail extends Model {}
    
    /**
     * @method static _IH_Membership_QB onWriteConnection()
     * @method _IH_Membership_QB newQuery()
     * @method static _IH_Membership_QB on(null|string $connection = null)
     * @method static _IH_Membership_QB query()
     * @method static _IH_Membership_QB with(array|string $relations)
     * @method _IH_Membership_QB newModelQuery()
     * @method static _IH_Membership_C|Membership[] all()
     * @mixin _IH_Membership_QB
     */
    class Membership extends Model {}
    
    /**
     * @property int $id
     * @property string|null $normal_product_name
     * @property string|null $normal_product_description
     * @property string|null $normal_product_info
     * @property string|null $normal_product_note
     * @property bool|null $normal_product_status_accept
     * @property int|null $normal_product_status_confirm_user_id
     * @property string|null $normal_product_status_confirm_user_comment
     * @property bool|null $normal_product_status_publish
     * @property string|null $normal_product_status_publish_date
     * @property float|null $normal_product_last_price
     * @property string|null $normal_product_last_price_date
     * @property bool|null $normal_product_status_price_discount
     * @property float|null $normal_product_last_price_discount_percentage
     * @property string|null $normal_product_last_price_discount_type
     * @property string|null $normal_product_index_image_url
     * @property int|null $normal_product_category_id
     * @property string|null $normal_product_category_name
     * @property int|null $normal_product_shop_id
     * @property int|null $normal_product_registry_user_id
     * @property int|null $normal_product_quantity_total
     * @property int|null $normal_product_quantity_sold
     * @property int|null $normal_product_quantity_selling
     * @property int|null $normal_product_quantity_returned
     * @property int|null $normal_product_number_comments
     * @property float|null $normal_product_total_points
     * @property float|null $normal_product_average_points
     * @property float|null $normal_product_last_point
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ProductCategory $normalProductCategory
     * @method BelongsTo|_IH_ProductCategory_QB normalProductCategory()
     * @property _IH_ProductCustomerComments_C|ProductCustomerComments[] $normalProductCustomerComments
     * @property-read int $normal_product_customer_comments_count
     * @method MorphToMany|_IH_ProductCustomerComments_QB normalProductCustomerComments()
     * @property _IH_Detail_C|Detail[] $normalProductDetails
     * @property-read int $normal_product_details_count
     * @method MorphToMany|_IH_Detail_QB normalProductDetails()
     * @property _IH_ProductsImage_C|ProductsImage[] $normalProductImages
     * @property-read int $normal_product_images_count
     * @method MorphToMany|_IH_ProductsImage_QB normalProductImages()
     * @property _IH_ProductPriceHistory_C|ProductPriceHistory[] $normalProductPrices
     * @property-read int $normal_product_prices_count
     * @method MorphToMany|_IH_ProductPriceHistory_QB normalProductPrices()
     * @property _IH_ConfirmComment_C|ConfirmComment[] $normalProductStatuses
     * @property-read int $normal_product_statuses_count
     * @method MorphToMany|_IH_ConfirmComment_QB normalProductStatuses()
     * @property User $normalProductSystemConfirm
     * @method BelongsTo|_IH_User_QB normalProductSystemConfirm()
     * @property _IH_NormalProduct_C|NormalProduct[] $normalProductTags
     * @property-read int $normal_product_tags_count
     * @method MorphToMany|_IH_NormalProduct_QB normalProductTags()
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property User $shopkeeper
     * @method BelongsTo|_IH_User_QB shopkeeper()
     * @method static _IH_NormalProduct_QB onWriteConnection()
     * @method _IH_NormalProduct_QB newQuery()
     * @method static _IH_NormalProduct_QB on(null|string $connection = null)
     * @method static _IH_NormalProduct_QB query()
     * @method static _IH_NormalProduct_QB with(array|string $relations)
     * @method _IH_NormalProduct_QB newModelQuery()
     * @method static _IH_NormalProduct_C|NormalProduct[] all()
     * @mixin _IH_NormalProduct_QB
     */
    class NormalProduct extends Model {}
    
    /**
     * @property int $id
     * @property string|null $normal_service_name
     * @property string|null $normal_service_description
     * @property int|null $normal_service_timespan_by_minutes
     * @property int|null $normal_service_number_sessions
     * @property float|null $normal_service_last_price
     * @property string|null $normal_service_last_price_date
     * @property bool|null $normal_service_status_price_discount
     * @property float|null $normal_service_last_price_discount_percentage
     * @property string|null $normal_service_last_price_discount_type
     * @property string|null $normal_service_index_image_url
     * @property int|null $normal_service_category_id
     * @property string|null $normal_service_category_name
     * @property int|null $normal_service_shop_id
     * @property int|null $normal_service_registry_user_id
     * @property bool|null $normal_service_status_accept
     * @property int|null $normal_service_status_confirm_user_id
     * @property string|null $normal_service_status_confirm_user_comment
     * @property bool|null $normal_service_status_publish
     * @property string|null $normal_service_status_publish_date
     * @property int|null $normal_service_number_comments
     * @property float|null $normal_service_total_points
     * @property float|null $normal_service_average_points
     * @property float|null $normal_service_last_point
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property ProductCategory $customProductCategory
     * @method BelongsTo|_IH_ProductCategory_QB customProductCategory()
     * @property _IH_ProductCustomerComments_C|ProductCustomerComments[] $customProductCustomerComments
     * @property-read int $custom_product_customer_comments_count
     * @method MorphToMany|_IH_ProductCustomerComments_QB customProductCustomerComments()
     * @property _IH_ProductPriceHistory_C|ProductPriceHistory[] $customProductPrices
     * @property-read int $custom_product_prices_count
     * @method MorphToMany|_IH_ProductPriceHistory_QB customProductPrices()
     * @property User $customProductSystemConfirm
     * @method BelongsTo|_IH_User_QB customProductSystemConfirm()
     * @property _IH_ProductTag_C|ProductTag[] $customProductTags
     * @property-read int $custom_product_tags_count
     * @method MorphToMany|_IH_ProductTag_QB customProductTags()
     * @property _IH_Detail_C|Detail[] $normalProductDetails
     * @property-read int $normal_product_details_count
     * @method MorphToMany|_IH_Detail_QB normalProductDetails()
     * @property _IH_ConfirmComment_C|ConfirmComment[] $normalProductStatuses
     * @property-read int $normal_product_statuses_count
     * @method MorphToMany|_IH_ConfirmComment_QB normalProductStatuses()
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property User $shopkeeper
     * @method BelongsTo|_IH_User_QB shopkeeper()
     * @method static _IH_NormalService_QB onWriteConnection()
     * @method _IH_NormalService_QB newQuery()
     * @method static _IH_NormalService_QB on(null|string $connection = null)
     * @method static _IH_NormalService_QB query()
     * @method static _IH_NormalService_QB with(array|string $relations)
     * @method _IH_NormalService_QB newModelQuery()
     * @method static _IH_NormalService_C|NormalService[] all()
     * @mixin _IH_NormalService_QB
     */
    class NormalService extends Model {}
    
    /**
     * @property int $id
     * @property int|null $parent_id
     * @property string|null $product_category_name
     * @property string|null $product_category_image_url
     * @property int|null $product_categoryable_id
     * @property string|null $product_categoryable_type
     * @property int|null $product_category_additional_user_id
     * @property string|null $product_category_additional_user_type
     * @property bool|null $product_category_accept_status
     * @property bool $product_category_publish_status
     * @property string|null $product_category_show_status
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_NormalProduct_C|NormalProduct[] $Products
     * @property-read int $products_count
     * @method HasMany|_IH_NormalProduct_QB Products()
     * @property User|null $categoryAdditionalUser
     * @method BelongsTo|_IH_User_QB categoryAdditionalUser()
     * @property _IH_ProductCategory_C|ProductCategory[] $child
     * @property-read int $child_count
     * @method HasMany|_IH_ProductCategory_QB child()
     * @property _IH_CustomProduct_C|CustomProduct[] $customProducts
     * @property-read int $custom_products_count
     * @method HasMany|_IH_CustomProduct_QB customProducts()
     * @property _IH_CustomService_C|CustomService[] $customServices
     * @property-read int $custom_services_count
     * @method HasMany|_IH_CustomService_QB customServices()
     * @property _IH_NormalProduct_C|NormalProduct[] $normalProducts
     * @property-read int $normal_products_count
     * @method HasMany|_IH_NormalProduct_QB normalProducts()
     * @property _IH_NormalService_C|NormalService[] $normalServices
     * @property-read int $normal_services_count
     * @method HasMany|_IH_NormalService_QB normalServices()
     * @property ProductCategory $parent
     * @method BelongsTo|_IH_ProductCategory_QB parent()
     * @property _IH_Task_C|Task[] $task
     * @property-read int $task_count
     * @method HasMany|_IH_Task_QB task()
     * @method static _IH_ProductCategory_QB onWriteConnection()
     * @method _IH_ProductCategory_QB newQuery()
     * @method static _IH_ProductCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductCategory_QB query()
     * @method static _IH_ProductCategory_QB with(array|string $relations)
     * @method _IH_ProductCategory_QB newModelQuery()
     * @method static _IH_ProductCategory_C|ProductCategory[] all()
     * @mixin _IH_ProductCategory_QB
     */
    class ProductCategory extends Model {}
    
    /**
     * @property int $id
     * @property string|null $product_customer_comment
     * @property int|null $product_customer_rate
     * @property int|null $user_id
     * @property string|null $product_customer_rate_weight_type
     * @property int|null $product_customer_rate_weight
     * @property int|null $product_customer_last_sum_rate
     * @property int|null $product_customer_last_average_rate
     * @property int|null $product_commentable_id
     * @property string|null $product_commentable_type
     * @property bool|null $product_customer_comment_access_status
     * @property bool|null $product_customer_comment_status
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $product_commentable
     * @method MorphTo product_commentable()
     * @method static _IH_ProductCustomerComments_QB onWriteConnection()
     * @method _IH_ProductCustomerComments_QB newQuery()
     * @method static _IH_ProductCustomerComments_QB on(null|string $connection = null)
     * @method static _IH_ProductCustomerComments_QB query()
     * @method static _IH_ProductCustomerComments_QB with(array|string $relations)
     * @method _IH_ProductCustomerComments_QB newModelQuery()
     * @method static _IH_ProductCustomerComments_C|ProductCustomerComments[] all()
     * @mixin _IH_ProductCustomerComments_QB
     */
    class ProductCustomerComments extends Model {}
    
    /**
     * @property Model $product_price_historiable
     * @method MorphTo product_price_historiable()
     * @method static _IH_ProductPriceHistory_QB onWriteConnection()
     * @method _IH_ProductPriceHistory_QB newQuery()
     * @method static _IH_ProductPriceHistory_QB on(null|string $connection = null)
     * @method static _IH_ProductPriceHistory_QB query()
     * @method static _IH_ProductPriceHistory_QB with(array|string $relations)
     * @method _IH_ProductPriceHistory_QB newModelQuery()
     * @method static _IH_ProductPriceHistory_C|ProductPriceHistory[] all()
     * @mixin _IH_ProductPriceHistory_QB
     */
    class ProductPriceHistory extends Model {}
    
    /**
     * @property int $id
     * @property string|null $product_tag_name
     * @property string|null $product_tag_image_url
     * @property bool|null $product_tag_publish_status
     * @property bool|null $product_tag_accept_status
     * @property int|null $product_tag_additional_user_id
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_CustomProduct_C|CustomProduct[] $customProducts
     * @property-read int $custom_products_count
     * @method MorphToMany|_IH_CustomProduct_QB customProducts()
     * @property _IH_CustomService_C|CustomService[] $customService
     * @property-read int $custom_service_count
     * @method MorphToMany|_IH_CustomService_QB customService()
     * @property _IH_NormalProduct_C|NormalProduct[] $normalProducts
     * @property-read int $normal_products_count
     * @method MorphToMany|_IH_NormalProduct_QB normalProducts()
     * @property _IH_NormalService_C|NormalService[] $normalService
     * @property-read int $normal_service_count
     * @method MorphToMany|_IH_NormalService_QB normalService()
     * @property User|null $tagAdditionalUser
     * @method BelongsTo|_IH_User_QB tagAdditionalUser()
     * @property _IH_Task_C|Task[] $task
     * @property-read int $task_count
     * @method MorphToMany|_IH_Task_QB task()
     * @method static _IH_ProductTag_QB onWriteConnection()
     * @method _IH_ProductTag_QB newQuery()
     * @method static _IH_ProductTag_QB on(null|string $connection = null)
     * @method static _IH_ProductTag_QB query()
     * @method static _IH_ProductTag_QB with(array|string $relations)
     * @method _IH_ProductTag_QB newModelQuery()
     * @method static _IH_ProductTag_C|ProductTag[] all()
     * @mixin _IH_ProductTag_QB
     */
    class ProductTag extends Model {}
    
    /**
     * @property int $id
     * @property int|null $products_imageable_id
     * @property string|null $products_imageable_type
     * @property string|null $image_url
     * @property string|null $image_thumbnail_url
     * @property int|null $image_index_param
     * @property string|null $image_type
     * @property string|null $image_format
     * @property string|null $image_size
     * @property string|null $image_resolution
     * @property string|null $file_name
     * @property int|null $uploader_user_id
     * @property string|null $uploader_user_date
     * @property bool|null $activate_status
     * @property bool|null $accept_status
     * @property bool|null $publish_status
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $product_imageable
     * @method MorphTo product_imageable()
     * @method static _IH_ProductsImage_QB onWriteConnection()
     * @method _IH_ProductsImage_QB newQuery()
     * @method static _IH_ProductsImage_QB on(null|string $connection = null)
     * @method static _IH_ProductsImage_QB query()
     * @method static _IH_ProductsImage_QB with(array|string $relations)
     * @method _IH_ProductsImage_QB newModelQuery()
     * @method static _IH_ProductsImage_C|ProductsImage[] all()
     * @mixin _IH_ProductsImage_QB
     */
    class ProductsImage extends Model {}
    
    /**
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property NormalProduct $shopNormalProducts
     * @method HasOneThrough|_IH_NormalProduct_QB shopNormalProducts()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_RolesShopsUsers_QB onWriteConnection()
     * @method _IH_RolesShopsUsers_QB newQuery()
     * @method static _IH_RolesShopsUsers_QB on(null|string $connection = null)
     * @method static _IH_RolesShopsUsers_QB query()
     * @method static _IH_RolesShopsUsers_QB with(array|string $relations)
     * @method _IH_RolesShopsUsers_QB newModelQuery()
     * @method static _IH_RolesShopsUsers_C|RolesShopsUsers[] all()
     * @mixin _IH_RolesShopsUsers_QB
     */
    class RolesShopsUsers extends Model {}
    
    /**
     * @property int $id
     * @property int|null $parent_id
     * @property string|null $parent_type
     * @property int|null $shop_category_id
     * @property string|null $shop_category_name
     * @property string|null $shop_category_type
     * @property string $name
     * @property string|null $description
     * @property string|null $shop_accept_status
     * @property int|null $shop_priority
     * @property string|null $shop_photo_url
     * @property bool|null $type_location
     * @property string|null $lat_location
     * @property string|null $long_location
     * @property string|null $shop_country
     * @property string|null $shop_province
     * @property string|null $shop_city
     * @property string|null $shop_local
     * @property string|null $shop_Street
     * @property string|null $shop_alley
     * @property string|null $shop_number
     * @property string|null $shop_postal_code
     * @property string|null $shop_main_phone_number
     * @property int|null $normal_product_number_points
     * @property float|null $normal_product_total_points
     * @property float|null $normal_product_average_points
     * @property float|null $normal_product_last_point
     * @property int|null $normal_product_number_likes
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Category $categories
     * @method BelongsTo|_IH_Category_QB categories()
     * @property _IH_Shop_C|Shop[] $child
     * @property-read int $child_count
     * @method HasMany|_IH_Shop_QB child()
     * @property _IH_CustomProduct_C|CustomProduct[] $customProducts
     * @property-read int $custom_products_count
     * @method HasMany|_IH_CustomProduct_QB customProducts()
     * @property _IH_CustomService_C|CustomService[] $customServices
     * @property-read int $custom_services_count
     * @method HasMany|_IH_CustomService_QB customServices()
     * @property _IH_ShopImages_C|ShopImages[] $images
     * @property-read int $images_count
     * @method HasMany|_IH_ShopImages_QB images()
     * @property _IH_NormalProduct_C|NormalProduct[] $normalProducts
     * @property-read int $normal_products_count
     * @method HasMany|_IH_NormalProduct_QB normalProducts()
     * @property _IH_NormalService_C|NormalService[] $normalServices
     * @property-read int $normal_services_count
     * @method HasMany|_IH_NormalService_QB normalServices()
     * @property Shop $parent
     * @method BelongsTo|_IH_Shop_QB parent()
     * @property _IH_Role_C|Role[] $role
     * @property-read int $role_count
     * @method BelongsToMany|_IH_Role_QB role()
     * @property _IH_Role_C|Role[] $roleOfRolesShopsUsers
     * @property-read int $role_of_roles_shops_users_count
     * @method BelongsToMany|_IH_Role_QB roleOfRolesShopsUsers()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method BelongsToMany|_IH_Tag_QB tags()
     * @property _IH_Tag_C|Tag[] $tagsByAccept
     * @property-read int $tags_by_accept_count
     * @method BelongsToMany|_IH_Tag_QB tagsByAccept()
     * @property _IH_User_C|User[] $user
     * @property-read int $user_count
     * @method BelongsToMany|_IH_User_QB user()
     * @property _IH_User_C|User[] $userOfRolesShopsUsers
     * @property-read int $user_of_roles_shops_users_count
     * @method BelongsToMany|_IH_User_QB userOfRolesShopsUsers()
     * @method static _IH_Shop_QB onWriteConnection()
     * @method _IH_Shop_QB newQuery()
     * @method static _IH_Shop_QB on(null|string $connection = null)
     * @method static _IH_Shop_QB query()
     * @method static _IH_Shop_QB with(array|string $relations)
     * @method _IH_Shop_QB newModelQuery()
     * @method static _IH_Shop_C|Shop[] all()
     * @mixin _IH_Shop_QB
     * @method static ShopFactory factory(...$parameters)
     */
    class Shop extends Model {}
    
    /**
     * @property int $id
     * @property int|null $shop_id
     * @property int|null $shop_image_index_point
     * @property string|null $shop_image_url
     * @property string|null $shop_image_type
     * @property string|null $shop_image_format
     * @property string|null $shop_image_size
     * @property string|null $shop_image_resolution
     * @property string|null $shop_image_old_name
     * @property string|null $shop_image_new_name
     * @property int|null $shop_image_uploader_user_id
     * @property bool|null $shop_image_accept_status
     * @property bool|null $shop_image_active_status
     * @property bool|null $shop_image_publish_status
     * @property string|null $shop_image_thumbnail_url
     * @property string|null $shop_image_thumbnail_name
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Shop $shop
     * @method BelongsTo|_IH_Shop_QB shop()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_ShopImages_QB onWriteConnection()
     * @method _IH_ShopImages_QB newQuery()
     * @method static _IH_ShopImages_QB on(null|string $connection = null)
     * @method static _IH_ShopImages_QB query()
     * @method static _IH_ShopImages_QB with(array|string $relations)
     * @method _IH_ShopImages_QB newModelQuery()
     * @method static _IH_ShopImages_C|ShopImages[] all()
     * @mixin _IH_ShopImages_QB
     */
    class ShopImages extends Model {}
    
    /**
     * @property _IH_Shop_C|Shop[] $shops
     * @property-read int $shops_count
     * @method BelongsToMany|_IH_Shop_QB shops()
     * @property _IH_Shop_C|Shop[] $shopsByAccept
     * @property-read int $shops_by_accept_count
     * @method BelongsToMany|_IH_Shop_QB shopsByAccept()
     * @method static _IH_Tag_QB onWriteConnection()
     * @method _IH_Tag_QB newQuery()
     * @method static _IH_Tag_QB on(null|string $connection = null)
     * @method static _IH_Tag_QB query()
     * @method static _IH_Tag_QB with(array|string $relations)
     * @method _IH_Tag_QB newModelQuery()
     * @method static _IH_Tag_C|Tag[] all()
     * @mixin _IH_Tag_QB
     * @method static TagFactory factory(...$parameters)
     */
    class Tag extends Model {}
    
    /**
     * @property int $id
     * @property string|null $task_name
     * @property string|null $task_description
     * @property string|null $task_info
     * @property string|null $task_note
     * @property bool|null $task_status_accept
     * @property int|null $task_status_confirm_user_id
     * @property int|null $custom_services_id
     * @property string|null $task_status_confirm_user_comment
     * @property bool|null $task_status_publish
     * @property string|null $task_status_publish_date
     * @property int|null $task_last_base_price
     * @property string|null $task_last_base_price_date
     * @property bool|null $task_status_base_price_discount
     * @property float|null $task_last_base_price_discount_percentage
     * @property string|null $task_last_base_price_discount_type
     * @property int|null $task_unit_of_measurement_id
     * @property string|null $task_unit_of_measurement_name
     * @property string|null $task_index_image_url
     * @property int|null $task_category_id
     * @property string|null $task_category_name
     * @property int|null $task_shop_id
     * @property int|null $task_registry_user_id
     * @property int|null $task_quantity_sold
     * @property int|null $task_quantity_selling
     * @property int|null $task_quantity_returned
     * @property int|null $task_number_comments
     * @property float|null $task_total_points
     * @property float|null $task_average_points
     * @property float|null $task_last_point
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Task_QB onWriteConnection()
     * @method _IH_Task_QB newQuery()
     * @method static _IH_Task_QB on(null|string $connection = null)
     * @method static _IH_Task_QB query()
     * @method static _IH_Task_QB with(array|string $relations)
     * @method _IH_Task_QB newModelQuery()
     * @method static _IH_Task_C|Task[] all()
     * @mixin _IH_Task_QB
     */
    class Task extends Model {}
    
    /**
     * @method static _IH_Team_QB onWriteConnection()
     * @method _IH_Team_QB newQuery()
     * @method static _IH_Team_QB on(null|string $connection = null)
     * @method static _IH_Team_QB query()
     * @method static _IH_Team_QB with(array|string $relations)
     * @method _IH_Team_QB newModelQuery()
     * @method static _IH_Team_C|Team[] all()
     * @mixin _IH_Team_QB
     * @method static TeamFactory factory(...$parameters)
     */
    class Team extends Model {}
    
    /**
     * @method static _IH_TeamInvitation_QB onWriteConnection()
     * @method _IH_TeamInvitation_QB newQuery()
     * @method static _IH_TeamInvitation_QB on(null|string $connection = null)
     * @method static _IH_TeamInvitation_QB query()
     * @method static _IH_TeamInvitation_QB with(array|string $relations)
     * @method _IH_TeamInvitation_QB newModelQuery()
     * @method static _IH_TeamInvitation_C|TeamInvitation[] all()
     * @mixin _IH_TeamInvitation_QB
     */
    class TeamInvitation extends Model {}
    
    /**
     * @method static _IH_TopModel_QB onWriteConnection()
     * @method _IH_TopModel_QB newQuery()
     * @method static _IH_TopModel_QB on(null|string $connection = null)
     * @method static _IH_TopModel_QB query()
     * @method static _IH_TopModel_QB with(array|string $relations)
     * @method _IH_TopModel_QB newModelQuery()
     * @method static _IH_TopModel_C|TopModel[] all()
     * @mixin _IH_TopModel_QB
     */
    class TopModel extends Model {}
    
    /**
     * @property int $id
     * @property string|null $name
     * @property string|null $first_name
     * @property string|null $last_name
     * @property string|null $username
     * @property string|null $email
     * @property Carbon|null $email_verified_at
     * @property string|null $mobile
     * @property Carbon|null $mobile_verified_at
     * @property string|null $mobile_verified_code
     * @property Carbon|null $mobile_verified_code_expire_time
     * @property string|null $password
     * @property string|null $remember_token
     * @property int|null $current_team_id
     * @property string|null $profile_photo_path
     * @property int|null $disable_by
     * @property Carbon|null $disable_at
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property-read string $profile_photo_url
     * @property _IH_CustomProduct_C|CustomProduct[] $confirmUserCustomProduct
     * @property-read int $confirm_user_custom_product_count
     * @method HasMany|_IH_CustomProduct_QB confirmUserCustomProduct()
     * @property _IH_CustomService_C|CustomService[] $confirmUserCustomService
     * @property-read int $confirm_user_custom_service_count
     * @method HasMany|_IH_CustomService_QB confirmUserCustomService()
     * @property _IH_NormalProduct_C|NormalProduct[] $confirmUserNormalProduct
     * @property-read int $confirm_user_normal_product_count
     * @method HasMany|_IH_NormalProduct_QB confirmUserNormalProduct()
     * @property _IH_NormalService_C|NormalService[] $confirmUserNormalService
     * @property-read int $confirm_user_normal_service_count
     * @method HasMany|_IH_NormalService_QB confirmUserNormalService()
     * @property _IH_Task_C|Task[] $confirmUserTask
     * @property-read int $confirm_user_task_count
     * @method HasMany|_IH_Task_QB confirmUserTask()
     * @property User|null $disabledBy
     * @method BelongsTo|_IH_User_QB disabledBy()
     * @property _IH_User_C|User[] $disabling
     * @property-read int $disabling_count
     * @method HasMany|_IH_User_QB disabling()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @property _IH_ProductCategory_C|ProductCategory[] $productCategoryAdditionalUser
     * @property-read int $product_category_additional_user_count
     * @method HasMany|_IH_ProductCategory_QB productCategoryAdditionalUser()
     * @property _IH_ProductTag_C|ProductTag[] $productTagAdditionalUser
     * @property-read int $product_tag_additional_user_count
     * @method HasMany|_IH_ProductTag_QB productTagAdditionalUser()
     * @property _IH_RolesShopsUsers_C|RolesShopsUsers[] $roleShopUser
     * @property-read int $role_shop_user_count
     * @method HasMany|_IH_RolesShopsUsers_QB roleShopUser()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB roles()
     * @property _IH_Shop_C|Shop[] $shop
     * @property-read int $shop_count
     * @method BelongsToMany|_IH_Shop_QB shop()
     * @property _IH_ShopImages_C|ShopImages[] $shopImages
     * @property-read int $shop_images_count
     * @method HasMany|_IH_ShopImages_QB shopImages()
     * @property _IH_CustomProduct_C|CustomProduct[] $shopkeeperCustomProduct
     * @property-read int $shopkeeper_custom_product_count
     * @method HasMany|_IH_CustomProduct_QB shopkeeperCustomProduct()
     * @property _IH_CustomService_C|CustomService[] $shopkeeperCustomService
     * @property-read int $shopkeeper_custom_service_count
     * @method HasMany|_IH_CustomService_QB shopkeeperCustomService()
     * @property _IH_NormalProduct_C|NormalProduct[] $shopkeeperNormalProduct
     * @property-read int $shopkeeper_normal_product_count
     * @method HasMany|_IH_NormalProduct_QB shopkeeperNormalProduct()
     * @property _IH_NormalService_C|NormalService[] $shopkeeperNormalService
     * @property-read int $shopkeeper_normal_service_count
     * @method HasMany|_IH_NormalService_QB shopkeeperNormalService()
     * @property _IH_Task_C|Task[] $shopkeeperTask
     * @property-read int $shopkeeper_task_count
     * @method HasMany|_IH_Task_QB shopkeeperTask()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     * @method static UserFactory factory(...$parameters)
     */
    class User extends Model {}
}

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_DatabaseNotification_QB onWriteConnection()
     * @method _IH_DatabaseNotification_QB newQuery()
     * @method static _IH_DatabaseNotification_QB on(null|string $connection = null)
     * @method static _IH_DatabaseNotification_QB query()
     * @method static _IH_DatabaseNotification_QB with(array|string $relations)
     * @method _IH_DatabaseNotification_QB newModelQuery()
     * @method static _IH_DatabaseNotification_C|DatabaseNotification[] all()
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}

namespace Laravel\Jetstream {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\Laravel\Jetstream\_IH_TeamInvitation_C;
    use LaravelIdea\Helper\Laravel\Jetstream\_IH_TeamInvitation_QB;
    
    /**
     * @method static _IH_TeamInvitation_QB onWriteConnection()
     * @method _IH_TeamInvitation_QB newQuery()
     * @method static _IH_TeamInvitation_QB on(null|string $connection = null)
     * @method static _IH_TeamInvitation_QB query()
     * @method static _IH_TeamInvitation_QB with(array|string $relations)
     * @method _IH_TeamInvitation_QB newModelQuery()
     * @method static _IH_TeamInvitation_C|TeamInvitation[] all()
     * @mixin _IH_TeamInvitation_QB
     */
    class TeamInvitation extends Model {}
}

namespace Laravel\Passport {

    use App\Models\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Laravel\Passport\Database\Factories\ClientFactory;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
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
     * @method static _IH_AuthCode_QB onWriteConnection()
     * @method _IH_AuthCode_QB newQuery()
     * @method static _IH_AuthCode_QB on(null|string $connection = null)
     * @method static _IH_AuthCode_QB query()
     * @method static _IH_AuthCode_QB with(array|string $relations)
     * @method _IH_AuthCode_QB newModelQuery()
     * @method static _IH_AuthCode_C|AuthCode[] all()
     * @mixin _IH_AuthCode_QB
     */
    class AuthCode extends Model {}
    
    /**
     * @property-read null|string $plain_secret
     * @method static _IH_Client_QB onWriteConnection()
     * @method _IH_Client_QB newQuery()
     * @method static _IH_Client_QB on(null|string $connection = null)
     * @method static _IH_Client_QB query()
     * @method static _IH_Client_QB with(array|string $relations)
     * @method _IH_Client_QB newModelQuery()
     * @method static _IH_Client_C|Client[] all()
     * @mixin _IH_Client_QB
     * @method static ClientFactory factory(...$parameters)
     */
    class Client extends Model {}
    
    /**
     * @method static _IH_PersonalAccessClient_QB onWriteConnection()
     * @method _IH_PersonalAccessClient_QB newQuery()
     * @method static _IH_PersonalAccessClient_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessClient_QB query()
     * @method static _IH_PersonalAccessClient_QB with(array|string $relations)
     * @method _IH_PersonalAccessClient_QB newModelQuery()
     * @method static _IH_PersonalAccessClient_C|PersonalAccessClient[] all()
     * @mixin _IH_PersonalAccessClient_QB
     */
    class PersonalAccessClient extends Model {}
    
    /**
     * @method static _IH_RefreshToken_QB onWriteConnection()
     * @method _IH_RefreshToken_QB newQuery()
     * @method static _IH_RefreshToken_QB on(null|string $connection = null)
     * @method static _IH_RefreshToken_QB query()
     * @method static _IH_RefreshToken_QB with(array|string $relations)
     * @method _IH_RefreshToken_QB newModelQuery()
     * @method static _IH_RefreshToken_C|RefreshToken[] all()
     * @mixin _IH_RefreshToken_QB
     */
    class RefreshToken extends Model {}
    
    /**
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Token_QB onWriteConnection()
     * @method _IH_Token_QB newQuery()
     * @method static _IH_Token_QB on(null|string $connection = null)
     * @method static _IH_Token_QB query()
     * @method static _IH_Token_QB with(array|string $relations)
     * @method _IH_Token_QB newModelQuery()
     * @method static _IH_Token_C|Token[] all()
     * @mixin _IH_Token_QB
     */
    class Token extends Model {}
}

namespace Laravel\Sanctum {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    
    /**
     * @property int $id
     * @property int $tokenable_id
     * @property string $tokenable_type
     * @property string $name
     * @property string $token
     * @property array|null $abilities
     * @property Carbon|null $last_used_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $tokenable
     * @method MorphTo tokenable()
     * @method static _IH_PersonalAccessToken_QB onWriteConnection()
     * @method _IH_PersonalAccessToken_QB newQuery()
     * @method static _IH_PersonalAccessToken_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessToken_QB query()
     * @method static _IH_PersonalAccessToken_QB with(array|string $relations)
     * @method _IH_PersonalAccessToken_QB newModelQuery()
     * @method static _IH_PersonalAccessToken_C|PersonalAccessToken[] all()
     * @mixin _IH_PersonalAccessToken_QB
     */
    class PersonalAccessToken extends Model {}
}

namespace Spatie\Permission\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
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
     * @method BelongsToMany|_IH_Role_QB roles()
     * @method static _IH_Permission_QB onWriteConnection()
     * @method _IH_Permission_QB newQuery()
     * @method static _IH_Permission_QB on(null|string $connection = null)
     * @method static _IH_Permission_QB query()
     * @method static _IH_Permission_QB with(array|string $relations)
     * @method _IH_Permission_QB newModelQuery()
     * @method static _IH_Permission_C|Permission[] all()
     * @mixin _IH_Permission_QB
     */
    class Permission extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $guard_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method BelongsToMany|_IH_Permission_QB permissions()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method static _IH_Role_C|Role[] all()
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}
}