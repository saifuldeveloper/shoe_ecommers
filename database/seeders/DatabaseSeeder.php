<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EmailTemplate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
{
    $this->call([
         RolesTableSeeder::class,
        AdminsTableSeeder::class,
        // AttributesTableSeeder::class,
        // AttributeOptionsTableSeeder::class,
        BannersTableSeeder::class,
        BcategoriesTableSeeder::class,
        BrandsTableSeeder::class,
        // CampaignItemsTableSeeder::class,
        CategoriesTableSeeder::class,
        SubcategoriesTableSeeder::class,
        ChieldCategoriesTableSeeder::class, 
        CountriesTableSeeder::class,
        StatesTableSeeder::class,
        CurrenciesTableSeeder::class,
        EmailTemplatesTableSeeder::class,
        ExtraSettingsTableSeeder::class,
        // FaqsTableSeeder::class,
        // FcategoriesTableSeeder::class,
        // GalleriesTableSeeder::class,
        HomeCutomizesTableSeeder::class,
        // ItemsTableSeeder::class,
        JobsTableSeeder::class,
        LanguagesTableSeeder::class,
        MenusTableSeeder::class,
        // MessagesTableSeeder::class,
        NotificationsTableSeeder::class,
        // OrdersTableSeeder::class,
        PagesTableSeeder::class,
        PaymentSettingsTableSeeder::class,
        PostsTableSeeder::class,
        PromoCodesTableSeeder::class,
        // ReviewsTableSeeder::class,
        ServicesTableSeeder::class,
        SettingsTableSeeder::class,
        ShippingServicesTableSeeder::class,
        // SitemapsTableSeeder::class,
        SlidersTableSeeder::class,
        SocialsTableSeeder::class,
        SubscribersTableSeeder::class,
        TaxesTableSeeder::class,
        // TicketsTableSeeder::class,
        // TrackOrdersTableSeeder::class,
        // TransactionsTableSeeder::class,
        // UsersTableSeeder::class,
        // WishlistsTableSeeder::class,
        ColorsTableSeeder::class,
        DistrictsTableSeeder::class,
        ItemVariantsTableSeeder::class,
        SizesTableSeeder::class,
        StoresTableSeeder::class,
        TaxsTableSeeder::class,
        VariantsTableSeeder::class,
    
    ]);


    // public function run(): void
    // {
    //     $this->call(AdminsTableSeeder::class);
    //     $this->call(AttributeOptionsTableSeeder::class);
    //     $this->call(AttributesTableSeeder::class);
    //     $this->call(BannersTableSeeder::class);
    //     $this->call(BcategoriesTableSeeder::class);
    //     $this->call(BrandsTableSeeder::class);
    //     $this->call(CampaignItemsTableSeeder::class);
    //     $this->call(CategoriesTableSeeder::class);
    //     $this->call(ChieldCategoriesTableSeeder::class);
    //     $this->call(CountriesTableSeeder::class);
    //     $this->call(CurrenciesTableSeeder::class);
    //     $this->call(EmailTemplatesTableSeeder::class);
    //     $this->call(ExtraSettingsTableSeeder::class);
    //     $this->call(FaqsTableSeeder::class);
    //     $this->call(FcategoriesTableSeeder::class);
    //     $this->call(GalleriesTableSeeder::class);
    //     $this->call(HomeCutomizesTableSeeder::class);
    //     $this->call(ItemsTableSeeder::class);
    //     $this->call(JobsTableSeeder::class);
    //     $this->call(LanguagesTableSeeder::class);
    //     $this->call(MenusTableSeeder::class);
    //     $this->call(MessagesTableSeeder::class);
    //     $this->call(MigrationsTableSeeder::class);
    //     $this->call(NotificationsTableSeeder::class);
    //     $this->call(OrdersTableSeeder::class);
    //     $this->call(PagesTableSeeder::class);
    //     $this->call(PaymentSettingsTableSeeder::class);
    //     $this->call(PostsTableSeeder::class);
    //     $this->call(PromoCodesTableSeeder::class);
    //     $this->call(ReviewsTableSeeder::class);
    //     $this->call(RolesTableSeeder::class);
    //     $this->call(ServicesTableSeeder::class);
    //     $this->call(SettingsTableSeeder::class);
    //     $this->call(ShippingServicesTableSeeder::class);
    //     $this->call(SitemapsTableSeeder::class);
    //     $this->call(SlidersTableSeeder::class);
    //     $this->call(SocialsTableSeeder::class);
    //     $this->call(StatesTableSeeder::class);
    //     $this->call(SubcategoriesTableSeeder::class);
    //     $this->call(SubscribersTableSeeder::class);
    //     $this->call(TaxesTableSeeder::class);
    //     $this->call(TicketsTableSeeder::class);
    //     $this->call(TrackOrdersTableSeeder::class);
    //     $this->call(TransactionsTableSeeder::class);
    //     $this->call(UsersTableSeeder::class);
    //     $this->call(WishlistsTableSeeder::class);
    //     $this->call(ColorsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(ItemVariantsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(TaxsTableSeeder::class);
        $this->call(VariantsTableSeeder::class);
    }
}
