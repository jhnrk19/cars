-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 18. 12:15
-- Kiszolgáló verziója: 10.4.6-MariaDB
-- PHP verzió: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id` int(11) NOT NULL,
  `Brand` varchar(13) DEFAULT NULL,
  `Model` varchar(10) DEFAULT NULL,
  `Type` varchar(11) DEFAULT NULL,
  `Interior_Color` varchar(8) DEFAULT NULL,
  `Exterior_Color` varchar(6) DEFAULT NULL,
  `Engine_Size` varchar(8) DEFAULT NULL,
  `Horsepower` int(3) DEFAULT NULL,
  `Body_Details` varchar(28) DEFAULT NULL,
  `IMG` text DEFAULT NULL,
  `IMG2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `car_data`
--

INSERT INTO `car_data` (`id`, `Brand`, `Model`, `Type`, `Interior_Color`, `Exterior_Color`, `Engine_Size`, `Horsepower`, `Body_Details`, `IMG`, `IMG2`) VALUES
(1, 'Toyota', 'Camry', 'Sedan', 'Black', 'Silver', '2.0L', 180, '4-door, sleek design', 'https://i.ibb.co/3dLZWXk/toyota-camry.jpg', 'https://i.ibb.co/T83rtS1/toyota-camry2.jpg'),
(2, 'Honda', 'Civic', 'Sedan', 'Beige', 'Blue', '3.5L', 200, 'Spacious, rugged body', 'https://i.ibb.co/cccsyPn/honda-civic.jpg', 'https://i.ibb.co/FgyXXNf/honda-civic2.jpg'),
(3, 'Ford', 'Focus', 'Hatchback', 'Gray', 'Red', '1.5L', 150, 'Compact, aerodynamic', 'https://i.ibb.co/gDz1Hck/ford-focus.jpg', 'https://i.ibb.co/9qvnGGz/ford-focus2.jpg'),
(4, 'BMW', '3 Series', 'Coupe', 'Tan', 'Black', '3.0L', 250, 'Sporty, low profile', 'https://i.ibb.co/hyfks0N/bmw-3series.jpg', 'https://i.ibb.co/TKq6BMs/bmw-3series2.jpg'),
(5, 'Chevrolet', 'Silverado', 'Pickup', 'Brown', 'White', '5.7L', 350, 'Durable, towing capacity', 'https://i.ibb.co/tBGqNFz/chevrolet-silverado.jpg', 'https://i.ibb.co/s9j5Psx/chevrolette-silverado2.jpg'),
(6, 'Nissan', '370Z', 'Convertible', 'Red', 'Black', '2.5L', 300, 'Soft top, stylish', 'https://i.ibb.co/XxpKBYR/nissan-370-Z.jpg', 'https://i.ibb.co/YWv9cHV/nissan-370z2.jpg'),
(7, 'Hyundai', 'Sonata', 'Sedan', 'Ivory', 'Gray', '2.4L', 185, 'Comfortable, fuel-efficient', 'https://i.ibb.co/Dk0hYdb/hyundai-sonata.jpg', 'https://i.ibb.co/hH4N0sd/hyundai-sonata2.jpg'),
(8, 'Mercedes-Benz', 'GLE', 'SUV', 'Black', 'Silver', '4.0L', 320, 'Luxury, advanced features', 'https://i.ibb.co/hgpyf9s/mercedes-gle.jpg', 'https://i.ibb.co/4PpKnzd/mercedes-gle2.jpg'),
(9, 'Subaru', 'Outback', 'Wagon', 'Charcoal', 'Green', '2.2L', 175, 'AWD, versatile', 'https://i.ibb.co/16SMt2h/subaru-outback.jpg', 'https://i.ibb.co/QX2Qx7y/subaru-outback.jpg'),
(10, 'Kia', 'Forte', 'Compact', 'Black', 'Blue', '1.6L', 160, 'Modern, fuel-efficient', 'https://i.ibb.co/VvNK80J/kia-forte.jpg', 'https://i.ibb.co/ZTKnLFy/kia-forte2.jpg'),
(11, 'Audi', 'A4', 'Sedan', 'Brown', 'White', '2.0L', 220, 'Elegant, advanced tech', 'https://i.ibb.co/L6D34LL/audi-a4.jpg', 'https://i.ibb.co/f1vdFn1/audi-a42.jpg'),
(12, 'Jeep', 'Wrangler', 'SUV', 'Gray', 'Black', '3.6L', 285, 'Off-road capability', 'https://i.ibb.co/sqCfqMC/jeep-wrangler.jpg', 'https://i.ibb.co/sPMKVv1/jeep-wrangler2.jpg'),
(13, 'Mazda', 'MX-5 Miata', 'Hatchback', 'Black', 'Red', '2.5L', 181, 'Sporty, responsive', 'https://i.ibb.co/VHMLDyg/mazda-mx5.jpg', 'https://i.ibb.co/Gtn7fwQ/mazda-mx52.jpg'),
(14, 'Lexus', 'RC', 'Coupe', 'Tan', 'Silver', '3.5L', 311, 'Luxury, powerful', 'https://i.ibb.co/dDqZgS5/lexus-rc.jpg', 'https://i.ibb.co/M7djktH/lexus-rc2.jpg'),
(15, 'Volkswagen', 'Jetta', 'Sedan', 'Gray', 'Blue', '1.8L', 170, 'Sleek, efficient', 'https://i.ibb.co/88zjNPH/vw-jetta.jpg', 'https://i.ibb.co/SxMtLKX/vw-jetta2.jpg'),
(16, 'GMC', 'Sierra', 'Pickup', 'Black', 'White', '6.2L', 420, 'Robust, towing power', 'https://i.ibb.co/GQRGnCL/gmc-sierra.jpg', 'https://i.ibb.co/BcVm8p5/gmc-sierra2.jpg'),
(17, 'Infiniti', 'Q60', 'Coupe', 'Ivory', 'Black', '3.7L', 300, 'Stylish, performance', 'https://i.ibb.co/HYBMcnN/infinity-q60.jpg', 'https://i.ibb.co/ZXGJgzM/infinity-q602.jpg'),
(18, 'Ford', 'Explorer', 'SUV', 'Beige', 'Green', '2.3L', 300, 'Family-friendly', 'https://i.ibb.co/2yw16tm/ford-explorer.jpg', 'https://i.ibb.co/f2GBbD6/ford-explorer2.jpg'),
(19, 'Chevrolet', 'Malibu', 'Sedan', 'Black', 'Red', '2.5L', 190, 'Classic, reliable', 'https://i.ibb.co/nmK1XZ5/chevrolet-malibu.jpg', 'https://i.ibb.co/syLnDJ2/chevrolette-malibu2.jpg'),
(20, 'Tesla', 'Model 3', 'Electric', 'White', 'Blue', 'Electric', 450, 'Cutting-edge, zero emissions', 'https://i.ibb.co/6bCGcWn/tesla-model3.jpg', 'https://i.ibb.co/XsQHMTj/tesla-model32.jpg'),
(21, 'Dodge', 'Ram', 'Pickup', 'Black', 'Silver', '5.7L', 395, 'Aggressive, powerful', 'https://i.ibb.co/Fg5y8DC/dodge-ram.jpg', 'https://i.ibb.co/D8mBL6g/dodge-ram2.jpg'),
(22, 'Volvo', 'V60', 'Wagon', 'Brown', 'Black', '2.0L', 250, 'Safe, spacious', 'https://i.ibb.co/WxyYKsL/volvo-v60.jpg', 'https://i.ibb.co/SrzbLdh/volvo-v602.jpg'),
(23, 'Jaguar', 'F-Type', 'Convertible', 'Tan', 'Blue', '3.0L', 340, 'Luxury, open-top', 'https://i.ibb.co/M5h09mV/jaguar-Ftype.jpg', 'https://i.ibb.co/cNqkSTM/jaguar-ftype2.jpg'),
(24, 'Buick', 'LaCrosse', 'Sedan', 'Gray', 'White', '2.4L', 200, 'Comfortable, refined', 'https://i.ibb.co/nsRsDW3/buick-la-Crosse.jpg', 'https://i.ibb.co/J5rxPYy/buick-lacrosse2.jpg'),
(25, 'Acura', 'RDX', 'SUV', 'Black', 'Red', '3.5L', 272, 'Premium, advanced tech', 'https://i.ibb.co/yFdtPWZ/acura-rdx.jpg', 'https://i.ibb.co/hLCWRgP/acura-rdx2.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `car_data`
--
ALTER TABLE `car_data`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `car_data`
--
ALTER TABLE `car_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
