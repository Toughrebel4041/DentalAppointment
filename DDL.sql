SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `appointment` (
  `name` varchar(75) NOT NULL,
  `appointmentID` int(11) NOT NULL,
  `dentistID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `keluhan` text NOT NULL,
  `treatmentID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `dentist` (
  `dentistID` int(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `licenseID` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `patient` (
  `patientID` int(15) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telp` int(15) DEFAULT NULL,
  `dentalRecord` text DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `treatment` (
  `namaTreatment` varchar(30) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `hargaTreatment` bigint(20) NOT NULL,
  `idTreatment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `appointment`
  ADD KEY `dentistID` (`dentistID`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `treatmentID` (`treatmentID`);

ALTER TABLE `dentist`
  ADD PRIMARY KEY (`dentistID`),
  ADD KEY `userid` (`userid`);

ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientID`),
  ADD KEY `userid` (`userid`);

ALTER TABLE `treatment`
  ADD PRIMARY KEY (`idTreatment`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`dentistID`) REFERENCES `dentist` (`dentistID`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`treatmentID`) REFERENCES `treatment` (`idTreatment`),
  ADD CONSTRAINT `dentistID` FOREIGN KEY (`dentistID`) REFERENCES `dentist` (`dentistID`),
  ADD CONSTRAINT `fk_dentist` FOREIGN KEY (`dentistID`) REFERENCES `dentist` (`dentistID`),
  ADD CONSTRAINT `fk_patient` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`),
  ADD CONSTRAINT `patientID` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`);

ALTER TABLE `dentist`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
  