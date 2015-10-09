
DROP TABLE ReadingList;
DROP TABLE WebLearningList;
DROP TABLE WebTutorials;
DROP TABLE ReadingSessions;
DROP TABLE Members;
DROP TABLE Books;
DROP TABLE VisitorLog;

CREATE TABLE Members (
PersonID INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL UNIQUE,
password VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
website VARCHAR(200),
reg_date TIMESTAMP
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8; 

CREATE TABLE Books (
BookID INT(6) AUTO_INCREMENT,
bookname VARCHAR(100) NOT NULL,
author VARCHAR(30),
bookaddress VARCHAR(200) NOT NULL,
pages INT(4),
PRIMARY KEY (BookID)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE ReadingList (
PersonID INT(6),
BookID INT(6),
onpage INT(4),
dateOfReading TIMESTAMP,
dateLastRead TIMESTAMP,    
percentageComplete INT(3),
PRIMARY KEY (PersonID, BookID),
FOREIGN KEY (PersonID) REFERENCES Members(PersonID),
FOREIGN KEY (BookID) REFERENCES Books(BookID)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE ReadingSessions (
SessionID INT(6),
PersonID INT(6),
BookID INT(6),
SessionDate TIMESTAMP,
PRIMARY KEY (SessionID),
FOREIGN KEY (PersonID) REFERENCES Members(PersonID),
FOREIGN KEY (BookID) REFERENCES Books(BookID)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE WebTutorials (
WebTutorialID INT(6) AUTO_INCREMENT,
WebTutorialName VARCHAR(100) NOT NULL,
WebTutorialAddress VARCHAR(200) NOT NULL,
TutorialLastUpdated TIMESTAMP,
PRIMARY KEY (WebTutorialID)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE WebLearningList (
PersonID INT(6),
WebTutorialID INT(6),
dateOfReading TIMESTAMP,
dateLastRead TIMESTAMP,    
percentageComplete INT(3),
PRIMARY KEY (PersonID, WebTutorialID),
FOREIGN KEY (PersonID) REFERENCES Members(PersonID),
FOREIGN KEY (WebTutorialID) REFERENCES WebTutorials(WebTutorialID)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;






CREATE TABLE VisitorLog (
VisitID INT(6) AUTO_INCREMENT,
VisitDate DATE,
VisitPage VARCHAR(100),
HasJavaScript VARCHAR(1) DEFAULT 'N',
PRIMARY KEY (VisitID)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

