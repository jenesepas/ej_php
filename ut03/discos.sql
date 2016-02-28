 
REM ****************** DISCOGRAFICAS *********************
CREATE TABLE DISCOGRAFICAS
(   
 COD_DISCOGRAFICA INT NOT NULL,
 NOMBRE_EMPRESA   VARCHAR (20) NOT NULL,
 PAIS             VARCHAR (20),
 CAPITAL_SOCIAL   INT NOT NULL,
 TIPO             VARCHAR (3) NOT NULL,
 CONSTRAINT PK_EMPRESA PRIMARY KEY (COD_DISCOGRAFICA),
 CONSTRAINT CK_TIPO    CHECK (TIPO IN ('SL', 'SA', 'SM'))
);


INSERT INTO DISCOGRAFICAS
VALUES (1, 'ARIOLA', 'REINO UNIDO', 120000, 'SL');

INSERT INTO DISCOGRAFICAS
VALUES (2, 'ARISTA', 'ESTADOS UNIDOS', 121000, 'SL');

INSERT INTO DISCOGRAFICAS
VALUES (3, 'WEA', 'IRLANDA', 113000, 'SA');

INSERT INTO DISCOGRAFICAS
VALUES (4, 'STERN', 'ALEMANIA', 10100, 'SL');

INSERT INTO DISCOGRAFICAS
VALUES (5, 'CUTRE', 'ESPA�A', 1000, 'SM');

INSERT INTO DISCOGRAFICAS
VALUES (6, 'POLYDOR', 'FRANCIA', 220600, 'SA');







REM ****************** GRUPOS *********************
CREATE TABLE GRUPOS
(   
 COD_GRUPO         INT  NOT NULL,
 NOMBRE_GRUPO      VARCHAR (40) NOT NULL,
 PAIS              VARCHAR (20),
 FECHA_FUNDACION   DATE NOT NULL,
 FECHA_DISOLUCION  DATE,
 ESTILO            VARCHAR (40) NOT NULL,
 DISCOGRAFICA      INT  NOT NULL,
 CONSTRAINT PK_GRUPO          PRIMARY KEY (COD_GRUPO),
 CONSTRAINT CK_ESTILO         CHECK (ESTILO IN ('ROCK', 'SINFONICO', 'PROGRESIVO')),
 CONSTRAINT FK_DISCOGRAFICA   FOREIGN KEY (DISCOGRAFICA) REFERENCES DISCOGRAFICAS (COD_DISCOGRAFICA)
);


INSERT INTO GRUPOS
VALUES (1, 'The Alan Parsons Project', 'Reino Unido','1974-11-29', '1986-10-12', 'SINFONICO', 1);

INSERT INTO GRUPOS
VALUES (2, 'Pink Floyd', 'Reino Unido', '1968-9-12', ' ','SINFONICO', 1);
 

INSERT INTO GRUPOS
VALUES (3, 'Marillion', 'Reino Unido', '1980-12-9',' ' ,'PROGRESIVO', 3);


INSERT INTO GRUPOS 
VALUES (4, 'King Crimson', 'Reino Unido', '1964-8-21', '1992-4-27','PROGRESIVO', 1);


INSERT INTO GRUPOS
VALUES (5, 'Supertramp', 'Reino Unido', '1969-08-16', '1984-2-11', 'SINFONICO', 6);


INSERT INTO GRUPOS
VALUES (6, 'Boston', 'Estados Unidos', '1971-9-14', '1997-12-13', 'ROCK', 2);


INSERT INTO GRUPOS 
VALUES (7, 'Queen', 'Reino Unido', '1967-11-9', '1991-11-24', 'ROCK', 1);


INSERT INTO GRUPOS 
VALUES (8, 'Camel', 'Reino Unido', '1971-3-15',' ', 'SINFONICO', 6);











REM ****************** MUSICOS *********************
CREATE TABLE MUSICOS
(   
 COD_MUSICO        INT   (4)  NOT NULL,
 NOMBRE_MUSICO     VARCHAR (40) NOT NULL,
 PAIS              VARCHAR (20),
 FECHA_NACIMIENTO  DATE,
 GRUPO             INT, 
 CONSTRAINT PK_MUSICO PRIMARY KEY (COD_MUSICO),
 CONSTRAINT FK_GRUPO  FOREIGN KEY (GRUPO) REFERENCES GRUPOS (COD_GRUPO)
);



INSERT INTO MUSICOS
VALUES (1, 'Alan Parsons', 'Reino Unido', '1948-09-14', 1);


INSERT INTO MUSICOS
VALUES (2, 'Eric Woolfson', 'Reino Unido', '1947-12-07', 1);


INSERT INTO MUSICOS
VALUES (3, 'Ian Bairnson', 'Reino Unido', '1952-09-21', 1);


INSERT INTO MUSICOS
VALUES (4, 'Lenny Zakatek', 'India', '1949-02-24', 1);


INSERT INTO MUSICOS
VALUES (5, 'Andrew Powell', 'Reino Unido', '1947-12-11', 1);


INSERT INTO MUSICOS
VALUES (6, 'David Gilmour', 'Reino Unido', '1946-4-14', 2);


INSERT INTO MUSICOS
VALUES (7, 'Roger Waters', 'Reino Unido', '1945-9-19', 2);


INSERT INTO MUSICOS
VALUES (8, 'Nick Mason', 'Reino Unido', '1949-4-14', 2);


INSERT INTO MUSICOS
VALUES (9, 'Richard Wrigth', 'Reino Unido', '1948-5-22', 2);


INSERT INTO MUSICOS
VALUES (10, 'Dereck Dick (FISH)', 'Reino Unido', '1951-4-14', 3);


INSERT INTO MUSICOS
VALUES (11, 'Steve Rothery', 'Reino Unido', '1952-12-15', 3);


INSERT INTO MUSICOS
VALUES (12, 'Pete Trewavas', 'Reino Unido', '1958-4-19', 3);


INSERT INTO MUSICOS
VALUES (13, 'Steve Hogarth', 'Reino Unido', '1954-7-19', 3);


INSERT INTO MUSICOS
VALUES (14, 'Ian Mosley', 'Estados Unidos', '1954-12-11', 3);

INSERT INTO MUSICOS
VALUES (15, 'Mark Kelly', 'Reino Unido', '1951-4-22', 3);

INSERT INTO MUSICOS
VALUES (16, 'Pete Sinfield', 'Reino Unido', '1945-2-12', 4);


INSERT INTO MUSICOS
VALUES (17, 'Robert Fripp', 'Estados Unidos', '1949-2-11', 4);

INSERT INTO MUSICOS
VALUES (18, 'Mel Collins', 'Reino Unido', '1949-1-20', 4);

INSERT INTO MUSICOS
VALUES (19, 'Ian Wallace', 'Reino Unido', '1949-2-27', 4);


INSERT INTO MUSICOS
VALUES (20, 'Boz Burrell', 'Reino Unido', '1951-12-18', 4);


INSERT INTO MUSICOS
VALUES (21, 'Roger Hodgson', 'Reino Unido', '1953-4-19', 5);


INSERT INTO MUSICOS
VALUES (22, 'Rick Davies', 'Reino Unido', '1951-4-16', 5);

INSERT INTO MUSICOS
VALUES (23, 'John A. Helliwell', 'Reino Unido', '1953-5-2', 5);

INSERT INTO MUSICOS
VALUES (24, 'Dougie Thompson', 'Irlanda', '1953-5-29', 5);

INSERT INTO MUSICOS
VALUES (25, 'Bob C. Benberg', 'Reino Unido', '1953-5-27', 5);


INSERT INTO MUSICOS
VALUES (26, 'Russell Pope', 'Irlanda', '1953-7-24', 5);



INSERT INTO MUSICOS
VALUES (27, 'David Sikes', 'Estados Unidos', '1949-4-17', 6);


INSERT INTO MUSICOS
VALUES (28, 'Tom Scholz', 'Estados Unidos', '1951-3-22', 6);


INSERT INTO MUSICOS
VALUES (29, 'Brad Delp', 'Alemania', '1948-4-10', 6);


INSERT INTO MUSICOS
VALUES (30, 'Freddie Mercury', 'Zanzibar', '1950-4-22', 7);


INSERT INTO MUSICOS
VALUES (31, 'Brian May', 'Reino Unido', '1952-5-1', 7);


INSERT INTO MUSICOS
VALUES (32, 'John Deacon', 'Reino Unido', '1954-1-14', 7);

INSERT INTO MUSICOS
VALUES (33, 'Roger Taylor', 'Reino Unido', '1953-5-12', 7);

INSERT INTO MUSICOS
VALUES (34, 'Andrew Latimer', 'Reino Unido', '1949-5-17', 8);

INSERT INTO MUSICOS
VALUES (35, 'Peter Bardens', 'Reino Unido', '1944-6-19', 8);

INSERT INTO MUSICOS
VALUES (36, 'Andy Ward', 'Reino Unido', '1952-9-28', 8);

INSERT INTO MUSICOS
VALUES (37, 'David Paton', 'Reino Unido', '1949-10-29', 8);




















REM ****************** DISCOS *********************
CREATE TABLE DISCOS
(   
 COD_DISCO         INT   (4)  NOT NULL,
 NOMBRE_DISCO      VARCHAR (40) NOT NULL,
 FECHA_PUBLICACION DATE NOT NULL,
 MILLONES_VENDIDOS INT (10),
 FORMATO_INICIAL   VARCHAR (3),
 GRUPO             INT (4),
 DISCOGRAFICA      INT (4),  
 CONSTRAINT PK_DISCO   PRIMARY KEY (COD_DISCO),
 CONSTRAINT FK_BANDA   FOREIGN KEY  (GRUPO) REFERENCES GRUPOS (COD_GRUPO),
 CONSTRAINT FK_EMPRESA FOREIGN KEY  (DISCOGRAFICA) REFERENCES DISCOGRAFICAS (COD_DISCOGRAFICA),
 CONSTRAINT CK_FORMATO CHECK (FORMATO_INICIAL IN ('CD', 'LP'))
 );


INSERT INTO DISCOS
VALUES (1, 'Tales of mystery and imagination',  '1976-2-22', 1, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (2, 'I Robot',  '1977-4-21', 3, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (3, 'Pyramid',  '1978-7-11', 6, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (4, 'Eve',  '1979-5-2', 5, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (5, 'The turn of a friendly card',  '1980-3-10', 16, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (6, 'Eye in the sky',  '1982-12-5', 19, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (7, 'Ammonia Avenue',  '1983-10-12', 6, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (8, 'Vulture Culture',  '1984-12-10', 3, 'LP', 1, 2);


INSERT INTO DISCOS
VALUES (9, 'Stereotomy',  '1985-10-12', 4, 'LP', 1, 2);

INSERT INTO DISCOS
VALUES (10, 'Gaudi',  '1986-9-5', 4, 'LP', 1, 2);


INSERT INTO DISCOS
VALUES (11, 'Meddle',  '1971-9-5', 2, 'LP', 2, 1);


INSERT INTO DISCOS
VALUES (12, 'The dark side of the moon',  '1973-10-12', 54, 'LP', 2, 1);


INSERT INTO DISCOS
VALUES (13, 'Wish you were here',  '1975-1-7', 14, 'LP', 2, 1);


INSERT INTO DISCOS
VALUES (14, 'Animals',  '1977-7-1', 4, 'LP', 2, 1);

INSERT INTO DISCOS
VALUES (15, 'The Wall',  '1979-11-15', 45, 'LP', 2, 1);


INSERT INTO DISCOS
VALUES (16, 'The final cut',  '1983-11-7', 6, 'LP', 2, 1);



INSERT INTO DISCOS
VALUES (17, 'A momentary lapse of reason',  '1986-12-15', 8, 'LP', 2, 1);

INSERT INTO DISCOS
VALUES (18, 'The division bell',  '1994-6-4', 6, 'CD', 2, 1);



INSERT INTO DISCOS
VALUES (19, 'Script for a jester tear',  '1983-6-14', 1, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (20, 'Fugazi',  '1984-6-12', 1, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (21, 'Misplaced Childhood',  '1986-6-12', 11, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (22, 'The last straw',  '1987-7-14', 5, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (23, 'Seasons end',  '1988-2-21', 6, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (24, 'Holidays in Eden',  '1991-1-16', 7, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (25, 'Brave',  '1994-2-17', 7, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (26, 'Afraid of sunlight',  '1995-11-4', 3, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (27, 'This strange engine',  '1997-3-8', 4, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (28, 'Radiation',  '1998-3-15', 2, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (29, 'Anoraknophobia',  '2001-8-15', 2, 'CD', 3, 3);


INSERT INTO DISCOS
VALUES (30, 'Marbles',  '2004-7-12', 3, 'CD', 3, 3);

INSERT INTO DISCOS
VALUES (65, 'Somewhere else',  '2007-4-9', 2, 'CD', 3, 3);

INSERT INTO DISCOS
VALUES (66, 'Happiness is the Road',  '2008-10-22', 4, 'CD', 3, 3);

INSERT INTO DISCOS
VALUES (67, 'Less is more',  '2009-10-2', 2, 'CD', 3, 3);

INSERT INTO DISCOS
VALUES (68, 'Sounds That Can not Be Made',  '2012-9-17', 4, 'CD', 3, 3);




INSERT INTO DISCOS
VALUES (31, 'In the court of the Crimson King',  '1969-11-11', 2, 'CD', 4, 4);


INSERT INTO DISCOS
VALUES (32, 'In the wake of poseidon',  '1970-10-12', 2, 'CD', 4, 4);


INSERT INTO DISCOS
VALUES (33, 'Islands',  '1971-7-7', 3, 'CD', 4, 4);


INSERT INTO DISCOS
VALUES (34, 'Lizards',  '1970-8-24', 2, 'CD', 4, 4);


INSERT INTO DISCOS
VALUES (35, 'Larks tongues is Aspic',  '1973-2-21', 5, 'CD', 4, 4);


INSERT INTO DISCOS
VALUES (36, 'Starless and bible black',  '1974-7-31', 8, 'CD', 4, 4);


INSERT INTO DISCOS
VALUES (37, 'Red',  '1974-5-4', 4, 'CD', 4, 4);



INSERT INTO DISCOS
VALUES (38, 'Crime of the century',  '1973-3-2', 11, 'CD', 5, 2);


INSERT INTO DISCOS
VALUES (39, 'Crisis. what crisis',  '1975-12-3', 8, 'CD', 5, 2);


INSERT INTO DISCOS
VALUES (40, 'Even in the quietest moments',  '1977-3-12', 11, 'CD', 5, 2);


INSERT INTO DISCOS
VALUES (41, 'Breakfast in America',  '1979-11-12', 16, 'CD', 5, 2);


INSERT INTO DISCOS
VALUES (42, 'Famous last words',  '1983-5-13', 10, 'CD', 5, 2);



INSERT INTO DISCOS
VALUES (43, 'More than a feeling',  '1976-3-12', 4, 'CD', 6, 6);


INSERT INTO DISCOS
VALUES (44, 'Feeling satisfied',  '1977-5-12', 2, 'CD', 6, 6);


INSERT INTO DISCOS
VALUES (45, 'A day in the races',  '1976-1-13', 14, 'CD', 7, 6);


INSERT INTO DISCOS
VALUES (46, 'A night at the opera',  '1977-11-23', 21, 'CD', 7, 6);

INSERT INTO DISCOS
VALUES (47, 'Camel',  '1973-02-15', 1, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (48, 'Mirage',  '1974-3-1', 1, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (49, 'The Snow Goose',  '1975-4-20', 5, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (50, 'Moonmadness',  '1976-3-25', 2, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (51, 'Rain dances',  '1977-9-27', 2, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (52, 'Breathless',  '1978-9-22', 2, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (53, 'I can see your house from here',  '1979-10-29', 2, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (54, 'Nude',  '1981-1-12', 2, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (55, 'The single factor',  '1982-5-6', 2, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (56, 'Stationary traveller',  '1984-08-22', 3, 'LP', 8, 6);

INSERT INTO DISCOS
VALUES (57, 'Dust and dreams',  '1991-5-15', 2, 'CD', 8, 6);

INSERT INTO DISCOS
VALUES (58, 'Habour of tears',  '1996-1-15', 2, 'CD', 8, 6);

INSERT INTO DISCOS
VALUES (59, 'Rajaz',  '1999-10-21', 2, 'CD', 5, 6);

INSERT INTO DISCOS
VALUES (60, 'A nod and a wink',  '1992-7-19', 3, 'CD', 8, 6);

