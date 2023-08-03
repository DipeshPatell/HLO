-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 11:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hlo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `Ad_ID` int(255) NOT NULL,
  `Ad_Fname` varchar(20) NOT NULL,
  `Ad_Lname` varchar(20) NOT NULL,
  `Ad_Email` varchar(40) NOT NULL,
  `Ad_Pwd` varchar(255) NOT NULL,
  `Ad_Created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Ad_Updated` timestamp NULL DEFAULT current_timestamp(),
  `Ad_Valid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`Ad_ID`, `Ad_Fname`, `Ad_Lname`, `Ad_Email`, `Ad_Pwd`, `Ad_Created`, `Ad_Updated`, `Ad_Valid`) VALUES
(1, 'bhargav', 'bhalara', 'bhalarabhargav@gmail.com', '123', '2021-03-17 06:04:01', '2021-03-17 06:04:01', 1),
(2, 'Jaimin', 'Babariya', 'jaiminbabariya@gmail.com', '123', '2023-07-23 06:07:01', '2023-07-23 06:07:01', 1),
(3, 'Dipesh', 'Golani', 'dipeshgolani226@gmail.com', '123', '2023-07-31 21:26:46', '2023-07-31 21:26:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ans_doc`
--

CREATE TABLE `ans_doc` (
  `Ans_ID` int(255) NOT NULL,
  `QueD_ID` int(255) DEFAULT NULL,
  `Doc_ID` int(255) DEFAULT NULL,
  `Ans_Text` varchar(2000) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ans_doc`
--

INSERT INTO `ans_doc` (`Ans_ID`, `QueD_ID`, `Doc_ID`, `Ans_Text`, `Created_At`) VALUES
(1, 3, NULL, ' it is not necessary that baby is getting the stomach ache after feeding but you should get in touch with your nearby doctor.', '2021-03-14 18:17:17'),
(2, 4, NULL, ' everything is okay and good in this world.\r\n', '2021-03-15 05:19:48'),
(3, 4, NULL, ' everything is okay and good in this world.\r\n', '2021-03-15 05:21:53'),
(4, 4, NULL, ' everything is okay and good in this world.\r\n', '2021-03-15 05:23:00'),
(5, 4, NULL, ' everything is okay and good in this world.\r\n', '2021-03-15 05:24:35'),
(6, 1, NULL, '                    this is not otay', '2021-03-15 05:25:31'),
(7, 1, NULL, '                    this is not otay', '2021-03-15 05:26:58'),
(8, 1, NULL, '                    this is not otay', '2021-03-15 05:34:48'),
(9, 1, NULL, '                    this is not otay', '2021-03-15 05:36:09'),
(10, 1, NULL, '                    this is not otay', '2021-03-15 05:37:54'),
(11, 1, NULL, '                    this is not otay', '2021-03-15 05:38:57'),
(12, 1, NULL, '                    this is not otay', '2021-03-15 05:39:02'),
(13, 1, NULL, '                    this is not otay', '2021-03-15 05:42:00'),
(14, 1, NULL, '                    this is not otay', '2021-03-15 05:42:03'),
(15, 1, NULL, '                    this is not otay', '2021-03-15 05:46:25'),
(16, 1, NULL, '                    this is not otay', '2021-03-15 05:46:56'),
(17, 1, NULL, '                    this is not otay', '2021-03-15 05:47:40'),
(18, 1, NULL, '                    this is not otay', '2021-03-15 05:47:57'),
(19, 1, NULL, '                    this is not otay', '2021-03-15 05:55:03'),
(20, 1, NULL, '                    this is not otay', '2021-03-15 05:55:08'),
(21, 1, NULL, '   this is not otay', '2021-03-15 06:00:33'),
(22, 1, NULL, '   this is not otay', '2021-03-15 06:06:13'),
(23, 1, NULL, '   this is not otay', '2021-03-15 06:10:53'),
(24, 1, NULL, '   this is not otay', '2021-03-15 06:13:10'),
(25, 1, NULL, '   this is not otay', '2021-03-15 06:16:00'),
(26, 1, NULL, '   this is not otay', '2021-03-15 06:18:47'),
(27, 1, NULL, '   this is not otay', '2021-03-15 06:24:14'),
(28, 1, NULL, '   this is not otay', '2021-03-15 06:25:28'),
(29, 1, NULL, '   this is not otay', '2021-03-15 06:27:02'),
(30, 1, NULL, '   this is not otay', '2021-03-15 06:32:22'),
(31, 1, NULL, '   this is not otay', '2021-03-15 06:33:02'),
(32, 1, NULL, '   this is not otay', '2021-03-15 06:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(100) NOT NULL,
  `User_ID` int(255) DEFAULT NULL,
  `User_Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `User_Email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Con_Sub` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Con_Text` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `User_ID`, `User_Name`, `User_Email`, `Con_Sub`, `Con_Text`) VALUES
(4, NULL, 'bhargav', 'bhalarabhargav@gmail.com', 'regarding all of the error\'s taking place in your system', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `doc_account`
--

CREATE TABLE `doc_account` (
  `Doc_ID` int(255) NOT NULL,
  `Doc_Name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Doc_Qualification` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Doc_Image` varchar(30) NOT NULL,
  `Doc_Certificate` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Doc_Experience` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Doc_Email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Doc_Address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Doc_Pwd` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Doc_Token` varchar(200) CHARACTER SET latin1 NOT NULL,
  `D_Valid` varchar(10) CHARACTER SET latin1 NOT NULL,
  `D_Created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_account`
--

INSERT INTO `doc_account` (`Doc_ID`, `Doc_Name`, `Doc_Qualification`, `Doc_Image`, `Doc_Certificate`, `Doc_Experience`, `Doc_Email`, `Doc_Address`, `Doc_Pwd`, `Doc_Token`, `D_Valid`, `D_Created`) VALUES
(35, 'dipesh', 'MBBS', 'upload/vector.jpg', 'upload/mbbscerti.png', '5', 'dipeshgolani226@gmail.com', 'new l.j collage of engineering', '202cb962ac59075b964b07152d234b70', '070ec410e83df9b1c0578f223327a1', 'active', '2023-08-01 02:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `post_info`
--

CREATE TABLE `post_info` (
  `Post_ID` int(255) NOT NULL,
  `Doc_ID` int(255) DEFAULT NULL,
  `Post_Img` varchar(255) NOT NULL,
  `Post_Head` varchar(200) NOT NULL,
  `Post_Txt` varchar(2000) NOT NULL,
  `P_Created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_info`
--

INSERT INTO `post_info` (`Post_ID`, `Doc_ID`, `Post_Img`, `Post_Head`, `Post_Txt`, `P_Created`) VALUES
(15, NULL, 'posts/hostel_fees_1.jpg', 'hii bhargav result ', 'finally i guess it is done ', '2021-03-14 07:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `que_doc`
--

CREATE TABLE `que_doc` (
  `QueD_ID` int(255) NOT NULL,
  `User_ID` int(255) DEFAULT NULL,
  `Que_Text` varchar(255) NOT NULL,
  `que_st` int(10) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Created_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que_doc`
--

INSERT INTO `que_doc` (`QueD_ID`, `User_ID`, `Que_Text`, `que_st`, `age`, `gender`, `Created_AT`) VALUES
(1, NULL, ' hii i am bhargav i have fever from 4 days do i need to de check up for the corona test.', 1, 18, 'Male', '2021-03-14 08:09:06'),
(3, NULL, ' baby is having stomach ache please help us in this after feeding baby is having same problem.', 0, 10, 'Male', '2021-03-14 15:38:06'),
(4, NULL, ' hii this is not otay', 0, 10, 'Male', '2021-03-14 15:44:54'),
(7, NULL, ' hii this is test 235 for echo checking message.', 0, 10, 'Male', '2021-03-14 15:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `sym_info`
--

CREATE TABLE `sym_info` (
  `Dis_ID` int(4) NOT NULL,
  `Symptoms` varchar(150) NOT NULL,
  `Dis_name` varchar(255) NOT NULL,
  `Tre_text` varchar(1000) NOT NULL,
  `Dis_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sym_info`
--

INSERT INTO `sym_info` (`Dis_ID`, `Symptoms`, `Dis_name`, `Tre_text`, `Dis_text`) VALUES
(1, 'sensitivity to touch, light, and sound. Constant movement or being hyper, Short attention span.', 'Autism ', 'Behavioral management therapy, Cognitive behavior therapy, Early intervention, Joint attention therapy, Medication treatment, Nutritional therapy, Occupational therapy', 'Austin also called Austim Spectrum Disorder (ASD), is a complicated condition that includes problems with communication and behavior. ASD can be a minor problem or a disability that needs full-time care in a special facility. People with Austim have trouble with communication. They have trouble understanding what other people think and feel.'),
(2, 'Irritability, lethargy, feeding issues', 'Blue Baby Syndrome', 'Babies with methemoglobinemia can reverse the condition by taking a drug called methylene blue, which can provide oxygen to the blood. This drug needs a prescription and is usually delivered via a needle inserted into a vein.', '3.Blue baby syndrome is a condition some babies are born with or develop early in life. It’s characterized by an overall skin color with a blue or purple tinge, called cyanosis. This bluish appearance is most noticeable where the skin is thin, such as the lips, earlobes, and nail beds. Blue baby syndrome, while not common, can occur due to several congenital (meaning present at birth) heart defects or environmental or genetic factors.'),
(3, 'Shortness of breath, wheezing, bluish appearance, fast breathing, cough', 'Bronchiolitis', 'NO vaccine or specific treatments or drug available. Most cases go away on their own and can be cared for at home. It is key that your child drinks lots of fluids to avoid dehydration.', 'Bronchiolitis is an inflammatory respiratory condition. It’s caused by a virus that affects the smallest air passages in the lungs (bronchioles). The job of the bronchioles is to control airflow in your lungs. When they become infected or damaged, they can swell or become clogged. This blocks the flow of oxygen. Although it’s generally a childhood condition, bronchiolitis can also affect adults.'),
(4, 'Runny or stuffy nose, Sore throat, Cough, Congestion, Slight body aches or a mild headache, Sneezing', 'Common Cold', 'Stay hydrated, Rest, Combat stuffiness, Relieve pain, Sip warm liquids, Try honey, Add moisture to the air', ' The common cold is a viral infection of your nose and throat (upper respiratory tract). It\'s usually harmless, although it might not feel that way. Many types of viruses can cause a common cold. Children younger than 6 are at greatest risk of colds, but healthy adults can also expect to have two or three colds annually. Most people recover from a common cold in a week or 10 days.'),
(7, 'fever, barking cough, heavy breathing, hoarse voice', 'Croup', 'A single dose of dexamethasone (0.15 to 0.60 mg per kg usually given orally) is recommended in all patients with croup, including those with mild disease. Most cases clear up with home care in three to five days.', 'Croup is a viral condition that causes swelling around the vocal cords. It’s characterized by breathing difficulties and a bad cough that sounds like a barking seal. Many of the viruses responsible for croup also cause the common cold. Most active in the fall and winter months, croup usually targets children under the age of 5.'),
(8, 'Runny or stuffy nose, Sneezing, Body aches, Fatigue, Headache, Fever', 'Flu', 'Usually, you\'ll need nothing more than rest and plenty of fluids to treat the flu. But if you have a severe infection or are at higher risk for complications, your doctor may prescribe an antiviral drug to treat the flu. ', 'A common viral infection that can be deadly, especially in high-risk groups. The flu attacks the lungs, nose and throat. Young children, older adults, pregnant women and people with chronic disease or weak immune systems are at high risk.'),
(9, 'Sore throat, fever and swollen lymph nodes in the neck.', 'Strep Throat', 'Treatment is important to reduce complications. Oral antibiotics like penicillin, amoxicillin, cephalexin or azithromycin are commonly used. Other medicines such as acetaminophen or ibuprofen can help with pain and fever.', 'Strep throat is a bacterial infection that causes inflammation and pain in the throat. This common condition is caused by group A Streptococcus bacteria. Strep throat can affect children and adults of all ages.'),
(10, 'Yellow tinge to the skin and the whites of the eyes, Pale stools, Dark urine, Itchiness', 'Jaundice', 'Doctor evaluation is needed to identify the cause.', 'Jaundice is a condition in which the skin, whites of the eyes and mucous membranes turn yellow because of a high level of bilirubin, a yellow-orange bile pigment. Jaundice has many causes, including hepatitis, gallstones and tumors.'),
(11, 'Cough with phlegm or pus, fever, chills and difficulty breathing.', 'Pneumonia', 'Antibiotics can treat many forms of pneumonia. Some forms of pneumonia can be prevented by vaccines.', 'Infection that inflames air sacs in one or both lungs, which may fill with fluid. With pneumonia, the air sacs may fill with fluid or pus. The infection can be life-threatening to anyone, but particularly to infants, children and people over 65.'),
(12, 'Mild fever and headache, eye redness, red rashes, runny nose', 'Rubella', 'There\'s no treatment to get rid of an established infection, but medications may help with symptoms. Vaccination can help prevent the disease.', 'Rubella is a contagious viral infection best known by its distinctive red rash. It\'s also called German measles or three-day measles. While this infection may cause mild symptoms or even no symptoms in most people, it can cause serious problems for unborn babies whose mothers become infected during pregnancy.'),
(13, 'Limited attention, hyperactivity, Aggression, Persistent repetition of words or actions', 'Attention-Deficit/Hyperactivity Disorder (ADHD)', 'Treatments include medication and talk therapy.', 'Attention deficit hyperactivity disorder (ADHD) is a mental health disorder that can cause above-normal levels of hyperactive and impulsive behaviors. People with ADHD may also have trouble focusing their attention on a single task or sitting still for long periods of time.'),
(14, 'Difficulty breathing, chest pain, cough and wheezing.', 'Asthma', 'Asthma can usually be managed with rescue inhalers to treat symptoms (salbutamol) and controller inhalers that prevent symptoms (steroids). Severe cases may require longer-acting inhalers that keep the airways open (formoterol, salmeterol, tiotropium), as well as inhalant steroids.', 'Asthma is a condition in which your airways narrow and swell and may produce extra mucus. This can make breathing difficult and trigger coughing, a whistling sound (wheezing) when you breathe out and shortness of breath.'),
(15, 'Itchy blister-like rash on the skin, Fever, Fatigue', 'Chickenpox', 'Chickenpox can be prevented by a vaccine. Treatment usually involves relieving symptoms, although high-risk groups may receive antiviral medication.', 'A highly contagious viral infection which causes an itchy, blister-like rash on the skin. Chickenpox is highly contagious to those who haven\'t had the disease or been vaccinated against it.'),
(16, 'Chills, fatigue, fever, Diarrhoea , shivering, ', 'Malaria', 'Malaria is treated with prescription drugs to kill the parasite. It involves using different types of anti malarial drugs to treat different parasite and anti bacterial to stop bacterial growth.', 'Malaria is a life-threatening disease. It’s typically transmitted through the bite of an infected Anopheles mosquito. Infected mosquitoes carry the Plasmodium parasite. When this mosquito bites you, the parasite is released into your bloodstream. Once the parasites are inside your body, they travel to the liver, where they mature. After several days, the mature parasites enter the bloodstream and begin to infect red blood cells. Within 48 to 72 hours, the parasites inside the red blood cells multiply, causing the infected cells to burst open. The parasites continue to infect red blood cells, resulting in symptoms that occur in cycles that last two to three days at a time.'),
(17, 'Confusion, seizures and loss of consciousness', 'Reye’s Syndrome', 'It\'s typically treated with hospitalization. In severe cases, children will be treated in the intensive care unit. There\'s no cure for Reye\'s syndrome, so treatment is supportive, focusing on reducing symptoms and complications.', 'Reye\'s (Reye) syndrome is a rare but serious condition that causes swelling in the liver and brain. Reye\'s syndrome most often affects children and teenagers recovering from a viral infection, most commonly the flu or chickenpox.'),
(18, 'red, itchy, or scaly patches, or raised areas of skin called plaques', 'Ring Worm', 'Ringworm of the body can all be treated with topical medications, such as antifungal creams, ointments, gels, or sprays', 'Ringworm, also known as dermatophytosis, dermatophyte infection, or tinea, is a fungal infection of the skin. “Ringworm” is a misnomer, since a fungus, not a worm, causes the infection. The lesion caused by this infection resembles a worm in the shape of a ring — hence the name.'),
(19, 'Vomiting, blue or purple skin around the mouth, dehydration, low-grade fever, breathing difficulties', 'Whooping Cough', 'It is treated with antibiotics, usually erythromycin or a family of antibiotics like erythromycin. Erythromycin is taken for 2 weeks.', 'Whooping cough, also called pertussis, is a serious respiratory infection caused by a type of bacteria called Bordetella pertussis. The infection causes violent, uncontrollable coughing that can make it difficult to breathe. While whooping cough can affect people at any age, it can be deadly for infants and young children.'),
(20, 'Scaly rash that usually causes itching, stinging and burning.', 'Athlete’s Foot', 'Oral antifungal medications such as itraconazole (Sporanox), fluconazole (Diflucan), or prescription-strength terbinafine (Lamisil)', 'Athlete’s foot — also called tinea pedis — is a contagious fungal infection that affects the skin on the feet. It can also spread to the toenails and the hands. The fungal infection is called athlete’s foot because it’s commonly seen in athletes. Athlete’s foot isn’t serious, but sometimes it’s hard to cure.'),
(21, 'Physical deformity, swelling, or bruising', 'Cauliflower Ear', 'Cauliflower ear is permanent, but in some cases, you may be able to reverse the appearance using corrective surgery, known as otoplasty.', 'Cauliflower ear, also known as perichondrial hematoma or wrestler’s ear, is a deformity of the ear caused by trauma.Cauliflower ear occurs when blood pools in your pinna after it’s been hit or struck.'),
(22, 'Headache, fever, stiff neck, loss of appetite\r\n', 'Meningitis', 'Acute bacterial meningitis must be treated immediately with intravenous antibiotics and sometimes corticosteroids. This helps to ensure recovery and reduce the risk of complications, such as brain swelling and seizures. The antibiotic or combination of antibiotics depends on the type of bacteria causing the infection.', 'Meningitis is an inflammation of the meninges. The meninges are the three membranes that cover the brain and spinal cord. Meningitis can occur when fluid surrounding the meninges becomes infected. The most common causes of meningitis are viral and bacterial infections.'),
(23, 'Severe muscle contractions and spasms, Stiffness', 'Neonatal Tetanus', 'NT is a medical emergency requiring hospitalization, immediate treatment with human tetanus immune globulin, agents to control muscle spasm, antibiotics', 'Neonatal tetanus is a form of generalized tetanus that occurs in newborns. Infants who have not acquired passive immunity from the mother having been immunized are at risk. It usually occurs through infection of the unhealed umbilical stump, particularly when the stump is cut with a non-sterile instrument.'),
(24, 'Redness, itching and tearing of the eyes', 'Conjunctivitis', 'It\'s important to stop wearing contact lenses whilst affected by conjunctivitis. It often resolves on its own, but treatment can speed the recovery process. Allergic conjunctivitis can be treated with antihistamines. Bacterial conjunctivitis can be treated with antibiotic eye drops.', 'Conjunctivitis, or pink eye, is an irritation or inflammation of the conjunctiva, which covers the white part of the eyeball. It can be caused by allergies or a bacterial or viral infection. Conjunctivitis can be extremely contagious and is spread by contact with eye secretions from someone who is infected.');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `User_ID` int(255) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `User_Email` varchar(40) NOT NULL,
  `User_Pwd` varchar(100) NOT NULL,
  `User_Token` varchar(255) NOT NULL,
  `U_Created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `U_Updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `U_Valid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`User_ID`, `User_Name`, `User_Email`, `User_Pwd`, `User_Token`, `U_Created`, `U_Updated`, `U_Valid`) VALUES
(47, 'dipesh', 'dipeshgolani226@gmail.com', '202cb962ac59075b964b07152d234b70', '980a4c03562ac16b34d41694410c55', '2023-07-31 21:24:46', '2023-07-31 21:23:30', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vacc_info`
--

CREATE TABLE `vacc_info` (
  `Vaccine_ID` int(255) NOT NULL,
  `Vacc_Name` varchar(30) NOT NULL,
  `Vacc_Meditation` varchar(700) NOT NULL,
  `Vacc_Age` varchar(10) NOT NULL,
  `Vacc_selfcare` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacc_info`
--

INSERT INTO `vacc_info` (`Vaccine_ID`, `Vacc_Name`, `Vacc_Meditation`, `Vacc_Age`, `Vacc_selfcare`) VALUES
(1, 'Flu', 'Decongestant - \r\nRelieves nasal congestion, swelling and runny nose.\r\nCough medicine - \r\nBlocks the cough reflex. Some may thin and loosen mucus, making it easier to clear from the airways.\r\nNonsteroidal anti-inflammatory drug -\r\nRelieves pain, decreases inflammation and reduces fever.\r\nAnalgesic -\r\nRelieves pain.\r\nAntiviral drug - \r\nReduces viruses\' ability to replicate.', 'All', 'Bed Rest and Throat lozange'),
(2, 'Croup', 'Steroid - \r\nModifies or simulates hormone effects, often to reduce inflammation or for tissue growth and repair.\r\nAnalgesic - \r\nRelieves pain.\r\nNonsteroidal anti-inflammatory drug -\r\nRelieves pain, decreases inflammation and reduces fever.\r\nVasoconstrictor - \r\nNarrows blood vessels.\r\nCough medicine -\r\nBlocks the cough reflex. Some may thin and loosen mucus, making it easier to clear from the airways.\r\n', 'All', 'Most cases of croup are mild and can be treated at home. Sitting your child upright and comforting them if they are distressed is important, because crying may make symptoms worse. Your child should a'),
(3, 'Impetigo', 'Penicillin - \r\nStops growth of or kills specific bacteria.\r\nAntibiotics - \r\nStops the growth of or kills bacteria.\r\n', 'between 2 ', 'To use this remedy: Manuka honey and raw honey are two of the most effective choices. Apply either type of honey directly to impetigo sores, and let it sit for 20 minutes. Rinse with warm water.'),
(4, 'Malaria', 'chloroquine (Aralen),\r\ndoxycycline (Vibramycin, Oracea, Adoxa, Atridox),\r\nquinine (Qualaquin),\r\nmefloquine (Lariam),\r\natovaquone/proguanil (Malarone),\r\nartemether/lumefantrine (Coartem), and.\r\nprimaquine phosphate (Primaquine).', 'Under 5 ag', 'Very rarely. Travelers who are taking effective malaria preventive drugs but who will be traveling for an extended period of time or who will be at higher risk of developing a malaria infection may de'),
(5, 'Kawasaki Disease', 'Nonsteroidal anti-inflammatory drug - \r\nRelieves pain, decreases inflammation and reduces fever.\r\nBlood transfusion - \r\nTransfer of blood from one person into the veins of another.\r\n', 'younger th', 'Use an unscented skin lotion to help keep it moist. Call your doctor or nurse call line if your child has a fever. Go to all doctor visits so that the doctor can check your child for problems. This is'),
(6, 'Pneumonia', 'Antibiotics - \r\nStops the growth of or kills bacteria.\r\nPenicillin - \r\nStops growth of or kills specific bacteria.\r\n', 'between 2 ', 'Get plenty of rest. Don\'t go back to school or work until after your temperature returns to normal and you stop coughing up mucus.\r\nStay hydrated. Drink plenty of fluids, especially water, to help loo'),
(7, 'Rotavirus', 'Rotavirus vaccine is a vaccine used to protect against rotavirus infections, which are the leading cause of severe diarrhea among young children.The vaccines prevent 15–34% of severe diarrhea in the developing world and 37–96% of severe diarrhea in the developed world.The vaccines decrease the risk of death among young children due to diarrhea.Immunizing babies decreases rates of disease among older people and those who have not been immunized.', 'below 1 ye', 'Drink plenty of fluids.\r\nEat broth-based soups.\r\nTake Pedialyte or other fluids with electrolytes (especially important for children).\r\nEat a diet of bland foods, such as white toast and saltines.\r\nAv'),
(8, 'Rubella', 'There is no specific medicine to treat rubella or make the disease go away faster. In many cases, symptoms are mild. For others, mild symptoms can be managed with bed rest and medicines for fever, such as acetaminophen. If you are concerned about your symptoms or your child\'s symptoms, contact your doctor.', '0 - 12 yea', 'encourage the child to rest.\r\nencourage the child to drink plenty of fluids.\r\ngive paracetamol or ibuprofen to relieve fever and help with pain (see Treatment Options below)\r\ndo not give aspirin to ch'),
(9, 'Strep Throat', 'Penicillin - \r\nStops growth of or kills specific bacteria.\r\nNonsteroidal anti-inflammatory drug - \r\nRelieves pain, decreases inflammation and reduces fever.\r\nAnalgesic - \r\nRelieves pain.\r\n', '5-15 Age', 'Get plenty of rest. Sleep helps your body fight infection. ...\r\nDrink plenty of water. Keeping a sore throat lubricated and moist eases swallowing and helps prevent dehydration.\r\nEat soothing foods. .'),
(10, 'Asthma', 'Bronchodilator - \r\nHelps open the airways of the lungs to make breathing easier.\r\nSteroid - \r\nModifies or simulates hormone effects, often to reduce inflammation or for tissue growth and repair.\r\nAnti-inflammatory - \r\nPrevents or counteracts swelling (inflammation) in joints and tissues.\r\n', 'over the a', 'Quit Smoking'),
(11, 'Chickenpox', 'Analgesic\r\nRelieves pain.\r\nAntihistamine\r\nReduces or stops an allergic reaction.', 'Teen', 'Moisturizer - \r\nHydrates and protects skin from damage.\r\nOatmeal bath - \r\nA mixture of oatmeal and water that soothes irritated skin.\r\n'),
(12, 'Obesity', 'Orlistat (Alli, Xenical)\r\nPhentermine and topiramate (Qsymia)\r\nBupropion and naltrexone (Contrave)\r\nLiraglutide (Saxenda, Victoza)', '20 to 60 A', 'Physical exercise\r\nAerobic activity for 20–30 minutes 5 days a week improves cardiovascular health. If injured, pursuing an activity that avoids the injured muscle group or joint can help maintain phy'),
(13, 'Athlete’s Foot', 'Clotrimazole is used to treat skin infections such as athlete\'s foot, jock itch, ringworm, and other fungal skin infections (candidiasis).', '0 to 10 ag', 'Warm soak\r\nSoothes painful muscles or joints and can help drain skin infections.\r\n'),
(14, 'Cauliflower Ear', 'Otoplasty - \r\nPlastic surgery to change the shape, size or position of the ears.\r\nPlastic Surgery - \r\nReconstructs defective, damaged or missing body parts.\r\n', 'Kids', 'Ice the injury as quickly as possible. You can do this by applying ice for 15-minute intervals. That will help reduce the swelling and may prevent cauliflower ear. You should also seek medical treatme'),
(15, 'Steroid Acne', 'The treatment for steroid acne, like that for ordinary acne (acne vulgaris), involves the use of various topical skin preparations and oral antibiotics.\r\nSteroid-induced fungal acne (malassezia folliculitis) is treated with topical antifungals, such as ketoconazole shampoo, or an oral antifungal, such as itraconazole.', 'Under 30 a', 'Gently cleanse your skin twice a day, especially after exercise or after wearing makeup. Also, avoid any excessive exfoliation as this can cause skin dryness and irritation. Avoid the use of oily and ');

-- --------------------------------------------------------

--
-- Table structure for table `vacc_rem`
--

CREATE TABLE `vacc_rem` (
  `Vacc_phn` varchar(10) NOT NULL,
  `Vaccine_ID` int(255) NOT NULL,
  `Child_fname` varchar(20) NOT NULL,
  `Child_lname` varchar(20) NOT NULL,
  `Child_DOB` date NOT NULL,
  `Vacc_email` varchar(40) NOT NULL,
  `Gender` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`Ad_ID`);

--
-- Indexes for table `ans_doc`
--
ALTER TABLE `ans_doc`
  ADD PRIMARY KEY (`Ans_ID`),
  ADD KEY `Doc_ID` (`Doc_ID`),
  ADD KEY `ans_doc_ibfk_2` (`QueD_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `doc_account`
--
ALTER TABLE `doc_account`
  ADD PRIMARY KEY (`Doc_ID`);

--
-- Indexes for table `post_info`
--
ALTER TABLE `post_info`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `Doc_ID` (`Doc_ID`);

--
-- Indexes for table `que_doc`
--
ALTER TABLE `que_doc`
  ADD PRIMARY KEY (`QueD_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `sym_info`
--
ALTER TABLE `sym_info`
  ADD PRIMARY KEY (`Dis_ID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `vacc_info`
--
ALTER TABLE `vacc_info`
  ADD PRIMARY KEY (`Vaccine_ID`);

--
-- Indexes for table `vacc_rem`
--
ALTER TABLE `vacc_rem`
  ADD PRIMARY KEY (`Vacc_phn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `Ad_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ans_doc`
--
ALTER TABLE `ans_doc`
  MODIFY `Ans_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doc_account`
--
ALTER TABLE `doc_account`
  MODIFY `Doc_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `post_info`
--
ALTER TABLE `post_info`
  MODIFY `Post_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `que_doc`
--
ALTER TABLE `que_doc`
  MODIFY `QueD_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sym_info`
--
ALTER TABLE `sym_info`
  MODIFY `Dis_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `User_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `vacc_info`
--
ALTER TABLE `vacc_info`
  MODIFY `Vaccine_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ans_doc`
--
ALTER TABLE `ans_doc`
  ADD CONSTRAINT `ans_doc_ibfk_1` FOREIGN KEY (`Doc_ID`) REFERENCES `doc_account` (`Doc_ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `ans_doc_ibfk_2` FOREIGN KEY (`QueD_ID`) REFERENCES `que_doc` (`QueD_ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `User_ID` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `post_info`
--
ALTER TABLE `post_info`
  ADD CONSTRAINT `post_info_ibfk_1` FOREIGN KEY (`Doc_ID`) REFERENCES `doc_account` (`Doc_ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `que_doc`
--
ALTER TABLE `que_doc`
  ADD CONSTRAINT `que_doc_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
