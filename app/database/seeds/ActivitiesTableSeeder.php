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
                    'price'=>'2'
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
                    'price'=>'3'
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
                    'price'=>'4'
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
                    'price'=>'1'
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
                    'title'=>'The San Antonio Auto Show Reaches a Social Media Milestone, 1000 Fans on Facebook',
                    'body'=>'The San Antonio Auto Show is harnessing the power of social media to enhance the user experience at the show. Contests,
                    video and unique content have helped their official page reach a milestone of 1000 fans.The San Antonio Auto Show Facebook page
                    has reached a milestone of 1000 fans. Social media plays an important role in the 2012 San Antonio Auto Show, and the page is 
                    celebrating with competitions and ticket giveaways. Fans of the San Antonio Auto show can visit their official Facebook page 
                    (http://www.facebook.com/SAAutoShow) to stay updated with all the latest events happening at the show. Currently fans can 
                    participate in a photo contest to win 4 tickets to the show and a $100 gift card. The winner will be announced via Facebook 
                    on,Nov. 17th. Fans can also try their luck at Auto Show Trivia on the page to win pairs of tickets each day of the show Facebook
                    isn’t the only way the show is reaching out to fans with social media. YouTube videos, highlighting events at the show, will also be posted.
                    The San Antonio Auto Show twitter (www.twitter.com/SAAutoShow)will also be keeping fans up to date with the latest news from the show. Follow the San Antonio Auto 
                    Show on Facebook,Twitter and YouTube to stay up to date and receive exclusive information on many contests and giveaway opportunities. The show 
                    also encourages users to share their pictures and experiences at the show through these social media outlets. The San Antonio Auto Show will begin on Thursday, Nov. 
                    15 at 2 p.m. and is hosted at the Henry B. Gonzalez Convention Center in San Antonio, Texas. The show will run all weekend, closing on Sunday, Nov. 18 at 7 p.m. Tickets 
                    are now on sale for each day of the show. Tickets are $12 for adults and children ages 11 and up. The show offers a discounted price of $8 to all senior 
                    adults and active/retired military members, as well as free admission to children under age 10. Visit the show’s website at www.saautoshow.com to buy tickets, or to find show info, 
                    directions and information on who will be at the event. Free parking vouchers are available online, as well as a coupon for $1 off a regular price ticket.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'4'
                ),

                 array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Mabuhay Festival',
                    'body'=>'The Mabuhay Festival is a fun cultural event hosted by FSA which will include great talents such as singing and cultural dances. After the performance, 
                    there will be free Filipino food available to the guests of the show.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'1'
                ),

                  array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Rock & Roll San Antonio Marathon & 1/2 Marathon',
                    'body'=>'For two days, over 60 exhibitors will offer free samples, showcase the latest in running gear, sports apparel, health & nutritional information and much more. 
                     Pick up some last-minute race essentials before race day and be sure to visit the Brooks Official Merchandise Store. All runners must visit the expo to pick up their 
                     race number, swag bag and t-shirt. Rock out to your favorite bands at the Marathon or 1/2 Marathon!
                     25,000 attendees expected.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'2'
                ),

                  array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Valero Alamo Bowl Fan Zone',
                    'body'=>'Before the bowl game, fans can participate in pregame festivities in the Historic Sunset Station (one block north of the main Alamodome entrance). The Valero 
                     Alamo Bowl Fan Zone includes a variety of interactive games that encourage fan participation and challenge their football skills and agility. Enjoy some great food and 
                     drink while you listen to the music. Not only are there interactive games but you can also get your face painted or meet some animals from SeaWorld San Antonio',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'3'
                ),

                     array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Kids ROCK San Antonio',
                    'body'=>'Brackenridge Park - Joske Pavillion San Antonio, TX Kids event for Rock & Roll San Antonio Marathon & 1/2 Marathon 2000 attendees expected.' ,
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'4'
                ),

                     array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'san antonio chess club',
                    'body'=>'Welcome to the San Antonio Chess Club Thanks for stopping by the San Antonio Chess Club web site. Founded in 1888 at the historic Menger Hotel near the Alamo, 
                    the San Antonio Chess Club is the oldest chess club in Texas. We meet Thursday evenings 6-10 p.m. (except holidays) at the Lions Field Recreation Center, 2809 Broadway near
                     Mulberry - see map (phone: 826-9041). This is a City of San Antonio facility and visitors, including minors are welcome. Please bring chess sets, boards & clocks if you have 
                     them - they are not provided at site. Every week: casual skittles, blitz tourney begins 8 p.m. We also organize several weekend tournaments at other locations; see future 
                     events. Membership/Newsletter: Club members receive a newsletter that covers local chess news, upcoming tournaments and games by local players. Membership is $10 per year
                    ($5 junior, family $15, and life $200).',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'1'



                ),

                     array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Two Tickets to Wurstfest',
                    'body'=>'Celebrate German culture and all things sausage when you use this deal for two weekday tickets to Wurstfest. Choose from Sunday, Monday, Tuesday, or Wednesday entry 
                     and head to the scenic Landa Park, near the beautiful Comal River. Youll enjoy plenty of libations, including Bavarian food from a variety of vendors, and German beer, wine, 
                     and spirits. Theres also plenty of fun to be had between live music performances that range from classical to polka and in between, dancing, carnival rides and games, and so 
                     much more.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'2'
                ),

                      array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Texas Winos',
                    'body'=>'Join this locally run business in a lively brewery tour complete with a varied prix-fixe meal and a souvenir gift like a pint glass or bottle opener. Dont be alarmed
                     if a spontaneous dance party breaks out -- and dont forget to warm up your vocal cords prior to the tour; singing to express your cheer is encouraged:
•                   $44 ($120 value) for a six-to-eight hour brewery tour and a meal for one $82 ($240 value) for a six-to-eight hour brewery tour and a meal for two 
•                   $160 ($480 value) for a six-to-eight hour brewery tour and a meal for four',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'3'
                ),
                     array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Heart of Texas Hot Air Balloon Rides',
                    'body'=>'Theres a lot to love about flying sky-high in a colorful balloon. But the number one thing? Unlike when you ride in a plane, theres absolutely nothing standing
                     between you and the view. And since LivingSocial members rave that this three- to- four-hour event is endlessly memorable and exciting, you know itll be great:
                     199 399 value for a hot air balloon ride package Meet in Buda, San Marcos, New Braunfels, or Round Rock 
                     Call ahead to reserve your trip -- theyre available daily
                    It was a beautiful ride with a great staff. All very friendly and professional from beginning to end! Cant wait to fly again!" - LivingSocial Member
                    The Lone Star State, Like Youve Never Seen It Before Ready for your open-air flight over scenic towns and pastures? Good, because youre in for a treat. 
                    This excursion begins at a weather-dependent meeting site, where youll undergo a formal safety briefing to make sure you feel totally prepared and at ease. 
                    Then, youll take to the skies for an hour with a group of 12 to 16 riders. If youre in the mood for a romantic getaway, this is the perfect time to pull 
                    your sweetie close and watch as the Texas landscape opens up before you. Upon landing, riders are returned to the original meeting place, where they enjoy
                    a post-flight reception. Dont Go It Alone: Like we said, this one-in-a-lifetime group trip is just right for an incredible date 
                    (or proposal, perhaps?), so make sure you snag an extra deal for that special someone. If youre single and looking to mingle -- 
                    with your own friends, that is -- take advantage of LivingSocials Me + 3 program to get them on board. Have your buds buy off of your 
                    personal link and if three make a purchase, your deal is free!',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'4'
                ),

                     array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Entry to Haunted History Tour',
                    'body'=>'Fill your Friday or Saturday night with some chilling thrills with an offer from Spirit Expeditions. Sign up for a 
                    haunted history walking tour on your choice of date, and follow a local guide to hear eerie tales of your citys historical gems.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'2'
                ),

                      array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'La Cantera Golf Club',
                    'body'=>'Choose from two championship golf courses set on one of the highest 
                    points in all of San Antonio, and savor amazing views of the Hill Country and downtown:
                    • $65 ($140 value) for a golf package with $15 to spend on lunch for one on Monday through Friday
                    • $115 ($280 value) for a golf package with $15 to spend on lunch for two on Monday through Friday
                    • $69 ($155 value) for a golf package with $15 to spend on lunch for one on Saturday or Sunday
                    • $135 ($310 value) for a golf package with $15 to spend on lunch for two on Saturday or Sunday
                    "I golf to both challenge myself and to escape the daily grind. La Cantera always gives me an 
                    amazing environment to accomplish both. The staff is always exceptional in their courtesy and professionalism and 
                    the course speaks for itself."',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'4'
                ),

                          array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Lone Star Parachute Center',
                    'body'=>'The first time you kissed. A favorite birthday. Your best friends wedding. These are moments that
                    get the heart pumping. Commemorate your special occasion with the boost of adrenaline it deserves with this offer:
                    $149 ($229 value) for a tandem skydive Youll be strapped to an expert skydiver during your jump
                    Great for anniversaries, bachelor/bachelorette parties, dates, and more "I jumped with Lone Star 
                    Parachute center yesterday on my second ever coach jump. The staff was amazing! The plane was fast and
                    it gave us plenty of altitude! Great DZ! Look forward to many jumps there." - Facebook Fan
                    A Care-Free Free-Fall Before your jump, a licensed instructor will train you on the jump process, landing 
                    technique, and safety precautions. Since a highly trained professional is harnessed to you, all you have
                    to worry about is enjoying the breathtaking views and feeling the thrill of the fall. Lone Star Parachute Centers',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'4'
                ),

                              array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'Yoga & Fitness Passport',
                    'body'=>'With Yoga & Fitness Passport, finding the right fitness class for you at nearby locations is as easy as 
                     grabbing this deal:$20 ($300 value) for a 30-class pass Try yoga, Pilates, Zumba, kickboxing, spinning, CrossFit, and more
                     Valid at 700+ locations across the US "Wonderful opportunity to become healthier!" - LivingSocial Member
                     How It Works Use Yoga & Fitness Passports online registration tool to sign up for classes at local studios. From meditative
                     hot yoga to calorie-blasting martial arts, there are hundreds of classes offered each week. You get 180 days 
                     from your first class to use the pass, meaning you can easily fit a workout into your routine.',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'1'
                ),

                                  array(
                    'updated_at' => $faker->dateTimeThisYear($activityDate),
                    'created_at' => $faker->dateTimeThisYear($updatedAt),
                    'activity_date' => $faker->dateTimeThisYear(),
                    'user_id' => 1,
                    'title'=>'SegCity',
                    'body'=>'After being trained in the art of wrangling a Segway, your adventure will be underway
                    youll cover a lot of ground in the easiest, breeziest way possible while also learning about
                    the cities spookiest secrets:  $39 ($69 value) for a 90-minute Haunted Legends Segway tour
                    $75 ($138 value) for a 90-minute Haunted Legends Segway tour for two $129 ($276 value) for a 90-minute 
                    Haunted Legends Segway tour for four "We were impressed with their concern for our safety and the 
                    orientation before we started the tour. Our tour guide, G-Su, was excellent. I would definitely 
                    book another tour with SegCity."',
                    'image_path'=>'http://lorempixel.com/400/200/', 
                    'price'=>'4'
                
                ),
            )
        );
    }

}

                    
              
