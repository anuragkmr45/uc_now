-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 06:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uncovercampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `id` int(11) NOT NULL,
  `admin` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`id`, `admin`, `password`) VALUES
(2, 'a', 'a'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `campus_img` varchar(200) NOT NULL,
  `owner_nm` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `op_cl_time` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `decr` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `type`, `name`, `campus_img`, `owner_nm`, `location`, `phone`, `op_cl_time`, `mail`, `status`, `decr`) VALUES
(1, 'Salon', 'ramu salon', 'itachi_uchiha_wallpaper__2_by_morpening_dc6a61m-fullview.jpg', 'ramuu', '112/24 a ,Rawatpur Gaon , Anandnagar,kanpur', 9076782112, '8 am - 8 pm', 'gffg@gmail.com', 'on', 'This is better that the one near your house . I can bet you'),
(2, 'Mall', 'ramu mall', '419483.jpg', 'de', '23/99 ,Rawatpur gaou, kanpur', 7505737630, '5 am - 8 pm', 'sarthakbakshii@gmail.com', 'on', ''),
(3, 'Health', 'jaan health care', '872922.jpg', 'ramu datta', 'Maswanpur,kanpur', 7505737630, '5 am - 8 pm', 'admin@gmail.com', 'off', ''),
(4, 'Restaurant', 'Sarthak Ramen', 'Itachi-Uchiha-Wallpapers-Top-Free-Itachi-Uchiha-.jpg', 'Sarthak Bakshi', '22/12 a,kakadeo,kanpur', 7505737630, '5 am - 8 pm', 'sarthakbakshii@gmail.com', 'on', 'This is the best Ramen store in the kanpur');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(20) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `college_img` varchar(500) NOT NULL,
  `courses` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `fees` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `speciality` varchar(60) NOT NULL,
  `rating` float NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `college_img`, `courses`, `location`, `fees`, `description`, `speciality`, `rating`, `category`) VALUES
(1, 'Maharana Pratap', 'college_finderamity.jpg', 'B.E/B.Tec,MBA,BBA,BCA', 'Uttar Pradesh,Kanpur', '4 lacs', 'Well done! Now you know how to select single columns.\r\n\r\nIn the real world, you will often want to select multiple columns. Luckily, SQL makes this really easy. To select multiple columns from a table, simply separate the column names with commas!\r\n\r\nFor example, this query selects two columns, name and birthdate, from the people table:', 'BTec.', 7, 'Designing'),
(2, 'Indian Institute of Technology,Kanpur-(IIT-K)', 'mpc.jpg', 'B.E/B.TEC', 'Uttarpradesh,Kanpur', '1.5 lacs', 'IIT Kanpur was established by an Act of Parliament in 1959. The institute was started in December 1959 in a room in the canteen building of the Harcourt Butler Technological Institute at Agricultural Gardens in Kanpur. In 1963, the institute moved to its present location, on the Grand Trunk Road near the locality of Kalyanpur in Kanpur district.[5] The campus was designed by Achyut Kavinde in a modernist style.                                                                                       During the first ten years of its existence, a consortium of nine US universities (namely MIT, UCB, California Institute of Technology, Princeton University, Carnegie Institute of Technology, University of Michigan, Ohio State University, Case Institute of Technology and Purdue University) helped set up IIT Kanpur\'s research laboratories and academic programmes under the Kanpur Indo-American Programme (KIAP).                                            [6] The first director of the institute was P. K. Kelkar (after whom the Central Library was renamed in 2002).[7]', 'Btech.(Mechanical)', 9, 'Architecture'),
(3, 'Indian Institute of Management,Nagpur -(IIM-N)', 'iim.jpeg', 'MBA/PGDM', 'Maharastra,Nagpur', '10 lacs ', '', 'MBA', 8.9, 'engineering'),
(4, 'Amity University', 'college.jpeg', 'B.E/B.Tec,MBA,BBA,BCA,B.A honors,B.com Honors', 'Uttar Pradesh,Kanpur', '2 lacs', '', 'BTec.', 7, 'management'),
(5, 'Chandigarh University', 'chandigarh.jpg', 'BCA,BTec,', 'Chandigarh,Punjab', '3 lacs', '                                        \r\n\r\n    The name of the university is inspired by The City Beautiful – Chandigarh, known as the epitome of cultural heritage and urbanization.\r\n    Chandigarh University offers a unique and inspirational academic model designed to match the international standards. A wide spectrum of programs is paired with flexibility, experiential learning and interdisciplinary orientation.\r\n    CU is involved in world-class research, with outstanding results in the contemporary research excellence framework.\r\n    The University has a dynamic academic fraternity drawn from top universities nationally and internationally. CU offers the most conducive student-faculty ratio of 14:1, leading to 85 per cent student satisfaction.\r\n    Chandigarh University provides a global perspective to facilitate the students with international learning opportunities, through partnerships with more than 306+ top-ranked universities worldwide.\r\n    Our students come from all 28 Indian states, 9 Union Territories and 40 Nations with more than 65% of them coming from other states and Countries. Thus CU has a cosmopolitan, friendly and inclusive atmosphere.\r\n    As a student-centric university, CU provides optimal learning experiences and services that lead to student success. We empower our students to take responsibility for their academic work, social life and career development.\r\n    CU has state-of-the--art technology integrated into every domain of the university from in-house designed and implemented university information management systems (CUIMS) coupled with the world-renowned Blackboard LMS to high-speed internet access all around the campus, we are driven by technology.\r\n    Chandigarh University is a not-for-profit university that is underpinned by ethical, professional and transparent e-governance, involving the students and staff in the creation of a healthy, vibrant and sustainable society.\r\n\r\n                     \r\n                                        \r\n                   ', 'BCA', 9, 'Computer Applications'),
(10, 'Kanpur Institute of Technology', 'kit.jpg', 'Btec,BSc. , Bpharma.', 'kanpur,U.P', '1.5 lacs', 'Kanpur Institute of Technology (KIT) was established in 2004 by the team of IIT alumni. The college is approved by All India Council for Technical Education (AICTE) and Pharmacy Council of India (PCI). It is affiliated to Dr APJ Abdul Kalam Technical University, Lucknow (Formerly UP Technical University). KIT is a member of The Indian Society of Technical Education (ISTE).\r\n\r\nIn 2011, the college is awarded as the most promising engineering college and has been awarded the “Education Excellence Award”. KIT was also nominated amongst India’s best college in an exclusive survey by India Today.', 'Bpharma', 8, 'Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(50) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `exam_details_short` varchar(150) NOT NULL,
  `exam_details_full` mediumtext NOT NULL,
  `tags` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `exam_authority` varchar(60) NOT NULL,
  `exam_cycle` varchar(60) NOT NULL,
  `application_mode` varchar(60) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_mode` varchar(60) NOT NULL,
  `courses` varchar(60) NOT NULL,
  `release_date` date NOT NULL,
  `last_register` date NOT NULL,
  `last_fee` date NOT NULL,
  `correction` date NOT NULL,
  `admit_date` date NOT NULL,
  `result_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `exam_details_short`, `exam_details_full`, `tags`, `category`, `exam_authority`, `exam_cycle`, `application_mode`, `exam_date`, `exam_mode`, `courses`, `release_date`, `last_register`, `last_fee`, `correction`, `admit_date`, `result_date`) VALUES
(1, 'NEET Exam 2021', 'The National Eligibility cum Entrance Test (Undergraduate), formerly the All India Pre-Medical Test,', '  \r\n                     \r\n                     \r\n               NEET is the only national level exam for admission in MBBS, BDS, AYUSH, Veterinary, etc courses in India. NEET 2021 to be conducted in 11 languages once this year. All the important details like type of questions, pattern of exam, etc will be released with NEET 2021 official brochure. Check NEET Exam Pattern\r\n                     \r\n                     \r\n                   ', 'NEET', 'Medical', 'CBSE', 'annually', 'online only', '2021-08-01', 'Computer-based Test', 'MBBS, BDS, BUMS, BAMS, BHMS, BSMS, BNYS, etc.', '2021-04-12', '2021-05-10', '2021-05-21', '2021-05-03', '2021-07-05', '2021-08-23'),
(2, 'IIT JEE 2021', 'JEE Main is a National level test conducted for B.E./BTech and B.Arch admissions after class 12.', '\r\n    NEET is mandatory for Indian/Overseas candidates for admission to a medical University in India.\r\n    Age Limit: General- 17 to 25 years (on or before 31st December of the same year) SC/ST/OBC/PWD – 17 to 30 years\r\n    All India Quota seats: Foreign nationals and Overseas Citizen of India (OCI), NRIs, Person of Indian Origin (PIO) is entitled to the reservation under 15% All India Quota seats. J & K candidates are not eligible for 15% All India Quota seats.\r\n    Qualification: The candidate who is appearing or has appeared in the 12th may apply for NEET. Their admission is confirmed only after clearing the 12th exam.\r\n        -Passed B.Sc. with any two of the Physics, Chemistry, Biology (Botany, Zoology)/Bio-technology from an Indian University.\r\n        -Passed the first year of the University\'s three years\' degree course in PCB\r\n    Number of Attempts – Candidates can attempt NEET as many times as they wish until they attain the maximum age limit.\r\n', 'JEE', 'Engineering', '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 'CAT Entrence Exam 2021', 'CAT exam is a highly competitive exam and almost a quarter of a million students appear for it every year. ', 'CAT exam registration is only available online. The application form is released by the conducting IIM on the official CAT website and applicants are required to fill out the details. The CAT 2021 registration is expected to start from August 1st week and will continue till September last week. A correction window will also be available later. It is important for the candidates to be careful while filling in the details as any discrepancies later may result in the cancellation of the complete application. The complete details about the registration process are available in the linked article.', 'CAT', 'Management', '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 'IGRAU entrence', 'The IGRUA exam is a national level entrance exam conducted', 'The IGRUA exam is a national level entrance exam conducted by the Indira Gandhi Rashtriya Uran Akademi. The exam is conducted for admission in the Commercial Pilot License (CPL) course and B.Sc (Aviation) degree offered by IGRUA. The question paper of the IGRUA entrance examination is divided into five sections namely English, Mathematics, Reasoning, Physics and General Awareness. The total duration of the examination is 2 hours and it will contain objective type questions. Major highlights of the IGRUA entrance examination is provided below.', '', 'Aviation', '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 'GPAT', 'Graduate Pharmacy Aptitude Test 2021 is a national level entrance exam', '  \r\n            GPAT 2021 or the Graduate Pharmacy Aptitude Test 2021 is a national level entrance exam which allows candidates to take admission in to M. Pharma courses in colleges and institutes approved by the AICTE in India. GPAT 2021 will be conducted by the National Testing Agency or the NTA. GPAT 2021 exam is scheduled to happen on January 28, 2021.\r\n                   ', '', 'Pharmacy', 'NTA (National Testing Agency)', 'annually', 'online only', '2021-02-27', 'online', 'M.Pharma/  Integrated PhD', '2020-12-23', '2021-01-30', '2021-01-31', '2021-02-03', '2021-02-14', '2021-03-19'),
(8, 'NIPER JEE', 'NIPER JEE 2021 is a national level exam which offers M. Pharm, M. Tech (Pharm), MBA (Pharm) and Ph.D', 'National Institute of Pharmaceutical Education and Research Joint Entrance Exam 2021 or NIPER JEE 2021 is a national level exam which offers M. Pharm, M. Tech (Pharm), MBA (Pharm) and Ph.D. in pharmacy across its seven campuses all over India. The exam is conducted by the National Institute of Pharmaceutical Education and Research, Mohali.\r\n\r\nThe exam duration is of two hours and is conducted in the English medium. NIPER JEE 2021 comprises 200 multiple-choice questions (MCQs). Each correct answer is awarded 1 mark and thereâ€™s a negative marking of 0.25 mark for every wrong answer.', '', 'Pharmacy', '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, 'BITSAT', 'Birla Institute of Technology and Science Admission Test (University-based National Level Exam)', '      \r\n                   BITS Pilani has released BITSAT 2021 notification along with the official brochure. BITSAT 2021 is scheduled to be conducted between June 24 to June 30. Interested candidates can fill BITSAT 2021 Application Form on the official website from February 23 to May 29.', '', 'Engineering', 'BITS Pilani', 'Once a year', 'Online', '0000-00-00', 'Computer-based Test', 'B.E. , B.Pharma, MSc.', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `id` int(11) NOT NULL,
  `pr_name` varchar(200) DEFAULT NULL,
  `rent` int(11) DEFAULT NULL,
  `last_entry` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `owner_name` varchar(200) DEFAULT NULL,
  `owner_ph` bigint(20) DEFAULT NULL,
  `owner_mail` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `bed_no` int(11) DEFAULT NULL,
  `room_facilities` varchar(200) DEFAULT NULL,
  `house_rules` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT 'off',
  `pg_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`id`, `pr_name`, `rent`, `last_entry`, `gender`, `owner_name`, `owner_ph`, `owner_mail`, `location`, `room_no`, `bed_no`, `room_facilities`, `house_rules`, `status`, `pg_img`) VALUES
(2, 'Sarthak Mansion', 3000, '4 am', 'male', 'sarthak bakshi', 9076782112, 'sar@gmail.com', 'Maswanpur,kanpur', 2, 2, 'fan,girls,aiyashi', 'no study,no praying', 'on', 'iim.jpeg'),
(3, 'Anikesh Towers', 10000, '3 am', 'Male', 'Anikesh Sharma', 858585858, 'ani@gmail.com', '116/32 civil lines, Kanpur', 1, 1, 'pub,party,swimming pool,girls ,fan', 'nothing', 'on', 'Screenshot (5).png'),
(5, 'IIT  kanpur', 45000, '5', '454', 'dfdf', 9876545654, 'anikeshsharma754@gmail.com', 'd', 0, 454, '454', '45g', 'on', 'vegetable.png'),
(6, 'IIT  kanpur', 45000, '8 pm', 'both', 'dfdf', 99343943430, 'anikeshsharma754@gmail.com', 'Uttar Pradesh,Lucknow', 0, 454, '454', '45g', 'on', 'amity.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pg`
--
ALTER TABLE `pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
