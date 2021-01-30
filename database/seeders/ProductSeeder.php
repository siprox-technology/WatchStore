<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //--casio
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GST-B100-1AER',
                'name'=>'Mens Casio G-Steel Bluetooth Triple Connect Chronograph Radio Controlled Watch',
                'category'=>'G-Steel', 
                'type'=>'Chronograph Radio Controlled', 
                'gender'=>'Mens', 
                'price'=>'337.80',
                'discount'=>'25', 
                'color'=>'grey/black', 
                'description'=>'Designed for maximum toughness, the Mens Casio G-Steel Bluetooth Triple Connect Chronograph Radio Controlled Watch is bursting with features ideal for men with active lifestyles.

                First up, it’s water resistant to 200 metres, so it will stay in perfect condition when you’re scuba diving or enjoying intense water-sports action. It’s also shock and low-temperature resistant. Bluetooth connectivity means you can hook it up to your smartphone for highly accurate timekeeping, and there’s also a phone finder tool should you mislay it. A 24-hour stopwatch and countdown timer are handy extras, and there’s also an alarm function, date display and chronograph feature. It’s also solar powered, so no need to buy expensive replacement batteries.

                As befits its name, the G-Steel is a seriously hardwearing watch, with an uncompromising stainless-steel case held in place with six metal screws. The durable black resin strap will handle the toughest of adventures, while the feature-packed dial includes a multi-function jet-engine-style disc at 9 o’clock, as well as chunky hour baton markers, chronograph dial and date function. A bold watch that looks great and is always ready for your next adventure.
                Water resistant to 200 metres, so ideal for scuba diving and water sports
                Bluetooth compatible, allowing you to pair the watch with your smartphone
                Phone finder feature – if you misplace your phone, one button press and your phone will sound an alarm
                Shock, vibration and low-temperature resistant, so it can handle tough outdoor activity
                Chronograph function for elapsed time measurement, adding functionality ', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Analogue,Backlight,Yes,Case depth approx.,14.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,48.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Grey,Multiple Time Zones Display,Dual Time,Gender,Gents,Glass,Acrylic,Model Name,G-Steel,Movement Source,Japan,Movement,Tough solar,Radio Controlled,Yes,Strap colour,Black,Strap Type,Rubber Strap,Water Resistance,200 metres,Weight (g),101.00,BARCODE,4549526168178,Guarantee,2 years',
                'stock'=>'50',
                'brand_id'=>'16',]
        );
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GST-B100D-1AER',
                'name'=>'Mens Casio G-Steel Bluetooth Triple Connect Chronograph Watch',
                'category'=>'G-Steel', 
                'type'=>'Bluetooth Triple Connect Chronograph', 
                'gender'=>'Mens', 
                'price'=>'394.99',
                'discount'=>'25', 
                'color'=>'grey/grey', 
                'description'=>"Casio G-Steel Bluetooth Triple Connect GST-B100D-1AER is a very impressive Gents watch. The case is Stainless Steel, which stands for a high quality item while the dial colour is Grey. The features of the watch include (among others) a chronograph and date function. This model is 200 metres water resistant - it can be used for professional marine activity, skin diving and high impact water sports, but not deep sea or mixed gas diving.

                This watch is shipped with an official presentation box and manufacturer's warranty.", 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Analogue,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,54.00mm,Chronograph,Yes,Clasp type,Deployment,Dial Colour,Grey,Multiple Time Zones Display,Dual Time,Gender,Gents,Glass,Acrylic,Model Name,G-Steel,Movement Source,Japan,Movement,Tough solar,Strap colour,Silver,Water Resistance,200 metres,Weight (g),190.00,BARCODE,4549526168222,Guarantee,2 years',
                'stock'=>'60',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GG-B100-1AER',
                'name'=>'Casio G-Shock Mudmaster Watch',
                'category'=>'Masters of G', 
                'type'=>'Mudmaster ', 
                'gender'=>'Mens', 
                'price'=>'369.99',
                'discount'=>'25', 
                'color'=>'grey/black', 
                'description'=>'The Mudmaster is an iconic member of the Masters of G collection by G Shock.

                Boasting an impressive range of functions, this watch includes a quad sensor with compass, altimeter, thermometer and barometer, as well as an accelerometer and step tracker.
                
                Designed with toughness and durability in mind, the Mudmaster has carbon-reinforced casing and a woven carbon fibre bezel, which is lighter and tougher than ever before, as well as being dust, mud and shock resistant. This is the ultimate timepiece for anyone with an adventurous lifestyle.
                
                Water-resistant to 200m, great for swimming and water sports
                Stress-resistant 53mm carbon-reinforced resin case with a durable and flexible resin band
                Powered by a quartz watch movement for superb time accuracy
                Other features include: stopwatch, sunrise and sunset tracker, countdown timer, auto calendar
                Connect to your smartphone using Bluetooth, enabling access to a wide range of functions
                Track mission logs using your phones GPS ', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,45.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Grey,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Luminescent hands,Yes,Model Collection,G-Shock,Model Name,G-Shock Mudmaster,Movement Source,Japan,Movement,Quartz,Strap colour,Black,Strap Type,Plastic/Resin Strap,Water Resistance,200 metres,Weight (g),92.00,BARCODE,4549526235504,Guarantee,2 years
            ',
                'stock'=>'150',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GWG-1000-1A3ER',
                'name'=>'Casio G-Shock Mudmaster Premium Compass Mens Watch',
                'category'=>'Masters of G', 
                'type'=>'Mudmaster', 
                'gender'=>'Mens', 
                'price'=>'745.99',
                'discount'=>'25', 
                'color'=>'black/khaki', 
                'description'=>"This new MUDMASTER model was created especially for this whose work takes it into areas where piles of rubble, dirt, and debris are present. A special vibration-resistant construction lets them stand up to wear while operating cutters, crushers, drills and other heavy machinery to clear way large obstacles. This is CASIO's first analog watch to come with Mud Resist construction, which helps to ensure that nothing gets into the watch when down and dirty work takes you deep into the dirt and sludge. Multiple gaskets are used on the pipes that guide buttons and shafts, which keeps mud out. These pipes not only act to protect buttons from impact, they also enhance button operation. The screw-in force of the screw lock bezel on an internal gasket further increases mud resistance. A new bezel structure lets you visually check whether the bezel has been screwed in adequately. In addition, Triple Sensor Version 3 capabilities provide instant access to direction, barometric pressure, and temperature information when needed under tough conditions. The face of the watch is marked with large Arabian numerals as 12, 3, 6, and 9 o'clock for easy reading. The face is illuminated by a double LED light and protected by a sapphire crystal to ensure high visibility under virtually any conditions imaginable. The band surface is processed to resemble a cloth band texture, and the hour and minute hands are shaped with points that make them resemble warning markers. All buttons have a checkered surface for surer operation and grip even when wet, and the overall design is tough and rugged. Vibration Resistant Structure Digital compass, barometric pressure/altitude, temperature readings Double LED light illuminates the face and digital display for outstanding readability. Screw-in Crown Multiband 6 (Automatically adjusts time settings based on reception of one of six time calibration signals around the globe: Japan (2), China, United States, England, Germany.) Tough Solar", 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,51.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,Dual Time,Gender,Gents,Glass,Sapphire,Hour Markers,Batons,Luminescent hands,Yes,Model Name,G-Shock Premium Mudmaster Compass,Movement Source,Japan,Movement,Tough solar,Radio Controlled,Yes,Strap colour,Khaki,Strap Type,Rubber Strap,Water Resistance,200 metres,Weight (g),119.00,BARCODE,4971850028345,Guarantee,2 years',
                'stock'=>'75',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GG-B100-1A9ER',
                'name'=>'Casio G-Shock Watch',
                'category'=>'Bluetooth', 
                'type'=>'Bluetooth', 
                'gender'=>'Mens', 
                'price'=>'367.99',
                'discount'=>'30', 
                'color'=>'grey/orange', 
                'description'=>'Casio G-Shock GG-B100-1A9ER is an amazing and handsome Gents watch from G-Shock collection. Material of the case is Plastic/Resin while the dial colour is Grey. The features of the watch include (among others) a chronograph and date function as well as an alarm. This model has got 200 metres water resistancy - it can be used for professional marine activity, skin diving and high impact water sports, but not deep sea or mixed gas diving. We ship it with an original box and a guarantee from the manufacturer.', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,45.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Grey,Multiple Time Zones Display,World Time,Gender,Gents,Glass,Mineral,Luminescent hands,Yes,Model Collection,G-Shock,Model Name,G-Shock,Movement,Quartz,Radio Controlled,Yes,Strap colour,Orange,Water Resistance,200 metres,BARCODE,4549526235450,Guarantee,2 years
            ',
                'stock'=>'85',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GBA-800-9AER',
                'name'=>'Casio G-Shock Bluetooth Step Tracker Watch',
                'category'=>'Bluetooth', 
                'type'=>'Step Tracker', 
                'gender'=>'Mens', 
                'price'=>'134.99',
                'discount'=>'25', 
                'color'=>'black/yellow', 
                'description'=>'Bold, bright and with all the practicality you would expect from an iconic G-Shock, the G-Squad GBA-800-9AER will add a pop of colour to your wrist plus unforgettable functionality to your life.

                With Bluetooth technology, you can easily link the G-Squad with your phone and use it alongside the G-Shock Bluetooth® Connected phone app, which gives you access to functions that will enhance your workout, including: a step-counter, a multi-timer and the ability to keep up to 200 lap records. The app also allows you to maintain step count logs, calculate calories burnt and set a daily step count that will be sure to keep you stomping those feet for longer.
                
                The robust design makes the G-Squad super durable, but this no way limits its daring style. With an eye catching yellow-lime case and strap, juxtaposed by a midnight black face and luminous hands, the G-Squad is perfect for the fashion-forward and acute athletes alike. If you like standing out from the crowd, the GBA-800-9AER is for you.
                
                Auto LED Lights so you can workout with your G-Shock in areas of low light
                Resin strap and case to protect watch mechanism from heavy duty activity
                Water resistant up to 200m; suitable from anything to a casual swim to a professional dive
                Automatic calendar that always displays the correct date', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,16.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,54.00mm,Chronograph,Yes,Dial Colour,Black,Gender,Gents,Model Collection,G-Squad,Model Name,G-Squad,Movement Source,Japanese,Movement,Quartz,Radio Controlled,Yes,Strap colour,Yellow,Strap Type,Rubber Strap,Water Resistance,200 metres,BARCODE,4549526179358,Guarantee,2 years',
                'stock'=>'65',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'G Shock',
                'model_number'=>'GMW-B5000D-1ER',
                'name'=>'Casio G-Shock Full Metal Silver Watch',
                'category'=>'35th Anniversary', 
                'type'=>'Full Metal', 
                'gender'=>'Mens', 
                'price'=>'508.99',
                'discount'=>'0', 
                'color'=>'silver/silver', 
                'description'=>"Since the 1983 release of the original G-SHOCK DW-5000C, the 5000 series has stayed true to the square-shaped pedigree which has become a style icon. 35 years later, the limited edition GMW-B5000 nods to the heritage of that first ever G-SHOCK while pushing new boundaries in every way from its materials to the construction and features.
                The outer components, including the watch band, case and bezel are entirely made from Stainless Steel while the interior employs a new shock-resistant construction. Complete with Radio Controlled timekeeping and a Bluetooth smart link, this collectors G-Shock is sure to make it's mark in the G-Shock Hall Of Fame.", 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Digital,Backlight,Yes,Bezel Type,Fixed,Case depth approx.,13.00mm,Primary Material,Stainless Steel,Case Shape,Rectangle,Case width approx.,49.00mm,Chronograph,Yes,Clasp type,Push-button Deployment,Dial Colour,LCD,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Model Collection,G-Shock,Model Name,G-Shock,Movement Source,Japan,Movement,Tough solar,Radio Controlled,Yes,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,200 metres,Weight (g),167.00,BARCODE,4549526187681,Guarantee,2 years,Chronometer,Yes',
                'stock'=>'95',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'Edifice',
                'model_number'=>'EFR-570DB-1BVUEF',
                'name'=>'Casio Chronograph Watch',
                'category'=>'Chronograph', 
                'type'=>'Chronograph', 
                'gender'=>'Mens', 
                'price'=>'155.99',
                'discount'=>'10', 
                'color'=>'black/silver', 
                'description'=>'From the Edifice Collection comes the Gents Casio Edifice Chronograph Watch, a stylish fashion accessory that looks great and is packed with cool features.

                A great choice for swimmers and water sports fans, the Edifice is water resistant to 100 metres. There’s also a stopwatch function and a multi-dial chronograph for keeping perfect track of your training runs. The neo-display ensures the watch lights up after dark, while the tough mineral glass coating keeps it looking as good as new.
                
                Scoring top marks for style, splashes of blue contrast brilliantly with the stainless steel bracelet. The blue bezel has minute markers, while the patterned black dial has chunky silver-toned baton hour markers and luminous hands for easy viewing. A great-looking timepiece, the Gents Casio Edifice Chronograph Watch makes a big style statement.
                Water-resistant to 100m, great for swimming and water sports
                Chronograph function for elapsed time measurement, adding functionality
                Powered by a quartz watch movement for superb time accuracy
                Long lasting and rust-resistant stainless steel case ', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Analogue,Case depth approx.,13.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,45.00mm,Chronograph,Yes,Clasp type,Clasp,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Luminescent hands,Yes,Model Collection,Edifice,Model Name,Chronograph,Movement Source,Japan,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,Weight (g),151.00,BARCODE,4549526252433,Guarantee,2 YEARS',
                'stock'=>'85',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'Edifice',
                'model_number'=>'EFR-569DB-1AVUEF',
                'name'=>'Casio Edifice Racing Design Chronograph Watch',
                'category'=>'chronograph', 
                'type'=>'Racing', 
                'gender'=>'Mens', 
                'price'=>'186.99',
                'discount'=>'20', 
                'color'=>'black/silver', 
                'description'=>"From Casio's mult-function chronograph collection, Edifice, comes the Casio Edifice Racing Design Chronograph Watch EFR-569DB-1AVUEF. Combining elaborate design and exceptional technology, this chronograph watch is perfect for lovers of sporty aesthetics and functionality freaks alike.

                With chronograph technology, this Edifice also doubles as a stopwatch, with three subdials characteristic of a chronograph watch. Also featured on the dial is a handy date window at 4 o'clock.
                
                The Edifice racing design features a brushed stainless steel bracelet strap with a contrasting black metal case and screws. Blue detailing adorns the black dial, giving the watch a sporty edge along with a pop of colour. Baton hour markers along with matching colour hands complement the three subdials and detailed bezel
                Chronograph technology so doubles as a stopwatch
                Rust resistant and durable stainless steel strap and case
                Date window so you always have the date right at your wrist
                Japanese watch movement for ultimate precision and efficiency
                Water resistant to 100m so suitable for everything from a casual swim to a deep dive", 
                'specification'=>'Brand,Casio,Analogue/Digital,Analogue,Backlight,Yes,Bezel Type,Plain,Case depth approx.,12.10mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,51.00mm,Chronograph,Yes,Clasp type,Clasp,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Hour Markers,Batons,Luminescent hands,Yes,Model Collection,Edifice,Model Name,Racing,Movement Source,Japanese,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,Weight (g),172.00,BARCODE,4549526249358,Guarantee,2 years',
                'stock'=>'95',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'Edifice',
                'model_number'=>'ECB-10DB-1AEF',
                'name'=>'Casio Edifice Chronograph Watch',
                'category'=>'chronograph', 
                'type'=>'Bluetooth', 
                'gender'=>'Mens', 
                'price'=>'179.99',
                'discount'=>'30', 
                'color'=>'black/silver', 
                'description'=>'Part of the Edifice Collection, the Gents Casio Edifice Chronograph Watch delivers strong looks with an array of cool features.

                A watch for the modern age, Bluetooth compatibility means you can connect it up with your smartphone to transfer data at the touch of a button – and if you lose your phone, you can use your Edifice watch to find it with just the press of a button. The powerful stopwatch measures times up to 24 hours, with 1/1000th of a second accuracy, while the 24-hour countdown timer and five daily alarms mean you’ll always be on time, whatever your schedule. The Super-Auto LED Light function lights up the watch with just a flick of the wrist, and it’s also water resistant to 100 metres, so it’s fine to take it for a dip.
                
                The eight-sided bezel and four screws accentuate the industrial chic of the Gents Casio Edifice Chronograph Watch, which features a patterned dial with silver hour marker batons, chronograph dial and analogue-digital display. Tough mineral glass and a stylish metal bracelet complete the package of this hardwearing, on-trend timepiece.
                Water-resistant to 100m, great for swimming and water sports
                Bluetooth compatible, enabling you to upload training data to your smartphone
                Luminous hands and illuminator light up your watch in poor light
                Five alarms, countdown timer, stopwatch and world time functions ', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Bezel Type,Fixed,Case depth approx.,12.50mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,48.50mm,Chronograph,Yes,Clasp type,Deployment,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Hour Markers,Batons,Luminescent hands,Yes,Movement Source,Japanese,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,Weight (g),167.00,BARCODE,4549526252693,Guarantee,2 years',
                'stock'=>'65',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'Edifice',
                'model_number'=>'EFR-570BL-1AVUEF',
                'name'=>' Casio Edifice Collection Mens Chronograph Watch ',
                'category'=>'chronograph', 
                'type'=>'chronograph', 
                'gender'=>'Mens', 
                'price'=>'145.99',
                'discount'=>'25', 
                'color'=>'black/navi',
                'description'=>'Part of the Casio Edifice Collection, the Mens Casio Edifice Chronograph Watch is a luxurious accessory with plenty of cool features to match its obvious style.

                Water resistant to 100 metres, it’ll handle getting wet with ease, while the three-dial chronograph is great for keeping accurate timing. There’s also a stopwatch for timing your workouts, and a date function on the dial, while tough mineral glass keeps everything looking fantastic.
                
                The scratch-resistant numbered bezel surrounds the stylish dark dial, which features chunky hour baton markers and luminous hands for great visibility. The high-quality navy leather band ensures comfort while you’re wearing it. A versatile watch that combines luxe styling and great looks, the Mens Casio Edifice Chronograph Watch is a highly desirable timepiece.
                Water-resistant to 100m, great for swimming and water sports
                Chronograph function for elapsed time measurement, adding functionality
                Leather strap for maximum comfort
                Powered by a quartz watch movement for superb time accuracy', 
                'specification'=>'Brand,Casio,Analogue/Digital,Analogue,Case depth approx.,12.40mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,44.60mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Acrylic,Movement Source,Japan,Movement,Quartz,Strap colour,Navy,Strap Type,Leather strap,Water Resistance,100 metres,Weight (g),84.00,BARCODE,4549526252457,Guarantee,2 years',
                'stock'=>'105',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'Wave Ceptor',
                'model_number'=>'WV-58DU-1AVES',
                'name'=>'Mens Casio Wave Ceptor Alarm Chronograph Radio Controlled Watch',
                'category'=>'Radio Controlled', 
                'type'=>'Alarm Chronograph', 
                'gender'=>'Mens', 
                'price'=>'67.99',
                'discount'=>'25', 
                'color'=>'grey/silver', 
                'description'=>'Casio never disappoint, high end features at budget prices. This Casio wave ceptor is no different, no need to worry about adjusting the time - the wave ceptor technology does it for you. Also includes world time, backlight, countdown timer, chronograph and auto-calendar date. The case is a mix of steel and resin, and water resistant to 50 metres, and fastens on a silver steel bracelet with push button deployment clasp.', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Digital,Backlight,Yes,Case depth approx.,11.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,43.00mm,Chronograph,Yes,Clasp type,Push-button Deployment,Dial Colour,Grey,Multiple Time Zones Display,None,Gender,Gents,Glass,Acrylic,Model Name,Wave Ceptor,Movement Source,Japanese,Movement,Quartz,Radio Controlled,Yes,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,50 metres,Weight (g),88.00,BARCODE,4971850436690,Guarantee,2 years',
                'stock'=>'75',
                'brand_id'=>'16',
            ]
        );
        Product::create(
            [
                'brand'=>'Wave Ceptor',
                'model_number'=>'WVA-M640-1AER',
                'name'=>'Mens Casio Waveceptor Alarm Chronograph Radio Controlled Watch',
                'category'=>'Radio Controlled', 
                'type'=>'Solar Powered', 
                'gender'=>'Mens', 
                'price'=>'134.99',
                'discount'=>'25', 
                'color'=>'black/black', 
                'description'=>'A seamless blend of style and function; the Casio Waveceptor is an ideal everyday watch.

                Notable features of the timepiece include a daily alarm, countdown timer and stopwatch with 1/100th second accuracy; perfect for athletes or those who want to measure time periods with the utmost precision.
                
                A black dial is embellished with white baton indices and hands, encased in a polished stainless steel bezel and paired with a flexible black rubber strap.
                
                Water resistant to 100m, perfect for swimming and snorkelling
                Never need to change the battery with Solar Powered time keeping
                Multiband 6 Radio Control for accurate time keeping
                LED backlight with selectable duration and afterglow for easy reading in any situation
                39mm long lasting and rust resistant stainless steel case ', 
                'specification'=>'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Bezel Type,Fixed,Case depth approx.,12.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,39.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,GMT,Gender,Gents,Glass,Acrylic,Hour Markers,Batons,Luminescent hands,Yes,Model Name,Waveceptor,Movement Source,Japanese,Movement,Tough solar,Radio Controlled,Yes,Stone type,None,Strap colour,Black,Strap Type,Rubber Strap,Water Resistance,100 metres,Weight (g),45.00,BARCODE,4971850924159,Guarantee,2 years',
                'stock'=>'125',
                'brand_id'=>'16',
            ]
        );
            //-here
    }
}
