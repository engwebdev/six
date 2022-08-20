<?php //25ccda332d571a995003b19acfb8a912
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;
    
    /**
     * @method $this hasShops(int $count, $attributes)
     */
    class CategoryFactory extends Factory {}
    
    /**
     * @method $this hasAccess(int $count, $attributes)
     * @method $this hasAccount(int $count, $attributes)
     * @method $this forCategories($attributes)
     * @method $this hasChild(int $count, $attributes)
     * @method $this hasChildren(int $count, $attributes)
     * @method $this hasCustomProducts(int $count, $attributes)
     * @method $this hasCustomServices(int $count, $attributes)
     * @method $this hasImages(int $count, $attributes)
     * @method $this hasNormalProducts(int $count, $attributes)
     * @method $this hasNormalServices(int $count, $attributes)
     * @method $this hasParentableType(int $count, $attributes)
     * @method $this hasParents(int $count, $attributes)
     * @method $this hasRole(int $count, $attributes)
     * @method $this hasRoleOfRolesShopsUsers(int $count, $attributes)
     * @method $this hasTags(int $count, $attributes)
     * @method $this hasTagsByAccept(int $count, $attributes)
     * @method $this hasUser(int $count, $attributes)
     * @method $this hasUserOfRolesShopsUsers(int $count, $attributes)
     * @method $this hasWorks(int $count, $attributes)
     */
    class ShopFactory extends Factory {}
    
    /**
     * @method $this hasShops(int $count, $attributes)
     * @method $this hasShopsByAccept(int $count, $attributes)
     */
    class TagFactory extends Factory {}
    
    /**
     * @method $this hasAccount(int $count, $attributes)
     * @method $this hasClients(int $count, $attributes)
     * @method $this hasConfirmUserCustomProduct(int $count, $attributes)
     * @method $this hasConfirmUserCustomService(int $count, $attributes)
     * @method $this hasConfirmUserNormalProduct(int $count, $attributes)
     * @method $this hasConfirmUserNormalService(int $count, $attributes)
     * @method $this hasConfirmUserTask(int $count, $attributes)
     * @method $this forDisabledBy($attributes)
     * @method $this hasDisabling(int $count, $attributes)
     * @method $this hasNotifications(int $count, $attributes)
     * @method $this hasPermissions(int $count, $attributes)
     * @method $this hasProductCategoryAdditionalUser(int $count, $attributes)
     * @method $this hasProductTagAdditionalUser(int $count, $attributes)
     * @method $this hasReadNotifications(int $count, $attributes)
     * @method $this hasRoleShopUser(int $count, $attributes)
     * @method $this hasRoles(int $count, $attributes)
     * @method $this hasShop(int $count, $attributes)
     * @method $this hasShopImages(int $count, $attributes)
     * @method $this hasShopkeeperCustomProduct(int $count, $attributes)
     * @method $this hasShopkeeperCustomService(int $count, $attributes)
     * @method $this hasShopkeeperNormalProduct(int $count, $attributes)
     * @method $this hasShopkeeperNormalService(int $count, $attributes)
     * @method $this hasShopkeeperTask(int $count, $attributes)
     * @method $this hasTokens(int $count, $attributes)
     * @method $this hasUnreadNotifications(int $count, $attributes)
     */
    class UserFactory extends Factory {}
}