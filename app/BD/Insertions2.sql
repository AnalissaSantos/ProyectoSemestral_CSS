INSERT INTO Paciente (N_CedulaPaciente,N_Seguro_Pac,Nombre_A_Pac,Apellido_A_Pac,Date_Nacimiento_Pac,Email_Pac,N_CedulaAsegurado)
VALUES
  ("2-3471-6797","1-442-437-1554","Tatiana","Gibson","2020-5-3","tatiana5225@google.com","2-1387-1786"),
  ("1-7024-2987","1-142-625-2622","Garrett","Buck","2019-9-5","garrett1562@aol.ca","8-5165-6468"),
  ("6-4864-7147","1-416-664-8446","Uta","Rasmussen","2018-3-23","uta@hotmail.couk","8-2633-5447"),
  ("7-7205-2808","1-360-855-8562","Aaron","Harding","2018-9-10","aaron855@google.couk","1-2600-7766"),
  ("7-7205-2805","1-405-245-5147","Dorothy","Spencer","2020-5-30","dorothy9280@google.ca","3-2622-2846");

INSERT INTO Paciente_Contac (N_CedulaPaciente,Numero_Contac_Pac)
VALUES
  ("2-3471-6797","241-8787"),
  ("1-7024-2987","245-4247"),
  ("6-4864-7147","277-6535"),
  ("7-7205-2808","853-8081"),
  ("7-7205-2805","667-9826");


INSERT INTO Especialidad (Nombre_Espec)
VALUES
    ("Medicina General"),
    ("Cardiología"),
    ("Pediatría"),
    ("Ortopedia"),
    ("Psiquiatría"),
    ("Relleno"),
    ("Oncología"),
    ("Relleno"),
    ("Relleno"),
    ("Odontología"),
    ("Otorrinolaringología");


INSERT INTO Referencia (N_CedulaPaciente,ID_Especialidad,Descripcion_Ref)
VALUES
  ("6-4864-7147",1,"velit in"),
  ("2-3471-6797",2,"urna justo faucibus lectus, a sollicitudin orci sem"),
  ("7-7205-2808",3,"Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis"),
  ("2-3471-6797",3,"et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui"),
  ("2-3471-6797",4,"et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue");


INSERT INTO Policlinica (Nombre_Polic,Ubicacion)
VALUES
  ("Myles Daugherty","788-5156 Nisi Street"),
  ("Roth Norton","Ap #755-3669 Turpis Avenue"),
  ("Eleanor Whitaker","P.O. Box 285, 548 Sagittis Ave"),
  ("Colt York","7465 Egestas. Avenue"),
  ("Nathaniel Golden","481-5325 Semper, St."),
  ("Manuel María Valdés","San Miguelito"),
  ("Dr. Manuel Ferrer Valdés","Rio Abajo"),
  ("Dr. Joaquín José Vallarino","Chorrera"),
  ("Dr. Carlos N  Brin","Tocumen"),
  ("Generoso Guardia","Santa Ana");


INSERT INTO Personal (Nombre_Pers,Apellido_Pers,Cedula_Pers,Email_Pers,Contrasena_Pers)
VALUES
  ("Demetria","Steele","5-6194-1153","demetria@outlook.couk","THV62JLT8SA"),
  ("Raja","Andrews","7-3617-9837","raja@google.edu","NKV75CJT2HU"),
  ("Amanda","Herring","3-5372-9563","amanda@icloud.edu","RGA65JYT1QF"),
  ("Oliver","Scott","7-5172-6127","oliver6280@aol.edu","WCZ35DIY1FD"),
  ("Harrison","Erickson","4-8720-1753","harrison@yahoo.ca","TOO37EHQ4FJ"),
  ("Ana","Saa","8-964-1448","morbi.quis@hotmail.net","BDZ72GWX5NT"),
  ("Renné","Rana","7-3617-9836","vitae.dolor.donec@hotmail.com","YDE81USE6EJ"),
  ("Viktor","Nikifrov","3-5372-9564","id@aol.com","VXP67FNI6YO"),
  ("Shoto","Todoroki","7-5172-6122","at@google.com","YDX88IIJ4LN"),
  ("Margareth","Peacock","4-8720-1758","arcu.eu@google.org","YOV61YHZ5DC"),
  ("José","Méndez","0-000-000","admin@admin","1234567");

INSERT INTO Doctor (ID_Doctor,ID_Personal,ID_Polic,ID_Especialidad)
VALUES
  ("37fj",1,2,2),
  ("18ko",2,3,1),
  ("50ie",3,1,5),
  ("37fg",6,6,7),
  ("17do",9,9,10),
  ("19wo",10,10,11);

INSERT INTO Cita_Estado (Nombre_Cita_Est)
VALUES
  ("Pendiente"),
  ("Confirmada"),
  ("Cancelada");

insert into CitaWebDB.Cita (Fecha_Cita, Is_Control, hora_cita, ID_Personal, ID_Especialidad, N_CedulaPaciente, ID_Estado_Cita, ID_Polic)
values  ('2022-11-17', 0, '17:00:00', 1, 2, '2-3471-6797', 2, 6),
        ('2022-07-22', 1, '07:00:00', 2, 1, '1-7024-2987', 1, 10),
        ('2021-11-26', 1, '14:00:00', 2, 1, '1-7024-2987', 1, 9),
        ('2021-05-02', 0, '13:15:00', 2, 1, '1-7024-2987', 1, 7),
        ('2021-12-25', 0, '23:05:00', 6, 6, '1-7024-2987', 1, 7),
        ('2021-12-24', 0, '08:12:00', 6, 6, '1-7024-2987', 1, 8);