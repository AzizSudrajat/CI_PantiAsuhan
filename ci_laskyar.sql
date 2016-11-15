-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2016 at 10:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_laskyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `nama_profile` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile`, `nama_profile`, `deskripsi`, `date`) VALUES
(1, 'file_1478101061.jpg', 'Aziz Sudrajat', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac volutpat diam. Proin quis libero in mauris placerat lacinia. Aliquam id sapien eu ex semper porttitor. Aliquam erat volutpat. Nullam luctus quam et ex tempor hendrerit eu ac lorem. Donec interdum felis id mauris interdum vestibulum. Mauris eu arcu consequat, consectetur elit quis, imperdiet purus. Fusce interdum nibh mauris, eget commodo est tristique ut. Integer metus nisi, ultricies at erat in, elementum tincidunt nulla. Praesent rutrum, diam sed lobortis suscipit, metus augue congue dui, in scelerisque mauris elit nec ex. Vivamus aliquet, nisl sit amet eleifend condimentum, purus lacus dictum magna, a iaculis nunc nisl ac augue. Aenean ut ante lectus. Aliquam tempus fringilla laoreet. Vestibulum vulputate lacus at lacus lobortis, vitae vehicula felis dignissim. Mauris ut purus vel massa consectetur auctor eget vitae tortor. Mauris gravida feugiat lectus, eu euismod velit.</p>\r\n<p>Nam volutpat elementum ante ut iaculis. Nulla sit amet ex eros. Praesent non sem eget augue ornare ornare ac at quam. Sed convallis, elit a volutpat maximus, lacus quam molestie dui, nec venenatis ligula dui et leo. Nulla bibendum pulvinar scelerisque. Ut sit amet nisi aliquam, egestas massa a, tristique arcu. Vivamus tristique, augue ac viverra posuere, magna lectus lacinia diam, nec vulputate nisl mauris id arcu. Proin vitae felis porttitor, sollicitudin diam a, pulvinar leo. Proin laoreet tincidunt nisi in sagittis. Nullam accumsan nunc ac erat imperdiet, a efficitur ex facilisis. Donec euismod, nisi eu fringilla mattis, sapien arcu mattis tellus, ut varius ipsum mauris sit amet augue. Fusce pharetra mattis velit, a imperdiet nibh porta ac. Nunc venenatis efficitur laoreet. Duis ut lacus erat.</p>\r\n<p>Nullam at elementum neque. Phasellus mi erat, fringilla quis urna vel, iaculis auctor dui. Duis sit amet dolor vulputate leo vehicula euismod. Curabitur malesuada auctor urna, sit amet interdum est tempor at. Proin pellentesque ornare odio in euismod. Nulla lobortis volutpat tortor. Vivamus sodales felis a turpis semper, vel facilisis ante porta. Ut nec mattis libero. Nullam vitae enim ut justo imperdiet facilisis. Maecenas congue, urna sit amet finibus maximus, orci lectus luctus urna, non condimentum lacus magna sodales magna. Donec ornare volutpat dui, vel ultricies justo elementum vitae. Aliquam erat volutpat. Cras ac tincidunt magna, ac iaculis tellus. Ut eget dui id enim pulvinar eleifend. Pellentesque nec sem sem.</p>', '2016-11-01 04:31:14'),
(2, 'file_1478101103.jpg', 'Laskyar', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac volutpat diam. Proin quis libero in mauris placerat lacinia. Aliquam id sapien eu ex semper porttitor. Aliquam erat volutpat. Nullam luctus quam et ex tempor hendrerit eu ac lorem. Donec interdum felis id mauris interdum vestibulum. Mauris eu arcu consequat, consectetur elit quis, imperdiet purus. Fusce interdum nibh mauris, eget commodo est tristique ut. Integer metus nisi, ultricies at erat in, elementum tincidunt nulla. Praesent rutrum, diam sed lobortis suscipit, metus augue congue dui, in scelerisque mauris elit nec ex. Vivamus aliquet, nisl sit amet eleifend condimentum, purus lacus dictum magna, a iaculis nunc nisl ac augue. Aenean ut ante lectus. Aliquam tempus fringilla laoreet. Vestibulum vulputate lacus at lacus lobortis, vitae vehicula felis dignissim. Mauris ut purus vel massa consectetur auctor eget vitae tortor. Mauris gravida feugiat lectus, eu euismod velit.</p>', '2016-11-02 15:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'trias', '1234'),
(3, 'laskyar', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
