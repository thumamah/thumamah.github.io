
// sql table .

create table cars(
    make varchar(256) not null,
    model ENUM('Camri', 'Corolla', 'Estima', 'Micra', 'roller', 'fushe', '5series', 'x7', 'x5'),
    VIN varchar(256) not null,
    Manufacture_Year int(11) not null,
    Engine_Size int(11) not null,
    Transmission_Type ENUM('Automatic', 'Manual', 'Semi-Automatic'),
    NoOfSeats int(11) not null,
    NoOfDoors int(11) not null,
    Fuel_Type varchar(256) not null,
    Colour varchar(256) not null,
    Registration_Number varchar(256) not null,
    DateOfRegestration Date not null,
    PRIMARY KEY (VIN)
);
