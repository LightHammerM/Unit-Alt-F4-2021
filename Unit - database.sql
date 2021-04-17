-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Sob 17. dub 2021, 12:03
-- Verze serveru: 8.0.21
-- Verze PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `Unit`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `Friends`
--

CREATE TABLE `Friends` (
  `ID_Friendship` int NOT NULL,
  `main` text NOT NULL,
  `friend` text NOT NULL,
  `main_auth` tinyint(1) NOT NULL,
  `friend_auth` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Vypisuji data pro tabulku `Friends`
--

INSERT INTO `Friends` (`ID_Friendship`, `main`, `friend`, `main_auth`, `friend_auth`) VALUES
(1, 'LightHammer', 'Duffi', 1, 1),
(2, 'LightHammer', 'Hero', 1, 1),
(3, 'LightHammer', 'Kulisek', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `Movies`
--

CREATE TABLE `Movies` (
  `ID_movie` int NOT NULL,
  `name` varchar(500) NOT NULL,
  `age-minimal` int NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `rating` double NOT NULL,
  `views` int NOT NULL,
  `localization` text NOT NULL,
  `dabing` text NOT NULL,
  `picture` text NOT NULL,
  `platform` text NOT NULL,
  `enviroment` text NOT NULL,
  `year` int NOT NULL,
  `showmax-rating` text NOT NULL,
  `movie_length` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rate_counter` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Vypisuji data pro tabulku `Movies`
--

INSERT INTO `Movies` (`ID_movie`, `name`, `age-minimal`, `title`, `category`, `rating`, `views`, `localization`, `dabing`, `picture`, `platform`, `enviroment`, `year`, `showmax-rating`, `movie_length`, `rate_counter`) VALUES
(1, 'Rambo: Last Blood', 18, 'Sylvester Stallone reprises his role as one of the greatest action heroes of all time, with John Rambo unlocking his deadly combat skills on his final journey to exact revenge.', 'Action', 1.6666666666667, 1, 'USA', 'English/Czech/Polski', 'rambo_last_blood', 'FILMFINITY', 'hollywood', 2019, '18-plus', '90 min', 3),
(2, 'Ben is Back', 16, 'Ben is a young drug addict who unexpectedly returns home for Christmas, putting his mother’s love to the test. Julia Roberts plays Ben’s mother, and Lucas Hedges stars as Ben in this intense, moving drama.', 'Drama', 2.5, 2, 'Australia', 'English/Czech/Polski', 'ben_is_back', 'FILMFINITY', 'hollywood', 2018, '13-17', '103 min', 4),
(3, 'After', 16, 'Good girl Tessa meets the rebellious Hardin in her first semester at college. The couple\'s rocky relationship causes Tessa to question what she knows about herself and her ambitions. Based on the bestselling novel by Anna Todd.', 'Drama', 0.1, 3, 'USA', 'English', 'after', 'FILMFINITY', 'hollywood', 2019, '13-17', '104 min', 50),
(4, 'Harriet', 13, 'Harriet Tubman escaped slavery and became one America\'s greatest heroes after freeing hundreds of slaves and changing the course of history. This is her story.', 'Drama', 2.5, 0, 'Canada', 'English/Polski', 'harriet', 'NBC', 'hollywood', 2019, '13-17', '125 min', 2),
(5, 'The Nightingale', 18, 'Set in 1825, Clare, a young Irish convict woman, chases a British officer through the rugged Tasmanian wilderness, bent on revenge for a terrible act of violence he committed against her family.', 'Drama', 2.5, 0, 'New Zeland', 'English/German/Espaňa', 'the_nightingale', 'FILMFINITY', 'hollywood', 2018, '18-plus', '136 min', 2),
(6, 'Hunter Killer', 16, 'American submarine Captain Joe Glass teams up with an elite group of Navy SEALs to rescue the kidnapped Russian president and prevent the outbreak of WWIII.', 'Action', 0, 0, 'Great Britain', 'English/Czech/German/Polski', 'hunter_killer', 'EMPIRE', 'hollywood', 2018, '13-17', '121 min', 0),
(7, 'Booksmart', 16, 'On the eve of their graduation, two high school girls realise they spent too much time working and too little time playing. They\'re determined to make up for lost time by cramming as much fun as possible into one night.', 'Comedy', 0, 0, 'USA', 'English/German/Polski/Czech', 'booksmart', 'FILMFINITY', 'hollywood', 2019, '13-17', '102 min', 0),
(8, 'Galveston', 16, 'After escaping a setup, a dying hitman returns to his hometown of Galveston where he plans his revenge.', 'Crimi', 3, 0, 'USA', 'English/German/Polski/Czech', 'galveston', 'FILMFINITY', 'hollywood', 2018, '13-17', '91 min', 5),
(9, 'The Addams Family', 10, 'The macabre Addams family moves into a boring, \"normal\" neighbourhood in this animated adaptation. Wednesday befriends the daughter of a reality TV show host who isn\'t thrilled about their friendship.', 'Comedy', 5, 0, 'USA', 'English/German/Polski/Czech', 'the_addams_family', 'MGM', 'hollywood', 2019, '10-plus', '25 min', 1),
(10, 'Extremely Wicked, Shockingly Evil and Vile', 16, 'The story about Ted Bundy, told from the perspective of his long-time girlfriend Elizabeth Kloepfer, who refused to believe he was a serial killer.', 'Crimi', 3, 0, 'USA', 'English/German/Polski/Czech', 'extremely_wicked', 'FILMFINITY', 'hollywood', 2019, '13-17', '108 min', 2),
(11, 'Between Worlds', 18, 'Joe meets a mother who can contact spirits when suffocating. Her daughter is dying when Joe helps the mother spiritually contact the daughter and save her.', 'Mysterious', 0, 0, 'USA', 'English/German/Polski/Czech', 'between_worlds', 'FILMFINITY', 'hollywood', 2019, '18-plus', '90 min', 0),
(12, 'Playing With Fire', 10, 'A team of expert firefighters quickly learns that children are harder to control than wildfires after coming to the rescue of three rambunctious kids. With John Cena and Keegan-Michael Key.', 'Comedy', 0.75, 0, 'USA', 'English/German/Polski/Czech', 'playing_with_fire', 'PARAMOUNT', 'hollywood', 2019, '10-plus', '96 min', 4),
(13, 'Destroyer', 16, 'A police detective reconnects with people from an undercover assignment in her distant past in order to make peace.', 'Action', 5, 0, 'USA', 'English/German/Polski/Czech', 'destroyer', 'FILMFINITY', 'hollywood', 2018, '13-17', '121 min', 1),
(14, 'Bombshell', 16, 'Based on true events, Bombshell looks at the toxic atmosphere of Fox news and tells the story of the women who brought down the media empire\'s founder. Starring Charlize Theron, Nicole Kidman and Margot Robbie.', 'Biographical', 0, 0, 'Canada', 'English/German/Polski/Czech', 'bombshell', 'FILMFINITY', 'hollywood', 2019, '13-17', '108 min', 0),
(15, 'Viceroy\'s House', 13, 'Lord Mountbatten and his wife, Edwina, are sent to New Delhi to oversee India\'s transition from British rule to independence. Expecting a peaceful process, Mountbatten is met with conflict that threatens to tear the country apart.', 'Drama', 1, 0, 'India', 'English/German/Polski/Czech', 'viceroys_house', 'VIDEOVISION', 'hollywood', 2017, '13-17', '106 min', 5),
(16, 'Ma', 16, 'Oscar-winner Octavia Spencer plays Sue Ann, a lonely woman who invites a group of teens to party in the basement of her house under strict rules. Soon the youngsters find themselves in a terrifying situation.', 'Horor', 0, 0, 'USA', 'English/German/Polski/Czech', 'ma', 'NBC', 'hollywood', 2019, '13-17', '99 min', 0),
(17, 'Anna', 16, 'Beneath Anna Poliatova\'s striking beauty lies a secret that will unleash her indelible strength and skill to become one of the world\'s most feared government assassins.', 'Action', 0, 0, 'France', 'English/German/Polski/Czech', 'anna', 'EMPIRE', 'hollywood', 2019, '13-17', '118 min', 0),
(18, 'Joko ya Hao', 13, 'During the 1955 forced evictions, Noziziwe, an aspiring preacher who fails to be ordained as a pastor because she\'s a woman, becomes a symbol of resistance and an anchor for the oppressed.', 'Short', 4, 0, 'South African Republic', 'English/German/Polski/Czech', 'joko_ya_hao', 'BLACK BRAIN PICTURES', 'mzansi', 2020, '13-17', '38 min', 10),
(19, 'Five Feet Apart', 13, 'Two teens both suffering from cystic fibrosis meet while in hospital and feel an instant attraction. As they grow closer they struggle to maintain the physical distance their disease requires them to.', 'Drama', 2.5, 0, 'USA', 'English/German/Polski/Czech', 'five_feet_apart', 'NBC', 'hollywood', 2019, '13-17', '117 min', 2),
(20, 'Abominable', 7, 'Three teenagers encounter a young Yeti and want to help him find his way back home to the highest point on Earth. But a cunning businessman and an evil zoologist, who want the Yeti for themselves, are hot on their heels.', 'Animated', 0, 0, 'USA', 'English/German/Polski/Czech', 'abominable', 'NBC', 'hollywood', 2019, '7-plus', '97 min', 0),
(21, 'Us', 16, 'A family\'s beach holiday turns into a terrifying nightmare when their doppelgangers show up in the middle of the night and begin to terrorise them. Starring Lupita Nyong\'o, Winston Duke and Elisabeth Moss.', 'Horor', 0, 0, 'USA', 'English/German/Polski/Czech', 'us', 'NBC', 'hollywood', 2019, '13-17', '121 min', 0),
(22, 'Little', 13, 'When adulting becomes harder than tech entrepreneur Jordan can handle, she gets a chance to relive her carefree days as a 13-year-old girl.', 'Comedy', 0, 0, 'USA', 'English/German/Polski/Czech', 'little', 'NBC', 'hollywood', 2019, '13-17', '109 min', 0),
(23, 'The Secret Life of Pets 2', 7, 'Those sneaky pets are back. In the sequel, dog Max has to face his irrational fear of something bad happening to his owners\' toddler while feisty bunny Snowball wants to prove he\'s a hero by rescuing a tiger from the circus.', 'Animated', 0, 0, 'USA', 'English/German/Polski/Czech', 'the_secret_life_of_pets_2', 'NBC', 'hollywood', 2019, '7-plus', '86 min', 0),
(24, 'Fighting With My Family', 13, 'The heartwarming true story of WWE Superstar Paige. Growing up in a wrestling-obsessed family, she wanted nothing more than to be part of WWE. One day she gets a shot to make that happen, but it\'s tougher than she ever expected.', 'Comedy', 0, 0, 'Great Britain', 'English/German/Polski/Czech', 'fighting_with_my_family', 'MGM', 'hollywood', 2019, '13-17', '108 min', 0),
(25, 'Gemini Man', 13, 'Will Smith plays Henry Brogan, an ageing hitman pursued by a mysterious young operative who seems to know Henry\'s every move.', 'Action', 0, 0, 'USA', 'English/German/Polski/Czech', 'gemin_man', 'PARAMOUNT', 'hollywood', 2019, '13-17', '117 min', 0),
(26, 'Skin', 16, 'A white supremacist decides to leave hatred and violence behind. He reforms his life with the help of his new wife and a black activist. But his former gang members aren\'t too happy about his departure.', 'Drama', 2.6666666666667, 0, 'Canada', 'English/German/Polski/Czech', 'skin', 'FILMFINITY', 'hollywood', 2020, '13-17', '110 min', 6),
(27, 'Escape Plan 2: Hades', 16, 'Having established a top-notch security force, Ray Breslin is forced to return to the impenetrable prison he once escaped from when one of his team members goes missing.', 'Action', 0, 0, 'USA', 'English/German/Polski/Czech', 'escape_plan_hades_2', 'FILMFINITY', 'hollywood', 2018, '13-17', '93 min', 0),
(28, 'Brad\'s Status', 13, 'When Brad takes his son on a college tour in Boston, he can\'t help but compare his comfortable life to the high-flying lives of his college buddies. He begins to question his life choices.', 'Musical', 0, 0, 'USA', 'English/German/Polski/Czech', 'brads_status', 'FILMFINITY', 'hollywood', 2017, '13-17', '102 min', 0),
(29, 'Good Boys', 16, 'Three boys skip school intending to replace a drone they destroyed. Instead, they find themselves mixed up with drugs and cops and being chased by some terrifying girls. Some adult themes, so this one\'s not for kids.', 'Comedy', 3.6666666666667, 0, 'USA', 'English/German/Polski/Czech', 'good_boys', 'NBC', 'hollywood', 2019, '13-17', '90 min', 3),
(30, 'Spud 2 : The Madness Continues', 13, 'Spud faces his second year of boarding school. He\'s matured a lot - but his body is still catching up. Starring Troye Sivan and the legendary John Cleese.', 'Comedy', 1.4285714285714, 0, 'South African Republic', 'English/German/Polski/Czech', 'spud_2', 'mnet101', 'mnet', 2013, '13-17', '90 min', 7),
(31, 'Spud 3: Learning To Fly', 13, 'As Spud Milton continues his awkward stagger through adolescence, he learns one of life\'s most important lessons: When dealing with women and cretins, nothing is ever quite as it seems.', 'Comedy', 0, 0, 'South African Republic', 'English/German/Polski/Czech', 'learning_to_fly_spud_3', 'mnet101', 'mnet', 2014, '13-17', '100 min', 0),
(32, 'Time Freak', 13, 'After being dumped by his beautiful girlfriend, physics genius Stillman develops a timeline of their relationship and a time machine so that he can go back in time to fix all the mistakes he made in the past.', 'Comedy', 0, 0, 'USA', 'English/German/Polski/Czech', 'time_freak', 'FILMFINITY', 'hollywood', 2018, '13-17', '104 min', 0),
(33, 'Boy Erased', 16, 'The son of a Baptist preacher is forced to participate in a church-supported gay conversion program after being forcibly outed to his parents.', 'Biographical', 0, 0, 'USA', 'English/German/Polski/Czech', 'boy_erased', 'NBC', 'hollywood', 2018, '13-17', '115 min', 0),
(34, 'Dumplin\'', 13, 'Dumplin, a plus-size teenager, enters her ex-beauty-queen mother\'s pageant as a protest and inspires others to follow in her footsteps. Starring Jennifer Aniston.', 'Comedy', 0.5, 0, 'USA', 'English/German/Polski/Czech', 'dumplin', 'FILMFINITY', 'hollywood', 2018, '13-17', '109 min', 2),
(35, 'The Hitman\'s Bodyguard', 16, 'The world\'s top bodyguard gets a new client, a hitman who must testify at the International Criminal Court. They must put their differences aside and work together to make it to the trial on time.', 'Action', 2.5, 0, 'USA', 'English/German/Polski/Czech', 'the_hitmans_bodyguard', 'TIMESMEDIA', 'hollywood', 2017, '13-17', '118 min', 2),
(36, 'Crawl', 16, 'A young woman, while attempting to save her father during a category 5 hurricane, finds herself trapped in a flooding house and must fight for her life against alligators.', 'Horor', 0.5, 0, 'USA', 'English/German/Polski/Czech', 'crawl', 'PARAMOUNT', 'hollywood', 2019, '13-17', '87 min', 2),
(37, 'Yesterday', 13, 'During a mysterious blackout, a struggling musician is run over. When he wakes up he discovers that he\'s the only one who\'s heard of The Beatles and makes it his mission to bring their music to the world.', 'Comedy', 0, 0, 'Great Britain', 'English/German/Polski/Czech', 'yesterday', 'NBC', 'hollywood', 2019, '13-17', '116 min', 0),
(38, 'The Loft House', 16, 'As a little boy, he witnessed his mother\'s suicide. Now a man, Boet ends up back in his father\'s house, facing the demons of his past, his identity and his failed expectations.', 'Drama', 3, 0, 'South Africa', 'English/German/Polski/Czech', 'the_loft_house', 'MiclnGrace Studios', 'mzansi', 2018, '13-17', '118 min', 2),
(39, 'Girl from Nowhere', 16, 'A Cape Town couple, Katherine and Hugh, are headed to their mountain getaway, when they pick up a young woman hitchhiker, Liza, who carries a gun and may or may not be the devil herself.', 'Crimi', 5, 0, 'Thailand', 'English/German/Polski/Czech', 'girl_from_nowhere', 'JACKSON FILMS', 'mzansi', 2017, '13-17', '50 min', 1),
(40, 'The Letter Reader', 13, 'A moving local film about a 12-year-old boy named Siyabonga who is sent to live with his grandmother in a village in KwaZulu-Natal. He finds his place in the community by reading letters to the villagers.', 'Drama', 0.33333333333333, 0, 'South African Republic', 'English/German/Polski/Czech', 'the_letter_reader', 'INDIGENOUS', 'mzansi', 2018, '13-17', '30 min', 3),
(41, 'Parable', 16, 'While trying an extreme form of conversion therapy, a preacher summons an evil demon - one that\'s intent on triggering a mass suicide. The pastor must keep the demon contained - but there\'s a posse coming to set it free.', 'Horor', 0, 0, 'USA', 'English/German/Polski/Czech', 'parable', 'mnet101', 'mnet', 2020, '13-17', '98 min', 0),
(42, 'The Lifesaver', 16, 'Based on true events, this film follows Vuyo, who always dreamed of one day becoming a lifesaver. As a young adult he made poor decisions that landed him in prison. But then he found Jesus and saved lives in a different way.', 'Drama', 0, 0, 'USA', 'English/German/Polski/Czech', 'the_lifes_a_ver', 'CHRISTIAN VISON PTY LTD', 'mzansi', 2019, '13-17', '112 min', 0),
(43, 'Skemerson', 13, 'A young man battling mental illness decides he\'s going to kill himself by jumping off the Bloukrans bridge. On the bridge he meets someone who sets his life on a completely different path.', 'Drama', 0, 0, 'South Africa', 'English/German/Polski/Czech', 'skemerson', 'mnet101', 'kyknet', 2018, '13-17', '87 min', 0),
(44, 'Frank & Fearless', 13, 'Leon Schuster returns! This time he\'s an aging rascal who teams up with a young boy, a Rottweiler, and an orphaned baby rhino to put a stop to rhino poaching in South Africa.', 'Comedy', 0, 0, 'South Africa', 'English/German/Polski/Czech', 'frank_and_fearless', 'mnet101', 'mzansi', 2018, '13-17', '97 min', 0),
(45, 'The Hustle', 13, 'Rebel Wilson and Anne Hathaway is a hilarious on-screen duo. They play a pair of con women who prey on men who\'ve done women wrong in the past.', 'Comedy', 0, 0, 'USA', 'English/German/Polski/Czech', 'the_hustle', 'MGM', 'hollywood', 2019, '13-17', '94 min', 0),
(46, 'Mile 22', 18, 'A highly specialised CIA operative is tasked with transporting a police officer who holds life-threatening information out of Indonesia, and then to extract that information before the enemy reaches them.', 'Action', 0, 0, 'USA', 'English/German/Polski/Czech', 'mile_22', 'EMPIRE', 'hollywood', 2018, '18-plus', '94 min', 0),
(47, 'Aquaman', 13, 'Jason Momoa stars as Arthur Curry, also known as Aquaman, in this visually stunning adventure film. He goes on a life-changing quest to prevent a potentially devastating war.', 'Action', 0, 0, 'USA', 'English/German/Polski/Czech', 'aquaman', 'WARNER', 'hollywood', 2018, '13-17', '143 min', 0),
(48, 'Shazam!', 10, 'A newly fostered young boy in search of his mother instead finds unexpected superpowers and soon gains a powerful enemy.', 'Action', 0, 0, 'USA', 'English/German/Polski/Czech', 'shazam', 'WARNER', 'hollywood', 2019, '10-plus', '132 min', 0),
(49, 'Second Act', 16, 'A big box store worker reinvents her life and her life-story and shows Madison Avenue what street smarts can do.', 'Romantic', 5, 0, 'USA', 'English/German/Polski/Czech', 'second_act', 'EMPIRE', 'hollywood', 2018, '13-17', '98 min', 1),
(50, 'Bad Education', 13, 'Roslyn Schools Superintendent Frank Tassone and his assistant Pam work together to put the district on the map. However, a school reporter uncovers an embezzlement scheme, which threatens their reign. Inspired by true events.', 'Biographical', 0, 0, 'Brazil', 'English/German/Polski/Czech', 'bad_education', 'HBO', 'hollywood', 2020, '13-17', '108 min', 0),
(51, 'Pokémon Detective Pikachu', 7, 'When detective Harry Goodman goes missing, his son teams up with Harry\'s former Pokemon partner, Detective Pikachu, to find him.', 'Action', 0, 0, 'USA', 'English/German/Polski/Czech', 'pokemon_detective_pikachu', 'WARNER', 'hollywood', 2019, '7-plus', '104 min', 0),
(52, 'The House with a Clock in Its Walls', 10, 'Jack Black and Cate Blanchett star in this magical adventure about a 10-year-old boy who goes to live with his uncle in a strange old house. There, he manages to wake the dead.', 'Fantasy', 0.5, 0, 'USA', 'English/German/Polski/Czech', 'the_house_with_a_click_in_its_walls', 'EMPIRE', 'hollywood', 2018, '10-plus', '105 min', 2),
(53, 'Kung Fu Panda 2', 7, 'Now living his dream as the Dragon Warrior, Po must look at his origins to find the strength he needs to fight off a villain with sinister plans for Po\'s village.', 'Animated', 2, 0, 'USA', 'English/German/Polski/Czech', 'kung_fu_panda_2', 'PARAMOUNT', 'hollywood', 2011, '10-plus', '87 min', 3),
(54, 'Daddy\'s Home', 13, 'Mark Wahlberg and Will Ferrell go head to head in this slapstick comedy about a radio host trying desperately to win over his stepkids. But his efforts are thwarted when their biological father rocks up on the scene.', 'Comedy', 0, 0, 'USA', 'English/German/Polski/Czech', 'daddys_home', 'PARAMOUNT', 'hollywood', 2015, '13-17', '96 min', 0),
(55, 'World War Z', 13, 'Gerry is trying to get his family home when a zombie outbreak turns things upside down. Now he has to find the source of the infection in this non-stop thrill ride starring Brad Pitt.', 'Horor', 0, 0, 'USA', 'English/German/Polski/Czech', 'world_war_z', 'PARAMOUNT', 'hollywood', 2013, '13-17', '116 min', 0),
(56, 'Bee Movie', 5, 'Barry B Henson is a bee with big dreams now that he\'s finished college. He leaves the hive and befriends a human, only to discover that humans eat honey. He decides to sue the human race for stealing honey from the bees.', 'Animated', 3, 0, 'USA', 'English/German/Polski/Czech', 'bee_movie', 'PARAMOUNT', 'hollywood', 2007, '5-plus', '90 min', 0),
(57, 'Crossing the Line', 10, 'Relive the highly controversial 2018 Australian cricket Tour to South Africa; five weeks that rocked the gentleman’s game and captivated the globe.', 'Short', 5, 0, 'USA', 'English/German/Polski/Czech', 'crossing_the_line', 'SUPERSPORT', 'sport', 2018, '10-plus', '12 min', 1),
(58, 'A Star Is Born', 16, 'In this multiple award-winning remake, Bradley Cooper stars as alcoholic musician Jack who discovers and falls in love with a young singer named Ally, played by Lady Gaga. As her fame rises, his career plunges into disarray.', 'Drama', 0, 0, 'USA', 'English/German/Polski/Czech', 'a_star_is_born', 'WARNER', 'hollywood', 2018, '13-17', '136 min', 0),
(59, 'Madagascar: Escape 2 Africa', 7, 'On their way back to New York, the Madagascar crew crash-land in an African nature reserve where they have to fend for themselves... again. Alex the Lion discovers what it means to be king of the jungle.', 'Animated', 0, 0, 'USA', 'English/German/Polski/Czech', 'madagascar_2', 'PARAMOUNT', 'hollywood', 2009, '7-plus', '86 min', 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `Preference`
--

CREATE TABLE `Preference` (
  `ID_Pre` int NOT NULL,
  `input` text NOT NULL,
  `ID_mov` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Vypisuji data pro tabulku `Preference`
--

INSERT INTO `Preference` (`ID_Pre`, `input`, `ID_mov`) VALUES
(1, 'Duffi', 7),
(2, 'Duffi', 5),
(3, 'Duffi', 48),
(4, 'Duffi', 36),
(5, 'Duffi', 12),
(6, 'Hero', 28),
(7, 'Hero', 51),
(8, 'Hero', 2),
(9, 'Hero', 29),
(10, 'Hero', 37),
(11, 'Kulda', 55),
(12, 'Kulda', 47),
(13, 'Kulda', 24),
(14, 'Kulda', 27),
(15, 'Kulda', 18),
(16, 'Kulisek', 19),
(17, 'Kulisek', 49),
(18, 'Kulisek', 1),
(19, 'Kulisek', 53),
(20, 'Kulisek', 9),
(21, 'LightHammer', 48),
(22, 'LightHammer', 49),
(23, 'LightHammer', 52),
(24, 'LightHammer', 13),
(25, 'LightHammer', 38),
(26, 'LightHammer', 57),
(27, 'LightHammer', 56),
(28, 'LightHammer', 53),
(29, 'LightHammer', 29);

-- --------------------------------------------------------

--
-- Struktura tabulky `Rating`
--

CREATE TABLE `Rating` (
  `ID_rating` int NOT NULL,
  `login` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `User`
--

CREATE TABLE `User` (
  `ID_User` int NOT NULL,
  `login` varchar(500) NOT NULL,
  `passwd` varchar(1000) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `age` int NOT NULL,
  `preferences` text NOT NULL,
  `favorites` text NOT NULL,
  `history` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Vypisuji data pro tabulku `User`
--

INSERT INTO `User` (`ID_User`, `login`, `passwd`, `mail`, `age`, `preferences`, `favorites`, `history`) VALUES
(1, 'LightHammer', '15874685hfg', 'Light@hammer.com', 24, 'Drama/Comedy/Action', '', ''),
(2, 'Alladin', 'hjtlfkdj58468', 'Alla@din.com', 15, '', '', ''),
(3, 'Terranova', '45dfg564gsd56g', 'Terranova@gmail.com', 17, '', '', ''),
(4, 'Duffi', 'g56s5d456sdf456', '', 30, '', '', ''),
(5, 'Hero', 'dfvbsdf', '', 20, '', '', ''),
(6, 'Kulisek', '54sdf', '', 15, '', '', '');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `Friends`
--
ALTER TABLE `Friends`
  ADD PRIMARY KEY (`ID_Friendship`);

--
-- Klíče pro tabulku `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`ID_movie`);

--
-- Klíče pro tabulku `Preference`
--
ALTER TABLE `Preference`
  ADD PRIMARY KEY (`ID_Pre`);

--
-- Klíče pro tabulku `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`ID_rating`);

--
-- Klíče pro tabulku `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `Friends`
--
ALTER TABLE `Friends`
  MODIFY `ID_Friendship` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `Movies`
--
ALTER TABLE `Movies`
  MODIFY `ID_movie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pro tabulku `Preference`
--
ALTER TABLE `Preference`
  MODIFY `ID_Pre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pro tabulku `Rating`
--
ALTER TABLE `Rating`
  MODIFY `ID_rating` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `User`
--
ALTER TABLE `User`
  MODIFY `ID_User` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
