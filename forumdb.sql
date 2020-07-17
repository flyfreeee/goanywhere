-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 08:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `continent` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `day` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleID`, `username`, `continent`, `country`, `title`, `content`, `day`) VALUES
(1, 'Jennifer', 'Asia', 'Singapore', 'Gardens by the Bay', 'Singapore\'s 21st-century botanical garden is a S$1 billion, 101-hectare fantasy land of space-age biodomes, high-tech Supertrees and whimsical sculptures. The Flower Dome replicates the dry Mediterranean climates found across the world, while the astounding Cloud Forest is a tropical montane affair.', '2020-05-14'),
(2, 'Turbo', 'Asia', 'Japan', 'Kyoto\'s Temples & Gardens', 'With more than 1000 temples to choose from, you\'re spoiled for choice in Kyoto. Spend your time finding one that suits your taste. If you like things gaudy and grand, you\'ll love the splendour of Kinkaku-ji. If you prefer wabi-sabi to rococo, you\'ll find the tranquillity of Hōnen-in or Shōren-in more to your liking. ', '2020-05-15'),
(3, 'Anna', 'Asia', 'China', 'Great Wall', 'Spotting it from space is both tough and pointless: the only place you can truly put the Great Wall under your feet is in China. Select the Great Wall according to taste: perfectly chiselled, dilapidated, stripped of its bricks, overrun with saplings, coiling splendidly into the hills or returning to dust. ', '2020-05-19'),
(4, 'Emma', 'Europe', 'Greece', 'Samaria Gorge', 'The dramatic gorge of Samaria is the most-trodden canyon in Crete – and with good reason. Starting near Omalos and running down through an ancient riverbed to the Libyan Sea, it\'s home to soaring birds of prey and a dazzling array of wildflowers in spring. It’s a full-day’s walk (about six hours down) but the jaw-dropping views make it worth every step. To get more solitude, try lesser-known Imbros Gorge, which runs roughly parallel to Samaria and is around half the length.', '2020-05-19'),
(5, 'Jennifer', 'Asia', 'China', 'Hong Kong\'s skyline', 'Gleaming skyscrapers lined up between emerald hills and a deep-blue harbour with crisscrossing boats – Hong Kong\'s best-known imagery is of its stunning skyline. Buildings shimmer into view like a hologram from the Tsim Sha Tsui East Promenade in Kowloon, especially after sundown. Or get above the action by taking the hair-raising Peak Tram, Asia\'s first cable funicular (in operation since 1888), to the cooler climes of Victoria Peak for superlative views of the city and the mountainous countryside beyond. From this vantage, skyscrapers and apartment blocks recede into the distance, and as the sun sets, Victoria Harbour glitters like the Milky Way on a sci-fi movie poster, mysterious and full of promise, as the city’s lights come on.', '2020-05-22'),
(6, 'Jennifer', 'North America', 'United States', 'New York City', 'Home to striving artists, hedge fund moguls and immigrants from every corner of the globe, New York City is constantly reinventing itself. It remains one of the world centers of fashion, theater, food, music, publishing, advertising and finance. A staggering number of museums, parks and ethnic neighborhoods are scattered through the five boroughs. Do as every New Yorker does: hit the streets. Every block reflects the character and history of this dizzying kaleidoscope, and on even a short walk you can cross continents.', '2020-05-22'),
(7, 'Emma', 'Oceania', 'Australia', 'Great Barrier Reef', 'The Great Barrier Reef is as fragile as it is beautiful. Stretching more than 2000km along the Queensland coastline, it\'s a complex ecosystem populated with dazzling coral, languid sea turtles, gliding rays, timid reef sharks and tropical fish of every colour and size. Whether you dive on it, snorkel over it or explore it via a scenic flight or a glass-bottomed boat, this vivid undersea kingdom and its coral-fringed islands are so unforgettable people are signing up to become a Citizen of the Great Barrier Reef to help save it.', '2020-05-27'),
(8, 'Patrick', 'Asia', 'Japan', 'Mountain Fuji', 'Fuji is divided into 10 concentric ‘stations’ from base (first station) to summit (10th), but most climbers start halfway up at various fifth station points, reachable by road. The most popular climbing route is the Yoshida Trail, because buses run directly from Shinjuku Station to the trailhead at the Fuji Subaru Line Fifth Station (sometimes called the Kawaguchi-ko Fifth Station or just Mt Fuji Fifth Station) and because it has the most huts (with food, water and toilets).\r\n\r\nOfficial climbing season is 1 July to 31 August, but in recent years this has been extended to 10 September.\r\n\r\nFor the Yoshida Trail, allow five to six hours to reach the top and about three hours to descend, plus 1½ hours for circling the crater at the top. The other three routes up the mountain are the Subashiri, Gotemba and Fujinomiya trails; the steepest, Gotemba, is the most convenient to reach for travellers coming from Kansai-area destinations such as Kyoto and Osaka.\r\n\r\nTrails below the fifth stations are now used mainly as short hiking routes, but you might consider the challenging but rewarding 19km hike from base to summit on the historic Old Yoshidaguchi Trail, which starts at Fuji Sengen-jinja in the town of Fuji-Yoshida and joins up with the Yoshida Trail.', '2020-05-27'),
(9, 'Mango', 'Asia', 'Thailand', 'Bangkok Nightlife', 'The nightlife scene in today’s Bangkok touches on all points from trashy to classy, with a distinct emphasis on unpretentious Thai-style fun. Start your night in a bar perched on a skyscraper, throw in a few roadside beers, and finish up at a basement-level club; in Bangkok, a night out is whatever you want it to be.', '2020-05-29'),
(10, 'Mango', 'Asia', 'South Korea', 'Hiking go go go!', 'Hiking is Korea’s number-one leisure activity. There are thousands of trails, with everything from leisurely half-day walks, such as those along the Olle Trail or the heights of Seongsan Ilchul-bong on tropical Jeju Island, to strenuous mountain-ridge treks through the Korean alps, most passing through national or provincial parks. The country’s 20 national parks are beautiful in winter and summer, and snow on trees, and temple roofs provide wonderful photo ops.', '2020-05-29'),
(11, 'Mango', 'Europe', 'Italy', 'Enjoy an artful life', 'Pity the day trippers dropped off at San Marco with a mere three hours to take in Venice. That’s about enough time for one long gasp at the show-stopper that is Piazza San Marco, but not nearly enough time to see what else Venice is hiding. Stay longer in this fairy-tale city and you’ll discover the pleasures of la bea vita (the beautiful life) that only locals know: the wake-up call of the gondoliers\' ‘Ooooeeeee!’, a morning spritz in a sunny campo (square), lunch in a crowded bacaro (bar) with friends and fuschia-pink sunsets that have sent centuries of artists mad.', '2020-05-29'),
(12, 'Mango', 'Oceania', 'New Zealand', 'Franz Josef & Fox Glaciers', 'The spectacular glaciers of Franz Josef and Fox in New Zealand are remarkable for many reasons, including their rates of accumulation and descent, and their proximity to both the loftiest peaks of the Southern Alps and the Tasman Sea around 10km away. Several short walks meander towards the glaciers’ fractured faces (close enough for you to feel insignificant!), or you can take a hike on the ice with Franz Josef Glacier Guides or Fox Glacier Guiding. The ultimate encounter is on a scenic flight, which often also provides grandstand views of Aoraki/Mt Cook, Westland forest and a seemingly endless ocean.', '2020-05-30'),
(13, 'Alice', 'Europe', 'France', 'Eiffel Tower', 'No one could imagine Paris today without its signature spire. But Gustave Eiffel only constructed this 324m-tall tower as a temporary exhibit for the 1889 World\'s Fair. Luckily, the art nouveau tower’s popularity assured its survival. Prebook online to avoid extensive ticket queues.\r\n\r\nLifts ascend to the tower’s three floors; change on the 2nd floor for the final ascent to the top. Energetic visitors can climb as far as the 2nd floor via the south pillar’s 720 stairs (no prebooking).\r\n\r\n', '2020-05-30'),
(14, 'Alice', 'Europe', 'Russian Federation', 'Red Square', 'Immediately outside the Kremlin’s northeastern wall is the celebrated Red Square, the 400m-by-150m area of cobblestones that is at the very heart of Moscow. Commanding the square from the southern end is St Basil’s Cathedral. This panorama never fails to send the heart aflutter, especially at night.\r\n\r\nNext to the cathedral, an elevated platform, known as the Place of Skulls, was used for reading out decrees and proclamations in the old ages and became the setting for Pussy Riot\'s anti-Putin video clip in 2011. Nearby, the Minin & Pozharsky Statue celebrates the heroes of the 1612 liberation war against the Poles.\r\n\r\nThe word krasnaya in the name means \'red\' now, but in old Russian it meant \'beautiful\' and Krasnaya pl lives up to this epithet. Furthermore, it evokes an incredible sense of import to stroll across the place where so much of Russian history has unfolded. Note that the square is often closed for various celebrations or their rehearsals, so allow some leeway in your schedule.', '2020-05-30'),
(15, 'Alice', 'North America', 'Canada', 'Montréal', 'Where else can you join more than two million calm, respectful music lovers (no slam dancing or drunken slobs) and watch the best jazz-influenced musicians in the world, choosing from 500 shows, of which countless are free? Only in Montréal, Canada\'s second-largest city and its cultural heart. BB King, Prince and Astor Piazzolla are among those who\'ve plugged in at the 11-day, late June Montréal Jazz Festival. You might want to join them after your free drumming lesson and street-side jam session. The good times roll 24/7.', '2020-05-30'),
(16, 'Patrick', 'North America', 'Canada', 'Niagara Falls', 'An unstoppable flow of rushing water surges over the arcing fault in the riverbed with thunderous force. Great plumes of icy mist rise for hundreds of meters as the waters collide, like an ethereal veil concealing the vast rift behind the torrent. Thousands of onlookers delight in the spectacle every day, drawn by the force of the current and the hypnotic mist.\r\n\r\nOtherwise, Niagara might not be what you expect: the town feels like a tacky, outdated amusement park. It has been a saucy honeymoon destination ever since Napoleon\'s brother brought his bride here – tags like \'For newlyweds and nearly deads\' and \'Viagra Falls\' are apt. A crass morass of casinos, sleazy motels and tourist traps lines Clifton Hill and Lundy\'s Lane – a Little Las Vegas! Love it or loathe it, there\'s nowhere quite like it.\r\n\r\n', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `articleID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `day` date NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `articleID`, `userID`, `day`, `content`) VALUES
(1, 2, 1, '2020-05-25', 'Fantastic!'),
(2, 3, 1, '2020-05-25', 'Very useful info'),
(3, 4, 1, '2020-05-26', 'Definitely wanna go!'),
(4, 1, 2, '2020-05-27', 'I have also been here before'),
(5, 3, 2, '2020-05-27', 'impressive!'),
(6, 6, 4, '2020-05-29', 'Thanks for sharing :)'),
(7, 5, 4, '2020-05-29', 'Wanna travel with you someday'),
(8, 2, 6, '2020-05-29', 'My dreaming destination'),
(9, 8, 5, '2020-05-30', 'is it energy-consuming?'),
(10, 11, 8, '2020-05-30', 'Wonderful!'),
(11, 12, 8, '2020-05-30', 'So cool!'),
(12, 2, 8, '2020-05-30', 'add it to my waiting list'),
(13, 11, 1, '2020-05-30', 'Love it');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeID` int(11) NOT NULL,
  `articleID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeID`, `articleID`, `userID`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 1, 2),
(5, 5, 2),
(6, 6, 4),
(7, 4, 3),
(8, 8, 5),
(9, 4, 5),
(10, 11, 8),
(11, 12, 8),
(12, 7, 8),
(13, 10, 8),
(14, 2, 8),
(15, 14, 7),
(16, 11, 7),
(17, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Jennifer', '1@qq.com', '$2y$10$XG1FvVQFxvfFPrWo03YABOI77VvwfJpOBpmW22iAF7zU4KwE1X/GK'),
(2, 'Turbo', '2@163.com', '$2y$10$mrQwjuD8kQlWaU2bwdV4LuL3V941rWk3VloUJuHTlTJWRCQZnpRQG'),
(3, 'Anna', 'a@gmail.com', '$2y$10$x4j4QA3e/8jXEkJqbtq9i.ySU1Gv3AxBzVZEXSKvNZyoU/VjIzIvS'),
(4, 'Greg', 'adk@hotmail.com', '$2y$10$AVAkFJshI4ENEZMayvzfGunVKFGKibeo7OuT/mjLE6WO50Z5bcBym'),
(5, 'Mango', 'krlw@126.com', '$2y$10$KpaBQB83eNUsLScmtiD.MucWs5sn6EiMAusF2rLLk3P28Qhi3tPdG'),
(6, 'Emma', '6@gmail.com', '$2y$10$bTnvsIEbq.fobAq22W97HefZurfxtw7btskwNU.rInlZJFGEba0VK'),
(7, 'Patrick', 'rqi@gmail.com', '$2y$10$QBGdTHvKsg7Pi3.kWrhcIeqtw9GcVP4w.qwUVSstQPuoyP81zaHXW'),
(8, 'Alice', '8@qq.com', '$2y$10$y/HRcscct4stpS4AUJW4DOeeSU1m.Vvdjq0CDO0P.AZy9UGSAya6u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `articleID` (`articleID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeID`),
  ADD KEY `articleID` (`articleID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`articleID`) REFERENCES `articles` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`articleID`) REFERENCES `articles` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
