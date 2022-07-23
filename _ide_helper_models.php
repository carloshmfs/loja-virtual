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
 * App\Models\Brand
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\BrandFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CouponType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponType whereUpdatedAt($value)
 */
	class CouponType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentType whereUpdatedAt($value)
 */
	class PaymentType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $category_id
 * @property int $brand_id
 * @property string $name
 * @property string|null $description
 * @property int $stock
 * @property int $price
 * @property int $old_price
 * @property float $rating
 * @property bool $featured
 * @property bool $sale
 * @property bool $best_seller
 * @property bool $new_product
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand $brand
 * @property-read \App\Models\ProductCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductImage[] $images
 * @property-read int|null $images_count
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBestSeller($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNewProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\ProductCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 */
	class ProductCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductImage
 *
 * @property int $id
 * @property int $product_id
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $products
 * @method static \Database\Factories\ProductImageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereUrl($value)
 */
	class ProductImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductRate
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property int $rating
 * @property string|null $commentary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereCommentary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRate whereUserId($value)
 */
	class ProductRate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductSpecification
 *
 * @property int $id
 * @property int $p_specification_tp_id
 * @property int $product_id
 * @property string $p_value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification wherePSpecificationTpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification wherePValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecification whereUpdatedAt($value)
 */
	class ProductSpecification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductSpecificationType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSpecificationType whereUpdatedAt($value)
 */
	class ProductSpecificationType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Purchase
 *
 * @property int $id
 * @property int $user_id
 * @property int $coupon_id
 * @property int $payment_tp_id
 * @property int $total_amount
 * @property int $payment_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePaymentTpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUserId($value)
 */
	class Purchase extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseProduct
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $product_id
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseProduct whereUpdatedAt($value)
 */
	class PurchaseProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseTransaction
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $value
 * @property int $transaction_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction whereTransactionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTransaction whereValue($value)
 */
	class PurchaseTransaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

