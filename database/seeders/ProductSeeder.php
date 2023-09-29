<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                "img"=>"img/promotions/bigsky.png",
                "name"=>"BigSky",
                "description"=>"Conéctese a BigSky y eleve instantáneamente su sonido a la estratosfera con 12 reverberaciones exuberantes y radiantes diferentes.",
                "price"=>420,
                "category_id"=>1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/bajo-promo.webp",
                "name"=>"G&L - M2000 ",
                "description"=>"Un bajo completamente cargado que es lo suficientemente dinámico para cualquier estilo del legendario Leo Fender.",
                "price"=>900,
                "category_id"=>2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/vox.png",
                "name"=>"Vox - AC30C2",
                "description"=>"Para aquellos que anhelan más potencia, el AC30 amplía el cautivador sonido de su hermano pequeño al duplicar la potencia",
                "price"=>1000
                ,"category_id"=>3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/vox2.jpg",
                "name"=>"Vox - VT20X",
                "description"=>"¡El VT20X presenta un nuevo motor de modelado y suena incluso mejor que nunca!",
                "price"=>400,
                "category_id"=>3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/cuerdas.jpg",
                "name"=>"Elixir Light Strings - 9-46",
                "description"=>"Mejores cuerdas Electric Nanoweb ",
                "price"=>15,
                "category_id"=>4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/drum-set.jpg",
                "name"=>"SET MICRÓFONOS STUDIO (4-PCS)",
                "description"=>"Viene en un maletín de transporte con cierre ",
                "price"=>300,
                "category_id"=>5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/clarinete.jpg",
                "name"=>"CLARINETE BB",
                "description"=>"Sistema Boehm ",
                "price"=>350,
                "category_id"=>6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/sax.jpg",
                "name"=>"SAXOFON ALTO",
                "description"=>"Saxofón alto para niños, cuenta con Cuerpo de latón, llaves de latón",
                "price"=>700,
                "category_id"=>7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "img"=>"img/promotions/lira.jpg",
                "name"=>"LIRA 25 TECLAS ",
                "description"=>"Lira de marcha estándar con 25 teclas y Incluye cargador, bolillo y estuche transparente ",
                "price"=>150,
                "category_id"=>8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        Product::insert($productos);
        Product::Factory(25)->create();
    }
}
