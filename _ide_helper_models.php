<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string|null $attribute_name
 * @property int|null $attribute_additional_user_id
 * @property string|null $attribute_additional_type
 * @property int|null $attribute_status_accept
 * @property int|null $attribute_publish_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Query\Builder|Attribute onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAttributeAdditionalType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAttributeAdditionalUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAttributeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAttributePublishStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereAttributeStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Attribute withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Attribute withoutTrashed()
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttributeValue
 *
 * @property int $id
 * @property int|null $attribute_id
 * @property string|null $attribute_name
 * @property string|null $attribute_value_name
 * @property int|null $attribute_value_additional_user_id
 * @property string|null $attribute_value_additional_type
 * @property int|null $attribute_value_status_accept
 * @property int|null $attribute_value_publish_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue newQuery()
 * @method static \Illuminate\Database\Query\Builder|AttributeValue onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeValueAdditionalType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeValueAdditionalUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeValueName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeValuePublishStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereAttributeValueStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|AttributeValue withTrashed()
 * @method static \Illuminate\Database\Query\Builder|AttributeValue withoutTrashed()
 */
	class AttributeValue extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Category
 *
 * @package App\Models
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ConfirmComment
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $confirm_commentable_id ای دی محصول مورد تایی
 * @property string|null $confirm_commentable_type نوع موجودیت محصول
 * @property int|null $system_user_id
 * @property string|null $system_user_comment
 * @property int|null $confirm_comment_value مقداری که در جدول محصول برای استاتوس رد و تایید وارد میشود
 * @property int|null $type_review مقدار برای انتشار شده / انتتشار نشده
 * @property string|null $type_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $confirm_commentable
 * @property-read \Illuminate\Database\Eloquent\Collection|ConfirmComment[] $replies
 * @property-read int|null $replies_count
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment newQuery()
 * @method static \Illuminate\Database\Query\Builder|ConfirmComment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereConfirmCommentValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereConfirmCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereConfirmCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereSystemUserComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereSystemUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereTypeReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereTypeStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfirmComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ConfirmComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ConfirmComment withoutTrashed()
 */
	class ConfirmComment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomProduct
 *
 * @property int $id
 * @property string|null $custom_product_name
 * @property string|null $custom_product_description
 * @property string|null $custom_product_info
 * @property string|null $custom_product_note
 * @property int|null $custom_product_status_accept تایید / رد
 * @property int|null $custom_product_status_confirm_user_id ای دی کاربر سیستم تایید کننده - رلیشن با جدول
 * @property string|null $custom_product_status_confirm_user_comment اخرین نظر کاربر تایید کننده - رلیشن با جدول
 * @property int|null $custom_product_status_publish وضعیت انتشار - برای زمان موجود عدم موجود
 * @property string|null $custom_product_status_publish_date تاریخ تایید انتشار
 * @property float|null $custom_product_last_price اخرین قیمت از جدول قیمتها
 * @property string|null $custom_product_last_price_date تاریخ وارد کردن اخرین قیمت از جدول قیمتها
 * @property int|null $custom_product_status_price_discount تخفیف دارد / ندارد
 * @property float|null $custom_product_last_price_discount_percentage مقدار تخفیف به درصد
 * @property string|null $custom_product_last_price_discount_type نوع تخفیف
 * @property string|null $custom_product_index_image_url ادرس تصویر شاخص از جدول تصاویر
 * @property int|null $custom_product_category_id ای دی دسته بندی محصول از دسته بندی های محصولات
 * @property string|null $custom_product_category_name ای دی دسته بندی محصول سفارشی از دسته بندی های محصولات سفارشی
 * @property int|null $custom_product_shop_id
 * @property int|null $custom_product_registry_user_id
 * @property int|null $custom_product_quantity_total تعداد کل وارد شده توسط کاربر
 * @property int|null $custom_product_quantity_sold تعداد فروخته شده
 * @property int|null $custom_product_quantity_selling تعداد در حال فروش
 * @property int|null $custom_product_quantity_returned تعداد برگشتی
 * @property int|null $custom_product_number_comments تعداد نظرات یا امتیازها رلیشن با جدول نظرات
 * @property float|null $custom_product_total_points مجموع امتیازها
 * @property float|null $custom_product_average_points متوسط امتیازها
 * @property float|null $custom_product_last_point اخرین امتیاز
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductCategory $customProductCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductCustomerComments[] $customProductCustomerComments
 * @property-read int|null $custom_product_customer_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductPriceHistory[] $customProductPrices
 * @property-read int|null $custom_product_prices_count
 * @property-read \App\Models\User $customProductSystemConfirm
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTag[] $customProductTags
 * @property-read int|null $custom_product_tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Detail[] $normalProductDetails
 * @property-read int|null $normal_product_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ConfirmComment[] $normalProductStatuses
 * @property-read int|null $normal_product_statuses_count
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\User $shopkeeper
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct newQuery()
 * @method static \Illuminate\Database\Query\Builder|CustomProduct onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductAveragePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductIndexImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductLastPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductLastPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductLastPriceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductLastPriceDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductLastPriceDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductNumberComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductQuantityReturned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductQuantitySelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductQuantitySold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductQuantityTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductRegistryUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductStatusConfirmUserComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductStatusConfirmUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductStatusPriceDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductStatusPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductStatusPublishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereCustomProductTotalPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CustomProduct withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CustomProduct withoutTrashed()
 */
	class CustomProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomService
 *
 * @property int $id
 * @property string|null $custom_services_name
 * @property string|null $custom_services_description
 * @property string|null $custom_services_info
 * @property string|null $custom_services_note
 * @property int|null $custom_services_last_price اخرین قیمت از جدول قیمتها
 * @property string|null $custom_services_last_price_date تاریخ وارد کردن اخرین قیمت از جدول قیمتها
 * @property int|null $custom_services_status_price_discount تخفیف دارد / ندارد
 * @property float|null $custom_services_last_price_discount_percentage مقدار تخفیف به درصد
 * @property string|null $custom_services_last_price_discount_type نوع تخفیف
 * @property string|null $custom_services_index_image_url ادرس تصویر شاخص از جدول تصاویر
 * @property int|null $custom_service_category_id ای دی دسته بندی محصول از دسته بندی های محصولات
 * @property string|null $custom_services_category_name نام دسته بندی سرویس سفارشی از دسته بندی های سروریسهای سفارشات
 * @property int|null $custom_services_shop_id
 * @property int|null $custom_services_registry_user_id
 * @property int|null $custom_services_status_accept تایید / رد
 * @property int|null $custom_services_status_confirm_user_id ای دی کاربر سیستم تایید کننده - رلیشن با جدول
 * @property string|null $custom_services_status_confirm_user_comment اخرین نظر کاربر تایید کننده - رلیشن با جدول
 * @property int|null $custom_services_status_publish وضعیت انتشار - برای زمان موجود عدم موجود
 * @property string|null $custom_services_status_publish_date تاریخ تایید انتشار
 * @property int|null $custom_services_quantity_sold تعداد فروخته شده
 * @property int|null $custom_services_quantity_selling تعداد در حال فروش
 * @property int|null $custom_services_quantity_returned تعداد برگشتی
 * @property int|null $custom_services_number_comments تعداد نظرات یا امتیازها رلیشن با جدول نظرات
 * @property float|null $custom_services_total_points مجموع امتیازها
 * @property float|null $custom_services_average_points متوسط امتیازها
 * @property float|null $custom_services_last_point اخرین امتیاز
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductCategory $customProductCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductCustomerComments[] $customServiceCustomerComments
 * @property-read int|null $custom_service_customer_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductPriceHistory[] $customServicePrices
 * @property-read int|null $custom_service_prices_count
 * @property-read \App\Models\User $customServiceSystemConfirm
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTag[] $customServiceTags
 * @property-read int|null $custom_service_tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Detail[] $normalProductDetails
 * @property-read int|null $normal_product_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ConfirmComment[] $normalProductStatuses
 * @property-read int|null $normal_product_statuses_count
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\User $shopkeeper
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService newQuery()
 * @method static \Illuminate\Database\Query\Builder|CustomService onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServiceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesAveragePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesIndexImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesLastPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesLastPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesLastPriceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesLastPriceDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesLastPriceDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesNumberComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesQuantityReturned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesQuantitySelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesQuantitySold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesRegistryUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesStatusConfirmUserComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesStatusConfirmUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesStatusPriceDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesStatusPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesStatusPublishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereCustomServicesTotalPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CustomService withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CustomService withoutTrashed()
 */
	class CustomService extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Detail
 *
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
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $detilable
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newQuery()
 * @method static \Illuminate\Database\Query\Builder|Detail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereDetailType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail wherePriceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail wherePriceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail wherePriceValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail wherePriceable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductAttributeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductAttributeNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductAttributeValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductAttributeValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Detail withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Detail withoutTrashed()
 */
	class Detail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NormalProduct
 *
 * @property int $id
 * @property string|null $normal_product_name
 * @property string|null $normal_product_description
 * @property string|null $normal_product_info
 * @property string|null $normal_product_note
 * @property int|null $normal_product_status_accept تایید / رد
 * @property int|null $normal_product_status_confirm_user_id ای دی کاربر سیستم تایید کننده - رلیشن با جدول
 * @property string|null $normal_product_status_confirm_user_comment اخرین نظر کاربر تایید کننده - رلیشن با جدول
 * @property int|null $normal_product_status_publish وضعیت انتشار - برای زمان موجود عدم موجود
 * @property string|null $normal_product_status_publish_date تاریخ تایید انتشار
 * @property float|null $normal_product_last_price اخرین قیمت از جدول قیمتها
 * @property string|null $normal_product_last_price_date تاریخ وارد کردن اخرین قیمت از جدول قیمتها
 * @property int|null $normal_product_status_price_discount تخفیف دارد / ندارد
 * @property float|null $normal_product_last_price_discount_percentage مقدار تخفیف به درصد
 * @property string|null $normal_product_last_price_discount_type نوع تخفیف
 * @property string|null $normal_product_index_image_url ادرس تصویر شاخص از جدئل تصاویر
 * @property int|null $normal_product_category_id ای دی دسته بندی محصول از دسته بندی های محصولات
 * @property string|null $normal_product_category_name
 * @property int|null $normal_product_shop_id
 * @property int|null $normal_product_registry_user_id
 * @property int|null $normal_product_quantity_total تعداد کل وارد شده توسط کاربر
 * @property int|null $normal_product_quantity_sold تعداد فروخته شده
 * @property int|null $normal_product_quantity_selling تعداد در حال فروش
 * @property int|null $normal_product_quantity_returned تعداد برگشتی
 * @property int|null $normal_product_number_comments تعداد نظرات یا امتیازها رلیشن با جدول نظرات
 * @property float|null $normal_product_total_points مجموع امتیازها
 * @property float|null $normal_product_average_points متوسط امتیازها
 * @property float|null $normal_product_last_point اخرین امتیاز
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductCategory $normalProductCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductCustomerComments[] $normalProductCustomerComments
 * @property-read int|null $normal_product_customer_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Detail[] $normalProductDetails
 * @property-read int|null $normal_product_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductsImage[] $normalProductImages
 * @property-read int|null $normal_product_images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductPriceHistory[] $normalProductPrices
 * @property-read int|null $normal_product_prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ConfirmComment[] $normalProductStatuses
 * @property-read int|null $normal_product_statuses_count
 * @property-read \App\Models\User $normalProductSystemConfirm
 * @property-read \Illuminate\Database\Eloquent\Collection|NormalProduct[] $normalProductTags
 * @property-read int|null $normal_product_tags_count
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\User $shopkeeper
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct newQuery()
 * @method static \Illuminate\Database\Query\Builder|NormalProduct onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductAveragePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductIndexImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductLastPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductLastPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductLastPriceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductLastPriceDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductLastPriceDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductNumberComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductQuantityReturned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductQuantitySelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductQuantitySold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductQuantityTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductRegistryUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductStatusConfirmUserComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductStatusConfirmUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductStatusPriceDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductStatusPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductStatusPublishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereNormalProductTotalPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|NormalProduct withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NormalProduct withoutTrashed()
 */
	class NormalProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NormalService
 *
 * @property int $id
 * @property string|null $normal_service_name
 * @property string|null $normal_service_description
 * @property int|null $normal_service_timespan_by_minutes
 * @property int|null $normal_service_number_sessions
 * @property float|null $normal_service_last_price
 * @property string|null $normal_service_last_price_date تاریخ وارد کردن اخرین قیمت از جدول قیمتها
 * @property int|null $normal_service_status_price_discount تخفیف دارد / ندارد
 * @property float|null $normal_service_last_price_discount_percentage مقدار تخفیف به درصد
 * @property string|null $normal_service_last_price_discount_type نوع تخفیف
 * @property string|null $normal_service_index_image_url ادرس تصویر شاخص از جدول تصاویر
 * @property int|null $normal_service_category_id ای دی دسته بندی محصول از دسته بندی های محصولات سرویس عادی
 * @property string|null $normal_service_category_name ای دی دسته بندی محصول سفارشی از دسته بندی های محصولات  سرویس عادی
 * @property int|null $normal_service_shop_id
 * @property int|null $normal_service_registry_user_id
 * @property int|null $normal_service_status_accept تایید / رد
 * @property int|null $normal_service_status_confirm_user_id ای دی کاربر سیستم تایید کننده - رلیشن با جدول
 * @property string|null $normal_service_status_confirm_user_comment اخرین نظر کاربر تایید کننده - رلیشن با جدول
 * @property int|null $normal_service_status_publish وضعیت انتشار - برای زمان موجود عدم موجود
 * @property string|null $normal_service_status_publish_date تاریخ تایید انتشار
 * @property int|null $normal_service_number_comments تعداد نظرات یا امتیازها رلیشن با جدول نظرات
 * @property float|null $normal_service_total_points مجموع امتیازها
 * @property float|null $normal_service_average_points متوسط امتیازها
 * @property float|null $normal_service_last_point اخرین امتیاز
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductCategory $customProductCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductCustomerComments[] $customProductCustomerComments
 * @property-read int|null $custom_product_customer_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductPriceHistory[] $customProductPrices
 * @property-read int|null $custom_product_prices_count
 * @property-read \App\Models\User $customProductSystemConfirm
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTag[] $customProductTags
 * @property-read int|null $custom_product_tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Detail[] $normalProductDetails
 * @property-read int|null $normal_product_details_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ConfirmComment[] $normalProductStatuses
 * @property-read int|null $normal_product_statuses_count
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\User $shopkeeper
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService newQuery()
 * @method static \Illuminate\Database\Query\Builder|NormalService onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService query()
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceAveragePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceIndexImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceLastPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceLastPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceLastPriceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceLastPriceDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceLastPriceDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceNumberComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceNumberSessions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceRegistryUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceStatusConfirmUserComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceStatusConfirmUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceStatusPriceDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceStatusPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceStatusPublishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceTimespanByMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereNormalServiceTotalPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NormalService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|NormalService withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NormalService withoutTrashed()
 */
	class NormalService extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $product_category_name
 * @property string|null $product_category_image_url
 * @property int|null $product_categoryable_id ای دی محصول مورد تایی
 * @property string|null $product_categoryable_type نوع موجودیت محصول
 * @property int|null $product_category_additional_user_id
 * @property string|null $product_category_additional_user_type
 * @property int|null $product_category_accept_status
 * @property int $product_category_publish_status
 * @property string|null $product_category_show_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $categoryAdditionalUser
 * @property-read \Illuminate\Database\Eloquent\Collection|ProductCategory[] $child
 * @property-read int|null $child_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomProduct[] $customProducts
 * @property-read int|null $custom_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomService[] $customServices
 * @property-read int|null $custom_services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalProduct[] $normalProducts
 * @property-read int|null $normal_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalService[] $normalServices
 * @property-read int|null $normal_services_count
 * @property-read ProductCategory $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $task
 * @property-read int|null $task_count
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryAcceptStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryAdditionalUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryAdditionalUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryPublishStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryShowStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereProductCategoryableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductCategory withoutTrashed()
 */
	class ProductCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCustomerComments
 *
 * @property int $id
 * @property string|null $product_customer_comment
 * @property int|null $product_customer_rate
 * @property int|null $user_id
 * @property string|null $product_customer_rate_weight_type
 * @property int|null $product_customer_rate_weight مققداری که در امتیاز ضرب میشود و تعداد به همان مقدار به تعداد نظرات افزوده میشود
 * @property int|null $product_customer_last_sum_rate
 * @property int|null $product_customer_last_average_rate
 * @property int|null $product_commentable_id ای دی محصول مورد تایی
 * @property string|null $product_commentable_type نوع موجودیت محصول
 * @property int|null $product_customer_comment_access_status
 * @property int|null $product_customer_comment_status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $product_commentable
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductCustomerComments onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerCommentAccessStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerCommentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerLastAverageRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerLastSumRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerRateWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereProductCustomerRateWeightType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCustomerComments whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|ProductCustomerComments withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductCustomerComments withoutTrashed()
 */
	class ProductCustomerComments extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductPriceHistory
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $product_price_historiable
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPriceHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPriceHistory newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductPriceHistory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPriceHistory query()
 * @method static \Illuminate\Database\Query\Builder|ProductPriceHistory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductPriceHistory withoutTrashed()
 */
	class ProductPriceHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductTag
 *
 * @property int $id
 * @property string|null $product_tag_name
 * @property string|null $product_tag_image_url
 * @property int|null $product_tag_publish_status
 * @property int|null $product_tag_accept_status
 * @property int|null $product_tag_additional_user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomProduct[] $customProducts
 * @property-read int|null $custom_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomService[] $customService
 * @property-read int|null $custom_service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalProduct[] $normalProducts
 * @property-read int|null $normal_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalService[] $normalService
 * @property-read int|null $normal_service_count
 * @property-read \App\Models\User|null $tagAdditionalUser
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $task
 * @property-read int|null $task_count
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductTag onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereProductTagAcceptStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereProductTagAdditionalUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereProductTagImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereProductTagName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereProductTagPublishStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductTag withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductTag withoutTrashed()
 */
	class ProductTag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductsImage
 *
 * @property int $id
 * @property int|null $products_imageable_id ای دی محصولی ک قیمت دارد
 * @property string|null $products_imageable_type نوع موجودیت محصول
 * @property string|null $image_url
 * @property string|null $image_thumbnail_url ادرس تصویر بند انگشتی
 * @property int|null $image_index_param هر چی بزرگتر در اولویت بیشتر
 * @property string|null $image_type نوع تصویر
 * @property string|null $image_format فرمت فایل
 * @property string|null $image_size سایز فایل
 * @property string|null $image_resolution مقدار رزولوشن
 * @property string|null $file_name نام فایل هنگام دریافت
 * @property int|null $uploader_user_id کاربر
 * @property string|null $uploader_user_date تاریخ
 * @property int|null $activate_status فعال / غیرفعال
 * @property int|null $accept_status تاببد / رد
 * @property int|null $publish_status منتشر / عدم انتشار
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $product_imageable
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductsImage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereAcceptStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereActivateStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageIndexParam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageResolution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereProductsImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereProductsImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage wherePublishStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereUploaderUserDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsImage whereUploaderUserId($value)
 * @method static \Illuminate\Database\Query\Builder|ProductsImage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductsImage withoutTrashed()
 */
	class ProductsImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RolesShopsUsers
 *
 * @property-read \Spatie\Permission\Models\Role $role
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\NormalProduct|null $shopNormalProducts
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|RolesShopsUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RolesShopsUsers newQuery()
 * @method static \Illuminate\Database\Query\Builder|RolesShopsUsers onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RolesShopsUsers query()
 * @method static \Illuminate\Database\Query\Builder|RolesShopsUsers withTrashed()
 * @method static \Illuminate\Database\Query\Builder|RolesShopsUsers withoutTrashed()
 */
	class RolesShopsUsers extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Shop
 *
 * @package App\Models
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $parent_type
 * @property int|null $shop_category_id
 * @property string $name
 * @property string|null $description
 * @property string|null $shop_accept_status
 * @property int|null $shop_priority
 * @property string|null $shop_photo_url
 * @property int|null $type_location
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
 * @property int|null $normal_product_number_points تعداد نظرات یا امتیازها رلیشن با جدول نظرات
 * @property float|null $normal_product_total_points مجموع امتیازها
 * @property float|null $normal_product_average_points متوسط امتیازها
 * @property float|null $normal_product_last_point اخرین امتیاز
 * @property int|null $normal_product_number_likes تعداد لایک ها ارتباط با جدول کسانی ک لایک کردن
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $categories
 * @property-read \Illuminate\Database\Eloquent\Collection|Shop[] $child
 * @property-read int|null $child_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomProduct[] $customProducts
 * @property-read int|null $custom_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomService[] $customServices
 * @property-read int|null $custom_services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShopImages[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalProduct[] $normalProducts
 * @property-read int|null $normal_products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalService[] $normalServices
 * @property-read int|null $normal_services_count
 * @property-read Shop $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $role
 * @property-read int|null $role_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roleOfRolesShopsUsers
 * @property-read int|null $role_of_roles_shops_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tagsByAccept
 * @property-read int|null $tags_by_accept_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @property-read int|null $user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $userOfRolesShopsUsers
 * @property-read int|null $user_of_roles_shops_users_count
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Database\Factories\ShopFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Query\Builder|Shop onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop order($sort, $order)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop shopAcceptStatus($status)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop shopAccepted()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop shopRejected()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLatLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLongLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNormalProductAveragePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNormalProductLastPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNormalProductNumberLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNormalProductNumberPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNormalProductTotalPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopAcceptStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopAlley($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopLocal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopMainPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopPhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopPostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopPriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereTypeLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Shop withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Shop withoutTrashed()
 */
	class Shop extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopImages
 *
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
 * @property int|null $shop_image_accept_status
 * @property int|null $shop_image_active_status
 * @property int|null $shop_image_publish_status
 * @property string|null $shop_image_thumbnail_url
 * @property string|null $shop_image_thumbnail_name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shop $shop
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages newQuery()
 * @method static \Illuminate\Database\Query\Builder|ShopImages onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageAcceptStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageIndexPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageNewName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageOldName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImagePublishStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageResolution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageThumbnailName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageUploaderUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereShopImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopImages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ShopImages withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ShopImages withoutTrashed()
 */
	class ShopImages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shopsByAccept
 * @property-read int|null $shops_by_accept_count
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Database\Factories\TagFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Query\Builder|Tag onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Query\Builder|Tag withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Tag withoutTrashed()
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Task
 *
 * @property int $id
 * @property string|null $task_name
 * @property string|null $task_description
 * @property string|null $task_info
 * @property string|null $task_note
 * @property int|null $task_status_accept تایید / رد
 * @property int|null $task_status_confirm_user_id ای دی کاربر سیستم تایید کننده - رلیشن با جدول
 * @property int|null $custom_services_id ای دی سروریس سفارشی - رلیشن با جدول
 * @property string|null $task_status_confirm_user_comment اخرین نظر کاربر تایید کننده - رلیشن با جدول
 * @property int|null $task_status_publish وضعیت انتشار - برای زمان موجود عدم موجود
 * @property string|null $task_status_publish_date تاریخ تایید انتشار
 * @property int|null $task_last_base_price اخرین قیمت پایه از جدول قیمتها
 * @property string|null $task_last_base_price_date تاریخ وارد کردن اخرین قیمت پایه از جدول قیمتها
 * @property int|null $task_status_base_price_discount تخفیف دارد / ندارد
 * @property float|null $task_last_base_price_discount_percentage مقدار تخفیف به درصد
 * @property string|null $task_last_base_price_discount_type نوع تخفیف
 * @property int|null $task_unit_of_measurement_id ای دی اسم واحد اندازه گیری از جدول اطلاعات پایه واحد
 * @property string|null $task_unit_of_measurement_name اسم واحد انازه گیری مثل متر
 * @property string|null $task_index_image_url ادرس تصویر شاخص از جدول تصاویر
 * @property int|null $task_category_id ای دی دسته بندی محصول از دسته بندی های محصولات
 * @property string|null $task_category_name نام دسته بندی تسک از دسته بندی های تسکها
 * @property int|null $task_shop_id
 * @property int|null $task_registry_user_id
 * @property int|null $task_quantity_sold تعداد فروخته شده
 * @property int|null $task_quantity_selling تعداد در حال فروش
 * @property int|null $task_quantity_returned تعداد برگشتی
 * @property int|null $task_number_comments تعداد نظرات یا امتیازها رلیشن با جدول نظرات
 * @property float|null $task_total_points مجموع امتیازها
 * @property float|null $task_average_points متوسط امتیازها
 * @property float|null $task_last_point اخرین امتیاز
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Query\Builder|Task onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCustomServicesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskAveragePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskIndexImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskLastBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskLastBasePriceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskLastBasePriceDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskLastBasePriceDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskLastPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskNumberComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskQuantityReturned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskQuantitySelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskQuantitySold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskRegistryUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskStatusAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskStatusBasePriceDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskStatusConfirmUserComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskStatusConfirmUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskStatusPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskStatusPublishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskTotalPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskUnitOfMeasurementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskUnitOfMeasurementName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Task withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Task withoutTrashed()
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TopModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel customPagination($pagination)
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopModel query()
 */
	class TopModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @mixin Builder
 * @property int $id
 * @property string|null $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $mobile
 * @property string|null $mobile_verified_at
 * @property string|null $mobile_verified_code
 * @property string|null $mobile_verified_code_expire_time
 * @property string|null $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property int|null $disable_by
 * @property string|null $disable_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomProduct[] $confirmUserCustomProduct
 * @property-read int|null $confirm_user_custom_product_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomService[] $confirmUserCustomService
 * @property-read int|null $confirm_user_custom_service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalProduct[] $confirmUserNormalProduct
 * @property-read int|null $confirm_user_normal_product_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalService[] $confirmUserNormalService
 * @property-read int|null $confirm_user_normal_service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $confirmUserTask
 * @property-read int|null $confirm_user_task_count
 * @property-read User|null $disabledBy
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $disabling
 * @property-read int|null $disabling_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductCategory[] $productCategoryAdditionalUser
 * @property-read int|null $product_category_additional_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTag[] $productTagAdditionalUser
 * @property-read int|null $product_tag_additional_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RolesShopsUsers[] $roleShopUser
 * @property-read int|null $role_shop_user_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shop
 * @property-read int|null $shop_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShopImages[] $shopImages
 * @property-read int|null $shop_images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomProduct[] $shopkeeperCustomProduct
 * @property-read int|null $shopkeeper_custom_product_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomService[] $shopkeeperCustomService
 * @property-read int|null $shopkeeper_custom_service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalProduct[] $shopkeeperNormalProduct
 * @property-read int|null $shopkeeper_normal_product_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NormalService[] $shopkeeperNormalService
 * @property-read int|null $shopkeeper_normal_service_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $shopkeeperTask
 * @property-read int|null $shopkeeper_task_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User customFilter($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|User customOrder($sort)
 * @method static \Illuminate\Database\Eloquent\Builder|User customPagination($pagination)
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisableAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisableBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileVerifiedCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileVerifiedCodeExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

