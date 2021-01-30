<?php

namespace Database\Seeders;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(
            [
            'name' => 'Casio',
            'company_info' => "Casio watches hinge on the philosophy of 'creativity and contribution' – innovation pulses through each of the brand's designs. After the launch of the first Casio timepiece in the 1970s, the Japanese company became a leader in the digital watch world.The Casio empire has only grown . Today, the brand creates pieces that defy gravity, challenge the elements, and push the boundaries of both style and technology. From ultra-sporty, feature-packed designs to retro-inspired fashion timepieces,the Casio range has something for everyone. "
            ]
        );
        Brand::create(
            [
            'name' => 'Tissot',
            'company_info' => "Paving the way for Swiss watch brands since 1853, Tissot was founded in the Swiss mountains and continues to pioneer craftsmanship with its innovative state of mind. Constantly staying true to its slogan ‘Innovators by Tradition’, Tissot respect their heritage by refusing to compromise on the unquestionable quality of Swiss watchmaking. Tissot has been named Official Timekeeper and Partner of many disciplines, including Basketball with the NBA, Cycling with the Tour de France and Motorsports with MotoGP to name a few. Thanks to its continuous ability to innovate and to reach all types of audience, every year Tissot sells more than four million watches worldwide."
            ]
        );
        Brand::create(
            [
            'name' => 'Swatch',
            'company_info' => "Swatch, launched in 1983 by Nicolas G. Hayek, is a leading Swiss watch maker and one of the world's most popular brands. The first Swatch watches surprised everyone with their revolutionary concept, creative design and provocative spirit. Today Swatch continues to innovate and surprise with new models, collections and special editions. The brand maintains a strong presence in the world of sports with its commitment to snowboarding, freeskiing, surfing, volleyball, drone racing and MTB slopestyle. Right from the start, Swatch connected with art and artists. Swatch watches remain a prominent canvas for artists from a broad range of disciplines."
            ]
        );
        Brand::create(
            [
            'name' => 'Fossil',
            'company_info' => "An American watch and lifestyle company creatively rooted in authentic, vintage and classic design. With each signature watch, leather accessory and other product, Fossil strives to create high-quality designs that preserve the best of the past while updating it for today. When the clean lines of the mid-century meet today's modern looks, the result is key items that represent the best of what Fossil stands for traditional watches created in fresh hues and materials and timeless accessories that are up for the job of accompanying you wherever you travel."
            ]
        );
        Brand::create(
            [
            'name' => 'Garmin',
            'company_info' => "The world leader in GPS sports watches, Garmin has led the charge in development of multisport watches, with intuitive design features."
            ]
        );
        Brand::create(
            [
            'name' => 'Citizen',
            'company_info' => "Citizen, a pioneer in watchmaking and innovative technology, promotes excellence and creativity with a deep-rooted respect for craftsmanship. In 1976, Citizen invented Eco-Drive Technology, a simple yet revolutionary concept, harnessing the power of light from natural or artificial light and converting to energy. Not only does this create a watch that never needs a battery, it uses a renewable natural resource that doesn’t fill our landfills with discarded watch batteries. Our name speaks to our belief of inclusion with a multi-cultural mindset to create timepieces that can be enjoyed by citizens all over the world. "
            ]
        );
        Brand::create(
            [
            'name' => 'Gucci',
            'company_info' => "In 1972, Gucci became one of the first fashion Houses to branch into timepieces, creating successful, iconic models that combined contemporary spirit and tradition, innovation and craftsmanship, fashion and elegance. Since that time, Gucci timepieces have been made in Switzerland, assembled at the company’s watchmaking atelier in La Chaux-de-Fonds. It is this marriage of Swiss manufacturing traditions using high quality components together with Gucci detailing and Italian flair that has enabled the brand to enjoy over 40 years of watchmaking history. Today, Gucci watches are synonymous with fine quality as they bring a fresh, innovative perspective to the watch industry."
            ]
        );
        Brand::create(
            [
            'name' => 'Seiko',
            'company_info' => "Established in 1881 as a watch and clock repair shop in Ginza, Tokyo, Seiko has grown and diversified over the years, but remains best known for its world-leading brands and expertise in fusing intricate watchmaking skill with elegant design. Renowned for horological innovation with a stream of world firsts including the first TV watches, Seiko created the first ever quartz watch in 1969. Seiko timepieces deliver precisely beautiful Japanese aesthetics, brought to life through total in-house manufacture."
            ]
        );
        Brand::create(
            [
            'name' => 'Armani Exchange',
            'company_info' => "AX Armani Exchange is the youthful label created in 1991 by iconic Italian designer Giorgio Armani, offering men's and women's clothing and accessories that are inspired by the designer's codes of style. AX Armani Exchange captures the heritage of the Armani brand through a modern sensibility."
            ]
        );
        Brand::create(
            [
            'name' => 'BOSS',
            'company_info' => "BOSS watches are immaculately tailored to lifestyles where style navigates and precision counts. Sharp cuts, clean design and quality materials are always on the agenda. These distinctive timepieces, with their intrinsic air of elegant sophistication, create beautiful bridges connecting classic, modern and sporty. Reliable reminders of individual signatures of ambition and success, they express confidence and refinement in carefully balanced proportions. Uncompromising attention to detail turns looks into statements and aspirations into happenings."
            ]
        );
        Brand::create(
            [
            'name' => 'Bulova',
            'company_info' => "Since 1875 Bulova has been at the forefront of watch technology, innovation and industry firsts. Having opened its first store in Manhattan, Bulova has become internationally recognised for high quality materials, high accuracy and unique designs. This year Bulova heritages its past through its Archive series and re-introduces Computron, one of the world’s first LED quartz watches from the 1970’s. Equally stunning is Precisionist, with a 262 khz High Performance Quartz movement, which is 8 times more accurate than standard quartz, a 1/1000th of a second chronograph and elegant sweep motion second hand all topped off with 300m water resistance. One of Bulova’s headline collections is Curv, with the world’s first curved chronograph movement, bringing 262khz accuracy, slimline elegance this year shown in vivid blue within a PVD plated black case. Stunning and Unique."
            ]
        );
        Brand::create(
            [
            'name' => 'Certina',
            'company_info' => "Certina sport watches have all the same qualities that make a great athlete - endurance, strength, precision, performance and reliability. As a serious sports watch brand, Certina crafts timepieces that meet the highest demands of quality and design, with precision engineering and comprehensive protective features built in.Certina is part of the Swatch group, which also includes Flik Flak children's watches.This collection of Certina watches embraces the brand philosophy for excellence, using traditional, proven watchmaking techniques alongside innovative new technologies across a full range of disciplines. Certina men's watches and ladies' watches come in both mechanical and quartz and express many individualities from classic to urban."
            ]
        );
        Brand::create(
            [
            'name' => 'TOMMY HILFIGER',
            'company_info' => "TOMMY HILFIGER is one of the world’s leading designer lifestyle brands and is internationally recognised for celebrating the essence of classic American cool style. The Spring Summer 2020 men’s and women’s watch and jewellery collection features minimalist feminine silhouettes and rustic leather details, putting a modern twist on timeless classics."
            ]
        );
        
    }
}
