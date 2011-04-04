-- Tytu³ ; Biblioteczka MAK - System zarz¹dzania - Biblioteka
-- Opis; Tabele bazy danych biblioteki
-- Autor ; Mariusz P., Agnieszka S., Krzysztof P.

-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 20 Mar 2011, 18:40
-- Wersja serwera: 5.0.91
-- Wersja PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `czytelnik`
--

CREATE TABLE IF NOT EXISTS `czytelnik` (
  `id_czytelnik` int(6) NOT NULL auto_increment,
  `imie` varchar(50) default NULL,
  `nazwisko` varchar(50) default NULL,
  `kod_pocztowy` varchar(50) default NULL,
  `miasto` varchar(50) default NULL,
  `adres` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  PRIMARY KEY  (`id_czytelnik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin2 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `ksiazka`
--

CREATE TABLE IF NOT EXISTS `ksiazka` (
  `id_ksiazka` int(6) NOT NULL auto_increment,
  `tytul` varchar(300) default NULL,
  `autor` varchar(300) default NULL,
  `isbn` decimal(6,0) default NULL,
  `rok_wydania` varchar(10) default NULL,
  `wydanie` decimal(2,0) default NULL,
  `ilosc` decimal(2,0) default NULL,
  PRIMARY KEY  (`id_ksiazka`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin2 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_login` varchar(30) default NULL,
  `user_haslo` varchar(30) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wypozyczenie`
--

CREATE TABLE IF NOT EXISTS `wypozyczenie` (
  `id_wypozyczenie` int(6) NOT NULL auto_increment,
  `data_wyp` date default NULL,
  `id_czytelnik` decimal(6,0) default NULL,
  `id_ksiazka` decimal(6,0) default NULL,
  PRIMARY KEY  (`id_wypozyczenie`),
  KEY `id_czytelnik` (`id_czytelnik`),
  KEY `id_ksiazka` (`id_ksiazka`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;


