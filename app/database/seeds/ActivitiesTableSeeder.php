<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ActivitiesTableSeeder extends Seeder {

       public function run()
       {
        $faker = Faker::create();
        $activityDate = $faker->dateTimeThisYear();
        $updatedAt = $faker->dateTimeThisYear($activityDate);
        $createdAt = $faker->dateTimeThisYear($updatedAt);

        DB::table('activities')->insert(
            array(
                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'San Antonio Spurs Season Opener vs. Dallas Mavericks',
                    'body'=>'After dealing an existential blow to the Heat and signing back their entire roster, 
                     the Spurs have a lot to celebrate during the season-opening, pre-game bling ceremony. 
                     But don’t expect San Antonio to lose focus against the Mavs, the only team that took SA
                     to seven games in the 2014 playoffs. While the Spurs’ lineup is almost identical to the
                     playoff matchup, Dallas made some big moves,bringing back center Tyson Chandler, 
                     picking up former Spur Richard Jefferson and signing the budding threat of Chandler Parsons,
                     though Vince Carter won’t be around to drop any icy three-point daggers.',
                    'image_path'=>'http://lorempixel.com/400/200/',
                    'price'=>'1'
                ),
                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Dia de los Muertos: La Ofrenda',
                    'body'=>'The Southwest School of Art celebrates Dia de los Muertos with an installation “La Ofrenda”
                     by artist Kathy Sosa. The installation will re-interpret a traditional altar with Sosa’s trademark 
                     use of vibrant colors and her nod to folk art paintings. Members of the community are welcome to visit
                     the altar, remember a deceased friend, and partake in traditional bread. Exhibition on view through 
                     Nov. 9. Free and open to the public.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'0'
                ),
                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Museum and Special Exhibition Highlights',
                    'body'=>'Free gallery talks by SAMA docents are based on the works of art found in the Museum’s collections
                     and special exhibitions.',
                    'image_path'=>'http://lorempixel.com/400/200/',
                    'price'=>'2'
                ),
                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Creepshow',
                    'body'=>'Prepare to be thoroughly creeped out when Stephen King and George Romero come together for the pinnacle 
                    of all horror anthology films: “Creepshow”. This creep-fest is full of cockroaches, “dead” beat dads, and a 
                    zombie-ghost played by Ted Danson. It also includes a star studded cast including, Danson, Hal Holbrook, 
                    Adrienne Barbeau, Ed Harris and E.G. Marshal.',
                    'image_path'=>'http://lorempixel.com/400/200/',
                    'price'=>'2'
                ),
                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'The Do Seum Hosts Celebratory Bash',
                    'body'=>'As the exterior building process comes to an end, The Do Seum is celebrating this significant occasion 
                    with the Construction Completion Bash on Wednesday, October 29. Guests will be the first to experience The Do Seum 
                    from the inside out, with a night of food, drink and frivolity. To celebrate this milestone as the building becomes 
                    The Do Seum, the Construction Completion Bash will offer guests a tour of The Do Seum for a first-hand look at the 
                    exciting changes that the new children’s museum of San Antonio will offer the local community. Guests will enjoy adult
                    beverages free of charge alongside complimentary food from a fleet of unique and local food trucks, as well as music 
                    by the Flying Balalaika Brothers. There will also be a variety of fun activities including a roving mentalist named 
                    Giani, exciting games like the Dunk Tank, Master Striker, and Super Football Toss, and so much more.',
                    'image_path'=>'http://lorempixel.com/400/200/',
                    'price'=>'2'
                ),

                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Moonlight Social',
                    'body'=>'To do big things, you have to make big noise. Up-and-coming Austin country band Moonlight Social is doing 
                    just that. Since being founded in early 2011, the band played a SXSW showcase after being selected by 9-time 
                    GRAMMY-winning frontman Ray Benson and won a GRAMMY-sponsored showcase after being selected by the board of governors 
                    for the Texas Chapter of The Recording Academy. The band was then named winners of the 2011 Austin Chronicle Sound Wars 
                    after beating out nearly 100 other Austin bands. The band also won the GRAMMY-sponsored “Show Us Your Hits” 
                    competition and was a judge’s selection for the Indaba songwriting showcase with the song “Neither Are You.” Moonlight 
                    Social was then named one of the Best New Bands in Austin in 2013, and was featured as a rising artist on Nashville-produced 
                    TV show, “Welcome To Indie Country.” Mixing a penchant for flowing melodies, poignant lyrics, and powerful vocals, Jeremy 
                    Burchard and Jennica Scott, the tandem behind Moonlight Social, combine their talents to offer a sound that is wholly 
                    accessible yet undeniably refreshing. Hailing from Austin, Texas, the duo met as peers in The University of Texas Longhorn 
                    Band — Scott as a member of the trumpet section, and Burchard as a member of the drumline. What started as a spontaneous jam 
                    session and a few cover recordings in Burchard’s tiny apartment bedroom quickly developed into a full-time musical collaboration.
                    Scott’s rich vocals and harmonious country sensibilities married with Burchard’s eclectic guitar style and expansive roots create
                    the signature sound of Moonlight Social — that is, inventive yet familiar, spontaneous yet calculated, varied yet grounded.
                    The band has toured all through Texas, New Mexico, Louisiana, Illinois, Iowa, Indiana, Michigan, Wisconsin and more, bringing along
                    a talented collection of musicians. Moonlight Social has shared the stage with Eli Young Band, Florida Georgia Line, Jack Ingram, 
                    Hayes Carll, Thomas Rhett, The Dirty River Boys, Two Tons of Steel, and many more. They released their debut self-produced EP in May 
                    2011, and then recorded their debut album Heading South with producer/Blue October bassist Matt Noveskey, released in late 2012 to
                    glowing reviews.',
                    'image_path'=>'http://lorempixel.com/400/200/',
                    'price'=>'2'
                ),

                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Slab Cinema: Spanish Dracula',
                    'body'=>'The American produced, Spanish-language horror film, Dracula, was filmed at nights on the same sets that were being used 
                    during the day for the 1931 English-language film of the same name. Directed by George Melford, starring Carlos Villarias, Lupita 
                    Tovar, and Barry Norton.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'3'
                ),
                array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Slab Cinema: Spanish Dracula',
                    'body'=>'The American produced, Spanish-language horror film, Dracula, was filmed at nights on the same sets that were being used 
                    during the day for the 1931 English-language film of the same name. Directed by George Melford, starring Carlos Villarias, Lupita 
                    Tovar, and Barry Norton.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'3'
                )
            )
        );
    }
}
