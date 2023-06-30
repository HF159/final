-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 09:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `name`, `image`) VALUES
(1, 'Anthony Mackie', './images/actors/anthony-mackie.jpg'),
(2, 'Harrison Ford', './images/actors/harrison-ford.jpg'),
(3, 'Joaquin Phoenix', './images/actors/joaquin-phoenix.jpg'),
(4, 'Lady Gaga', './images/actors/lady-gaga.jpg'),
(5, 'Ryan Reynolds', './images/actors/ryan-reynolds.jpg'),
(6, 'Hugh Jackman', './images/actors/hugh-jackman.jpg'),
(7, 'Jack Champion', './images/actors/jack-champion.jpg'),
(8, 'Zoe Saldana', './images/actors/zoe-saldaña.jpg'),
(9, 'Deepika Padukone', './images/actors/deepika-padukone.jpg'),
(10, 'Hrithik Roshan', './images/actors/hrithik-roshan.jpg'),
(11, 'Tom Cruise', './images/actors/tom-cruise.jpg'),
(12, 'Ving Rhames', './images/actors/ving-rhames.jpg'),
(13, 'Florence Pugh', './images/actors/florence-pugh.jpg'),
(14, 'Brian Tyree Henry', './images/actors/brian-tyree-henry.jpg'),
(15, 'Rebecca Hall', './images/actors/rebecca-hall.jpg'),
(16, 'Sebastian Stan', './images/actors/sebastian-stan.jpg'),
(17, 'Patrick Wilson', './images/actors/Patrick Wilson.jpg'),
(20, 'Ty Simpkins', './images/actors/Ty Simpkins.jpg'),
(21, 'Jennifer Connelly', './images/actors/Jennifer Connelly.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'action'),
(3, 'Comedy'),
(4, 'Sci-Fi'),
(5, 'Crime'),
(6, 'Drama'),
(7, 'Musical'),
(8, 'Fantasy'),
(9, 'Horror'),
(10, 'Disaster'),
(11, 'Romance'),
(12, ' Spy'),
(13, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `desc1` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `series` varchar(32) NOT NULL,
  `trailer` varchar(256) NOT NULL,
  `actor1` varchar(32) NOT NULL,
  `actor_name1` varchar(32) NOT NULL,
  `actor2` varchar(32) NOT NULL,
  `actor_name2` varchar(32) NOT NULL,
  `cat1` varchar(32) NOT NULL,
  `cat2` varchar(32) NOT NULL,
  `cat3` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `name`, `desc1`, `date`, `image`, `series`, `trailer`, `actor1`, `actor_name1`, `actor2`, `actor_name2`, `cat1`, `cat2`, `cat3`) VALUES
(1, 'Deadpool', 'Deadpool is a highly trained assassin and mercenary. He is adept in multiple forms of martial arts, including Savate. Deadpool is an extraordinary athlete, and an expert swordsman and marksman. He is skilled in the use of multiple weapons, including katanas, knives, grenades, and guns.', '2024-11-08', './images/deadpool3/', '3', 'https://www.youtube.com/watch?v=ZN8sfvFm_-4', 'Ryan Reynolds', 'Wade Wilson', 'Hugh Jackman', 'Wolverine', 'Action', 'Comedy', 'Sci-Fi'),
(2, 'Joker', 'The Joker is noted for his clownlike appearance and sick humour. The Joker, initially portrayed as a small-time crook, was disfigured and driven insane by an accident with toxic chemicals. He was depicted with chalk-white skin, ruby-red lips permanently fixed in a demonic grin, and bright green hair.', '2024-10-04', './images/joker/', 'Folie à Deux', 'https://www.youtube.com/watch?v=X6hRhGklEvA', 'Joaquin Phoenix', 'Arthur Fleck \"Joker\"', 'Lady Gaga', 'Harley Quinn', 'Crime', 'Drama', 'Musical'),
(3, 'Captain America ', 'Captain America: Brave New World is an upcoming American superhero film based on the Marvel Comics character Sam Wilson / Captain America, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is intended to be the fourth installment in the Captain America film series, a continuation of the television miniseries The Falcon and the Winter Soldier (2021), and the 34th film in the Marvel Cinematic Universe (MCU). The film is directed by Julius Onah, who co-wrote the script with Malcolm Spellman and Dalan Musson, and stars Anthony Mackie as Sam Wilson / Captain America alongside Danny Ramirez, Carl Lumbly, Tim Blake Nelson, Shira Haas, Harrison Ford, and Liv Tyler.', '2024-05-03', './images/captain-america/', '4', 'https://www.youtube.com/watch?v=Pu61XpD1uK0', 'Anthony Mackie', 'Sam Wilson, aka Captain America', 'Harrison Ford', 'Thaddeus Ross', 'Action', 'Adventure', 'Sci-Fi'),
(6, 'Avatar', 'James Cameron has hinted that the story will be focused on Lo\'ak; Lo\'ak has been confirmed as the film\'s narrator. Payakan and Mick Scoresby will return. The film will continue to explore the relationship between Payakan and Lo\'ak as well as the whole tulkun culture and their hierarchies.', '2024-12-20', './images/avatar3/', '3', 'https://www.youtube.com/watch?v=YXtWPVFk5TQ', 'Jack Champion', 'Javier \'Spider\' Socorro', 'Zoe Saldana', 'Neytiri', 'Action', 'Adventure', 'Fantasy'),
(7, 'Fighter', 'Fighter is an upcoming Indian Hindi-language action film directed by Siddharth Anand and produced by Viacom18 Studios and Marflix Pictures. Touted to be India\'s first aerial actioner, the film stars Deepika Padukone, Hrithik Roshan and Anil Kapoor and serves as the first film in a planned Aerial Action franchise.', '2024-01-25', './images/fighter/', '', 'https://www.youtube.com/watch?v=LTuj0QXK3vU', 'Deepika Padukone', 'Mini', 'Hrithik Roshan', 'Patty', 'Action', 'Thriller', 'explosion'),
(8, 'Mission Impossible', 'Mission: Impossible – Dead Reckoning Part Two is an upcoming American action spy film written and directed by Christopher McQuarrie. It is a direct sequel to Mission: Impossible – Dead Reckoning Part One (2023), and the eighth installment in the Mission: Impossible film series. Tom Cruise returns in his eighth appearance as the series\'s lead character, Ethan Hunt, whom he would have portrayed for over 28 years by the time the film is released; it is expected to be his final appearance in the series. Ving Rhames, Henry Czerny, Simon Pegg, Rebecca Ferguson, Vanessa Kirby, Hayley Atwell, Shea Whigham and Pom Klementieff all return in their roles from previous films in the series. Esai Morales returns from the seventh film as the villain.', '2023-06-28', './images/mission-impossibleDR2/', 'Dead Reckoning 2', 'https://www.youtube.com/watch?v=avz06PDqDbM', 'Tom Cruise', 'Ethan Hunt', 'Ving Rhames', 'Luther Stickell', 'Action', 'Adventure', 'Thriller'),
(9, 'Thunderbolts', ' A Thunderbolts movie is in the works at Marvel with Jake Schreier set to direct.  The supervillain led movie will include Yelena Belova, Red Guardian, Winter Soldier, Valentina Allegra de Fontaine, Ghost, Taskmaster, U.S. Agent, and Thaddeus ‘Thunderbolt’ Ross.\r\n', '2024-12-20', './images/thunderbolts/', '', 'https://www.youtube.com/watch?v=iP0OUlP0P_w', 'Sebastian Stan', 'Bucky Barnes', 'Florence Pugh', 'Yelena Belova', 'Action', 'Adventure', 'Crime'),
(10, 'Godzilla x Kong', 'Godzilla x Kong: The New Empire is an upcoming American science fiction monster film set to be directed by Adam Wingard and written by Terry Rossio, Jeremy Slater, and Simon Barrett from a story by Rossio, Wingard, and Barrett, with visual effects supervised by Alessandro Ongaro. Produced by Legendary Pictures, it is the fifth entry in the Monsterverse.[7] The film is a follow-up to Godzilla vs. Kong and will feature Godzilla and Kong joining forces once again against a new threat.[5] Warner Bros. will tentatively release the film to American theaters on March 15, 2024,[4] while Toho will bring it to Japanese theaters sometime the same year.\r\n', '2024-03-15', './images/godzillaxkong/', 'The New Empire Movie', 'https://www.youtube.com/watch?v=DQAHg4e9-wk', 'Brian Tyree Henry', 'Bernie Hayes', 'Rebecca Hall', 'Ilene Andrews', 'Action', 'Adventure', 'Sci-Fi'),
(12, 'Insidious', 'Insidious: The Red Door is an upcoming American supernatural horror film directed by Patrick Wilson in his directorial debut from a screenplay by Scott Teems and story by Leigh Whannell. It is a direct sequel to Insidious (2010) and Insidious: Chapter 2 (2013), and the fifth installment in the Insidious franchise. Ty Simpkins, Wilson, Andrew Astor, Rose Byrne, and Lin Shaye reprise their roles from the films. Hiam Abbass and Sinclair Daniel also join the cast.  After the release of Insidious: The Last Key (2018), Blumhouse Productions opted for possibilities to produce future films in the series, including a crossover with the Sinister series. In October 2020, the studio announced that Wilson would direct and star in the new film, with Teems writing the script based on a story written by Whannell.', '2023-06-27', './images/InsidiousThe Red Door/', 'The Red Door', 'https://www.youtube.com/watch?v=ZuQuOnYnr3Q', 'Patrick Wilson', 'Josh Lambert', 'Ty Simpkins', 'Dalton Lambert', 'Horror', 'Mystery', 'Thriller'),
(14, 'Top Gun', 'Top Gun: Maverick is a 2022 American action drama film directed by Joseph Kosinski and written by Ehren Kruger, Eric Warren Singer, and Christopher McQuarrie from stories by Peter Craig and Justin Marks. The film is a sequel to the 1986 film Top Gun. Tom Cruise reprises his starring role as the naval aviator Maverick. It is based on the characters of the original film created by Jim Cash and Jack Epps Jr. The film also stars Miles Teller, Jennifer Connelly, Jon Hamm, Glen Powell, Lewis Pullman, Ed Harris, and Val Kilmer, who reprises his role as Iceman. In the film, Maverick confronts his past while training a group of younger Top Gun graduates, including the son of his deceased best friend, for a dangerous mission.', '2023-06-28', './images/Top GunMaverick/', 'Maverick', 'https://www.youtube.com/watch?v=giXco2jaZ_4', 'Tom Cruise', 'Peter Craig', 'Jennifer Connelly', 'Penny Benjamin', 'Action', 'Drama', 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'hf159', 'hadifares159@gmail.com', 'hadi8642', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
