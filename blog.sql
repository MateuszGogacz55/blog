-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Gru 2019, 20:06
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `ID_ART` bigint(20) UNSIGNED NOT NULL,
  `ID_USER_ART` int(3) NOT NULL,
  `TITLE_ART` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `TEXT_ART` text COLLATE utf8_polish_ci NOT NULL,
  `DATE_ART` date NOT NULL,
  `ID_SUB_ART` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`ID_ART`, `ID_USER_ART`, `TITLE_ART`, `TEXT_ART`, `DATE_ART`, `ID_SUB_ART`) VALUES
(16, 3, 'GRUPA SKROJONA NA NASZĄ MIARĘ', 'Wyniki losowania grup finałów mistrzostw Europy nie są najgorsze. Nie trafiliśmy do grupy śmierci, ale też nie jest ona najłatwiejsza. Została niejako odpowiednio skrojona do potencjału naszej drużyny – pisze w swoim felietonie Kamil Kosowski.\r\nczywiście nie mieliśmy takiego szczęścia, jak w eliminacjach, tyle że pewnie już nigdy nie znajdziemy się w równie łatwej grupie. Bez problemu skończyliśmy zmagania na pierwszym miejscu, nawet przy momentami słabej grze. Nie jest powiedziane, że teraz znów tak nie będzie, ale limit szczęścia musi się wyczerpać.\r\n\r\nLosowanie za nami, ale ciągle czekamy na czwarty zespół w naszej grupie, z którym zagramy najważniejszy, bo pierwszy mecz. Jeśli go wygramy, to awansujemy do 1/8 finału, co oczywiście będzie dopiero początkiem zabawy. Kto zostanie tą czwartą ekipą w naszej grupie? Życzyłbym sobie Irlandii Północnej lub Słowacji. Obawiam się jednak, że będzie to Irlandia lub Bośnia i Hercegowina. Słabszym rywalem wydaje się ta pierwsza drużyna. Występują w niej silni fizycznie piłkarze, ale łatwiej byłoby ich oszukać, jak w poprzednich eliminacjach, bo – nikogo nie urażając – to trochę kwadratowa drużyna. Sprytem i umiejętnościami da się ją pokonać. Z Bośnią byłoby trudniej, występują tam bardzo dobrze wyszkoleni zawodnicy.\r\n\r\nTo jednak nic w porównaniu z następnym rywalem, czyli Hiszpanią. Szczerze mówiąc, nie sądzę, byśmy mieli sposób na ten zespół. To drużyna, która zachowuje chłodną głowę i jeśli da się „wycisnąć” rywala, to tak zrobi i będzie mu strzelać kolejne gole. Nie uciekniemy przed jej umiejętnościami. Nie mówię, że musimy przegrać, ale Hiszpanie są zdecydowanymi faworytami.\r\n\r\nW spotkaniu przeciwko nim zagramy pewnie ustawieni niżej i spróbujemy nastawić się na kontry. Jeśli chcielibyśmy grać otwarcie, to źle na tym wyjdziemy. Oczywiście nawet postawienie na defensywę nie musi wystarczyć, bo niestety może skończyć się jak konfrontacja z ich młodzieżówką. Musimy jednak wyjść i walczyć.\r\n\r\nREKLAMA\r\nZ Hiszpanami nigdy nam nie szło, wystarczy przypomnieć choćby porażkę 0:6 przed mundialem w 2010 roku. A przecież to był mecz towarzyski. Strach pomyśleć, jak spisaliby się, gdyby byli „na musiku.” Jak są wtedy groźni, pokazali podczas mistrzostw Europy do lat 21.\r\n\r\nNie szło nam też ze Szwecją, o czym sam się przekonałem. Przeciw Hiszpanii nie grałem, za to z tym skandynawskim rywalem mierzyłem się kilkakrotnie. I za każdym razem zbieraliśmy w trąbę. Dlatego nie ukrywam, że nie mam miłych wspomnień z tych spotkań. Najmocniej w głowie utkwiło mi wyjazdowe starcie w eliminacjach mistrzostw Europy. Tak się złożyło, że prawie połowę pierwszej jedenastki stanowili wtedy koledzy z Wisły. Niestety Szwedzi grali dla nas zbyt intensywnie. Zjedli nas i przerośli. Przegraliśmy wtedy 0:3. Ale to nie przypadek. Styl skandynawski nam po prostu nie leży. Pamiętam też, jak od Danii przyjęliśmy 0:5 w towarzyskim spotkaniu w 2004 roku. Zwycięskie boje z Norwegią ze trenera Engela były chwalebnym ewenementem w naszej rywalizacji z piłkarzami z północy. Oczywiście sformułowanie „skandynawski styl” jest pewnym uproszczeniem, bo Szwedzi występują w wielu ligach, więc przywykli do różnych sposobów gry.\r\nTeraz też to właśnie tego zespołu najbardziej się obawiam. Hiszpanie są fantastyczni, ale przynajmniej wiadomo, czego się spodziewać. A Szwedzi są bardziej nieobliczalni. Grają twardo. Nie biorą jeńców. Poza tym Hiszpanie mają większe indywidualności, ale Skandynawowie są lepsi jako kolektyw.\r\n\r\nAnalizowałem ich skład i nie ma tam wielkich gwiazd. Na pierwszy rzut oka wyróżnia się obrońca Victor Lindelöf z Manchesteru United, ale w tym sezonie nie mogę powiedzieć, że jego drużyna nas oczarowuje. Defensywa też spisuje się niespecjalnie dobrze. Trzeba życzyć cierpliwości ich kibicom, bo nie wygląda na to, by się to zmieniło. Ale siły Szwedów nie stanowią nazwiska. Są mocni fizycznie\r\n\r\ni groźni przy stałych fragmentach gry. Trzeba będzie nad nimi bardzo dużo pracować. Ważne, aby Kamil Glik był zdrowy, a Jan Bednarek grał w klubie. O bramkarzach nie wspominam, bo jestem o nich spokojny.\r\n\r\nSzwecja mimo wszystko nie jest zespołem nie do pokonania. Ale jakby zapytać tamtejszych kibiców o naszą ekipę, to by pewnie powiedzieli, że Polska ma dobry zespół z Robertem Lewandowskim na czele, jednak jesteśmy w ich zasięgu. Dlatego apeluję, by przed mistrzostwami nie przesadzać z optymizmem.\r\n\r\nTeraz przed nami mecze towarzyskie, w których nasz zespół zmierzy się z Turcją, Ukrainą i Rosją. Sparingpartnerów dobiera się pod kątem przeciwników, z którymi gramy. To są zespoły, które mogą sprawić nam kłopot. Swoim charakterem i wybieganiem mają przygotować nas do mistrzostw. Na pewno mamy jeszcze wiele do poprawy. Były spotkania, gdy słabo się oglądało naszą drużynę. Z drugiej strony w końcówce eliminacji graliśmy skutecznie i potrafiliśmy strzelać gole. Problemem jest na pewno dość wąska kadra. Może na jednej czy dwóch pozycjach można zastąpić podstawowych piłkarzy. Z drugiej strony ostatnio Robert Lewandowski starcie z Izraelem zaczął na ławce rezerwowych i zespół bardzo mi się podobał.\r\n\r\n', '2019-12-03', 1),
(17, 3, 'Złota Piłka', 'Ranking 30 najlepszych piłkarzy na świecie w 2019 r.\r\n1. Leo Messi (Hiszpania / FC Barcelona)\r\n2. Virgil van Dijk (Holandia / Liverpool FC)\r\n3. Cristiano Ronaldo (Portugalia / Juventus FC)\r\n4. Sadio Mane (Senegal / Liverpool FC)\r\n5. Mohamed Salah (Egipt / Liverpool FC)\r\n6. Kylian Mbappe (Francja / PSG)\r\n7. Alisson Becker (Brazylia / Liverpool FC)\r\n8. Robert Lewandowski (Polska / Bayern Monachium)\r\n9. Bernardo Silva (Portugalia / Manchester City)\r\n10. Riyad Mahrez (Algieria / Manchester City)\r\n11. Frenkie de Jong (Holandia / Ajax Amsterdam, FC Barcelona)\r\n12. Raheem Sterling (Anglia / Manchester City)\r\n13. Eden Hazard (Belgia / Chelsea, Real Madryt)\r\n14. Kevin de Bruyne (Belgia / Manchester City)\r\n15. Matthijs de Ligt (Holandia / Ajax Amsterdam, Juventus FC)\r\n16. Sergio Aguero (Argentyna / Manchester City)\r\n17. Roberto Firmino (Brazylia / Liverpool FC)\r\n18. Antoine Griezmann (Francja / FC Barcelona)\r\n19. Trent Alexander-Arnold (Anglia / Liverpool FC)\r\n20. Dusan Tadić (Serbia / Ajax Amsterdam)\r\n. Pierre-Emerick Aubameyang (Gabon / Arsenal FC)\r\n22. Heung-min Son (Korea Pd. / Tottenham)\r\n23. Hugo Lloris (Francja / Tottenham)\r\n24. Kalidou Koulibaly (Senegal / Napoli)\r\n. Marc-Andre ter Stegen (Niemcy / FC Barcelona)\r\n26. Karim Benzema (Francja / Real Madryt)\r\n. Georginio Wijnaldum (Holandia / Liverpool FC)\r\n28. Joao Felix (Portugalia / Benfica, Atletico Madryt)\r\n. Marquinhos (Brazylia / PSG)\r\n. Donny van de Beek (Holandia / Ajax Amsterdam)\r\n\r\nPodczas gali rozdano także inne nagrody. Matthijs de Ligt został najlepszym młodym piłkarzem. Nagrodę im. Lwa Jaszyna, dla najlepszego bramkarza, odebrał natomiast Alisson Becker.\r\n\r\nNajlepszą piłkarką świata została natomiast Megan Rapinoe – reprezentantka USA.\r\n', '2019-12-03', 1),
(18, 3, 'Liga Mistrzów. Tabela, terminarz, program', 'Jastrzębski Węgiel to trzecia siła sezonu 2018/2019 w PlusLidze. Zespół z Jastrzębia-Zdroju zagra w Lidze Mistrzów w grupie C, a rywalami tego zespołu będą Zenit Kazań, Greenyard Maaseik oraz Halkbank Ankara. Od starcia z tą ostatnią ekipą swoje zmagania rozpoczną w LM jastrzębianie. Będzie to mecz w ramach 2. kolejki - 10 grudnia, bowiem zaplanowane pierwsze starcie w Lidze Mistrzów z Zenitem w Kazaniu zostało przełożone na 18 stycznia z powodu udziału rosyjskiej ekipy w Klubowych Mistrzostwach Świata.\r\n\r\nW grupie D zagra VERVA Warszawa ORLEN Paliwa. Przeciwnikami wicemistrzów Polski będą następujące drużyny: Tours VB, Sir Safety Conad Perugia i Benfica Lizbona. Drużyna z Warszawy w pierwszej kolejce zmierzy się u siebie w środę 4 grudnia z ekipą Tours. Początek tego spotkania o godzinie 19:00.\r\n\r\nMistrzowie Polski, czyli Grupa Azoty ZAKSA Kędzierzyn-Koźle rywalizować będą w grupie E. Przeciwnikami drużyny prowadzonej przez Nikolę Grbicia będą: VfB Friedrichshafen, Knack Roeselare oraz Vojvodina Nowy Sad. Z tą ostatnią ekipą kędzierzynianie zagrają w premierowej kolejce we wtorek 3 grudnia, o godzinie 18:00.', '2019-12-03', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `ID_COM` bigint(20) UNSIGNED NOT NULL,
  `ID_ART_COM` int(3) NOT NULL,
  `ID_USER_COM` int(3) NOT NULL,
  `TEXT_COM` text COLLATE utf8_polish_ci NOT NULL,
  `DATE_COM` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`ID_COM`, `ID_ART_COM`, `ID_USER_COM`, `TEXT_COM`, `DATE_COM`) VALUES
(1, 13, 4, 'witam was\r\n', '2019-11-29'),
(2, 13, 4, 'co tam u was\r\n', '2019-11-29'),
(3, 17, 6, 'Co!!!! Robert Lewandowski na 8 miejscu xDDD. Beka z tych dziennikarzy co się na piłce nie znają hahahah. Pozdrawiam Cieplutko ', '2019-12-03'),
(4, 18, 3, 'Ua Szykuje się oglądanie ', '2019-12-03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subjects`
--

CREATE TABLE `subjects` (
  `ID_SUB` bigint(20) UNSIGNED NOT NULL,
  `NAME_SUB` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `subjects`
--

INSERT INTO `subjects` (`ID_SUB`, `NAME_SUB`) VALUES
(1, 'Piłka nożna'),
(2, 'Siatkówka'),
(3, 'Koszykówka'),
(4, 'Piłka Ręczna'),
(5, 'Skoki narciarskie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID_USER` bigint(20) UNSIGNED NOT NULL,
  `EMAIL_USER` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `PASS_USER` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `PERMIS_USER` int(1) NOT NULL,
  `FIRST_USER` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `LAST_USER` varchar(40) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID_USER`, `EMAIL_USER`, `PASS_USER`, `PERMIS_USER`, `FIRST_USER`, `LAST_USER`) VALUES
(3, 'admin@db.pl', '$2y$10$e5ny//T623F9Gu1xwBxTZe3q48kHkvoCV3mRA7rtcr9mJOQf6Uhl2', 1, 'Admin', ''),
(4, 'MateuszG51@interia.pl', '$2y$10$BjuJ68dDMglnoy6JD5OUmeaQD9Bxr5pEPHvGiaOpBAt29X0P9KZwS', 2, 'Mateusz', 'Gogacz'),
(6, 'FrankR@pl.pl', '$2y$10$9P9iErGCf9v0XYF0yhU0reuAf8FDFox8frT2hKaOEyg4/mx.wa7Y6', 0, 'Frank', 'Ribery');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID_ART`),
  ADD UNIQUE KEY `ID_ART` (`ID_ART`);

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID_COM`),
  ADD UNIQUE KEY `ID_COM` (`ID_COM`);

--
-- Indeksy dla tabeli `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`ID_SUB`),
  ADD UNIQUE KEY `ID_SUB` (`ID_SUB`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `ID_USER` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_ART` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `ID_COM` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `subjects`
--
ALTER TABLE `subjects`
  MODIFY `ID_SUB` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
