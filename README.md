# mini-project
This is mini project of Scripting language which is assigned to the student for their lab work. 

The pages this project have : - 
 Landing page
 Login and Signup
 About 
 Dashboard 
 Enroll
 logout 
   


   <!-- Database  -->

   CREATE TABLE `enroll` (
  `eid` int(11) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `university` varchar(30) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `gpa` varchar(10) DEFAULT NULL
)


CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `university` varchar(30) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `passkey` varchar(16) DEFAULT NULL
)
