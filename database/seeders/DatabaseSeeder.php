<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AboutUsesTableSeeder::class);
        $this->call(AboutUsImagesTableSeeder::class);
        $this->call(AgentReviewsTableSeeder::class);
        $this->call(BeliefSystemsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CarrerInfosTableSeeder::class);
        $this->call(CarrerPromissesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ChairmanMessagesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(CustomerMessagesTableSeeder::class);
        $this->call(FounderMessagesTableSeeder::class);
        $this->call(MdMessagesTableSeeder::class);
        $this->call(OpeningJobsTableSeeder::class);
        $this->call(OpeningLocationsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(PublishOpeningsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SliderInformationsTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(TechoptimumsTableSeeder::class);
        $this->call(TechoptimumsbooksTableSeeder::class);
        $this->call(TechoptimumscatsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ValuesTableSeeder::class);
        $this->call(ValueDetailsTableSeeder::class);
        $this->call(WorkPlacesTableSeeder::class);
        $this->call(WorkPlaceImagesTableSeeder::class);
    }
}
