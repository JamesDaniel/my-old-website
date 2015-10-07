

INSERT INTO Members
VALUES (1,'James','McGarr','*****','*****','*****@*****.***','***********','2015-09-28 16:53:36');


INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (1,'Raspberry Pi Projects','http://www.amazon.com/Raspberry-Pi-Projects-Andrew-Robinson/dp/1118555430/ref=sr_1_1?ie=UTF8&qid=1443296543&sr=8-1&keywords=raspberry+pi+projects');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,1,'2015-10-05 00:00:00',17);


INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (2,'Arduino Workshop','http://www.amazon.com/Arduino-Workshop-Hands--Introduction-Projects/dp/1593274483/ref=sr_1_1?ie=UTF8&qid=1443297418&sr=8-1&keywords=arduino+workshop');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,2,'2015-10-05 00:00:00',14);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (3,'Head First Object-Oriented Analysis and Design','http://www.amazon.com/Head-First-Object-Oriented-Analysis-Design/dp/0596008678/ref=sr_1_1?ie=UTF8&qid=1443304343&sr=8-1&keywords=head+first+object+oriented+programming');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,3,'2015-10-05 00:00:00',6);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (4,'Beginning Perl','http://www.amazon.com/Beginning-Perl-Curtis-Poe/dp/1118013840/ref=sr_1_1?ie=UTF8&qid=1443444422&sr=8-1&keywords=beginning+perl');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,4,'2015-10-05 00:00:00',15);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (5,'Python For Dummies','http://www.amazon.com/Python-Dummies-Stef-Maruch/dp/0471778648/ref=sr_1_2?ie=UTF8&qid=1443444635&sr=8-2&keywords=python+for+dummies');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,5,'2015-10-05 00:00:00',57);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (6,"C Programming Absolute Beginner's Guide",'http://www.amazon.com/Programming-Absolute-Beginners-Guide-3rd/dp/0789751984/ref=sr_1_4?ie=UTF8&qid=1443444992&sr=8-4&keywords=c+programming+que');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,6,'2015-10-05 00:00:00',62);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (7,'Start Here! Learn Microsoft Visual C# 2010','http://www.amazon.com/Start-Here-Learn-Microsoft-Visual/dp/0735657726/ref=sr_1_2?ie=UTF8&qid=1443445076&sr=8-2&keywords=learn+microsoft+visual+c%23+2010');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,7,'2015-10-05 00:00:00',2);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (8,"C++ Without Fear: A Beginner's Guide That Makes You Feel Smart (2nd Edition)",'http://www.amazon.com/Without-Fear-Beginners-Guide-Makes/dp/0132673266/ref=sr_1_1?ie=UTF8&qid=1443445213&sr=8-1&keywords=c%2B%2B+without+fear');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,8,'2015-10-05 00:00:00',0);

INSERT INTO Books (BookID, bookname, bookaddress)
VALUES (9,'Professional Android 4 Application Development 3rd Edition','http://www.amazon.com/Professional-Android-4-Application-Development/dp/1118102274/ref=sr_1_1?ie=UTF8&qid=1443451128&sr=8-1&keywords=professional+android+4+application+development');
INSERT INTO ReadingList (PersonID, BookID, dateLastRead, percentageComplete)
VALUES (1,9,'2015-10-05 00:00:00',12);

--WEB TURORIALS INSERTS
INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (1,'lynda.com - Git Essential Training','http://www.lynda.com/Git-tutorials/Git-Essential-Training/100222-2.html');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,1,'2015-10-07 19:55:00','2015-10-07 17:55:00',17);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (2,'w3schools - PHP','http://www.w3schools.com/php/default.asp');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,2,'2015-10-07 19:55:00','2015-10-07 17:55:00',45);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (3,'Try Git','https://try.github.io');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,3,'2015-10-07 19:55:00','2015-10-07 17:55:00',100);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (4,'w3schools - JQuery','http://www.w3schools.com/jquery/');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,4,'2015-10-07 19:55:00','2015-10-07 17:55:00',100);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (5,'w3schools - JavaScript','http://www.w3schools.com/js/default.asp');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,5,'2015-10-07 19:55:00','2015-10-07 17:55:00',100);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (6,'w3schools - Bootstrap','http://www.w3schools.com/bootstrap/default.asp');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,6,'2015-10-07 19:55:00','2015-10-07 17:55:00',100);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (7,'w3schools - AJAX','http://www.w3schools.com/ajax/default.asp');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,7,'2015-10-07 19:55:00','2015-10-07 17:55:00',100);

INSERT INTO WebTutorials (WebTutorialID, WebTutorialName, WebTutorialAddress)
VALUES (8,'w3schools - JSON','http://www.w3schools.com/json/default.asp');
INSERT INTO WebLearningList (PersonID, WebTutorialID, dateOfReading, dateLastRead, percentageComplete)
VALUES (1,8,'2015-10-07 19:55:00','2015-10-07 17:55:00',100);


