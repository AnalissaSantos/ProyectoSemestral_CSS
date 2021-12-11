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
  ("Psiquiatría");


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
  ("Nathaniel Golden","481-5325 Semper, St.");


INSERT INTO Personal (Nombre_Pers,Apellido_Pers,Cedula_Pers,Email_Pers,Contrasena_Pers)
VALUES
  ("Demetria","Steele","5-6194-1153","demetria@outlook.couk","THV62JLT8SA"),
  ("Raja","Andrews","7-3617-9837","raja@google.edu","NKV75CJT2HU"),
  ("Amanda","Herring","3-5372-9563","amanda@icloud.edu","RGA65JYT1QF"),
  ("Oliver","Scott","7-5172-6127","oliver6280@aol.edu","WCZ35DIY1FD"),
  ("Harrison","Erickson","4-8720-1753","harrison@yahoo.ca","TOO37EHQ4FJ");

INSERT INTO Doctor (ID_Doctor,ID_Personal,ID_Polic,ID_Especialidad)
VALUES
  ("37fj",1,2,2),
  ("18ko",2,3,1),
  ("50ie",3,1,5);

INSERT INTO Cita_Estado (Nombre_Cita_Est)
VALUES
  ("Pendiente"),
  ("Confirmada"),
  ("Cancelada");

INSERT INTO Cita (ID_Especialidad,N_CedulaPaciente,ID_Estado_Cita,Fecha_Cita,Is_Control,hora_cita,ID_Personal)
VALUES
  (2,"2-3471-6797",2,"2022-11-17",0,"17:00",1),
  (1,"1-7024-2987",1,"2022-7-22",1,"7:00",2),
  (1,"1-7024-2987",1,"2021-11-26",1,"14:00",2),
  (5,"6-4864-7147",3,"2022-8-12",0,"10:00",3),
  (1,"1-7024-2987",1,"2021-5-2",0,"13:15",2);