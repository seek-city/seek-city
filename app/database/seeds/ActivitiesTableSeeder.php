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

        //delete users table records
        DB::table('activities')->truncate();
        //insert some dummy records
        DB::table('activities')->insert(array(
            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'San Antonio Spurs Season Opener vs. Dallas Mavericks',
            'body'=>'After dealing an existential blow to the Heat and signing back their entire roster, 
             the Spurs have a lot to celebrate during the season-opening, pre-game bling ceremony. 
             But don’t expect San Antonio to lose focus against the Mavs, the only team that took SA
             to seven games in the 2014 playoffs. While the Spurs’ lineup is almost identical to the
             playoff matchup, Dallas made some big moves,bringing back center Tyson Chandler, 
             picking up former Spur Richard Jefferson and signing the budding threat of Chandler Parsons,
             though Vince Carter won’t be around to drop any icy three-point daggers.',
             'image_path'=>'Url',
             'price'=>'1'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Dia de los Muertos: La Ofrenda',
            'body'=>'The Southwest School of Art celebrates Dia de los Muertos with an installation “La Ofrenda”
             by artist Kathy Sosa. The installation will re-interpret a traditional altar with Sosa’s trademark 
             use of vibrant colors and her nod to folk art paintings. Members of the community are welcome to visit
             the altar, remember a deceased friend, and partake in traditional bread. Exhibition on view through 
             Nov. 9. Free and open to the public.',
             'image_path'=>'Url'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Museum and Special Exhibition Highlights',
            'body'=>'Free gallery talks by SAMA docents are based on the works of art found in the Museum’s collections
             and special exhibitions.',
             'image_path'=>'Url', 'price'=>'2'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Creepshow',
            'body'=>'Prepare to be thoroughly creeped out when Stephen King and George Romero come together for the pinnacle 
            of all horror anthology films: “Creepshow”. This creep-fest is full of cockroaches, “dead” beat dads, and a 
            zombie-ghost played by Ted Danson. It also includes a star studded cast including, Danson, Hal Holbrook, 
            Adrienne Barbeau, Ed Harris and E.G. Marshal.',
            'image_path'=>'Url', 'price'=>'2',
            'address'=>'Alamo Drafthouse Park North N.W. Loop 410 San Antonio',
            'city'=>'san antonio', 'state'=>'TX', 'zipcode'=>'78216'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'The Do Seum Hosts Celebratory Bash',
            'body'=>'As the exterior building process comes to an end, The Do Seum is celebrating this significant occasion 
            with the Construction Completion Bash on Wednesday, October 29. Guests will be the first to experience The Do Seum 
            from the inside out, with a night of food, drink and frivolity. To celebrate this milestone as the building becomes 
            The Do Seum, the Construction Completion Bash will offer guests a tour of The Do Seum for a first-hand look at the 
            exciting changes that the new children’s museum of San Antonio will offer the local community. Guests will enjoy adult
            beverages free of charge alongside complimentary food from a fleet of unique and local food trucks, as well as music 
            by the Flying Balalaika Brothers. There will also be a variety of fun activities including a roving mentalist named 
            Giani, exciting games like the Dunk Tank, Master Striker, and Super Football Toss, and so much more.',
            'image_path'=>'Url', 'price'=>'2'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
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
            'image_path'=>'Url', 'price'=>'2'
            
            ),

             array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Slab Cinema: Spanish Dracula',
            'body'=>'The American produced, Spanish-language horror film, Dracula, was filmed at nights on the same sets that were being used 
            during the day for the 1931 English-language film of the same name. Directed by George Melford, starring Carlos Villarias, Lupita 
            Tovar, and Barry Norton.',
            'image_path'=>'Url', 
            'price'=>'3'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Slab Cinema: Spanish Dracula',
            'body'=>'The American produced, Spanish-language horror film, Dracula, was filmed at nights on the same sets that were being used 
            during the day for the 1931 English-language film of the same name. Directed by George Melford, starring Carlos Villarias, Lupita 
            Tovar, and Barry Norton.',
            'image_path'=>'Url'
            ),

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'The Action Packs Rocky Horror Picture Show',
            'body'=>'This film gained a second life after premiering in the midnight movies program at New York Citys Waverly Theater on April 
            Fools Day 1976. A core audience of rabid fanatics (which included composer Mark Shaiman, of "South Park" and "Hairspray" fame) found
            themselves drawn back to the cinema again and again, and they began singing along, booing at the bad guys, talking back to the screen 
            (the first reported call-back: "How strange was it?"), and even dressing like the characters. Their dedication has helped make 
            "The Rocky Horror Picture Show" into the longest running theatrical release in cinema history.',
            'image_path'=>'Url'
            );

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'San Antonio Public Library presents Guatemala',
            'body'=>'The San Antonio Public Library is proud to present Guatemala, a photo exhibit by UTSA President Dr. Ricardo Romo. Dr. Romo 
            has expertly captured the people and culture of Guatemala in these beautiful photographs. The most populous country in Central American, 
            Guatemala is a place abounding with ancient customs and rich traditions. Dr. Romo’s wondrous images, captured on his travels through 
            middle America, unearth stories that words alone cannot tell. A reception will be held Wednesday, October 29, from 6pm– 8pm. The public 
            is invited to attend the reception and meet Dr. Romo. Refreshments will be provided by the Friends of Forrest Hills Library.',
            'image_path'=>'Url'
            );

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Value Vino: Online resources for wine knowledge',
            'body'=>'For last year’s article celebrating Texas Wine Month, I made reference to an iPhone/Android app called txwinepassport designed 
            to facilitate and encourage Texas wine tourism. Confession: I never got around to installing it myself—in part because I rarely use the 
            apps that are already on my phone, and in part because…well, never mind. So my TWM resolution for this year was to install the passport 
            and to check out other online sources dedicated to Texas wines.',
            'image_path'=>'Url'
            );

                 array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Best Place to Nurse a Hangover',
            'body'=>'You’ll often find the previous night’s revelers holding their heads, sunglasses still on, sipping coffee and slowly eating the
             barbacoa plate or bean and chorizo tacos at this St. Mary’s Strip staple. The service is a bit on the sporadic side, but who cares? 
             When the food finally arrives, it makes everything better. It’s also open super early on Saturday mornings, if you’re more interested
             in preventing, rather than dealing with, that hangover.',
            'image_path'=>'Url'
            );

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Sushi: Sushi Seven',
            'body'=>'Opened by several of the same chefs who tackled Sushi Zushi’s eight locations in SA, Sushi Seven promises an equally extensive 
            menu, while delivering on Japanese-Mexican fusion just outside Loop 1604. Sure, you’ll find some traces of cream cheese, but there are 
            plenty of rolls to be had at the hand of these chefs. The digs are bright and airy, but you’re not there for the décor. Stop by for 
            fresh sashimi, or choose from the epic list of 40-plus rolls such as the Tricolor, with fried crawfish, spicy tuna and multi-colored 
            tobiko, or fish roe. Need a bit more heat? Check out the Habanero roll with fresh yellowtail, cilantro and avocado nestled inside, 
            as wasabi-infused green, squid-ink black and stoplight-red roe (infused with habanero) add more subtle nuances.',
            'image_path'=>'Url'
            );

            array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'SA’s Shadiest (in a good way) Parks',
            'body'=>'Phil Hardberger Park East 13203 Blanco Road ,
             Phil Hardberger Park is one of the most popular parks in town and won Best Playground last year in the Current’s reader poll. The park has 
             two playgrounds; the east playground is hands down the better spot for its shade and restrooms—case closed. There’s a separate play section
            for smaller tots, lots of picnic tables, a walking trail and a decent parking lot. Plus, there’s a merry-go-round.', 
            'image_path'=>'Url'
            );
             array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Comanche Park #22600 Rigsby',
            'body'=>'Comanche Park #2 is an older playground along the Salado Creek Greenway, leading to Southside Side Lions Park. There are plenty of 
            old shady trees from the days our grandparents were kids. The play structures are sturdy and sizeable with a wall climber, a cable bridge 
            and tunnel slides. (Not to be confused with Comanche Lookout Park, a collection of hiking trails located near Live Oak.)', 
            'image_path'=>'Url'
            );

             array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Failure Is Not an Option: George Lopez returns to SA',
            'body'=>'It is evident comedian George Lopez is still a little sensitive about the on-again, off-again relationship he’s had with television. 
            Whatever the issue, the Current pushed some buttons when we talked to him last week in anticipation of this weekend’s tour stop in San Antonio. 
            We managed, however, to draw him back in for the homestretch.', 
            'image_path'=>'Url'
            );

             array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'Adam Carolla on Mangria, Hillary Clinton and WD-40 ',
            'body'=>'Comedian Adam Carolla is a busy man. When he’s not making movies and reality TV shows or writing books or hosting the most downloaded
             podcast in the world, he enjoys interacting with loyal fans. He’ll be in town October 10 for a live podcast. Before the show, Carolla will 
             visit Spec’s (11751 Bandera Road) at 6 p.m. to sign bottles of Mangria, his new wine cocktail. He caught up with the Current via phone from his
             studio in Glendale, California last week.', 
            'image_path'=>'Url'
            );

             array('updated_at' => $faker->dateTimeThisYear($activityDate),
            'created_at' => $faker->dateTimeThisYear($updatedAt),
            'activity_date' => $faker->dateTimeThisYear(),'user_id' => 1,
            'title'=>'',
            'body'=>'', 
            'image_path'=>'Url'
            );
        }
    }

}
              
