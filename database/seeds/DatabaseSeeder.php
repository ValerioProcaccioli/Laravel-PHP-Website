<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['catId' => 1, 'name' => 'Computer', 'parId' => 0],
            ['catId' => 2, 'name' => 'Periferiche', 'parId' => 0],
            ['catId' => 3, 'name' => 'Desktop', 'parId' => 1],
            ['catId' => 4, 'name' => 'Laptop', 'parId' => 1],
            ['catId' => 5, 'name' => 'NetBook', 'parId' => 1],
            ['catId' => 6, 'name' => 'HardDisk', 'parId' => 2],
        ]);

        DB::table('product')->insert([
            ['name' => 'Acer Swift 3',
                'catId' => 5,
                'descShort' => 'Intel Core i5-10210U, 8 GB DDR4, 512GB PCIe NVMe SSD, Display 14" FHD IPS LED LCD, Scheda Grafica Intel UHD, Windows 10 Home, Silver',
                'descLong' => 'Design snello e Intelligente per un laptop dalla spiccata eleganza, con forme lussuosamente sottili e una moderna cornice in metallo: l\'elegante corpo interamente in alluminio risulta freddo al tatto e conferisce al laptop un tocco di personalità. Design Sottile ed elegante per affermare la tua indipendenza e il tuo stile. Lo schermo incredibilmente ampio, i colori nitidi e realistici rivivono con una risoluzione Full HD 1080p, mentre la lettura delle impronte digitali attraverso Windows Hello permette l\'accesso senza password per sbloccare nel modo più rapido e sicuro i tuoi dispositivi Windows, le app e i siti Web.',
                'price' => 699.00,
                'discountPerc' => 7,
                'discounted' => 1,
                'image' => 'Acer3.jpg'],
            ['name' => 'HUAWEI MateBook D 14"',
                'catId' => 4,
                'descShort' => 'Processore AMD Ryzen 5, 8 GB RAM, 512 GB SSD, Schermo FullView 1080P FHD, Sensore Impronte Digitali, Windows 10 Home',
                'descLong' => 'Con una potente architettura di sistema e capacità di software, il laptop offre lo schermo più grande e il peso più leggero possibile per un laptop delle sue dimensioni; 
                    con uno spessore di 15,9 mm e un peso di 1,38 kg, il MateBook si distingue dagli altri laptop con uno schermo da 14 pollici
                    La collaborazione multi-schermo facilità l\'interazione tra smartphone e il nuovo MateBook D 14, permettendoti di proiettare il tuo telefono sul laptop',
                'price' => 699.00,
                'discountPerc' => 10,
                'discounted' => 1,
                'image' => 'huaweii.jpg'],
            ['name' => 'HP Pavilion 14',
                'catId' => 4,
                'descShort' => 'Caratteristiche Desktop1',
                'descLong' => 'Processore Intel Core i5-1035G1 di 10th generazione. Vivi il gioco e l\'intrattenimento, visualizza contenuti in streaming e libera la tua creatività con prestazioni avanzate
                    Storage SSD PCIe Lo storage flash basato su PCIe, disponibile in varie capacità fino a 512 GB, è fino a 17 volte più veloce di una tradizionale unità HDD per laptop a 5400 rpm
                    Anche se esposto alla luce diretta del sole, puoi goderti al meglio i contenuti preferiti. La speciale superficie riduce il riflesso dei raggi solari sul display quando ci si trova all’aria aperta.',
                'price' => 689.99,
                'discountPerc' => 9,
                'discounted' => 1,
                'image' => 'hppavillion.jpg'],
            ['name' => 'Desktop Hp MTower', 
                'catId' => 3,
                'descShort' => 'Cpu Intel Core I7 Quad Core Fino a 4,2GHz in burst Mode, SSD da 250Gb + HDD 1TB, 8 Gb DDR 4',
                'descLong' => ' Pronto all\'utilizzo immediato non necessita di nessuna configurazione iniziale, il test ed i driver aggiornati vengono verificati ed installati presso il nostro laboratorio specializzato'
                . ' dai nostri tecnici per garantire un alto standard di affidabilità e qualita\' del prodotto, Antivirus e Suite Libre Office in dotazione con cpu intel i7 4 core fino a 4,2GHz in Burst Mode,'
                . ' 8gb ddr 4 di Ram 1 disco SSD da 250 di sistema ed 1 disco da 1tb per archiviazione dati ,doppia uscita video vga e hdmi , scheda Lan da 1gigabit , 8 usb di cui 2 frontali 1 input microfono e cuffie e lettore masterizzatore Dvd cd in dotazione tastiera e mouse usb',
                'price' => 68.77, 
                'discountPerc' => 1,
                'discounted' => 0, 
                'image' => 'hptower.jpg'],
            ['name' => 'Seagate BarraCuda', 
                'catId' => 6,
                'descShort' => '3.5 pollici SATA 6 Gbit/s 7200 rpm, 64 MB di cache, 1 Tb', 
                'descLong' => 'È possibile memorizzare più contenuti ed elaborarli e in sicurezza grazie all\'affidabilità delle unità disco interne BarraCuda 35. Con la capacità di 1TB, l’unità BarraCuda 35 è la soluzione
                    ottima per affrontare grandi progetti grazie alla velocità di 7.200 giri/min e alla tecnologia di caching ottimizzato di lettura/scrittura',
                'price' => 41.25,
                'discountPerc' => 12, 
                'discounted' => 0, 
                'image' => 'seagate.jpg'],
            ['name' => 'One Netbook One Mix 3 Pro YOGA', 
                'catId' => 5,
                'descShort' => 'Intel 10th Generation i5, HD Graphics, 16GB RAM, 512GB SSD, 8.4" Touchscreen, 8600mAh Battery',
                'descLong' => '',
                'price' => 1097.53, 
                'discountPerc' => 17,
                'discounted' => 1, 
                'image' => 'netbook.jpg'],
            ['name' => 'ASUS A509JB-EJ098T', 
                'catId' => 4,
                'descShort' => 'Notebook con Monitor 15,6" FHD Anti-Glare, Intel Core i7-1065G7, RAM 8GB DDR4, Grafica NVIDIA GeForce MX110, 512GB SSD PCIE',
                'descLong' => 'Adatto sia per lavorare sia per giocare, asus a509jb è il notebook che offre prestazioni potenti grazie al processore intel core i7 di ultima generazione e la scheda nvidia geforce mx110 dedicata. Il display nanoedge vanta ampi angoli di visione di 178° e un rivestimento antiriflesso opaco per un\'esperienza davvero coinvolgente.',
                'price' => 849.00,
                'discountPerc' => 5, 
                'discounted' => 1, 
                'image' => 'asus.jpg'],
            ['name' => 'DELL XPS 15', 
                'catId' => 5,
                'descShort' => 'Display 15.6 FHD, Processore Intel Core i7-8750H, Memoria RAM da 16 GB, 512 GB SSD, NVIDIA GeForce GTX 1050 Ti',
                'descLong' => 'Caratteristiche principali. Tipo processore: Core i7 Sistema operativo: Windows 10 Pro Memoria RAM: 16 GB Scheda grafica dedicata: Nvidia GeForce GTX 1050 Tipologia hard disk: SSD Modello processore: i7-8750H Interazione intuitiva. Toccare, ingrandire e fare clic con facilità: il touchpad di precisione rende fluidi gli spostamenti del cursore, mentre la funzionalità di prevenzione dall’attivazione accidentale impedisce i clic involontari quando il palmo della mano tocca inavvertitamente il touchpad. Windows Hello: grazie al lettore di impronte digitali opzionale offre l’accesso senza password, che è integrato nel pulsante di alimentazione per offrirti il modo più veloce e sicuro per sbloccare il notebook. Attraverso il tocco, il sistema ti distingue da qualsiasi altro utente. Ti accoglie con un saluto e funziona anche su app e siti Web Microsoft Edge.',
                'price' => 2269.00, 
                'discountPerc' => 5,
                'discounted' => 0, 
                'image' => 'dell.jpg']
        ]);
        
        DB::table('users')->insert([
            ['name' => 'user', 'surname' => 'user', 'email' => 'user@user.user', 'username' => 'useruser',
                'password' => Hash::make('useruser'), 'type' => 'user'  , 'genere' => 'man' , 'residence' => 'via esempio', 'province'=> 'MC', 'employment' =>'lavoro'],
            ['name' => 'staff', 'surename' => 'staff', 'email' => 'staff@staff.staff', 'username' => 'staffstaff',
                'password' => Hash::make('staffstaff'), 'type' => 'staff' , 'genere' => 'man' , 'residence' => 'via prova', 'province'=> 'AN', 'employment' =>'lavoro'],
            ['name' => 'admin', 'surname' => 'admin', 'email' => 'admin@admin.admin', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'type' => 'admin' , 'genere' => 'woman' , 'residence' => 'via via', 'province'=> 'AP', 'employment' =>'lavoro']
        ]);
    }
    }

