<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    public function run()
    {
        // Dữ liệu ảnh nhập thủ công cho từng sản phẩm
        $productImages = [
            1 => [
                'https://down-vn.img.susercontent.com/file/sg-11134201-7rdxk-lxieto5ezgkff8@resize_w900_nl.webp', 
                'https://down-vn.img.susercontent.com/file/sg-11134201-7rdwl-lxietp3jiq4qb7.webp', 
                'https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp',
            ],
            2 => [
                'https://down-vn.img.susercontent.com/file/sg-11134201-7rd6y-lx9wkqoaaue8e0.webp', 
                'https://down-vn.img.susercontent.com/file/sg-11134201-7rd3t-lx9wks00ftk6b0.webp', 
                'https://down-vn.img.susercontent.com/file/sg-11134201-7rd5v-lwafvh3l74juf3.webp',
            ],
            3 => [
                'https://down-vn.img.susercontent.com/file/sg-11134201-22110-1soks09tcgjv6e.webp',
                'https://down-vn.img.susercontent.com/file/sg-11134201-22110-ywr0s70tcgjv2d.webp',
                'https://down-vn.img.susercontent.com/file/sg-11134201-22110-y5lqowawcgjvc5.webp',
            ],
            4 => [
                'https://i.pinimg.com/736x/dd/41/4f/dd414f5099c9f6cdd8c617e03c3030ca.jpg',
                'https://i.pinimg.com/736x/61/ca/3b/61ca3bc6c07e5dc295eecd46b08916c9.jpg',
                'https://i.pinimg.com/736x/28/a5/de/28a5def3d6bc8a9ff515a2973a664d1b.jpg',
            ],
            5 => [
                'https://i.pinimg.com/736x/38/f7/ad/38f7ad7938e150ffc1fb049f56ff0353.jpg',
                'https://i.pinimg.com/736x/d6/a6/de/d6a6de9895fac99fff26e5d4f722fa44.jpg',
                'https://i.pinimg.com/736x/6e/0c/37/6e0c37469cc10f7025e81d90eb163366.jpg',
            ],
            6 => [
                'https://i.pinimg.com/736x/97/54/b1/9754b169e7f1cca129906576da2c62bd.jpg',
                'https://i.pinimg.com/736x/64/81/2c/64812cb121ff0234c48285cc088b217c.jpg',
                'https://i.pinimg.com/736x/ea/90/0f/ea900fb44aaf3a1fba0b28fc22296716.jpg',
            ],
            7 => [
                'https://i.pinimg.com/474x/6c/cf/c0/6ccfc0b2a4ee4f4ad4ee76291b6c9628.jpg',
                'https://i.pinimg.com/474x/f4/4a/5e/f44a5ea2e4b16f1af5fcb777dd93ee4e.jpg',
                'https://i.pinimg.com/474x/76/27/4f/76274f500794da65ed360885e45d77f3.jpg',
            ],
            8 => [
                'https://i.pinimg.com/736x/48/a3/08/48a3086bbe5d1b8b7c699617e05beb82.jpg',
                'https://i.pinimg.com/736x/d7/70/6e/d7706e9dbed64bc42aded75bd7d9cc11.jpg',
                'https://i.pinimg.com/736x/73/06/ad/7306ad399e235365f2eea107415bd01d.jpg',
            ],
            9 => [
                'https://i.pinimg.com/736x/f1/26/21/f12621e2b1435fd42ff9ce678bd9a26b.jpg',
                'https://i.pinimg.com/474x/21/c2/3a/21c23acf554ec822567a6c0334bff69c.jpg',
                'https://i.pinimg.com/474x/80/62/65/806265ff092bdaa345843984a62a1cd6.jpg',
            ],
            10 => [
                'https://i.pinimg.com/474x/50/32/27/5032274f0f19e4701484b5a8783a71ca.jpg',
                'https://i.pinimg.com/474x/85/6b/7f/856b7fcb917fbe732f59928986ea1706.jpg',
                'https://i.pinimg.com/474x/f2/b4/e5/f2b4e58eb54cc4500d6625344266e2dc.jpg',
            ],
            11 => [
                'https://i.pinimg.com/474x/bc/fd/d0/bcfdd097d6877dcf8059fd3e8a947e87.jpg',
                'https://i.pinimg.com/736x/8a/ba/dd/8abadd813dc39f5f71d2aa38b3f5a19b.jpg',
                'https://i.pinimg.com/474x/88/cc/e6/88cce6e4ba4e400dec6536ef4ac21604.jpg',
            ],
            12 => [
                'https://i.pinimg.com/736x/9f/5b/dd/9f5bdd5ce3c4a59482811ae818363f60.jpg',
                'https://i.pinimg.com/736x/63/f3/3d/63f33dd8779928b2b74c7cd3aa735248.jpg',
                'https://i.pinimg.com/474x/4c/fb/c1/4cfbc134919f032c115d5dc272538172.jpg',
            ],
            13 => [
                'https://i.pinimg.com/736x/4f/bf/bc/4fbfbc1da9e022c487f28ffeb8eaeb76.jpg',
                'https://i.pinimg.com/474x/80/52/ce/8052ce0ea9142ad433bfd5903372e899.jpg',
                'https://i.pinimg.com/474x/f2/b5/9a/f2b59ad8962e3c3d75105d44e73636be.jpg',
            ],
            14 => [
                'https://i.pinimg.com/736x/b0/34/df/b034df343ed32c11f2d62e07420e1998.jpg',
                'https://i.pinimg.com/474x/94/65/67/9465677abe8a262da3fbbb0460fdbfc9.jpg',
                'https://i.pinimg.com/474x/cc/d8/98/ccd898bef1442944a7afc77be8bd5f8b.jpg',
            ],
            15 => [
                'https://i.pinimg.com/736x/e2/8e/4c/e28e4c2aa7b38bd7fc50af3dc6399ed5.jpg',
                'https://i.pinimg.com/736x/45/d1/bf/45d1bf8e8b6abccae4de4d9bb4e36017.jpg',
                'https://i.pinimg.com/474x/ce/b3/b0/ceb3b00998adea9b1b6fad52506175fe.jpg',
            ],
            16 => [
                'https://i.pinimg.com/474x/89/4a/d7/894ad7fb974678b31b7fcfd6ddf5c789.jpg',
                'https://i.pinimg.com/736x/f0/4c/f4/f04cf45b15ce98e44aee644309b43c9a.jpg',
                'https://i.pinimg.com/474x/c1/27/c6/c127c6b26401cf2e4d4e60c98f43e30e.jpg',
            ],
            17 => [
                'https://i.pinimg.com/736x/28/7c/35/287c355e474ea8aab4ddeb9d34653e1a.jpg',
                'https://i.pinimg.com/474x/3a/5e/23/3a5e238c6610bb33755b1d64496bb57e.jpg',
                'https://i.pinimg.com/474x/16/41/20/164120ad1358c4fd739ea7bb29e39d1c.jpg',
            ],
            18 => [
                'https://i.pinimg.com/736x/7b/5b/0a/7b5b0ae36c76814989de94d552209b77.jpg',
                'https://i.pinimg.com/736x/a5/73/5a/a5735aa16ad2eec51fac7e5d2f9bfd1e.jpg',
                'https://i.pinimg.com/736x/de/43/82/de4382d3bde9546c73d7336a93a8a0eb.jpg',
            ],
            19 => [
                'https://i.pinimg.com/474x/94/69/a6/9469a6bce176b9a3d0833f6f8ea93a5d.jpg',
                'https://i.pinimg.com/474x/14/8f/47/148f47440da19e9010857bdabc9c0929.jpg',
                'https://i.pinimg.com/736x/38/7f/03/387f03675e1d7eccc34421d16d1260c0.jpg',
            ],
            20 => [
                'https://i.pinimg.com/474x/82/5f/f0/825ff048d8bf9fa2f93925218075fce0.jpg',
                'https://i.pinimg.com/736x/9e/0a/50/9e0a50f0ae84d33064ccc1d1e0da42d0.jpg',
                'https://i.pinimg.com/474x/9b/95/70/9b9570e51366257148d9fe7f3ba5a26f.jpg',
            ],             
            21 => [
                'https://i.pinimg.com/474x/f0/ca/11/f0ca116f474147ed8f9d9cb9d666a679.jpg',
                'https://i.pinimg.com/474x/18/f1/42/18f1429e3b71e7ed043153a109cf04f3.jpg',
                'https://i.pinimg.com/736x/92/2e/76/922e760ae14e882609cedb29bd8f8b38.jpg',
            ],
            22 => [
                'https://i.pinimg.com/474x/c1/9f/ef/c19fef8b0358b560e49e6c6e1532c58e.jpg',
                'https://i.pinimg.com/474x/1f/02/42/1f0242876ef9c60314b74c55dc11d981.jpg',
                'https://i.pinimg.com/474x/88/e1/e0/88e1e08946f45230a1eb23b6c888026f.jpg',
            ],
            23 => [
                'https://i.pinimg.com/736x/81/54/08/815408c7319c4146ff65219ddfb38b59.jpg',
                'https://i.pinimg.com/736x/e3/42/f5/e342f5d0e7d6f9cfa9b2d143dc1abec6.jpg',
                'https://i.pinimg.com/474x/3d/bb/d0/3dbbd00eddd12d8ec0f0a927af8bd62a.jpg',
            ],
            24 => [
                'https://i.pinimg.com/736x/a0/a7/73/a0a7732e10fecf243f82d650fd7b31ae.jpg',
                'https://i.pinimg.com/474x/00/89/b6/0089b6a5e43480128e0a7fcb195924d8.jpg',
                'https://i.pinimg.com/474x/b8/f8/a3/b8f8a32bd67ed71051dc675969957642.jpg',
            ],
            25 => [
                'https://i.pinimg.com/474x/2e/4f/79/2e4f797599e4297e22f6845cd7e60d2c.jpg',
                'https://i.pinimg.com/736x/83/a7/a4/83a7a4dbfdd8ba35af1d7a784cc35694.jpg',
                'https://i.pinimg.com/474x/b9/ab/2a/b9ab2a1809cd6beac68a097259f6a5a7.jpg',
            ],
            26 => [
                'https://i.pinimg.com/736x/d0/d3/71/d0d37154dfcdebac1e409259c349b305.jpg',
                'https://i.pinimg.com/474x/83/a7/bc/83a7bc125e6208af2162e5ff4adda546.jpg',
                'https://i.pinimg.com/474x/c0/aa/45/c0aa45d9b461c554abf0c387d72b1b1e.jpg',
            ],
            27 => [
                'https://i.pinimg.com/474x/ba/5f/0a/ba5f0a7708e8335cfbfde43c1df93a27.jpg',
                'https://i.pinimg.com/474x/1c/01/9a/1c019aa35dffb44097fb03f77d668b2a.jpg',
                'https://i.pinimg.com/474x/bc/5f/97/bc5f97475c2fa94d0466fab148a8c87c.jpg',
            ],
            28 => [
                'https://i.pinimg.com/474x/6c/fb/2e/6cfb2e9b3ec08656798ec2afb91b936d.jpg',
                'https://i.pinimg.com/474x/ff/9f/6a/ff9f6a0985ea2e0568f7ec07580158bc.jpg',
                'https://i.pinimg.com/736x/5b/d4/c2/5bd4c21a0837dcb22fcf9b42158a68cc.jpg',
            ],
            29 => [
                'https://i.pinimg.com/474x/22/28/46/2228467ccf4f4b225b2711cdc3e1e1f9.jpg',
                'https://i.pinimg.com/736x/45/d3/dd/45d3dd83d080bda58575dee946ac2a38.jpg',
                'https://i.pinimg.com/474x/07/12/8b/07128be50fec3a093398de1f5a3fd8a9.jpg',
            ],
            30 => [
                'https://i.pinimg.com/736x/70/ad/72/70ad72e56507f45f3a9a4610138b6421.jpg',
                'https://i.pinimg.com/474x/b4/36/21/b436216148353d3c58f6447751027361.jpg',
                'https://i.pinimg.com/736x/09/f4/9f/09f49fcb7f0163971f4c149ffb026a45.jpg',
            ],
            31 => [
                'https://i.pinimg.com/736x/a1/61/82/a161823efa10bcd1a8798e4df73b72d2.jpg',
                'https://i.pinimg.com/474x/85/c2/8d/85c28dfe3b4b7a861cbb1ff29eaffb63.jpg',
                'https://i.pinimg.com/474x/c9/43/1e/c9431eca7e75cce28527756adf44c6ac.jpg',
            ],
            32 => [
                'https://i.pinimg.com/736x/54/ec/62/54ec62e2d0d2d0345056fda6df2abc2a.jpg',
                'https://i.pinimg.com/474x/c5/0c/82/c50c82af87daec1dabfc37b243090b98.jpg',
                'https://i.pinimg.com/474x/9f/f9/2d/9ff92d2188212d1d960557cc73bdbe1d.jpg',
            ],
            33 => [
                'https://i.pinimg.com/736x/cc/d9/9b/ccd99b9990849198e194ce7e894a7725.jpg',
                'https://i.pinimg.com/736x/88/2b/60/882b60732594b7afb9e3d94744d5d431.jpg',
                'https://i.pinimg.com/474x/ab/c5/b3/abc5b3cf1b0f088b28d052b36316e2b7.jpg',
            ],
            34 => [
                'https://i.pinimg.com/736x/31/83/cb/3183cb31c91b3aa5ebc42b0f40efe5e2.jpg',
                'https://i.pinimg.com/736x/e6/53/aa/e653aa2f0440f3fe03aae367103e0165.jpg',
                'https://i.pinimg.com/474x/0d/e4/28/0de4284afbb17a1dc154669fd48e4877.jpg',
            ],
            35 => [
                'https://i.pinimg.com/736x/be/0d/6f/be0d6f696649ebb393efd846b8342ece.jpg',
                'https://i.pinimg.com/736x/9b/f6/51/9bf651eddeec364bd496214df14a0558.jpg',
                'https://i.pinimg.com/736x/a5/54/62/a55462f7291e60614235709de627c9dd.jpg',
            ],
            36 => [
                'https://i.pinimg.com/736x/48/8e/e8/488ee8a9539119c10996b3a28f416bc6.jpg',
                'https://i.pinimg.com/736x/41/2f/da/412fda968e3f727cd07a9c6c8d08d192.jpg',
                'https://i.pinimg.com/736x/1b/e4/52/1be4527e132efa281d1d4b41aa3aacab.jpg',
            ],
            37 => [
                'https://i.pinimg.com/474x/7b/52/01/7b52010a4bfdd7ff339a9529fa867b56.jpg',
                'https://i.pinimg.com/474x/b3/f2/e3/b3f2e328177754dd55155b0d634a67c5.jpg',
                'https://i.pinimg.com/474x/fe/5b/ef/fe5befee39e7f55bab94cf31b966d881.jpg',
            ],
            38 => [
                'https://i.pinimg.com/736x/54/ec/ba/54ecba395ea310bf28ae6843a9c8f3c4.jpg',
                'https://i.pinimg.com/474x/e4/76/e0/e476e0e28abb4405dd91e1789b229998.jpg',
                'https://i.pinimg.com/474x/8b/a0/b5/8ba0b5c994ff2a4cc2d1a38c0613a244.jpg',
            ],
            39 => [
                'https://i.pinimg.com/736x/ad/04/09/ad04095ecdda6c2c900c63ae2db2f767.jpg',
                'https://i.pinimg.com/736x/95/8c/d7/958cd7e2c02ed4f6e68837cbf5339447.jpg',
                'https://i.pinimg.com/736x/a3/0f/1b/a30f1b9dc4cd75df3df386ea71faa290.jpg',
            ],
            40 => [
                'https://i.pinimg.com/736x/05/33/b7/0533b7ccb11bc69e794a3e9be51b9ba2.jpg',
                'https://i.pinimg.com/474x/fa/a5/fd/faa5fdb421ccb91d1e6700e0d949df9c.jpg',
                'https://i.pinimg.com/474x/68/32/b5/6832b5c276ccccf16631938a31bc9f0c.jpg',
            ],
            41 => [
                'https://i.pinimg.com/474x/3b/32/9e/3b329e2ed259fbadeb8b155ead4a1311.jpg',
                'https://i.pinimg.com/474x/d2/ef/5d/d2ef5da7b74823e0bafbec989cc2dac1.jpg',
                'https://i.pinimg.com/474x/34/a2/61/34a26193e5fa99d3d35153262dc425a4.jpg',
            ],
            42 => [
                'https://i.pinimg.com/474x/cb/f1/a4/cbf1a4cf317d10d7902915a0fb6fb997.jpg',
                'https://i.pinimg.com/736x/b7/3f/d2/b73fd226a94a631a5cd2ceb56669cf67.jpg',
                'https://i.pinimg.com/474x/b7/10/90/b71090a1c28814da994f8d25f8ce8af4.jpg',
            ],
            43 => [
                'https://i.pinimg.com/474x/fe/02/90/fe0290f20dd000a3218bcfd43088e05a.jpg',
                'https://i.pinimg.com/736x/b4/8e/e9/b48ee99bac172648fdd2fb6fb9839b4e.jpg',
                'https://i.pinimg.com/474x/6c/85/b4/6c85b4951c78eb521e580f761b1043d2.jpg',
            ],
            44 => [
                'https://i.pinimg.com/736x/82/64/52/82645202cd0bc2b320714d6fde1ebb55.jpg',
                'https://i.pinimg.com/474x/8a/f2/4a/8af24a66b68c9227aad2b8586de7e814.jpg',
                'https://i.pinimg.com/474x/6f/5d/e6/6f5de641944082a7141c19ec93212789.jpg',
            ],
            45 => [
                'https://i.pinimg.com/736x/d8/7f/ba/d87fbadd15e5cd27880dfcc2f36438eb.jpg',
                'https://i.pinimg.com/474x/d9/c1/11/d9c111cc61fdc5b67d7bbc39161abdba.jpg',
                'https://i.pinimg.com/474x/f7/00/10/f70010ba4ff6cfc87458ba8e692f103e.jpg',
            ],
            46 => [
                'https://i.pinimg.com/736x/3e/69/8f/3e698f03c8d48bf005643ea86d4fb927.jpg',
                'https://i.pinimg.com/474x/ae/19/fb/ae19fb239957e4a24651fd4b49d451c4.jpg',
                'https://i.pinimg.com/474x/a2/27/16/a22716e5874385704f3de2a838b5d111.jpg',
            ],
            47 => [
                'https://i.pinimg.com/736x/06/7a/8c/067a8cc49e35a5c71e4c5657bdef1aaf.jpg',
                'https://i.pinimg.com/474x/d4/3d/77/d43d77949988ba51cc7ef80eba811936.jpg',
                'https://i.pinimg.com/474x/96/9d/1d/969d1d8872fcd051d1e1b34b14eb97f7.jpg',
            ],
            48 => [
                'https://i.pinimg.com/736x/8d/65/a0/8d65a0d9c652d879ebd60aed21bef10b.jpg',
                'https://i.pinimg.com/474x/e2/6d/0a/e26d0af31ca3549425ac21294499d86c.jpg',
                'https://i.pinimg.com/474x/39/a1/fd/39a1fd082fb388f96d54ad23613a01ea.jpg',
            ],
            49 => [
                'https://i.pinimg.com/736x/81/5f/08/815f0830324b903e7b5d0e7a4db7c01a.jpg',
                'https://i.pinimg.com/474x/14/6d/04/146d049e5f65b550b7ac4a94b5ee6b2d.jpg',
                'https://i.pinimg.com/474x/bb/d0/a0/bbd0a097aeb97f2f65b0b8356b70b80b.jpg',
            ],
            50 => [
                'https://i.pinimg.com/474x/c2/bb/39/c2bb39284297185b5958ca6250d823d1.jpg',
                'https://i.pinimg.com/474x/81/96/06/8196065ab8793e5b586c652eb08c9e95.jpg',
                'https://i.pinimg.com/474x/21/57/83/215783de069f2745a7813691836eabd1.jpg',
            ],
        ];

        foreach ($productImages as $productId => $images) {
            $this->insertImages($productId, $images);
        }
    }

    private function insertImages(int $productId, array $images)
    {
        $data = [];
        foreach ($images as $index => $imageUrl) {
            $data[] = [
                'product_id' => $productId,
                'image_url' => $imageUrl,
                'is_primary' => $index === 0, 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('product_images')->insert($data);
    }
}
