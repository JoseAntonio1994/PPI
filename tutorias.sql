create table if not exists 'horario' {
  idTutorias int not null,
  HoraLunes time null,
  HoraMartes time null,
  HoraMiercoles time null,
  HoraJueves time null,
  HoraViernes time null,
  primary key (idHorario)
}

create table if not exists 'tutorias' {
  idGrupoTutorias int not null,
  Valor float not null,
  Docente_idDocente int not null,
  Aula varchar(45) not null,
  FechaInicio date not null,
  CicloEscolar enum(1, 2) not null,
  Semanas int not null,
  HorasACubrir int not null,
  Horario_idHorario int not null,
  Estado enum(1, 2, 3) not null,
  Faltas int not null,
  FechaRegistro date not null,
  LetraGrupo char not null,
  primary key (idGrupoTutorias),
  index fk_Tutorias_Docente1_idx ('Docente_idDocente',ASC),
  index fk_Tutorias_Horario1_idx ('Horario_idHorario', ASC),
  constraint fk_Tutorias_Docente1 
  foreign key (Docente_idDocente)
  references Docente (idDocente)
  on delete no action
  on update no action,
  constraint fk_Tutorias_Horario1 
  foreign key (Horario_idHorario)
  references Horario (idHorario)
  on delete no action
  on update no action,
  engine = innoDB;
}