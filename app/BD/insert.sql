INSERT INTO Especialidad (Nombre_Espec)
VALUES
    ("Medicina General"),
    ("Oncología"),
    ("Pediatría"),
    ("Cardiología"),
    ("Odontología"),
    ("Otorrinolaringología");


INSERT INTO Policlinica (Nombre_Polic,Ubicacion)
VALUES
    ("Manuel María Valdés","San Miguelito"),
    ("Dr. Manuel Ferrer Valdés","Rio Abajo"),
    ("Dr. Joaquín José Vallarino","Chorrera"),
    ("Dr. Carlos N  Brin","Tocumen"),
    ("Generoso Guardia","Santa Ana");

INSERT INTO Personal (Nombre_Pers,Apellido_Pers,Cedula_Pers,Email_Pers,Contrasena_Pers)
VALUES
    ("Ana","Saa","8-964-1448","morbi.quis@hotmail.net","BDZ72GWX5NT"),
    ("Renné","Rana","7-3617-9836","vitae.dolor.donec@hotmail.com","YDE81USE6EJ"),
    ("Viktor","Nikifrov","3-5372-9564","id@aol.com","VXP67FNI6YO"),
    ("Shoto","Todoroki","7-5172-6122","at@google.com","YDX88IIJ4LN"),
    ("Margareth","Peacock","4-8720-1758","arcu.eu@google.org","YOV61YHZ5DC");

INSERT INTO Doctor (ID_Doctor,ID_Personal,ID_Polic,ID_Especialidad)
VALUES
    ("37fg",6,6,7),
    ("18ao",7,7,8),
    ("50bc",8,8,9),
    ("17do",9,9,10),
    ("19wo",10,10,11);