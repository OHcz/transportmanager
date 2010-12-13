-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Poƒç√≠taƒç: localhost
-- Vygenerov√°no: Nedƒõle 12. prosince 2010, 12:26
-- Verze MySQL: 5.1.41
-- Verze PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datab√°ze: `transportmanager`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `cesty`
--

CREATE TABLE IF NOT EXISTS `cesty` (
  `id` int(11) NOT NULL,
  `id_stanice` int(11) DEFAULT NULL,
  `id_dalsi` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='Tree behavior';

--
-- Vypisuji data pro tabulku `cesty`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `hnacivozidlo`
--

CREATE TABLE IF NOT EXISTS `hnacivozidlo` (
  `id` int(11) NOT NULL,
  `brzda_parkovaci_druh` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `brzda_primocara_druh` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `brzda_rucni_druh` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `brzda_tahova_druh` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `brzdici_vaha` int(11) DEFAULT NULL,
  `cislo_prukazu_zpusobnosti` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `delka_pres_narazniky` int(11) DEFAULT NULL,
  `dvojkoli_revize` int(11) DEFAULT NULL,
  `dvojkoli_velikost` int(11) DEFAULT NULL,
  `dvojkoli_vyrobce` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `hmotnost` int(11) DEFAULT NULL,
  `inventarni_cislo` int(11) DEFAULT NULL,
  `klimatizace` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `km_revize_celkova` int(11) DEFAULT NULL,
  `km_revize_dvojkoli` int(11) DEFAULT NULL,
  `km_revize_provozni` int(11) DEFAULT NULL,
  `komunikacni_zarizeni` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `maximalni_rychlost` int(11) DEFAULT NULL,
  `motor_typ` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `oprava_napln` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `oprava_probihajici` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `oznaceni` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `provozni_cislo` int(11) DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL COMMENT '¯ada',
  `rok_vyroby` int(11) DEFAULT NULL,
  `rychlomer_cislo` int(11) DEFAULT NULL,
  `rychlomer_typ` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `vykon` int(11) DEFAULT NULL,
  `vyrobce` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `vyrobni_cislo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `hnacivozidlo`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `nakladni_vozy`
--

CREATE TABLE IF NOT EXISTS `nakladni_vozy` (
  `id` int(11) NOT NULL,
  `cislo_him` int(11) DEFAULT NULL,
  `cislo_vozu` int(11) DEFAULT NULL,
  `druh_brzdeni` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `druh_brzdoveho_valce` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `dvojkoli_revize` int(11) DEFAULT NULL,
  `dvojkoli_typ` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `dvojkoli_velikost` int(11) DEFAULT NULL,
  `dvojkoli_vyrobce` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `oprava_typ` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `pruznice` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `rada` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL COMMENT '¯ada',
  `rezim_vozu` int(11) DEFAULT NULL,
  `roky_revize_dvojkoli_bez_zvednuti_skrine` int(11) DEFAULT NULL,
  `roky_revize_kotle` int(11) DEFAULT NULL,
  `roky_revize_vozu` int(11) DEFAULT NULL,
  `rozvadec` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `rucni_brzda` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `rychlost_km` int(11) DEFAULT NULL,
  `vlastni_hmotnost` int(11) DEFAULT NULL,
  `zdrze` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `id_vozova_rada` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `nakladni_vozy`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `nakladni_vozy_uskutecnene_prepravy`
--

CREATE TABLE IF NOT EXISTS `nakladni_vozy_uskutecnene_prepravy` (
  `id_nakladni_vuz` int(11) DEFAULT NULL,
  `id_uskutecnena_preprava` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `nakladni_vozy_uskutecnene_prepravy`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `nakladni_vozy_vlakove_soupravy`
--

CREATE TABLE IF NOT EXISTS `nakladni_vozy_vlakove_soupravy` (
  `id_nakladni_vuz` int(11) DEFAULT NULL,
  `id_vlakova_souprava` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `nakladni_vozy_vlakove_soupravy`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `okolni_stanice`
--

CREATE TABLE IF NOT EXISTS `okolni_stanice` (
  `id` int(11) NOT NULL,
  `id_stanice` int(11) DEFAULT NULL,
  `id_dalsi_stanice` int(11) DEFAULT NULL,
  `vzdalenost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `okolni_stanice`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `periodicita`
--

CREATE TABLE IF NOT EXISTS `periodicita` (
  `id` int(11) NOT NULL,
  `nazev` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='ËÌselnÌk: - dennÏ - t˝dnÏ - mÏsÌËnÏ - roËnÏ';

--
-- Vypisuji data pro tabulku `periodicita`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `nazev` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='ËÌselnÌk: - HR - strojv˘dci - IT - dispeËer - technik - mana';

--
-- Vypisuji data pro tabulku `role`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `stanice`
--

CREATE TABLE IF NOT EXISTS `stanice` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(100) COLLATE utf8_czech_ci DEFAULT NULL,
  `okres` varchar(100) COLLATE utf8_czech_ci DEFAULT NULL,
  `kraj` varchar(100) COLLATE utf8_czech_ci DEFAULT NULL,
  `cislo` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'sou tam i pomlËky a kdovÌ co jeötÏ - zjistit',
  `gps` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'v jak˝m form·tu se GPS sou¯adnice ukl·daj do db?',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `stanice`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `trasy`
--

CREATE TABLE IF NOT EXISTS `trasy` (
  `id` int(11) NOT NULL,
  `odesilaci_stanice` int(11) DEFAULT NULL,
  `stanice_urceni` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  `id_periodicita` int(11) DEFAULT NULL,
  `id_vs` int(11) DEFAULT NULL,
  `id_cesta` int(11) DEFAULT NULL,
  `stav_schvaleni` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'enum: - schv·len· - neschv·len· - ËekajÌcÌ \r\n stav schv·lenÌ od MI',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `trasy`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `uskutecnene_prapravy`
--

CREATE TABLE IF NOT EXISTS `uskutecnene_prapravy` (
  `id` int(11) NOT NULL,
  `id_cesta` int(11) DEFAULT NULL,
  `id_hnaci_vozidlo` int(11) DEFAULT NULL,
  `id_strojvedouci` int(11) DEFAULT NULL,
  `id_odesilaci_stanice` int(11) DEFAULT NULL,
  `id_stanice_urceni` int(11) DEFAULT NULL,
  `datum_cas` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='Ide·lnÏ by se do tÈto tabulky nemÏlo programovÏ v˘bec zapiso';

--
-- Vypisuji data pro tabulku `uskutecnene_prapravy`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `vlakove_soupravy`
--

CREATE TABLE IF NOT EXISTS `vlakove_soupravy` (
  `id` int(11) NOT NULL,
  `id_trasa` int(11) DEFAULT NULL COMMENT 'nÏjak˝ vektor stanic Ëi nÏco podobnÈho, nechme na implementaci',
  `id_hnaci_vozidlo` int(11) DEFAULT NULL,
  `id_strojvedouci` int(11) DEFAULT NULL,
  `stav_rezervace` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL COMMENT 'moûnÈ stavy: ''alokovane'', ''rezervovane'' \r\n - rezervovane - bere se v potaz Ëas rezervace a nejdou v tuto dobu znovu zarezervovat - alokovane - nebere se v potas Ëas rezervace, ale uû majÌ napl·novanou trasu a nejdou zarezervovat',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `vlakove_soupravy`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `vozove_rady`
--

CREATE TABLE IF NOT EXISTS `vozove_rady` (
  `id` int(11) NOT NULL,
  `brzdici_vaha` int(11) DEFAULT NULL,
  `cislo` int(11) DEFAULT NULL,
  `delka` int(11) DEFAULT NULL,
  `oznaceni` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `pocet_naprav` int(11) DEFAULT NULL,
  `rozvor` int(11) DEFAULT NULL,
  `rucni_brzda` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `unosnost` int(11) DEFAULT NULL,
  `vyska_nad_temenem_kolejnice` int(11) DEFAULT NULL,
  `vzdalenost_os` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `vozove_rady`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `zamestnanci`
--

CREATE TABLE IF NOT EXISTS `zamestnanci` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `prjmeni` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `zamestnanci`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
