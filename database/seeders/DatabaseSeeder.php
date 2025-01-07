<?php

namespace Database\Seeders;

use App\Models\festival;
use App\Models\User;
use App\Models\bus;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Aspen',
            'email' => 'aspen@festival.com',
            'email_verified_at' => now(),
            'password' => Hash::make('@dm1N???'),
            'remember_token' => Str::random(10),
            'role_id' => (2),
        ]);

        festival::factory()->create([
            'name' => 'Pinkpop',
            'genre' => 'Rock',
            'info' => 'Pinkpop is an annual music festival held in Landgraaf, Netherlands, typically during the Pentecost weekend. Established in 1970, it is recognized as the oldest and longest-running pop festival in the world. The festival features a diverse lineup of artists, showcasing both international and local talent across various genres. Over the years, Pinkpop has become a significant event in the European music scene, attracting thousands of attendees each year.',
            'date' => '2025-06-22',
        ]);

        festival::factory()->create([
            'name' => 'Pukkelpop',
            'genre' => 'Rock',
            'info' => 'Pukkelpop is a major music festival held annually in Kiewit, Belgium, every August. Since 1985, it has grown into a key European event, featuring diverse genres like rock, pop, electronic, indie, and hip-hop. Hosting global stars and emerging talent across multiple stages, it combines music, art, and a vibrant atmosphere. Known for its inclusivity and sustainability efforts, Pukkelpop attracts thousands of fans worldwide, offering an unforgettable festival experience.',
            'date' => '2025-08-14',
        ]);

        festival::factory()->create([
            'name' => 'Rock Werchter',
            'genre' => 'Rock',
            'info' => 'Rock Werchter is a world-famous music festival held annually in Werchter, Belgium, each June or July. Since its start in 1974, it has grown into a premier event, featuring global stars and emerging artists across genres like rock, pop, indie, and electronic. Known for its top-tier performances, excellent organization, and vibrant atmosphere, the festival spans multiple stages and attracts music fans from all over the world, offering an unforgettable experience in a scenic setting.',
            'date' => '2025-07-03',
        ]);

        festival::factory()->create([
            'name' => 'Rock am Ring',
            'genre' => 'Rock',
            'info' => 'Rock am Ring is a major music festival held annually at the Nürburgring in Germany, usually in June. Since 1985, it has become one of Europe’s largest rock festivals, featuring top acts from rock, metal, and alternative genres. The festival attracts tens of thousands of fans who enjoy high-energy performances across multiple stages. Known for its legendary lineup, thrilling atmosphere, and unique racing circuit location, Rock am Ring offers an unforgettable experience for rock music enthusiasts.',
            'date' => '2025-06-06',
        ]);

        festival::factory()->create([
            'name' => 'Graspop',
            'genre' => 'Rock',
            'info' => 'Graspop Metal Meeting is a renowned metal festival held annually in Dessel, Belgium, each June. Since 1996, it has become a must-visit event for metal fans, showcasing genres like heavy metal, hard rock, death metal, and more. Featuring global icons and rising stars, it spans multiple stages with top-tier performances. Known for its passionate community, excellent organization, and energetic atmosphere, Graspop draws thousands of visitors worldwide for an unforgettable metal experience.',
            'date' => '2025-06-19',
        ]);

        festival::factory()->create([
            'name' => 'Jera on Air',
            'genre' => 'Rock',
            'info' => 'Jera On Air is an annual music festival held in Ysselsteyn, Netherlands, typically in June. Since 2002, it has become a key event for fans of punk, hardcore, metal, and alternative music. The festival features a mix of global headliners and emerging bands, spread across multiple stages. Known for its high-energy performances, welcoming atmosphere, and passionate crowd, Jera On Air attracts thousands of fans each year, offering an unforgettable experience for alternative music lovers.',
            'date' => '2025-06-26',
        ]);

        festival::factory()->create([
            'name' => 'Tomorrowland',
            'genre' => 'EDM',
            'info' => 'Tomorrowland is a globally renowned electronic dance music festival held annually in Boom, Belgium, typically in July. Since 2005, it has become one of the largest EDM festivals, featuring top DJs and producers across multiple stages with stunning visuals. Known for its vibrant atmosphere and international crowd, Tomorrowland attracts fans from around the world, offering an unforgettable experience of music, unity, and creativity.',
            'date' => '2025-07-18',
        ]);

        festival::factory()->create([
            'name' => 'Amsterdam Dance Event',
            'genre' => 'Electronic',
            'info' => "Amsterdam Dance Event (ADE) is an annual electronic music festival and conference held in Amsterdam, Netherlands, usually in October. Since 1996, it has grown into one of the world's biggest events for electronic music, featuring performances from top DJs and producers across multiple venues. ADE blends music showcases with industry talks and networking, attracting thousands of fans and professionals, making it a key gathering for the global electronic dance music scene.",
            'date' => '2025-10-22',
        ]);

        festival::factory()->create([
            'name' => 'Verknipt',
            'genre' => 'Techno',
            'info' => 'Verknipt is an annual electronic music festival held in the Netherlands, known for its vibrant atmosphere and top-tier lineups. The event features a mix of techno, house, and other electronic genres, attracting fans from across Europe. With impressive stage designs, an energetic crowd, and high-quality performances from both established and emerging artists, Verknipt offers an unforgettable festival experience, celebrating electronic music in a unique and immersive setting.',
            'date' => '2025-06-07',
        ]);

        festival::factory()->create([
            'name' => 'Lowlands',
            'genre' => 'Rock',
            'info' => "Lowlands, a three-day music festival in Biddinghuizen, Netherlands, features diverse music, art, and performances. It takes place annually in August, attracting large crowds with its vibrant atmosphere and diverse lineup. Since 1993, Lowlands has become one of Europe's largest and most celebrated festivals.",
            'date' => '2025-08-15',
        ]);

        bus::factory(30)->create();
        User::factory(10)->create();


    }
}
