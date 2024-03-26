USE ckc_kristaps_vasarajs;
CREATE TABLE pasakumi(
datums DATE NOT NULL,
nosaukums VARCHAR(255) NOT NULL,
norises_vieta VARCHAR(255) NOT NULL
) 

INSERT INTO pasakumi (datums, nosaukums, norises_vieta)
VALUES
    ('2024-03-31', 'Lieldienas Cēsīs', 'Rožu laukums'),
    ('2024-04-04', 'Leļļu teātra izrāde "Gangsteromīte"', 'Koncertzāle "Cēsis"'),
    ('2024-07-19', 'Cēsu pilsētas svētki 818', 'Cēsis');


CREATE TABLE kolektivi(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    deju_kolektivi VARCHAR(80) NOT NULL,
    apraksts VARCHAR(500) NOT NULL
    )

    INSERT INTO kolektivi (deju_kolektivi, apraksts) 
VALUES 
('Cēsis', 'Pūtēju orķestris'),
('Raitais solis', 'Tautu deju ansamblis'),
('Vidzeme', 'Jauktais koris'),
('Dzieti', 'Tautas vērtes kopa');