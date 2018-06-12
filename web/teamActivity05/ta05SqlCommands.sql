CREATE TABLE Scriptures (
	id SERIAL,
	book varchar(30),
	chapter integer,
	verse integer,
	content,
);

INSERT INTO Scriptures (book, chapter, verse, content) VALUES ('John', 1, 5, '')
INSERT INTO Scriptures (book, chapter, verse, content) VALUES ('Doctrine & Covenants', 88, 49, '')
INSERT INTO Scriptures (book, chapter, verse, content) VALUES ('Doctrine & Covenants', 93, 28, '')
INSERT INTO Scriptures (book, chapter, verse, content) VALUES ('Mosiah', 16, 9, '')
