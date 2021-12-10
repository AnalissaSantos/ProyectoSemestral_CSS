CREATE DATABASE CitaWebDB;

CREATE TABLE Paciente (
    N_CedulaAsegurado VARCHAR(20) NOT NULL,
    N_CedulaPaciente VARCHAR(20) NOT NULL,
    N_Seguro_Pac VARCHAR(20),
    Nombre_A_Pac VARCHAR(30) NOT NULL,
    Nombre_B_Pac VARCHAR(30),
    Apellido_A_Pac VARCHAR(30) NOT NULL ,
    Apellido_B_Pac VARCHAR(30),
    Date_Nacimiento_Pac DATE NOT NULL,
    Email_Pac VARCHAR(30) NOT NULL,
    Constrasena_Pac VARCHAR(30) NOT NULL,

    CONSTRAINT Pac_Ced_PK PRIMARY KEY (N_CedulaAsegurado)

);

CREATE TABLE Paciente_Contac(
    N_CedulaAsegurado VARCHAR(20) NOT NULL,
    ID_ContacNum_Pac INTEGER NOT NULL AUTO_INCREMENT,
    Etiqueta_Contac_Pac VARCHAR(12) NOT NULL,
    Numero_Contac_Pac VARCHAR(12) NOT NULL,
#   Keys
    PRIMARY KEY (ID_ContacNum_Pac),
    FOREIGN KEY (N_CedulaAsegurado)
        REFERENCES Paciente(N_CedulaAsegurado)
);

CREATE TABLE Especialidad(
    ID_Especialidad INTEGER NOT NULL auto_increment,
    Nombre_Espec VARCHAR(40) NOT NULL,
#     Keys
    CONSTRAINT Espec_ID_PK PRIMARY KEY (ID_Especialidad)
);

CREATE TABLE Referencia(
    N_Referencia INTEGER NOT NULL auto_increment,
    N_CedulaAsegurado VARCHAR(20) NOT NULL,
    ID_Especialidad INTEGER NOT NULL,
    Descripcion_Ref LONGTEXT,
#     Keys
    CONSTRAINT Ref_NRef_PK PRIMARY KEY (N_Referencia),
    CONSTRAINT Ref_Pac_NCed_FK FOREIGN KEY (N_CedulaAsegurado)
        REFERENCES Paciente(N_CedulaAsegurado),
    CONSTRAINT Ref_Espec_IDEspec_FK FOREIGN KEY (ID_Especialidad)
        REFERENCES Especialidad (ID_Especialidad)
);
# Policlinicas
#
CREATE TABLE Policlinica(
    ID_Polic INTEGER NOT NULL auto_increment,
    Nombre_Polic VARCHAR(30),
    Ubicacion VARCHAR(50) NOT NULL,
#   keys
    PRIMARY KEY (ID_Polic)
);

CREATE TABLE Policlinica_Horario(
    ID_Horario_Polic INTEGER NOT NULL auto_increment,
    ID_Polic INTEGER NOT NULL,
    Nombre_Dia VARCHAR(12),
    Horas_Hora VARCHAR(30) NOT NULL,

    PRIMARY KEY (ID_Horario_Polic),
    FOREIGN KEY (ID_Polic) REFERENCES Policlinica(ID_Polic)
);
# PERSONAL------------------------------------------------------

CREATE TABLE Personal(
    ID_Personal INTEGER NOT NULL auto_increment,
    Nombre_Pers VARCHAR(20) NOT NULL,
    Apellido_Pers VARCHAR(20) NOT NULL,
    Apellido_PersB VARCHAR(20),
    Cedula_Pers VARCHAR(30) NOT NULL,
    Email_Pers VARCHAR(30) NOT NULL,
    Contrasena_Pers VARCHAR(30) NOT NULL,

    CONSTRAINT Pers_ID_PK PRIMARY KEY (ID_Personal)
);

# CREATE TABLE Administrador(
#     ID_Personal INTEGER NOT NULL auto_increment,
# #     Keys
#     CONSTRAINT Adm_Pers_IDPer_FK FOREIGN KEY (ID_Personal)
#         REFERENCES Personal(ID_Personal),
#     CONSTRAINT Adm_IDAdm_PK PRIMARY KEY (ID_Personal)
# );

CREATE TABLE Doctor(
    ID_Doctor VARCHAR(12) NOT NULL,
    ID_Personal INTEGER NOT NULL,
    ID_Polic INTEGER NOT NULL,
    FOREIGN KEY (ID_Polic) references Policlinica(ID_Polic),
    CONSTRAINT Doc_Pers_IDPers_FK FOREIGN KEY (ID_Personal)
                   REFERENCES Personal (ID_Personal),
    CONSTRAINT Doct_PK PRIMARY KEY (ID_Doctor,ID_Personal)
);

CREATE TABLE Cita_Estado(
    ID_Estado_Cita INTEGER NOT NULL AUTO_INCREMENT,
    Nombre_Cita_Est VARCHAR(12) NOT NULL,
#    atendido, cancelado,
#   Keys
    CONSTRAINT Cita_Est_PK PRIMARY KEY (ID_Estado_Cita)
);

CREATE TABLE Cita(
    N_Cita INTEGER NOT NULL AUTO_INCREMENT,
    ID_Doctor VARCHAR(12) NOT NULL,
    ID_Especialidad INTEGER NOT NULL,
    N_CedulaAsegurado VARCHAR(20) NOT NULL,
    ID_Estado_Cita INTEGER NOT NULL,
    Fecha_Cita DATE NOT NULL,
    Is_Control BOOLEAN NOT NULL,
#   Keys
    CONSTRAINT Cita_Doct_ID_FK FOREIGN KEY (ID_Doctor)
                REFERENCES Doctor(ID_Doctor),
    CONSTRAINT Cita_Espec_CitaID_FK FOREIGN KEY (ID_Especialidad)
                REFERENCES Especialidad(ID_Especialidad),
    CONSTRAINT Cita_Pac_NumCed_FK FOREIGN KEY (N_CedulaAsegurado)
                REFERENCES Paciente(N_CedulaAsegurado),
    CONSTRAINT Cita_CitaEst_ID_FK FOREIGN KEY (ID_Estado_Cita)
                REFERENCES Cita_Estado (ID_Estado_Cita),
    CONSTRAINT Cita_PK PRIMARY KEY (N_Cita,ID_Doctor,N_CedulaAsegurado)
);