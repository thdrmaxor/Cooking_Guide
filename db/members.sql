create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    regist_day char(20),
    primary key(num)
);
ALTER TABLE members ADD aged INT(11) NOT NULL AFTER regist_day,
ADD genderd CHAR(15) NOT NULL AFTER aged,
ADD Energy INT(11) NOT NULL AFTER genderd,
ADD Water INT(11) NOT NULL AFTER Energy,
ADD Protein INT(11) NOT NULL AFTER Water, 
ADD Fat INT(11) NOT NULL AFTER Protein, 
ADD Carbohydrate INT(11) NOT NULL AFTER Fat, ADD Total_sugars INT(11) NOT NULL AFTER Carbohydrate, 
ADD Total_Dietary_Fiber INT(11) NOT NULL AFTER Total_sugars, 
ADD Sodium INT(11) NOT NULL AFTER Total_Dietary_Fiber, 
ADD Total_Ascorbic_Acid INT(11) NOT NULL AFTER Sodium, 
ADD Sum_of_19_amino_acids INT(11) NOT NULL AFTER Total_Ascorbic_Acid, 
ADD Cholesterol INT(11) NOT NULL AFTER Sum_of_19_amino_acids, 
ADD Trans_fatty_acid INT(11) NOT NULL AFTER Cholesterol;