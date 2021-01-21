<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'comment' => 'This place is nice with a lot of Aqua activities..Therez Segarra..A rest that has a very nice, romantic atmosphere..!',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Ancol is a very nice attraction for Jakarta people, has everything really for the whole family. It is now also filled with wonderful restaurants, you can easily spend a whole day here and experience many things. The entrance ticket is well worth it.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'It was nice landscape but poor accommodation. No coffee shop, no shop. You should not spend over night there.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'The sunrise was totally overrated. There was an insane crowd at the viewpoint... and as I went in February, it was clouded, foggy, and there was no great sunrise to see.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Went to watch the sunrise and it was cold. You need a good jacket and scarf. After sunrise viewing, we took the jeep that brought us to the jeep lot. From there, you walk about 15-20 mins to reach the staircase point towards the summit. It\'s very doable but make sure you bring a mask and hat/cap/scarf because once the sand blows, it can mess you up a little.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'not so many people were around, guess due to pandemi. beach is never been this clean before. there\'s a good thing about the pandemic after all.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Kuta Beach is very hectic. I used to have a long stroll here. Nice for people watching.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'As a result of tourism, the beach is a rubbish tip each morning. Getting worse every year and have decided not the frequent Kuta anymore because of this. Better places to holiday that care for their environment more.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Its like indonesian pyramid.... Biggest budhist temple.... Climbed up to the top would be good for exercize, and a better view as well....',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I had wanted to visit since I was a teenager. Maybe I had built up my expectations too much. The size of the temple seemed small. Maybe my visit to Angkor in Cambodia before this influences my opinion.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Toraja is situated in the north of makassar the capital of south sulawesi and has a culture that is still unique to be seen until nowdays also has beautiful natural scenery.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Indonesia is welknown with its diversity. One of superb site that you may visit is Toraja in South Sulawesi. Toraja is not only welknown with its coffee production, Toraja is also welknown for its Rambusolo ceremony to honor the respected person who died. The dead body after somedays or months to be put in a special house, the body later on will be put in the slope of the mountain.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'We have seen huge funeral ceremony in this region. The culture is still well preserved.we recommend this place.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'It is a great place to escape and just enjoy the view of the lake. very windy and chill at night. All of the locals here are very friendly. No problems whatsoeveer.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Toba is spectacularly beautiful. A huge lake surrounded by hills and mountains that descend sharply to form the lake. There is not a great deal to do there beside go for walks or sit taking in the great views. But it is very relaxing.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'this area is an absolute beauty. The lake and its surrounding hills are beautiful just to watch. What is lacking is the infrastructure to make this place a real tourist spot. Also, cleanliness must be improved.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Pianemo Islands are well worth a visit when you are going to Raja Ampat. I recommend to arrange snorkeling or scuba diving there.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'You have to visit on a good day to appreciate the views. Its getting touristy now but still gorgeous and worth a visit.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'big municipal staircases up the peaks and accumulating rubbish are wrecking Pianemo/Fam. Someone needs to take the situation in hand.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'The trail was sandy and dry. It was quiet tough to walk on the sandy trail but the view was so much worth it. However, there were many trash on the way. Hopefully the authorities will do something about it as the trash may harm the nature and pollute the beauty of this wonderful mountain.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Did the 2d 1n as the top is currently closed. The walk is reasonably nice and the views at the top are lovely. More difficult than many people realise. Take a few snickers with you.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I love this island. When u open the door and you see a blue ocean. Saw Flying Ray flipping on the air. Certainly, a good place to snorkel and the view itself is beautiful. The island itself is a wall (drop-down wall which I am not really sure the depth. But It just so beautifulllll.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'While you can stay overnight at Hatta, we just went for a day trip and had a divine time. Superb snorkelling, fresh coconuts, and lots of collecting hermit crabs. Loads of fun. We saw turtles and dolphins, great coral gardens and plenty of fish.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This is by far one the remotest locations to get, basic accommodations, virtually no electricity or internet, but superb snorkelling right of the beach.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'There were only a view people when we visited this place. So we could really enjoy the green view without being disturbed by number of visitors. This UNESCO World Heritage site was unique. It shows the Balinese traditional agricultural system that applies multilevel irrigation for rice fields that we couldn\'t find at the other place.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This is a beautiful UNESCO heritage site with rice fields at different levels all around you. The visual is magnificent.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'In visiting Gedung Sate, take a picture of the whole building in front then ask the guards for the way going to the Gedung Sate Museum.\nThe building facade looks nice in picture but you wouldn\'t be able to get inside and take a look of the historical building.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'It\'s so lucky that Bogor still have and own this botanical gardens. The entrance ticket is affordable enough and worth to buy. Relax and refresh!',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Great and green , soothing to eyes, lovely environment. I would recommend this place to all people who want to enjoy nature.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'To avoid traffic when visiting if possible plan between monday till friday.....The best time to visit is to be present there by 0800.... This will result in u seeing the animals when the animals are on road nd waiting for people to feed them.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'awesome beauty , nice scenery, lovely environment. I would recommend this place to all people who want to enjoy nature..',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Comfortable fees,food facility price is also good,amazing rides, crowded during holidays,available for every generation human,rain dance is also good,black hole 90° and 45° are very good.',
                'rate' => 5,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'This swimming pool have several pools and slides. The selection is varies from baby/toddlers, teenager up to adult. There is restaurant to order drinks and food (rumah air) inside the complex. The water maintenance should be improve though. I go there on weekdays where the pool is not too crowded, the water is dirty.',
                'rate' => 3,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Water kingdom is a good place to have fun especially with your family and friends. Located in Cileungsi, Bogor, Jawa Barat. It\'s a 1 hour drive (20 km) from Cibubur Toll Exit. Entrance fee is affordable for everyone. The food they sell here at reasonable cost.',
                'rate' => 4,
                // 'user_id' => rand(1, 18),
                // 'product_id' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}