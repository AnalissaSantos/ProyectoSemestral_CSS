CREATE DATABASE CitaWebDB;

use CitaWebDB

CREATE TABLE Paciente (
    N_CedulaPaciente VARCHAR(20) NOT NULL,
    N_Seguro_Pac VARCHAR(20),
    Nombre_A_Pac VARCHAR(30) NOT NULL,
    Nombre_B_Pac VARCHAR(30),
    Apellido_A_Pac VARCHAR(30) NOT NULL ,
    Apellido_B_Pac VARCHAR(30),
    Date_Nacimiento_Pac DATE NOT NULL,
    Email_Pac VARCHAR(30) NOT NULL,
#     --Constrasena_Pac VARCHAR(30) NOT NULL, --va contraseña? --no va
    N_CedulaAsegurado VARCHAR(20) NOT NULL,

    CONSTRAINT Pac_Ced_PK
        PRIMARY KEY (N_CedulaPaciente)

);

CREATE TABLE Paciente_Contac(
    N_CedulaPaciente VARCHAR(20) NOT NULL,
        CONSTRAINT N_CedulaPaciente_fk
            FOREIGN KEY (N_CedulaPaciente) -- primary
            REFERENCES Paciente (N_CedulaPaciente),
    ID_ContacNum_Pac integer not null auto_increment,
    Numero_Contac_Pac VARCHAR(12) NOT NULL,

#   Keys
    CONSTRAINT ID_ContacNum_Pac_N_CedulaPaciente_PK
        PRIMARY KEY (ID_ContacNum_Pac, N_CedulaPaciente)

);

CREATE TABLE Especialidad(
    ID_Especialidad INTEGER NOT NULL auto_increment,
    Nombre_Espec VARCHAR(40) NOT NULL,
#     Keys
    CONSTRAINT Espec_ID_PK PRIMARY KEY (ID_Especialidad)
);

CREATE TABLE Referencia(
    N_Referencia INTEGER NOT NULL auto_increment,
    N_CedulaPaciente VARCHAR(20) NOT NULL,
    ID_Especialidad INTEGER NOT NULL,
    Descripcion_Ref LONGTEXT,
#     Keys
    CONSTRAINT Ref_NRef_PK PRIMARY KEY (N_Referencia),
    CONSTRAINT Ref_Pac_NCed_FK FOREIGN KEY (N_CedulaPaciente)
        REFERENCES Paciente(N_CedulaPaciente),
    CONSTRAINT Ref_Espec_IDEspec_FK FOREIGN KEY (ID_Especialidad)
        REFERENCES Especialidad (ID_Especialidad)
        ON DELETE CASCADE
        ON UPDATE CASCADE
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


CREATE TABLE Doctor(
    ID_Doctor VARCHAR(12) NOT NULL,
    ID_Personal INTEGER NOT NULL,
        CONSTRAINT Doctor_ID_Personal_FK FOREIGN KEY (ID_Personal)
            REFERENCES Personal (ID_Personal),
    ID_Polic INTEGER NOT NULL,
        FOREIGN KEY (ID_Polic) references Policlinica(ID_Polic)
            ON DELETE CASCADE
            ON UPDATE CASCADE,
    ID_Especialidad INTEGER NOT NULL,
        CONSTRAINT Doctor_ID_Especialidad_FK
            FOREIGN KEY (ID_Especialidad)
                references Especialidad (ID_Especialidad)
                ON DELETE CASCADE
                ON UPDATE CASCADE,

    CONSTRAINT ID_Personal PRIMARY KEY (ID_Personal)
);

CREATE TABLE Cita_Estado(
    ID_Estado_Cita INTEGER NOT NULL AUTO_INCREMENT,
        CONSTRAINT Cita_ID_Estado_Cita_PK
            PRIMARY KEY (ID_Estado_Cita),
    Nombre_Cita_Est VARCHAR(12) NOT NULL/*--atendido, cancelado,*/
#   Keys

);

CREATE TABLE Cita(
    N_Cita INTEGER NOT NULL AUTO_INCREMENT,
    Fecha_Cita DATE NOT NULL,
    Is_Control BOOLEAN NOT NULL,
    hora_cita time not null,
    ID_Personal INTEGER NOT NULL,
        CONSTRAINT Cita_Doct_ID_FK FOREIGN KEY (ID_Personal)
                REFERENCES Doctor(ID_Personal),/* --doctor*/
    ID_Especialidad INTEGER NOT NULL,
        CONSTRAINT Cita_ID_Especialidad_FK FOREIGN KEY (ID_Especialidad)
                REFERENCES Especialidad(ID_Especialidad)
                ON DELETE CASCADE
                ON UPDATE CASCADE,
    N_CedulaPaciente VARCHAR(20) NOT NULL,
        CONSTRAINT Cita_N_CedulaPaciente_fk FOREIGN KEY (N_CedulaPaciente)
                REFERENCES Paciente(N_CedulaPaciente),
    ID_Estado_Cita INTEGER NOT NULL,
        CONSTRAINT Cita_ID_Estado_Cita_FK FOREIGN KEY (ID_Estado_Cita)
                REFERENCES Cita_Estado (ID_Estado_Cita),

#   Keys
    CONSTRAINT Cita_PK PRIMARY KEY (N_Cita, ID_Personal, N_CedulaPaciente)
);