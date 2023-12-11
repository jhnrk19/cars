-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 09. 11:14
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `cars`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `car_data`
--

CREATE TABLE `car_data` (
  `Brand` varchar(13) DEFAULT NULL,
  `Model` varchar(10) DEFAULT NULL,
  `Type` varchar(11) DEFAULT NULL,
  `Interior_Color` varchar(8) DEFAULT NULL,
  `Exterior_Color` varchar(6) DEFAULT NULL,
  `Engine_Size` varchar(8) DEFAULT NULL,
  `Horsepower` int(3) DEFAULT NULL,
  `Body_Details` varchar(28) DEFAULT NULL,
  `IMG` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `car_data`
--

INSERT INTO `car_data` (`Brand`, `Model`, `Type`, `Interior_Color`, `Exterior_Color`, `Engine_Size`, `Horsepower`, `Body_Details`, `IMG`) VALUES
('Toyota', 'Camry', 'Sedan', 'Black', 'Silver', '2.0L', 180, '4-door, sleek design', '../images/toyota_camry.jpg'),
('Honda', 'Civic', 'Sedan', 'Beige', 'Blue', '3.5L', 200, 'Spacious, rugged body', '../images/honda_civic.jpg'),
('Ford', 'Focus', 'Hatchback', 'Gray', 'Red', '1.5L', 150, 'Compact, aerodynamic', '../images/ford_focus.jpg'),
('BMW', '3 Series', 'Coupe', 'Tan', 'Black', '3.0L', 250, 'Sporty, low profile', '../images/bmw_3series.jpg'),
('Chevrolet', 'Silverado', 'Pickup', 'Brown', 'White', '5.7L', 350, 'Durable, towing capacity', '../images/chevrolet_silverado.jpg'),
('Nissan', '370Z', 'Convertible', 'Red', 'Black', '2.5L', 300, 'Soft top, stylish', '../images/nissan_370Z.jpg'),
('Hyundai', 'Sonata', 'Sedan', 'Ivory', 'Gray', '2.4L', 185, 'Comfortable, fuel-efficient', '../images/hyundai_sonata.jpg'),
('Mercedes-Benz', 'GLE', 'SUV', 'Black', 'Silver', '4.0L', 320, 'Luxury, advanced features', '../images/mercedes_gle.jpg'),
('Subaru', 'Outback', 'Wagon', 'Charcoal', 'Green', '2.2L', 175, 'AWD, versatile', '../images/subaru_outback.jpg'),
('Kia', 'Forte', 'Compact', 'Black', 'Blue', '1.6L', 160, 'Modern, fuel-efficient', '../images/kia_forte.jpg'),
('Audi', 'A4', 'Sedan', 'Brown', 'White', '2.0L', 220, 'Elegant, advanced tech', '../images/audi_a4.jpg'),
('Jeep', 'Wrangler', 'SUV', 'Gray', 'Black', '3.6L', 285, 'Off-road capability', '../images/jeep_wrangler.jpg'),
('Mazda', 'MX-5 Miata', 'Hatchback', 'Black', 'Red', '2.5L', 181, 'Sporty, responsive', '../images/mazda_mx5.jpg'),
('Lexus', 'RC', 'Coupe', 'Tan', 'Silver', '3.5L', 311, 'Luxury, powerful', '../images/lexus_rc.jpg'),
('Volkswagen', 'Jetta', 'Sedan', 'Gray', 'Blue', '1.8L', 170, 'Sleek, efficient', '../images/vw_jetta.jpg'),
('GMC', 'Sierra', 'Pickup', 'Black', 'White', '6.2L', 420, 'Robust, towing power', '../images/gmc_sierra.jpg'),
('Infiniti', 'Q60', 'Coupe', 'Ivory', 'Black', '3.7L', 300, 'Stylish, performance', '../images/infinity_q60.jpg'),
('Ford', 'Explorer', 'SUV', 'Beige', 'Green', '2.3L', 300, 'Family-friendly', '../images/ford_explorer.jpg'),
('Chevrolet', 'Malibu', 'Sedan', 'Black', 'Red', '2.5L', 190, 'Classic, reliable', '../images/chevrolet_malibu.jpg'),
('Tesla', 'Model 3', 'Electric', 'White', 'Blue', 'Electric', 450, 'Cutting-edge, zero emissions', '../images/tesla_model3.jpg'),
('Dodge', 'Ram', 'Pickup', 'Black', 'Silver', '5.7L', 395, 'Aggressive, powerful', '../images/dodge_ram.jpg'),
('Volvo', 'V60', 'Wagon', 'Brown', 'Black', '2.0L', 250, 'Safe, spacious', '../images/volvo_v60.jpg'),
('Jaguar', 'F-Type', 'Convertible', 'Tan', 'Blue', '3.0L', 340, 'Luxury, open-top', '../images/jaguar_Ftype.jpg'),
('Buick', 'LaCrosse', 'Sedan', 'Gray', 'White', '2.4L', 200, 'Comfortable, refined', '../images/buick_laCrosse.jpg'),
('Acura', 'RDX', 'SUV', 'Black', 'Red', '3.5L', 272, 'Premium, advanced tech', '../images/acura_rdx.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
