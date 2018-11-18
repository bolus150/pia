<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $films[] = [
                "title" => 'Zielona mila',
                'director' => 'Frank Darabont',
                'category_id' => 2,
                'avatar' => 'zielona-mila.jpg',
                'year' => 1999,
                'description' => 'Emerytowany strażnik więzienny opowiada przyjaciółce o niezwykłym mężczyźnie, którego skazano na śmierć za zabójstwo dwóch 9-letnich dziewczynek.',
                'price' => 20.99,
            ];

        $films[] = [
                'title' => 'Kogel-mogel',
                'director' => 'Roman Załuski',
                'category_id' => 1,
                'avatar' => 'kogel-mogel.jpg',
                'year' => 1988,
                'description' => 'Dziewczyna ze wsi, Kasia Solska, dostaje się na studia i ucieka z domu do Warszawy, gdzie znajduje pracę jako niania.',
                'price' => 9.99,
            ];
        $films[] = [
                'title' => 'Kler',
                'director' => 'Wojciech Smarzowski',
                'category_id' => 5,
                'avatar' => 'kler.jpg',
                'year' => 2018,
                'description' => 'Życie trzech księży ulega zmianie, kiedy ich drogi krzyżują się ponownie.',
                'price' => 24.99,
            ];
        $films[] = [
                'title' => 'Skazani na Shawshank',
                'director' => 'Frank Darabont',
                'category_id' => 2,
                'avatar' => 'skazani-na-shawshank.jpg',
                'year' => 1994,
                'description' => 'Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.',
                'price' => 29.99,
            ];
        $films[] = [
                'title' => 'Ojciec chrzestny',
                'director' => 'Francis Ford Coppola',
                'category_id' => 2,
                'avatar' => 'ojciec-chrzestny.jpg',
                'year' => 1972,
                'description' => 'Opowieść o nowojorskiej rodzinie mafijnej. Starzejący się Don Corleone pragnie przekazać władzę swojemu synowi.',
                'price' => 23.99,
            ];
        $films[] = [
                'title' => 'Władca Pierścieni: Powrót króla',
                'director' => 'Peter Jackson',
                'category_id' => 4,
                'avatar' => 'wladcap-ierscieni.jpg',
                'year' => 2003,
                'description' => 'Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów.',
                'price' => 9.99,
            ];
        $films[] = [
                'title' => 'Lśnienie',
                'director' => 'Stanley Kubrick',
                'category_id' => 3,
                'avatar' => 'lsnienie.jpg',
                'year' => 1980,
                'description' => 'Jack podejmuje pracę stróża odciętego od świata hotelu Overlook. Wkrótce idylla zamienia się w koszmar. ',
                'price' => 4.99,
            ];
        $films[] = [
                'title' => 'Obecność',
                'director' => 'James Wan',
                'category_id' => 3,
                'avatar' => 'obecnosc.jpg',
                'year' => 2013,
                'description' => 'Słynna para badaczy zjawisk paranormalnych zostaje poproszona o pomoc rodzinie, którą terroryzuje potężny demon.',
                'price' => 4.99,
            ];
        $films[] = [
                'title' => 'Omen',
                'director' => 'Richard Donner',
                'category_id' => 3,
                'avatar' => 'omen.jpg',
                'year' => 1976,
                'description' => 'Dyplomata Robert Thorn w tajemnicy przed swoją żoną adoptuje chłopca, który zastępuje ich zmarłego syna. Po latach okazuje się, iż Damien nie jest zwyczajnym dzieckiem.',
                'price' => 20.99,
            ];
        $films[] = [
                'title' => 'Forrest Gump',
                'director' => 'Robert Zemeckis',
                'category_id' => 1,
                'avatar' => 'forrest-gump.jpg',
                'year' => 1994,
                'description' => 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.',
                'price' => 20.99,
            ];
        $films[] = [
                'title' => 'Nietykalni',
                'director' => 'Olivier Nakache',
                'category_id' => 1,
                'avatar' => 'nietykalni.jpg',
                'year' => 2011,
                'description' => 'Sparaliżowany milioner zatrudnia do opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia.',
                'price' => 5.99,
            ];
        $films[] = [
                'title' => 'Cudowny chłopak',
                'director' => 'Robert Zemeckis',
                'category_id' => 1,
                'avatar' => 'cudowny-chlopak.jpg',
                'year' => 2017,
                'description' => 'Auggie od urodzenia ma zdeformowaną twarz. W nowej szkole chłopiec chce udowodnić rówieśnikom, że piękno to więcej niż wygląd.',
                'price' => 4.99,
            ];
        $films[] = [
                'title' => 'Jak rozpętałem drugą wojnę światową',
                'director' => 'Tadeusz Chmielewski',
                'category_id' => 1,
                'avatar' => 'jak-rozpetalem-druga-wojne-swiatowa.jpg',
                'year' => 1969,
                'description' => 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.',
                'price' => 23.99,
            ];
        $films[] = [
                'title' => 'Chłopaki nie płaczą',
                'director' => 'Olaf Lubaszenko',
                'category_id' => 1,
                'avatar' => 'chlopaki-nie-placza.jpg',
                'year' => 1994,
                'description' => 'Kuba, młody skrzypek, trafia w sam środek gangsterskich porachunków.',
                'price' => 20.99,
            ];
        $films[] = [
                'title' => 'Seksmisja',
                'director' => 'Juliusz Machulski',
                'category_id' => 1,
                'avatar' => 'seksmisja.jpg',
                'year' => 1983,
                'description' => 'Rok 2044, zostają odhibernowani dwaj ostatni przedstawiciele płci męskiej. Władza jest w rękach Ligi Kobiet, która nie zamierza z niej zrezygnować.',
                'price' => 10.99,
            ];
        $films[] = [
                'title' => 'Dzień świra',
                'director' => 'Marek Koterski',
                'category_id' => 1,
                'avatar' => 'dzien-swira.jpg',
                'year' => 2002,
                'description' => 'Adaś Miauczyński, 49-letni rozwiedziony polonista, żyje w kręgu swoich natręctw, nie potrafiąc wyrwać się z nudy i rutyny dnia codziennego.',
                'price' => 10.99,
            ];

        foreach ($films as $film) {
            DB::table('films')->insert([
                'category_id'   => $film['category_id'],
                'director'      => $film['director'],
                'title'         => $film['title'],
                'avatar'        => $film['avatar'],
                'year'          => $film['year'],
                'description'   => $film['description'],
                'price'         => $film['price']
            ]);
        }
    }
}
