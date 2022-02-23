<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                // 0
                'Standard',
                '1000',
                'The bedroom with the cheapest price but still quality',
                'Dictumst aliquam consectetuer gravida erat platea quis. Senectus ex nisi pulvinar lacus consequat elementum ipsum per. Donec neque elementum bibendum fames nam. Volutpat congue montes litora molestie pulvinar quisque adipiscing pellentesque. Quis fusce tortor sit sed eu euismod mus. Euismod platea maximus tristique nibh et quam curae lacinia natoque.',
                '400'
            ],
            [
                // 1
                'Superior',
                '800',
                'Bedrooms with better interiors and views',
                'Pharetra eu curae natoque ipsum laoreet conubia ullamcorper senectus. Maecenas volutpat fermentum turpis si suspendisse eu porta integer venenatis maximus inceptos. Maecenas penatibus rutrum laoreet facilisi sit justo. Lacus curabitur ad volutpat sapien cras ornare nibh.',
                '450'
            ],
            [
                // 2
                'Deluxe',
                '700',
                'A large bedroom with a luxurious and elegant interior',
                'Lorem mattis cras primis nisi interdum sagittis sapien felis. Class eleifend non euismod ut aenean volutpat mus congue. Ullamcorper morbi donec cras massa lobortis feugiat vel molestie luctus sollicitudin. Class malesuada dui ullamcorper congue scelerisque duis. Consectetur luctus ligula accumsan viverra bibendum tempus. Sem pretium mi libero ad nec nullam ultrices augue vestibulum vehicula fringilla. Conubia lectus nascetur netus lorem odio et consequat mauris.',
                '480'
            ],
            [
                // 3
                'Junior Suite',
                '500',
                'The bedroom is accompanied by a large wardrobe and a living room',
                'Pretium curabitur hac nibh tellus montes maecenas augue laoreet lectus quam posuere. Duis euismod malesuada integer montes imperdiet erat senectus nulla vulputate. Ac facilisi bibendum tellus parturient at senectus tortor letius. Hac ridiculus pulvinar ipsum lacus semper.',
                '500'
            ],
            [
                // 4
                'Suite',
                '400',
                'Bedroom with separate living room and kitchen',
                'Torquent morbi inceptos platea fusce ultrices ut pede. Urna amet sit condimentum etiam dictum conubia hendrerit. Vehicula lacinia pulvinar finibus lectus aptent commodo tristique euismod purus. Nulla ultrices aliquam lacinia conubia amet torquent posuere mi dapibus enim. Sollicitudin natoque sodales nullam ultrices maximus eget.',
                '500'
            ],
            [
                // 5
                'Presidential Suite',
                '200',
                'The best rooms with interiors and complete facilities inside',
                'Torquent morbi inceptos platea fusce ultrices ut pede. Urna amet sit condimentum etiam dictum conubia hendrerit. Vehicula lacinia pulvinar finibus lectus aptent commodo tristique euismod purus. Nulla ultrices aliquam lacinia conubia amet torquent posuere mi dapibus enim. Sollicitudin natoque sodales nullam ultrices maximus eget.',
                '800'
            ],
            [
                // 6
                'Single',
                '1000',
                'Rooms suitable for backpackers with complete facilities',
                'Condimentum imperdiet aptent ullamcorper dapibus enim ad accumsan laoreet risus. Elit eu viverra et tempor nam dapibus euismod luctus. Fusce etiam pede sem nec euismod porta molestie nunc praesent. Ullamcorper porta diam aenean nunc urna eget. Mattis egestas massa fermentum elit ultrices primis rutrum mauris placerat.',
                '420'
            ],
            [
                // 7
                'Twin',
                '800',
                'A suitable bedroom to stay with a partner or friends',
                'Ligula nibh venenatis cursus sit hendrerit metus accumsan aliquam curae tincidunt. Eget semper egestas ullamcorper finibus potenti nunc ipsum tellus maecenas dui euismod. Letius nostra orci senectus vivamus metus. Si orci sed porttitor senectus per tortor curae.',
                '450'
            ],
            [
                // 8
                'Double',
                '800',
                'Bedrooms that are suitable for your honeymoon',
                'Dolor in ex risus duis cras fames ultrices posuere consectetur neque. Risus integer platea tempus consequat per cras diam. Volutpat fames scelerisque dolor porta torquent fringilla porttitor eget placerat lobortis aenean. Mollis integer placerat quam facilisis cubilia nec. Nascetur adipiscing natoque ligula interdum faucibus donec gravida class luctus nunc massa. Lacus amet ligula interdum sit tortor taciti praesent integer placerat elit mus. Dapibus torquent finibus ultrices et blandit nullam quis euismod senectus vehicula eget',
                '460'
            ],
            [
                // 9
                'Family',
                '500',
                'A bedroom that is suitable for a vacation with family',
                'Phasellus scelerisque dis imperdiet felis fames suspendisse faucibus parturient at libero. Lobortis platea commodo posuere rhoncus mattis eu arcu elementum. Convallis mi facilisi lorem sociosqu laoreet facilisis natoque sagittis libero. Interdum habitant luctus integer suscipit magna elementum ante in id donec.',
                '480'
            ],
            [
                // 10
                'Connecting',
                '500',
                'A suitable bedroom for your group with a separate bedroom',
                'Ut dictum sed aliquet adipiscing fames. Nascetur hac pharetra porta sapien tempus enim orci eget quam. At ante suspendisse cursus faucibus interdum odio ullamcorper consectetur. Leo vel accumsan adipiscing ridiculus venenatis non diam at.',
                '500'
            ],
            [
                // 11
                'Murphy',
                '200',
                'You can easily turn your bedroom into a living room',
                'Natoque mus pede vitae molestie letius tortor fermentum parturient. Magna vivamus lacinia platea proin duis nam montes. Hac rutrum augue nullam aenean diam ex enim. Netus platea class fringilla vitae adipiscing ad. Hac sagittis ridiculus tellus parturient consectetuer gravida tincidunt cras ex vehicula sollicitudin. Sollicitudin netus ac efficitur elit ornare litora taciti vestibulum auctor. Maximus sodales cursus convallis quis malesuada risus imperdiet dolor iaculis.',
                '420'
            ],
            [
                // 12
                'Accessible',
                '800',
                'Rooms suitable for people with disabilities',
                'Nostra leo ullamcorper porttitor phasellus volutpat. Ut a pellentesque purus nisl scelerisque duis. Penatibus consequat proin aenean cubilia fusce natoque phasellus cras quis. Per sociosqu volutpat est phasellus nascetur laoreet elementum taciti dui in dictumst. Penatibus nulla lorem aptent fames class egestas pulvinar libero. Dolor tincidunt malesuada blandit nunc ultricies nulla magnis. Amet arcu convallis inceptos lacinia sociosqu blandit dictum. Cubilia tempus finibus accumsan felis viverra purus tincidunt.',
                '400'
            ],
            [
                // 13
                'Cabana',
                '100',
                'Spacious bedroom with private pool for you',
                'Scelerisque turpis dictumst sagittis inceptos erat malesuada odio volutpat sollicitudin eu imperdiet. Iaculis fames himenaeos dictumst in rutrum pede diam aliquam sollicitudin phasellus. Congue fringilla primis porttitor vehicula dolor class donec. Consequat nullam posuere lacinia magnis nec lectus odio auctor dis. Sed leo ullamcorper eros augue urna mollis nisl et elementum.',
                '600'
            ],
        ];

        for ($i=1; $i <=count($rooms); $i++) { 
            Room::create([
                'code' => bin2hex(random_bytes(20)),
                'name' => $rooms[$i - 1][0],
                'total_rooms' => $rooms[$i - 1][1],
                'available' => $rooms[$i - 1][1],
                'image' => 'img/rooms/' . $i . '.jpg',
                'description' => $rooms[$i - 1][2],
                'explanation' => '<p>' . $rooms[$i - 1][3] . '</p>',
                'price' => $rooms[$i - 1][4],
            ]);
        }
    }
}
