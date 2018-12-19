USE monProjetPro;

INSERT INTO `monProjetPro`.`userTypes` (`userType`) 
  VALUES 
  ('admin'),
  ('artist'), 
  ('client');
  
INSERT INTO `monProjetPro`.`specialities` (`speciality`) 
  VALUES 
  ('multisupport'),
  ('painter'), 
  ('drawer'),
  ('sculptor'),
  ('photographer'),
  ('street artist');
  
INSERT INTO `monProjetPro`.`Users` (`nickName`, `lastName`, `firstName`, `password`, `mail`, `id_userTypes`)
  VALUES
  ('jonjon76', 'Lebourg', 'Jonathan', 'admin', 'jonjon76@hotmail.fr', 1),
  ('JON', 'Lebourg', 'Jonathan', 'artist', 'jonjon76@hotmail.fr', 2),
  ('JONer', 'Lebourg', 'Jonathan', 'client', 'jonjon76@hotmail.fr', 3);
  

  
