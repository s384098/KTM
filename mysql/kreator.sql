-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 14 Kwi 2013, 20:45
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `kreator`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzialy`
--

CREATE TABLE IF NOT EXISTS `dzialy` (
  `iddzialu` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_dzialu` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`iddzialu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `dzialy`
--

INSERT INTO `dzialy` (`iddzialu`, `nazwa_dzialu`) VALUES
(1, 'Działania na liczbach'),
(2, 'Wyrażenia algebraiczne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dziennik`
--

CREATE TABLE IF NOT EXISTS `dziennik` (
  `iducznia` int(11) NOT NULL AUTO_INCREMENT,
  `idtestu` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `wynik` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwa_uzytkownika` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`iducznia`),
  KEY `idtestu` (`idtestu`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE IF NOT EXISTS `pytania` (
  `idpytania` int(11) NOT NULL AUTO_INCREMENT,
  `iddzialu` int(11) DEFAULT NULL,
  `pytanie` text COLLATE utf8_polish_ci,
  `odp1` text COLLATE utf8_polish_ci,
  `odp2` text COLLATE utf8_polish_ci,
  `odp3` text COLLATE utf8_polish_ci,
  `odp4` text COLLATE utf8_polish_ci,
  `prawidlowa` varchar(3) COLLATE utf8_polish_ci DEFAULT NULL,
  `komentarz` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`idpytania`),
  KEY `iddzialu` (`iddzialu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=13 ;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`idpytania`, `iddzialu`, `pytanie`, `odp1`, `odp2`, `odp3`, `odp4`, `prawidlowa`, `komentarz`) VALUES
(1, 1, 'treść bla bla bla $ \\sqrt[4]{2} $ dalsza czesc zadania.', '12', '23', '34', '12', '1', NULL),
(2, 1, 'dfgd khjkgh jgh j hgjk ', '345', '4', '34', '5', '1', ' fdg df gdf df '),
(3, 1, 'pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker', 'w', 'aw', 'r', 'eqeqeqe', '1', ''),
(4, 1, 'nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letra', 'w', 'aw', 'r', 'eqeqeqe', '1', ''),
(5, 2, 'nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letra', 'w', 'aw', 'r', 'eqeqeqe', '1', ''),
(6, 2, 'cnych stron używania Lorem Ipsum jest to, że ma wiele różnych „kombinacji” zdań, słów i akapitów, w przeciwieństwie do zwykłego: „tekst, tekst, tekst”, sprawiającego, że wygląda to „zbyt czytelnie” po polsku. Wielu webmasterów i designerów używa Lorem Ipsum jako domyślnego modelu tekstu i wpisanie w internetowej wyszukiwarce ‘lorem ipsum’ spowoduje znalezienie bardzo wielu stron, które wciąż są w budowie. Wiele wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).\r\n ', 'w', 'aw', 'r', 'eqeqeqe', '1', ''),
(7, 1, 'W poprzedniej poradzie dodaliśmy dane do przykładowej tabeli. Teraz wyświetlimy te dane na stronie.\r\n\r\nSposób I - wynik zwrócony w postaci tablicy asocjacyjnej.\r\n', 'qwe', 'qwe', '233', '3', '1', ''),
(8, 1, 'dfghd fhfdgh dfg hdf gfg fg fg  \r\n\r\nLogin: nauczyciel01\r\n\r\nImie: Piotr\r\n\r\nNazwisko: Nowak\r\n\r\nSzkoła: ZSK w Poznaniu\r\n\r\n', 'qwew', 'qwe', '233', '3', '1', ''),
(9, 2, '﻿\r\nSTRONA GŁÓWNA\r\n\r\nFunkcje systemu:\r\nZawiera gotową bazę zadań oraz umożliwia dodawanie własnych pytań oraz ich edycje,\r\nWyniki zdobyte przez uczniów rozwiązujących testy online zapisywane są w dzienniku nauczyciela,\r\nPozwala na udostępnianie treści lekcji (wraz z załącznikami multimedialnymi) dla uczniów,\r\nDrukowanie klucza z odpowiedziami,\r\nGenerowane testy z podziałem na grupy.\r\n\r\nZ założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.\r\n\r\n\r\n', 'qwew', 'qwe', '233', '3', '1', ''),
(10, 1, 'Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.', 'a', 'w', 'e', 'f', '1', ''),
(11, 2, 'Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator. Z założenia aplikacja będzie intuicyjna oraz prosta w obsłudze. Konta dla na nauczycieli przydzielać będzie administrator.', 'a', 'w', 'e', 'f', '1', ''),
(12, 1, 'prawidlowaprawidlowaprawidlow aprawidlowaprawidlowaprawidlowaprawidlowa prawidlowaprawidlowaprawidlowa', '', '', '', '', 'A', 'dfgbxcvbrtetyrtiruy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testy`
--

CREATE TABLE IF NOT EXISTS `testy` (
  `idtestu` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_polish_ci,
  `nr_pytan` text COLLATE utf8_polish_ci,
  `grupy` int(11) DEFAULT NULL,
  `idnauczyciela` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtestu`),
  KEY `idnauczyciela` (`idnauczyciela`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=24 ;

--
-- Zrzut danych tabeli `testy`
--

INSERT INTO `testy` (`idtestu`, `nazwa`, `nr_pytan`, `grupy`, `idnauczyciela`) VALUES
(1, 'Testowy egzamin', '[{"id":"a"},{"id":"b"},{"id":5},{"id":4},{"id":2},{"id":1},{"id":3},{"id":6}]', 1, 1),
(2, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":5},{"id":3},{"id":6},{"id":1},{"id":4}]', 2, 1),
(3, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":5},{"id":3},{"id":6},{"id":1},{"id":4}]', 2, 1),
(4, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":5},{"id":3},{"id":6},{"id":1},{"id":4}]', 2, 1),
(5, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":5},{"id":3},{"id":6},{"id":1},{"id":4}]', 2, 1),
(6, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":6},{"id":5},{"id":4},{"id":3},{"id":1}]', 2, 1),
(7, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":6},{"id":5},{"id":4},{"id":3},{"id":1}]', 2, 1),
(8, 'test2', '[{"id":"a"},{"id":"b"},{"id":2},{"id":6},{"id":5},{"id":4},{"id":3},{"id":1}]', 2, 1),
(9, 'test', '[{"id":"a"},{"id":"b"},{"id":2},{"id":6},{"id":5},{"id":4},{"id":3},{"id":1}]', 1, 1),
(10, 'To jest nazwa testu', '[{"id":"a"},{"id":"b"},{"id":3},{"id":4}]', 1, 1),
(11, 'asdaw3eqwe', '[{"id":"a"},{"id":"b"},{"id":2},{"id":3}]', 3, 1),
(12, 'ertr df g dg', '[{"id":"a"},{"id":"b"},{"id":1},{"id":5},{"id":4},{"id":6},{"id":3},{"id":2}]', 1, 1),
(13, '7uiui7iu7', '[{"id":"a"},{"id":1},{"id":2},{"id":6},{"id":4},{"id":5},{"id":3}]', 1, 1),
(14, 'Dupa wolowa', '[{"id":"a"},{"id":"b"},{"id":1},{"id":4},{"id":6},{"id":3},{"id":5},{"id":2}]', 1, 1),
(15, 'jhghjguygo', '[{"id":"a"},{"id":"b"}]', 1, 1),
(16, 'jhghjguygo', '[{"id":"a"},{"id":"b"},{"id":2},{"id":6},{"id":5},{"id":4},{"id":3},{"id":1}]', 1, 1),
(17, 'tryrtu56784678', '[{"id":"a"},{"id":"b"},{"id":1},{"id":8},{"id":7},{"id":4},{"id":3},{"id":2},{"id":5},{"id":9},{"id":6}]', 1, 1),
(18, 'ertertertertert', '[{"id":"a"},{"id":"b"},{"id":9},{"id":6},{"id":5},{"id":10},{"id":8},{"id":7},{"id":4},{"id":3},{"id":2},{"id":1},{"id":11}]', 1, 1),
(19, 'jytty', '[{"id":"a"},{"id":"b"},{"id":1},{"id":5},{"id":11},{"id":9},{"id":6},{"id":10},{"id":7},{"id":8},{"id":4},{"id":3},{"id":2}]', 1, 1),
(20, 'gfhrgttsrwt', '[{"id":"a"},{"id":"b"},{"id":2},{"id":5},{"id":11},{"id":9},{"id":6},{"id":10},{"id":7},{"id":8},{"id":4},{"id":3},{"id":1}]', 1, 1),
(21, 'rtyetyy', '[{"id":"a"},{"id":"b"},{"id":2},{"id":5},{"id":11},{"id":9},{"id":6},{"id":12},{"id":8},{"id":10},{"id":7},{"id":4},{"id":3},{"id":1}]', 1, 1),
(22, 'fghfghfgfghfghfg', '[{"id":"a"},{"id":"b"}]', 1, 1),
(23, 'fghfghfgfghfghfg', '[{"id":"a"},{"id":"b"},{"id":1},{"id":12},{"id":9},{"id":11},{"id":6},{"id":5},{"id":7},{"id":10},{"id":2},{"id":8},{"id":4},{"id":3}]', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwa_szkoly` text COLLATE utf8_polish_ci,
  `login` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `haslo` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`iduser`, `imie`, `nazwisko`, `nazwa_szkoly`, `login`, `haslo`, `email`) VALUES
(1, 'Robert', 'Piątek', 'ZSK w Poznaniu', 'Bob', 'test123', 'bob@wp.pl');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dziennik`
--
ALTER TABLE `dziennik`
  ADD CONSTRAINT `dziennik_ibfk_1` FOREIGN KEY (`idtestu`) REFERENCES `testy` (`idtestu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dziennik_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `uzytkownicy` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dziennik_ibfk_3` FOREIGN KEY (`idtestu`) REFERENCES `testy` (`idtestu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dziennik_ibfk_4` FOREIGN KEY (`iduser`) REFERENCES `uzytkownicy` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD CONSTRAINT `pytania_ibfk_1` FOREIGN KEY (`iddzialu`) REFERENCES `dzialy` (`iddzialu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `testy`
--
ALTER TABLE `testy`
  ADD CONSTRAINT `testy_ibfk_1` FOREIGN KEY (`idnauczyciela`) REFERENCES `uzytkownicy` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testy_ibfk_2` FOREIGN KEY (`idnauczyciela`) REFERENCES `uzytkownicy` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
